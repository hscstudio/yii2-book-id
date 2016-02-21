<?php
namespace app\controllers;
use yii\rest\ActiveController;
class EmployeeRestController extends ActiveController{    
    public $modelClass = 'app\models\Employee';
}
