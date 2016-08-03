<?php plantilla::iniciar();?>



<section id="content" class="wrap">
	<div class="container">
		<div class="row">
			<form action="#" method="POST" class="col-sm-6 col-md-8 col-sm-offset-3 col-md-offset-2" >
				<div class="panel panel-primary">
					<div class="panel-heading text-center"><h2><i class="fa fa-user"></i>Control de Usuario</h2></div>
					<div class="panel-body">
						<div class="form-group col-md-6">
                        <label for="name">ID ROl</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="specialty"><i class="fa fa-user"></i></span>
                            <select   name="ID_ROL" id="specialty" data-val="true" class="form-control">
                                <option selected="selected">SELECCIONAR</option>
                                <option value="ID_EMPRESA" >ID EMPRESA</option>
                                <option value="ID_CANDIDATO">ID CANDIDATO</option>

                            </select>
                        </div>
                        </div> <!--rol -->

						<div class="col-sm-12">

						</div>

						 <div class="form-group col-md-6">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user-times"></i></span>
                            <label for="DESCRIPCION">RAZON</label>
                            <textarea class="form-control" rows="5" name="RAZON" ></textarea>
                        </div>
                    </div> <!-- /RAZON-->

					

						<div id="btn-default-page">
							<input type="submit" class="btn btn-primary btn-lg col-sm-12" value="Guardar Cambios">
						</div>
					</div> <!-- .panel-body -->
				</div> <!-- .panel -->
			</form>
		</div> <!-- .row -->
	</div> <!-- .container -->
</section><!-- #content -->
