<?php
class Usuario {
    public $nome, $tel, $email, $msg, $eusou;
    
    public function __construct($nome,$tel,$email,$msg,$eusou) {
        $this->nome = $nome;
        $this->tel = $tel;
        $this->email = $email;
        $this->msg = $msg;
        $this->eusou = $eusou;
        
    }
}





