foreach($model3 as $file){
    echo Html::img(Yii::getAlias('@web').'/uploads/'.$file->image,[
        'class'=>'img-thumbnail','style'=>'float:left;width:150px;'
    ]);
}
