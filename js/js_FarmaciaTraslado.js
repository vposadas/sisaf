$(document).ready(function () {
    let date = new Date()

    let day = date.getDate()
    let month = date.getMonth() + 1
    let year = date.getFullYear()

    if ((day + 1) <= 9 && month <= 9) {
        let fecha = (year + "-0" + month + "-0" + day);
        $('#inputFech').val(fecha);
    } else if ((day + 1) >= 10 && month <= 9) {
        let fecha = (year + "-0" + month + "-" + day);
        $('#inputFech').val(fecha);
    } else if ((day + 1) <= 9 && month >= 10) {
        let fecha = (year + "-" + month + "-0" + day);
        $('#inputFech').val(fecha);
    } else {
        let fecha = ( year + "-" + month + "-" + day);
        $('#inputFech').val(fecha);
    }


    //$('#inputJefeDepartamento').val('Yanileth Rosario Jaimes Aguilar');

    $('#inputJefeDepartamento').val('Licda.Wendy Xiomara Pogio Figueroa');
    $('#inputCargoJefe').val('Jefatura de Farmacia Interna');
    $('#inputLug').val('Villa Nueva');
    $('#inputMotivTraslado').val('Abastecimiento');
    Buscarnombre();
});


//alertar toast
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



function Buscarnombre(){
    $.ajax({
        url: './api/v1/EntradaKardex.php?NombreUsuario=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;

            $(json).each(function (index, item) {
                SegStrNomUsuario = json[index].SegStrNomUsuario;
                SegStrPuesto = json[index].SegStrPuesto;

                $('#inputEntregaTras').val(SegStrNomUsuario);
                $('#inputCargoTrasl').val(SegStrPuesto);

            });

        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}

function buscarInsumoGeneral(){
    let codInsumo = $('#inputCodigo').val();
    $('#SelCodUnico').empty();
    $('#SelCodUnico').append("<option>Seleccione Presentación</option>");
    let esperaInsumo = $.ajax({
        url: './api/v1/Insumo.php?AlmacNumCodInsumop=' + codInsumo, //
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;

            $(json).each(function (index, item) {
                AlmacNumCodInsumo = json[index].AlmacNumCodInsumo;
                AlmacNumRenglon = json[index].AlmacNumRenglon;
                AlmacStrNomInsumo = json[index].AlmacStrNomInsumo;
                AlmacStrCaractInsu = json[index].AlmacStrCaractInsu;
                AlmacStrPresentInsu = json[index].AlmacStrPresentInsu;
                AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;
                FarmStrPresentInusmo = json[index].FarmStrPresentInusmo;
                FarmStrUniInsumo = json[index].FarmStrUniInsumo;

                $('#SelCodUnico').append('<option value="'+AlmacNumCodPresentInsu+'">'+FarmStrPresentInusmo+' '+ FarmStrUniInsumo+'</option>')

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

            $(json).each(function (index, item) {
                AlmacNumCodInsumo = json[index].AlmacNumCodInsumo;
                AlmacNumRenglon = json[index].AlmacNumRenglon;
                StrNombreInsumo = json[index].StrNombreInsumo;
                StrCaracteristicas = json[index].StrCaracteristicas;
                AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;
                FarmStrPresentInusmo = json[index].FarmStrPresentInusmo;
                FarmStrUniInsumo = json[index].FarmStrUniInsumo;

                $('#inputDescrip').val(StrNombreInsumo+', '+StrCaracteristicas+', '+FarmStrPresentInusmo+','+FarmStrUniInsumo);

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
            $(json).each(function (index, item) {

                IdKardexFarmacia=  FarmNumIdKardexFarm= json[index].FarmNumIdKardexFarm;
                FarmNumNivelMinimo= json[index].FarmNumNivelMinimo;
                FarmNumNivelMaximo= json[index].FarmNumNivelMaximo;
                AlmacNumCodPresentInsu= json[index].AlmacNumCodPresentInsu;
                FarmNumTipBodeg= json[index].FarmNumTipBodeg;
                FarmBinEstado= json[index].FarmBinEstado;
                FarmNumCantExist= json[index].FarmNumCantExist;
                FarmNumPreUnExist= json[index].FarmNumPreUnExist;
                FarmNumPreTotExist= json[index].FarmNumPreTotExist;

                $('#inputKardexFar').val(FarmNumIdKardexFarm);
                //$('#inputPreciUnit').val(FarmNumPreUnExist);
                //$('#inputCantExistente').val(FarmNumCantExist);
                


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

$('#btnGuardarTraslado').click(function () {
    let texto =  $('#btnGuardarTraslado').text();

    if(texto == 'GUARDAR'){
        guardarTraslado();
    }
    else{
        $("#btnGuardarTraslado").text('GUARDAR').attr('disabled', true);
        $("#btnGuardarTraslado").removeClass("btn-warning");
        $("#btnGuardarTraslado").addClass("btn-success");
        fnOpenForm(event, 'FarmTrasladoMedicamentos')
    }
});

var contadorfilastraslado = 0;
function añadirTabla() {
    let inputCodigo = $('#inputCodigo').val();
    let inputDescrip = $('#inputDescrip').val();
    let inputCantiSolicit = $('#inputCantiSolicit').val();
    let inputCantiDespachada = $('#inputCantiDespachada').val();
    let inputMotivTraslado = $('#inputMotivTraslado').val();
    let inputKardexFar = $('#inputKardexFar').val();
    let SelCodUnico = $('#SelCodUnico').val();
    let inputNoLote = $('#inputNoLote').val();
    let inputVechaVenci = $('#inputVechaVenci').val();
    let inputCantExistente = $('#inputCantExistente').val();
    let selLoteVencimiento = $('#selLoteVencimiento').val();


/*------------------------------*/

    var arr = [];
    var arr2 = [];
    var arr3 = [];

    $('#tblFarmTraslado tr').each(function () {
        var idLote = $(this).find(".nuevaClase").html();
        arr.push(idLote);
    });

    $('#tblFarmTraslado tr').each(function () {
        var idVenc = $(this).find(".nuevaClase2").html();
        arr2.push(idVenc);
    });

    $('#tblFarmTraslado tr').each(function () {
        var idkardex = $(this).find(".nuevaClase3").html();
        arr3.push(idkardex);
    });

    if (arr.includes(inputNoLote) && arr2.includes(inputVechaVenci) && arr3.includes(inputKardexFar)) {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Lote y vencimiento ya han sido agregados, por favor seleccione otro',
        });

        return false;
    }


/*-----------------------*/


    if(inputCodigo == '' ||inputCodigo == null ||inputCodigo == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Código de Insumo',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(SelCodUnico == '' ||SelCodUnico == null ||SelCodUnico == undefined || SelCodUnico == 'Seleccione Presentación'){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione presentación del Insumo',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(selLoteVencimiento == '' ||selLoteVencimiento == null ||selLoteVencimiento == undefined || selLoteVencimiento == 'Seleccione Lote Y Fecha de Vencimiento'){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Seleccione Lote y Vencimiento',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;

    }

    if(inputCantiSolicit == '' ||inputCantiSolicit == null ||inputCantiSolicit == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: ' Cantidad Solicitada no puede ir vacio',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }


    if(inputCantiDespachada == '' ||inputCantiDespachada == null ||inputCantiDespachada == undefined){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: ' Cantidad Despachada no puede ir vacio',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });

        return false;
    }

    if(parseInt (inputCantiDespachada) > parseInt (inputCantExistente)){
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'No hay cantidad suficiente',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });
        return false;
    }

    if (contadorfilastraslado <= 23){
    $('#tblbodyTraslado').append('<tr>' +
        '<td scope="row">'+inputCodigo+'</td>' +
        '<td>'+inputDescrip+'</td>' +
        '<td>'+inputCantiSolicit+'</td>' +
        '<td>'+inputCantiDespachada+'</td>' +
        '<td>'+inputMotivTraslado+'</td>' +
        '<td hidden>'+inputMotivTraslado+'</td>' +
        '<td hidden class="nuevaClase3">'+inputKardexFar+'</td>' +
        '<td hidden>'+SelCodUnico+'</td>' +
        '<td hidden class="nuevaClase">'+inputNoLote+'</td>' +
        '<td hidden class="nuevaClase2">'+inputVechaVenci+'</td>' +
        '<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>'
        +'</tr>');

    $('#inputCodigo').val('');
    $('#SelCodUnico').empty();
    $('#SelCodUnico').append("<option>Seleccione Presentación</option>");
    $('#inputKardexFar').val('');
    $('#inputDescrip').val('');
    $('#selLoteVencimiento').empty();
    $('#selLoteVencimiento').append("<option>Seleccione Lote Y Fecha de Vencimiento</option>");
    $('#inputNoLote').val('');
    $('#inputVechaVenci').val('');
    $('#inputCantExistente').val('');
    $('#inputCantiSolicit').val('');
    $('#inputCantiDespachada').val('');
    $('#inputMotivTraslado').val('Abastecimiento');
    $('#inputPreciUnit').val('');
    contadorfilastraslado = contadorfilastraslado + 1;
    $("#btnGuardarTraslado").attr('disabled', false);
    }
    else{
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Ha utilizado el límite de filas',
        });
    }
    
}

/*funcion para eliminar fila*/
$(document).on('click', '.borrar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
    contadorfilastraslado = contadorfilastraslado - 1;
});


function guardarTraslado() {
    //var inputCorrelativoCGC = $('#inputCorrelativoCGC').val();
    let inputSolicita = $('#inputSolicita').val();
    let inputEntrega = $('#inputEntrega').val();
    let inputEntregaTras = $('#inputEntregaTras').val();
    let inputCargoTrasl = $('#inputCargoTrasl').val();
    let inputJefeDepartamento = $('#inputJefeDepartamento').val();
    let inputCargoJefe = $('#inputCargoJefe').val();
    let inputObservaciones = $('#inputObservaciones').val();
    let inputLug = $('#inputLug').val();
    let inputFech = $('#inputFech').val();
    let inputRecibeTras = $('#inputRecibeTras').val();
    let inputCargoTras = $('#inputCargoTras').val();

    if (contadorfilastraslado == '' || contadorfilastraslado == null || contadorfilastraslado == undefined || contadorfilastraslado == 0) {
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Debe de ingresar un insumo para guardar el documento',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });
        return false;
    }

    if (inputFech == '' || inputFech == null || inputFech == undefined) {
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Fecha',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });
        return false;
    }

    if (inputSolicita == '' || inputSolicita == null || inputSolicita == undefined || inputSolicita == 0) {
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Solicitante',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });
        return false;
    }

    if (inputEntrega == '' || inputEntrega == null || inputEntrega == undefined || inputEntrega == 0) {
        $.toast({
            title: 'Ups!',
            subtitle: '1 segundo',
            content: 'Ingrese Entrega',
            type: 'error',
            pause_on_hover: true,
            delay: 5000
        });
        return false;
    }

    let datos = {
        //FarmNumIdTraslado: inputCorrelativoCGC,
        FarmStrUnidSolicita: inputSolicita,
        FarmStrUnidEntrega: inputEntrega,
        FarmStrNomEntrega: inputEntregaTras,
        FarmStrCargEntrega: inputCargoTrasl,
        FarmStrNomJefe: inputJefeDepartamento,
        FarmStrCargJefe: inputCargoJefe,
        FarmStrObservacion: inputObservaciones,
        FarmStrLugar: inputLug,
        FarmDateTras: inputFech,
        FarmStrNomRecibe: inputRecibeTras,
        FarmStrCargRecibe: inputCargoTras
    };

     $.ajax({
        url: './api/v1/FarmTraslado.php',
        type: 'POST',
        data: datos,
         success: function (response) {
            if (response.state.codstate == 1){
                    var identiti = response.state.Correlativo;
                    $('#inputCorrelativoCGC').val(identiti)
                    let timerInterval
                    Swal.fire({
                        title: response.state.strstate,
                        html: 'Se cerrará en <b></b> milisegundos.',
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft()
                                }, 100)
                            detalletraslado(identiti)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                            }
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            }
                        })
            }
            else{
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
            $.toast({
                title: 'Ups!',
                subtitle: '1 segundo',
                content: ' ' + request.responseText,
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });
            $("#btnGuardarTraslado").text('GUARDAR').attr('disabled', false);
        }
    });
}

function detalletraslado(identiti){
        var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tblbodyTraslado tr'), function(tr){
        return Array.prototype.map.call(tr.querySelectorAll('td'), function(td){
            return td.innerHTML;
        });
    });
{
      for (let j = 0; j<tableInfo.length ; j++){
        let datosDetalle = {
            FarmNumIdTraslado:identiti,
            FarmNumCodiInsu: tableInfo[j][0],
            FarmStrDescrip: tableInfo[j][1],
            FarmNumCantSoli: tableInfo[j][2],
            FarmNumCantDesp: tableInfo[j][3],
            FarmStrMotivo: tableInfo[j][4],
            FarmNumIdKardexFarm: tableInfo[j][6],
            AlmacNumCodPresentInsu: tableInfo[j][7],
            FarmStrlote: tableInfo[j][8],
            FarmDateVencimiento: tableInfo[j][9],
        };

        $.ajax({
            url: './api/v1/FarmDetalleTraslado.php',
            type: 'POST',
            data: datosDetalle,
           success: function (response) {
                $.toast({
                    title: 'Informativo',
                    subtitle: '1 segundo',
                    content: response.state.strstate,
                    type: swichSuccessWarning(response.state.codstate),
                    pause_on_hover: true,
                    delay: 5000
            });
               $("#btnGuardarTraslado").text('Nuevo Traslado').attr('disabled', false);
               $("#btnGuardarTraslado").removeClass("btn-success");
               $("#btnGuardarTraslado").addClass("btn-warning");
               $("#imprimirtraslado").prop('disabled', false);

            },
            error: function (request, status, error) {
                $.toast({
                    title: 'Ups!',
                    subtitle: '1 segundo',
                    content: ' ' + request.responseText,
                    type: 'error',
                    pause_on_hover: true,
                    delay: 5000
                });
                $("#btnGuardarTraslado").text('GUARDAR').attr('disabled', false);
            }
        });
    }
};
}

function cargarLoteVencimiento(codigoUnico, IdKardexFarmacia) {
    $('#selLoteVencimiento').empty();
    $('#selLoteVencimiento').append("<option>Seleccione Lote Y Fecha de Vencimiento</option>");

    let esperaVencimiento = $.ajax({
        url: './api/v1/Insumo.php?codImsumoFarm=' + codigoUnico + '&VencimientoFarm=true&kardexno='+ IdKardexFarmacia,        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            $(json).each(function (index, item) {
                AlmacNumCodPresentInsu = json[index].AlmacNumCodPresentInsu;
                FarmStrLote = json[index].FarmStrLote;
                FarmDateVencimiento = json[index].FarmDateVencimiento;
                FarmNumPreUnExist = json[index].FarmNumPreUnExist;
                FarmNumCantidad = json[index].FarmNumCantidad;

                $('#selLoteVencimiento').append('<option value="' + FarmStrLote + '*' + FarmDateVencimiento + '*' + FarmNumPreUnExist + '*' + FarmNumCantidad + '">' + 'Lote: ' + FarmStrLote + ' - F.Vencimiento ' + FarmDateVencimiento + '</option>')
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

    let partida = valores.split('*');
    let lote = partida[0];
    let vencimiento = partida[1];
    let preunit = partida[2]
    let cantidad = partida[3];
    $('#inputNoLote').val(lote);
    $('#inputVechaVenci').val(vencimiento);
    $('#inputPreciUnit').val(preunit);
    $('#inputCantExistente').val(cantidad);
    
}

function CantidadActual() {
    let CantidadExistente = $('#inputCantExistente').val();
    let cantidadDespachada = $('#inputCantiDespachada').val();
    let resta = parseInt(CantidadExistente) - parseInt(cantidadDespachada);
    $('#inputCantActual').val(resta);

}


function buscarInsuTraslado(){
    $('#BuscarTraslado').fadeIn();
}


$('#tbBuscar').DataTable( {
    destroy: true,
    "oSearch": {"bSmart": false,
        "bRegex": true,
        "sSearch": ""  },//busca un dato exacto
    dom: 'Blfrtip',
    buttons: [
        'print', 'pdf'
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

$('#tbBuscar tbody').on('dblclick', 'td', function () {
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
    $('#BuscarTraslado').fadeOut();
});

function agrCodIns(codigoInsumo){
    $('#inputCodigo').val(codigoInsumo);

    buscarInsumoGeneral();


}


function ejecutarRep(){
    let numtrasl = $('#inputCorrelativoCGC').val();
   window.open('http://' + window.location.hostname + '/almacen-farmacia/runreports/RepTrasladoFarm.php?FarmNumIdTraslado=' + numtrasl);
   window.open('http://' + window.location.hostname + '/almacen-farmacia/runreports/RepTrasladoFarmTabla.php?FarmNumIdTraslado=' + numtrasl);
    $('#inputCorrelativoCGC').val('');
    fnOpenForm(event, 'FarmTrasladoMedicamentos')
    }