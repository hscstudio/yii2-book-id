    public function testAgeValidation()
    {
        $model = $this->model;

        $this->specify("age is required", function() use ($model){
            $model->age = null;
            expect('model should not validate', $model->validate(['age']))->false();
        });

        $this->specify("age is required", function() use ($model){
            $model->age = 31;
            expect('model should validate', $model->validate(['age']))->true();
        });

        $this->specify("age is int", function() use ($model){
            $model->age = 'test';
            expect('model should not validate', $model->validate(['age']))->false();
        });
    }
