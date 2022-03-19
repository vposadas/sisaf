function Tipo_Busqueda(){
    let TipoBus = $('#TipoBusqueda').val();
    //console.log(TipoBus + " Seleccionar tipo reajustewajajajja")

    if(TipoBus == 'RF'){
        $('#RangodeFechas').prop('hidden', false);
        $('#NumDocumento').prop('hidden', true);
        $('#inputNumRequ').val('');
    }
    else if (TipoBus == 'ND'){
        $('#RangodeFechas').prop('hidden', true);
        $('#NumDocumento').prop('hidden', false);
        $('#inputFecIniRequi').val('');
        $('#inputFecFinRequi').val('');
    }
    else {
        $('#RangodeFechas').prop('hidden', true);
        $('#NumDocumento').prop('hidden', true);
        $('#inputNumRequ').val('');
        $('#inputFecIniRequi').val('');
        $('#inputFecFinRequi').val('');
    }
}

var tableFarm;
function fn_reporteRequisFarma() {
    let fechaInicio = $('#inputFecIniRequi').val();
    let fechaFin = $('#inputFecFinRequi').val();

    if(fechaInicio == '' || fechaInicio == null || fechaInicio == undefined ){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Campo Fecha Inicio vacío',
            showConfirmButton: true,
        });
        return false;
    }

    if(fechaFin == '' || fechaFin == null || fechaFin == undefined){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Campo Fecha Fin vacío',
            showConfirmButton: true,
        });
        return false;
    }

    tableFarm = $('#tblRepRequiFarm').DataTable({
        destroy: true,
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: ['pdf'],
        "ajax": "./api/v1/ReportesFarmacia.php?mostRequiFarm=true&dateIFarm="+fechaInicio+'&dateFFarm='+fechaFin,
        columnDefs: [
            {className: "dt-center", targets: [0, 1, 2, 3, 4, 5]}
        ],
        "columns": [
            { data: "FarmNumIdRequi" },
            { "data": "FarmDateFechaReq" },
            { "data": "FarmStrServicio" },
            { "data": "FarmStrNomRecibe" },
            { "data": "FarmStrNomEntreg" },
            { render: function (data, type, row) {
                return '<button class="btn btn-sm btn-success" onclick="fn_imprimirRequi('+row.FarmNumIdRequi+')">Imprimir</button>'
                }
            },
        ]
    })
}

function fn_RepNumReq() {
    let NumReq = $('#inputNumRequ').val();

    if(NumReq == '' || NumReq == null || NumReq == undefined ){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Ingrese un Número de Requisición',
            showConfirmButton: true,
        });
        return false;
    }

    tableFarm = $('#tblRepRequiFarm').DataTable({
        destroy: true,
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""},//busca un dato exacto
        dom: 'Blfrtip',
        buttons: ['pdf'],
        ajax: "./api/v1/ReportesFarmacia.php?mostRequiFarmNum=true&NumRequi="+NumReq,
        columnDefs: [
            {className: "dt-center", targets: [0, 1, 2, 3, 4, 5]}
        ],
        "columns": [
            { data: "FarmNumIdRequi" },
            { "data": "FarmDateFechaReq" },
            { "data": "FarmStrServicio" },
            { "data": "FarmStrNomRecibe" },
            { "data": "FarmStrNomEntreg" },
            { render: function (data, type, row) {
                    return '<button class="btn btn-sm btn-success" onclick="fn_imprimirRequi('+row.FarmNumIdRequi+')">Imprimir</button>'
                }
            },
        ]
    })
}

$('#tblRepRequiFarm tbody').on('dblclick', 'td', function () {

    var datosPre = tableFarm.row($( this ).parents('tr')).data();

    //console.log(datosPre)
    let SolNumero= (datosPre['FarmNumIdRequi']);

    fn_abrirModalFarm(SolNumero);

});

function fn_abrirModalFarm(SolNumero) {
    $('#modalBusquedaInsumo').fadeIn();

    fn_mostrarDetalleRequi(SolNumero)
}

function fn_mostrarDetalleRequi(SolNumero) {

    var table =$('#tblMostrarInsumosRequi').DataTable( {
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        destroy: true,
        dom: 'Blfrtip',
        buttons: [{extend: 'pdf', title: "Reporte de Requisición No: " + SolNumero,text: 'PDF', filename: 'Reporte Requisición', orientation: 'landscape'} ],
        "ajax": "./api/v1/ReportesFarmacia.php?mostrarDetalleRequi=true&idRequi="+SolNumero,
        columnDefs: [
            {className: "dt-center", targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]}
        ],
        "columns": [
            { "data": "AlmacNumRenglon" },
            { "data": "AlmacNumCodInsumo" },
            { "data": "FarmStrDescripcion" },
            { "data": "FarmStrPresentInusmo" },
            { "data": "FarmStrUniInsumo" },
            { "data": "FarmNumCantDespac" },
            { "data": "FarmStrNolote" },
            { "data": "FarmDateVencimiento" },
            { "data": "FarmNumPreUnExist" },
            { "data": "FarmNumIdKardexFarm" },
            { "data": "FarmNumStrTipBod" }
        ]
    } );

}

function fn_imprimirRequi(idRequi) {
    window.open('http://' + window.location.hostname + '/almacen-farmacia/runreports/RepFarmRequi.php?FarmNumIdRequi=' + idRequi);
}