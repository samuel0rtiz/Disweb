<?php
    require_once "../model/formulario.php";
    $operaciones = new Formulario();
    $nombre = isset($_POST['nombre']) ? ($_POST['nombre']) : "";
    $carrera = isset($_POST['carrera']) ? ($_POST['carrera']) : "";
    $tipo = isset($_POST['tipo']) ? ($_POST['tipo']) : "";

    switch($_GET['opcion']){
        case 'alta_usuario':
            $rspta = $operaciones->altaUsuario($nombre, $carrera, $tipo);
            echo $rspta ? 'Exito' : 'Fallo';
            break;

        
        
        default:
            echo 'No existe esa petición';
    }
?>