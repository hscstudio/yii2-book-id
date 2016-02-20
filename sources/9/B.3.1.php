use vova07\imperavi\Widget;
echo Widget::widget([
    'name' => 'redactor',
    'settings' => [
        'lang' => 'id',
        'minHeight' => 200,
        'plugins' => [
            'clips',
            'fullscreen'
        ]
    ]
]);
