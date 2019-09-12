<?php

class Nota{ 
    public $Aluno;
    public $Prova;
    public $Trabalho;
    public $Disciplina;

//Dá o comportamento para a classe

    function setProva($Prova){
        $this->Prova = $Prova;
    }
    function setTrabalho($Trabalho){
        $this->Trabalho = $Trabalho;
    }
    function setDisciplina($Disciplina){
        $this->Disciplina = $Disciplina;
    }

    public function setNota($Aluno, $Disciplina, $Prova, $Trabalho){
        $this->Aluno = $Aluno;
        $this->Prova = $Prova;
        $this->Trabalho = $Trabalho;
        $this->Disciplina = $Disciplina;   
    }
    
    function getNota(){
        return "Nome do aluno : {$this->Aluno}<br> Disciplina: {$this->Disciplina}<br> Nota :" . ($this->Prova + $this->Trabalho) . "<br><hr>";
    }
}
?>