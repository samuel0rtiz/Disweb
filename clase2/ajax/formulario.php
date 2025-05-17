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
        case 'listar_usuarios':   
            $rspta=$operaciones->listar_usuarios();
            $data=[];
            foreach(json_decode($rspta)as $clave=>$val){
                $data[$clave]=
                ["id_usuario"=>$val->id_usuario,
                "nombre"=>$val->nombre,
                "carrera"=>$val->carrera,
                "boton"=>'
                <button type="button" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button>
                <button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>'
                
            ];



            } 
            echo json_encode(["data" => $data]);


        break;

        
        
        default:
            echo 'No existe esa petición';
    }
?>