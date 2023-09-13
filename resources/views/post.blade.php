<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link rel="stylesheet" href="{{ asset('home.css') }}">
</head>
<body>
    <div class="topnav">
        <a href="/">Home</a>
        <a href="/post">Post</a>
        <a href="/contact">Contact</a>
        <a href="/about">About</a>
    </div>
    <h1 class="center">Selecione o gato mais bonitinho</h1>
    <div class="img-container">
        <label for="radio-1"><img src="https://pngimg.com/uploads/cat/cat_PNG50447.png"></label>
        <label for="radio-2"><img src="https://pngimg.com/uploads/cat/cat_PNG50471.png"></label>
    </div>
    <div class="center">
        <label class="labels"><input id="radio-1" value="1" type="radio" name="radio" class="inline" />Gato 1</label>
        <label class="labels"><input id="radio-2" value="2" type="radio" name="radio" class="inline" />Gato 2</label>
    </div>
    <div class="center">
        <input id="submit" type="submit" value="Submit" />
    </div>
</body>
</html>