<!DOCTYPE HTML>
<html lang=”pt-br”>
<head>
  <meta charset=”UTF-8”>
  <title></title>
</head>
<body>

  <?php 
    require './Nota.php';
    $notas = new Nota();
    $notas->setNota("Inaldo Monteiro", "Matemática", 5, 2);
    echo $notas->getNota();

    $nota2 = clone $notas;
    $nota2->setProva(6);
    $nota2->setTrabalho(4);
    $nota2->setDisciplina("História");
    echo $nota2->getNota();
  ?>    
</body>
</html>