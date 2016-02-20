<?php
use \AcceptanceTester;
use tests\codeception\_pages\EmployeePage;

class EmployeeCest
{
    protected $page;

    public function _before(AcceptanceTester $I)
    {
        $this->page = new EmployeePage($I);
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function testIndex(AcceptanceTester $I)
    {
        $I->amGoingTo('cek halaman daftar employee');
        $this->page->start();
        $I->expectTo('judul halaman "Daftar Employee", dan tombol Create');
        $I->see('Daftar Employee','h1');
        $I->see('CREATE','a');
        if (method_exists($I, 'wait')) {
            $I->wait(3); // only for selenium
        }
    }

    public function testCreate(AcceptanceTester $I)
    {
        $I->amGoingTo('submit form dengan data data');
        $this->page->start();
        $this->page->create('Hafid',31);
        $I->expectTo('submit form berhasil');
        $I->see('Data berhasil disimpan');
    }

    public function testDelete(AcceptanceTester $I)
    {
        $I->amGoingTo('hapus data data');
        $this->page->start();
        $this->page->delete(1);
        $I->expectTo('data berhasil dihapus');
        $I->dontSeeLink('a[href*="delete?id=1"]');
    }
}
