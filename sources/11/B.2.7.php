// the current user identity. Null if the user is not authenticated.
$identity = Yii::$app->user->identity;
$identity->username;
$identity->email;
$identity->status;

// the ID of the current user. Null if the user not authenticated.
$id = Yii::$app->user->id;
