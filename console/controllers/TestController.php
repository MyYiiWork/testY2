<?php
/**
 * Created by PhpStorm.
 * User: wodrow
 * Date: 17-6-13
 * Time: 下午1:36
 */

namespace console\controllers;


use common\models\tables\Test;
use mult1mate\crontab\DbHelper;
use yii\console\Controller;
use yii\helpers\FileHelper;
use yii2tech\crontab\CronTab;

class TestController extends Controller
{
    public function actionIndex()
    {
        FileHelper::createDirectory('/var/www/testY2/console/runtime/tmp/'.time());
    }

    public function actionTest()
    {
        $cronTab = new CronTab();
        $cronTab->setJobs([
            [
                'line' => '* * * * *  php '.\Yii::getAlias('@project').'/yii test'
            ],
        ]);
        $cronTab->apply();
//        $cronTab->removeAll();
//        $jobs = $cronTab->getJobs();
//        var_dump($jobs);
    }

    public function actionTest1()
    {
        echo DbHelper::tableTasksSql().";\n";
        echo DbHelper::tableTaskRunsSql().";\n";
        echo DbHelper::getReportSql().";\n";
    }

    public function actionTest2()
    {
        $test = Test::findOne(['id'=>1]);
//        var_dump($test);
//        $test = new Test();
        $test->name = "time_".time();
        $test->save();
    }

    public function actionTest3()
    {}
}