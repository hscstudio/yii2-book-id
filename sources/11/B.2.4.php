public function validatePassword($password)
{
    return Yii::$app->security->validatePassword($password, $this->password_hash);
}
