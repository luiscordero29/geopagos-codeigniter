<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	<?php  $this->load->view('home/header'); ?>
 	<div class="container">
 		<div class="row">
 			<div class="col">
 				<div class="jumbotron jumbotron-fluid">
					<div class="container">
					    <h1 class="display-4">MODELADO DE CLASES - Figuras</h1>
					    <p class="lead">
					    	Desarrollar la o las clases necesarias que permita la creación de objetos que representen figuras
							geométricas dadas (cuadrado, triangulo, círculo) proveyendo un parámetro de entrada único que
							identifiqué el tipo de objeto esperado como retorno.
						</p>
					</div>
				</div>
    			<?php echo validation_errors('<div class="alert alert-danger" role="alert">','</div>'); ?>
				<?php echo form_open(''); ?> 					
				  	<div class="form-group row">
					    <label for="surface" class="col-sm-2 col-form-label">Superficie:</label>
					    <div class="col-sm-10">
					      	<input name="surface" type="text" class="form-control" id="surface" value="<?php echo set_value('surface'); ?>">
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="base" class="col-sm-2 col-form-label">Base:</label>
					    <div class="col-sm-10">
					      	<input name="base" type="text" class="form-control" id="base" value="<?php echo set_value('base'); ?>">
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="height" class="col-sm-2 col-form-label">Altura:</label>
					    <div class="col-sm-10">
					      	<input name="height" type="text" class="form-control" id="height" value="<?php echo set_value('height'); ?>">
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="diameter" class="col-sm-2 col-form-label">Diametro:</label>
					    <div class="col-sm-10">
					      	<input name="diameter" type="text" class="form-control" id="diameter" value="<?php echo set_value('diameter'); ?>">
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="shape" class="col-sm-2 col-form-label">Figura:</label>
					    <div class="col-sm-10">
					      	<select name="shape" class="form-control" id="shape">
							    <option value="">Seleccione...</option>
							    <option <?php if(set_value('shape') == 'square'): ?> selected <?php endif; ?> value="square">Cuadrado</option>
							    <option <?php if(set_value('shape') == 'triangle'): ?> selected <?php endif; ?> value="triangle">Triángulo</option>
							    <option <?php if(set_value('shape') == 'circle'): ?> selected <?php endif; ?> value="circle">Círculo</option>
							</select>
					    </div>
				  	</div>
				  	<div class="form-group row">
				  		<div class="col text-right">
				  			<button type="submit" class="btn btn-primary">Calcular</button>
				  		</div>
				  	</div>
				<?php echo form_close(); ?>
 			</div>
 		</div>
 	</div>
	<?php  $this->load->view('home/footer'); ?>