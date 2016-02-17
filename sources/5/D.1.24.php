['birthday', function($attribute, $params){
    $lahir = date('Y',strtotime($this->$attribute));
    $sekarang = date('Y');
    if(($sekarang-$lahir) < 10){
        $this->addError($attribute,'Anda terlalu muda :)')
    }
}]
