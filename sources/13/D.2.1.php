echo Highcharts::widget([
    'options' => [
        'chart' => ['type' => 'column'],
        'title' => ['text' => 'PHP Framework Survey Result'],
        'xAxis' => [
            'categories' => ['2014', '2015']
        ],
        'yAxis' => [
            'title' => ['text' => 'Usage (thousand)']
        ],
        'series' => [,
            ['name' => 'Code Igniter', 'data' => [90,85]],
            ['name' => 'Laravel', 'data' => [75,95]],
            ['name' => 'Symfony', 'data' => [40,70]],
            ['name' => 'Yii', 'data' => [60,80]],
        ],
        'plotOptions' => [
            'column' => [
                'dataLabels' => [
                    'enabled' => true,
                ],
            ],
        ],
    ],
]);
