$base = '@app/uploads/med-rect-300x250.png';
$watermark = '@app/uploads/golang.png';
$image = Image::watermark($base,$watermark,[25,25]);
$image->save(Yii::getAlias('@app/uploads/watermark.png'), ['quality' => 50]);
