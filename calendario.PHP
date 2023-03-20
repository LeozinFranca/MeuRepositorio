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



function calendario($diaM)
{
    echo '<table border="1">
	<tr>
		<th>Seg</th>
		<th>Ter</th>
		<th>Qua</th>
		<th>Qui</th>
		<th>Sex</th>
		<th>Sáb</th>
      <th>Dom</th>
	</tr>';
	$dia = 1;
	$semana = array();
	while ($dia <= $diaM) {
		array_push($semana, $dia);
		if (count($semana) == 7) {
			linha($semana);
			$semana = array();
		}
		$dia++;
	}
	linha($semana);
}


function calendario_anual(){
    for($i = 0; $i <= 11; $i++){
    
      if($i==0){
         echo"<H1>Janeiro</H1>";
         calendario(31);
         echo"";
         echo"";
      }
      if($i==1){
         echo"<H1>Fevereiro</H1>";
         calendario(28);
         echo"";
         echo"";
      }
      if($i==2){
         echo"<H1>Março</H1>";
         calendario(31);
         echo"";
         echo"";
      }
      if($i==3){
         echo"<H1>Abril</H1>";
         calendario(30);
         echo"";
         echo"";
      }
      if($i==4){
         echo"<H1>Maio</H1>";
         calendario(31);
         echo"";
         echo"";
      }
      if($i==5){
         echo"<H1>Junho</H1>";
         calendario(30);
         echo"";
         echo"";
      }
      if($i==6){
         echo"<H1>Julho</H1>";
         calendario(31);
         echo"";
         echo"";
      }
      if($i==7){
         echo"<H1>Agosto</H1>";
         calendario(31);
         echo"";
         echo"";
      }
      if($i==8){
         echo"<H1>Setembro</H1>";
         calendario(30);
         echo"";
         echo"";
      }
      if($i==9){
         echo"<H1>Outubro</H1>";
         calendario(31);
         echo"";
         echo"";
      }
      if($i==10){
         echo"<H1>Novembro</H1>";
         calendario(30);
         echo"";
         echo"";
      }
      if($i==11){
         echo"<H1>Dezembro</H1>";
         calendario(31);
         echo"";
         echo"";
      }  
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
    <?php calendario_anual()?>

</body>
</html>