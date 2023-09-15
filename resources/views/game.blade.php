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
    <script src="theme-toggle.js"></script>
</head>
<body>
    <h1>Vinícius Portes</h1>
    <button class="theme-button" id="theme-toggle-button">
        <img src="moon.png" alt="sun">
    </button>
    <div class="navbar">
        <a href="/">Home</a>
        <a href="/post">Post</a>
        <a href="/contact">Contact</a>
        <a href="/about">About</a>
        <a href="https://github.com/vportes" target="_blank">
            <i class="fab fa-github"></i> Github
        </a>
    </div>
    <h1>Would You Rather?</h1>
    <form action="game.php" method="post">
        <p>Question 1: Would you rather...</p>
        <input type="radio" name="choice" value="option1"> Option 1<br>
        <input type="radio" name="choice" value="option2"> Option 2<br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>