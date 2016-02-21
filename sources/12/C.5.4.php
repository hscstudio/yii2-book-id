use hscstudio\mimin\components\Mimin;
$menuItems = [
    ['label' => 'Home', 'url' => ['/site/index']],
    ['label' => 'About', 'url' => ['/site/about']],
    ['label' => 'Contact', 'url' => ['/site/contact']],
];

if (\Yii::$app->user->isGuest){
    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
}
else{
    $menuItems[] = ['label' => 'App', 'items' => [
        ['label' =>'Category','url'=>['/category/index']],
        ['label' =>'Product','url'=>['/product/index']],
        ['label' =>'Cart','url'=>['/cart/index']],
    ]];
    $menuItems[] = [
        'label' => 'Logout (' . \Yii::$app->user->identity->username . ')',
        'url' => ['/site/logout'],
        'linkOptions' => ['data-method' => 'post']
    ];
}

$menuItems = Mimin::filterMenu($menuItems);

echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $menuItems,
]);
