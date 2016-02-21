use hscstudio\mimin\components\Mimin;
if ((Mimin::checkRoute($this->context->id.'/create'))){
    echo Html::a('Create Category, ['create'], ['class' => 'btn btn-success']);
}
