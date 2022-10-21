<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>SuperCar</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Loja de Veículos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Caminhões
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{'/cadastrar-caminhao'}}">Cadastrar</a></li>
            <li><a class="dropdown-item" href="#">Buscar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{'/editar-caminhao'}}">Gerenciar</a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Carros
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="">Cadastrar</a></li>
            <li><a class="dropdown-item" href="#">Buscar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Editar/Deletar</a></li>
          </ul>
        </li>

        
      </ul>

    </div>
  </div>
</nav>
</header>

@yield('content')


<footer > 
    <div class="text-center">
        <nav> 
            <h2>Fique conectado !</h2>
            <ul> 
            <a href="https://www.instagram.com/driftcarros/">
            <img src="/img/insta.png" alt="">
            </a>
             <a href="https://www.youtube.com/watch?v=6BnNdKFdWkc">
              <img src="/img/youtube.png" alt="">
             </a>
            <a href="https://pt-br.facebook.com/groups/247202169028650/">
            <img src="/img/facebook.png" alt="">
            </a>
            </ul> 
        </nav>
        <small>Copyright © 2010 </small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>