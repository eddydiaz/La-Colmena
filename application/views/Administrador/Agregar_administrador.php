<?php plantilla::iniciar();?>

<section id="content" class="wrap">
    <div class="container">
        <div class="row">
            <form action="<?php echo base_url()?>Administrador/registrarAdministrador" method="POST" class="col-sm-6 col-md-8 col-sm-offset-3 col-md-offset-2" >
                <div class="panel panel-primary">
                    <div class="panel-heading text-center"><h2><i class="fa fa-user"></i> Agregar Administrador</h2></div>
                    <div class="panel-body">
                     <div class="form-group col-md-6">
                        <label for="ID_ADMINISTRADOR">ID ADMINISTRADOR</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="drname"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="ID_ADMINISTRADOR" id="name" placeholder="ID Administrador" aria-describedby="drname" disabled >
                        </div>
                    </div> <!-- /ID -->
                    <!-- nombre -->
                    <div class="form-group col-md-6">
                        <label for="name">NOMBRE</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="drname"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="NOMBRE" id="name" placeholder="Nombre" aria-describedby="drname" required>
                        </div>
                    </div> <!-- /nombre -->
                    <!-- apellidos -->
                    <div class="form-group col-md-6">
                        <label for="name">APELLIDO/S</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="drlastname"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="APELLIDO" id="lastname" placeholder="Apellido/s" aria-describedby="drlastname" required>
                        </div>
                    </div> <!-- /apellidos -->

                    <div class="form-group col-md-6"> 
                        <label for="email">EMAIL</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="drEmail"><i class="fa fa-at"></i></span>
                            <input type="email" class="form-control"  name="EMAIL" id="email" placeholder="ejemplo@ejemplo.com" aria-describedby="drEmail" required="true">
                        </div>
                    </div> <!-- /correo -->
                    <div class="form-group col-md-6">
                        <label for="user">USERNAME</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="drUser"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="USERNAME" id="user" placeholder="Ususario" aria-describedby="drUser" required="true">
                        </div>
                    </div> <!-- /usuario -->
                    <div class="form-group col-md-6">
                        <label for="password">Clave</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="drPassw"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" name="PASS" id="password" placeholder="****" aria-describedby="drPassw" required="true">
                        </div>
                    </div> <!-- /clave -->
                    <div class="form-group col-md-6">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <label for="DESCRIPCION">DESCRIPCION</label>
                            <textarea class="form-control" rows="5" name="DESCRIPCION" ></textarea>
                        </div>
                    </div> <!-- /descripcion-->

                    <div class="form-group col-md-6">
                        <label for="photo">PORTAFOLIO</label>
                        <div class="input-group">
                            <span class="input-group-addon" ><i class="fa fa-camera"></i></span>
                            <input type="file" class="form-control" name="PORTAFOLIO" aria-describedby="drPhoto" required="true">
                        </div>
                    </div> <!-- /PORTAFOLIO-->
                    <div class="form-group col-md-6">
                        <label for="telephone">TELEFONO</label>
                        <div class="input-group">
                            <span class="input-group-addon" ><i class="fa fa-phone"></i></span>
                            <input type="telephone" class="form-control" name="TELEFONO" placeholder="Telefono" aria-describedby="drTelephone" required="true">
                        </div>
                    </div> <!-- /telefono -->

                    <!-- nombre -->
                    <div class="form-group col-md-6">
                        <label for="name">DIRECCION</label>
                        <div class="input-group">
                            <span class="input-group-addon" ><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="DIRECCION" placeholder="Direccion" aria-describedby="drname" required>
                        </div>
                    </div> <!-- /DIRECCION -->

                    <div class="form-group col-md-6">
                        <label for="name">ROl</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="specialty"><i class="fa fa-user"></i></span>
                            <select   name="ID_ROL" id="specialty" data-val="true" class="form-control">
                                <option value='1'>ADMINISTRADOR</option>
                                <option value='2'>CANDIDATO</option>
                                 <option value='3'>EMPRESA</option>

                            </select>
                        </div>
                    </div> <!-- especialidad -->

                    <div id="btn-default-page">
                        <input type="submit" class="btn btn-primary btn-lg col-sm-12" value="Registrar Administrador">
                    </div>
            </form>
                </div> <!-- .panel-body -->
            </div> <!-- .panel -->
        </form>
    </div> <!-- .row -->
</div> <!-- .container -->
</section><!-- #content -->




