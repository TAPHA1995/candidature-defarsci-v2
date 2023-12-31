<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DEFAR SCI Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body style="background-color: #F3F2EF">
   <nav class="navbar navbar-expand-lg  bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">DEFAR SCI FORM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CANDIDAT
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/ajouter/candidat">AJOUTER</a></li>
            <li><a class="dropdown-item" href="/liste/candidat">LISTE</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Module
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/ajouter/module">AJOUTER</a></li>
            <li><a class="dropdown-item" href="/liste/module">LISTE</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav> 
    <div>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
