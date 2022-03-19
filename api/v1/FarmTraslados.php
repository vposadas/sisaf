<?php
/**
 * @Created_by: Intellij IDEA
 * @User: Fernando Cardona
 * @Date:  21-Oct-21
 * @Time: 7:41 AM
 * @Version: 1.0
 */


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
//Procedimiento para agregar
        if(isset($_REQUEST['TrasladoFS'])) {
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Farm.Sp_AddTrasladosFS ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");
                $stmt->bindParam(1, $_REQUEST{'BodEntrega'});
                $stmt->bindParam(2, $_REQUEST{'FarmFecha'});
                $stmt->bindParam(3, $_REQUEST{'FarmIdTraslado'});
                $stmt->bindParam(4, $_REQUEST{'FarmRespaldo'});
                $stmt->bindParam(5, $_REQUEST{'FarmBodega'});
                $stmt->bindParam(6, $_REQUEST{'FarmCodInsumo'});
                $stmt->bindParam(7, $_REQUEST{'FarmDescrip'});
                $stmt->bindParam(8, $_REQUEST{'FarmNumCant'});
                $stmt->bindParam(9, $_REQUEST{'FarmLote'});
                $stmt->bindParam(10, $_REQUEST{'FarmVenci'});
                $stmt->bindParam(11, $_REQUEST{'FarmKardexSat'});
                $stmt->bindParam(12, $_REQUEST{'FarmCodPresen'});
                $stmt->bindParam(13, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
                $stmt->bindParam(14, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), null);
            }
        }

        if(isset($_REQUEST['TrasladoSF'])){
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Almac.Sp_DetalleAddIngreEgreVarios ?, ?, ?, ?, ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'AlmacNumIdVarios'});
                $stmt->bindParam(2, $_REQUEST{'AlmacNumIdKardex'});
                $stmt->bindParam(3, $_REQUEST{'AlmacNumCodPresentInsu'});
                $stmt->bindParam(4, $_REQUEST{'AlmacNumCantidad'});
                $stmt->bindParam(5, $_REQUEST{'AlmacNumPrecUni'});
                $stmt->bindParam(6, $_REQUEST{'AlmacStrNoLote'});
                $stmt->bindParam(7, $_REQUEST{'AlmacDateVencimiento'});

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


    case 'DELETE':
//Procedimiento para Eliminar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Almac.Sp_DelRequisicion ?");

            $stmt->bindParam(1, $_REQUEST{'IntIdRequiAlmac'});
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
            $stmt = $Db->Sentencia("EXEC Almac.Sp_UpRequisicion ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'IntIdRequiAlmac'});
            $stmt->bindParam(2, $_REQUEST{'StrLugarRequi'});
            $stmt->bindParam(3, $_REQUEST{'DateFechaRequi'});
            $stmt->bindParam(4, $_REQUEST{'IntIdUnidadSoli'});
            // $stmt->bindParam(10, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            //$stmt->bindParam(11, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            //  echo $ObjectJson->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), null);
        }

        break;

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        if(isset($_REQUEST['TrasFS'])){
            $NumTrasFS = $_REQUEST['NumTrasladoFS'];
            $UniEntrega = $_REQUEST['UniEntrega'];
            $data = $Db->GetData("SELECT T.FarmNumIdTraslado, T.FarmDateTras, DT.AlmacNumCodPresentInsu, DT.FarmNumIdKardexFarm Kinterna, DT.FarmNumCodiInsu, KF.StrNombreInsumo, KF.StrCaracteristicas, KF.FarmStrPresentInusmo, KF.FarmStrUniInsumo, DT.FarmNumCantDesp, DT.FarmStrlote,
DT.FarmDateVencimiento, KF.FarmNumIdKardexFarm Ksatelite, DT.AlmacNumCodPresentInsu
FROM Farm.Traslado T
INNER JOIN Farm.DetalleTraslado DT ON DT.FarmNumIdTraslado = T.FarmNumIdTraslado
INNER JOIN Farm.KardexFarmacia KF ON DT.AlmacNumCodPresentInsu = KF.AlmacNumCodPresentInsu
INNER JOIN seguridad.TipoFarmacia ST ON ST.TipoBodega = KF.FarmNumTipBodeg 
WHERE KF.FarmNumTipBodeg = (Select TipoBodega from seguridad.TipoFarmacia where LoginFarmacia = ORIGINAL_LOGIN()) AND ST.LoginFarmacia = ORIGINAL_LOGIN() AND
T.FarmStrUnidEntrega = '$UniEntrega' AND T.FarmNumIdTraslado = '$NumTrasFS' and KF.FarmBinEstado = 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['TrasFSB'])){
            $NumTrasFSB = $_REQUEST['NumTrasladoFSB'];
            $data = $Db->GetData("Select FarmFecha, FarmStrUsers from Farm.TrasladosFS where FarmIdTraslado = '$NumTrasFSB'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}