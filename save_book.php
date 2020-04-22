<?php 

    include("db.php");
 
    if(isset($_POST['save_book'])){
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




<table class="table">
  <thead class="thead-dark">
    <tr>
     
      <th class="th-sm"> Titulo </th>
                <th class="th-sm"> ISBN</th>
                <th class="th-sm"> Autor </th>
                <th class="th-sm"> Editorial </th>
                <th class="th-sm">  Edicion </th>
                <th class="th-sm"> Año </th>
                <th class="th-sm"> Ejemplares </th>
                <th class="th-sm"> Acciones </th>


      </th>
    </tr>
  </thead>
  <tbody>
  
  <?php 
        $query = "SELECT * FROM tbllibros";
        $result_lib = mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($result_lib)){ ?>

            <tr>
                <td><?php echo $row['Titulo']?></td>
                <td><?php echo $row['ISBN']?></td>
                <td><?php echo $row['Autor']?></td>
                <td><?php echo $row['Editorial']?></td>
                <td><?php echo $row['Edicion']?></td>
                <td><?php echo $row['Anio']?></td>
                <td><?php echo $row['noEjemplares']?></td>

                <td>

                    <a href="edit_book.php?id=<?php echo $row['ID']?>" class="btn btn-secondary">

                        <i class="fas fa-marker"></i>

                    </a>

                    <a href="delete_book.php?id=<?php echo $row['ID']?>" class="btn btn-danger">

                        <i class="far fa-trash-alt"></i>

                    </a>

                </td>


            </tr>

            <?php } ?>


  </tbody>
</table>

