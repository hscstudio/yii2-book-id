$I->amOnPage('employee/index');
$I->see('Daftar Employee','h1');
$I->click('a[href*="delete?id=1"]');
if (method_exists($I, 'wait')) {
    $I->wait(3); // only for selenium
}
$I->acceptPopup();
if (method_exists($I, 'wait')) {
    $I->wait(3); // only for selenium
}
$I->see('Daftar Employee','h1');
