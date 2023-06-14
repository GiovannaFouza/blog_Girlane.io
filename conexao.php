<?php
       $conexao=mysqli_connect("localhost","root","","bd_blog")or die ("erro na conexão do servidor");
       if (!$conexao) {

       echo "Não foi possível conectar ao banco MySQL"; exit;

       }

       else {

       echo "O banco de dados MySQL está conectando";

           }
      
      ?>