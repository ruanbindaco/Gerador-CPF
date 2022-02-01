<?php
$d1 = random_int(0,9);
$d2 = random_int(0,9);
$d3 = random_int(0,9);
$d4 = random_int(0,9);
$d5 = random_int(0,9);
$d6 = random_int(0,9);
$d7 = random_int(0,9);
$d8 = random_int(0,9);
$d9 = random_int(0,9);
//Calculando o primeiro digito validador
$somatorio = $d1*10 + $d2*9 + $d3*8 + $d1*7 + $d2*6 + $d3*5 + $d1*4 + $d2*3 + $d3*2;

$resto = $somatorio % 11;
if($resto < 2){
  $dv1 = 0;
}else{
  $dv1 = 11 - $resto;
}
//Calculando o segundo digito validador
$somatorio = $d1*11 + $d2*10 +$d3*9 + $d1*8 + $d2*7 +$d3*6 + $d1*5 + $d2*4 + $d3*3 + $dv1*2; 

$resto = $somatorio % 11;
if($resto < 2){
  $dv2 = 0;
}else{
  $dv2 = 11 - $resto;
}

$cpf = $d1 . $d2 . $d3 . "." . $d4 . $d5 . $d6 . "." . $d7 . $d8 . $d9;
$cpf = $cpf . "-" . $dv1 . $dv2;
?>

<html> 
  <head>

  <style>
.center {
  text-align: center;
  border: 3px solid green;
}
.center2 {
  text-align: center;
  text-color: orange;
}
</style>
<style type="text/css">
#centered_button { display: flex; justify-content: center; }
</style>

    <title> Gerador de CPF </title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body> 
  <div class="w3-card-4" style="width:50%;">
    <header class="w3-container w3-green">
      <h1 class="center">Gerador de CPF </h1>
    </header>

    <div class="w3-container">
      <div class="center2">
        <div class="w3-text-orange w3-large">
      <p class="center2" style="text-shadow:1px 1px 0 #444"> <?= $cpf
      ?>
      </p>
    </div>
      </div>
        </div>

    <footer class="w3-container w3-green">
    <div class="center">
  <p>Clique no botão para gerar um novo CPF</p>
</div>
 <div id="centered_button">
    <button onClick="window.location.reload();"> Novo CPF </button>
 </div>
    </footer>
</html>