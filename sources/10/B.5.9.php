<?php
namespace tests\codeception\_pages;
use yii\codeception\BasePage;

class EmployeePage extends BasePage
{
    public static $URL = 'employee/index';
    
    public static function route($param='')
    {
        return static::$URL.$param;
    }

    public function start($param='')
    {
        $this->actor->amOnPage(self::route($param));
        $this->wait(3);
    }

    public function create($name=null, $age=null)
    {
        $this->actor->click('Create');
        $this->wait(3);
        $this->actor->fillField('input[name="Employee[name]"]', $name);
        $this->actor->fillField('input[name="Employee[age]"]', $age);
        $this->actor->click('button[type="submit"]');
        $this->wait(3);
    }

    public function delete($id=null)
    {
        $this->actor->click('a[href*="delete?id='.$id.'"]');
        $this->wait(3);
        if (method_exists($this->actor, 'acceptPopup')) {
            $this->actor->acceptPopup(); // only for selenium
        }
        $this->wait(3);
    }

    public function wait($time)
    {
        if (method_exists($this->actor, 'wait')) {
            $this->actor->wait($time); // only for selenium
        }
    }
}
