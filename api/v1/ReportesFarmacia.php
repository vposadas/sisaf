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
   /* case 'POST':
//Procedimiento para agregar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC Almac.Sp_AddDetalleRequi ?, ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'AlmacNumIdRequi'});
            $stmt->bindParam(2, $_REQUEST{'AlmacNumCantSolicitada'});
            $stmt->bindParam(3, $_REQUEST{'AlmacNumCantAutorizada'});
            $stmt->bindParam(4, $_REQUEST{'AlmacNumCantDespachada'});
            $stmt->bindParam(5, $_REQUEST{'AlmacNumCodPresentInsu'});
            $stmt->bindParam(6, $_REQUEST{'AlmacStrNoLote'});
            $stmt->bindParam(7, $_REQUEST{'AlmacDateFechaVenciReq'});

            $stmt->bindParam(8, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(9, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);

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

            $stmt = $Db->Sentencia("EXEC Almac.Sp_DelDetalleForm1H ?");

            $stmt->bindParam(1, $_REQUEST{'AlmacNumIdDetalle'});


            $stmt->bindParam(2, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(3, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
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
            $stmt = $Db->Sentencia("EXEC Almac.Sp_UpDetalleRequi ?,?,?,?,?,? ");

            $stmt->bindParam(1, $_REQUEST{'AlmacNumIdDetalle'});
            $stmt->bindParam(2, $_REQUEST{'AlmacNumIdRequi'});
            $stmt->bindParam(3, $_REQUEST{'AlmacNumCantSolicitada'});
            $stmt->bindParam(4, $_REQUEST{'AlmacNumCantAutorizada'});
            $stmt->bindParam(5, $_REQUEST{'AlmacNumCantDespachada'});
            $stmt->bindParam(6, $_REQUEST{'AlmacNumCodPresentInsu'});


            $stmt->bindParam(7, $codeMensaje, PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT, 50);
            $stmt->bindParam(8, $strMensaje, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $codeMensaje . " " . $strMensaje . " " . $p->getMessage(), null);
        }

        break;*/

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        if(isset($_REQUEST['RepReajuste'])){
            $dateI = $_REQUEST['dateIFarm'];
            $dateF = $_REQUEST['dateFFarm'];
            $data = $Db->GetData("select FR.FarmNumIdReajuste, CONVERT(VARCHAR , FR.FarmDatFecha, 103) FarmDatFecha,
CASE FR.FarmStrTipReajuste WHEN 'DONENT' THEN 'Donativo Ingreso' WHEN 'DONSAL' THEN 'Donativo Salida' WHEN 'CAMENT' THEN 'Cambio Ingreso' WHEN 'CAMSAL' THEN 'Cambio Salida'
WHEN 'PREENT' THEN 'Préstamo Ingreso' WHEN 'PRESAL' THEN 'Préstamo Salida' WHEN 'CAMENT' THEN 'Cambio Ingreso' WHEN 'CAMSAL' THEN 'Cambio Salida' WHEN 'DEVENT' THEN 'Devolución Ingreso'
WHEN 'DEVSAL' THEN 'Devolución Salida' ELSE 'Revisar Transacción' END FarmStrTipReajuste, FR.FarmStrUnidSolicitante, FR.FarmStrUnidEntrega, FR.FarmStrNomSolic, FR.FarmStrNomEntrega, FR.FarmStrObserv, FR.FarmStrDocRespaldoR
from Farm.ReajusteFarm FR inner join  Farm.TipoBodega TB on FR.FarmNumIdTipBod = TB.FarmNumIdTipBod inner join Farm.TipoFarmacia TF on FR.FarmNumIDTipFarm = TF.FarmNumIDTipFarm
where TB.FarmNumIdTipBod = (select TipoBodega from seguridad.Usuario U inner join seguridad.TipoFarmacia TFF on U.SegStrUsuario = TFF.LoginFarmacia  where SegStrUsuario = ORIGINAL_LOGIN()) 
AND FR.FarmDatFecha between'".$dateI."' and '".$dateF."' order by 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['mostrarDetaleReajuste'])){
            $IdReajuste = $_REQUEST['IdReajuste'];
            $data = $Db->GetData("select I.AlmacNumRenglon, I.AlmacNumCodInsumo, KF.StrNombreInsumo, KF.StrCaracteristicas, KF.FarmStrPresentInusmo + ' ' + KF.FarmStrUniInsumo PreUni, 
DR.FarmNumIdKardexFarm, DR.FarmNumCantSolicit, DR.FarmNumCantEntregad, 'Q.' + CONVERT(VARCHAR, CAST(DR.FarmNumPrecUni AS MONEY), 1) AS FarmNumPrecUni,
'Q.' + CONVERT(VARCHAR, CAST((DR.FarmNumCantEntregad * DR.FarmNumPrecUni) AS MONEY), 1) AS Total, DR.FarmStrNoLote, CONVERT(varchar, DR.FarmDatFechaVenc, 103) FarmDatFechaVenc
FROM Farm.FarmDetalleReaj DR INNER JOIN Almac.Insumos I on DR.AlmacNumCodPresentInsu = I.AlmacNumCodPresentInsu INNER JOIN Farm.KardexFarmacia KF on DR.FarmNumIdKardexFarm = KF.FarmNumIdKardexFarm
where DR.FarmNumIdReajuste = $IdReajuste", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['mostVariosFarm'])){
            $dateI = $_REQUEST['dateIFarm'];
            $dateF = $_REQUEST['dateFFarm'];
            $data = $Db->GetData("select FarmNumIdVarios, CONVERT(VARCHAR , FarmFecha, 103) FarmFecha, CASE FarmStrTipMovi WHEN 'CAS' THEN 'Cambio Almacén Salida' WHEN 'CAE' THEN 'Cambio Almacén Entrada'
WHEN 'OS' THEN 'Oficio Salida' WHEN 'OE' THEN 'Oficio Entrada' ELSE 'Revisar Transacción' END FarmStrTipMovi,
FarmNoDocumento, FarmStrDescrip, FarmStrRecibe, FarmStrSolicita, FarmStrDocRespaldo
from Farm.IngreEgreVarios IV inner join 
Farm.TipoBodega TB on IV.FarmNumTipBodeg = TB.FarmNumIdTipBod inner join
Farm.TipoFarmacia TF on IV.FarmNumIDTipFarm = TF.FarmNumIDTipFarm
where TB.FarmNumIdTipBod = (select TipoBodega from seguridad.Usuario U inner join seguridad.TipoFarmacia TFF on U.SegStrUsuario = TFF.LoginFarmacia  where SegStrUsuario = ORIGINAL_LOGIN()) 
AND IV.FarmFecha between'".$dateI."' and '".$dateF."' order by 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['mostrarDetaleIngreVar'])){
            $IdIngreVar = $_REQUEST['IdIngreVar'];
            $data = $Db->GetData("select I.AlmacNumRenglon, I.AlmacNumCodInsumo, KF.StrNombreInsumo, KF.StrCaracteristicas, KF.FarmStrPresentInusmo, KF.FarmStrUniInsumo, 
DIV.FarmNumIdKardex, DIV.FarmNumCantidad, 
'Q.' + CONVERT(VARCHAR, CAST(DIV.FarmNumPrecUni AS MONEY), 1) AS FarmNumPrecUni,
'Q.' + CONVERT(VARCHAR, CAST(DIV.FarmNumPrecTotal AS MONEY), 1) AS FarmNumPrecTotal,
DIV.FarmStrNoLote, CONVERT(varchar, DIV.FarmDateVencimiento, 103) FarmDateVencimiento
from Farm.DetalleIngreEgreVarios DIV
INNER JOIN Almac.Insumos I on DIV.FarmNumCodPresentInsu = I.AlmacNumCodPresentInsu
INNER JOIN Farm.KardexFarmacia KF on DIV.FarmNumIdKardex = KF.FarmNumIdKardexFarm
where DIV.FarmNumIdVarios = $IdIngreVar", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['mostRequiFarm'])){
            $dateI = $_REQUEST['dateIFarm'];
            $dateF = $_REQUEST['dateFFarm'];
            $data = $Db->GetData("select * 
            from Farm.RequiFarma RF inner join 
            		Farm.TipoBodega TB on RF.FarmNumIdTipBod = TB.FarmNumIdTipBod inner join
            		Farm.TipoFarmacia TF on RF.FarmNumIDTipFarm = TF.FarmNumIDTipFarm
            where TB.FarmNumIdTipBod = (select TipoBodega from seguridad.Usuario U inner join seguridad.TipoFarmacia TFF on U.SegStrUsuario = TFF.LoginFarmacia  where SegStrUsuario = ORIGINAL_LOGIN()) 
            AND FarmDateFechaReq between '".$dateI."' and '".$dateF."' order by 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['mostRequiFarmNum'])){
            $NumRequi = $_REQUEST['NumRequi'];
            $data = $Db->GetData("select *
from Farm.RequiFarma RF inner join Farm.TipoBodega TB on RF.FarmNumIdTipBod = TB.FarmNumIdTipBod inner join
Farm.TipoFarmacia TF on RF.FarmNumIDTipFarm = TF.FarmNumIDTipFarm
where TB.FarmNumIdTipBod = (select TipoBodega from seguridad.Usuario U inner join seguridad.TipoFarmacia TFF on U.SegStrUsuario = TFF.LoginFarmacia  where SegStrUsuario = ORIGINAL_LOGIN()) 
AND RF.FarmNumIdRequi = $NumRequi order by 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        if(isset($_REQUEST['mostrarDetalleRequi'])){
            $idRequi = $_REQUEST['idRequi'];
            $data = $Db->GetData("			select I.AlmacNumRenglon, DR.FarmStrDescripcion, KF.FarmStrPresentInusmo, KF.FarmStrUniInsumo, DR.FarmNumCantDespac, DR.FarmStrNolote, DR.FarmDateVencimiento, KF.FarmNumPreUnExist,
                    KF.FarmNumIdKardexFarm, TB.FarmNumStrTipBod, I.AlmacNumCodInsumo
        from Farm.DetalleRequi DR inner join 
                Almac.Insumos I on DR.AlmacNumCodPresentInsu = I.AlmacNumCodPresentInsu inner join
                Farm.KardexFarmacia KF on DR.FarmNumIdKardexFarm = KF.FarmNumIdKardexFarm inner join
                Farm.TipoBodega TB on DR.FarmNumIdTipBod = TB.FarmNumIdTipBod
        where FarmNumIdRequi = $idRequi and KF.FarmNumTipBodeg = (select TipoBodega from seguridad.Usuario U inner join seguridad.TipoFarmacia TFF on U.SegStrUsuario = TFF.LoginFarmacia  where SegStrUsuario = ORIGINAL_LOGIN())", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['mostRepoConsolidado'])){
            $dateIConsol = $_REQUEST['dateIConsolFarm'];
            $dateFConsol = $_REQUEST['dateFConsolFarm'];
            $data = $Db->GetData("select CF.FarmNumIdConsoli, CF.FarmStrServicio, CF.FarmDateFechaConsol, CF.FarmStrRecibe, CF.FarmStrEntrega
        from Farm.ConsolidadoFarma CF inner join 
              Farm.TipoBodega TB on CF.FarmNumIdTipBod = TB.FarmNumIdTipBod inner join
              Farm.TipoFarmacia TF on CF.FarmNumIDTipFarm = TF.FarmNumIDTipFarm
        where TB.FarmNumIdTipBod = (select TipoBodega from seguridad.Usuario U inner join seguridad.TipoFarmacia TFF on U.SegStrUsuario = TFF.LoginFarmacia  where SegStrUsuario = ORIGINAL_LOGIN()) 
                       AND FarmDateFechaConsol between '".$dateIConsol."' and '".$dateFConsol."' order by 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['mostrarDetalleConsol'])){
            $idEncConsol = $_REQUEST['idEncConsol'];
            $data = $Db->GetData("select I.AlmacNumCodInsumo,  KF.StrNombreInsumo +': '+ KF.StrCaracteristicas as nomDes, CF.FarmStrNolote, CF.FarmDateVencimiento, CF.FarmNumDevoluciones, CF.FarmNumSubtotal, 
                    CF.FarmNumTotalEntregado, KF.FarmStrPresentInusmo,KF.FarmStrUniInsumo, I.AlmacNumRenglon
            from Farm.DetailConsolFarm CF inner join 
                    Farm.KardexFarmacia KF on CF.AlmacNumCodPresentInsu = KF.AlmacNumCodPresentInsu inner join
                    Almac.Insumos I on CF.AlmacNumCodPresentInsu = I.AlmacNumCodPresentInsu
            where FarmNumIdConsoli = $idEncConsol and KF.FarmNumTipBodeg = (select TipoBodega from seguridad.Usuario U inner join seguridad.TipoFarmacia TFF on U.SegStrUsuario = TFF.LoginFarmacia  where SegStrUsuario = ORIGINAL_LOGIN())", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['mostRepoTraslado'])){
            $dateITras = $_REQUEST['dateITrasFarm'];
            $dateFTras = $_REQUEST['dateFTrasFarm'];
            $data = $Db->GetData("select T.FarmNumIdTraslado, CONVERT(varchar, T.FarmDateTras, 103) FarmDateTras, CASE T.FarmStrUnidSolicita WHEN 1 THEN 'AREA DE PRODUCCION'
WHEN 2 THEN 'AREA DE UNIDOSIS' WHEN 3 THEN 'FARMACIA SÁTELITE MEDICAMENTOS' WHEN 4 THEN 'FARMACIA SÁTELITE MMQM Y AFINES'
WHEN 5 THEN 'FARMACIA INTERNA MEDICAMENTOS' WHEN 6 THEN 'FARMACIA INTERNA MMQM Y AFINES' ELSE 'Revisar Unidad Solicitante' END FarmStrUnidSolicita, T.FarmStrNomRecibe, FarmStrNomEntrega
from Farm.Traslado T inner join Farm.TipoBodega TB on T.FarmNumIdTipBod = TB.FarmNumIdTipBod inner join Farm.TipoFarmacia TF on T.FarmNumIdTipBod = TF.FarmNumIDTipFarm
where TB.FarmNumIdTipBod = (select TipoBodega from seguridad.Usuario U inner join seguridad.TipoFarmacia TFF on U.SegStrUsuario = TFF.LoginFarmacia  
where SegStrUsuario = ORIGINAL_LOGIN())  AND FarmDateTras between '".$dateITras."' and '".$dateFTras."' order by 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['mostDetalleTraslado'])){
            $idEncTraslado = $_REQUEST['idEncTraslado'];
            $data = $Db->GetData("select T.FarmNumCodiInsu, T.AlmacNumCodPresentInsu, KF.FarmStrPresentInusmo, KF.FarmStrUniInsumo, I.AlmacNumRenglon, t.FarmStrDescrip, T.FarmNumCantSoli, T.FarmNumCantDesp, T.FarmStrlote, T.FarmStrlote,
        	T.FarmDateVencimiento, T.FarmNumIdTipBod
        from Farm.DetalleTraslado T inner join 
        Farm.KardexFarmacia KF on T.AlmacNumCodPresentInsu = KF.AlmacNumCodPresentInsu 
        inner join Almac.Insumos I on T.AlmacNumCodPresentInsu = I.AlmacNumCodPresentInsu inner join
        Farm.TipoBodega TB on T.FarmNumIdTipBod = TB.FarmNumIdTipBod
        where T.FarmNumIdTraslado = $idEncTraslado and KF.FarmNumTipBodeg = (select TipoBodega from seguridad.Usuario U inner join seguridad.TipoFarmacia TFF on U.SegStrUsuario = TFF.LoginFarmacia  where SegStrUsuario = ORIGINAL_LOGIN()) ", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['mostRepoEntFarm'])){
            $dateIEnt = $_REQUEST['dateIEnt'];
            $dateFEnt = $_REQUEST['dateFEnt'];
            $data = $Db->GetData("select convert(varchar, EI.FarmDateIngreso, 6) as FarmDateIngreso, [Almac].[Numeros](EI.AlmacNumIdRequi)Numero, 
			CASE WHEN EI.AlmacNumIdRequi LIKE '%-AS%' THEN 'Suministros'
			when EI.AlmacNumIdRequi like '%-MP%' THEN 'Medicamentos y Productos a Fines'
			when EI.AlmacNumIdRequi LIKE '%-MMQ%' THEN 'Médico Quirúrgico y Productos a Fines' 
			else 'Error de información' END Almacen, EI.AlmacNumIdRequi,
			 U.SegStrNomUsuario
        from Farm.EncabIngreso EI inner join
        		 Farm.TipoBodega TB on EI.FarmNumIdTipoBodega = TB.FarmNumIdTipBod inner join
				 seguridad.Usuario U on U.SegStrUsuario = EI.FarmStrUsuario
        where EI.FarmNumIdTipoBodega = (select TipoBodega from seguridad.Usuario U inner join seguridad.TipoFarmacia TFF 
		on U.SegStrUsuario = TFF.LoginFarmacia  where SegStrUsuario = ORIGINAL_LOGIN())
        AND FarmDateIngreso between '".$dateIEnt."' and '".$dateFEnt."' order by 1", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }
        if(isset($_REQUEST['mostDetalleEntrada'])){
            $idEntFarma = $_REQUEST['idEntFarma'];
            $data = $Db->GetData("select I.AlmacNumCodInsumo, KF.StrNombreInsumo +': '+ KF.StrCaracteristicas as nomDes, KF.FarmStrPresentInusmo, KF.FarmStrUniInsumo, I.AlmacNumRenglon, EF.FarmNumCant, EF.FarmNumPreUnit, EF.FarmNumPreTotal, 
        		EF.FarmStrNolote, EF.FarmDateVenci
        from Farm.EntradaFarmacia EF inner join
        		Farm.KardexFarmacia KF on EF.FarmNumIdKardexFarm = KF.FarmNumIdKardexFarm inner join	
        		Almac.Insumos I on KF.AlmacNumCodPresentInsu = I.AlmacNumCodPresentInsu
        where FarmNumIdRequiEntrada =  '".$idEntFarma."'and EF.FarmNumIdTipoBodega = (select TipoBodega from seguridad.Usuario U inner join seguridad.TipoFarmacia TFF on U.SegStrUsuario = TFF.LoginFarmacia  where SegStrUsuario = ORIGINAL_LOGIN())", $_SESSION['dbUser'], $_SESSION['dbPass']);
            //echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        }

        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}