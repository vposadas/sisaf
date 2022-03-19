<div id="InventarioFarmacia" class="card" style="margin-top: 50px">
   <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">INVENTARIO FARMACIA</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#InventarioFarmacia').fadeOut();">
        <span aria-hidden="true" class="text-white">&times;</span>
    </button>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table id="tbInventarioMostrar" class="table table-sm table-hover w3-border" width="99%">
                <thead class="primary-color text-white">
                    <tr>
                        <th>Renglón</th>
                        <th>Código</th>
                        <th>Insumo</th>
                        <th>Características</th>
                        <th>Presentación</th>
                        <th>Unidad</th>
                        <th>Kardex</th>
                        <th>No. de Lote</th>
                        <th>Fecha de Vencimiento</th>
                        <th>Existencia</th>
                        <th>Dif. Meses</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<script src="./js/js_FarmInventario.js"></script>

<scrip src = "http://code.jquery.com/jquery-1.12.0.min"></scrip>
<scrip src="js/boostrap.min.js"></scrip>
<scrip src="js/jquery.datatimepicker.full.min.js"></scrip>
<script type="text/javascript" src="./js/js_FarmaciaRequsicion.js"></script>
<script type="text/javascript" src="./js/js_TableToExcel.js"></script>
<scrip src="js/app.js"></scrip>