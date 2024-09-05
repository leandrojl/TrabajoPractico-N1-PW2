<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'home':
            header('Location: ../ejercicio8/index.php');
            exit();
        case 'ejercicio1':
            header('Location: ../ejercicio1/index.php');
            exit();
        case 'ejercicio2':
            header('Location: ../ejercicio2/index.php');
            exit();
        case 'ejercicio3':
            header('Location: ../ejercicio3/index.php');
            exit();
        case 'ejercicio4':
            header('Location: ../ejercicio4/index.php');
            exit();
        case 'ejercicio5':
            header('Location: ../ejercicio5/index.php');
            exit();
        case 'ejercicio6':
            header('Location: ../ejercicio6/index.php');
            exit();
        case 'ejercicio7':
            header('Location: ../ejercicio7/index.php');
            exit();
        case 'ejercicio8':
            header('Location: ../ejercicio8/index.php');
            exit();
        case 'ejercicio9':
            header('Location: ../ejercicio9/index.php');
            exit();
        case 'ejercicio10':
            header('Location: ../ejercicio10/index.php');
            exit();
        default:
            echo "<h2>Página no encontrada</h2>";
            break;
    }
}
?>