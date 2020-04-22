<?php

$libros = formControllers::ctrSeleccionarRegistros(null, null);

?>

<table class="table border">
  <thead class="thead-dark">
    <tr>
                <th>TITULO</th>
                <th>ISBN</th>
                <th>AUTOR</th>
                <th>EDITORIAL</th>
                <th>EDICION</th>
                <th>AÑO</th>
                <th>EJEMPLARES</th>
                <th>ACCIONES</th>
    </tr>
  </thead>
  <tbody>

            <?php foreach ($libros as $key => $value): ?>

              <tr>
                <td><?php echo $value['Titulo']; ?></td>
                <td><?php echo $value['ISBN']; ?></td>
                <td><?php echo $value['Autor']; ?></td>
                <td><?php echo $value['Editorial']; ?></td>
                <td><?php echo $value['Edicion']; ?></td>
                <td><?php echo $value['Anio']; ?></td>
                <td><?php echo $value['noEjemplares']; ?></td>

                <td>

                <div class= "btn-group">

                <div class="px-1">

                    <a href="index.php?pagina=edit&id=<?php echo $value["ID"]; ?>" class="btn btn-secondary">

                        <i class="fas fa-marker"></i>

                    </a>

                 </div>   


            

              <form method="post">

                    <input type="hidden" value="<?php echo $value["ID"]; ?>" name="eliminarLibro">

                    <button type="submit" class="btn btn-danger">

                        <i class="far fa-trash-alt"></i>

                    </button>

                    <?php 
                    
                      $eliminar = new formControllers();
                      $eliminar -> ctrEliminarLibro();
                    
                    ?>

                  </form>


                    </div>

                </td>

            </tr>

            <?php endforeach ?>         
  </tbody>
</table>

