<?php
/**
 * Created by PhpStorm.
 * User: wodrow
 * Date: 17-6-13
 * Time: 下午1:36
 */

namespace console\controllers;


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
                'line' => '* * * * *  php /var/www/testY2/yii test'
            ],
        ]);
        $cronTab->apply();
        $cronTab->removeAll();
//        $jobs = $cronTab->getJobs();
//        var_dump($jobs);
    }

    public function actionTest1()
    {
        echo DbHelper::tableTasksSql().";\n";
        echo DbHelper::tableTaskRunsSql().";\n";
        echo DbHelper::getReportSql().";\n";
    }
}