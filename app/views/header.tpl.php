<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O'Pokedex</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="<?= $_SERVER["BASE_URI"] ?>/css/style.css" rel="stylesheet">

</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="<?= $router->generate("home") ?>" >
        <img headerImg src="<?= $_SERVER["BASE_URI"] ?>/img/pokedex.png" width="30" height="30" class="d-inline-block align-top" alt="">
        
    </a>
    <h1>O'Pokedex</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= $router->generate("home") ?>">Acceuil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Types</a>
      </li>
    </ul>
  </div>
</nav>


<body>