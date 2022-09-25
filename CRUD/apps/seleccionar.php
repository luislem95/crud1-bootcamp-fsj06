<?php
include("../model/conexion.php");



$id=$_GET['id'];


$consulta = $bd->prepare("SELECT* FROM carros WHERE id=?");
$resultado=$consulta->execute([$id]);
$carro=$resultado->fetch(PDO::FETCH_LAZY);



$id=$carro['id'];
$img=$carro['img'];
$modelo=$carro['modelo'];
$marca=$carro['marca'];
$motor=$carro['motor'];
$año=$carro['año'];
$color=$carro['color'];
$status=$carro['status'];


if($resultado){

    header("Location:../index.php");
    
}






?>