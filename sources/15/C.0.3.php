public function actionEventCalendar($start=NULL,$end=NULL,$_=NULL){
    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

    $model= \app\models\Event::find()->all();
    if(!empty($start) and !empty($end)){
        $model= \app\models\Event::find()
            ->where(['>=','start',date('Y-m-d 00:00:01',strtotime($start))])
            ->andWhere(['<=','end',date('Y-m-d 23:59:59',strtotime($end))])
            ->all();
    }

    $events = [];
    foreach ($model as $event) {
        $events[]=[
            'title'=>$event->title,
            'start'=>date('Y-m-d 00:00:01',strtotime($event->start)),
            'end'=>date('Y-m-d 23:59:59', strtotime($event->end)),
            //'color'=>'#CC0000',
            //'allDay'=>true,
            //'url'=>'http://anyurl.com'
        ];
    }
    return $events;
}
