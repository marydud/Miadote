<?php 

    class db{

       $servidor = 'localhost';

       $usuario = 'root';

       $senha = '';

      $dbname = 'miadote';

      //criar a conexão

        $conn = mysqli_connect($servidor, $usuario, $senha ,$dbname);


      }

  }

?>
