public function getRoutes($app, $moduleID, $namespace, $user_id)
{
    $routes = [];
    $path = @Yii::getAlias('@' . str_replace('\\', '/', $namespace));
    foreach (scandir($path) as $file) {
        if (strcmp(substr($file, -14), 'Controller.php') === 0) {
            $controllerID = \yii\helpers\Inflector::camel2id(substr(basename($file), 0, -14));
            $className = $namespace . \yii\helpers\Inflector::id2camel($controllerID) . 'Controller';
            $controller = Yii::createObject($className, [$controllerID, $app]);
            $controllerID = $controller->uniqueId;
            foreach ($controller->actions() as $actionID => $value) {
                $auth = \app\models\Auth::find()->where([
                    'module'=>$moduleID,
                    'controller'=>$controllerID,
                    'action'=>$actionID,
                    'user_id'=>$user_id,
                ])->count();
                $routes[] = [
                    'module'=>$moduleID,
                    'controller'=>$controllerID,
                    'action'=>$actionID,
                    'auth'=>$auth,
                ];
            }

            $class = new \ReflectionClass($controller);
            foreach ($class->getMethods() as $method) {
                $name = $method->getName();
                if ($method->isPublic() && !$method->isStatic() && strpos($name, 'action') === 0 && $name !== 'actions') {
                    $actionID = \yii\helpers\Inflector::camel2id(substr($name, 6));
                    $auth = \app\modules\Auth::find()->where([
                        'module'=>$moduleID,
                        'controller'=>$controllerID,
                        'action'=>$actionID,
                        'user_id'=>$user_id,
                    ])->count();
                    $routes[] = [
                        'module'=>$moduleID,
                        'controller'=>$controllerID,
                        'action'=>$actionID,
                        'auth'=>$auth,
                    ];

                }
            }
        }
    }
    return $routes;
}
