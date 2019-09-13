<?php

require './ICurso.php';
require './CursoGraduacao.php';
require './CursoPosGraduacao.php';

$curso = new CursoGraduacao();
echo $curso->disciplina("Desenvolvimento Web"); // Impresso apenas na view nao no metodo
echo $curso->professor(" Inaldo Monteiro"); // Impresso apenas na view nao no metodo

$cursoPosGrad = new CursoPosGraduacao();
echo $cursoPosGrad->disciplina("Rede"); // Impresso apenas na view nao no metodo
echo $cursoPosGrad->professor("Kelly"); // Impresso apenas na view nao no metodo

?>