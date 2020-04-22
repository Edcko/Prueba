
        <div class="row">

            <div class="col md-4">

            
            <div class="d-flex justify-content-center">
        
                <form  method="POST">

                    <div class="form-group">

                    <div class="form-group">
                
                        <input type="number" name="id" class="form-control" placeholder="ID" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name="titulo" class="form-control" placeholder="Book title" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name="autor" class="form-control" placeholder="Autor" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name="isbn" class="form-control" placeholder="ISBN" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name="editorial" class="form-control" placeholder="Editorial" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name="edicion" class="form-control" placeholder="Edicion" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name="anio" class="form-control" placeholder="Anio" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="number" name="noEjemplares" class="form-control" placeholder="Numero ejemplares"
                            autofocus>
                    </div>
 
                    <?php 
                    
                    $registro = formControllers:: ctrRegistro();
                    
                    if($registro == "ok"){


                    echo '<script> 
                    
                    if( window.history.replaceState ){
                    
                        window.history.replaceState( null, null, window.location.href);
                    }
                    
                    
                    </script>';

                    echo '<div class="alert alert-success">El libro ha sido registrado</div>';

                }
                    ?>

                    <input type="submit" class="btn btn-success btn-block" name="save_book" value="Guardar libro">
                </form>
   

        </div>

        </div>

    
</div>

</div>

