<?php
/**
 * Created by PhpStorm.
 * User: wodrow
 * Date: 17-6-14
 * Time: 下午4:28
 */

namespace frontend\modules\test\controllers;


use yii\web\Controller;

class TestController extends Controller
{
    public function actionTest()
    {
        $user = \Yii::$app->user->identity;
        return $this->render('test');
    }
}