<div id="vcontent" class="container-fluid" style="margin-top: 50px">
<div id="InventarioGen" class="card" style="margin-top: 50px">
    <div class="modal-header text-center text-white green-grad">
        <h3 class="modal-title w-100 font-weight-bold">Inventario General</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#InventarioGen').fadeOut();"></button>
        <span aria-hidden="true" class="text-white">&times;</span>
    </div>

    <!--<form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar" id="buscarcodigoInsumo">
        <button class="btn btn-success my-2 my-sm-0" type="button" onclick="controlInventario();">Buscar prueba</button>
    </form>-->

    <div class="modal-body">
        <div class="row">
            <div class="col-sm-12">
                <table id="tbInventarioGeneral" class="table table-sm table-hover table-responsive" >
                    <thead class="primary-color text-white text-center" >
                    <tr>
                        <th>Renglón</th>
                        <th>Código de Insumo</th>
                        <th>Nombre</th>
                        <th>Característica</th>
                        <th>Presentación</th>
                        <th>Unidad</th>
                        <th>Kardex</th>
                        <th>Tipo Kardex</th>
                        <th>Almacén</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<script src="./js/js_AlmInventario.js"></script>