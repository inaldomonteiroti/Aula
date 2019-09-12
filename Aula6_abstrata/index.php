<!DOCTYPE HTML>
<html lang=”pt-br”>
<head>
  <meta charset=”UTF-8”>
  <title></title>
</head>
<body>

    <?php 
        require './Cheque.php';
        require './ChequeComum.php';
        //Filha - precisa passar o parametro ao instanciar construct
        $chequeComum = new ChequeComum(100.10, "comum");
        echo $chequeComum->calcularJuros();

        require './ChequeEspecial.php';
        $chequeEspecial = new ChequeEspecial(100.10, "especial");
        
        echo $chequeEspecial->calcularJuros();
    ?>
  
</body>
</html>