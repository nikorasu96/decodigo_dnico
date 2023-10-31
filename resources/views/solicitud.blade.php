<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Solicitud</title>
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
  <link
    href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"
    rel="stylesheet">
   @vite(['resources/css/solicitud.css'])

</head>

<body style="background-color: #212121;">

  <header>
    <nav class="navbar" style="background-color:   #424242  ">
      <div class="container d-flex align-items-center">
        <img src="./logo.png" class="me-1">
        <h3 style="color: #f5f5f5;" class="">Decodigo</h3>
        <a class="navbar-brand ms-auto" href="#"></a>
      </div>
    </nav>
  </header>

  <div class="container mt-5">
    <div class="left">
      <h2> ¿Porque trabajar con nosotros?</h2>
      <p>
        ¿Qué es Lorem Ipsum?

        Lorem Ipsum es simplemente el texto de relleno de las imprentas y
        archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de
        las industrias desde el año 1500, cuando un impresor (N. del T. persona
        que se dedica a la imprenta) desconocido usó una galería de textos y los
        mezcló de tal manera que logró hacer un libro de textos especimen. No
        sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno
        en documentos electrónicos, quedando esencialmente igual al original.
        Fue popularizado en los 60s con la creación de las hojas "Letraset", las
        cuales contenian pasajes de Lorem Ipsum, y más recientemente con
        software de autoedición, como por ejemplo Aldus PageMaker, el cual
        incluye versiones de Lorem Ipsum.
      </p>
    </div>
    <div class="right">
      <form action="#" method="post">
        <section class="form-register">
          <h1>Solicitud</h1>
          <input class="controls" type="nombre" method="post"
            class="form-control mx-auto" id="nombre" type="nombre"
            name="nombre" placeholder="Ingrese su Nombre" required>

          <input class="controls" type="email" method="post"
            class="form-control mx-auto" id="email" type="email"
            name="email" placeholder="Example@gmail.com" required>

          <textarea class="controls" placeholder="Escriba su Solicitud"
            id="floatingTextarea2" style="height: 100px"></textarea>


          <div class="text-center">
            <button type="submit" class="btn btn-dark mt-3">Enviar</button>
          </div>
        </section>
      </form>
      <br>
      <br>
      <br>
    </div>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <footer class="navbar" style="background-color:   #424242  ">
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
