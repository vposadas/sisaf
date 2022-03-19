<div id="vcontent" class="container-fluid" style="margin-top: 50px">
    <div id="InsumoEnt" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">INFORME COSTOS</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#InsumoEnt').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>


        <div class="card-body">
            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCodProducto">Fecha Inicio</label>
                    </div>
                    <input type="date" class="form-control" id="inputFechaInicio" >
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCodProducto">Fecha Fin</label>
                    </div>
                    <input type="date" class="form-control" id="inputFechaFin" >
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCodTipoBodega">Tipo Bodega</label>
                    </div>
                    <select class="form-control" id="SelTipoBodega" >

                    </select>
                    <input type="text" class="form-control" id="inputCodTipoBodega" hidden>
                </div>



                <div class="col-sm" style="text-align: left">
                    <button class="btn btn-success btn-sm"  id="" onclick="MostrarInformeCC()"> Mostrar
                        <i class="fas fa-plus-circle"></i>
                    </button>

                    <button class="btn btn-success btn-sm" id="btnExcelRep" hidden > descargar
                        <i class="fas fa-plus-circle"></i>
                    </button>


                </div>

                <table class="table table-bordered " id="tbInformeCentroCosto">
                    <thead>
                    <tr>
                        <th colspan="6" style="text-align: center">INFORME DE UNIDOSIS POR ESPECIALIDAD DE SERVICIO</th>
                    </tr>
                    <tr id="encFecha">
                        <th colspan="1" style="text-align: center"></th>
                        <th colspan="1" style="text-align: center">DEL: </th>
                        <th colspan="1" style="text-align: center" id="inicio"> </th>
                        <th colspan="1" style="text-align: center"> AL: </th>
                        <th colspan="1" style="text-align: center" id="fin"> </th>
                        <th colspan="1" style="text-align: center"> </th>


                    </tr>
                    <tr>
                        <th scope="col">ESPECIALIDAD</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">CANTIDAD</th>
                        <th scope="col">PRECIO UNITARIO</th>
                        <th scope="col">TOTAL</th>
                        <th scope="col">OBSERVACION</th>
                    </tr>
                    </thead>
                    <tbody id="tblbodyInformeCentroCosto">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--Modal buscar-->







    <script src="./js/js_FarmInformeCentroCostos.js"></script>