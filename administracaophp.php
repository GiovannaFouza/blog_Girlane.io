<?php
$conexao=mysqli_connect("localhost","root","","bd_blog")or die ("erro na conexão do servidor");
     

                $post=$_POST['post'];
                $imagem=$_POST['imagem'];
                $categoria_post=$_POST['categoria_post'];
                $data=$_POST['data'];
                $titulo_post=$_POST['titulo_post'];
                $descricao=$_POST['descricao'];
                $imagem_autor=$_POST['imagem_autor'];
                $nome_autor=$_POST['nome_autor'];




                $sql = "INSERT INTO post (post,imagem,categoria_post,data,titulo_post,descricao,imagem_autor,nome_autor) VALUES ('{$post}','{$imagem}','{$categoria_post}','{$data}','{$titulo_post}','{$descricao}','{$imagem_autor}','{$nome_autor}')";


                $res = mysqli_query($conexao,$sql);

                if($res==true){
                echo ("<script>
                    window.alert('INSERIDO COM SUCESSO')
                    window.location.href = 'index.php';
                </script>");
                }else{
                echo ("<script>
                    window.alert('PROBLEMAS COM FORMULÁRIO')
                    window.location.href = 'administracao.php';
                </script>");
                }
                
              ?>  
