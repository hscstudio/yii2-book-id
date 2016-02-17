<?php
namespace app\models;
class Komentar extends \yii\base\Model
{
    public $nama;
    public $pesan;
    
    public function rules()
    {
        return [
            [['nama', 'pesan'], 'required'],
        ];
    }
}
