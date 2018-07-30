<!-- El consumo de la api se desarrollo en Jquery, se debe visitar el archivo rest.js para ver el llamado  -->
<?php $this->registerJsFile(Yii::$app->request->baseUrl.'/js/rest/rest.js', ['depends' => [yii\web\JqueryAsset::className()]]); ?> 

<h1>REST/API</h1>
<p>A continuacion se muestra el consumo de la API signature-iofacturo, en este punto se estan renderizando los barrios de un distrito, para consultar la respuesta de la app  presione click <a href="https://signature-iofacturo-bac.azurewebsites.net/Emission/BarriosByDistrito?DistritoId=10203">Aqui</a> </p>
<p style="color:red;">Si ud se encuentra en un ambiente local ejemplo http://localhost, debe tener activas las validaciones CORS, si no sabe como, una salida es descargar este complemento para google chrome y activarlo <a href="https://chrome.google.com/webstore/detail/allow-control-allow-origi/nlfbmbojpeacfghkpbjhddihlkkiljbi" target="self">Descargue y active complemento aqui</a> ya que sin este por cuestiones de seguridad la API no responde resultados</p>

<table id="records_table" border='1' class="table table-bordered">
    <tr>
        <th align="center" width="50">Id</th>
        <th align="center" width="100">Name</th>
    </tr>
</table>