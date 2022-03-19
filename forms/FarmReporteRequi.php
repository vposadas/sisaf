<div class="container-fluid" style="margin-top: 50px">
    <div id="farmRepoRequisIngre" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">Reportes Requisiciones Ingresadas</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#farmRepoRequisIngre').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body">

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="TipoBusqueda">Tipo de Búsqueda</label>
                    </div>
                    <select class="form-control" id="TipoBusqueda" onchange="Tipo_Busqueda()">
                        <option value="0">Seleccione</option>
                        <option value="RF">Rango de Fechas</option>
                        <option value="ND">Número de Documento</option>
                    </select>
                </div>
            </div>

            <div class="row" id="RangodeFechas" hidden>

                    <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Fecha inicio</span>
                        </div>
                        <input type="date" class="form-control" id="inputFecIniRequi">
                    </div>

                    <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Fecha fin</span>
                        </div>
                        <input type="date" class="form-control" id="inputFecFinRequi">
                    </div>

                    <button class="btn btn-success btn-sm" id="btnEjecutarRepRequi" onclick="fn_reporteRequisFarma()">Generar Reporte</button>
            </div>

            <div class="row" id="NumDocumento" hidden>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Número de Documento</span>
                    </div>
                    <input type="number" class="form-control" id="inputNumRequ">
                </div>
                    <button class="btn btn-success btn-sm" id="btnBusDocumento" onclick="fn_RepNumReq()">Buscar Documento</button>
            </div>



            <div class="row">
                <div class="col-sm-12 margen">
                    <table class="table" id="tblRepRequiFarm">
                        <thead class="stylish-color white-text">
                        <tr>
                            <th scope="col" width="400px">No. de Requisicion</th>
                            <th scope="col" width="400px">Fecha Documento</th>
                            <th scope="col" width="400px">Servicio solicitante</th>
                            <th scope="col" width="400px">Nombre de quien recibe</th>
                            <th scope="col" width="400px">Nombre de quien Entrega</th>
                            <th scope="col" width="400px" >Imprimir</th>

                        </tr>
                        </thead>
                        <tbody id="tbodyRequiFarm">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal dobleClic-->

<!-- Modal Nuevo Reg -->
<div class="modal" id="modalBusquedaInsumo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow-y: scroll">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center white-text green-grad">
                <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Búsqueda de insumos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btnCerrar"
                onclick="$('#modalBusquedaInsumo').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-content" style="overflow-scrolling: auto" >
                <div class="row">
                    <div class="col-sm-12">
                        <table id="tblMostrarInsumosRequi" class="table table-sm table-hover w3-border" width="98%">
                            <thead class="stylish-color text-white text-center">
                                <tr>
                                    <th class="">Renglon</th>
                                    <th class="">Código de Insumo</th>
                                    <th class="">Nombre del Insumo</th>
                                    <th class="">Presentacion Insumo</th>
                                    <th class="">Cantidad y Unidad</th>
                                    <th class="">Cantidad Despachada</th>
                                    <th class="">No. de Lote</th>
                                    <th class="">Fecha de Vencimiento</th>
                                    <th class="">Precio Unitario</th>
                                    <th class="">No. de Kardex</th>
                                    <th class="">Farmacia</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fin Modal-->

<script src="./js/js_FarmReporteRequi.js"></script>
