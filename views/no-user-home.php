<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Polis</title>

  <link rel="shortcut icon" href="../public/assets/shortcut-logo.png">
  <script src="https://unpkg.com/feather-icons"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="../public/styles/no-user.css">
  <script src="../public/scripts/page-home.js"></script>
</head>

<body onload="filterCards()">
  <nav class="menu">
    <div class="user">
      <button id="acess">Acessar</button>
      <button id="register">Registrar</button>
    </div>
    <ul>
      <li>
        <h2>Interesses</h2>
      </li>
      <li><button class="active">Geral</button></li>
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
      <img src="../public/assets/logo-text.png" alt="Logo da Polis" class="logo">

      <ul class="content-menu">
        <li><img src="../public/assets/bell.svg" alt="Notificações"></li>
        <li><span>Sobre</span></li>
        <li><span>Ajuda</span></li>
        <li class="input"><input type="text" placeholder="Pesquisar" id="input-field"><img
            src="../public/assets/search.svg" alt="Pesquisar"></li>
      </ul>
    </nav>
    <div class="content">
      <div class="first-content">
        <div class="first-column">
          <div class="vera">
            <h1>O que você verá por aqui</h1>
            <p>Esta é uma plataforma sobre cidadania e o ser político, e verá conteúdo que te ajudará a
              entender o meio social em que vivemos.</p>
          </div>

          <div class="dif-card">
            <div class="fixado">
              <h3>Fixado</h3>
              <img src="../public/assets/fixed.png" alt="">
            </div>
            <h1>Praticando cidadania em um debate</h1>
            <div class="ler">
              <button>Ler estudo</button>
            </div>
            <div class="jogar">
              <button>Jogar</button>
            </div>
            <div class="ouvir">
              <button>Ouvir</button>
            </div>
          </div>
        </div>

        <h2>Conteúdos Recentes</h2>
        <div class="second-column">
          <div class="card">
            <h2>Entenda o que é ser Cidadão</h2>

            <div class="buttons">
              <button>Ler estudo</button>
              <button>Jogar</button>
              <button>Ouvir</button>
            </div>

            <h3>O debate já está rolando, estude e participe</h3>

            <div class="espiar">
              <h4>Espiar debate</h4>
              <img src="../public/assets/dif-arrow.svg" alt="Espiar debate">
            </div>
          </div>
          <div class="card second">
            <h2>Como é um julgamento de crime hediondo</h2>

            <div class="buttons">
              <button>Ler estudo</button>
              <button>Jogar</button>
              <button>Ouvir</button>
            </div>

            <h3>Temos uma enquete e queremos sua participação</h3>

            <div class="espiar">
              <h4>Espiar debate</h4>
              <img src="../public/assets/dif-arrow.svg" alt="Espiar debate">
            </div>

          </div>

          <div class="card third">
            <h2>Pandemia e tecnologia: estamos sendo vigiados?</h2>

            <div class="buttons">
              <button>Ler estudo</button>
              <button>Jogar</button>
              <button>Ouvir</button>
            </div>

            <h3>Venha pro nosso debate!</h3>

            <div class="espiar">
              <h4>Espiar debate</h4>
              <img src="../public/assets/dif-arrow.svg" alt="Espiar debate">
            </div>

          </div>

          <div class="card fourth">
            <h2>Qual o papel do Senado Federal?</h2>

            <div class="buttons">
              <button>Ler estudo</button>
              <button>Jogar</button>
              <button>Ouvir</button>
            </div>

            <h3>Entenda como funciona o Poder Legislativo</h3>

            <div class="espiar">
              <h4>Espiar debate</h4>
              <img src="../public/assets/dif-arrow.svg" alt="Espiar debate">
            </div>

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
            <li><img src="../public/assets/acess-color.svg" alt=""></li>
            <li><img src="../public/assets/acess-font.svg" alt=""></li>
            <li><img src="../public/assets/acess-libra.svg" alt=""></li>
            <li><img src="../public/assets/acess-sound.svg" alt=""></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="modal" class="modal">
    <div class="modal-content">
      <h2>Acesso</h2>
      <div class="form">
        <label for="" class="label-input">
          <img src="../public/assets/user-field.svg" alt="Campo de CPF">
          <input type="text" placeholder="000.000.000-00" id="cpf" data-js="cpf">
        </label>
        <label for="password" class="label-input">
          <img src="../public/assets/lock.svg" alt="Campo de senha">
          <input type="password" placeholder="Senha">
        </label>
      </div>
      <p class="alert">esqueci minha senha</p>

      <a href="./index.html"><button>Entrar</button></a>
      <div class="no-account">
        <h5>Não possui uma conta?</h5>
        <h4>Registre-se</h4>
      </div>

    </div>
    <img src="../public/assets/close.svg" alt="" class="fechar" id="close">
  </div>

  <div id="dif-modal" class="modal">
    <div class="modal-content">
      <h2>Cadastro</h2>
      <div class="form">
        <label for="" class="label-input">
          <img src="../public/assets/user-field.svg" alt="Campo de CPF">
          <input type="text" placeholder="000.000.000-00" id="cpf-cadastro" data-js="cpf" required>
        </label>
        <label for="email" class="label-input">
          <img src="../public/assets/mail.svg" alt="Campo de email" class="email-img">
          <input type="email" placeholder="seuemail@email.com" required>
        </label>
        <label for="password" class="label-input">
          <img src="../public/assets/lock.svg" alt="Campo de senha">
          <input type="password" placeholder="Senha" required>
        </label>
      </div>

      <button type="submit">Cadastrar</button>

    </div>
    <img src="../public/assets/close.svg" alt="" class="fechar" id="close-acesso">
  </div>

  <script src="../public/scripts/no-user.js"></script>
</body>

</html>