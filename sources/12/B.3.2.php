'access' => [
    'class' => AccessControl::className(),
    'rules' => [
        [
            'allow' => true,
            'roles' => ['@',1],
            'matchCallback' => function ($rule, $action) {
                $user = \Yii::$app->user;
                if(in_array($user->id, $rule->roles)) 
				return true;
            }
        ],
    ],
    ...
],
