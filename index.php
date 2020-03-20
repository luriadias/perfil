<html>
<body>
<?php
   #echo('perfilemphp');
   $var2 = 'a';
   $var3 = 5;
   $vetor = array(1,2,3,4,5,6,7);
   $float = 1;

   $v1 = array(
      'img' => 'https://i.pinimg.com/474x/97/85/ca/9785cafd59f0d5401e0d9d98786eb492.jpg',
      'nome' => 'Lúria Fernandes',
      'local' => 'Monte azul-MG',
      'cursos' =>('Tec. Informatica para Internet'),
   );

   $resultado_de_uma_consulta = array(
      'local' => 'Monte azul-MG',
      'ano' => 2003
   );

   
  echo('Nome:'.'Lúria '.'Fernandes');
  echo('<br>');
   echo('Idade:'.'16 anos');
   echo('<br>');
   echo('Curso:'.'Tec. Informatica p/ Internet');   
   echo('<br>');   

   echo('FAIL ');
#   echo((float) $var1 + (float) $var2);
#   echo($var1 + $var2);
   
   



   echo('<img src=' . $v1['img'] .'>');





?>




</body>
</html>
