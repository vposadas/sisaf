<div class="container-fluid" style="margin-top: 50px">
    <div id="RepReajuste" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">Reporte Formularios Reajuste</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#RepReajuste').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Fecha Inicial</span>
                        </div>
                        <input type="date" class="form-control" id="inputDateInicial">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Fecha Final</span>
                        </div>
                        <input type="date" class="form-control" id="inputDateFinal">
                    </div>
                </div>

                <div class="col-sm-4">
                    <button class="btn btn-success" id="btnEjecutarRepRequi" onclick="fn_RepReajuste()">Reporte</button>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 margen">
                    <table class="table" id="tblReajustes">
                        <thead class="stylish-color white-text">
                        <tr>
                            <th>No. Documento</th>
                            <th>Fecha</th>
                            <th>Tipo Movimiento</th>
                            <th>Unidad Solicitante</th>
                            <th>Unidad Entrega</th>
                            <th>Nombre Solicitante</th>
                            <th>Nombre Entrega</th>
                            <th>Observaciones</th>
                            <th >Doc. Respaldo</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyIngreVarios">
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
                <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">INSUMOS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btnCerrar"
                onclick="$('#modalBusquedaInsumo').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-content" style="overflow-scrolling: auto" >
                <div class="row">
                    <div class="col-sm-12">
                        <table id="tblMostrarDetalleReajuste" class="table table-sm table-hover w3-border">
                            <thead class="stylish-color text-white text-center">
                                <tr>
                                    <th>Renglon</th>
                                    <th>Código de Insumo</th>
                                    <th>Nombre del Insumo</th>
                                    <th>Descripción</th>
                                    <th>Presentacion y Unidad</th>
                                    <th>Kardex</th>
                                    <th>Cant. Solicitada</th>
                                    <th>Cant. Entregada</th>
                                    <th>Prec. Unit.</th>
                                    <th>Total</th>
                                    <th>Lote</th>
                                    <th>Vencimiento.</th>
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

<script src="./js/js_FarmReajuste.js"></script>
