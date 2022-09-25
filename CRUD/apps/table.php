<?php 
  include ("model/conexion.php"); 
  $sentencia = $bd->query("SELECT * FROM carros WHERE status = 'activo'");
  $carros = $sentencia->fetchAll(PDO::FETCH_OBJ);
  ?>

<div class="container">
    <div class="row">
        <table class="table" id="tabla">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Motor</th>
                    <th scope="col">Año</th>
                    <th scope="col">Color</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
        
    </div>
</div>
  

  <?php
 foreach($carros as $carro){
    ?>
    <tr>
        <th scope="row"><?php echo $carro->id?></th>
        <td>
                <img class="img-thumbnail rounded" src="img/<?php echo $carro->img;?>" width="100px" alt="<?php echo $carro->img;?>" srcset="">
                </td>

        <td><?php echo $carro->modelo?></td>
        <td><?php echo $carro->marca?></td>
        <td><?php echo $carro->motor?></td>
        <td><?php echo $carro->año?></td>
        <td><?php echo $carro->color?></td>
        <td><?php echo $carro->status?></td>
        <td><button type="button" class="btn btn-light"><a style="text-decoration:none" href="modificar.php?id=<?php echo $carro->id?>">Editar</a> </button>   <button type="button" class="btn btn-light"><a style="text-decoration:none" href="apps/borrar.php?id=<?php echo $carro->id?>">Vendido</a></button></td>
        
    </tr>
<?php } ?>  
</table>
<script>
    var tabla= document.querySelector("#tabla");
    var dataTable = new DataTable(tabla);
</script>



