var tableFarm;
function fn_reporteConsolFarma() {
    let fechaInicio = $('#inputFecIniConsol').val();
    let fechaFin = $('#inputFecFinConsol').val();

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

    tableFarm = $('#tblConsolReporte').DataTable({
        destroy: true,
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: ['pdf'],
        "ajax": "./api/v1/ReportesFarmacia.php?mostRepoConsolidado=true&dateIConsolFarm="+fechaInicio+'&dateFConsolFarm='+fechaFin,
        columnDefs: [
            {className: "dt-center", targets: [0, 1, 2, 3, 4, 5]}
        ],
        "columns": [
            { data: "FarmNumIdConsoli" },
            { "data": "FarmDateFechaConsol" },
            { "data": "FarmStrServicio" },
            { "data": "FarmStrRecibe" },
            { "data": "FarmStrEntrega" },
            { render: function (data, type, row) {
                    return '<button class="btn btn-sm btn-success" onclick="fn_imprimirConsol('+row.FarmNumIdConsoli+')">Imprimir</button>'
                }
            },

        ]
    })
}

function fn_imprimirConsol(idConsolidado) {
    window.open('http://' + window.location.hostname + '/almacen-farmacia/runreports/RepConsolidado.php?FarmNumIdConsoli=' + idConsolidado);
}


$('#tblConsolReporte tbody').on('dblclick', 'td', function () {

    var datosPre = tableFarm.row($( this ).parents('tr')).data();

    //console.log(datosPre)
    let solNumConsol= (datosPre['FarmNumIdConsoli']);

    fn_abrirModalFarmConsol(solNumConsol);

});


function fn_abrirModalFarmConsol(SolNumero) {
    $('#modalBusquedaInsumoConsol').fadeIn();

    fn_mostrarDetalleConsol(SolNumero)

}

function fn_mostrarDetalleConsol(SolNumero) {
    console.log(SolNumero + 'esto es el id consol')

    var table =$('#tblMostDetConsol').DataTable( {
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        destroy: true,
        dom: 'Blfrtip',
        buttons: [{extend: 'pdf', title: "Reporte de Consolidado No: " + SolNumero,text: 'PDF', filename: 'Reporte Requisición', orientation: 'landscape'} ],
        "ajax": "./api/v1/ReportesFarmacia.php?mostrarDetalleConsol=true&idEncConsol="+SolNumero,
        columnDefs: [
            {className: "dt-center", targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]}
        ],
        "columns": [
            { "data": "AlmacNumRenglon" },
            { "data": "AlmacNumCodInsumo" },
            { "data": "nomDes" },
            { "data": "FarmStrPresentInusmo" },
            { "data": "FarmStrUniInsumo" },
            { "data": "FarmStrNolote" },
            { "data": "FarmDateVencimiento" },
            { "data": "FarmNumSubtotal" },
            { "data": "FarmNumDevoluciones" },
            { "data": "FarmNumTotalEntregado" }
        ]
    } );
}