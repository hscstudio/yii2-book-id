[['photo'], 'file', 'extensions' => 'png, jpg', 'maxSize' => 1024*1024],

[['photo'], 'file', 'extensions' => 'png, jpg', 
	'maxSize' => 1024*1024,
    'mimeTypes' => 'image/jpeg, image/png',
],

['photo', 'image', 'extensions' => ['png', 'jpg'],
    'mimeTypes' => 'image/jpeg, image/png',
    'minWidth' => 100, 'maxWidth' => 1000,
    'minHeight' => 100, 'maxHeight' => 1000,
],

<?= $form->field($model, 'image')->fileInput(['accept' => 'image/*']) ?>

[['image'], 'file', 'extensions' => ['png', 'jpg'],'maxFiles' => 3],

$saveTo = \Yii::getAlias('@app'). '/uploads/'. $model->photo->baseName . '.' . $model->photo->extension;
if ($model->photo->saveAs($saveTo)) {
