$(document).ready(function () {
    var f = new Date();

    if(f.getMonth() +1 <=9){
        let fecha = (f.getFullYear() + "-0" + (f.getMonth() +1) + "-" + f.getDate());
        $('#inputFecReaj').val(fecha);
        console.log(fecha);
    }else {
        let fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate());
        $('#inputFecReaj').val(fecha);
        console.log(fecha);
    }

});

function swichSuccessWarning(codstate) {
    /*
    Esta Funcion se utiliza para indicarle al Toast
    que Tipo de Alerta debe mostrar, si Satisfactorio o error
     */
    if (codstate === '0' || codstate === 0) {
        return 'error'
    } else {
        return 'success'
    }
}

function MostrarDatosReajuste(){
    let TipoReajuste = $('#SelReajuste').val();
    console.log(TipoReajuste + "Seleccionar tipo reajustewajajajja")

    if(TipoReajuste == 'DONENT' || TipoReajuste == 'CAMENT' || TipoReajuste == 'PREENT' || TipoReajuste == 'DEVENT'){
        $('#LoteVencimiento').prop('hidden', true);
        $('#NodeLoteSal').prop('hidden', true);
        $('#VenciSal').prop('hidden', true);
        $('#PUnitSal').prop('hidden', true);
        $('#PrecioUnitEntr').prop('hidden', false);
        $('#NodeLoteEntr').prop('hidden', false);
        $('#VenciEntr').prop('hidden', false);
        $('#CantExisEntr').prop('hidden', false);
        $('#CantExisSal').prop('hidden', true);
        }
    else if (TipoReajuste == 'DONSAL' || TipoReajuste == 'CAMSAL' || TipoReajuste == 'PRESAL' || TipoReajuste == 'DEVSAL'){
        $('#LoteVencimiento').prop('hidden', false);
        $('#NodeLoteSal').prop('hidden', false);
        $('#VenciSal').prop('hidden', false);
        $('#PUnitSal').prop('hidden', false);
        $('#CantExisSal').prop('hidden', false);
        $('#PrecioUnitEntr').prop('hidden', true);
        $('#NodeLoteEntr').prop('hidden', true);
        $('#VenciEntr').prop('hidden', true);
        $('#CantExisEntr').prop('hidden', true);

    }
    else {
        $('#LoteVencimiento').prop('hidden', true);
        $('#NodeLoteSal').prop('hidden', true);
        $('#VenciSal').prop('hidden', true);
        $('#PUnitSal').prop('hidden', true);
        $('#PrecioUnitEntr').prop('hidden', true);
        $('#NodeLoteEntr').prop('hidden', true);
        $('#VenciEntr').prop('hidden', true);
        $('#CantExisEntr').prop('hidden', true);
    }
}

function buscarInsumoGeneral(){
    let codInsumo = $('#inputCodInsumoR').val();
    $('#SelCodUnico').empty();
    $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
    let esperaInsumo = $.ajax({
        url: './api/v1/Insumo.php?AlmacNumCodInsumop=' + codInsumo, //
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                AlmacNumCodInsumo = json[index].AlmacNumCodInsumo;
                AlmacNumRenglon = json[index].AlmacNumRenglon;
                AlmacStrNomInsumo = json[index].AlmacStrNomInsumo;
                AlmacStrCaractInsu = json[index].AlmacStrCaractInsu;
                AlmacStrPresentInsu = json[index].AlmacStrPresentInsu;
                AlmacStrCantYUnidInsu = json[index].AlmacStrCantYUnidInsu;
                AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;
                FarmStrPresentInusmo = json[index].FarmStrPresentInusmo;
                FarmStrUniInsumo = json[index].FarmStrUniInsumo;


                $('#SelCodUnico').append('<option value="'+AlmacNumCodPresentInsu+'">'+FarmStrPresentInusmo+' '+ FarmStrUniInsumo+'</option>')
                //$('#inputcantidadUnidad').val(FarmStrPresentInusmo + ' ' + FarmStrUniInsumo);


            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    $.when(esperaInsumo).done(function () {
        $('#SelCodUnico').prop('disabled', false);
    });
}

function buscarInsumoEspecifico(codigoUnico){

    $.ajax({
        url: './api/v1/Insumo.php?AlmacNumCodPresentInsup=' + codigoUnico,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                AlmacNumCodInsumo = json[index].AlmacNumCodInsumo;
                AlmacNumRenglon = json[index].AlmacNumRenglon;
                StrNombreInsumo = json[index].StrNombreInsumo;
                StrCaracteristicas = json[index].StrCaracteristicas;
                AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;
                FarmStrPresentInusmo = json[index].FarmStrPresentInusmo;
                FarmStrUniInsumo = json[index].FarmStrUniInsumo;

                $('#inputNombreInsumoReaj').val(StrNombreInsumo);
                $('#inputPresentacion').val(FarmStrPresentInusmo  + ' ' + FarmStrUniInsumo);
                $('#inputRenglonReaj').val(AlmacNumRenglon);
                //$('#inputNombreInsumo').val(AlmacStrNomInsumo);


            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    bucarKardexFarmacia(codigoUnico);

}

function bucarKardexFarmacia(codigoUnico) {
    var idkardex;
  var esperarkardex = $.ajax({
        url: './api/v1/FarmKardex.php?AlmacNumCodPresentInsu=' + codigoUnico,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                idkardex =FarmNumIdKardexFarm= json[index].FarmNumIdKardexFarm;
                FarmNumNivelMinimo= json[index].FarmNumNivelMinimo;
                FarmNumNivelMaximo= json[index].FarmNumNivelMaximo;
                AlmacNumCodPresentInsu= json[index].AlmacNumCodPresentInsu;
                FarmNumTipBodeg= json[index].FarmNumTipBodeg;
                FarmBinEstado= json[index].FarmBinEstado;
                FarmNumCantExist= json[index].FarmNumCantExist;
                FarmNumPreUnExist= json[index].FarmNumPreUnExist;
                FarmNumPreTotExist= json[index].FarmNumPreTotExist;
                FarmStrPresentInusmo= json[index].FarmStrPresentInusmo;
                FarmStrUniInsumo= json[index].FarmStrUniInsumo;

                $('#inputKardexR').val(FarmNumIdKardexFarm);
                $('#inputPUnitSal').val(FarmNumPreUnExist);
                $('#inputCantExisEntr').val(FarmNumCantExist);
            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
    $.when(esperarkardex).done(function () {
        cargarLoteVencimiento(codigoUnico, idkardex);
    });
}

function cargarLoteVencimiento(codigoUnico, idkardex) {
    $('#selLoteVencimiento').empty();
    $('#selLoteVencimiento').append("<option>Seleccione Lote y Fecha de Vencimiento</option>");

    let esperaVencimiento = $.ajax({
        url: './api/v1/Insumo.php?codImsumoFarm=' + codigoUnico +'&VencimientoFarm=true&kardexno='+ idkardex,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                //AlmacNumCodInsumo= json[index].AlmacNumCodInsumo;
                AlmacNumCodPresentInsu= json[index].AlmacNumCodPresentInsu;
                FarmStrLote= json[index].FarmStrLote;
                FarmDateVencimiento= json[index].FarmDateVencimiento;
                FarmNumPreUnExist= json[index].FarmNumPreUnExist;
                FarmNumCantidad= json[index].FarmNumCantidad;

                $('#selLoteVencimiento').append('<option value="'+FarmStrLote+'*'+ FarmDateVencimiento+'*'+FarmNumPreUnExist+'*'+FarmNumCantidad+'">'+'Lote: '+FarmStrLote +' - F.Vencimiento '+FarmDateVencimiento+'</option>')
            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
    $.when(esperaVencimiento).done(function () {
        $('#selLoteVencimiento').prop('disabled', false);
    })
}

function cargarFormsVencimiento(valores) {
    console.log("esto trae valores "+ valores);
    let partida = valores.split('*');
    let lote = partida[0];
    let vencimiento = partida[1];
    let preunit = partida[2]
    let cantidad = partida[3];
    $('#inputNodeLoteSal').val(lote);
    $('#inputVenciSal').val(vencimiento);
    //$('#inputPrecUnit').val(preunit);
    $('#inputCantExisSal').val(cantidad);

}

function AñadirReajuste() {
    let selTipoReajuste = $('#SelReajuste').val();
    let inputCodInsumoR = $('#inputCodInsumoR').val();
    let SelCodUnico = $('#SelCodUnico').val();
    let inputCantSolicitada = $('#inputCantSoliR').val();
    let inputNomInsumo = $('#inputNombreInsumoReaj').val();
    let inputPresentacion = $('#inputPresentacion').val();
    let inputPrecioUnitEntr = $('#inputPrecioUnitEntr').val();
    let inputNodeLoteEntr = $('#inputNodeLoteEntr').val();
    let inputVenciEntr = $('#inputVenciEntr').val();
    let inputCantSoliR = $('#inputCantSoliR').val();
    let inputCantEntregadaR = $('#inputCantEntregadaR').val();
    let inputPUnitSal = $('#inputPUnitSal').val();
    let inputNodeLoteSal = $('#inputNodeLoteSal').val();
    let inputVenciSal = $('#inputVenciSal').val();
    let selLoteVencimiento = $('#selLoteVencimiento').val();
    let inputCantExisSal = $('#inputCantExisSal').val();
    let inputKardexR = $('#inputKardexR').val();



    if(selTipoReajuste == 'DONENT' || selTipoReajuste == 'CAMENT' || selTipoReajuste == 'PREENT' || selTipoReajuste == 'DEVENT') {

        if(inputCodInsumoR == '' ||inputCodInsumoR == null ||inputCodInsumoR == undefined || inputCodInsumoR == 0){
            swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Código Insumo',
                text: 'Debe ingresar un código de insumo',
            });

            return false;
        }

        if(SelCodUnico == '' ||SelCodUnico == null ||SelCodUnico == undefined || SelCodUnico == 0 || SelCodUnico == 'Seleccione Unidad'){
            swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Seleccione Presentación de Insumo',
                text: 'Debe seleccionar Cantidad y Unidad',
            });

            return false;
        }


        if(inputCantSoliR == '' ||inputCantSoliR == null ||inputCantSoliR == undefined){
            swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Ingresar Cantidad Solicitada',
                showConfirmButton: true,
                width: 400,
            });
            return false;
        }

        if(inputCantEntregadaR == '' ||inputCantEntregadaR == null ||inputCantEntregadaR == undefined){
            swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Ingresar Cantidad Entregada',
                showConfirmButton: true,
                width: 400,
            });
            return false;
        }

        if(inputPrecioUnitEntr == '' ||inputPrecioUnitEntr == null ||inputPrecioUnitEntr == undefined){
            swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Ingresar Precio Unitario',
                showConfirmButton: true,
                width: 400,
            });
            return false;
        }

        $('#tbodyReajuste').append('<tr>' +
            '<td scope="row">('+inputCodInsumoR+') '+inputNomInsumo+'</td>' +
            '<td>'+inputPresentacion+'</td>' +
            '<td>'+inputCantSolicitada+'</td>' +
            '<td>'+inputCantEntregadaR+'</td>' +
            '<td>'+SelCodUnico+'</td>' +
            '<td>'+inputPrecioUnitEntr+'</td>' +
            '<td>'+inputNodeLoteEntr+'</td>' +
            '<td>'+inputVenciEntr+'</td>' +
            '<td>'+inputKardexR+'</td>' +
            '</tr>');

        $('#inputCodInsumoR').val('');
        $('#SelCodUnico').empty();
        $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
        $('#inputKardexR').val('');
        $('#inputRenglonReaj').val('');
        $('#inputNombreInsumoReaj').val('');
        $('#inputPresentacion').val('');
        $('#inputCantExisEntr').val('');
        $('#inputCantSoliR').val('');
        $('#inputCantEntregadaR').val('');
        $('#inputPrecioUnitEntr').val('');
        $('#inputNodeLoteEntr').val('');
        $('#inputVenciEntr').val('');
        $('#SelReajuste').prop('disabled', true);
        $('#btnGuardarReaj').prop('disabled', false);

    }



    else if(selTipoReajuste == 'DONSAL' || selTipoReajuste == 'CAMSAL' || selTipoReajuste == 'PRESAL' || selTipoReajuste == 'DEVSAL') {

        if (inputCodInsumoR == '' || inputCodInsumoR == null || inputCodInsumoR == undefined || inputCodInsumoR == 0) {
            swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Código Insumo',
                text: 'Debe ingresar un código de insumo',
            });

            return false;
        }

        if (SelCodUnico == '' || SelCodUnico == null || SelCodUnico == undefined || SelCodUnico == 0 || SelCodUnico == 'Seleccione Unidad') {
            swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Seleccione Presentación de Insumo',
                text: 'Debe seleccionar Cantidad y Unidad',
            });

            return false;
        }

        if (selLoteVencimiento == '' || selLoteVencimiento == null || selLoteVencimiento == undefined || selLoteVencimiento == 'Seleccione Lote y Fecha de Vencimiento') {
            swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Selecciones Lote y Vencimiento',
                showConfirmButton: true,
                width: 400,
            });
            return false;
        }


        if (inputCantSoliR == '' || inputCantSoliR == null || inputCantSoliR == undefined) {
            swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Ingresar Cantidad Solicitada',
                showConfirmButton: true,
                width: 400,
            });
            return false;
        }

        if (inputCantEntregadaR == '' || inputCantEntregadaR == null || inputCantEntregadaR == undefined) {
            swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Ingresar Cantidad Entregada',
                showConfirmButton: true,
                width: 400,
            });
            return false;
        }

        if (parseInt(inputCantEntregadaR) > parseInt(inputCantExisSal)) {
            swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'No tiene existencia suficiente',
                showConfirmButton: true,
                width: 400,
            });
            return false;
        }


        $('#tbodyReajuste').append('<tr>' +
            '<td scope="row">(' + inputCodInsumoR + ') ' + inputNomInsumo + '</td>' +
            '<td>' + inputPresentacion + '</td>' +
            '<td>' + inputCantSoliR + '</td>' +
            '<td>' + inputCantEntregadaR + '</td>' +
            '<td>' + SelCodUnico + '</td>' +
            '<td>' + inputPUnitSal + '</td>' +
            '<td>' + inputNodeLoteSal + '</td>' +
            '<td>' + inputVenciSal + '</td>' +
            '<td>' + inputKardexR + '</td>' +
            '</tr>');

        $('#inputCodInsumoR').val('');
        $('#SelCodUnico').empty();
        $('#SelCodUnico').append("<option>Seleccione Unidad</option>");
        $('#selLoteVencimiento').empty();
        $('#selLoteVencimiento').append("<option>Seleccione Unidad</option>");
        $('#inputKardexR').val('');
        $('#inputRenglonReaj').val('');
        $('#inputNombreInsumoReaj').val('');
        $('#inputPresentacion').val('');
        $('#inputCantExisSal').val('');
        $('#inputCantSoliR').val('');
        $('#inputCantEntregadaR').val('');
        $('#inputPUnitSal').val('');
        $('#inputNodeLoteSal').val('');
        $('#inputVenciSal').val('');
        $('#SelReajuste').prop('disabled', true);
        $('#btnGuardarReaj').prop('disabled', false);
    }

    else{
        swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Seleccione Tipo de Reajuste',
            text: 'Debe seleccionar que tipo de reajuste desea realizar',
        });

        return false;

    }


}

function guardarReajuste() {
    var correlativoCGC = $('#inputCorrelativoCGCReaj').val();
    let fechaReaj = $('#inputFecReaj').val();
    let selTipoReajuste = $('#SelReajuste').val();
    let unidadSol = $('#inputUnidadSolReajuste').val();
    let unidadEnt = $('#inputUnidadEntregReaj').val();
    let inputSolicitante = $('#inputNomSolicitante').val();
    let inputCargoSol = $('#inputCargoSolitane').val();
    var nombreEntrega = $('#inputNomEntrega').val();
    var cargEntrega = $('#inputCargoEntrega').val();
    let inputGerFinEntrega = $('#inputNomGerenteFinan').val();
    let inputNombAdminiFin = $('#inputNombAdminiFin').val();
    let nomDirSol = $('#inputNomDirEjec').val();
    var dirEntrega = $('#inputNomDirEjeEntrega').val();
    let inpObservaciones = $('#inputObservaciones').val();
    var validar = false;

    if(correlativoCGC == '' ||correlativoCGC == null ||correlativoCGC == undefined){
        swal.fire({
            position: 'top-end',
            icon: 'warning',
            title: 'Ingresar Número de Documento',
            showConfirmButton: true,
            width: 400,
        });
        return false;
    }

    if(unidadSol == '' ||unidadSol == null ||unidadSol == undefined){
        swal.fire({
            position: 'top-end',
            icon: 'warning',
            title: 'Ingresar Unidad Solicitante',
            showConfirmButton: true,
            width: 400,
        });
        return false;
    }

    if(unidadEnt == '' ||unidadEnt == null ||unidadEnt == undefined){
        swal.fire({
            position: 'top-end',
            icon: 'warning',
            title: 'Ingresar Unidad Entrega',
            showConfirmButton: true,
            width: 400,
        });
        return false;
    }

    let datos = {
        FarmNumIdReajuste: correlativoCGC,
        FarmDatFecha: fechaReaj,
        FarmStrTipReajuste: selTipoReajuste,
        FarmStrUnidSolicitante: unidadSol,
        FarmStrUnidEntrega: unidadEnt,
        FarmStrNomSolic: inputSolicitante,
        FarmStrCargoSolic: inputCargoSol,
        FarmStrNomEntrega: nombreEntrega,
        FarmStrCargoEntrega: cargEntrega,
        FarmStrNomGerFinancSol:inputGerFinEntrega ,
        FarmStrNomGerAdmFinEnt: inputNombAdminiFin,
        FarmStrNomSubDiSol: nomDirSol,
        FarmStrNomDiEjecEnt: dirEntrega,
        FarmStrObserv:inpObservaciones ,

    };

    console.log(datos);

   $.ajax({
        url: './api/v1/FarmReajuste.php',
        type: 'POST',
        data: datos,
        beforeSend: function () {

        },
        success: function (response) {
            $.toast({
                title: 'Informativo',
                subtitle: '1 segundo',
                content: response.state.strstate,
                type: swichSuccessWarning(response.state.codstate),
                pause_on_hover: true,
                delay: 5000
            });


            if (swichSuccessWarning(response.state.codstate)=='success'){
                detallereajuste();
                $("#btnGuardarReaj").text('Guardado').prop('disabled', true);

            }
        },
        error: function (request, status, error) {
            console.log(request);
            $.toast({
                title: 'Ups!',
                subtitle: '1 segundo',
                content: ' ' + request.responseText,
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });
            $("#btnGuardarReaj").text('Guardar').prop('disabled', false);
        }
    });
}


function detallereajuste() {
    var correlativoCGC = $('#inputCorrelativoCGCReaj').val();

    var tblInfo = Array.prototype.map.call(document.querySelectorAll('#tbodyReajuste tr'), function (tr) {
        return Array.prototype.map.call(tr.querySelectorAll('td'), function (td) {
            return td.innerHTML;
        });
    });

    console.log(tblInfo)


    for (let j = 0; j < tblInfo.length; j++) {
        console.log("solo nombre: " + tblInfo[j][1]);


        let datosDetalle = {
            FarmNumIdReajuste: correlativoCGC,
            AlmacNumCodPresentInsu: tblInfo[j][4],
            FarmStrInsumo: tblInfo[j][0],
            FarmStrPresentacion: tblInfo[j][1],
            FarmNumCantSolicit: tblInfo[j][2],
            FarmNumCantEntregad: tblInfo[j][3],
            FarmNumPrecUni: tblInfo[j][5],
            FarmStrNoLote: tblInfo[j][6],
            FarmDatFechaVenc: tblInfo[j][7],
            FarmNumIdKardexFarm: tblInfo[j][8]
        };

        $.ajax({
            url: './api/v1/FarmDetReajuste.php',
            type: 'POST',
            data: datosDetalle,
            beforeSend: function () {
                $("#btnGuardarReaj").text('GUARDANDO...').prop('disabled', true);
            },
            success: function (response) {
                $.toast({
                    title: 'Informativo',
                    subtitle: '1 segundo',
                    content: response.state.strstate,
                    type: swichSuccessWarning(response.state.codstate),
                    pause_on_hover: true,
                    delay: 5000
                });
                $("#btnGuardarReaj").text('Guardado').prop('disabled', true);
            },
            error: function (request, status, error) {
                console.log(request);
                $.toast({
                    title: 'Ups!',
                    subtitle: '1 segundo',
                    content: ' ' + request.responseText,
                    type: 'error',
                    pause_on_hover: true,
                    delay: 5000
                });
                $("#btnGuardarReaj").text('Guardar').prop('disabled', false);
            }
        });
    }
}

function buscarReajuste(){
    console.log('abriendo modal')
    $('#BuscarReajuste').fadeIn();
}

$('#tbBuscar').DataTable( {
    destroy: true,
    "oSearch": {"bSmart": false,
        "bRegex": true,
        "sSearch": ""  },//busca un dato exacto
    dom: 'Blfrtip',
    buttons: [
        //'print', 'pdf'
    ],
    "ajax": "./api/v1/ControlDeInventarioFarmacia.php?&invMostrarBuscar=true",
    "columns": [

        { "data": "AlmacNumRenglon" },
        { "data": "AlmacNumCodInsumo" },
        { "data": "StrNombreInsumo" },
        { "data": "StrCaracteristicas" },
        { "data": "FarmStrPresentInusmo" },
        { "data": "FarmStrUniInsumo" },
        { "data": "FarmNumIdKardexFarm" },
        { "data": "FarmNumCantExist" },
        { "data": "FarmNumPreUnExist" }

    ]

} );

$('#BuscarReajuste tbody').on('dblclick', 'td', function () {
    console.log("Hola")
    let buscarinsu = $(this).closest('tr');
    let codigoinsumo = (buscarinsu.find("td:eq(1)").text());
    /*let nombre = (buscarinsu.find("td:eq(1)").text());
    let Carac = (buscarinsu.find("td:eq(2)").text());
    let renglon = (buscarinsu.find("td:eq(3)").text());
    let kardex = (buscarinsu.find("td:eq(4)").text());
    let cante = (buscarinsu.find("td:eq(5)").text());
    let presentacion = (buscarinsu.find("td:eq(6)").text());
    let unidad = (buscarinsu.find("td:eq(7)").text());*/

    agrCodIns(codigoinsumo);
    $('#BuscarReajuste').fadeOut();
});

function agrCodIns(codigoInsumo){
    $('#inputCodInsumoR').val(codigoInsumo);

    buscarInsumoGeneral();
}


var tableFarm;
function fn_RepReajuste() {
    let inputDateInicial = $('#inputDateInicial').val();
    let inputDateFinal = $('#inputDateFinal').val();
    console.log(inputDateInicial)
    console.log(inputDateFinal)

    if(inputDateInicial == '' || inputDateInicial == null || inputDateInicial == undefined ){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Campo Fecha Inicio vacío',
            showConfirmButton: true,
        });
        return false;
    }

    if(inputDateFinal == '' || inputDateFinal == null || inputDateFinal == undefined){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Campo Fecha Fin vacío',
            showConfirmButton: true,
        });
        return false;
    }

    tableFarm = $('#tblReajustes').DataTable({
        destroy: true,
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: ['pdf'],
        "ajax": "./api/v1/ReportesFarmacia.php?RepReajuste=true&dateIFarm="+inputDateInicial+'&dateFFarm='+inputDateFinal,
        columnDefs: [
            {className: "dt-center", targets: [0, 1, 2, 3, 4, 5]}
        ],
        "columns": [
            { data: "FarmNumIdReajuste"},
            { "data": "FarmDatFecha" },
            { "data": "FarmStrTipReajuste" },
            { "data": "FarmStrUnidSolicitante" },
            { "data": "FarmStrUnidEntrega" },
            { "data": "FarmStrNomSolic" },
            { "data": "FarmStrNomEntrega" },
            { "data": "FarmStrObserv" },
            {  data: 'FarmStrDocRespaldoR', render: function (data, type, row) {
                    var adjuntoHTML = ''
                    if (row.FarmStrDocRespaldoR == null){
                        adjuntoHTML = 'No adjunto';
                    }
                    else {
                        adjuntoHTML = '<a class="btn btn-info btn-circle" href="./docs/'+row.FarmStrDocRespaldoR+'" target="_blank"><i class="fas fa-download" style="color: white; margin-top: 8px"></i></a>';
                    }

                    return adjuntoHTML;
                }},
        ]
    })
}

$('#tblReajustes tbody').on('dblclick', 'td', function () {

    var datosPre = tableFarm.row($( this ).parents('tr')).data();

    //console.log(datosPre)
    let SolNumero= (datosPre['FarmNumIdReajuste']);

    fn_abrirModalFarm(SolNumero);

});

function fn_abrirModalFarm(SolNumero) {
    $('#modalBusquedaInsumo').fadeIn();

    fn_mostrarDetalleReajuste(SolNumero)
}

function fn_mostrarDetalleReajuste(SolNumero) {

    var table =$('#tblMostrarDetalleReajuste').DataTable( {
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        destroy: true,
        dom: 'Blfrtip',
        buttons: [{extend: 'pdf', title: "Reporte Formulario Donativo No: " + SolNumero,text: 'PDF', filename: 'Reporte Formulario Donativo', orientation: 'landscape'} ],
        "ajax": "./api/v1/ReportesFarmacia.php?mostrarDetaleReajuste=true&IdReajuste="+SolNumero,
        columnDefs: [
            {className: "dt-center", targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]}
        ],
        "columns": [
            { "data": "AlmacNumRenglon" },
            { "data": "AlmacNumCodInsumo" },
            { "data": "StrNombreInsumo" },
            { "data": "StrCaracteristicas" },
            { "data": "PreUni" },
            { "data": "FarmNumIdKardexFarm" },
            { "data": "FarmNumCantSolicit" },
            { "data": "FarmNumCantEntregad" },
            { "data": "FarmNumPrecUni" },
            { "data": "Total" },
            { "data": "FarmStrNoLote" },
            { "data": "FarmDatFechaVenc" }
        ]
    } );

}

function imprimirReajuste(){
    let idReajuste = $('#inputCorrelativoCGCReaj').val()
    window.open('http://' + window.location.hostname + '/almacen-farmacia/runreports/RepFarmReajuste.php?FarmNumIdReajuste=' + idReajuste);

}