<?php 

    include("db.php");
 
    if(isset($_POST['save_task'])){
        $id = $_POST['id'];
        $isbn = $_POST['isbn'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $editorial = $_POST['editorial'];
        $edicion = $_POST['edicion'];
        $anio = $_POST['anio'];
        $noEjemplares = $_POST['noEjemplares'];
       
      


        $query = "INSERT INTO tbllibros(ID, ISBN, Titulo, Autor, Editorial, Edicion, Anio, noEjemplares)
        VALUES ('$id', '$isbn', '$titulo', '$autor', '$editorial', '$edicion', '$anio', '$noEjemplares')"; 
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query failed");
        }

        $_SESSION['message'] = 'Task Saved succefully';
        $_SESSION['message_type'] = 'success';

        header("location: index.php");
    }

?>