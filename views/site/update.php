<?php
// Vista de actualizacion de alumnos

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>

<a href="<?= Url::toRoute("site/view") ?>">Ir a la lista de alumnos</a>

<h1>Editar alumno con id <?= Html::encode($_GET["id_alumno"]) ?></h1>

<h3><?= $msg ?></h3>



<?php
// creacion de formulario de actualizacion con validacion de formulario
$form = ActiveForm::begin([
    "method" => "post",
    'enableClientValidation' => true,
]);
?>

<?= $form->field($model, "id_alumno")->input("hidden")->label(false) ?>

<div class="form-group">
 <?= $form->field($model, "nombre")->input("text") ?>   
</div>

<div class="form-group">
 <?= $form->field($model, "apellidos")->input("text") ?>   
</div>

<div class="form-group">
 <?= $form->field($model, "clase")->input("text") ?>   
</div>

<div class="form-group">
 <?= $form->field($model, "nota_final")->input("text") ?>   
</div>
<div class="col-md-1">
<a href="<?= Url::toRoute("site/view") ?>" class="btn btn-default">Atras</a>
</div>
<div class="col-md-1">
<?= Html::submitButton("Actualizar", ["class" => "btn btn-primary"]) ?>
</div>
<?php $form->end() ?>