<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <title>@yield('titulo')Tienda Oline</title>
  </head>
  <body>
    @include('partials.menuprin')
    <header>
      <hgroup>
        <div class="jumbotron jumbotro-fluid">
          <div class="container">
            <h1 class="display-7">@yield('titulo')</h1>
          </div>
        </div>
      </hgroup>
    </header>
    
    <div class="container">
        @yield('contenido')
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">&copy; Contacto de la tienda proximaménte</span>
        </div>
    </footer>
    
  </body>
</html>