<?= Html::a('Close', ['index'], [
    'class' => 'btn btn-success',
    'onclick'=>'
      $("#categoryModal").modal("hide");
      return false;
    '
]) ?>
