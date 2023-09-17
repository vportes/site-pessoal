<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Guestbook</title>
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
        <br>
        <h1>Mensagens de visitantes</h1>
        <h4>Veja mensagens deixadas por outros usuários ou deixe a sua própria mensagem!</h4>

        @if ($messages !== null && count($messages) > 0)
            <ul>
                @foreach ($messages as $message)
                    <li>
                        <strong>{{ $message['name'] }}:</strong> {{ $message['message'] }}
                    </li>
                @endforeach
            </ul>
        @else
            <p>Nenhuma mensagem atualmente</p>
        @endif

        <a style="color: dodgerblue" href="{{ route('message.form') }}">Deixe uma mensagem!</a>
    </body>
</html>