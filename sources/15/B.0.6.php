public function actionUpdate($id)
{
    $model = $this->findModel($id);
    $modelsTools = $model->eventTools;

    if ($model->load(Yii::$app->request->post())) {
        $oldToolsIDs = ArrayHelper::map($modelsTools, 'id', 'id');
        $modelsTools = Tabular::createMultiple(EventTools::classname(), $modelsTools);
        Tabular::loadMultiple($modelsTools, Yii::$app->request->post());
        $deletedToolsIDs = array_diff($oldToolsIDs, array_filter(ArrayHelper::map($modelsTools, 'id', 'id')));

        // validate models
        $valid = $model->validate();
        $valid = Tabular::validateMultiple($modelsTools) && $valid;
        if ($valid) {
            $transaction = Yii::$app->db->beginTransaction();
            try {
                if ($flag = $model->save(false)) {
                    if (! empty($deletedToolsIDs)) {
                        EventTools::deleteAll(['id' => $deletedToolsIDs]);
                    }

                    foreach ($modelsTools as $indexTools => $modelTools) {
                        if ($flag === false) {
                            break;
                        }
                        $modelTools->event_id = $model->id;
                        if (!($flag = $modelTools->save(false))) {
                            break;
                        }
                    }
                }

                if ($flag) {
                    $transaction->commit();
                    \Yii::$app->session->setFlash('success', 'Update data sukses');
                    return $this->redirect(['view', 'id' => $model->id]);
                } else {
                    \Yii::$app->session->setFlash('error', 'Update data gagal');
                    $transaction->rollBack();
                }
            } catch (\Exception $e) {
                \Yii::$app->session->setFlash('error', 'Update data gagal');
                $transaction->rollBack();
            }
        }
    } else {
        return $this->render('update', [
            'model' => $model,
            'modelsTools' => (empty($modelsTools)) ? [new EventTools] : $modelsTools,
        ]);
    }
}
