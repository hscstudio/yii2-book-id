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
