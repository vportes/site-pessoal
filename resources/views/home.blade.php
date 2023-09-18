<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Página Inicial</title>
        <link rel="stylesheet" href="{{ asset('home.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
              crossorigin="anonymous">
        <script src="theme-toggle.js"></script>
    </head>
    <body>
        <button class="theme-button" id="theme-toggle-button">
            <img src="moon.png" alt="moon">
        </button>
        <h1>Vinícius Portes</h1>
        <div class="navbar">
            <a href="/">Home</a>
            <a href="/guestbook">Guestbook</a>
            <a href="/contact">Contact</a>
            <a href="/about">About</a>
            <a href="https://github.com/vportes" target="_blank">
                <i class="fab fa-github"></i> Github
            </a>
        </div>
        <div class="wrapper">
            <h2>Bem vindo ao meu website!</h2>
        </div>
        Este é um website simples que utiliza PHP e Laravel como framework de back-end. Neste projeto, destacamos o uso de elementos no desenvolvimento web, como, por exemplo:
        <ul>
            <li><h4>CSS para estilização de páginas:</h4>É utilizado CSS para garantir que o website seja visualmente agradável. Também são utilizados transições
            ao colocar o mouse em cima dos botões e também durante a mudança de tema.</li>
            <li><h4>JavaScript para interação com o website e mudança de tema:</h4> É utilizado JavaScript para tornar o website interativo, como,
            por exemplo, no botão de mudança de tema. Ao entrar no website a configuração padrão de tema do usuário é utilizado para escolher o tema
            inicial, podendo o botão de mudança de tema ser clicado para mudar o tema, utilizando armazenamento local (localStorage) para que o
                tema continue sendo usado em outras páginas.</li>
            <li><h4>Método POST para envio de informações:</h4> Foi implementado um Guestbook para que os usuários possam ver mensagens deixadas
            por outros usuários ou deixar suas próprias mensagens. É atualmente utilizado o localStorage para guardar as mensagens, mas há possibilidade do
            uso de bancos de dados para guardar as informações.</li>
        </ul>
        No geral, este website serve como um exemplo prático do uso de elementos no desenvolvimento web.
    </body>
</html>
