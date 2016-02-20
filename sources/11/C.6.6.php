public function successCallback($client) {
    // call safeAttributes method for properly format data
    $attributes = $this->safeAttributes($client);

    // find data social media in database
    $user_social_media = UserSocialMedia::find()
        ->where([
          'social_media' => $attributes['social_media'],
          'id'=>(string)$attributes['id'],
          'username'=>$attributes['username'],
        ])
        ->one();

    // if data found
    if($user_social_media){
    
    }
    else{
        
    }
}
