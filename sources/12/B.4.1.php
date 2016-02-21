'rules' => [
    [
        'allow' => true,
        'matchCallback' => function ($rule, $action) {
            $moduleID = $action->controller->module->id;
            $controllerID = $action->controller->id;
            $actionID = $action->id;
            $userID = \Yii::$app->user->id;
            $auth = \app\models\Auth::find()
                ->where([
                    'module' => $moduleID,
                    'controller' => $controllerID,
                    'action' => $actionID,
                    'user_id' => $userID,
                ])
                ->count();
            if($auth>0) return true;
        }
    ],
],
