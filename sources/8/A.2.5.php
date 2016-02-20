public function actionBlog()
{
    // select layouts
    $this->layout = 'blog';
    // render view blog
    return $this->render('blog');
}
