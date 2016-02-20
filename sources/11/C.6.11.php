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
        // get user from relation
        $user = $user_social_media->user;
        // check user is active
        if($user->status==User::STATUS_ACTIVE){
            // do automatic login
            Yii::$app->user->login($user);
        }
        else{
            Yii::$app->session->setFlash('error','Login gagal, status user tidak aktif');
        }
        // finish
    }
    else{
        // if data not found
        // check if email social media exists in tabel user
        $user = User::find()
            ->where([
              'email' => $attributes['email']
            ])
            ->one();
        // if user found
        if($user){
            // check user is active
            if($user->status==User::STATUS_ACTIVE){
                // add to table user social media
                $user_social_media = new UserSocialMedia([
                  'social_media' => $attributes['social_media'],
                  'id'=>(string)$attributes['id'],
                  'username'=>$attributes['username'],
                  'user_id'=>$user->id,
                ]);
                $user_social_media->save();

                // do automatic login
                Yii::$app->user->login($user);
            }
            else{
                Yii::$app->session->setFlash('error','Login gagal, status user tidak aktif');
            }
        }
        else{
            // check if social media not twiiter
            if($attributes['social_media']!='twitter'){
                // do automatic signup
                $password = Yii::$app->security->generateRandomString(6);
                $user = new User([
                  'username' => $attributes['username'],
                  'email' => $attributes['email'],
                  'password' => $password,
                ]);
                $user->generateAuthKey();
                $user->generatePasswordResetToken();
                if($user->save()){
                    $user_social_media = new UserSocialMedia([
                      'social_media' => $attributes['social_media'],
                      'id'=>(string)$attributes['id'],
                      'username'=>$attributes['username'],
                      'user_id'=>$user->id,
                    ]);
                    $user_social_media->save();
                    // do automatic login
                    Yii::$app->user->login($user);
                }
                else{
                    Yii::$app->session->setFlash('error','Login gagal, error saat registrasi');
                }
            }
            else{
                // save data attributes to session
                $session = Yii::$app->session;
                $session['attributes']=$attributes;

                // redirect to signup, via property successUrl
                $this->action->successUrl = Url::to(['signup']);
            }
        }
    }
}
