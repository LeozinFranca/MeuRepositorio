
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

function calendario()
{
	$dia = 1;
	$semana = array();
	while ($dia <= 31) {
		array_push($semana, $dia);
		if (count($semana) == 7) {
			linha($semana);
			$semana = array();
		}
		$dia++;
	}
	linha($semana);
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

<table border="1">
	<tr>
		<th>Seg</th>
		<th>Ter</th>
		<th>Qua</th>
		<th>Qui</th>
		<th>Sex</th>
		<th>Sáb</th>
      <th>Dom</th>
	</tr>
	<?php calendario(); ?>
</table>
<?php saudacao(); ?>

