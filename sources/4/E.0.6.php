public function rules()
{
    return [
        [['nama'], 'required'],
        [['pesan'], 'safe'],
    ];
}
