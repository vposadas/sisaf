/**
 * @Created_by: Intellij IDEA
 * @User: Fernando Cardona
 * @Date:  19-Oct-21
 * @Time: 1:56 PM
 * @Version: 1.0
 */

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

function BuscarTrasFS(){
    $('#tbodyTrasladoFS').empty();
    let numtrasladofs = $('#inputDodRespaldoTras').val();
    let unientrega = $('#TipEntregaTras').val();

    if(unientrega == '' ||unientrega == null ||unientrega == undefined ||unientrega == 0){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Selecciones Bodega que entrega',
            type: 'warning',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    $.ajax({
        url: './api/v1/FarmTraslados.php?TrasFSB=true&NumTrasladoFSB=' +numtrasladofs,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            if (json.length > 0){
                $(json).each(function (index, item) {
                    FarmFecha = json[index].FarmFecha;
                    FarmStrUsers = json[index].FarmStrUsers;
                    FarmIdTraslado = json[index].FarmIdTraslado;
                });
                $.toast({
                    title: 'Ups!',
                    subtitle: '1 segundo',
                    content: 'Traslado ya fue ingresado por: ' + FarmStrUsers + ' Fecha: ' + FarmFecha,
                    type: 'error',
                    pause_on_hover: true,
                    delay: 5000
                });

                $('#btnGuardarEntrada').prop('disabled', true);
            }
            else {
                TrasFS(numtrasladofs, unientrega);
            }
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}

function TrasFS(numtrasladofs, unientrega){
    var tipfarmacia;
    $('#tbodyTrasladoFS').empty();
    if(unientrega == '' ||unientrega == null ||unientrega == undefined ||unientrega == 0){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Selecciones Bodega que entrega',
            type: 'warning',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    $.ajax({
        url: './api/v1/FarmTraslados.php?TrasFS=true&NumTrasladoFS=' +numtrasladofs + '&UniEntrega='+ unientrega,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json);
            if (json.length > 0){
                $(json).each(function (index, item) {
                    FarmDateTras = json[index].FarmDateTras;
                    FarmNumIdTraslado = json[index].FarmNumIdTraslado;
                    FarmNumCodiInsu = json[index].FarmNumCodiInsu;
                    StrNombreInsumo = json[index].StrNombreInsumo;
                    StrCaracteristicas = json[index].StrCaracteristicas;
                    FarmStrPresentInusmo = json[index].FarmStrPresentInusmo;
                    FarmStrUniInsumo = json[index].FarmStrUniInsumo;
                    FarmNumCantDesp = json[index].FarmNumCantDesp;
                    FarmStrlote = json[index].FarmStrlote;
                    FarmDateVencimiento = json[index].FarmDateVencimiento;
                    Ksatelite = json[index].Ksatelite;
                    AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;

                    if(unientrega == 1 || unientrega == 2){
                        tipfarmacia = 'Farmacia Interna'
                    }
                    else{
                        tipfarmacia = 'Farmacia Satélite'
                    }


                    $('#tbodyTrasladoFS').append('<tr>' +
                        '<td>'+FarmDateTras+'</td>' +
                        '<td hidden>'+FarmNumIdTraslado+'</td>' +
                        '<td>Traslado No. '+FarmNumIdTraslado+'</td>' +
                        '<td>'+tipfarmacia+'</td>' +
                        '<td>'+FarmNumCodiInsu+'</td>' +
                        '<td>'+StrNombreInsumo+', '+StrCaracteristicas+', '+FarmStrUniInsumo+', '+FarmStrUniInsumo+'</td>' +
                        '<td>'+FarmNumCantDesp+'</td>' +
                        '<td>'+FarmStrlote+'</td>' +
                        '<td>'+FarmDateVencimiento+'</td>' +
                        '<td>'+Ksatelite+'</td>' +
                        '<td>'+AlmacNumCodPresentInsu+'</td>' +
                        '</tr>');
                });

                $('#btnGuardarEntrada').prop('disabled', false);
            }
            else{
                $.toast({
                    title: 'Ups!',
                    subtitle: '1 segundo',
                    content: 'Traslado no ingresado por Farmacia Interna',
                    type: 'error',
                    pause_on_hover: true,
                    delay: 5000
                });
                $('#tbodyTrasladoFS').empty();
                $('#btnGuardarEntrada').prop('disabled', true);
            }

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}

function GuardarTrasFS(){
    let unientrega1 = $('#TipEntregaTras').val();
    var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tbodyTrasladoFS tr'), function(tr){
        return Array.prototype.map.call(tr.querySelectorAll('td'), function(td){
            return td.innerHTML;
        });
    });
console.log(tableInfo);
    for (let j = 0; j<tableInfo.length ; j++){
        console.log("solo nombre: " + tableInfo[j][1]);

        let datosDetalle = {
            BodEntrega:unientrega1,
            FarmFecha:tableInfo[j][0],
            FarmIdTraslado: tableInfo[j][1],
            FarmRespaldo: tableInfo[j][2],
            FarmBodega: tableInfo[j][3],
            FarmCodInsumo: tableInfo[j][4],
            FarmDescrip: tableInfo[j][5],
            FarmNumCant: tableInfo[j][6],
            FarmLote: tableInfo[j][7],
            FarmVenci: tableInfo[j][8],
            FarmKardexSat: tableInfo[j][9],
            FarmCodPresen: tableInfo[j][10],
        };
        console.log("cada datosDetalle enviado");
        console.log(datosDetalle);
        $.ajax({
            url: './api/v1/FarmTraslados.php?TrasladoFS=true',
            type: 'POST',
            data: datosDetalle,
            beforeSend: function () {

            },
            success: function (response) {
//            console.log(response);

                $.toast({
                    title: 'Informativo',
                    subtitle: '1 segundo',
                    content: response.state.strstate,
                    type: swichSuccessWarning(response.state.codstate),
                    pause_on_hover: true,
                    delay: 5000
                });
                $('#btnGuardarEntrada').prop('disabled', true);
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
                $('#btnGuardarEntrada').prop('disabled', false);
            }
        });
    }
}

