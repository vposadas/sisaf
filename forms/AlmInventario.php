<div id="vcontent" class="container-fluid" style="margin-top: 50px">
<div id="Inventario" class="card" style="margin-top: 50px">
    <div class="modal-header text-center text-white green-grad">
        <h3 class="modal-title w-100 font-weight-bold">Inventario Detallado</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#Inventario').fadeOut();"></button>
        <span aria-hidden="true" class="text-white">&times;</span>
    </div>

    <div class="modal-body">
        <div class="row">
            <div class="col-sm-12">
                <table id="tbInventarioMostrar" class="table table-sm table-hover table-responsive" >
                    <thead class="primary-color text-white text-center" >
                    <tr>
                        <th>Renglon</th>
                        <th>Código de Insumo</th>
                        <th>Nombre</th>
                        <th class="col-sm-3" align="justify">Caracteristicas</th>
                        <th>Presentación</th>
                        <th>Unidad</th>
                        <th>Bodega</th>
                        <th>No. Kardex</th>
                        <th>Tipo Kardex</th>
                        <th>No.de Lote</th>
                        <th>Fecha Vencimiento</th>
                        <th>Existencia</th>
                        <th>Dif. Meses</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<script src="./js/js_AlmInventario.js"></script>