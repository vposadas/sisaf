<?php

/**
 * @Created_by: Intellij IDEA
 * @User: Fernando Cardona
 * @Date:  26-Oct-21
 * @Time: 7:35 AM
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
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Farm.Sp_AddKardexFarmacia ?, ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'FarmNumIdKardexFarm'});
            $stmt->bindParam(2, $_REQUEST{'FarmNumNivelMinimo'});
            $stmt->bindParam(3, $_REQUEST{'FarmNumNivelMaximo'});
            $stmt->bindParam(4, $_REQUEST{'AlmacNumCodPresentInsu'});
            $stmt->bindParam(5, $_REQUEST{'FarmStrPresentInusmo'});
            $stmt->bindParam(6, $_REQUEST{'FarmStrUniInsumo'});
            $stmt->bindParam(7, $_REQUEST{'StrNombreInsumo'});
            $stmt->bindParam(8, $_REQUEST{'StrCaracteristicas'});



            $stmt->bindParam(9, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(10, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), null);
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

            $stmt = $Db->Sentencia("EXEC Farm.Sp_DelKardexFarmacia ?");

            $stmt->bindParam(1, $_REQUEST{'FarmNumIdKardexFarm'});
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
            $stmt = $Db->Sentencia("EXEC Farm.Sp_UpKardexFarmacia ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'FarmNumIdKardexFarm'});
            $stmt->bindParam(2, $_REQUEST{'FarmNumNivelMinimo'});
            $stmt->bindParam(3, $_REQUEST{'FarmNumNivelMaximo'});
            $stmt->bindParam(4, $_REQUEST{'AlmacNumCodPresentInsu'});
            $stmt->bindParam(5, $_REQUEST{'FarmNumTipBodeg'});


            $stmt->bindParam(10, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(11, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
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

        if(isset($_REQUEST['RepSat'])){
            $FechIniSat = $_REQUEST['FechIniSat'];
            $FechFinSat = $_REQUEST['FechFinSat'];
            $data = $Db->GetData("Select I.AlmacNumCodInsumo Código, K.StrNombreInsumo Insumo, K.StrCaracteristicas, K.FarmStrPresentInusmo Presentación, K.FarmStrUniInsumo Unidad, 
ISNULL(SUM(DK.FarmNumEntrCantid),' ') Entradas, ISNULL(SUM(DK.FarmNumReajCanti),' ') Reajuste, ISNULL(SUM(DK.FarmNumReqCantid), '') Salidas, K.FarmNumCantExist Existencia,
'Q.' + CONVERT(varchar, CAST(K.FarmNumPreUnExist as money), 1) PrecioUni, DK.FarmNumIdKardexFarm Kardex
FROM Farm.DetalleKardex DK 
INNER JOIN Farm.KardexFarmacia K ON DK.FarmNumIdKardexFarm = K.FarmNumIdKardexFarm
INNER JOIN Almac.Insumos I ON K.AlmacNumCodPresentInsu = I.AlmacNumCodPresentInsu
INNER JOIN seguridad.TipoFarmacia su ON su.TipoBodega = DK.FarmNumIdTipBod
where (DK.FarmNumEntrCantid is not null or DK.FarmNumReajCanti is not null or DK.FarmNumReqCantid is not null) AND
su.TipoBodega = (Select TipoBodega from seguridad.TipoFarmacia where LoginFarmacia = ORIGINAL_LOGIN()) AND su.LoginFarmacia = ORIGINAL_LOGIN()
AND DK.FarmDateFecha between '".$FechIniSat."' AND '".$FechFinSat."'
group by I.AlmacNumCodInsumo,K.StrNombreInsumo, K.StrCaracteristicas, K.FarmStrPresentInusmo, K.FarmStrUniInsumo, K.FarmNumCantExist, K.FarmNumPreUnExist, DK.FarmNumIdKardexFarm
ORDER BY I.AlmacNumCodInsumo ASC", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['ReporteBRESS'])){
            $SelBodegas = $_REQUEST['SelBodegas'];
            $FechIniBRESS = $_REQUEST['FechIniBRESS'];
            $FechFinBRESS = $_REQUEST['FechFinBRESS'];
            $data = $Db->GetData("exec Farm.BRESS $SelBodegas, '".$FechIniBRESS."', '".$FechFinBRESS."'", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}