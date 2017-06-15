<?php
/**
 * Created by PhpStorm.
 * User: wodrow
 * Date: 17-6-14
 * Time: 下午4:28
 */
?>

<?=Yii::$app->settings->get('test.k'); ?>

<?php
echo \wbraganca\videojs\VideoJsWidget::widget([
    'options' => [
        'class' => 'video-js vjs-default-skin vjs-big-play-centered',
//        'poster' => "http://www.videojs.com/img/poster.jpg",
        'controls' => true,
        'preload' => 'auto',
        'width' => '970',
        'height' => '400',
        'data' => [
            'setup' => [
//                'autoplay' => true,
                'techOrder' =>['flash', 'html5']
            ],
        ],
    ],
    'tags' => [
        'source' => [
            [
                'src' => 'http://7xsbq6.com1.z0.glb.clouddn.com/test1.mp4',
                'type' => 'video/mp4'
            ],
//            ['src' => 'http://vjs.zencdn.net/v/oceans.webm', 'type' => 'video/webm'],
        ],
        /*'track' => [
            [
                'kind' => 'captions',
                'src' => 'http://vjs.zencdn.net/vtt/captions.vtt',
                'srclang' => 'en',
                'label' => 'English'
            ]
        ]*/
    ]
]);
?>