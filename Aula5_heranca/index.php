<!DOCTYPE HTML>
<html lang=”pt-br”>
<head>
  <meta charset=”UTF-8”>
  <title></title>
</head>
<body>

    <?php 
        require './Cliente.php';
        require './ClientePessoaFisica.php';
        require './ClientePessoaJuridica.php';
        $cliente = new Cliente();
        $cliente->setEndereco ('Rua Estado do Rio');
        $cliente->setBairro ('Novo Mundo');
        echo $cliente->verEndereco(); //Estou dando echo no return

        $clientePf = new ClientePessoaFisica();
        $clientePf->setCpf(91123399988);
        $clientePf->setNome('Cesar');
        $clientePf->setEndereco('Rua Isacc Amaral'); // Herança
        $clientePf->setBairro('Dionisio');// Herança
        echo $clientePf->verEndereco(); //Estou dando echo no return

        $clientePj = new ClientePessoaJuridica();
        $clientePj->setCnpj(95959595959); //herança
        $clientePj->setNomeFantasia('Engexata'); //herança
        $clientePj->setEndereco('Rua Isacc Amaral 2'); // Herança
        $clientePj->setBairro('Dionisio 2');// Herança
        echo $clientePj->verEndereco(); //Estou dando echo no return
    ?>
  
</body>
</html>