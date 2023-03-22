<!DOCTYPE html>
<html>
<body>

<?php

function linha($semana)
{
   $semana_atual = date("d");
	echo "<tr>";
	for ($i = 0; $i <= 6; $i++) {
		if (isset($semana[$i])) {
         if($i==6 && $semana[$i]!= $semana_atual){
            echo "<td style='color:red;'>{$semana[$i]}</td>";
         }

         if($i==5 && $semana[$i]!= $semana_atual){
            echo "<td><b>{$semana[$i]}</b></td>";
         }

         if ($semana[$i] == $semana_atual){
            echo "<td><b>{$semana[$i]}</b></td>";
         }
         if($i!= 5 && $i!= 6 && $semana[$i]!= $semana_atual){
			   echo "<td>{$semana[$i]}</td>";
		   }

      } else {
			echo "<td></td>";
		}
	}
	echo "</tr>";
}



function calendario($nomeMes, $diaMes, $finalS){
    echo 
     "$nomeMes
    <table border='1'>
	<tr>
		<th>Seg</th>
		<th>Ter</th>
		<th>Qua</th>
		<th>Qui</th>
		<th>Sex</th>
		<th>Sáb</th>
        <th>Dom</th>
	</tr>";
	$dia = 1;
	$semana = array();
	while ($dia <= $diaMes + $finalS) {
        if($dia<=$finalS){
           array_push($semana, " "); 
        }
        else{
		   array_push($semana, ($dia-$finalS));
        }
		   if (count($semana) == 7) {
			  linha($semana);
			  $semana = array();
	    }
        $dia++;
	}
	linha($semana);
    echo "</table>";
}

function GetNameM($Mes){
  $nomeM = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
  
  return $nomeM[$Mes];
}

function GetDiaM($Mes){
  $diaM = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
  return $diaM[$Mes];
}


function calendario_anual(){
    for($i = 0; $i <= 11; $i++){
      $nomeM = GetNameM($i);
      $diaM = GetDiaM($i);
      $final = array(0, 3, 3, 6, 1, 4, 6, 2, 5, 0, 3, 5, 1);
      $finalS = $final[$i];
      calendario($nomeM ,$diaM, $finalS);
      
    } 
}

function saudacao(){
   date_default_timezone_set('America/Sao_Paulo');
   $hora = date('H:i');
   echo("<h1>$hora<h1>");
   if($hora < '12:00' && $hora >'00:00'){
     echo("<H1>Bom dia</H1>");
   }
   if($hora <'18:00' && $hora >='12:00'){
      echo("<H1> Boa tarde </H1>");
   }
   if($hora >='18:00'){
      echo("<H1>Boa noite</H1>");
   }
}
?>  
    <?php saudacao(); ?>
    <?php calendario_anual();?>
     
</body>
</html>
