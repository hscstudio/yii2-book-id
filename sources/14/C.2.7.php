public function loginByAccessToken($token, $type = null)
{
    /* @var $class IdentityInterface */
    $class = $this->identityClass;
    $identity = $class::findIdentityByAccessToken($token, $type);
    if ($identity && $this->login($identity)) {
        return $identity;
    } else {
        return null;
    }
}
