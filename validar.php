<?php
    include_once 'bd/conexion.php';

    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset();

        session_destroy();
    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: panels/administrador/home.php');
            break;

            case 2:
            header('location: panels/gerente/home.php');
            break;

            case 3:
                header('location: panels/cliente1/home.php');
            break;

            case 4:
                header('location: panels/cliente2/home.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT*FROM usuarios WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        if($row == true){
            // validar rol
            $rol = $row[3];
            $_SESSION['rol'] = $rol;

            switch($_SESSION['rol']){
                case 1:
                    header('location: panels/administrador/home.php');
                break;
    
                case 2:
                header('location: panels/gerente/home.php');
                break;
    
                case 3:
                    header('location: panels/cliente1/home.php');
                break;
    
                case 4:
                    header('location: panels/cliente2/home.php');
                break;
    
                default:
            }
        }else{
            // no existe el usuario
            header('Location: errors/index_error.php');
        }

    }
    

?>