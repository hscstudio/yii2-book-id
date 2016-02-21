echo Highcharts::widget([
    'scripts' => [
        'modules/drilldown',
        'modules/exporting',
    ],
    'options' => [
        'chart' => [
           'type' => 'column',
        ],
        'title' => ['text' => 'PHP Framework'],
        'xAxis' => [
            'type' => 'category'
        ],
        'series' => [
            ['name' => 'Usage','data' => [
                ['name' => 'Laravel', 'y' => 36,'drilldown' => 'laravel'],
                ['name' => 'Symfony', 'y' => 17,'drilldown' => 'symfony'],
                ['name' => 'Yii', 'y' => 30,'drilldown' => 'yii'],
            ]],
        ],
        'drilldown' => [
            'series' => [
                ['id' => 'laravel','name' => 'Laravel', 'data' => [['USA', 13],['Rusia', 9],['Indonesia', 9],['Jerman', 5]]],
                ['id' => 'symfony','name' => 'Symfony', 'data' => [['USA', 5],['Rusia', 6],['Indonesia', 3],['Jerman', 3]]],
                ['id' => 'yii','name' => 'Yii', 'data' => [['USA', 3],['Rusia', 15],['Indonesia', 6],['Jerman', 6]]],
            ],
        ],
    ],
]);
