<div class="container-fluid" style="margin-top: 50px">
    <div id="farmRepoConsol" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">Reporte Consolidados Ingresados</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#farmRepoConsol').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Fecha inicio</span>
                        </div>
                        <input type="date" class="form-control" id="inputFecIniConsol">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Fecha fin</span>
                        </div>
                        <input type="date" class="form-control" id="inputFecFinConsol">
                    </div>
                </div>

                <div class="col-sm-4">
                    <button class="btn btn-success" id="btnEjecutarRepRequi" onclick="fn_reporteConsolFarma()">Ejecutar</button>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 margen">
                    <table class="table" id="tblConsolReporte">
                        <thead class="stylish-color white-text">
                        <tr>
                            <th scope="col" width="400px">No. de Consolidado</th>
                            <th scope="col" width="400px">Fecha Documento</th>
                            <th scope="col" width="400px">Servicio solicitante</th>
                            <th scope="col" width="400px">Nombre de quien recibe</th>
                            <th scope="col" width="400px">Nombre de quien Entrega</th>
                            <th scope="col" width="400px">Imprimir</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyConsolFarm">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal dobleClic-->

<!-- Modal Nuevo Reg -->
<div class="modal" id="modalBusquedaInsumoConsol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow-y: scroll">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center white-text green-grad">
                <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Búsqueda de insumos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btnCerrar"
                        onclick="$('#modalBusquedaInsumoConsol').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-content" style="overflow-scrolling: auto" >
                <div class="row" style="margin-top: 20px">
                    <div class="col-sm-12">
                        <table id="tblMostDetConsol" class="table table-sm table-hover w3-border" width="98%">
                            <thead class="stylish-color text-white text-center">
                            <tr>
                                <th class="">Renglon</th>
                                <th class="">Código de Insumo</th>
                                <th class="">Nombre y descripción</th>
                                <th class="">Presentacion Insumo</th>
                                <th class="">Cantidad y Unidad</th>
                                <th class="">No. de Lote</th>
                                <th class="">Fecha de Vencimiento</th>
                                <th class="">Subtotal</th>
                                <th class="">Devoluciones</th>
                                <th class="">Total</th>
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

<script src="./js/js_FarmReporteConsolidados.js"></script>
