<?php
use \AcceptanceTester;

class EmployeeCest
{
    public function _before(AcceptanceTester $I)
    {

    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function testIndex(AcceptanceTester $I)
    {
        $I->amGoingTo('cek halaman daftar employee');
        $I->amOnPage('employee/index');
        if (method_exists($I, 'wait')) {
            $I->wait(3); // only for selenium
        }
        $I->expectTo('judul halaman "Daftar Employee", dan tombol Create');
        $I->see('Daftar Employee','h1');
        $I->see('CREATE','a');
    }
}
