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
    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }


        if(isset($_REQUEST['invMostrarBuscar'])){
            $data = $Db->GetData("EXECUTE Farm.InvGeneral", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        else if(isset($_REQUEST['KardexFinalizados'])){//llena la tabla del kardex
            $data = $Db->GetData("SELECT I.AlmacNumRenglon, I.AlmacNumCodInsumo, KF.StrNombreInsumo, KF.StrCaracteristicas, KF.FarmStrPresentInusmo,
KF.FarmStrUniInsumo, KF.FarmNumIdKardexFarm
FROM Farm.KardexFarmacia KF
INNER JOIN Almac.Insumos I ON KF.AlmacNumCodPresentInsu = I.AlmacNumCodPresentInsu
WHERE FarmBinEstado = 0 AND FarmNumTipBodeg = (SELECT TipoBodega FROM seguridad.TipoFarmacia WHERE LoginFarmacia = ORIGINAL_LOGIN())", $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        else{
            $data = $Db->GetData("Select *
from Farm.vw_Inventario
where FarmNumTipBodeg =
(Select FarmNumIdTipBod from seguridad.TipoFarmacia AS ST
INNER JOIN Farm.TipoBodega AS FT ON ST.TipoBodega = FT.FarmNumIdTipBod where LoginFarmacia = ORIGINAL_LOGIN())
and FarmNumIDTipFarm = (Select FarmNumIDTipFarm from seguridad.TipoFarmacia AS ST 
INNER JOIN Farm.TipoBodega AS FT ON ST.TipoBodega = FT.FarmNumIdTipBod where LoginFarmacia = ORIGINAL_LOGIN()) 
ORDER BY FarmNumIdKardexFarm ASC",
                $_SESSION['dbUser'], $_SESSION['dbPass']);
            echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }



       // $CodigoInsumo = $_REQUEST['AlmacNumCodPresentInsu'];
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;
    }