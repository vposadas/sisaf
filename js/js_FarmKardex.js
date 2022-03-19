$(document).ready(function () {

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

function buscarInsumoGeneral(){
    let codInsumo = $('#inputCodInsumo').val();

    console.log(codInsumo + "insumo")

    $('#SelCodUnico').empty();
    $('#SelCodUnico').append("<option>Seleccione Presentación</option>");
    let esperaInsumo = $.ajax({
        url: './api/v1/Insumo.php?AlmacNumCodInsumo=' + codInsumo, //
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


                $('#SelCodUnico').append('<option value="'+AlmacNumCodPresentInsu+'">'+ AlmacStrPresentInsu+' '+ AlmacStrCantYUnidInsu+'</option>')


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

    let esperarinsumo = $.ajax({
        url: './api/v1/Insumo.php?AlmacNumCodPresentInsu=' + codigoUnico,
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

                $('#inputNomProducto').val(AlmacStrNomInsumo);
                $('#inputRenPresupuestario').val(AlmacNumRenglon);
                $('#inputCaracteristicas').val(AlmacStrCaractInsu);
                $('#inputPresent').val(AlmacStrPresentInsu);
                $('#inputPres').val(AlmacStrCantYUnidInsu);

            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}


function insertarKardex() {
    //let inputNoKardexF = $('#inputNoKardexF').val();
    let inputMinimo= $('#inputMinimo').val();
    let inputMaximoF= $('#inputMaximoF').val();
    let SelCodUnico= $('#SelCodUnico').val();
    let inputNomProducto= $('#inputNomProducto').val();
    let inputCaracteristicas= $('#inputCaracteristicas').val();
    let inputPresent= $('#inputPresent').val();
    let inputUniMed= $('#inputPres').val();
    let CodPresentacion= $('#CodPresentacion').val() || SelCodUnico;


    let datos = {
        //FarmNumIdKardexFarm:inputNoKardexF,
        FarmNumNivelMinimo:inputMinimo,
        FarmNumNivelMaximo:inputMaximoF,
        AlmacNumCodPresentInsu:CodPresentacion,
        FarmStrPresentInusmo: inputPresent,
        FarmStrUniInsumo: inputUniMed,
        StrNombreInsumo: inputNomProducto,
        StrCaracteristicas: inputCaracteristicas

    };
    console.log("datos enviados");
    console.log(datos);
                $.ajax({
                url: './api/v1/FarmKardex.php',
                type: 'POST',
                data: datos,
                beforeSend: function () {
                    $("#btnGuardarKardex").text('GUARDANDO...').prop('disabled', true);
                },
                success: function (response) {
                    if (response.state.codstate==1){
                        kardexbien = true;
                        console.log(kardexbien + 'succes')
                        swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Asignación Kardex',
                            text:response.state.strstate,
                            type: 'success',
                            pause_on_hover: true,
                            delay: 5000
                        });
                        var identiti = response.state.strstate.split(": ");
                        console.log(identiti)

                        $('#inputNoKardexF').val(identiti[2])
                        $("#btnGuardarKardex").text('GUARDAR').attr('disabled', false);
                        if(SelCodUnico > 0){
                            fnOpenForm(event, 'FarmAgregarKardex')
                        }
                    }
                    else {
                        swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Ups! Hubo un error',
                            text:response.state.strstate,
                            type: 'error',
                            pause_on_hover: true,
                            delay: 5000
                        });
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
                    $("#btnGuardarKardex").text('GUARDAR').attr('disabled', false);
                }
            });

}


function Insertarprimerregistro() {
    let inputFechaActual = $('#inputFechaActual').val();
    let inputNoReferencia= $('#inputNoReferencia').val();
    let inputDescripcion= $('#inputDescripcion').val();
    let inputPresent= $('#inputPresent').val();
    let inputCantExis= $('#inputCantExis').val();
    let inputPrecUnitario= $('#inputPrecUnitario').val();
    let inputValorTotal= $('#inputValorTotal').val();
    let inputNoLote= $('#inputNoLote').val();
    let inputFecVencimiento= $('#inputFecVencimiento').val();
    let inputNoKardexF= $('#inputNoKardexF').val();


    let datos = {
                    FarmDateFecha: inputFechaActual,
                    FarmStrNoReferen: inputNoReferencia,
                    FarmStrDescripci: inputDescripcion,
                    FarmStrUnidMedida: inputPresent,
                    FarmNumExisCantid: inputCantExis,
                    FarmNumExisPUnit: inputPrecUnitario,
                    FarmNumExisVaTotal: inputValorTotal,
                    FarmStrNoLote: inputNoLote,
                    FarmDateVencimi: inputFecVencimiento,
                    FarmNumIdKardexFarm: inputNoKardexF
                };

    console.log("Registros Enviados");
    console.log(datos);
    var primerregistro = $.ajax({
                url: './api/v1/FarmRegistroKardex.php',
                type: 'POST',
                data: datos,
                beforeSend: function () {
                    $("#btnGuardarRegistro").text('GUARDANDO...').prop('disabled', true);
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
                    $("#btnGuardarRegistro").text('GUARDAR').attr('disabled', false);
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
                    $("#btnGuardarRegistro").text('GUARDAR').attr('disabled', false);
                }
            });
   Insertarexistencia();

}

function Insertarexistencia() {

    let inputCantExis= $('#inputCantExis').val();
    let inputPrecUnitario= $('#inputPrecUnitario').val();
    let inputValorTotal= $('#inputValorTotal').val();
    let inputDescripcion= $('#inputDescripcion').val();
    let inputNoKardexF= $('#inputNoKardexF').val();

    let datos = {

                FarmNumCantExist: inputCantExis,
                FarmNumPrecUniExist: inputPrecUnitario,
                FarmNumPrecTotExist: inputValorTotal,
                FarmStrDocResExist: inputDescripcion,
                FarmNumIdKardex: inputNoKardexF
                };

    console.log("Registros Existentes");
    console.log(datos);
    $.ajax({
                url: './api/v1/FarmRegistroExist.php',
                type: 'POST',
                data: datos,
                beforeSend: function () {
                    $("#btnGuardarRegistro").text('GUARDANDO...').prop('disabled', true);
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
                    $("#btnGuardarRegistro").text('GUARDAR').attr('disabled', false);
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
                    $("#btnGuardarRegistro").text('GUARDAR').attr('disabled', false);
                }
            });
$('#inputFechaActual').val('');
$('#inputNoReferencia').val('');
$('#inputDescripcion').val('');
$('#inputCantExis').val('');
$('#inputPrecUnitario').val('');
$('#inputValorTotal').val('');
$('#inputNoLote').val('');
$('#inputFecVencimiento').val('');
$('#inputNoKardexF').val('');
$('#inputPresent').val('');
$('#inputFechaActualReaj').val('');
$('#inputNoReferenciaReaj').val('');
$('#inputDescripcionReaj').val('');
$('#inputCantExisReaj').val('');
$('#inputPrecUnitarioReaj').val('');
$('#inputValorTotalReaj').val('');
$('#inputNoLoteReaj').val('');
$('#inputFecVencimientoReaj').val('');
$('#inputNoKardexF').val('');
$('#inputPresent').val('');
}


function Mostrartipoentrada(){
    let TipoEntrada = $('#SelRegisReajus').val();

if(TipoEntrada == 'PrimerReg'){
            $('#PrimerRegistro').prop('hidden', false);
            $('#PrimerReajuste').prop('hidden', true);
}

if(TipoEntrada == 'PrimerReaj'){
            $('#PrimerRegistro').prop('hidden', true);
            $('#PrimerReajuste').prop('hidden', false);
}

if(TipoEntrada == 'Selec'){
            $('#PrimerRegistro').prop('hidden', true);
            $('#PrimerReajuste').prop('hidden', true);
}

else{
}
}

function valorTotalprimerRegistro1() {
    let cantidad = $('#inputCantExis').val();
    let precioUnidad = $('#inputPrecUnitario').val();
    let suma = parseInt(cantidad) * parseFloat(precioUnidad);
    $('#inputValorTotal').val(suma);
    console.log("Valor total"+ ' ' +suma)
}

function valorTotalprimerRegistro2() {
    let cantidad = $('#inputCantExis').val();
    let precioUnidad = $('#inputPrecUnitario').val();
    let suma = parseInt(cantidad) * parseFloat(precioUnidad);
    $('#inputValorTotal').val(suma);
    console.log("Valor total"+ ' ' +suma)
}
