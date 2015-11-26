<?php

class VestibularFabrica {
     public $nome, $rg, $unidade, $curso;
    
    public function __construct($nome,$rg,$unidade,$curso) {
        $this->nome = $nome;
        $this->rg = $rg;
        $this->unidade = $unidade;
        $this->curso = $curso;
        }
    }