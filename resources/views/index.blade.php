<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Рецепты для всей семьи</title>

</head>
<body>
<div id="app">
    <header-component></header-component>
    <div class="main-row">
        <left-menu></left-menu>
        <app></app>
    </div>
    <footer-component></footer-component>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
