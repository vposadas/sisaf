var table = $('#tblInventarioGeneral').DataTable( {
    destroy: true,
    "oSearch": {"bSmart": false,
        "bRegex": true,
        "sSerach": ""
    },
    dom: 'Blfrtip',
    buttons: ['excel',
        {   extend: 'pdfHtml5',
            title : function() {
                return "Inventario General";
            },
            orientation: 'landscape',
            text : '<i class="fa fa-file-pdf-o"> PDF</i>',
            pageSize: 'LEGAL',
            //messageTop: 'Inventario General',
            exportOptions: {
                columnsCenter: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]}
        },

    ],
    "ajax": "./api/v1/ControlDeInventarioFarmacia.php?invMostrarBuscar=true",
    "columns": [
        { "data": "AlmacNumRenglon" },
        { "data": "AlmacNumCodInsumo" },
        { "data": "StrNombreInsumo" },
        { "data": "StrCaracteristicas" },
        { "data": "FarmStrPresentInusmo" },
        { "data": "FarmStrUniInsumo" },
        { "data": "FarmNumIdKardexFarm" },
        { "data": "FarmNumCantExist" },
        { "data": "FarmNumPreUnExist" },
        { "data": "FarmNumPreTotExist" }
    ]

} );

function requestgenerarExcel() {
    tableToExcel('tbInventarioMostrar', 'Requisicion Medicamentos y Productos Afines');
}