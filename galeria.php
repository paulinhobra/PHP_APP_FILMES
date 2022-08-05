<?php include "cabecalho.php"; ?>
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
        <div class="col s3 ">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="assets/img/vingadores.jpg">                    
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <span class="card-title">Vingadores</span>
                    <p class="valign-wrapper"><i class="material-icons amber-text">star</i>9</p>
                    <p>Após Thanos eliminar metade das criaturas vivas de todo o universo, os heróis sobreviventes precisam lidar com a dor da perda de amigos e seus entes.</p>
                </div>
            </div>
        </div>

        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image ">
                    <img src="assets/img/mercenarios.jpg">                    
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <span class="card-title">Os Mercenários</span>
                    <p class="valign-wrapper"><i class="material-icons amber-text">star</i>9</p>
                    <p>Um grupo de mercenários, liderado por Barney Ross e composto de seus homens de confiança, aceita uma missão que parece ser rotineira.</p>
                </div>
            </div>
        </div>

        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image ">
                    <img src="assets/img/rocky.jpg">                    
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <span class="card-title">Rocky</span>
                    <p class="valign-wrapper"><i class="material-icons amber-text">star</i>9</p>
                    <p>Rocky Balboa, um pequeno boxeador da classe trabalhadora da Filadélfia, é arbitrariamente escolhido para lutar contra o campeão dos pesos pesados.</p>
                </div>
            </div>
        </div>

        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image ">
                    <img src="assets/img/dragao-branco.jpg">                    
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <span class="card-title">O grande dragão branco</span>
                    <p class="valign-wrapper"><i class="material-icons amber-text">star</i>9</p>
                    <p>O soldado americano Frank Dux vai a Hong Kong para ser aceito no Kumite, uma competição de artes marciais altamente secreta e extremamente violenta.</p>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>