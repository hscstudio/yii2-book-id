/* TARUH DIATAS YAK */
use app\models\EventTools;
use app\models\Tabular;
/* -- */

public function actionCreate()
{
    $model = new Event();
    $modelsTools = [new EventTools];

    if ($model->load(Yii::$app->request->post())) {
        // load data from form submit
        $modelsTools = Tabular::createMultiple(EventTools::classname());
        Tabular::loadMultiple($modelsTools, Yii::$app->request->post());
        // validasi data
        $valid = $model->validate();
        $valid = Tabular::validateMultiple($modelsTools) && $valid;
        if ($valid) {
            $transaction = Yii::$app->db->beginTransaction();
            try {
                if ($flag = $model->save(false)) {
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
                    \Yii::$app->session->setFlash('success', 'Input data sukses');
                    return $this->redirect(['view', 'id' => $model->id]);
                } else {
                    $transaction->rollBack();
                    \Yii::$app->session->setFlash('error', 'Input data gagal');
                }
            } catch (\Exception $e) {
                $transaction->rollBack();
                \Yii::$app->session->setFlash('error', 'Input data gagal');
            }
        }
    } else {
        return $this->render('create', [
            'model' => $model,
            'modelsTools' => (empty($modelsTools)) ? [new EventTools] : $modelsTools,
        ]);
    }
}
