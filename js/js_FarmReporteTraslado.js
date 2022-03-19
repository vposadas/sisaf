var tableFarmTras;
function fn_reporteTrasladoFarma() {
    let fechaInicio = $('#inputFecIniTraslado').val();
    let fechaFin = $('#inputFecFinTraslado').val();

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

    tableFarmTras = $('#tblRepoTraslado').DataTable({
        destroy: true,
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: ['pdf'],
        "ajax": "./api/v1/ReportesFarmacia.php?mostRepoTraslado=true&dateITrasFarm="+fechaInicio+'&dateFTrasFarm='+fechaFin,
        columnDefs: [
            {className: "dt-center", targets: [0, 1, 2, 3, 4, 5]}
        ],
        "columns": [
            { data: "FarmNumIdTraslado" },
            { "data": "FarmDateTras" },
            { "data": "FarmStrUnidSolicita" },
            { "data": "FarmStrNomRecibe" },
            { "data": "FarmStrNomEntrega" },
            { render: function (data, type, row) {
                    return '<button class="btn btn-sm btn-success" onclick="fn_imprimirTraslado('+row.FarmNumIdTraslado+')" >Imprimir</button>'
                }
            },

        ]
    })
}

function fn_imprimirTraslado(idTraslado) {
    window.open('http://' + window.location.hostname + '/almacen-farmacia/runreports/RepTrasladoFarm.php?FarmNumIdTraslado=' + idTraslado);
}


$('#tblRepoTraslado tbody').on('dblclick', 'td', function () {

    var datosPre = tableFarmTras.row($( this ).parents('tr')).data();

    //console.log(datosPre)
    let solNumTraslado= (datosPre['FarmNumIdTraslado']);

    fn_abrirModalFarmConsol(solNumTraslado);

});


function fn_abrirModalFarmConsol(solNumTraslado) {
    $('#modalBusqInsTraslado').fadeIn();

    fn_mostrarDetalleConsol(solNumTraslado)

}

function fn_mostrarDetalleConsol(solNumTraslado) {
    console.log(solNumTraslado + 'esto es el id consol')

    var table =$('#tblMostrarInsumosTraslado').DataTable( {
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        destroy: true,
        dom: 'Blfrtip',
        buttons: [{extend: 'pdf', title: "Reporte de Consolidado No: " + solNumTraslado,text: 'PDF', filename: 'Reporte Requisición', orientation: 'landscape'} ],
        "ajax": "./api/v1/ReportesFarmacia.php?mostDetalleTraslado=true&idEncTraslado="+solNumTraslado,
        columnDefs: [
            {className: "dt-center", targets: [0, 1, 2, 3, 4, 5, 6, 7, 8]}
        ],
        "columns": [
            { "data": "AlmacNumRenglon" },
            { "data": "FarmNumCodiInsu" },
            { "data": "FarmStrDescrip" },
            { "data": "FarmStrPresentInusmo" },
            { "data": "FarmStrUniInsumo" },
            { "data": "FarmStrlote" },
            { "data": "FarmDateVencimiento" },
            { "data": "FarmNumCantSoli" },
            { "data": "FarmNumCantDesp" }
        ]
    } );
}