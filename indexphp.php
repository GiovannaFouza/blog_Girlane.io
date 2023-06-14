<?php
$conexao=mysqli_connect("localhost","root","","bd_blog")or die ("erro na conexão do servidor");
    
                $codigo_tabela=$_POST['codigo_tabela'];
                $login=$_POST['login'];
                $senha=$_POST['senha'];

               $sql = "SELECT login, senha FROM administracao WHERE codigo_tabela = 1";


                $res = mysqli_query($conexao,$sql);

                if($res==true){
                echo ("<script>
                    window.alert('LOGADO COM SUCESSO')
                    window.location.href = 'administracao.php';
                </script>");
                }else{
                echo ("<script>
                    window.alert('PROBLEMAS COM LOGIN')
                    window.location.href = 'indexlogin.php';
                </script>");
                }
                
              ?>  
