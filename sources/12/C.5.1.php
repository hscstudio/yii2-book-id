<?php
namespace app\components;
use Yii;
class Rbac extends \yii\base\ActionFilter
{
    public function beforeAction($action)
    {
        $actionID = $action->id;
        $user = \Yii::$app->user;
        if ($user->can('/' . $actionID)) {
            return true;
        }
        
        $controllerID = $action->controller->id;
        if(in_array($controllerID,['default','site'])){
            return true;    
        }
        
        if (!$action instanceof \yii\web\ErrorAction) {
            if ($user->getIsGuest()) {
                $user->loginRequired();
            } else {
                throw new \yii\web\ForbiddenHttpException('Anda tidak diizinkan untuk mengakses halaman ' . $action->id . ' ini!');
            }
        }
    }
}
