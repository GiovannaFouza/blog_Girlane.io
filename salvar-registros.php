<?php
$conexao=mysqli_connect("localhost","root","","bd_blog")or die ("erro na conexão do servidor");
     switch(@$_REQUEST["acao"]){

          case "incluir":
                $cod_cliente=$_POST['cod_cliente'];
                $razao_social=$_POST['razao_social'];
                $nome_fantasia=$_POST['nome_fantasia'];
                $endereco=$_POST['endereco'];
                $complemento=$_POST['complemento'];
                $bairro=$_POST['bairro'];
                $cidade=$_POST['cidade'];
                $estado=$_POST['estado'];
                $data_inclusao=$_POST['data_inclusao'];
             
                function validarData($data_inclusao, $formato = 'Y/m/d H:i:s'){
                    $d = DateTime::createFromFormat($formato, $data_inclusao);
                    
                    return $d && $d->format($formato) == $data_inclusao;
                }
                if(validarData($data_inclusao, 'Y/m/d')){
                    echo ("<script>
                            window.alert('DATA VÁLIDA')
                            window.location.href='?page';
                        </script>");
                    
                    $sql = "INSERT INTO cliente (cod_cliente,razao_social,nome_fantasia,endereco,complemento,bairro,cidade,estado,data_inclusao) VALUES ('{$cod_cliente}','{$razao_social}','{$nome_fantasia}','{$endereco}','{$complemento}','{$bairro}','{$cidade}','{$estado}','{$data_inclusao}')";
             
               
                $res = mysqli_query($conexao,$sql);
             
                if($res==true){
                    echo ("<script>
                            window.alert('REGISTRADO COM SUCESSO')
                            window.location.href='?page';
                        </script>");
                }else{
                     echo ("<script>
                            window.alert('CLIENTE NÃO REGISTRADO')
                            window.location.href='?page';
                        </script>");
                }
                }else{
                     echo ("<script>
                            window.alert('DATA INVÁLIDA')
                            window.location.href='?page=novo';
                        </script>");
                }
             
                

          break;

         case "editar":
                $cod_cliente=$_POST['cod_cliente'];
                $razao_social=$_POST['razao_social'];
                $nome_fantasia=$_POST['nome_fantasia'];
                $endereco=$_POST['endereco'];
                $complemento=$_POST['complemento'];
                $bairro=$_POST['bairro'];
                $cidade=$_POST['cidade'];
                $estado=$_POST['estado'];
                $data_inclusao=$_POST['data_inclusao'];
             
                $sql = "UPDATE cliente SET cod_cliente='{$cod_cliente}',razao_social='{$razao_social}',nome_fantasia='{$nome_fantasia}',endereco='{$endereco}',complemento='{$complemento}',bairro='{$bairro}',cidade='{$cidade}',estado='{$estado}',data_inclusao='{$data_inclusao}'
                        WHERE
                             cod_cliente=".$_REQUEST['cod_cliente'];
             
             
               $res = mysqli_query($conexao,$sql);
             
                if($res==true){
                    echo ("<script>
                            window.alert('EDITADO COM SUCESSO')
                            window.location.href='?page';
                        </script>");
                }else{
                     echo ("<script>
                            window.alert('NÃO FOI POSSÍVEL EDITAR')
                            window.location.href='?page';
                        </script>");
                }
          break;

         case "excluir":
                
               $sql = "DELETE FROM cliente WHERE cod_cliente=".$_REQUEST['cod_cliente'];
             
//               $sql = "DELETE FROM contato WHERE cod_contato = 0";
             
               $res = mysqli_query($conexao,$sql);
             
                if($res == true){
                    echo ("<script>
                            window.alert('EXCLUIDO COM SUCESSO')
                            window.location.href='?page';
                        </script>");
                }else{
                     echo ("<script>
                            window.alert('NÃO PODE SER EXCLUIDO, ESTÁ ASSOCIADO A UM CONTATO')
                            window.location.href='?page';
                        </script>");
                }
             
          break;

          case "incluirContato":
                $cod_cliente=$_POST['cod_cliente'];
                $cod_contato=$_POST['cod_contato'];
                $nome_contato=$_POST['nome_contato'];
                $telefone1=$_POST['telefone1'];
                $telefone2=$_POST['telefone2'];
                $celular=$_POST['celular'];
                $email=$_POST['email'];
            
                $sql = "INSERT INTO contato (cod_cliente,cod_contato,nome_contato,telefone1,telefone2,celular,email) VALUES ('{$cod_cliente}','{$cod_contato}','{$nome_contato}','{$telefone1}','{$telefone2}','{$celular}','{$email}')";
            
            
                $res = mysqli_query($conexao,$sql);
            
                if($res==true){
                    echo ("<script>
                            window.alert('REGISTRADO COM SUCESSO')
                            window.location.href='?page';
                        </script>");
                }else{
                    echo ("<script>
                            window.alert('CONTATO NÃO REGISTRADO')
                            window.location.href='?page';
                        </script>");
                }
                break;

        case "excluirContato":
                
                $sql = "DELETE FROM contato WHERE cod_contato=".$_REQUEST['cod_contato']; 
              
                $res = mysqli_query($conexao,$sql);
              
                 if($res==true){
                     echo ("<script>
                             window.alert('EXCLUIDO COM SUCESSO')
                             window.location.href='?page';
                         </script>");
                 }else{
                      echo ("<script>
                             window.alert('NÃO FOI POSSÍVEL EXCLUIR')
                             window.location.href='?page';
                         </script>");
                 }
              
           break;

        case "editarContato":           
            $cod_cliente=$_POST['cod_cliente'];
            $cod_contato=$_POST['cod_contato'];
            $nome_contato=$_POST['nome_contato'];
            $telefone1=$_POST['telefone1'];
            $telefone2=$_POST['telefone2'];
            $celular=$_POST['celular'];
            $email=$_POST['email'];
         
            $sql = "UPDATE contato SET nome_contato='{$nome_contato}',telefone1='{$telefone1}',telefone2='{$telefone2}',celular='{$celular}',email='{$email}'
                    WHERE
                    cod_contato=".$_REQUEST['cod_contato'];
         
         
           $res = mysqli_query($conexao,$sql);
             
                if($res==true){
                    echo ("<script>
                            window.alert('EDITADO COM SUCESSO')
                            window.location.href='?page=edita';
                        </script>");
                }else{
                     echo ("<script>
                            window.alert('NÃO FOI POSSÍVEL EDITAR')
                            window.location.href='?page=edita';
                        </script>");
                }
          break;
          default:
              print "";
           }
?>