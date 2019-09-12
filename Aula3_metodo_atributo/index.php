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
    $usuario->setUsuario("Inaldo Monteiro", "inaldomonteiroti@gmail.com");
    echo $usuario->getUsuario();
    $usuario->setNota("5", "2");
    echo $usuario->getNota();
?>
</body>
</html>