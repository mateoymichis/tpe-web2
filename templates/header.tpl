<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{BASE_URL}css/style.css">
    <title>{$titulo}</title>
</head>
<body>
<nav class="nav-menu">
    <ul>
        <li><a href="{BASE_URL}home">home</a></li>
        <li><a href="{BASE_URL}celulares">celulares</a></li>
        <li><a href="{BASE_URL}marcas">marcas</a></li>
        <li><a href="{BASE_URL}nosotros">nosotros</a></li>
        {if !isset($user)}
        <li><a href="{BASE_URL}login">login</a></li>
    {/if}
        {if isset($user)}
        <li><a href="{BASE_URL}logout">logout</a></li>
        {/if}
    </ul>
</nav>
