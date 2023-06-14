<?php setcookie("variavel","Giovanna", (time() + (3 * 24 * 3600)));
$variavel = $_COOKIE["variavel"];
echo $idcliente = (isset($_GET['idcliente']))? $_GET['idcliente'] : "";?>
<!DOCTYPE html>
<!--ABRINDO COMANDOS HTML -->
<html lang="pt-BR">
<!-- CONFIGURANDO A LINGUAGEM A SER MOSTRADA -->

<head>
    <!--ABRINDO CABEÇALHO-->
    <title>ART MADEIRA LBM</title>
    <!--TITULO QUE APARECE NA ABA -->
    <meta charset="utf-8">
    <!--CONFIGURANDO ACENTUAÇÃO-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CONFIGURANDO A ESCALA DA PÁGINA-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--LINK PARA ACESSAR ESTILIZAÇÃO BOOTSTRAP-->
    <link rel="stylesheet" href="../css/styleloja.css">
    <!--LINK PARA O ARQUIVO CSS-->
    <link rel="icon" href="../img/favicon.png" type="image/x-icon" ?v=2 />
    <!--COMANDO DE LOGOTIPO NA ABA DA PÁGINA-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Emilys+Candy&display=swap" rel="stylesheet">
    <!--CONFIGURAÇÃO DE ESTILO DA PÁGINA
-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--LINK PARA ACESSAR ESTILIZAÇÃO BOOTSTRAP-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!--CONFIGURAÇÃO DE ESTILO DA PÁGINA-->

</head>
<!--FIM DO CABEÇAHO-->

<body>

    <div class="carregando" id="carregando"></div>
    <div class="corpo" id="corpo">

        <input type="checkbox" id="chec">
        <!--CONFIGURANDO O MENU-->

        <label for="chec"><img id="imagem" src="../img/menuvermelho.png"></label>
        <nav>
            <ul>

                <li>
                    <a id="x" href="loja.php">
                        <p id="letra"><b>PLAQUINHAS</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="../html/index.php">
                        <p id="letra"><b>PLAQUINHAS COM PELÚCIA</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="../html/loja.php">
                        <p id="letra"><b>KITS PRONTOS PARA FLIRICULTURA</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="../html/quemsomos.php">
                        <p id="letra"><b>CACHEPOS</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="../html/quemsomos.php">
                        <p id="letra"><b>CESTAS</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="../html/quemsomos.php">
                        <p id="letra"><b>PELÚCIA</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="../html/quemsomos.php">
                        <p id="letra"><b>EMBALAGENS</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="../html/quemsomos.php">
                        <p id="letra"><b>ACESSÓRIOS E APLIQUES</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="../html/quemsomos.php">
                        <p id="letra"><b>DIVERSOS</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="../html/quemsomos.php">
                        <p id="letra"><b>CASAMENTO</b></p>
                    </a>
                </li>
            </ul>
        </nav>


        <div id="iniciol" class="col-sm-12 col-md-12 col-lg-12">
           <br>
           <br>
           <br>
           <br>
            <center>
                <a href="../html/index.php">
                    <img src="../img/logotipolbmvermelho.png" width="300px" height="100px">
                </a>
            </center>
            
            
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <font color=black><img class='foto' src='../img/pessoa.png' width="50px" height="50px"><b>Meu perfil</b></font><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="FL" href="fotos.html">Fazer login</a> </li>
                            <li><a class="FL" href="videos.html">Cadastrar-se</a> </li>
                        </ul>
                    </li>
                </ul>
           
            
            <br>
            <br>
            <br>
            <br>

            <center>
                <p class="mais">Loja - Categoria Plaquinhas</p>
            </center>

       <?php /CONFIGURANDO O HTML NO PHP/
                    $conexao=mysqli_connect("localhost","root","","exposoft3")or die ("erro na conexão do servidor");/ABRINDO CONEXAO/
            
                        $categ="plaquinhas" ;
                        

                       $sql=" select * from loja where categ = '$categ'";
                       $resultado = @mysqli_query($conexao, $sql);
                       $registro = @mysqli_num_rows($resultado);

                       if($registro !== 0){
                           
                       while($usuario = @mysqli_fetch_array($resultado)){

                       $_COOKIE['codigo']=$usuario["codigo"]; 
                       $image=$usuario["enderecom"];
                       $codigo=$usuario["codigo"];
                       
                      
                        echo"&nbsp;&nbsp;&nbsp;";
                        echo"<div class=\"box\">
                            <div class=\"thumbnail\">
                                <br>";
                                 echo"<img src=../img/fotosdosdecorativos/imagenstamanhomedio/".$image.">
                                 <input type='hidden' name='codigo' value=''>";
                                echo"<div class=\"caption\">
                                <p class=\"morango\"><b>".$usuario["nomeproduto"]."</b></h2>
                                    <p class=\"chocolate\"><b>".$usuario["descpro"]."</b></p>
                                    <p class=\"chocolate\"><b> Valor:R$ &nbsp&nbsp".$usuario["precopro"]."</b></p>
                            </div>
                        </div>

                        </div>
                        &nbsp;";

                       }
                       }

                       else{ echo"Registro não localizado";
                       }
                        
            ?>

       
        </div>




        <footer class="col-sm-12 col-12 col-md-12 col-lg-12 container-fluid">
            <div class="textoesq col-sm-12 col-12 col-md-4 col-lg-4">
                <b>Contato@gmail.com<br>
                    (11) 94760-7016 (Maurício) e (11)94760-7015 (Huguete)<br>
                    Loja parceira - Ceasa</b><br><br>
            </div>
            <div class="textoc col-sm-12 col-12 col-md-5 col-lg-5">
                <b>Copyright ©️2020 All rights reserved | ArtMadeira LBM</b><br><br>
            </div>
            <div class="textodireit col-sm-12 col-12 col-md-3 col-lg-3">
                <b>Desenvolvedora -
                    Giovanna Ferracicni Souza</b>


            </div>
        </footer>

    </div>
    <!--FECHANDO A DIV-->
    <!-- DIVSÃO EM BRANCO PARA CENTRALIZAR O TEXTO-->


    <script type="text/javascript">
        // $(window).on('load', function () {

        // document.getElementById("carregando").style.display = "none";
        // document.getElementById("corpo").style.display = "block";

        //});


        var intervalo = setInterval(function() {

            clearInterval(intervalo);

            document.getElementById("carregando").style.display = "none";
            document.getElementById("corpo").style.display = "block";
        }, 4000);
    </script>

</body>
<!--FECHANDO O CORPO DA PÁGINA-->

</html>
<!-- FECHANDO A TAG HTML-->