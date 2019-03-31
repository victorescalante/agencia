<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Lista De Equipos</title>
    <?php include('../page/headers.php') ?>
    <img src="../picture/logo.png" width="300" height="100">
  </head>
  <body>
    <div class="pt-7">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="pv3 ">
              <center>
                <a class="btn btn-secondary" href="../index.php">Inicio</a>
                <a class="btn btn-secondary" href="#">Descripción</a>
                <a  class="btn btn-secondary" href="../revision/index.php">Revisiones</a>
                <a class="btn btn-secondary" href="../fails/index.php">Fallas</a>
                <a class="btn btn-secondary" href="../proveedores/index.php">Proveedores</a>
              </center>
              <br>
              <center>
                <table class="table" style="color:#FDFEFE">
                  <tbody>
                      <?php
                        include '../Classes/models.php';
                        $description = Descripción::all();

                        foreach ($descriptions as $description) {
                          // code...

                       ?>
                         <tr class="table-active">
                           <th scope="col">Nombre Del Equipo</th>
                           <td><?php echo $description->name ?></td>
                         </tr>
                         <tr class="table-active">
                           <th scope="col">Marca</th>
                           <td><?php echo $description->brand ?></td>
                         </tr>
                         <tr class="table-active">
                           <th scope="col">Agencia</th>
                           <td><?php $description->agency ?></td>
                         </tr>
                         <tr class="table-active">
                           <th scope="col">Poliza</th>
                           <td></td>
                           <td></td>
                         </tr>
                         <tr class="table-active">
                           <th scope="col">Estado del Equipo</th>
                           <td></td>
                         </tr>
                         <?php
                       }
                       ?>
                 </tbody>
                </table>
              </center>
              <center>
                <a class="btn btn-primary" href="create.php">Editar</a>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
