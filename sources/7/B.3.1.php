<?php
namespace app\controllers;
class AjaxController extends \yii\web\Controller
{
	public function getBooks()
    {
        $books = [
            ['id'=>'1','title'=>'Pemrograman PHP','author'=>'Hafid','year'=>'2015'],
            ['id'=>'2','title'=>'Pemrograman JS','author'=>'Juned','year'=>'2014'],
            ['id'=>'3','title'=>'Database MySQL','author'=>'Lily','year'=>'2013'],
        ];
        // $books = Book::find()->asArray()->all();
        return $books;
    }

	public function actionBook()
    {
        $model = new \yii\base\DynamicModel([
            'title', 'author', 'year'
        ]);
        $model->addRule(['title'], 'string');
        $model->addRule(['description'], 'string');
        $model->addRule(['year'], 'integer');

        return $this->render('book', [
            'model' => $model,
            'books' => $this->getBooks(),
        ]);
    }

}
