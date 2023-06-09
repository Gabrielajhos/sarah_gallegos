<?php

require '../database/db.php';

$db = conectarDb();

$errores = [];

$titulo = '';
$autor= '';
$contenido= '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $titulo = $_POST['titulo'];
  $autor = $_POST['autor'];
  $contenido = $_POST['contenido'];
  $date = date('Y/m/d');


  $estacionamiento = filter_var($numero, FILTER_SANITIZE_NUMBER_INT);

  $estacionamiento = filter_var($numero, FILTER_VALIDATE_INT);

  $titulo = mysqli_real_escape_string( $db, $_POST['titulo'] );



$imagen = $_FILES['imagen'];

if (!$titulo) {
  $errores[] = 'Debes añadir un Titulo';
}
if (!$autor) {
  $errores[] = 'Coloca el autor del artículo';
}
if (strlen($contenido) < 50) {
  $errores[] = 'Ups! tal vez tu articulo es un poco corto';
}


if (empty($errores)) {
  //Subir la imagen

  $carpetaImagenes = '../../imagenes/';
  $rutaImagen = '';
  if (!is_dir($carpetaImagenes)) {
      mkdir($carpetaImagenes);
  }



  if ($imagen) {
      $imagePath = $carpetaImagenes . md5(uniqid(rand(), true)) . '/' . $imagen['name'];

      // var_dump($imagePath);

      mkdir(dirname($imagePath));

      // var_dump($imagen);

      move_uploaded_file($imagen['tmp_name'], $imagePath);

      $rutaImagen = str_replace($carpetaImagenes, '', $imagePath);

      var_dump($rutaImagen);
  }


  
  $query = "INSERT INTO blog (titulo, autor, contenido, imagen, date )
   VALUES ( '$titulo', '$autor', '$contenido', '$rutaImagen',  '$date' )";

 
$resultado = mysqli_query($db, $query) or die(mysqli_error($db));
// var_dump($resultado);
// printf("Nuevo registro con el id %d.\n", mysqli_insert_id($db));

if ($resultado) {
    $resul= 'Blog creado';
}


}}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi blog</title>

    <link rel="stylesheet" type="text/css" href="../css/styleblog.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg align-content-center">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php" id="sarah">Sarah Gallegos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item">
        <button><a href="http://localhost/Sarah_Gallego/blog/login.php">Cerrar sesion</a></button>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid">

<h1 class="my-3 text-center fw-bold">Hola Sarah Gallegos!</h1>
<h5 class="text-center text-secondary">¡Bienvenida al panel de administración! Prepárate para crear, inspirar y dejar tu huella 
  en este blog. ¡Comencemos a escribir juntos!</h5>

  <?php echo $resul ?>
  

  <form class="w-75 d-block block form" class="formulario" method="POST" enctype="multipart/form-data">
    <legend>Nuevo Artículo</legend>


    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>


    <input class="fw-bold w-100 my-4 text-center" type="text" name="titulo" placeholder="Titulo">
    <input class="my-4  input-file" type="file"  name="imagen" placeholder="Imagen del articulo">
    <textarea name="contenido"> </textarea>
    <input class="fw-bold w-100 my-4 text-center" type="text" name="autor" placeholder="Autor">

    <input type="submit" class="crear-blog" value="Crear blog"/>

  </form>

<div>

<h2 class="text-center text-secondary my-4">Tus Artículos</h2>
<table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
           
            <tr>
                <td><?php echo $propiedad['id']; ?></td>
                <td><?php echo $propiedad['id']; ?></td>
                <td><?php echo $propiedad['titulo']; ?></td>
                <td>
                    <img src="/imagenes/<?php echo $propiedad['imagen']; ?>"" width="100" class="imagen-tabla">
                </td>
          
                <td>
                <form method="POST">
                    <input type="hidden" name="id_eliminar" value="<?php echo $propiedad['id']; ?>">
                    <input type="submit" href="/admin/propiedades/borrar.php" class="boton boton-rojo" value="Borrar">
                </form>
                    
                    <a href="editarBlog.php?id=<?php echo $propiedad['id']; ?>" class="boton boton-verde">Actualizar</a>
                </td>
            </tr>

     
        </tbody>
    </table>
</div>
      
</body>
</html>