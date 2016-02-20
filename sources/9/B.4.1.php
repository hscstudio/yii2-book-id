use hscstudio\chart\ChartNew;
echo ChartNew::widget([
    'type'=>'bar', # pie, doughnut, line, bar, horizontalBar, radar, polar, stackedBar, polarArea
    'title'=>'PHP Framework',
    'labels'=>['Yii','Laravel','CI','Symfony'],
    'datasets' => [
        ['title'=>'2014','data'=>[35,45,15,5]],
        ['title'=>'2015','data'=>[45,35,5,15]],
    ],
]);
