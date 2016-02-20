<?php
use yii\codeception\TestCase;
use app\tests\codeception\fixtures\EmployeeFixture;

class EmployeeTest extends TestCase
{    
    use Codeception\Specify;

    public function fixtures(){
        return [
            'employees' => EmployeeFixture::className(),
        ];
    }
