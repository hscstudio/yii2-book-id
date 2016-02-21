'components' => [
    // ...
    'i18n' => [
        'translations' => [
          'app*' => [
             'class' => 'yii\i18n\PhpMessageSource',
             //'basePath' => '@app/messages',
             //'sourceLanguage' => 'en-US',
             'fileMap' => [
                 'app' => 'app.php',
                 'app/error' => 'error.php',
             ],
          ],
        ],
    ],
],
