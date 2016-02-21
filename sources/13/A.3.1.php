public function rules()
{
    return [
        [['user_id', 'photo'], 'required'],
        [['user_id'], 'integer'],
        [['photo'], 'file', 'extensions' => ['png', 'jpg','gif'], 'maxSize' => 1024*1024]
    ];
}
