echo Highcharts::widget([
    'options' => [
        ...
        'series' => [
            ...
        ],
        'plotOptions' => [
            'line' => [
                'dataLabels' => [
                    'enabled' => true,
                ],
            ],
        ],
    ],
]);
