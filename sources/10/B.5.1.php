    protected $model;

    protected function setUp()
    {
        parent::setUp();
        // uncomment the following to load fixtures for user table
        //$this->loadFixtures(['user']);
        $this->model = new \app\models\Employee();
    }

    public function testNameValidation()
    {
        $model = $this->model;

        $this->specify("name is required", function() use ($model){
            $model->name = null;
            expect('model should not validate', $model->validate(['name']))->false();
        });
    }
