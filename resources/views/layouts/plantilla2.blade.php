<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="http://localhost/MI-IAMIGA/resources/css/miamiga.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <img class="logo" src="imagen/dedobajo.png">
        <a class="navbar-brand" href="#">Mejores Precios</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}" method="post">Inicio <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('productos.index')}}" method="post">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Mendopones</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

@yield('content')
  </header>
  

   
  <br>
  <footer class="container">
    <p>Copyright &copy; XJuan-Dev 2024</p>
  </footer>

</body>
</html>