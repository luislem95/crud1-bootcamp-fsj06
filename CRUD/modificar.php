<?php include ("templates/header.php");

include("model/conexion.php");
$id=$_GET['id'];


$consulta = $bd->prepare("SELECT * FROM carros WHERE id=?");
$consulta->execute([$id]);
$carro=$consulta->fetch(PDO::FETCH_OBJ);

$id=$carro->id;
$img=$carro->img;
$modelo=$carro->modelo;
$marca=$carro->marca;
$motor=$carro->motor;
$año=$carro->año;
$color=$carro->color;
$estatus=$carro->status;


?>


  <main>
<form action="apps/editar.php" method="post" enctype="multipart/form-data">
    <div class="container">
    
    <div class="mb-3 row">
                
                <div class="col-8">
                    <input  hidden type="text" class="form-control" name="id" id="id" value="<?php echo $id;?>" placeholder="Ingrese Modelo" required>
                </div>
            </div>

        <div class="mb-4 row">
            <label for="imagen" class="col-4 col-form-label">Imagen</label>
         <div class="col-8">
         <?php if($img!=""){?>
                <img class="img-thumbnail rounded" src="img/<?php echo $img;?>" width="75" alt="" srcset="">
        <?php } ?>
            <input type="file" class="form-control" name="img" id="img"  value="<?php echo $img;?>" placeholder="Imagen" >
            </div>
            </div>
            <div class="mb-3 row">
                <label for="modelo" class="col-4 col-form-label">Modelo</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="modelo" id="modelo" value="<?php echo $modelo;?>" placeholder="Ingrese Modelo" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="marca" class="col-4 col-form-label">Marca</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="marca" id="marca" value="<?php echo $marca;?>" placeholder="Ingrese Marca" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="motor" class="col-4 col-form-label">Motor</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="motor" id="motor" value="<?php echo $motor;?>" placeholder="Ingrese Motor" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="año" class="col-4 col-form-label">Año</label>
                <div class="col-8">
                    <input type="date" class="form-control" name="año" id="año" value="<?php echo $año;?>" placeholder="Ingrese Año" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="color" class="col-4 col-form-label">Color</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="color" id="color" value="<?php echo $color;?>" placeholder="Ingrese Color" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="estatus" class="col-4 col-form-label">Estatus</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="estatus" id="estatus" value="<?php echo $estatus;?>" placeholder="Ingrese Estatus" required>
                </div>
            </div>
            
            <div class="btn-group" role="group" aria-label="">
                <button type="submit" name="editar" value="editar" class="btn btn-warning">Modificar</button>
            </div>
</form>
  </main>

<?php include ("apps/table.php"); ?>

<?php include ("templates/footer.php"); ?>