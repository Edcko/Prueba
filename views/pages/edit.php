<?php

if(isset($_GET["id"])){

    $item = "ID";

    $valor = $_GET["id"];

    $libro = formControllers::ctrSeleccionarRegistros($item, $valor);

}


?>


<div class="row">

<div class="col md-4">


<div class="d-flex justify-content-center">

    <form  method="POST">

        <div class="form-group">

        <div class="form-group">
    
            <input type="number" name="actualizarId" value= "<?php echo $libro["ID"]; ?>" class="form-control" placeholder="ID" autofocus>
        </div>

        <div class="form-group">
            <input type="text" name="actualizarTitulo" value= "<?php echo $libro["Titulo"]; ?>" class="form-control" placeholder="Book title" autofocus>
        </div>

        <div class="form-group">
            <input type="text" name="actualizarAutor" value= "<?php echo $libro["Autor"]; ?>" class="form-control" placeholder="Autor" autofocus>
        </div>

        <div class="form-group">
            <input type="text" name="actualizarIsbn" value= "<?php echo $libro["ISBN"]; ?>" class="form-control" placeholder="ISBN" autofocus>
        </div>

        <div class="form-group">
            <input type="text" name="actualizarEditorial" value= "<?php echo $libro["Editorial"]; ?>" class="form-control" placeholder="Editorial" autofocus>
        </div>

        <div class="form-group">
            <input type="text" name="actualizarEdicion" value= "<?php echo $libro["Edicion"]; ?>" class="form-control" placeholder="Edicion" autofocus>
        </div>

        <div class="form-group">
            <input type="text" name="actualizarAnio" value= "<?php echo $libro["Anio"]; ?>" class="form-control" placeholder="Anio" autofocus>
        </div>

        <div class="form-group">
            <input type="number" name="actualizarNoEjemplares" value= "<?php echo $libro["noEjemplares"]; ?>" class="form-control" placeholder="Numero ejemplares"
                autofocus>
        </div>

        <?php 

            $actualizar = formControllers::ctrActualizarLibro();
                

      if($actualizar == "ok"){


        echo '<script> 
                    
        if( window.history.replaceState ){
        
            window.history.replaceState( null, null, window.location.href);
        }
        
        
        </script>';

        echo '<div class="alert alert-success">El libro ha sido actualizado</div>

        <script>

            setTimeout(function(){

              window.location = "index.php?pagina=inicio";

            },3000);

        </script>

        '; 
      }

                

        ?>

        <input type="submit" class="btn btn-success btn-block" name="update" value="Actualizar">
    </form>


</div>

</div>


</div>

</div>

