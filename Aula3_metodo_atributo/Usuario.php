<?php

class Usuario{ 
    public $Nome;
    public $Email;
    public $Prova;
    public $Trabalho;

//Dá o comportamento para a classe
    function setUsuario($Nome, $Email){
        $this->Nome = $Nome;
        $this->Email = $Email;
    }
    function getUsuario(){
        return "Nome do aluno : {$this->Nome}<br> E-mail : {$this->Email}<br>";
    }
    function setNota($Prova, $Trabalho){
        $this->Prova = $Prova;
        $this->Trabalho = $Trabalho;
    }
    function getNota(){
       return "Nota da Prova : " . ($this->Prova + $this->Trabalho);
    }

}
?>