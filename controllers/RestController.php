<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;

class RestController extends Controller{
    
     public function actionView(){
           return $this->render('view');
     }
}