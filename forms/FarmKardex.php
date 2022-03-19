<div id="vcontent" class="container-fluid" style="margin-top: 50px">
    <div id="InsumoEnt" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">KARDEX</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#InsumoEnt').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>


        <div class="card-body">
            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCodProducto">Codigo de Producto</label>
                    </div>
                    <input type="number" class="form-control" id="inputCodProducto" onchange="buscarInsumoGeneral()">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="SelCodUnico">Presentación Y Unidad</label>
                    </div>
                    <select class="form-control" id="SelCodUnico" onchange="buscarInsumoEspecifico(this.value)">
                        <option value="0">Seleccione Presentación</option>


                    </select>
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPresen">Presentacion</label>
                    </div>
                    <input type="text" class="form-control" id="inputPresen" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputRenPresupuestario">Reglón Presupuestario</label>
                    </div>
                    <input type="text" class="form-control" id="inputRenPresupuestario" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputKardexFarm">No. Kardex</label>
                    </div>
                    <input type="text" class="form-control" id="inputKardexFarm" disabled>
                </div>


            </div>

                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputNomProducto">Nombre del Producto</label>
                        </div>
                        <input type="text" class="form-control" id="inputNomProducto" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputDescripInsu">Descripción</label>
                        </div>
                        <input type="text" class="form-control" id="inputDescripInsu" disabled>
                    </div>
                </div>

            <div class="row">

                <div class="col-sm" style="text-align: left">
                    <button class="btn btn-success btn-sm"  id="" onclick="EntradaSalidaTb()"> Mostrar
                        <i class="fas fa-list-ol"></i>
                    </button>

                    <button type="button" class="btn btn-info btn-sm" onclick="buscarInsumoKardex()">Buscar
                        <i class="fas fa-search"></i>
                    </button>

                </div>
                <div class="col-sm" style="text-align: right">
                    <button class="btn btn-success btn-sm" onclick="imprimir($('#inputKardexFarm').val())">Imprimir
                        <i class="fas fa-print"></i>
                    </button>
                </div>

            <table class="table table-bordered table-responsive" id="tbkKardexFarmacia">
                 <thead>
                 <tr>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th colspan="3" style="text-align: center">Entrada</th>
                     <th colspan="3" style="text-align: center">Reajuste</th>
                     <th colspan="3" style="text-align: center">Salida</th>
                     <th colspan="3" style="text-align: center">Existencias</th>
                 </tr>
                 <tr>
                     <th scope="col">Fecha</th>
                     <th scope="col">Numero Referencia</th>
                     <th scope="col">Remitente/Destinatario</th>
                     <th scope="col">Unidad de Medida</th>
                     <th scope="col">Numero de Lote</th>
                     <th scope="col">Fecha de Vencimiento</th>
                     <th scope="col">Cantidad</th>
                     <th scope="col">Precio Unitario</th>
                     <th scope="col">Precio Total</th>
                     <th scope="col">Cantidad</th>
                     <th scope="col">Precio Unitario</th>
                     <th scope="col">Precio Total</th>
                     <th scope="col">Cantidad</th>
                     <th scope="col">Precio Unitario</th>
                     <th scope="col">Precio Total</th>
                     <th scope="col">Cantidad</th>
                     <th scope="col">Precio Unitario</th>
                     <th scope="col">Precio Total</th>
                 </tr>
                 </thead>
                 <tbody id="tblbodyKardexFarm">

          
                 </tr>
                 </tbody>
             </table>
        </div>
    </div>
</div>

    <!--Modal buscar-->

    <div class="modal" id="modBuscarInv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow-y: scroll">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="overflow-y: scroll">
                <div class="modal-header text-center text-white green-grad">
                    <h3 class="modal-title w-100 font-weight-bold">Buscar Insumo</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            onclick="fn_cerrarModalBuscarInv()">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <table id="tbBuscarInventario" class="table table-sm table-hover" width="99%">
                            <thead class="stylish-color text-white">
                            <tr>
                                <th class="">Código de Insumo</th>
                                <th class="">Nombre</th>
                                <th class="">Caracteristicas</th>
                                <th class="">Renglon</th>
                                <th class="">Kardex</th>
                                <th class="">Cantidad Existente</th>
                                <th class="">Presentación</th>
                                <th class="">Unidad</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--fin Modal buscar-->






<script src="./js/js_FarmMostrarKardex.js"></script>