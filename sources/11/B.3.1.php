public function setPassword($password)
{
    $this->password_hash = Yii::$app->security->generatePasswordHash($password);
}

public function generateAuthKey()
{
    $this->auth_key = Yii::$app->security->generateRandomString();
}
