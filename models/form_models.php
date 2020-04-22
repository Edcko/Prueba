<?php

require_once "db.php";

class ModeloFormularios{

/* Crear libros */

static public function mdlRegistro($tabla, $datos){

    #statement: declaracion

    #Prepara una sentencia SQL para ser ejecutada por el método PDOStatement::execute(). La sentencia SQL puede contener cero o más marcadores de parámetros con nombre (:name) o signos de interrogación (?) por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada. No se pueden usar marcadores de parámetros con nombre y signos de interrogación en la misma sentencia SQL; se debe elegir uno de los dos estilos de parámetros. Se deben usar estos parámetros para sustituir cualquier dato de usuario, y no usarlos directamente en la consulta. 

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(ID, ISBN, Titulo, Autor, Editorial, Edicion, Anio, noEjemplares)
    VALUES (:ID, :ISBN, :Titulo, :Autor, :Editorial, :Edicion, :Anio, :noEjemplares)");

    #bindParam: Vincula una variable de PHP a un parámetro de sustitución con nombre o de signo de interrogación correspondiente de la sentencia SQL que fue usada para preparar la sentencia. A diferencia de PDOStatement::bindValue(), la variable es vinculada como una referencia y solamente será evaluada en el momento en el que se llame a PDOStatement::execute().

    $stmt->bindParam(":ID", $datos["ID"], PDO::PARAM_INT);
    $stmt->bindParam(":ISBN", $datos["ISBN"], PDO::PARAM_STR);
    $stmt->bindParam(":Titulo", $datos["Titulo"], PDO::PARAM_STR);
    $stmt->bindParam(":Autor", $datos["Autor"], PDO::PARAM_STR);
    $stmt->bindParam(":Editorial", $datos["Editorial"], PDO::PARAM_STR);
    $stmt->bindParam(":Edicion", $datos["Edicion"], PDO::PARAM_STR);
    $stmt->bindParam(":Anio", $datos["Anio"], PDO::PARAM_STR);
    $stmt->bindParam(":noEjemplares", $datos["noEjemplares"], PDO::PARAM_INT);

    if($stmt->execute()){
        return "ok";
    }else{
        print_r(Conexion::conectar()->errorInfo());
    }

    $stmt->close();

    $stmt = null;
}   

    /* Seleccionar libros */
    static public function mdlSeleccionarRegistros($tabla, $item, $valor){

        if($item == null && $valor == null){
        
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt -> fetchAll();

    }else{

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY ID DESC");

        $stmt->bindParam(":".$item, $valor, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt -> fetch();

    }

        $stmt->close();

        $stmt = null;

    }

    /* Actualizar libros */
    static public function mdlActualizarLibro($tabla, $datos){
       
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET ID=:ID, ISBN=:ISBN, Titulo=:Titulo, Autor=:Autor, 
        Editorial=:Editorial, Edicion=:Edicion, Anio =:Anio, noEjemplares =:noEjemplares WHERE ID = :ID");
        
        $stmt->bindParam(":ID", $datos["ID"], PDO::PARAM_INT);
        $stmt->bindParam(":ISBN", $datos["ISBN"], PDO::PARAM_STR);
        $stmt->bindParam(":Titulo", $datos["Titulo"], PDO::PARAM_STR);
        $stmt->bindParam(":Autor", $datos["Autor"], PDO::PARAM_STR);
        $stmt->bindParam(":Editorial", $datos["Editorial"], PDO::PARAM_STR);
        $stmt->bindParam(":Edicion", $datos["Edicion"], PDO::PARAM_STR);
        $stmt->bindParam(":Anio", $datos["Anio"], PDO::PARAM_STR);
        $stmt->bindParam(":noEjemplares", $datos["noEjemplares"], PDO::PARAM_INT);
    
    
        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
    
        $stmt->close();
    
        $stmt = null;
    }   
    

     /* Eliminar libros */
     static public function mdlEliminarLibro($tabla, $valor){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE ID = :ID");
        
        $stmt->bindParam(":ID", $valor, PDO::PARAM_INT);
       
        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
    
        $stmt->close();
    
        $stmt = null;
    }   
    


}