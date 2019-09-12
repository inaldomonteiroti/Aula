<?php


  class ClientePessoaFisica extends Cliente{
      public $Cpf;
      public $Nome;

      function setCpf($Cpf){
            $this->Cpf = $Cpf;
      }
      function setNome($Nome){
            $this->Nome = $Nome;
      }
      function verEndereco(){
             return "<p>Endereço da Pessoa Fisica: {$this->Endereco}<br> Bairro da Pessoa Fisica: {$this->Bairro}<br>
             Nome: {$this->Nome}<br>Cpf : {$this->Cpf}<hr></p>";
       }

        
    }
?>