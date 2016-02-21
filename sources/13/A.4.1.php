public function rules()
{
    return [
        [['image'],'file','extensions'=>['png', 'jpg']],
    ];
}
