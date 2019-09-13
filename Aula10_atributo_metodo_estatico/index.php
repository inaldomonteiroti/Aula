<?php

require './Disciplina.php';
$disciplina = new Disciplina("Cesar", 2, 4);
echo $disciplina->situacao();
echo $disciplina->situacaoAluno();

?>