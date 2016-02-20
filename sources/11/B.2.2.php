public static function findIdentity($id)
{
    return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
}

public static function findIdentityByAccessToken($token, $type = null)
{
}

public function getId()
{
    return $this->getPrimaryKey();
}

public function getAuthKey()
{
    return $this->auth_key;
}

public function validateAuthKey($authKey)
{
    return $this->getAuthKey() === $authKey;
}
