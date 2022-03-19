/**
 * @Created_by: Intellij IDEA
 * @User: Fernando Cardona
 * @Date:  20/01/2021
 * @Time: 7:20 AM
 * @Version: 1.0
 */


$(document).ready(function () {

    /*----Funcion colocar fecha----*/
    var f = new Date();
    if (f.getMonth() + 1 <= 9) {
        if (f.getDate() <= 9) {
            let fecha = (f.getFullYear() + "-0" + (f.getMonth() + 1) + "-0" + f.getDate());
            $('#inputFechaIngreso').val(fecha);
            //$('#inputFechRegis').val(fecha);
            //console.log(fecha);
        } else {
            let fecha = (f.getFullYear() + "-0" + (f.getMonth() + 1) + "-" + f.getDate());
            $('#inputFechaIngreso').val(fecha);
            // $('#inputFechRegis').val(fecha);
            //console.log(fecha);
        }
    } else {
        if (f.getDate() <= 9) {
            let fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-0" + f.getDate());
            $('#inputFechaIngreso').val(fecha);
            // $('#inputFechRegis').val(fecha);
            //console.log(fecha);
        } else {
            let fecha = (f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate());
            $('#inputFechaIngreso').val(fecha);
            //$('#inputFechRegis').val(fecha);
            //console.log(fecha);
        }

    }


    /*----Funcion colocar fecha----*/
});

function swichSuccessWarning(codstate) {
    /*Función utilizada para indicarle al Toast que Tipo de Alerta debe mostrar, si Satisfactorio o error
     */
    if (codstate === '0' || codstate === 0) {
        return 'error'
    } else {
        return 'success'
    }
}


function llenarTablaDetalle(){
    let fecha = $('#inputFechaIngreso').val();
    let codigoRequi = $('#inputDocRespaldo').val() + $('#TipAlmac').val();

    if($('#inputDocRespaldo').val() == '' || $('#inputDocRespaldo').val() == undefined || $('#inputDocRespaldo').val() == null){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Ingrese No. de Requisición',
        });

        return false;
    }

    if($('#TipAlmac').val() == '' || $('#TipAlmac').val() == undefined || $('#TipAlmac').val() == null || $('#TipAlmac').val() == 0){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Seleccion un Almacén',
        });

        return false;
    }


    $('#tbodyDetalleEntrada').empty();
    $('#tbodyaggkardexentrada').empty();

    var ks = $.ajax({
        url: './api/v1/EntradaFarmacia.php?vistaEntrada=true' + '&codigoRequi=' + codigoRequi,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log("Insumos que si tienen kardex");
            console.log(json);
            $(json).each(function (index, item) {
                AlmacNumIdRequi = json[index].AlmacNumIdRequi;
                RequiFarm = json[index].RequiFarm;
                DocRespaldo = json[index].DocRespaldo;
                AlmacStrPresentInsu = json[index].AlmacStrPresentInsu;
                AlmacStrCantYUnidInsu = json[index].AlmacStrCantYUnidInsu;
                AlmacNumCantDespachada = json[index].AlmacNumCantDespachada;
                AlmacNumPreUnExist = json[index].AlmacNumPreUnExist;
                FarmNumPrecTotal = json[index].FarmNumPrecTotal;
                AlmacStrNoLote = json[index].AlmacStrNoLote;
                AlmacDateFechaVenciReq = json[index].AlmacDateFechaVenciReq;
                FarmNumIdKardexFarm = json[index].FarmNumIdKardexFarm;
                StrNombreInsumo = json[index].StrNombreInsumo;
                FarmStrPresentInusmo = json[index].FarmStrPresentInusmo;
                FarmStrUniInsumo = json[index].FarmStrUniInsumo;
                AlmacNumCodInsumo = json[index].AlmacNumCodInsumo;
                StrCaracteristicas = json[index].StrCaracteristicas;

                $('#tbodyDetalleEntrada').append('<tr class="text-center">' +
                    '<td hidden>' + fecha + '</td>' +
                    '<td hidden>' + RequiFarm + '</td>' +
                    '<td hidden>' + DocRespaldo + '</td>' +
                    '<td>' + AlmacNumCodInsumo + '</td>' +
                    '<td>' + StrCaracteristicas + '</td>' +
                    '<td>' + AlmacStrPresentInsu + '</td>' +
                    '<td>' + AlmacStrCantYUnidInsu + '</td>' +
                    '<td id="CA-' + index + '">' + AlmacNumCantDespachada + '</td>' +
                    '<td id="PU-' + index + '">' + AlmacNumPreUnExist + '</td>' +
                    '<td hidden>' + FarmNumPrecTotal + '</td>' +
                    '<td>' + AlmacStrNoLote + '</td>' +
                    '<td>' + AlmacDateFechaVenciReq + '</td>' +
                    '<td>' + FarmNumIdKardexFarm + '</td>' +
                    '<td> <input type="text" class="form-control" id="Uni-' + index + '" onchange="sumaNC(this.id)"></td>' +
                    '<td id="NC-' + index + '"> </td>' +
                    '<td id="NPU-' + index + '"> </td>' +
                    '<td>' + StrNombreInsumo + '</td>' +
                    '<td>' + FarmStrPresentInusmo + '</td>' +
                    '<td>' + FarmStrUniInsumo + '</td>' +
                    '</tr>')
            });


        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
    console.log('---------------')
    console.log(ks)

    var kn = $.ajax({
        url: './api/v1/EntradaFarmacia.php?datosfaltantes=true' + '&codigoRequi=' + codigoRequi,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log("Insumos que no tienen kardex");
            console.log(json);

            $(json).each(function (index, item) {
                AlmacNumRenglon= json[index].AlmacNumRenglon;
                AlmacNumCodInsumo= json[index].AlmacNumCodInsumo;
                AlmacStrNomInsumo= json[index].AlmacStrNomInsumo;
                AlmacStrCaractInsu= json[index].AlmacStrCaractInsu;
                AlmacStrPresentInsu= json[index].AlmacStrPresentInsu;
                AlmacStrCantYUnidInsu= json[index].AlmacStrCantYUnidInsu;
                AlmacNumCodPresentInsu= json[index].AlmacNumCodPresentInsu;
                AlmacNumIdRequi= json[index].AlmacNumIdRequi;
                FarmNumIdKardexFarm= json[index].FarmNumIdKardexFarm;
                AlmacStrNoLote= json[index].AlmacStrNoLote;
                AlmacDateFechaVenciReq= json[index].AlmacDateFechaVenciReq;
                AlmacNumCantDespachada= json[index].AlmacNumCantDespachada;
                AlmacNumPreUnExist= json[index].AlmacNumPreUnExist;
                Total= json[index].Total;
                DocRespaldo= json[index].DocRespaldo;

                let IdREqui = AlmacNumIdRequi= json[index].AlmacNumIdRequi;
                let IdRequiSplit = IdREqui.split("-");

                console.log()

                $('#tbodyaggkardexentrada').append('<tr class="text-center" id="tr-'+AlmacNumCodPresentInsu+'">\n' +
                    '<td hidden>'+AlmacNumRenglon+'</td>\n' +
                    '<td>'+AlmacNumCodInsumo+'</td>\n' +
                    '<td>'+AlmacStrNomInsumo+'</td>\n' +
                    '<td>'+AlmacStrCaractInsu+'</td>\n' +
                    '<td hidden>'+DocRespaldo+'</td>\n' +
                    '<td>' + AlmacStrPresentInsu + '</td>\n' +
                    '<td>' + AlmacStrCantYUnidInsu + '</td>\n' +
                    '<td hidden>' + IdRequiSplit[0] + '</td>\n' +
                    '<td>' + AlmacStrNoLote + '</td>\n' +
                    '<td>' + AlmacDateFechaVenciReq + '</td>\n' +
                    '<td hidden> ' + AlmacNumCodPresentInsu + ' </td>\n' +
                    '<td>' + AlmacNumCantDespachada + '</td>\n' +
                    '<td hidden>' + AlmacNumPreUnExist + '</td>\n' +
                    '<td hidden>' + Total + '</td>\n' +
                    '<td hidden>' + AlmacNumIdRequi + '</td>\n' +
                    '<td><button class="btn btn-info editar" id=' + AlmacNumCodPresentInsu + '><i class="fas fa-edit"></i></button></td>\n' +
                    '<td><button class="btn btn-success unirKardex" id=' + AlmacNumCodPresentInsu + '><i class="fas fa-sync"></i></button></td>\n' +
                '    </tr>')


            });
            console.log('---------------------------------------')
            if (json.length == 0) {
                console.log("Todos los insumos tienen kardex asignados")
                $('#btnGuardarEntrada').prop('disabled', false);
            } else {
                console.log("Falta Asignar kardex a insumos")
                $('#btnGuardarEntrada').prop('disabled', true);
            }
        },

        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }


    });
    console.log('---------------')
    console.log(kn)

}//Termina Funcion llenarTablaDetalle


$(document).on('click', '.editar', function (event) {
    $('#SelCodUnico').empty();
    $('#SelCodUnico').append("<option value='0'>Seleccione Presentación</option>");
    event.preventDefault();

    $('#asignarkardex').fadeIn();
    event.preventDefault();
    let data = $(this).closest('tr');

    let codigoespecificio = (data.find("td:eq(10)").text());
    let codigo = (data.find("td:eq(1)").text());

    $('#inputCodInsumo').val(codigo);
    $('#CodPresentacion').val(codigoespecificio);

    buscarInsumoEspecifico(codigoespecificio);

    $('#inputNomProducto').val('');
    $('#inputCaracteristicas').val('');
    $('#inputPres').val('');
    $('#inputUniMed').val('');
    $('#inputRenPresupuestario').val('');
    $('#inputMinimo').val('');
    $('#inputMaximoF').val('');
});

function sumaNC(id) {

    let soloNum = id.split("-");
    let Unidad = $('#Uni-' + soloNum[1]).val();
    let CantidadAntigua = $('#CA-' + soloNum[1]).text();
    let precioUnitario = $('#PU-' + soloNum[1]).text();
    console.log(Unidad + ' ' + CantidadAntigua);
    var multiplicacion = 0;
    multiplicacion = parseInt(Unidad) * parseInt(CantidadAntigua);

    $('#NC-' + soloNum[1]).text(multiplicacion);

    let division = 0;

    division = parseFloat(precioUnitario) / parseInt(Unidad);

    $('#NPU-' + soloNum[1]).text(division);
}

var objDatosAbajo = {};

$(document).on('click', '.unirKardex', function (event) {
    $('#unirKardex').fadeIn();
    mostrarDatosUnir();

    $('#tbodySelAgKardex').empty();
    event.preventDefault();
    let data = $(this).closest('tr');
    let renglon = (data.find("td:eq(0)").text());
    let codigo = (data.find("td:eq(1)").text());
    let nombre = (data.find("td:eq(2)").text());
    let caracteristicas = (data.find("td:eq(3)").text());
    let docRespaldo = (data.find("td:eq(4)").text());
    let strPresentacion = (data.find("td:eq(5)").text());
    let strUnidad = (data.find("td:eq(6)").text());
    let noRequi = (data.find("td:eq(7)").text());
    let lote = (data.find("td:eq(8)").text());
    let fechaVencimiento = (data.find("td:eq(9)").text());
    let codPresentacionAux = (data.find("td:eq(10)").text());
    let AlmacNumCantDespachada = (data.find("td:eq(11)").text());
    let AlmacNumPreUnExist = (data.find("td:eq(12)").text());
    let Total = (data.find("td:eq(13)").text());
    let codigoRequi = (data.find("td:eq(14)").text());

    console.log(codigo)

    objDatosAbajo = {
        renglon:renglon,
        codigo:codigo,
        nombre:nombre,
        caracteristicas:caracteristicas,
        strPresentacion:strPresentacion,
        strUnidad:strUnidad,
        docRespaldo:docRespaldo,
        lote:lote,
        fechaVencimient:fechaVencimiento,
        codPresentacionAu:codPresentacionAux,
        AlmacNumCantDespachada:AlmacNumCantDespachada,
        AlmacNumPreUnExist:AlmacNumPreUnExist,
        Total:Total,
        codigoRequi:codigoRequi,
        data:data,
        kardex: null,
        presFarm: null,
        uniFarm: null
    };

    console.log(objDatosAbajo);


});

function mostrarDatosUnir() {

    $('#tbBuscarK').DataTable( {
        destroy: true,
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: [
            'print', 'pdf'
        ],
        "ajax": "./api/v1/FarmRequisicion.php",
        "columns": [
            { "data": "AlmacNumCodInsumo" },
            { "data": "AlmacStrNomInsumo" },
            { "data": "AlmacStrCaractInsu" },
            { "data": "AlmacNumRenglon" },
            { "data": "FarmNumIdKardexFarm" },
            { "data": "FarmNumCantExist" },
            { "data": "FarmStrPresentInusmo" },
            { "data": "FarmStrUniInsumo" }
        ],
    } );
}

$('#tbBuscarK tbody').on('dblclick', 'td', function () {
    console.log("esto");
    let data = $(this).closest('tr');
    let kardex = (data.find("td:eq(4)").text());
    let presFarm = (data.find("td:eq(6)").text());
    let uniFarm = (data.find("td:eq(7)").text());
    console.log(presFarm);
    console.log(uniFarm);
    objDatosAbajo.kardex = kardex; //asigna kardex a objeto
    objDatosAbajo.presFarm = presFarm;
    objDatosAbajo.uniFarm = uniFarm;
    $('#inputKardexSelec').val(kardex).prop('disabled', true); //Llenar input de los datos de la tabla

    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'KARDEX No. '+kardex+' seleccionado correctamente',
        showConfirmButton: false,
        timer: 2500
    });

    console.log(objDatosAbajo);
});

$('#btnUnirKardex').click(function (){
    $('#tbodyDetalleEntrada').append('<tr class="text-center">' +
        '<td hidden>'+$('#inputFechaIngreso').val()+'</td>' +
        '<td hidden>'+$('#inputDocRespaldo').val()+'</td>' +
        '<td hidden>' + objDatosAbajo.docRespaldo + '</td>' +
        '<td>' + objDatosAbajo.codigo + '</td>' +
        '<td>' + objDatosAbajo.caracteristicas + '</td>' +
        '<td>' + objDatosAbajo.strPresentacion + '</td>' +
        '<td>' + objDatosAbajo.strUnidad + '</td>' +
        '<td id="CA-' + objDatosAbajo.kardex + '">' + objDatosAbajo.AlmacNumCantDespachada + '</td>' +
        '<td id="PU-' + objDatosAbajo.kardex + '">' + objDatosAbajo.AlmacNumPreUnExist + '</td>' +
        '<td hidden>' + objDatosAbajo.Total + '</td>' +
        '<td>' + objDatosAbajo.lote + '</td>' +
        '<td>' + objDatosAbajo.fechaVencimient + '</td>' +
        '<td>' + objDatosAbajo.kardex + '</td>' +
        '<td><input type="text" class="form-control" id="Uni-' + objDatosAbajo.kardex + '" onchange="sumaNC(this.id)"></td>' +
        '<td id="NC-' + objDatosAbajo.kardex + '"> </td>' +
        '<td id="NPU-' + objDatosAbajo.kardex + '"> </td>' +
        '<td>' + objDatosAbajo.nombre + '</td>' +
        '<td>' + objDatosAbajo.presFarm+ '</td>' +
        '<td>' + objDatosAbajo.uniFarm + '</td>' +
        '</tr>');

    objDatosAbajo.data.remove();
    $('#unirKardex').fadeOut();
    validarTblVacia();
});

function validarTblVacia(){
    var tableVal= Array.prototype.map.call(document.querySelectorAll('#tbodyaggkardexentrada tr'), function (tr) {
        return Array.prototype.map.call(tr.querySelectorAll('td'), function (td) {
            return td.innerHTML;
        });
    });

    if(tableVal.length == 0){
        $('#btnGuardarEntrada').prop('disabled', false);
    }
}


function InsetEntrada(){
    var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tbodyDetalleEntrada tr'), function (tr) {
        return Array.prototype.map.call(tr.querySelectorAll('td'), function (td) {
            return td.innerHTML;
        });
    });

    console.log(tableInfo);

    for (let j = 0; j < tableInfo.length; j++) {

        var cantidad = parseInt(tableInfo[j][7], 10);

        let datosDetalle = {
            FarmDateFechaIngreso: tableInfo[j][0],
            FarmNumIdRequiEntrada: AlmacNumIdRequi,
            FarmStrDescrip: tableInfo[j][2],
            FarmNumPreTotal: tableInfo[j][8],
            FarmStrNolote: tableInfo[j][10],
            FarmDateVenci: tableInfo[j][11],
            FarmNumIdKardexFarm: tableInfo[j][12],
            FarmNumCant: tableInfo[j][14],
            FarmNumPreUnit: tableInfo[j][15]

        };
        console.log("cada datosDetalle enviado");
        console.log(datosDetalle);
        $.ajax({
            url: './api/v1/EntradaFarmacia.php',
            type: 'POST',
            data: datosDetalle,
            beforeSend: function () {
                $("#btnGuardarRequisicion").text('GUARDANDO...').prop('disabled', true);
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
                $("#btnGuardarRequisicion").text('GUARDAR').attr('disabled', false);

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
                $("#btnGuardarRequisicion").text('GUARDAR').attr('disabled', false);
            }
        });

    }

    $('#btnGuardarEntrada').prop('disabled', true);


}

function guardarEncabezadoIngreso() {

    let fechaIng = $('#inputFechaIngreso').val();
    let docRes = $('#inputDocRespaldo').val();
    let tipAlmac = $('#TipAlmac').val();

    let idRequi = docRes +'-'+tipAlmac;

    let datosDetalle = {
        FarmDateIngreso: fechaIng,
        AlmacNumIdRequi: idRequi,
    };

    $.ajax({
        url: './api/v1/IngresoEncabezado.php',
        type: 'POST',
        data: datosDetalle,
        beforeSend: function () {
            $("#btnGuardarRequisicion").text('GUARDANDO...').prop('disabled', true);
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
            $("#btnGuardarRequisicion").text('GUARDAR').attr('disabled', false);

            if (swichSuccessWarning(response.state.codstate)=='success'){

                InsetEntrada();
            }
            else{
                console.log('aqui no ha pasado nada')
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
            $("#btnGuardarRequisicion").text('GUARDAR').attr('disabled', false);
        }
    });
}