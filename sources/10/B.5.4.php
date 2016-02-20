<?php
/* @var $scenario Codeception\Scenario */
$I = new FunctionalTester($scenario);
/* TESTING CREATE EMPLOYEE */
$I->wantTo('Memastikan "Create Employee" bekerja');
$I->amOnPage(['employee/create']);

    $I->amGoingTo('submit form dengan data input kosong');
    $I->click('button[type="submit"]');
    $I->expectTo('Validasi eror muncul!');
    $I->see('Name cannot be blank.');
    $I->see('Age cannot be blank.');

    $I->amGoingTo('submit form dengan data');
    $I->fillField('input[name="Employee[name]"]', 'Hafid');
    $I->fillField('input[name="Employee[age]"]', '30');
    $I->click('button[type="submit"]');
    $I->expectTo('ada data Hafid di tabel employee');
    $I->seeRecord('\app\models\Employee',['name'=>'Hafid']);
