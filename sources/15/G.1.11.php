$result = Category::getDb()->cache(function ($db) {    
    return Category::find()->where(['id' => 1])->one();
});
