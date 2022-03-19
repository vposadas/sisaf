var table = $('#tbInventarioMostrar').DataTable( {

    destroy: true,
    "oSearch": {"bSmart": false,
        "bRegex": true,
        "sSerach": ""
    },
    dom: 'Blfrtip',
    buttons: ['excel',
        {   extend: 'pdfHtml5',
            title : function() {
                return "Inventario Detallado";
            },
            orientation: 'landscape',
            text : '<i class="fa fa-file-pdf-o"> PDF</i>',
            pageSize: 'LEGAL',
            //messageTop: 'Inventario General',
            exportOptions: {
                columnsCenter: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]}
        },

    ],
    "ajax": "./api/v1/ControlDeInventarioFarmacia.php",
    "columns": [

        { "data": "AlmacNumRenglon" },
        { "data": "AlmacNumCodInsumo" },
        { "data": "StrNombreInsumo" },
        { "data": "StrCaracteristicas" },
        { "data": "FarmStrPresentInusmo" },
        { "data": "FarmStrUniInsumo" },
        { "data": "FarmNumIdKardexFarm" },
        { "data": "FarmStrLote" },
        { "data": "FarmVencimiento" },
        { "data": "FarmNumCantidad" },
        { "data": "ConteoFecha"},

    ],
    fnRowCallback: function(row, data,) {

        //var conteo = {columna_id:13,number:data.ConteoFecha};
        //console.log(conteo)
        // var entradaalmuerzo = {columna_id:5,texto:data.EntradaAlmuerzo};
        // $.each( conteo, function() {
        var resultado;
        console.log(data.ConteoFecha)
        if(data.ConteoFecha < -61){
            resultado=1;
            data.ConteoFecha = 'N/A'
        }
        else if(data.ConteoFecha < 0 && data.ConteoFecha > -60){
            resultado=2;
        }
        else if (data.ConteoFecha >= 0 && data.ConteoFecha <= 6){
            resultado = 3;
        }
        else if (data.ConteoFecha >6 && data.ConteoFecha <=12){
            resultado = 4;
        }
        else if (data.ConteoFecha > 12 && data.ConteoFecha <= 24){
            resultado= 5;
        }
        else if (data.ConteoFecha >24){
            resultado=6;
        }
        else { resultado = 7}
        console.log(resultado)
        switch (resultado) {
            //si es normal
            case 1:
                //cambia color y fondo
                //reemplazo el valor de eq por i
                //i al ser una variable se concatena dentro, no solo se coloca
                console.log(resultado + 'case 1')
                console.log(row)
                $(row).find('td:eq(8)', row).css("color", "white");
                $(row).find('td:eq(8)', row).css("background-color", "#0c00c9");
                $(row).find('td:eq(10)', row).text('N/A');

                break;
            case 2:
                //valor seteado previamente
                $(row).find('td:eq(8)', row).css("color", "white");
                $(row).find('td:eq(8)', row).css("background-color", "#b20000");
                break;
            case 3:
                //valor seteado previamente
                $(row).find('td:eq(8)', row).css("color", "white");
                $(row).find('td:eq(8)', row).css("background-color", "#b20000");
                break;
            case 4:
                //valor seteado previamente
                $(row).find('td:eq(8)', row).css("color", "white");
                $(row).find('td:eq(8)', row).css("background-color", "#efe122");
                break;
            case 5:
                //valor seteado previamente
                $(row).find('td:eq(8)', row).css("color", "white");
                $(row).find('td:eq(8)', row).css("background-color", "#32e81d");
                break;
            case 6:
                //valor seteado previamente
                $(row).find('td:eq(8)', row).css("color", "white");
                $(row).find('td:eq(8)', row).css("background-color", "#0c00c9");
                break;


            default:
                //valor por default
                $(row).find('td:eq(8)', row).css("color", "white");
                $(row).find('td:eq(8)', row).css("background-color", "#0c00c9");
                break;
        }
    }

} );

function requestgenerarExcel() {
    tableToExcel('tbInventarioMostrar', 'Requisicion Medicamentos y Productos Afines');
}