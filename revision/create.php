<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="utf-8">
    <?php include('../page/headers.php') ?>
    <img src="../picture/logo.png" width="300" height="100">
    <title></title>
  </head>
  <body>
   <div class="pt5">
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
           <div class="pv3">
             <a class="btn btn-secondary" href="index.php">Regresar</a>
           </div>
           <div class="col-sm-12 tr pa3">
             <a class="btn btn-primary" href="create2.php">Nuevo Punto</a>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-sm-8">
          <table class="table">
            <thead>
              <th scope="col">#</th>
              <th scope="col">Revisión</th>
              <th></th>
              <th scope="col">Acciones</th>
            </thead>
            <tbody>
              <?php
                include '../Classes/models.php';
                $revisions = Revisions::all();

                foreach ($revisions as $revision ) {
                  ?>
                   <tr>
                     <th scope="row"><?php echo $revision->id ?></th>
                     <td><?php echo $revision->problem ?></td>
                     <td>
                       <div class="form-check">
                         <input class="form-check-input" type="radio" name="exampleRadios2" id="<?php echo $revision_id->name ?>" value="option1" checked>
                         <label class="form-check-labe2" for="exampleRadios3">OK</label>
                       </div>
                       <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios2" id="<?php echo $revision_id->name ?>" value="option2">
                        <label class="form-check-labe2" for="exampleRadios4">No Garantizado</label>
                      </div>
                    </td>
                    <td>
                     <a class="btn btn-danger" href="delete.php?id=<?php echo $revision->id ?>">Borrar</a>
                    </td>
                   </tr>
                  <?php
                }
               ?>
            </tbody>
          </table>
         </div>
       </div>
     </div>
   </div>
  </body>
</html>
