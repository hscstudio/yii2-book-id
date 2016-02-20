<?php
/* @var $scenario Codeception\Scenario */
$I = new AcceptanceTester($scenario);
$I->wantTo('Memastikan "Employee" bekerja');

/* TESTING INDEX EMPLOYEE */
    $I->amGoingTo('cek halaman daftar employee');
    $I->amOnPage('employee/index');
    $I->expectTo('judul halaman "Daftar Employee", dan tombol Create');
    $I->see('Daftar Employee','h1');
    $I->see('CREATE','a');

/* TESTING CREATE EMPLOYEE */
    $I->wantTo('Memastikan "Create Employee" bekerja');
    $I->amGoingTo('cek halaman create employee');
    $I->amOnPage('employee/create');
    $I->see('Employee','h1');
    $I->see('SIMPAN','button');
    $I->seeElement('input', ['name' => 'Employee[name]']);
    $I->seeElement('input', ['name' => 'Employee[age]']);

    $I->amGoingTo('submit form dengan data input kosong');
    $I->click('button[type="submit"]');
    $I->expectTo('Validasi eror muncul!');
    $I->see('Name cannot be blank.');
    $I->see('Age cannot be blank.');

    $I->amGoingTo('submit form dengan data data');
    $I->fillField('input[name="Employee[name]"]', 'Hafid');
    $I->fillField('input[name="Employee[age]"]', '30');
    $I->click('button[type="submit"]');
    $I->expectTo('submit form berhasil');
    $I->see('Data berhasil disimpan');
