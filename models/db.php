<?php

   class Conexion{

      static public function conectar(){

         $conn = new PDO("mysql:host=localhost;dbname=biblioteca",
         "root", "");

         $conn->exec("set names utf8");
         
         return $conn;

      }
      
   }

 ?>



 