<?php 

    include("db.php");

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $query = "SELECT * FROM tbllibros WHERE id = $id";

        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1){

            $row = mysqli_fetch_array($result);
            $titulo = $row['Titulo'];
            $autor = $row['Autor'];
        }

    }


    if(isset($_POST['update'])){
        $id =  $_GET['id'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];

        $query = "UPDATE tbllibros SET Titulo = '$titulo', Autor = '$autor' WHERE id = $id";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Book Update Succesfully';
        $_SESSION['message_type'] = 'warning';

        header("Location: index.php");

        
    }

?>   

<?php include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
    <div class="col-md-4 mx-auto">
    <div class="card card-body">


    <form action = "edit_book.php?id=<?php echo $_GET['id']; ?>" method ="POST">

    <div class="form-group">
    
        <input type = "text" name="titulo" value ="<?php echo $titulo;?>"
        class="form-control" placeholder ="Update title">


    </div>

    <div class="form-group">

      <textarea class="form-control" placeholder = "Update Description" 
      name="autor" id="" rows="2"><?php echo $autor; ?></textarea>

    </div>

    <button class="btn btn-succes" name = "update">
    Update 
    </button>
    </form>
    </div>
    </div>
    </div>
</div>

<?php include("includes/footer.php") ?>