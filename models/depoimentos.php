<?php

class depoimentos {
     public $nome, $curso, $depoimento;
    
    public function __construct($nome,$curso,$depoimento) {
        $this->nome = $nome;
        $this->curso = $curso;
        $this->depoimento = $depoimento;
        
        }
    }