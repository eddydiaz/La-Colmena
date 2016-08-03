<?php plantilla::iniciar();?>

           

                    <section id="content" class="wrap">
                        <div class="container">
                            <div class="row">
                                <form action="<?php echo base_url()?>Administrador/registarArea" method="POST" class="col-sm-6 col-md-8 col-sm-offset-3 col-md-offset-2" >
                                    <div class="panel panel-primary">
                                        <div class="panel-heading text-center"><h2><i class="fa fa-graduation-cap fa-4x fa-reg"></i> Agregar Area</h2></div>
                                        <div class="panel-body">
                                           <div class="form-group col-md-6">
                                            <label for="ID_AREA">   ID AREA</label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="drname"><i class="fa fa-user"></i></span>
                                                <input type="number" class="form-control" name="ID_AREA" id="name" title="Automático" placeholder="ID AREA" aria-describedby="drname" disabled>
                                            </div>
                                        </div> <!-- /ID -->

                                        <div class="col-sm-12">
                                            
                                        </div>

                                        <!-- Nombre -->
                                        <div class="form-group col-md-6">
                                            <label for="name">NOMBRE</label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="drlastname"><i class="fa fa-user"></i></span>
                                                <input type="text" class="form-control" name="NOMBRE" id="NOMBRE" placeholder="Nombre" aria-describedby="drlastname" title="Ingrese el nombre del Area" required >
                                            </div>
                                        </div> <!-- /Nombre -->
                                        
                                        <div id="btn-default-page">
                                            <input type="submit" class="btn btn-primary btn-lg col-sm-12" value="Registrar Area">
                                        </div>
                                    </div> <!-- .panel-body -->
                                </div> <!-- .panel -->
                            </form>
                        </div> <!-- .row -->
                    </div> <!-- .container -->
                </section><!-- #content -->

            
