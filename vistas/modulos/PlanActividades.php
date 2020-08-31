<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Banco de actividades

            <small>Crea tus propias actividades</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Actividades</li>

        </ol>

    </section>

    <section class="content">

        <div class="box">

            <div class="box-header with-border">

                <button class="btn btn-primary" data-toggle="modal" data-target="#modalActividad">

                    Crear nuevas actividades

                </button>

            </div>

            <div class="box-body">

                <table class="table table-bordered table-striped dt-responsive tablas">
                    <thead>
                        <tr>
                            <th style="width:10px">#</th>
                            <th>Nombre de la actividad</th>
                            <th>Actividades ha desarrollar</th>
                            <th>Propósito</th>
                            <th>Descripción</th>
                            <th>Variaciones</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $item = null;
                        $valor = null;

                        $actividades = ControladorActividades::ctrMostrarActividades($item,$valor);
                        foreach ($actividades as $key => $value) {
                           echo '<tr>
                                    <td>'.($key+1).'</td>
                                    <td>'.$value["actividad"].'</td>
                                    <td>'.$value["actividades"].'</td>
                                    <td>'.$value["proposito"].'</td>
                                    <td>'.$value["descripcion"].'</td>
                                    <td>'.$value["variacion"].'</td>
                                    <td> 
                                        <div class="btn-group">
                                            <button class="btn btn-warning btnEditarActividad" idActividad="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarActividad"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btnEliminarPlan" idActividad="'.$value["id"].'"><i class="fa fa-times"></i></button>
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
MODAL AGREGAR ACTIVIDAD
======================================-->
<div id="modalActividad" class="modal fade" role="dialog">

    <div class="modal-dialog">
        <form role="form" method="post" enctype="multipart/form-data">
        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header" style="background:#001F3F; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Crear actividad</h4>

            </div>

            <div class="modal-body">

                <div class="box-body">

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="text" class="form-control input-lg" name="nuevaActividad"
                                placeholder="Nombre de la actividad" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-university"></i></span>
                            <textarea class="form-control" rows="3" name="nuevasActividades" placeholder="Ingresar las actividades a desarrollar"
                                ></textarea>
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-th-large"></i></span>

                            <textarea class="form-control" rows="3" name="nuevosPropositos" placeholder="Ingresar propósito"
                                ></textarea>
                        </div>

                    </div>

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-th-large"></i></span>

                            <textarea class="form-control" rows="3" name="nuevaDescripcion" placeholder="Ingresar descripción"
                                ></textarea>

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-th-large"></i></span>

                            <textarea class="form-control" rows="3" name="nuevasVariaciones" placeholder="Ingresar Variaciones"
                                ></textarea>
                        </div>
                    </div>

                <div class="form-group">
                    <div class="panel">SUBIR FOTO</div>
                        <input type="file" class="nuevaFoto" name="nuevaFoto">
                        <p class="help-block">Peso Maximo de la foto 2MB</p>
                        <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbanail previsualizar" width="100px">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar actividad</button>
            </div>
            <?php 
                $crearActividad = new ControladorActividades();
                $crearActividad -> ctrCrearActividades();
            ?>
        </form>
        </div>
    </div>
</div>

<!--=====================================
MODAL EDITAR ACTIVIDAD
======================================-->
<div id="modalEditarActividad" class="modal fade" role="dialog">

    <div class="modal-dialog">
        <form role="form" method="post" enctype="multipart/form-data">
        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header" style="background:#001F3F; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Editar Actividad</h4>

            </div>

            <div class="modal-body">

                <div class="box-body">

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="text" class="form-control input-lg" name="editaractividad"
                                id="editaractividad" readonly="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-university"></i></span>
                            <textarea class="form-control" rows="3" name="editarActividades" id="editaractividades" readonly=""></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                            <textarea class="form-control" rows="3" name="editarPropositos" id="editarpropositos" readonly=""></textarea>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                            <textarea class="form-control" rows="3" name="editarDescripcion" id="editardescripcion" readonly=""></textarea>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                            <textarea class="form-control" rows="3" name="editarVariaciones" id="editarvariaciones" readonly=""></textarea>
                        </div>
                    </div>

                <div class="form-group">
                    <div class="panel">SUBIR FOTO</div>
                        <input type="file" class="nuevaFoto" name="editarFoto">
                        <p class="help-block">Peso Maximo de la foto 2MB</p>
                        <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbanail previsualizar" width="100px">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Modificar Actividad</button>
            </div>
           <?php 
                $editarActividad = new ControladorActividades();
                $editarActividad -> ctrEditarActividades();
            ?>
        </form>
        </div>
    </div>
</div>

  <?php 
     $borrarActividad = new ControladorActividades();
     $borrarActividad -> ctrBorrarActividad();
    ?>
