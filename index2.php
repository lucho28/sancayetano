<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web</title>
    <!-- Aquí puedes agregar enlaces a tus hojas de estilo CSS y scripts JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <!-- Menú superior -->
    <nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=metalmecanica">Metalmecanica</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index.php?page=lacteos">Lacteos</a>
        </li>   
    </div>
    </nav>
    </header>
      

    <!-- Contenido principal -->
    <main>
        <?php
        // Obtener la página solicitada desde el parámetro "page" en la URL
        $page = isset($_GET['page']) ? $_GET['page'] : 'inicio';

        // Enrutador simple para cargar el contenido de la página seleccionada
        switch ($page) {
            case 'metalmecanica':
                include('metalmecanica.php');
                break;
            case 'lacteos':
                include('lacteos.php');
                break;
            case 'servicios':
                include('servicios.php');
                break;
            case 'contacto':
                include('contacto.php');
                break;
            default:
                include('inicio.php');
        }
        ?>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>Derechos reservados &copy; 2023 - Mi Página Web</p>
    </footer>
</body>
</html>

