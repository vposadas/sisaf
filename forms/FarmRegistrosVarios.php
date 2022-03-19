<div id="vcontent" class="container" style="margin-top: 50px">
    <div id="modRegistrosVariosFarm" class="card">
        <div class="card-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">INGRESOS VARIOS
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="$('#modRegistrosVariosFarm').fadeOut();">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </h3>
        </div>

        <div class="card-body">
            <div class="row">

                <div class="input-group input-group-sm mb-sm-3 col-sm-5">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="sltVariosFrm">Tipo de Movimiento</label>
                    </div>
                    <select class="form-control" id="sltVariosFrm" onchange="MostrarDatosVariosFarm()">
                        <option Value="0"> SELECCIONE</option>
                        <option value="CAS">Cambio Almacén Salida</option>
                        <option value="CAE">Cambio Almacén Entrada</option>
                        <option value="OE">Oficio Entrada</option>
                        <option value="OS">Oficio Salida</option>
                    </select>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputnodocument">No. Documento</label>
                    </div>
                    <input type="text" class="form-control" id="inputnodocument">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputDateMovFarm">Fecha</label>
                    </div>
                    <input type="date" class="form-control" id="inputDateMovFarm">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputDescri">Descripción</label>
                    </div>
                    <input type="text" class="form-control" id="inputDescri">
                </div>
            </div>

            <div class="modal-footer" style="text-align: right; margin-top: 15px"></div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCodInsumoVarFarm">Codigo Insumo</label>
                    </div>
                    <input type="number" class="form-control" id="inputCodInsumoVarFarm" onchange="buscarInsumoGeneral()">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-5">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="SelCodUnicoFarm">Cantidad y unidad</label>
                    </div>

                    <select class="form-control" id="SelCodUnicoFarm" onchange="buscarInsumoEspecifico(this.value)">
                        <option value="0">Seleccione Unidad</option>
                    </select>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputKardexRFarm">Kardex</label>
                    </div>
                    <input type="text" class="form-control" id="inputKardexRFarm" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputRenglonReajFarm">Renglón</label>
                    </div>
                    <input type="number" class="form-control" id="inputRenglonReajFarm" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-8">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCaracVaFarm">Características</label>
                    </div>
                    <input type="text" class="form-control" id="inputCaracVaFarm" disabled>
                </div>


                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPresentVaFarm">Presentación</label>
                    </div>
                    <input type="text" class="form-control" id="inputPresentVaFarm" disabled>
                </div>
            </div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-5" id="LoteVencimientoSalidaFarm" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="selLoteVencimientoFarm" id="LotVencFarm">Lote y Vencimiento</label>
                    </div>
                    <select class="form-control" id="selLoteVencimientoFarm" onchange="cargarFormsVencimiento(this.value)" >
                        <option value="0">Seleccione Lote Y Fecha de Vencimiento</option>
                    </select>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="NodeLoteSalFarm" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNodeLoteSalFarm">No. de Lote</label>
                    </div>
                    <input type="text" class="form-control" id="inputNodeLoteSalFarm" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-4" id="VenciSalFarm" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputVenciSalFarm">Fecha de Vencimiento</label>
                    </div>
                    <input type="text" class="form-control" id="inputVenciSalFarm" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="PUnitSalFarm" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPUnitSalFarm">Precio Unitario</label>
                    </div>
                    <input type="text" class="form-control" id="inputPUnitSalFarm" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="CantExisEntrFarm" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCantExisEntrFarm">Cantidad Existente</label>
                    </div>
                    <input type="int" class="form-control" id="inputCantExisEntrFarm" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="CantExisSalFarm" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCantExisSalFarm">Cantidad Existente</label>
                    </div>
                    <input type="int" class="form-control" id="inputCantExisSalFarm" disabled>
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="CantSalidaFarm" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCantSalidaFarm">Cantidad de Salida</label>
                    </div>
                    <input type="number" class="form-control" id="inputCantSalidaFarm">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="CanEntradaFarm" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCantEntregadaFarm">Cantidad de Entrada</label>
                    </div>
                    <input type="number" class="form-control" id="inputCantEntregadaFarm">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="PrecioUnitEntrFarm" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputPrecioUnitEntrFarm">Precio Unitario</label>
                    </div>
                    <input type="text" class="form-control" id="inputPrecioUnitEntrFarm">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-3" id="NodeLoteEntrFarm" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNodeLoteEntrFarm">No. Lote</label>
                    </div>
                    <input type="text" class="form-control" id="inputNodeLoteEntrFarm">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-4" id="VenciEntrFarm" hidden>
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputVenciEntrFarm">Fecha de vencimiento</label>
                    </div>
                    <input type="date" class="form-control" id="inputVenciEntrFarm">
                </div>
            </div>

            <div class="modal-footer" style="text-align: right">
                <button class="btn btn-success btn-sm"  id="btnAñadirMovFarm" onclick="añadirTablaFarm()"> Añadir
                    <i class="fas fa-plus-circle" style="margin-left: 10px"></i></button>
                <button class="btn btn-info btn-sm" id="buscarDatos" onclick="buscarIngreVarios()">Buscar</button>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-striped  table-responsive table-dark" class="table table-condensed table-bordered table-hover" bgcolor="#D3D3D3" id="tblAlmReajuste">
                        <thead class="stylish-color-dark text-white">
                        <tr align="center" class="active">
                            <td width="300" hidden></td>
                            <td width="300" >Código</td>
                            <td width="425" >Insumo</td>
                            <td width="300">Presentacion</td>
                            <td width="300">Unidad</td>
                            <td width="156">Cantidad</td>
                            <td width="156">Precio Unitario</td>
                            <td width="156">No. Lote</td>
                            <td width="156">Vencimiento</td>
                            <td width="156">Kardex</td>
                            <td width="156">Eliminar</td>
                        </tr>
                        </thead>
                        <tbody id="tbodyIngreEgre" align="center">
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>

            <div class="modal-footer" style="text-align: right"></div>

            <div class="row">
                <div class="col-sm-12">
                    <form name="formulario-envia" id="formularioEnvArchivo" enctype="multipart/form-data" method="POST">
                        <div class="row">
                            <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputDocRespFarm">Adjuntar Documento de Respaldo</label>
                                </div>
                                <input type="file" class="form-control" id="inputDocResp" name="inputDocResp">
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-6" id="inputRecibeFarm">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNomRecibeFarm">Nombre Recibe</label>
                    </div>
                    <input type="text" class="form-control" id="inputNomRecibeFarm">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6" id="EncAlmacenFarm" >
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNomAlmacFarm">Nombre Solicita</label>
                    </div>
                    <input type="text" class="form-control" id="inputNomAlmacFarm">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputObserFarm">Observaciones</label>
                    </div>
                    <input type="text" class="form-control" id="inputObserFarm">
                </div>
            </div>

            <div class="modal-footer" style="text-align: right">

                <button class="btn btn-success btn-sm"  id="btnGuardarMovFarm" onclick="guardarModal();" disabled>Guardar Movimiento
                    <i class="fas fa-share-square"></i>
                </button>

            </div>
        </div>
    </div>
</div>

<!--Modal buscar-->
<div class="modal" id="BuscarIngreVarios" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="overflow-y: scroll">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center text-white green-grad">
                <h3 class="modal-title w-100 font-weight-bold">Buscar Insumo</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#BuscarIngreVarios').fadeOut();">
                    <span aria-hidden="true" class="text-white">x</span>
                </button>
            </div>
            <div class="modal-content">
                <div class="row">
                    <div class="col-SM-12">
                        <table id="tbBuscar" class="table table-sm table-hover w3-border" width="95%">
                            <thead class="primary-color text-white">
                            <tr>
                                <th class="">Renglón</th>
                                <th class="">Código</th>
                                <th class="">Nombre</th>
                                <th class="">Características</th>
                                <th class="">Presentación</th>
                                <th class="">Unidad</th>
                                <th class="">Kardex</th>
                                <th class="">Existencia</th>
                                <th class="">Precio Unitario</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin Modal buscar-->



<script type="text/javascript" src="./js/js_FarmRegistrosVarios.js"></script>