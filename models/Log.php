<?php

class Log {
     public $login, $senha;
    
    public function __construct($login,$senha) {
        $this->login = $login;
        $this->senha = $senha;
       }
       
    }