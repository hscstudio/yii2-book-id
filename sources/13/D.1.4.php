<?php
use miloschuman\highcharts\Highcharts;
echo "<h1>Sample Highchart</h1>";
echo Highcharts::widget([
    'options' => [
        'title' => ['text' => 'Fruit Consumption'],
        'xAxis' => [
            'categories' => ['Apples', 'Bananas', 'Oranges']
        ],
        'yAxis' => [
            'title' => ['text' => 'Fruit eaten']
        ],
        'series' => [
            ['name' => 'Jane', 'data' => [1, 0, 4]],
            ['name' => 'John', 'data' => [5, 7, 3]]
        ]
    ]
]);
