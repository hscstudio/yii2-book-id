public static function findIdentityByAccessToken($token, $type = null)
{
    //throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    return static::findOne(['auth_key' => $token, 'status' => self::STATUS_ACTIVE]);
}
