<?php
// Variaveis
$con = mysqli_connect('localhost','root','usbw','encontro'); 

$numero = rand(1,100);

$pes = "SELECT nome FROM encontros WHERE id = $numero";

$query = mysqli_query($con,$pes);

$resultado = mysqli_fetch_row($query);

$nome = $resultado[0];


?>