$this->specify("name is required", function() use ($model){
   $model->name = 'hafid';
   expect('model should validate', $model->validate(['name']))->true();
});
