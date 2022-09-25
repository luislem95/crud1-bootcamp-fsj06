<?php
include("../model/conexion.php");

if(empty($_POST['modelo'])||empty($_POST['marca'])||empty($_POST['motor'])||empty($_POST['año'])||empty($_POST['color'])||empty($_POST['estatus'])){
    echo " sorry capo toma un mate relajate unos segundos y vuelve a intentarlo ";
}

$img=$_FILES['img']['name']?$_FILES['img']['name']:"";
$modelo=$_POST['modelo']?$_POST['modelo']:"";
$marca=$_POST['marca']?$_POST['marca']:"";
$motor=$_POST['motor']?$_POST['motor']:"";
$año=$_POST['año']?$_POST['año']:"";
$color=$_POST['color']?$_POST['color']:"";
$estatus=$_POST['estatus']?$_POST['estatus']:"";


$fecha= new DateTime();
$imagen=($img!="")?$fecha->getTimestamp()."_".$_FILES["img"]["name"]:"imagen.jpg";
$temp=$_FILES["img"]["tmp_name"];

if ($temp!="") {
move_uploaded_file($temp, "../img/".$imagen);
}





$consulta = $bd->prepare("INSERT INTO carros(img, modelo, marca, motor, año, color, status) VALUES(?,?,?,?,?,?,?)");
$resultado=$consulta->execute([$imagen,$modelo,$marca,$motor,$año,$color,$estatus]);
if($resultado){

    header("Location:../index.php");
}
?>