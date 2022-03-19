<?php

require_once '../../functions/Database.php';
require_once '../../functions/JsonObject.php';
session_start();

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header("Content-Type: application/json; charset=UTF-8");

$ObjectJson = new JsonObject();
$ObjectJsonPost = new JsonObjectPost();

if (!isset($_SESSION['dbUser'])) {
    echo $ObjectJsonPost->Json('0', 'Usuario no autenticado', null);
    http_response_code(403);
    exit(0);
}

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
//Procedimiento para agregar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION['dbUser'], $_SESSION['dbPass'])) {
                echo $ObjectJsonPost->Json(0, 'Fallo de Conexion en la Base de Datos', null, null);
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Farm.Sp_AddConsolidadoFarma ?, ?, ?, ?, ?, ?");

            //$stmt->bindParam(1, $_REQUEST{'FarmNumIdConsoli'});
            $stmt->bindParam(1, $_REQUEST{'FarmStrServicio'});
            $stmt->bindParam(2, $_REQUEST{'FarmDateFechaConsol'});
            $stmt->bindParam(3, $_REQUEST{'FarmStrRecibe'});
            $stmt->bindParam(4, $_REQUEST{'FarmStrEntrega'});
            $stmt->bindParam(5, $_REQUEST{'FarmStrCarRecibe'});
            $stmt->bindParam(6, $_REQUEST{'FarmstrCarEntr'});

            $stmt->bindParam(7, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(8, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(9, $Correlativo, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJsonPost->Json($data['codeMensaje'], $data['strMensaje'], $data['Correlativo'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJsonPost->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), Correlativo, null);
        }

        break;


    case 'DELETE':
//Procedimiento para Eliminar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Sp_DelConsolidadoFarma ?");

            $stmt->bindParam(1, $_REQUEST{'FarmNumIdConsoli'});
            //$stmt->bindParam(2, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            //$stmt->bindParam(3, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), null);
        }
        break;

    case 'PUT':
//Procedimiento para modificar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }
            $stmt = $Db->Sentencia("EXEC Farm.[Sp_UpConsolidadoFarma] ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'FarmNumIdConsoli'});
            $stmt->bindParam(2, $_REQUEST{'FarmStrServicio'});
            $stmt->bindParam(3, $_REQUEST{'FarmDateFechaConsol'});


            $stmt->bindParam(11, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(12, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), null);
        }

        break;

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }
        $data = $Db->GetData("SELECT * FROM Farm.vwFarmBuscar", $_SESSION['dbUser'], $_SESSION['dbPass']);
        
        //$data = $Db->GetData("SELECT * FROM Farm.ConsolidadoFarma", $_SESSION['dbUser'], $_SESSION['dbPass']);
        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;
}