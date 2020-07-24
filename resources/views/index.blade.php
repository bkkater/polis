<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polis</title>

    <link rel="shortcut icon" href="../../public/assets/shortcut-logo.png" />
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('../styles/home-page.css')}}" href="../styles/home-page.css" />
    <script src="../scripts/page-home.js"></script>
    
</head>

<body onload="filterCards()">
<nav class="menu">
    <div class="user">
        <img src="../../public/assets/user.svg" alt="Foto do usuário" class="user-photo">
        <div class="user-information">
            <h3>Joana da Silva</h3>
            <img src="../../public/assets/down-arrow.svg" alt="Submenu">
        </div>
        <div class="gold">
            <span>1456 pontos</span>
            <h4>Gold</h4>
        </div>
    </div>

    <ul>
        <li>
            <h2>Interesses</h2>
        </li>
        <li><button class="active">Geral</button></div></li>
        <li><button>Cidadania</button></li>
        <li><button>Comunidade</button></li>
        <li><button>Imersão</button></li>
        <li><button>Leis</button></li>
        <li><button>Tabu</button></li>
        <li><button>Você Político</button></button>
    </ul>
</nav>
<div class="container">
    <nav>
        <img src="../../public/assets/logo-text.png" alt="Logo da Polis" class="logo">

        <ul class="content-menu">
            <li><img src="../../public/assets/bell.svg" alt="Notificações"></li>
            <li><span>Sobre</span></li>
            <li><span>Ajuda</span></li>
            <li class="input"><input type="text" placeholder="Pesquisar" id="input-field"><img src="../../public/assets/search.svg" alt=""></li>
        </ul>
    </nav>
    <div class="content">
        <div class="first-content">
            <div class="card">
                <h2 class="filter-data">Endenda o que é ser Cidadão</h2>

                <div class="buttons">
                    <button>Ler estudo</button>
                    <button>Jogar</button>
                    <button>Ouvir</button>
                </div>

                <h3>O debate já está rolando, estude e participe</h3>

                <div class="espiar">
                    <h4>Espiar debate</h4>
                    <img src="../../public/assets/dif-arrow.svg" alt="Espiar debate">
                </div>
            </div>
            <div class="card second">
                <h2 class="filter-data">Como é um julgamento de crime hediondo</h2>

                <div class="buttons">
                    <button>Ler estudo</button>
                    <button>Jogar</button>
                    <button>Ouvir</button>
                </div>

                <h3>Temos uma enquete e queremos sua participação</h3>

                <div class="espiar">
                    <h4>Espiar debate</h4>
                    <img src="../../public/assets/dif-arrow.svg" alt="Espiar debate">
                </div>

            </div>

            <div class="card third">
                <h2 class="filter-data">Pandemia e tecnologia: estamos sendo vigiados?</h2>

                <div class="buttons">
                    <button>Ler estudo</button>
                    <button>Jogar</button>
                    <button>Ouvir</button>
                </div>

                <h3>Venha pro nosso debate!</h3>

                <div class="espiar">
                    <h4>Espiar debate</h4>
                    <img src="../../public/assets/dif-arrow.svg" alt="Espiar debate">
                </div>

            </div>

            <div class="card fourth">
                <h2 class="filter-data">Qual o papel do Senado Federal?</h2>

                <div class="buttons">
                    <button>Ler estudo</button>
                    <button>Jogar</button>
                    <button>Ouvir</button>
                </div>

                <h3>Entenda como funciona o Poder Legislativo</h3>

                <div class="espiar">
                    <h4>Espiar debate</h4>
                    <img src="../../public/assets/dif-arrow.svg" alt="Espiar debate">
                </div>

            </div>
        </div>

        <div class="second-content">
            <div class="canais">
                <div class="title">
                    <h3>Canais</h3>
                </div>
                <button>
                    <div class="button-filter"></div>Cursos
                </button>
                <button>Eventos</button>
                <button>Live</button>
                <button>Livros</button>
                <button>Vídeos</button>
                <button>Podcasts</button>
            </div>

            <div class="access">
                <div class="title">
                    <h3>Acessibilidade</h3>
                </div>
                <ul>
                    <li><img src="../../public/assets/acess-color.svg" alt=""></li>
                    <li><img src="../../public/assets/acess-font.svg" alt=""></li>
                    <li><img src="../../public/assets/acess-libra.svg" alt=""></li>
                    <li><img src="../../public/assets/acess-sound.svg" alt=""></li>
                </ul>
            </div>
        </div>


    </div>
</div>

</body>

</html>
