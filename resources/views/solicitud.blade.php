<?php

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Partitura con Bootstrap</title>
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/darkly/bootstrap.min.css"
    integrity="sha512-ZdxIsDOtKj2Xmr/av3D/uo1g15yxNFjkhrcfLooZV5fW0TT7aF7Z3wY1LOA16h0VgFLwteg14lWqlYUQK3to/w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script defer
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  @vite(['resources/css/solicitud.css', 'resources/img/logo.png', 'resources/img/avion.png'])
</head>

<body style="background-color: #212121;">
  <header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <!-- Barra de navegación -->

      <div class="container-fluid">
        <!-- Contenedor fluido -->

        <a class="navbar-brand font-weight-bold" href="#">
          <img class="mr-2" src="./img/logo.png" />
          DeCodigo
        </a>

      </div>
    </nav>
  </header>
  <br>
  <br>

  <div class="container">
    <div class="paragraph" style="width: 50%;">
      <div class="staff" style="border-radius: inset 10px;">
        <br>
        <h2> ¿Porque trabajar con nosotros?</h2>
        <br>
        <p class="staff"
          style="font-size: 16px; font-size-responsive: 10px 12px 14px 16px 18px;">
          ¿Qué es Lorem Ipsum?

          Lorem Ipsum es simplemente el texto de relleno de las imprentas y
          archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar
          de
          las industrias desde el año 1500, cuando un impresor (N. del T.
          persona
          que se dedica a la imprenta) desconocido usó una galería de textos y
          los
          mezcló de tal manera que logró hacer un libro de textos especimen.
          No
          sólo sobrevivió 500 años, sino que tambien ingresó como texto de
          relleno
          en documentos electrónicos, quedando esencialmente igual al
          original.
          Fue popularizado en los 60s con la creación de las hojas "Letraset",
          las
          cuales contenian pasajes de Lorem Ipsum, y más recientemente con
          software de autoedición, como por ejemplo Aldus PageMaker, el cual
          incluye versiones de Lorem Ipsum.
      </div>
    </div>
    <div class="form" style="width: 50%;">
      <form action="#" method="post">
        <div>
          <img src="/img/outplay.png" alt="Imagen">
        </div>
        <section class="form-register">
          <h1>Solicitud</h1>
          </br>
          <input class="controls form-control" type="text" id="nombre"
            name="nombre" placeholder="Ingrese su Nombre" required>
          <input class="controls form-control" type="email" id="email"
            name="email" placeholder="Example@gmail.com" required>
          <textarea class="controls form-control" placeholder="Escriba su Solicitud"
            id="floatingTextarea2" style="height: 100px" required></textarea>
          <div class="text-center">
            <button type="submit" class="btn btn-dark mt-3">Enviar</button>
          </div>
        </section>
        <br>
      </form>
    </div>
  </div>



  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>

  <footer class="navbar navbar-expand-sm navbar-dark bg-dark"
    style="background-color: #424242; height: 5vh;">
    <div class="container d-flex justify-content-center">
      <p style="color: #f5f5f5;" class="">&copy; <span
          id="currentYear"></span>
        DeCodigo</p>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var currentYear = new Date().getFullYear();
      document.getElementById('currentYear').textContent = currentYear;
    });
  </script>
</body>

</html>
