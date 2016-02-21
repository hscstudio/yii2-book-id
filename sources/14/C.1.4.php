'urlManager' => [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        [
            'class' => 'yii\rest\UrlRule',
            'pluralize' => false,
            'controller' => 'employee-rest'
        ],
    ],
],
