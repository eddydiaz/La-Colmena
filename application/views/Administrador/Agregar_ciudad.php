<?php plantilla::iniciar();?>

                    <section id="content" class="wrap">
                        <div class="container">
                            <div class="row">
                                <form action="<?php echo base_url('Administrador/registrarCiudad') ?>" method="POST" class="col-sm-6 col-md-8 col-sm-offset-3 col-md-offset-2" >
                                    <div class="panel panel-primary">
                                        <div class="panel-heading text-center"><h2><i class="fa fa-map-marker fa-4x fa-reg"></i> Agregar Ciudad</h2></div>
                                        <div class="panel-body">
                                         <div class="form-group col-md-6">
                                            <label for="ID_AREA">ID CIUDAD</label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="drname"><i class="fa fa-map-marker"></i></span>
                                                <input type="number" class="form-control" name="ID_CIUDAD" id="name" placeholder="ID Ciudad" title="Automático" aria-describedby="drname" disabled>
                                            </div>
                                        </div> <!-- /ID -->

                                        <div class="col-sm-12">

                                        </div>

                                        <!-- Nombre -->
                                        <div class="form-group col-md-6">
                                            <label for="name">NOMBRE</label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="drlastname"><i class="fa fa-user"></i></span>
                                                <input type="text" class="form-control" name="NOMBRE" id="NOMBRE" placeholder="Nombre" aria-describedby="drlastname" required>
                                            </div>
                                        </div> <!-- /Nombre -->

                                        <div class="col-sm-12">
                                            
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label for="ID_PAIS">ID PAIS</label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="drname"><i class="fa fa-map-marker"></i></span>
                                                <select type="text" class="form-control" name="ID_PAIS" id="name" placeholder="ID PAIS" aria-describedby="drname" required>
                                                 
                                                 <?php
                                                       foreach ($PAISES as $PAIS) {
                                                           echo "<option value='{$PAIS->ID_PAIS}'> $PAIS->NOMBRE </option>";
                                                       }
                                                 ?>
                                                </select>
                                            </div>
                                        </div> <!-- /ID -->


                                        
                                        <div id="btn-default-page">
                                            <input type="submit" class="btn btn-primary btn-lg col-sm-12" value="Registrar Ciudad">
                                        </div>
                                    </div> <!-- .panel-body -->
                                </div> <!-- .panel -->
                            </form>
                        </div> <!-- .row -->
                    </div> <!-- .container -->
                </section><!-- #content -->
