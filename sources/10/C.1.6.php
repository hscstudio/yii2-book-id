<?php
use \AcceptanceTester;
use tests\codeception\_pages\EmployeePage;
use app\tests\codeception\fixtures\EmployeeFixture;

class EmployeeCest
{
    protected $page;

    public function _before(AcceptanceTester $I)
    {
        $this->page = new EmployeePage($I);
        $employeeFixture = new EmployeeFixture();
        $employeeFixture->load();
    }
