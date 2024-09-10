<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'home':
            header('Location: http://localhost/TrabajoPractico-N1-PW2/index.php');
            exit();
        case 'ejercicio1':
            header('Location: http://localhost/TrabajoPractico-N1-PW2/ejercicio1/index.php');
            exit();
        case 'ejercicio2':
            header('Location: http://localhost/TrabajoPractico-N1-PW2/ejercicio2/index.php');
            exit();
        case 'ejercicio3':
            header('Location: http://localhost/TrabajoPractico-N1-PW2/ejercicio3/index.php');
            exit();
        case 'ejercicio4':
            header('Location: http://localhost/TrabajoPractico-N1-PW2/ejercicio4/index.php');
            exit();
        case 'ejercicio5':
            header('Location: http://localhost/TrabajoPractico-N1-PW2/ejercicio5/index.php');
            exit();
        case 'ejercicio6':
            header('Location: http://localhost/TrabajoPractico-N1-PW2/ejercicio6/index.php');
            exit();
        case 'ejercicio7':
            header('Location: http://localhost/TrabajoPractico-N1-PW2/ejercicio7/index.php');
            exit();
        case 'ejercicio8':
            header('Location: http://localhost/TrabajoPractico-N1-PW2/ejercicio8/index.php');
            exit();
        case 'ejercicio9':
            header('Location: http://localhost/TrabajoPractico-N1-PW2/ejercicio9/index.php');
            exit();
        case 'ejercicio10':
            header('Location: http://localhost/TrabajoPractico-N1-PW2/ejercicio10/index.php');
            exit();
        case 'ejercicio11':
            header('Location: http://localhost/TrabajoPractico-N1-PW2/ejercicio11/index.php');
            exit();
        case 'ejercicio12':
            header('Location: http://localhost/TrabajoPractico-N1-PW2/ejercicio12/index.php');
            exit();
        case 'ejercicio13':
            header('Location: http://localhost/TrabajoPractico-N1-PW2/ejercicio13/index.php');
            exit();
        case 'ejercicio14':
            header('Location: http://localhost/TrabajoPractico-N1-PW2/ejercicio14/index.php');
            exit();
        default:
            echo "<h2>Página no encontrada</h2>";
            break;
    }
}
?>