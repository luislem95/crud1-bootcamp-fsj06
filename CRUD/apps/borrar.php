<?php
include("../model/conexion.php");


$id=$_GET['id'];
$estatus="vendido";


$consulta = $bd->prepare("UPDATE carros SET status=? WHERE id=?");
$resultado=$consulta->execute([$estatus,$id]);


if($resultado){header("Location:../index.php");}
else{ echo "sorry capo";}





?>