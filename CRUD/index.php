<?php include ("templates/header.php"); ?>


  <main>
<form action="apps/ingresar.php" method="post" enctype="multipart/form-data">
    <div class="container">
    


        <div class="mb-4 row">
            <label for="imagen" class="col-4 col-form-label">Imagen</label>
         <div class="col-8">
            <input type="file" class="form-control" name="img" id="img"  " placeholder="Imagen" required>
            </div>
            </div>
            <div class="mb-3 row">
                <label for="modelo" class="col-4 col-form-label">Modelo</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Ingrese Modelo" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="marca" class="col-4 col-form-label">Marca</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="marca" id="marca"  placeholder="Ingrese Marca" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="motor" class="col-4 col-form-label">Motor</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="motor" id="motor"  placeholder="Ingrese Motor" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="año" class="col-4 col-form-label">Año</label>
                <div class="col-8">
                    <input type="date" class="form-control" name="año" id="año" placeholder="Ingrese Año" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="color" class="col-4 col-form-label">Color</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="color" id="color"  placeholder="Ingrese Color" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="estatus" class="col-4 col-form-label">Estatus</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="estatus" id="estatus" placeholder="Ingrese Estatus" required>
                </div>
            </div>
            
            <div class="btn-group" role="group" aria-label="">
                <button type="submit" name="ingresar"  value="ingresar" class="btn btn-info ">Agregar</button>
            </div>
</form>
  </main>

<?php include ("apps/table.php"); ?>

<?php include ("templates/footer.php"); ?>