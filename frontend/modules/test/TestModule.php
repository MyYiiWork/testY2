<?php
/**
 * Created by PhpStorm.
 * User: wodrow
 * Date: 17-6-14
 * Time: 下午4:32
 */

namespace frontend\modules\test;


use yii\base\Module;

class TestModule extends Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'frontend\modules\test\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}