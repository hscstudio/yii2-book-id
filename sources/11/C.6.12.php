public function actionSignup()
{
    $model = new \app\models\SignupForm();

    // use session
    $session = Yii::$app->session;
    $attributes = $session['attributes'];

    if ($model->load(Yii::$app->request->post())) {
        if ($user = $model->signup()) {
            if ($session->has('attributes')){
                // add data user_social_media
                $user_social_media = new UserSocialMedia([
                  'social_media' => $attributes['social_media'],
                  'id'=>(string)$attributes['id'],
                  'username'=>$attributes['username'],
                  'user_id'=>$user->id,
                ]);
                $user_social_media->save();
            }

            if (Yii::$app->getUser()->login($user)) {
                return $this->goHome();
            }
        }
    }

    if ($session->has('attributes')){
        // set form field with data from social media
        $model->username = $attributes['username'];
        $model->email = $attributes['email'];
    }

    return $this->render('signup', [
        'model' => $model,
    ]);
}
