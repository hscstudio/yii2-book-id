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
