<?php
include("../model/conexion.php");
 

$id=$_POST['id'];
$img=$_FILES['img']['name']?$_FILES['img']['name']:"";
$modelo=$_POST['modelo']?$_POST['modelo']:"";
$marca=$_POST['marca']?$_POST['marca']:"";
$motor=$_POST['motor']?$_POST['motor']:"";
$año=$_POST['año']?$_POST['año']:"";
$color=$_POST['color']?$_POST['color']:"";
$estatus=$_POST['estatus']?$_POST['estatus']:"";

if ($img!="") {
    $fecha=new DateTime();
    $imagen=($img!="") ? $fecha->getTimestamp()."_".$_FILES["img"]["name"] : "imagen.jpg";
    $temp=$_FILES["img"]["tmp_name"];

    move_uploaded_file($temp, "../img/".$imagen);
    $consulta = $bd->prepare("SELECT img FROM carros WHERE id=?");
    $consulta->execute([$id]);
    $carro=$consulta->fetch(PDO::FETCH_OBJ);

    if (isset($carro->img) && ($carro->img != "imagen.jpg")) {
        if (file_exists("../img/".$carro->img)) {
            unlink("../img/".$carro->img);
        }
    }
    $consulta = $bd->prepare("UPDATE carros SET img=? WHERE id=?");
    $consulta->execute([$imagen,$id]);
}


    $consulta = $bd->prepare("UPDATE carros SET modelo=?,marca=?,motor=?,año=?,color=?,status=?  WHERE id=?");
    $res=$consulta->execute([$modelo,$marca,$motor,$año,$color,$estatus,$id]);
if($res){header("Location:../index.php");}
else{ echo "sorry capo";}




?>