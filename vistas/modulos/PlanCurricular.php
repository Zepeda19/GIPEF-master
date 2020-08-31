<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Plan de actividades de fortalecimiento curricular

            <small>Crea tu propio Plan Curricular</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Actividades de Fortalecimiento Curricular</li>

        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box">

            <div class="box-header with-border">

                <button class="btn btn-primary" data-toggle="modal" data-target="#modalFortalecimiento">

                    Planear actividades

                </button>

            </div>

            <div class="box-body">

                <table class="table table-bordered table-striped dt-responsive tablas">

                    <thead>

                        <tr>

                            <th style="width:10px">#</th>
                            <th>Escuela</th>
                            <th>Clave escuela</th>
                            <th>Fecha a realizar</th>
                            <th>Nivel Educativo</th>
                            <th>Grado</th>
                            <th>Aprendizajes Esperados</th>
                            <th>Componente Pedagógico - Didáctico</th>
                            <th>Acciones</th>

                        </tr>

                    </thead>
                 <tbody>
                    <?php 
                        $item = null;
                        $valor = null;

                        $clases = ControladorPlanes::ctrMostrarPlanes($item,$valor);
                        foreach ($clases as $key => $value) {
                           echo '<tr>
                                    <td>'.($key+1).'</td>
                                    <td>'.$value["nomescuela"].'</td>
                                    <td>'.$value["clavescuela"].'</td>
                                    <td>'.$value["fecha"].'</td>
                                    <td>'.$value["nivel"].'</td>
                                    <td>'.$value["grado"].'</td>
                                    <td>'.$value["componente"].'</td>
                                    <td>'.$value["aprendizaje"].'</td>
                                    <td> 
                                        <div class="btn-group">
                                            <button class="btn btn-warning btnEditarCurricular" idCurricular="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarFortalecimiento"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btnEliminarCurricular" idCurricular="'.$value["id"].'"><i class="fa fa-times"></i></button>
                                        </div>
                                    </td>
                                 </tr>';
                        }
                    ?>
                    </tbody>

                </table>

            </div>

        </div>

    </section>
    
</div>
<!-- /.content-wrapper -->

<!--=====================================
MODAL AGREGAR ACTIVIDADES FORTALECIMIENTO
======================================-->
<div id="modalFortalecimiento" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <form role="form" method="post" enctype="multipart/form-data" name="form1" action="#">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header" style="background:#001F3F; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Planear actividades de Fortalecimiento</h4>

            </div>

            <div class="modal-body">

                <div class="box-body">

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-university"></i></span>

                            <input type="text" class="form-control input-lg" name="nuevoEscuela"
                                placeholder="Ingresar nombre de la escuela" required>

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-key"></i></span>

                            <input type="text" class="form-control input-lg" name="nuevoClaveEscuela"
                                placeholder="Ingresar clave de la escuela" required>

                        </div>

                    </div>

                        <div class="row">

                            <div class="col-xs-4">

                                <div class="form-group">

                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></i></span>

                                        <input type="text" class="form-control" name="nuevaFecha"
                                            placeholder="Fecha a realizar" data-inputmask="'alias': 'yyyy/mm/dd'"
                                            data-mask require>

                                    </div>

                                </div>


                            
                            </div><div class="col-xs-4">
                                <div class="form-group">
                                    <input id="Nivel" type="hidden" name="niv" value="">
                                    <select id="niv" class="form-control" name="nivel" onchange="cambia()">
                                        <option value="0">--Nivel Educativo--</option>
                                        <option value="1">Preescolar</option>
                                        <option value="2">Primaria</option>
                                        <option value="3">Secundaria general</option>
                                        <option value="4">Secundaria técnica</option>
                                        <option value="5">Telesecundaria</option>
                                    </select>
                                </div>
                            </div>

                         <div class="col-xs-4">
                            <div class="form-group">
                            <input id="Grado" type="hidden" name="grad" value="">
                             <select id="grrr" class="form-control" name="grado" onchange="cambia()">
                                  <option value="-">--Grado--</option>
                              </select>
                            </div>
                        </div>
                    </div>
                            
                    <div class="form-group">
                      <input id="Compete" type="hidden" name="compe" value="">  
                        <select id="competenci" class="form-control" name="competencia" onchange="cambia()">
                            <option value="-">--Componente Pedagógico - Didáctico--</option>
                        </select>
                    </div>
                            
                    <div class="form-group">
                        <input id="Aprendiza" type="hidden" name="aprend" value="">
                          <select id="aprendiz" class="form-control" name="apre" onchange="cambia()">
                             <option value="-">--Aprendizajes Esperados--</option>
                             <option value="-"></option>
                          </select>
                    </div> 

                        </div>

                    </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar actividades de Fortalecimiento</button>
        </div>

    <?php 
        $crearPlan = new ControladorPlanes();
        $crearPlan -> ctrCrearPlan();
    ?>
    </form>

        </div>

    </div>

</div>

<!--=====================================
MODAL EDITAR ACTIVIDADES FORTALECIMIENTO
======================================-->
<div id="modalEditarFortalecimiento" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <form role="form" method="post" enctype="multipart/form-data" name="form2" action="#">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header" style="background:#001F3F; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Editar actividades de Fortalecimiento</h4>

            </div>

            <div class="modal-body">

                <div class="box-body">

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-university"></i></span>
                            <input type="text" class="form-control input-lg" name="editarescuela"
                               id="editarescuela" readonly="">
                        </div>

                    </div>

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-key"></i></span>

                            <input type="text" class="form-control input-lg" name="editarclave"
                                id="editarclave" readonly="">

                        </div>

                    </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></i></span>
                                        <input type="text" class="form-control" name="editarfecha"
                                            id="editarfecha" data-inputmask="'alias': 'yyyy/mm/dd'"
                                            data-mask readonly="">
                                    </div>

                                </div>


                            </div><div class="col-xs-4">
                                <div class="form-group">
                                    <input id="Nivel" type="hidden" name="niv" value="">
                                    <select id="niv" class="form-control" name="editnivel">
                                        <option value="" id="editnivel"></option>
                                    </select>
                                </div>
                            </div>

                         <div class="col-xs-4">
                            <div class="form-group">
                            <input id="Grado" type="hidden" name="grad" value="">
                             <select class="form-control" name="editgrado">
                                    <option value="" id="editgrado"></option>
                             </select>
                            </div>
                        </div>
                    </div>
                            
                    <div class="form-group">
                      <input id="Compete" type="hidden" name="compe" value="">  
                        <select class="form-control" name="editcompetencia">
                            <option value="" id="editcompetencia"></option>
                        </select>
                    </div>
                            
                    <div class="form-group">
                        <input id="Aprendiza" type="hidden" name="aprend" value="">
                          <select class="form-control" name="editapre">
                              <option value="" id="editapre"></option>
                          </select>
                    </div> 
                </div>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar actividades de Fortalecimiento</button>
        </div>
        <?php 
            $editarClase = new ControladorPlanes();
            $editarClase -> ctrEditarPlan();
          ?>
    </form>
        </div>
    </div>
</div>

    <?php 
        $borrarPlan = new ControladorPlanes();
        $borrarPlan -> ctrBorrarPlan();
    ?>