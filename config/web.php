<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'WEsRl7srQajvaDqry_TOmGbcgW08l-KP',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'i18N' => ['translations' => [
						'app*' => [
							'class' => 'yii\i18n\PhpMessageSource',
							'fileMap' => [
								'app' => 'app.php'
								],
							],
						], 
					'class' => 'yii\i18n\PhpMessageSource'
		],
		
		
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
			//to send emails uncomment transport
			/*'transport' => [
                  'class' => 'Swift_SmtpTransport',
                  'host' => 'localhost',
                  'username' => 'username',
                  'password' => 'password',
                  'port' => '587',
                  'encryption' => 'tls',
              ],*/
            'useFileTransport' => true,
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
        'db' => $db,
		
		/*
		'urlManager' => [
		'enablePrettyUrl' => true,
		'showScriptName' => false,
		//'class'=>'frontend\components\LangUrlManager',
		'rules'=>[
			'/' => 'site/index',
			'<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',
		]
		],
        
        /*'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
            ],
        ],*/
        
    ],
	
	// set target language to be Russian
	//'language' => ['ru-RU', 'tk-TKM'],
	// set source language to be English
	//'sourceLanguage' => 'en-US',

    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
