<!--
 * @Created_by: Intellij IDEA
 * @User: Fernando Cardona
 * @Date:  19-Dic-21
 * @Time: 7:32 AM
 * @Version: 1.0
 -->

<div class="container-fluid" style="margin-top: 50px">
    <div id="FarmRepBress" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">REPORTE BRESS</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#FarmRepBress').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFechaInicioBRESS">Fecha Inicio</label>
                    </div>
                    <input type="date" class="form-control" id="inputFechaInicioBRESS" >
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFechaFinBRESS">Fecha Fin</label>
                    </div>
                    <input type="date" class="form-control" id="inputFechaFinBRESS" >
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="SelareaBRESS">Tipo Bodega</label>
                    </div>
                    <select class="form-control" id="SelareaBRESS" >
                        <option value="0">Seleccione Área</option>
                        <option value="1, 3">Medicamentos</option>
                        <option value="2, 4">Material Médico Quirúrginco</option>
                    </select>
                </div>
                <button class="btn btn-success btn-sm" id="btnGenerarBRESS" onclick="fn_GenBRESS()">Generar Reporte</button>
            </div>
            <div class="row">
                <div class="col-sm-12 margen">
                    <table class="table" id="tblRepBRESS">
                        <thead class="stylish-color white-text">
                        <tr>
                            <th width="10px">Código</th>
                            <th width="300px">Insumo</th>
                            <th width="700px">Características</th>
                            <th width="300px">Presentación</th>
                            <th width="300px">Unidad</th>
                            <th width="200px">Reajuste</th>
                            <th width="200px">Salidas</th>
                            <th width="200px">Precio Unitario</th>
                            <th width="400px">Referencia</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyRepBRESS">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./js/FarmReportes.js"></script>
