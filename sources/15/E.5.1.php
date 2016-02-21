$imagine = Image::getImagine();
$image = $imagine->open(Yii::getAlias('@app').'/uploads/golang.png');
$image->effects()->grayscale();
$image->save(Yii::getAlias('@app/uploads/grayscale.png'), ['quality' => 50]);
