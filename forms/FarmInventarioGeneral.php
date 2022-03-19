<div class="container-fluid" style="margin-top: 50px">
    <div id="farmInventarioGeneral" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">INVENTARIO GENERAL</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#farmInventarioGeneral').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table" id="tblInventarioGeneral">
                        <thead class="stylish-color white-text">
                        <tr>
                                <th>Renglón</th>
                                <th>Código de Insumo</th>
                                <th>Nombre</th>
                                <th>Caracteristicas</th>
                                <th>Presentación</th>
                                <th>Unidad</th>
                                <th>Kardex</th>
                                <th>Existencia</th>
                                <th>Prec. Unitario</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyInventGen">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript" src="./js/js_FarmInventarioGeneral.js"></script>