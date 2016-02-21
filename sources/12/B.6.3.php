public function actionView($id)
{
    $app = \Yii::$app;
    $moduleID = $app->id;
    $namespace = trim($app->controllerNamespace, '\\') . '\\';
    $routes = $this->getRoutes($app, $moduleID, $namespace, $id);
    foreach ($app->getModules() as $moduleID => $child) {
        if (($module = $app->getModule($moduleID)) !== null) {
            $namespace = trim($module->controllerNamespace, '\\') . '\\';
            $routes = array_merge($routes, $this->getRoutes($module, $moduleID, $namespace, $id));
        }
    }

    return $this->render('view', [
        'model' => $this->findModel($id),
        'routes' => $routes,
    ]);
}
