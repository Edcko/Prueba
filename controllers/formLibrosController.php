<?php 

class formControllers{


   static public function ctrRegistro(){

        
    if(isset($_POST['id'])){

      $tabla = "tbllibros";
  
      $datos = array("ID" => $_POST['id'],
        "ISBN" => $_POST['isbn'],
        "Titulo" => $_POST['titulo'],
        "Autor" => $_POST['autor'],
        "Editorial" =>  $_POST['editorial'],
        "Edicion" => $_POST['edicion'],
        "Anio" => $_POST['anio'],
        "noEjemplares" => $_POST['noEjemplares']);

      $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

      return $respuesta; 

       
      }


    }

      /* Seleccionar registros de libros */

    static public function ctrSeleccionarRegistros($item, $valor){

      $tabla = "tbllibros";

      $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

      return $respuesta;
    }

    public function ctrEditar(){

      if(isset($_POST['actualizarId'])){

        $tabla = "tbllibros";
        $item = "id";
        $valor = $_POST["actualizarId"];

        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

        
      }


    }

      /* Actualizar registros de libros */

    static public function ctrActualizarLibro(){

                  
    if(isset($_POST['update'])){

      $tabla = "tbllibros";
  
      $datos = array("ID" => $_POST['actualizarId'],
        "ISBN" => $_POST['actualizarIsbn'],
        "Titulo" => $_POST['actualizarTitulo'],
        "Autor" => $_POST['actualizarAutor'],
        "Editorial" =>  $_POST['actualizarEditorial'],
        "Edicion" => $_POST['actualizarEdicion'],
        "Anio" => $_POST['actualizarAnio'],
        "noEjemplares" => $_POST['actualizarNoEjemplares']);

      $respuesta = ModeloFormularios::mdlActualizarLibro($tabla, $datos);

      return $respuesta;
       
        }
}

     /* Eliminar registros de libros */

     public function ctrEliminarLibro(){
                  
      if(isset($_POST['eliminarLibro'])){
  
        $tabla = "tbllibros";
    
        $valor = $_POST["eliminarLibro"];

        $respuesta = ModeloFormularios::mdlEliminarLibro($tabla, $valor);
  
        if($respuesta == "ok"){

          echo '<script> 
                    
          if( window.history.replaceState ){
          
              window.history.replaceState( null, null, window.location.href);
          }
          
          window.location = "index.php?pagina=inicio";
          
          </script>';
        }
         
          }
  }



}

?>