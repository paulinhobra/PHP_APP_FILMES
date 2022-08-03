<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>            
</head>
<body>
    <nav class="nav-extended">
        <div class="nav-wrapper light-blue accent-4">
        <a href="#" class="brand-logo center">FILMES</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="galeria.php">Galeira</a></li>
            <li><a href="cadastrar.php">Cadastrar</a></li>            
        </ul>
        </div>
        <div class="nav-content">
        <ul class="tabs tabs-transparent light-blue darken-4">
            <li class="tab"><a class="active" href="#test1">Todos</a></li>
            <li class="tab"><a href="#test2">Assistidos</a></li>
            <li class="tab"><a href="#test3">Favoritos</a></li>
        </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col s3">
            <div class="card">
                <div class="card-image">
                    <img src="http://materializecss.com/images/sample-1.jpg">
                    <span class="card-title">Vingadores</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <p><i class="material-icons amber-text">star</i>9</p>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>