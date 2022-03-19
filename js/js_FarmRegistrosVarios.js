$(document).ready(function () {

    let date1 = new Date()

    let day = date1.getDate()
    let month = date1.getMonth() + 1
    let year = date1.getFullYear()

    if ((day + 1) <= 9 && month <= 9) {
        let fecha = (year + "-0" + month + "-0" + day);
        $('#inputDateMovFarm').val(fecha);
        //console.log(fecha + 'Dia y mes menores a 10');
    }
    else if ((day + 1) >= 10 && month <= 9) {
        let fecha = (year + "-0" + month + "-" + day);
        $('#inputDateMovFarm').val(fecha);
        //console.log(fecha + 'dia mayor a 10 y mes menor a 9 ');
    }
    else if ((day + 1) <= 9 && month >= 10) {
        let fecha = (year + "-" + month + "-0" + day);
        $('#inputDateMovFarm').val(fecha);
        //console.log(fecha + 'dia menor a 9 y mes mayor a 10 ');
    }
    else {
        let fecha = ( year + "-" + month + "-" + day);
        $('#inputDateMovFarm').val(fecha);
        //console.log(fecha + ' dia mayor  a 10 y mes mayor a 10 ');
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


function MostrarDatosVariosFarm(){
    let inputTipoMov = $('#sltVariosFrm').val();
    //console.log(inputTipoMov + "Seleccionar Tipo de Movimiento")

    if(inputTipoMov == 'CAE' || inputTipoMov == 'OE'){
        $('#LoteVencimientoSalidaFarm').prop('hidden', true);
        $('#NodeLoteSalFarm').prop('hidden', true);
        $('#VenciSalFarm').prop('hidden', true);
        $('#PUnitSalFarm').prop('hidden', true);
        $('#CantExisSalFarm').prop('hidden', true);
        $('#CantSalidaFarm').prop('hidden', true);
        //Valores de entrada cambian
        $('#CanEntradaFarm').prop('hidden', false);
        $('#PrecioUnitEntrFarm').prop('hidden', false);
        $('#NodeLoteEntrFarm').prop('hidden', false);
        $('#VenciEntrFarm').prop('hidden', false);
        $('#CantExisEntrFarm').prop('hidden', false);
    }
    else if (inputTipoMov == 'CAS' || inputTipoMov == 'OS') {
        $('#LoteVencimientoSalidaFarm').prop('hidden', false);
        $('#NodeLoteSalFarm').prop('hidden', false);
        $('#VenciSalFarm').prop('hidden', false);
        $('#PUnitSalFarm').prop('hidden', false);
        $('#CantExisSalFarm').prop('hidden', false);
        $('#CantSalidaFarm').prop('hidden', false);
        //Valores de entrada cambian
        $('#CanEntradaFarm').prop('hidden', true);
        $('#PrecioUnitEntrFarm').prop('hidden', true);
        $('#NodeLoteEntrFarm').prop('hidden', true);
        $('#VenciEntrFarm').prop('hidden', true);
        $('#CantExisEntrFarm').prop('hidden', true);
    }

    else {
        $('#LoteVencimientoSalidaFarm').prop('hidden', true);
        $('#NodeLoteSalFarm').prop('hidden', true);
        $('#VenciSalFarm').prop('hidden', true);
        $('#PUnitSalFarm').prop('hidden', true);
        $('#PrecioUnitEntrFarm').prop('hidden', true);
        $('#NodeLoteEntrFarm').prop('hidden', true);
        $('#VenciEntrFarm').prop('hidden', true);
        $('#CantExisEntrFarm').prop('hidden', true);

    }
}

function buscarInsumoGeneral(){
    let codInsumo = $('#inputCodInsumoVarFarm').val();
    $('#SelCodUnicoFarm').empty();
    $('#SelCodUnicoFarm').append("<option>Seleccione Unidad</option>");
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

                $('#SelCodUnicoFarm').append('<option value="'+AlmacNumCodPresentInsu+'">'+FarmStrPresentInusmo+' '+ FarmStrUniInsumo+'</option>')
                $('#inputRenglonReajFarm').val(AlmacNumRenglon)

            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    $.when(esperaInsumo).done(function () {
        $('#SelCodUnicoFarm').prop('disabled', false);
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


                $('#inputCaracVaFarm').val(StrNombreInsumo+', '+StrCaracteristicas);
                $('#inputPresentVaFarm').val(FarmStrPresentInusmo+', ' +FarmStrUniInsumo);


            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
    bucarKardexFarmacia(codigoUnico);

}

function bucarKardexFarmacia(codigoUnico) {
    var IdKardexFarmacia;
    let esperarKFamrmacia =  $.ajax({
        url: './api/v1/FarmKardex.php?AlmacNumCodPresentInsu=' + codigoUnico,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {

                IdKardexFarmacia=  FarmNumIdKardexFarm= json[index].FarmNumIdKardexFarm;
                FarmNumNivelMinimo= json[index].FarmNumNivelMinimo;
                FarmNumNivelMaximo= json[index].FarmNumNivelMaximo;
                AlmacNumCodPresentInsu= json[index].AlmacNumCodPresentInsu;
                FarmNumTipBodeg= json[index].FarmNumTipBodeg;
                FarmBinEstado= json[index].FarmBinEstado;
                FarmNumCantExist= json[index].FarmNumCantExist;
                FarmNumPreUnExist= json[index].FarmNumPreUnExist;
                //FarmNumPreTotExist= json[index].FarmNumPreTotExist;

                $('#inputKardexRFarm').val(FarmNumIdKardexFarm);
                $('#inputPrecioUnitEntrFarm').val(FarmNumPreUnExist);
                $('#inputCantExisEntrFarm').val(FarmNumCantExist);



            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });

    $.when(esperarKFamrmacia).done(function () {
        cargarLoteVencimiento(codigoUnico, IdKardexFarmacia);
    });


}


function cargarLoteVencimiento(codigoUnico, IdKardexFarmacia) {


    $('#selLoteVencimientoFarm').empty();
    $('#selLoteVencimientoFarm').append("<option>Selecciones Lote y Vencimiento</option>");

    let esperaVencimiento = $.ajax({
        url: './api/v1/Insumo.php?codImsumoFarm=' + codigoUnico +'&VencimientoFarm=true&kardexno='+ IdKardexFarmacia,
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

                $('#selLoteVencimientoFarm').append('<option value="'+FarmStrLote+'*'+ FarmDateVencimiento+'*'+FarmNumPreUnExist+'*'+FarmNumCantidad+'">'+'Lote: '+FarmStrLote +' - F.Vencimiento '+FarmDateVencimiento+'</option>')
            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
    $.when(esperaVencimiento).done(function () {
        $('#selLoteVencimientoFarm').prop('disabled', false);
    })
}

function cargarFormsVencimiento(valores) {
    console.log("esto trae valores "+ valores);
    let partida = valores.split('*');
    let lote = partida[0];
    let vencimiento = partida[1];
    let preunit = partida[2]
    let cantidad = partida[3];
    $('#inputNodeLoteSalFarm').val(lote);
    $('#inputVenciSalFarm').val(vencimiento);
    $('#inputPUnitSalFarm').val(preunit);
    $('#inputCantExisSalFarm').val(cantidad);

}

function añadirTablaFarm() {

    let tipoMov = $('#sltVariosFrm').val();

    //estos son datos generales
    let codigoInsumo = $('#inputCodInsumoVarFarm').val();
    let codPresent = $('#SelCodUnicoFarm').val();
    let kardex = $('#inputKardexRFarm').val();
    let renglon = $('#inputRenglonReajFarm').val();
    let caractInsumo = $('#inputCaracVaFarm').val();
    let presentacionInsumo = $('#inputPresentVaFarm').val();

    //estos son los datos de salida
    let loteSalida = $('#inputNodeLoteSalFarm').val();
    let venciSalida = $('#inputVenciSalFarm').val();
    let precUniSalida = $('#inputPUnitSalFarm').val();
    let cantExiSalida = $('#CantExisSalFarm').val();
    let cantSalida = $('#inputCantSalidaFarm').val();


    //estos son los datos de entrada
    let cantExiEntrada = $('#inputCantExisEntrFarm').val();
    let cantEntrada = $('#inputCantEntregadaFarm').val();
    let precUniEntrada = $('#inputPrecioUnitEntrFarm').val();
    let loteEntrada = $('#inputNodeLoteEntrFarm').val();
    let venciEntrada = $('#inputVenciEntrFarm').val();



    if(tipoMov == '' ||tipoMov == null ||tipoMov == undefined || tipoMov == 0){
        swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Tipo de Movimiento',
            text: 'Debe seleccionar que tipo de movimiento desea realizar',
        });
        return false;
    }

    if(codigoInsumo == '' ||codigoInsumo == null ||codigoInsumo == undefined || codigoInsumo == 0){
        swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Código Insumo',
            text: 'Ingrese Código de inu',
        });

        return false;
    }

    if(codPresent == '' ||codPresent == null ||codPresent == undefined || codPresent == 0 || codPresent == 'Seleccione Unidad'){
        swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Seleccione Presentación de Insumo',
            text: 'Debe seleccionar Cantidad y Unidad',
        });

        return false;
    }


    if((tipoMov == 'CAS' || tipoMov == 'OS') && venciSalida == '' ||venciSalida == null ||venciSalida == undefined ){
        swal.fire({
            position: 'top-end',
            icon: 'warning',
            title: 'Seleccione Lote y Vencimiento',
            showConfirmButton: true,
            width: 400,
        });
        return false;
    }

    if(tipoMov == 'CAE' || tipoMov == 'OE'){
        if (loteEntrada == ''){
            loteEntrada = 'No Aplica'
        }
        else{
            loteEntrada = loteEntrada
        }

        if (venciEntrada == ''){
            venciEntrada = 'No Aplica'
        }
        else{
            venciEntrada = venciEntrada
        }

        if(cantEntrada == '' ||cantEntrada == null ||cantEntrada == undefined ){
            swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Ingrese Cantidad',
                showConfirmButton: true,
                width: 400,
            });
            return false;
        }

        if(precUniEntrada == '' ||precUniEntrada == null ||precUniEntrada == undefined ){
            swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Ingrese Precio',
                showConfirmButton: true,
                width: 400,
            });
            return false;
        }

        $('#tbodyIngreEgre').append('<tr>' +
            '<td hidden>' + AlmacNumCodPresentInsu + '</td>' +
            '<td>' + codigoInsumo + '</td>' +
            '<td>' + AlmacStrNomInsumo + '</td>' +
            '<td>' + presentacionInsumo + '</td>' +
            '<td scope="row">'+ AlmacStrCantYUnidInsu + '</td>' +
            '<td>' + cantEntrada + '</td>' +
            '<td>' + precUniEntrada + '</td>' +
            '<td>' + loteEntrada + '</td>' +
            '<td>' + venciEntrada + '</td>' +
            '<td>' + kardex + '</td>' +
            '<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>' +
            +'</tr>');

        //estos son datos generales
        $('#inputCodInsumoVarFarm').val('');
        $('#SelCodUnicoFarm').val('');
        $('#inputKardexRFarm').val('');
        $('#inputRenglonReajFarm').val('');
        $('#inputCaracVaFarm').val('');
        $('#inputPresentVaFarm').val('');

        //estos son los datos de entrada
        $('#CantExisEntrFarm').val('');
        $('#inputCantEntregadaFarm').val('');
        $('#inputPrecioUnitEntrFarm').val('');
        $('#inputNodeLoteEntrFarm').val('');
        $('#inputVenciEntrFarm').val('');
        $('#inputCantExisEntrFarm').val('');

        $('#btnGuardarMovFarm').prop('disabled', false);
        $('#sltVariosFrm').prop('disabled', true);
    }
    else{
        if(cantSalida == '' ||cantSalida == null ||cantSalida == undefined ){
            swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Ingrese Cantidad',
                showConfirmButton: true,
                width: 400,
            });
            return false;
        }
        $('#tbodyIngreEgre').append('<tr>' +
            '<td hidden>' + AlmacNumCodPresentInsu + '</td>' +
            '<td>' + codigoInsumo + '</td>' +
            '<td>' + AlmacStrNomInsumo + '</td>' +
            '<td>' + presentacionInsumo + '</td>' +
            '<td scope="row">'+ AlmacStrCantYUnidInsu + '</td>' +
            '<td>' + cantSalida + '</td>' +
            '<td>' + precUniSalida + '</td>' +
            '<td>' + loteSalida + '</td>' +
            '<td>' + venciSalida + '</td>' +
            '<td>' + kardex + '</td>' +
            '<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>' +
            +'</tr>');

        //estos son datos generales
        $('#inputCodInsumoVarFarm').val('');
        $('#SelCodUnicoFarm').val('');
        $('#inputKardexRFarm').val('');
        $('#inputRenglonReajFarm').val('');
        $('#inputCaracVaFarm').val('');
        $('#inputPresentVaFarm').val('');

        //estos son los datos de salida
        $('#inputNodeLoteSalFarm').val('');
        $('#inputVenciSalFarm').val('');
        $('#inputPUnitSalFarm').val('');
        $('#CantExisSalFarm').val('');
        $('#inputCantSalidaFarm').val('');
        $('#selLoteVencimientoFarm').val('0');
        $('#inputCantExisSalFarm').val('');

        $('#btnGuardarMovFarm').prop('disabled', false);
        $('#sltVariosFrm').prop('disabled', true);
    }

}

$(document).on('click', '.borrar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});


function guardarModal() {

    //datos del tipo movimiento

    let selVarios = $('#sltVariosFrm').val();
    let inputNoDocument = $('#inputnodocument').val();
    let fechaMov = $('#inputDateMovFarm').val();
    let inputDescri = $('#inputDescri').val();
    let obserFarm = $('#inputObserFarm').val();
    let recibe = $('#inputNomRecibeFarm').val();
    let solicita = $('#inputNomAlmacFarm').val();

    if(inputNoDocument == '' ||inputNoDocument == null ||inputNoDocument == undefined ){
        swal.fire({
            position: 'top-end',
            icon: 'warning',
            title: 'Ingrese Númedo de Documento',
            showConfirmButton: true,
            width: 400,
        });
        return false;
    }

    if(inputDescri == '' ||inputDescri == null ||inputDescri == undefined ){
        swal.fire({
            position: 'top-end',
            icon: 'warning',
            title: 'Ingrese Descripción',
            showConfirmButton: true,
            width: 400,
        });
        return false;
    }

    var formularioIngreEgre = new FormData($("#formularioEnvArchivo")[0]);
    formularioIngreEgre.append("FarmStrTipMovi", selVarios);
    formularioIngreEgre.append("FarmFecha", fechaMov);
    formularioIngreEgre.append("FarmNoDocumento", inputNoDocument);
    formularioIngreEgre.append("FarmStrDescrip", inputDescri);
    formularioIngreEgre.append("FarmStrRecibe", recibe);
    formularioIngreEgre.append("FarmStrSolicita", solicita);
    formularioIngreEgre.append("FarmStrObs", obserFarm);

    $.ajax({
        url: './api/v1/FarmIngreEgre.php?FarmStrTipMovi=true',
        type: 'POST',
        data: formularioIngreEgre,
        contentType: false,
        processData: false,
        beforeSend: function () {
            $("#btnGuardarMovFarm").text('GUARDANDO...').prop('disabled', true);
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
            console.log(response.state.strstate)
            console.log('Texto')
            console.log(response.state.codstate)
            console.log('numero')

            var identiti = response.state.strstate.split(": ");
            console.log(identiti)
            codigo = identiti[1]

            $("#btnGuardarMovFarm").text('GUARDAR').attr('disabled', true);

            if (swichSuccessWarning(response.state.codstate)=='success'){

                let mensaje = response.state.strstate;
                console.log(mensaje);
                let idcambio = mensaje.split(": ");
                console.log(idcambio[1] + 'IdCambio');
                DetalleCambio(idcambio[1])
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
            $("#btnGuardarMovFarm").text('GUARDAR').attr('disabled', false);
        }
    });
}

function DetalleCambio(idcambio){
console.log(idcambio + 'Este es el id del encabezado de cambios varios')

var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tbodyIngreEgre tr'), function (tr) {
            return Array.prototype.map.call(tr.querySelectorAll('td'), function (td) {
                return td.innerHTML;
            });
        });
            for (let j = 0; j < tableInfo.length; j++) {
                console.log("esto es el codigo: " + tableInfo[j][1]);



                if (tableInfo[j][8] == 'No Aplica'){
                    tableInfo[j][8] = '1900-01-01'
                }
                else{
                    tableInfo[j][8] = tableInfo[j][8]
                }


                let datosDetalle = {
                    FarmNumIdVarios: idcambio,
                    FarmNumIdKardex: tableInfo[j][9],
                    FarmNumCodPresentInsu: tableInfo[j][0],
                    FarmNumCantidad: tableInfo[j][5],
                    FarmNumPrecUni: tableInfo[j][6],
                    FarmStrNoLote: tableInfo[j][7],
                    FarmDateVencimiento: tableInfo[j][8],
                };
                console.log("cada datosDetalle enviado");
                console.log(datosDetalle);

                $.ajax({
                    url: './api/v1/FarmIngreEgre.php?FarmDetalleCambio=true',
                    type: 'POST',
                    data: datosDetalle,
                    beforeSend: function () {
                        $("#btnGuardarMov").text('GUARDANDO...').prop('disabled', true);
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
                        $("#btnGuardarMov").text('GUARDAR').attr('disabled', false);

                        fnOpenForm(event, 'FarmRegistrosVarios');
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
                        $("#btnGuardarMov").text('GUARDAR').attr('disabled', false);
                    }
                });
            }
    }



function buscarIngreVarios(){
    console.log('abriendo modal')
    $('#BuscarIngreVarios').fadeIn();
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

$('#BuscarIngreVarios tbody').on('dblclick', 'td', function () {
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
    $('#BuscarIngreVarios').fadeOut();
});

function agrCodIns(codigoInsumo){
    $('#inputCodInsumoVarFarm').val(codigoInsumo);

    buscarInsumoGeneral();
}




var tableFarm;
function fn_reporteIngreVarios() {
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

    tableFarm = $('#tblIngreVarios').DataTable({
        destroy: true,
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: ['pdf'],
        "ajax": "./api/v1/ReportesFarmacia.php?mostVariosFarm=true&dateIFarm="+inputDateInicial+'&dateFFarm='+inputDateFinal,
        columnDefs: [
            {className: "dt-center", targets: [0, 1, 2, 3, 4, 5]}
        ],
        aoColumnDefs: [
            {"targets": [ 0 ], "visible": false}
        ],
        "columns": [
            { data: "FarmNumIdVarios", "hidden": true},
            { "data": "FarmFecha" },
            { "data": "FarmStrTipMovi" },
            { "data": "FarmNoDocumento" },
            { "data": "FarmStrDescrip" },
            { "data": "FarmStrRecibe" },
            { "data": "FarmStrSolicita" },
            {  data: 'FarmStrDocRespaldo', render: function (data, type, row) {
                    var adjuntoHTML = ''
                    if (row.FarmStrDocRespaldo == null){
                        adjuntoHTML = 'No adjunto';
                    }
                    else {
                        adjuntoHTML = '<a class="btn btn-info btn-circle" href="./docs/'+row.FarmStrDocRespaldo+'" target="_blank"><i class="fas fa-download" style="color: white; margin-top: 8px"></i></a>';
                    }

                    return adjuntoHTML;
                }},
        ]
    })
}

$('#tblIngreVarios tbody').on('dblclick', 'td', function () {

    var datosPre = tableFarm.row($( this ).parents('tr')).data();

    //console.log(datosPre)
    let SolNumero= (datosPre['FarmNumIdVarios']);

    fn_abrirModalFarm(SolNumero);

});

function fn_abrirModalFarm(SolNumero) {
    $('#modalBusquedaInsumo').fadeIn();

    fn_mostrarDetalleIngreVar(SolNumero)
}

function fn_mostrarDetalleIngreVar(SolNumero) {

    var table =$('#tblMostrarDetalleIngreVar').DataTable( {
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        destroy: true,
        dom: 'Blfrtip',
        buttons: [{extend: 'pdf', title: "Reporte Ingresos Varios No: " + SolNumero,text: 'PDF', filename: 'Reporte Ingresos Varios', orientation: 'landscape'} ],
        "ajax": "./api/v1/ReportesFarmacia.php?mostrarDetaleIngreVar=true&IdIngreVar="+SolNumero,
        columnDefs: [
            {className: "dt-center", targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]}
        ],
        "columns": [
            { "data": "AlmacNumRenglon" },
            { "data": "AlmacNumCodInsumo" },
            { "data": "StrNombreInsumo" },
            { "data": "StrCaracteristicas" },
            { "data": "FarmStrPresentInusmo" },
            { "data": "FarmStrUniInsumo" },
            { "data": "FarmNumIdKardex" },
            { "data": "FarmNumCantidad" },
            { "data": "FarmNumPrecUni" },
            { "data": "FarmNumPrecTotal" },
            { "data": "FarmStrNoLote" },
            { "data": "FarmDateVencimiento" }
        ]
    } );

}