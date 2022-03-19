$(document).ready(function () {
    buscarTipoBodega();

});


function MostrarInformeCC(){
    let idTipoBodega =  $('#inputCodTipoBodega').val();
    let fechainicio=  $('#inputFechaInicio').val();
    let fechafin=  $('#inputFechaFin').val();

   // console.log(idTipoBodega+'   id');
   // console.log(fechainicio+'   fi');
   // console.log(fechafin+'   ff');

    if(fechainicio==null || fechainicio==''|| fechainicio==undefined){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Campo Fecha inicio  está vacío',
            showConfirmButton: true,
        });
        return false;
    }

    if(fechafin==null || fechafin==''|| fechafin==undefined){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Campo Fecha Fin  está vacío',
            showConfirmButton: true,
        });
        return false;
    }
    if(idTipoBodega==null || idTipoBodega==''|| idTipoBodega==undefined ||idTipoBodega==0){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Campo seleccionar tipo bodega está vacío',
            showConfirmButton: true,
        });
        return false;
    }

    //console.log("Muestra_De_Kardex")
    $('#btnExcelRep').prop('hidden', false);
    $('#tbkKardexFarmacia').removeAttr('hidden');
    $('#tblbodyInformeCentroCosto').empty(); //limpia la tabla
    $('#inicio').empty(); //limpia
    $('#fin').empty(); //limpia

    $('#inicio').append(fechainicio);
    $('#fin').append(fechafin);


    $.ajax({
        url: './api/v1/FarmKardex.php?InfCentroCostos=true&fechaInicio='+fechainicio+'&fechaFin='+fechafin+'&idTipoBodega='+idTipoBodega,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",

        success: function (data) {
            var json = data.data;
            console.log(json)
            $(json).each(function (index, item) {

                FarmStrDescripci= json[index].FarmStrDescripci;
                Insumo= json[index].Insumo;
                Salidas= json[index].Salidas;
                FarmNumPreUnExist= json[index].FarmNumPreUnExist;
                Total= json[index].Total;

                $('#tblbodyInformeCentroCosto').append(
                    '<tr></tr><td scope="col">'+FarmStrDescripci+'</td>' +
                    '<td scope="col">'+Insumo+'</td>' +
                    '<td scope="col">'+Salidas+'</td>' +
                    '<td scope="col">'+FarmNumPreUnExist+'</td>' +
                    '<td scope="col table-active">'+Total+'</td>' );
            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos(EntradaKardex)" + data.responseText);
        }
    });
}//fin function TbEntradaSalida


$("#btnExcelRep").click(function (e) {
    $("#tbInformeCentroCosto").table2excel({
        name: "Hoja de datos",
        filename: "Reportes.xls", // do include extension
        preserveColors: true//mantener colores
    });
});



function buscarTipoBodega(){
    $('#SelTipoBodega').empty();
    $('#SelTipoBodega').append("<option value='0'>Seleccione Tipo Bodega</option>");
   $.ajax({
        url: './api/v1/FarmKardex.php?TipoBodega=true', //
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            $(json).each(function (index, item) {
                FarmStrTipoFarmacia = json[index].FarmStrTipoFarmacia;
                FarmNumStrTipBod = json[index].FarmNumStrTipBod;
                TipoBodega = json[index].TipoBodega;
                $('#SelTipoBodega').append('<option value="'+TipoBodega+'">'+ FarmStrTipoFarmacia+' '+ FarmNumStrTipBod+'</option>')
            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
        }
    });
}

$("#SelTipoBodega").change(function() {
    let idTipoBodega =document.getElementById('SelTipoBodega').value;

    $('#inputCodTipoBodega').val(idTipoBodega);
    //console.log(idTipoBodega+'fsdf')
});



