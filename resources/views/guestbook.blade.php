<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link rel="stylesheet" href="{{ asset('home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous">
    <script src="header.js"></script>
    <script src="theme-toggle.js"></script>
</head>
<body>
    <div id="header"></div>
    <br>
    <h1>Deixe uma mensagem!</h1>
    <form method="POST" action="/post">
        @csrf
        <label><h4>Nome:</h4><textarea id="msg-text" name="name" rows="1" cols="50"></textarea></label>
        <label><h4>Mensagem:</h4><textarea id="msg-text" name="message" rows="10" cols="50"></textarea></label>
        <br>
        <div style="padding-top: 20px">
            <button id="msg-submit" type="submit">Enviar</button>
            <span style="margin-left: 5px;"></span>
            <button id="msg-submit" type="reset">Limpar</button>
        </div>
    </form>
</body>
</html>