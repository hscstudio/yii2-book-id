'components' => [
    'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'facebook' => [
                'class' => 'yii\authclient\clients\Facebook',
                'clientId' => 'facebook_client_id',
                'clientSecret' => 'facebook_client_secret',
            ],
            'google' => [
                'class' => 'yii\authclient\clients\GoogleOAuth',
                'clientId' => 'google_client_id',
                'clientSecret' => 'google_client_secret',
            ],
            'twitter' => [
                'class' => 'yii\authclient\clients\Twitter',
                'consumerKey' => 'twitter_consumer_key',
                'consumerSecret' => 'twitter_consumer_secret',
            ],
            'github' => [
                'class' => 'yii\authclient\clients\GitHub',
                'clientId' => 'github_client_id',
                'clientSecret' => 'github_client_secret',
            ],
        ],
    ]
    ...
]
