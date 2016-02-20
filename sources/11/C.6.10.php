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
