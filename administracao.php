<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Administração - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Favicons -->
    <link href="assets/img/favicon01.png" rel="icon">
    <link href="assets/img/apple=touch-icon01.png" rel="apple-touch-icon">




</head>

<body>


    <div class="col-sm-3"></div>

    <div id="centro" class="col-sm-6">
        <h1>FORMULÁRIO PARA INSERIR POST</h1>
        <form class="form" method="POST" action="administracaophp.php" name="administracao">
            <div class="form-group">
                <label >imagem post:</label>
                <input type="hidden" name="post" class="form-control" id="post">
                <input type="file" name="imagem" class="form-control" id="imagem">
            </div>
            
            <div class="form-group">
                <label>Categoria do post:</label>
                <textarea type="text" name="categoria_post" class="form-control" id="categoria_post">
            </textarea>
            <div class="form-group">
                <label >Data:</label>
                <input type="text" name="data" class="form-control" id="data">
            </div>
            <div class="form-group">
                <label >Titulo do post:</label>
                <textarea type="text" name="titulo_post" class="form-control" id="titulo_post">
            </textarea>
            <div class="form-group">
                <label >Descrição:</label>
                <textarea type="text" name="descricao" class="form-control" id="descricao">
            </textarea>
            <div class="form-group">
                <label >Imagem do autor:</label>
                <input type="file" name="imagem_autor" class="form-control" id="imagem_autor">
            </div>
            <div class="form-group">
                <label >Nome do autor:</label>
                <input type="text" name="nome_autor" class="form-control" id="nome_autor">
            </div>

                <button type="submit" class="btn btn-default">Submit</button>
          
                </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>