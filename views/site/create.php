<?php
// Vista de creacion de alumnos

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>

<h1>Crear Alumno</h1>
<h3><?= $msg ?></h3>
<?php $form = ActiveForm::begin([
    "method" => "post",
 'enableClientValidation' => true,
]);
?>
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
    <?= Html::submitButton("Crear", ["class" => "btn btn-primary"]) ?>
</div>
<?php $form->end() ?>