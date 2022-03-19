var tableEntFarm;
function fn_reporteEntFarmacia() {
    let fechaInicio = $('#inputFecIniEnt').val();
    let fechaFin = $('#inputFecFinEnt').val();

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

    tableEntFarm = $('#tblRepoEntFarm').DataTable({
        destroy: true,
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: ['pdf'],
        "ajax": "./api/v1/ReportesFarmacia.php?mostRepoEntFarm=true&dateIEnt="+fechaInicio+'&dateFEnt='+fechaFin,
        columnDefs: [
            {className: "dt-center", targets: [0, 1, 2, 3, 4]}
        ],
        "columns": [
            { "data": "FarmDateIngreso" },
            { "data": "Numero" },
            { "data": "Almacen" },
            { "data": "SegStrNomUsuario" },
            { data: "AlmacNumIdRequi", "visible": false},

        ]
    })
}

$('#tblRepoEntFarm tbody').on('dblclick', 'td', function () {

    var datosEnt = tableEntFarm.row($( this ).parents('tr')).data();

    let idRequiAlmac = (datosEnt['AlmacNumIdRequi']);

    fn_abrirModaEntradaFarm(idRequiAlmac);

});

function fn_abrirModaEntradaFarm(idRequiAlmac) {
    $('#modalEntFarmaciaInsu').fadeIn();
    fn_mostrarDetalleEntRequi(idRequiAlmac)
}

function fn_mostrarDetalleEntRequi(idRequiAlmac) {
    console.log(idRequiAlmac + 'esto es el id consol')

    var table =$('#tblMostrarInsumoEntrada').DataTable( {
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        destroy: true,
        dom: 'Blfrtip',
        buttons: [{extend: 'pdf', title: "Reporte de Entradas de Almacén No: " + idRequiAlmac,text: 'PDF', filename: 'Reporte Almacén', orientation: 'landscape'} ],
        "ajax": "./api/v1/ReportesFarmacia.php?mostDetalleEntrada=true&idEntFarma="+idRequiAlmac,
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
            { "data": "FarmDateVenci" },
            { "data": "FarmNumCant" },
            { "data": "FarmNumPreUnit" },
            { "data": "FarmNumPreTotal" }
        ]
    } );
}
