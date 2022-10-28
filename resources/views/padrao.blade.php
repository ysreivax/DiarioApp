<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    
    <title>Meu Diário</title>
</head>
<body class="bodypadrao">
    
    <nav class="navbar navbar-expand-lg" style="background-color: #D3B1C2;">
        <div class="container-fluid">
          <a class="p1padrao navbar-brand" href="#">MEU DIÁRIO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Páginas
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('cadastrar')}}">ESCREVER NO DIARIO</a></li>
                  <li><a class="dropdown-item" href="{{route('alterar')}}">EDITAR FOLHAS</a></li>
                  
                </ul>
              </li>       
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="Pesquisa..." placeholder="Pesquisa..." aria-label="Pesquisa...">
              <button type="button" class="btn btn-danger">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
    
     
      
      <!-- ----------------------------------------- FIM DO NAVBAR ------------------------------------------------ -->



      @yield('content')



<!-- ---------------------------------------- CARROSEL 2 ------------------------------------------------- -->

<footer>
    <footer id="carouselExampleSlidesOnly" class="rodape carousel slide" data-bs-ride="carousel">
        <div class="rodape carousel-inner">
          <div class="rodape carousel-item active">
            <img src="img/RodaPé4.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/RodaPé7.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
    </footer>
    </footer>
  

 <!-- ------------------------------------ FIM DO CARROSEL 2 -------------------------------------------- -->



    <!-- Jav aScript Bundle with Popper -->
<script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>