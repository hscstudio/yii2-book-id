public function actionGetBook($id)
{
	$books = $this->getBooks();
	$bookSelected = [];
	foreach($books as $book){
		if($book['id']==$id){
			$bookSelected = $book;
		}
	}
	// $bookSelected = Book::findOne($id);
	\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
	return [
		'book' => $bookSelected,
	];
}
