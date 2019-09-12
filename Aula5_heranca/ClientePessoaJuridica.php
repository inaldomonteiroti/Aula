<?php


  class ClientePessoaJuridica  extends Cliente{
      public $NomeFantasia;
      public $Cnpj;

      function setCnpj($Cnpj){
            $this->Cnpj = $Cnpj;
      }
      function setNomeFantasia($NomeFantasia){
            $this->NomeFantasia = $NomeFantasia;
      }
      
      function verEndereco(){
            return "<p>Endereço da Pessoa Juridica: {$this->Endereco}<br> Bairro da Pessoa Juridica: {$this->Bairro}<br>
            NomeFantasia: {$this->NomeFantasia}<br>Cnpj : {$this->Cnpj}<hr></p>";
      }


        
    }
?>