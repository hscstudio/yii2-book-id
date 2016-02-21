use \yii\imagine\Image;

// crop ($filename,$width,$height, array $start = [0, 0] )
$image = Image::crop('@app/uploads/btn1-120x90.png', 60, 45, [5,5]);
$image->save(Yii::getAlias('@app/uploads/crop-btn1-120x90.png'), ['quality' => 50]);
