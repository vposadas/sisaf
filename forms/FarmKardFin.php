<!--
 * @Created_by: Intellij IDEA
 * @User: Fernando Cardona
 * @Date:  26-Nov-21
 * @Time: 9:55 AM
 * @Version: 1.0
 *-->


<div id="vcontent" class="container-fluid" style="margin-top: 50px">
<div id="KardexFinalizados" class="card" style="margin-top: 50px">
    <div class="modal-header text-center text-white green-grad">
        <h3 class="modal-title w-100 font-weight-bold">Kardex Finalizados</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#KardexFinalizados').fadeOut();"></button>
        <span aria-hidden="true" class="text-white">&times;</span>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-12">
                <table id="tblKardexFin" class="table table-sm table-hover" >
                    <thead class="primary-color text-white text-center" >
                    <tr>
                        <th>Renglón</th>
                        <th>Código de Insumo</th>
                        <th>Nombre</th>
                        <th>Característica</th>
                        <th>Presentación</th>
                        <th>Unidad</th>
                        <th>Kardex</th>
                        <th>Acción</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<script src="./js/js_KardFin.js"></script>