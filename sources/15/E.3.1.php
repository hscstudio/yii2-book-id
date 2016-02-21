$font = Yii::getAlias('@vendor').'/imagine/imagine/tests/Imagine/Fixtures/font/Arial.ttf';
$image = Image::text('@app/uploads/btn1-120x90.png', 'TESTING',$font,[5,5],[
    'size' => 12, 'color' => '000', 'angle' => 0
]);
$image->save(Yii::getAlias('@app/uploads/text-btn1-120x90.png'), ['quality' => 50]);
