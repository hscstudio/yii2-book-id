use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use app\models\City;


$data = ArrayHelper::map(
    City::find()->select(['id','name'])
        ->asArray()->all(),
    'id', 'name');

echo $form->field($model, 'origin')->widget(Select2::classname(), [
    'options' => ['placeholder' => 'Select for a city ...'],
    'data'=>$data,
]);

echo $form->field($model, 'destination')->widget(Select2::classname(), [
    'options' => ['placeholder' => 'Select for a city ...'],
    'data'=>$data,
]);
