public function actionCheck()
{
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache'); 
    $category = Category::find()->select('id')->orderBy('id DESC')->one();
    echo 'data: {"lastId": "'.$category->id.'"}';
    echo "\n\n";
    flush();
}
