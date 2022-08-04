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
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title center">CADASTRAR FILME</span>
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="titulo" class="validate" require>
                            <label for="titulo">Título do Filme</label>
                        </div>
                    </div>    

                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="card-action">
                    <a class="btn waves-effect waves-light grey" href="galeria.php">Cancelar</a>
                    <a href="#" class="waves-effect waves-light btn light-blue darken-4">Cadastrar</a>
                </div>
            </div>
        </div>
    </div>
     
</body>
</html>