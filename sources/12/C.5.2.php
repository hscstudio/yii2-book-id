'as access' => [
     'class' => '\hscstudio\mimin\components\AccessControl',
     'allowActions' => [
        // add wildcard allowed action here!
        'site/*',
        'debug/*',
        'mimin/*', // only in dev mode
    ],
],
...,
'modules' => [
    'mimin' => [
        'class' => '\hscstudio\mimin\Module',
    ],
    ...
],
'components' => [
    'authManager' => [
        'class' => 'yii\rbac\DbManager', // only support DbManager
    ],
    ...
],
