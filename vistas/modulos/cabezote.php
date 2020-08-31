 <header class="main-header">

     <!--=====================================
	LOGOTIPO
	======================================-->
     <a href="inicio" class="logo">

         <!-- logo mini -->
         <span class="logo-mini">

             <img src="vistas/img/plantilla/g-minis.jpg" class="img-responsive" style="padding:10px">

         </span>

         <!-- logo normal -->

         <span class="logo-lg">

             <img src="vistas/img/plantilla/gipp.PNG" class="img-responsive" style="padding:10px 0px">         

         </span>

     </a>

     <!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
     <nav class="navbar navbar-static-top" role="navigation">

         <!-- Botón de navegación -->

         <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

             <span class="sr-only">Toggle navigation</span>

         </a>

         <!-- perfil de usuario -->

         <div class="navbar-custom-menu">

             <ul class="nav navbar-nav">

                 <li class="dropdown user user-menu">

                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                         <img src="vistas/img/usuarios/default/anonymous.png" class="user-image">

                         <span class="hidden-xs">Usuario Administrador</span>

                     </a>

                     <!-- Dropdown-toggle -->

                     <ul class="dropdown-menu">

                         <li class="user-body">

                             <div class="pull-left">

                                 <button class="btn btn-primary" data-toggle="modal" data-target="#modalDocente">

                                     Perfil docente

                                 </button>

                             </div>

                             <div class="pull-right">

                                 <a href="salir" class="btn btn-default btn-flat">Salir</a>


                             </div>

                         </li>

                     </ul>

                 </li>

             </ul>

         </div>

     </nav>

 </header>


 <!--=====================================
MODAL AGREGAR ACTIVIDAD SOLA
======================================-->
 <div id="modalDocente" class="modal fade" role="dialog">

     <div class="modal-dialog">

         <!-- Modal content-->
         <div class="modal-content">

             <div class="modal-header" style="background:#001F3F; color:white">

                 <button type="button" class="close" data-dismiss="modal">&times;</button>

                 <h4 class="modal-title">Mi perfil como docente</h4>

             </div>

             <div class="modal-body">

                 <div class="box-body">

                     <div class="form-group">

                         <h2>1.- Datos personales</h2>

                         <div class="input-group">

                             <span class="input-group-addon"><label
                                     class="col-sm-2 control-label">Filicación</label></span>

                             <input type="text" class="form-control input-lg" name="filiacion" disabled>

                         </div>

                     </div>

                     <div class="form-group">

                         <div class="input-group">

                             <span class="input-group-addon"><label class="col-sm-2 control-label">Nombre(s) del
                                     docente</label></span>

                             <input type="text" class="form-control input-lg" name="nombredocente" disabled>

                         </div>

                     </div>

                     <div class="form-group">

                         <div class="input-group">

                             <span class="input-group-addon"><label class="col-sm-2 control-label">Apellido
                                     paterno</label></span>

                             <input type="text" class="form-control input-lg" name="ap" disabled>

                         </div>

                     </div>

                     <div class="form-group">

                         <div class="input-group">

                             <span class="input-group-addon"><label class="col-sm-2 control-label">Apellido
                                     materno</label></span>

                             <input type="text" class="form-control input-lg" name="am" disabled>

                         </div>

                     </div>

                     <div class="form-group">

                         <div class="input-group">

                             <span class="input-group-addon"><i class="fa fa-home"></i></span>

                             <input type="text" class="form-control input-lg" name="domiciliodocente"
                                 placeholder="Domicilio" required>

                         </div>

                     </div>


                     <div class="form-group">

                         <div class="input-group">

                             <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span>

                             <input type="tel" class="form-control input-lg" name="telefonodocente"
                                 placeholder="Teléfono celular" required>

                         </div>

                     </div>

                     <div class="form-group">

                         <div class="input-group">

                             <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                             <input type="email" class="form-control input-lg" name="correodocente"
                                 placeholder="Correo electronico" required>

                         </div>

                     </div>

                     <div class="form-group">

                         <div class="input-group">

                             <span class="input-group-addon"><i class="fa  fa-trophy"></i></span>

                             <input type="text" class="form-control input-lg" name="preparaciondocente"
                                 placeholder="Preparación docente" required>

                         </div>

                     </div>

                     <div class="row">

                         <div class="col-xs-6">
                             <div class="form-group">
                                 <label for="exampleInputFile">Sube una imagen de tu rostro</label>
                                 <input type="file" id="exampleInputFile">

                                 <p class="help-block">No mayor a 20 MB.</p>
                             </div>
                         </div>

                     </div>

                     <div class="form-group">

                         <h2>2.- Centro de trabajo</h2>

                     </div>

                     <div class="form-group">

                         <div class="input-group">

                             <span class="input-group-addon"><label class="col-sm-2 control-label">Nombre de supervisión
                                 </label></span>

                             <input type="text" class="form-control input-lg" name="nombresupervision" required>

                         </div>

                     </div>

                     <div class="form-group">

                         <div class="input-group">

                             <span class="input-group-addon"><label class="col-sm-2 control-label">Clave de supervisión
                                 </label></span>

                             <input type="text" class="form-control input-lg" name="clavesupervision" required>

                         </div>

                     </div>

                     <div class="form-group">

                         <div class="input-group">

                             <span class="input-group-addon"><label class="col-sm-2 control-label">Clave presupuestal
                                 </label></span>

                             <input type="text" class="form-control input-lg" name="clavepresupuestal" required>

                         </div>

                     </div>

                 </div>

             </div>

             <div class="modal-footer">

                 <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Cancelar</button>

                 <button type="submit" class="btn btn-primary">Guardar información</button>

             </div>

         </div>

     </div>

 </div>