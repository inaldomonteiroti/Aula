<?php
    //Não é possivel instanciar uma classe abstrata
    abstract class Cheque{
      
        public $Valor;
        public $Tipo;

        function __construct($Valor, $Tipo){
            $this->Valor = $Valor;
            $this->Tipo = $Tipo;
        }
        function verValor(){
            return "Valor do cheque {$this->Tipo}: R$ {$this->real($this->Valor)} <hr>";
        }  

        abstract function calcularJuros(); // Todas as classes filhas sao obrigadas a ter essa classe

        //Converter formato de dinheiro
        function real($Valor){
            return number_format($Valor, '2',',','.'); 
        }
    }
?>