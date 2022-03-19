/**
 * @Created_by: Intellij IDEA
 * @User: Fernando Cardona
 * @Date:  26-Oct-21
 * @Time: 7:59 AM
 * @Version: 1.0
 */

var tableFarm;
function fn_reporteTurno() {
    let fechaInicio = $('#inputFecIniRequiSat').val();
    let fechaFin = $('#inputFecFinRequiSat').val();

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

    tableFarm = $('#tblRepSat').DataTable({
        destroy: true,
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: ['excel'],
        "ajax": "./api/v1//Reportes.php?RepSat=true&FechIniSat="+fechaInicio+'&FechFinSat='+fechaFin,
        columnDefs: [
            {className: "dt-center", targets: [0, 3, 4, 5, 6, 7, 8, 9, 10]}
        ],
        "columns": [
            { data: "Código" },
            { "data": "Insumo" },
            { "data": "StrCaracteristicas" },
            { "data": "Presentación" },
            { "data": "Unidad" },
            { "data": "Entradas" },
            { "data": "Reajuste" },
            { "data": "Salidas" },
            { "data": "Existencia" },
            { "data": "PrecioUni" },
            { "data": "Kardex" }
        ]
    })
}

function fn_GenBRESS(){
    let DateIniBRESS = $('#inputFechaInicioBRESS').val();
    let DateFinBRESS = $('#inputFechaFinBRESS').val();
    let SelBodegas = $('#SelareaBRESS').val();

    if(DateIniBRESS == '' || DateIniBRESS == null || DateIniBRESS == undefined ){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Campo Fecha Inicio vacío',
            showConfirmButton: true,
        });
        return false;
    }

    if(DateFinBRESS == '' || DateFinBRESS == null || DateFinBRESS == undefined){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Campo Fecha Fin vacío',
            showConfirmButton: true,
        });
        return false;
    }

    if(SelBodegas == '' || SelBodegas == null || SelBodegas == undefined || SelBodegas == 0){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Seeccione Una Bodega',
            showConfirmButton: true,
        });
        return false;
    }
    console.log(DateIniBRESS, DateFinBRESS, SelBodegas)
    $('#tblRepBRESS').DataTable({
        destroy: true,
        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: [{extend: 'excel', title: "Fecha: " + DateIniBRESS + " Al: " + DateFinBRESS,text: 'EXCEL', filename: 'Reporte:' +SelBodegas, orientation: 'landscape'}, {extend: 'pdf', title: "Fecha: " + DateIniBRESS + " Al: " + DateFinBRESS,text: 'PDF', filename: 'Reporte:' +SelBodegas, orientation: 'landscape'}],
        "ajax": "./api/v1//Reportes.php?ReporteBRESS=true&SelBodegas="+SelBodegas+'&FechIniBRESS='+DateIniBRESS+'&FechFinBRESS='+DateFinBRESS,
        columnDefs: [
            {className: "dt-center", targets: [0, 3, 4, 5, 6, 7, 8]}
        ],
        "columns": [
            { "data": "Código" },
            { "data": "Insumo" },
            { "data": "StrCaracteristicas" },
            { "data": "Presentación" },
            { "data": "Unidad" },
            { "data": "Reajuste" },
            { "data": "Salidas" },
            { "data": "PrecioUni" },
            { "data": "Referencia" }
        ]
    })
}