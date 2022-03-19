<?php

require_once '../../functions/Database.php';
require_once '../../functions/JsonObject.php';
session_start();

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header("Content-Type: application/json; charset=UTF-8");

$ObjectJson = new JsonObject();


if (!isset($_SESSION['dbUser'])) {
    echo $ObjectJson->Json('0', 'Usuario no autenticado', null);
    http_response_code(403);
    exit(0);
}

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
//Procedimiento para agregar encabezado Solicitud
        if(isset($_REQUEST['FarmStrTipMovi'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }
                //procedimiento para renombrar archivo y moverlo a la carpeta del servidor
                $nombreArchivo = trim($_FILES['inputDocResp']['name']); //Tomo el nombre de la imagen y elimina espacion
                $nomGuardar= NULL;
                if($nombreArchivo != NULL) {
                    $patron = '[\s+]'; //Detecta espacion en blanco
                    $sustitución = '';
                    //preg_replace($patron, $sustitución, $cadena);
                    $nombreArchivo = preg_replace($patron, $sustitución, $nombreArchivo); //sustituye expresion regular
                    $fechaactual = date("m.d.y");   //Fecha Actual
                    $no_aleatorio = rand(10, 99); //Generamos dos Digitos aleatorio
                    $archivo = $_FILES['inputDocResp']['tmp_name']; //Tomo el archivo como tal
                    $ruta = "../../docs/"; // nombre de la capeta contenedora de las imagenes
                    $ruta = $ruta . "/" . $fechaactual . "_" . $no_aleatorio . $nombreArchivo; //completo ruta y nombre del archivo adjuntando otro formato para que no se repita el nombre del mismo
                    $nomGuardar = $fechaactual . "_" . $no_aleatorio . $nombreArchivo;
                    move_uploaded_file($archivo, $ruta); //se coloca el arvhico en la ruta
                }

                // procedimiento para agregar a BD
                $stmt = $Db->Sentencia("EXEC Farm.Sp_AddIngreEgreVarios ?, ?, ?, ?, ?, ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'FarmStrTipMovi'});
                $stmt->bindParam(2, $_REQUEST{'FarmFecha'});
                $stmt->bindParam(3, $_REQUEST{'FarmNoDocumento'});
                $stmt->bindParam(4, $nomGuardar);
                $stmt->bindParam(5, $_REQUEST{'FarmStrDescrip'});
                $stmt->bindParam(6, $_REQUEST{'FarmStrRecibe'});
                $stmt->bindParam(7, $_REQUEST{'FarmStrSolicita'});
                $stmt->bindParam(8, $_REQUEST{'FarmStrObs'});
                //$stmt->bindParam(5, $nomGuardarFicha);

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }
        //Procedimiento para agregar Detalle Solicitud
        if(isset($_REQUEST['FarmDetalleCambio'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Farm.Sp_DetalleAddIngreEgreVarios ?, ?, ?, ?, ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'FarmNumIdVarios'});
                $stmt->bindParam(2, $_REQUEST{'FarmNumIdKardex'});
                $stmt->bindParam(3, $_REQUEST{'FarmNumCodPresentInsu'});
                $stmt->bindParam(4, $_REQUEST{'FarmNumCantidad'});
                $stmt->bindParam(5, $_REQUEST{'FarmNumPrecUni'});
                $stmt->bindParam(6, $_REQUEST{'FarmStrNoLote'});
                $stmt->bindParam(7, $_REQUEST{'FarmDateVencimiento'});

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }

        break;

   /* case 'PUT':
        //Procedimiento para modificar
        if(isset($_REQUEST['HdiaNumEstados'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Com.sp_ModEstadoCompras ?, ?");

                $stmt->bindParam(1, $_REQUEST{'ComNumSolicitud'});
                $stmt->bindParam(2, $_REQUEST{'HdiaNumEstados'});


                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }


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

            $stmt = $Db->Sentencia("EXEC cita.sp_elimMedico ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumMedico'});

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
        break;

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;
*/
}