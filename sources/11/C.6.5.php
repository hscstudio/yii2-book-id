public function successCallback($client) {
    // call safeAttributes method for properly format data
    $attributes = $this->safeAttributes($client);    
}

public function safeAttributes($client){
    // get user data from client
    $attributes = $client->getUserAttributes();
    
    // set default value
    $safe_attributes = [
        'social_media'=> '',        
        'id'=> '',        
        'username'=> '',        
        'name'=> '',        
        'email'=> '',        
    ];

    // get value from user attributes base on social media
    if ($client instanceof \yii\authclient\clients\Facebook) {
        $safe_attributes = [
            'social_media'=> 'facebook',        
            'id'=> $attributes['id'],        
            'username'=> $attributes['email'],        
            'name'=> $attributes['name'],        
            'email'=> $attributes['email'],        
        ];
    }
    else if ($client instanceof \yii\authclient\clients\GoogleOAuth) {
        $safe_attributes = [
            'social_media'=> 'google',        
            'id'=> $attributes['id'],        
            'username'=> $attributes['emails']['0']['value'],        
            'name'=> $attributes['displayName'],        
            'email'=> $attributes['emails']['0']['value'],        
        ];
    }
    else if ($client instanceof \yii\authclient\clients\Twitter) {
        $safe_attributes = [
            'social_media'=> 'twitter',        
            'id'=> $attributes['id'],        
            'username'=> $attributes['screen_name'],        
            'name'=> $attributes['name'],        
            'email'=> '-',        
        ];
    }
    else if ($client instanceof \yii\authclient\clients\GitHub) {
        $safe_attributes = [
            'social_media'=> 'github',        
            'id'=> $attributes['id'],        
            'username'=> $attributes['login'],        
            'name'=> $attributes['name'],        
            'email'=> $attributes['email'],        
        ];
    }
    
    return $safe_attributes;
}
