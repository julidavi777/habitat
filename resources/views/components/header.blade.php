<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Habitat</title>
  <meta name="title" content="Wealthome">
  <meta name="description" content="This is a realestate website devloped by codewithsadee">

  <!-- 
    - favicon 
  -->
  <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- 
    - google icon link
  -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0..1,0" />
  <!-- 
  FontAwesome
 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <script src="https://cdn.tailwindcss.com"></script>



  <!-- 
    - custom js link
  -->
  <script src="{{asset('js/script.js')}}" defer></script>

  <!-- 
    - preload images
  -->

</head>

<body>
  <header class="header">
    <div class="container">

      <a href="{{url('/')}}" class="logo">
        <img src="{{asset('images/logo.png')}}" width="190" height="28" alt="wealthome">
      </a>

      <nav class="navbar" data-navbar>

        <ul class="navbar-list">

          <li>
            <a href="#" class="navbar-link label-medium active">Inicio</a>
          </li>

          <li>
            <a href="#" class="navbar-link label-medium">Rentar</a>
          </li>

          <li>
            <a href="#" class="navbar-link label-medium">Vender</a>
          </li>

          <li>
            <a href="#" class="navbar-link label-medium">Comprar</a>
          </li>

          <li>
            <a href="#" class="navbar-link label-medium">A cerca</a>
          </li>

        </ul>

        <div class="navbar-wrapper">
          <a href="#" class="btn-link label-medium">Log in</a>

          <a href="#" class="btn btn-fill label-medium">Registrate</a>
        </div>

      </nav>

      <button class="nav-toggle-btn icon-btn" aria-label="toggle navbar" data-nav-toggler>
        <span class="material-symbols-rounded open" aria-hidden="true">menu</span>

        <span class="material-symbols-rounded close" aria-hidden="true">cerrar</span>
      </button>

    </div>
  </header>
  <main>
    <article>