<!--
 * @Created_by: Intellij IDEA
 * @User: Fernando Cardona
 * @Date:  26-Oct-21
 * @Time: 7:32 AM
 * @Version: 1.0
 -->

<div class="container-fluid" style="margin-top: 50px">
    <div id="farmRepSat" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">REPORTE MOVIMIENTOS</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#farmRepSat').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Fecha Inicio</span>
                        </div>
                        <input type="date" class="form-control" id="inputFecIniRequiSat">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Fecha fin</span>
                        </div>
                        <input type="date" class="form-control" id="inputFecFinRequiSat">
                    </div>
                </div>

                <div class="col-sm-4">
                    <button class="btn btn-success" id="btnEjecutarRepSat" onclick="fn_reporteTurno()">Buscar</button>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 margen">
                    <table class="table" id="tblRepSat">
                        <thead class="stylish-color white-text">
                        <tr>
                            <th scope="col" width="10px">Código</th>
                            <th scope="col" width="400px">Insumo</th>
                            <th scope="col" width="400px">Características</th>
                            <th scope="col" width="400px">Presentación</th>
                            <th scope="col" width="400px">Unidad</th>
                            <th scope="col" width="400px">Entradas</th>
                            <th scope="col" width="400px">Reajuste</th>
                            <th scope="col" width="400px">Salidas</th>
                            <th scope="col" width="400px">Existencia</th>
                            <th scope="col" width="400px">Precio Unitario</th>
                            <th scope="col" width="400px">Kardex</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyRepSat">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./js/FarmReportes.js"></script>
