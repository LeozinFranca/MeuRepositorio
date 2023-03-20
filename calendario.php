
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
    for($i = 0; $i <= 12; $i++){
      if($i==0){
         calendario(31);
         echo"";
         echo"";
      }
      if($i==0){
         echo"<H2>Janeiro</H2>";
         calendario(28);
         echo"";
         echo"";
      }
      if($i==1){
         echo"<H2>Fevereiro</H2>";
         calendario(31);
         echo"";
         echo"";
      }
      if($i==2){
         echo"<H2>Março</H2>";
         calendario(30);
         echo"";
         echo"";
      }
      if($i==3){
         echo"<H2>Abril</H2>";
         calendario(31);
         echo"";
         echo"";
      }
      if($i==4){
         echo"<H2>Maio</H2>";
         calendario(30);
         echo"";
         echo"";
      }
      if($i==5){
         echo"<H2>Junho</H2>";
         calendario(31);
         echo"";
         echo"";
      }
      if($i==6){
         echo"<H2>Julho</H2>";
         calendario(31);
         echo"";
         echo"";
      }
      if($i==7){
         echo"<H2>Agosto</H2>";
         calendario(30);
         echo"";
         echo"";
      }
      if($i==8){
         echo"<H2>Setembro</H2>";
         calendario(31);
         echo"";
         echo"";
      }
      if($i==9){
         echo"<H2>Outubro</H2>";
         calendario(30);
         echo"";
         echo"";
      }
      if($i==10){
         echo"<H2>Novembro</H2>";
         calendario(31);
         echo"";
         echo"";
      }
      if($i==11){
         echo"<H2>Dezembro</H2>";
         
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
