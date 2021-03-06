<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'site/index' => 'site/index',
                'contactanos' => 'site/contactanos',
                'nosotros' => 'site/nosotros',
                'clases-virtuales/centros-educativos' => 'clases-virtuales/centros-educativos',
                'clases-virtuales/direcciones-zonales' => 'clases-virtuales/direcciones-zonales',
                'clases-virtuales/distritos' => 'clases-virtuales/distritos',
                'clases-virtuales/curso/<curso>' => 'clases-virtuales/curso',
                'clases-virtuales/<slug>' => 'clases-virtuales/slug',
                'defaultRoute' => '/site/index',
            ], 
        ],
        
    ],
    'params' => $params,
];
