use \yii\imagine\Image;
$image = Image::thumbnail('@app/uploads/btn1-120x90.png', 60, 45);
$image->save(Yii::getAlias('@app/uploads/thumb-btn1-120x90.png'), ['quality' => 50]);
