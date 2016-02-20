<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
class TestController extends Controller
{  
    public $layout = 'login';
    
    public function actionLogin()
    {
        // render view login
        return $this->render('form-login');
    }
}
