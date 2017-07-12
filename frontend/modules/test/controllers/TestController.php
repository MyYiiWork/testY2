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

    public function actionTest1()
    {
        $dir = \Yii::getAlias('@data/vedio/test');
        $o_file = $dir."/test.avi";
        $n_file = $dir."/test.webm";
        $cmd = "ffmpeg -i {$o_file} {$n_file}";
        $str = exec($cmd, $out, $arr);
        var_dump($cmd);
        var_dump($str);
        var_dump($out);
        var_dump($arr);
    }
}