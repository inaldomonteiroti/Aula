<!DOCTYPE HTML>
<html lang=”pt-br”>
<head>
  <meta charset=”UTF-8”>
  <title></title>
</head>
<body>

<?php 
    require './Usuario.php';
    $usuario = new Usuario();
    echo $usuario->getDadosUser("Inaldo Monteiro", "inaldomonteiroti@gmail.com");

?>
</body>
</html>