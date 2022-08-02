<?php
$altura= $_GET['altura'];
$peso= $_GET['peso'];

echo "IMC:".($peso/($altura*$altura))."<br>";
?>