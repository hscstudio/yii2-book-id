<?php
use miloschuman\highcharts\Highcharts;
echo "<h1>Dynamic Chart</h1>";
echo Highcharts::widget([
    'options' => [
        'chart' => ['type' => 'column'],
        'title' => ['text' => 'PHP Framework Survey Result'],
        'xAxis' => [
            'categories' => $years
        ],
        'yAxis' => [
            'title' => ['text' => 'Usage (thousand)']
        ],
        'series' => $series,
        'plotOptions' => [
            'column' => [
                'dataLabels' => [
                    'enabled' => true,
                ],
            ],
        ],
    ],
]);
