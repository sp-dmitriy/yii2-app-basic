<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Request;

class WlController extends Controller
{

    public function actionCallback()
    {
        $request = Yii::$app->request;
        $query = '';
        if ($request->isGet)  { 
            $query = $request->queryString;
        }
        return $this->render('callback' , ['query' => $query]);
    }
  
}
