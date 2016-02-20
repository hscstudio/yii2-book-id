<?php

use app\tests\codeception\fixtures\EmployeeFixture;
use tests\codeception\_pages\EmployeePage;

$I = new AcceptanceTester($scenario);
$I->wantTo('Memastikan "Employee" bekerja');

$employeeFixture = new EmployeeFixture();
$employeeFixture->load();
