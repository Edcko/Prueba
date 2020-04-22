<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria</title>

    <!-- Bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/56f0c1e362.js" crossorigin="anonymous"></script>

     <!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="./js/table.js"></script>

    <!-- CSS -->

    <link rel="stylesheet" type="text/css" href="./css/style.css" />

</head>
<body>


<script type="text/javascript" src="/js/table.js"></script>

<!-- JUMBOTRON -->

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Libreria</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>



<!--BOTONERA-->


<div class="container-fluid bg-light">

    <div class="container">
    
    <ul class="nav nav-justified py-2 nav-pills">


    <?php if(isset($_GET["pagina"])): ?>

        <?php if($_GET["pagina"]=="inicio"): ?>
        
            <li class="nav-item">
            <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
        </li>

        <?php else: ?>

            <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
        </li>
        <?php endif ?>

        <?php if($_GET["pagina"]=="libros"): ?>
        
        <li class="nav-item">
        <a class="nav-link active" href="index.php?pagina=libros">Libro</a>
    </li>

    <?php else: ?>

        <li class="nav-item">
        <a class="nav-link" href="index.php?pagina=libros">Libro</a>
    </li>

    
    <?php endif ?>
    
    <?php if($_GET["pagina"]=="prestamo"): ?>
        
        <li class="nav-item">
        <a class="nav-link active" href="index.php?pagina=prestamo">Prestamo</a>
    </li>

    <?php else: ?>

        <li class="nav-item">
        <a class="nav-link" href="index.php?pagina=prestamo">Prestamo</a>
    </li>

    <?php endif ?>

    <?php else: ?>

        <li class="nav-item">
            <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=libros">Libros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=prestamo">Prestamo</a>
        </li>

    <?php endif ?>
            
       
    </ul>
    
    </div>

    </div>


<!-- Contenido  -->

<div class="container">

<div class="container p-4">

    <?php


    if(isset($_GET["pagina"])){

        if($_GET["pagina"] == "inicio" ||
           $_GET["pagina"] == "libros" ||
           $_GET["pagina"] == "edit" ||
           $_GET["pagina"] == "prestamo"){

           include "pages/".$_GET["pagina"].".php";
          
        }else{

            include "pages/error404.php";


        }

    }else{

        include "pages/inicio.php";

    }
     
    
    ?>

</div>
</div>

<!-- ---------------------------------------------- -->




</body>
</html>