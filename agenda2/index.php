<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agenda php</title>
    <link rel="stylesheet" href="css/estilos.css" media="screen">
  </head>
  <body>
    <div class="contenedor">
      <h1>Agenda de Contactos</h1>
      <div class="contenido">
        <h2>Nuevo Contacto</h2>
        <form action="crear.php" method="post">
          <div class="campo">
            <label for="nombre">Nombre
              <input type="text" name="nombre" placeholder="nombre" id="nombre">
            </label>
          </div>
          <div class="campo">
            <label for="numero">Número
              <input type="text" name="numero" placeholder="numero" id="numero">
            </label>
          </div>
          <input type="submit" value="Agregar">
        </form>
      </div>
    </div>
  </body>
</html>
