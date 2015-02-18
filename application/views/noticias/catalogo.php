	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">Catalogo de Noticias <small>Hecho por Jonathan</small></h3>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					 <!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Tabla de noticias
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<a id="boton_nueva_noticia" class="btn green circle " data-toggle="modal" href="#modal_nueva_noticia">
											Nueva Noticia <i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<table class="table table-striped table-bordered table-hover" id="tabla_noticias">
								<thead>
									<tr>
										<th> ID	</th>
										<th> Titulo	</th>
										<th> Descripción	</th>
										<th> Fecha	</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($noticias as $noticia):  ?>
										<tr class="odd gradeX">
											<td>
												 <?php echo $noticia['id'] ?>
											</td>
											<td>
												<!-- <a href="mailto:shuxer@gmail.com"> -->
												<?php echo $noticia['titulo'] ?>
											</td>
											<td>
												 <?php echo $noticia['contenido'] ?>
											</td>
											<td>
												 <?php echo $noticia['fecha'] ?>
											</td>
										</tr>
								    <?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->

<!-- BEGIN VENTANAS MODALES -->
	<div class="modal fade" id="modal_nueva_noticia" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
						<h4 class="modal-title">Nueva Noticia</h4>
				</div>
				<div class="modal-body">
					<!-- BEGIN FORM-->
					<form action="<?php echo site_url('/noticias/crear/insertar') ?>" class="form-horizontal" id="formulario_nueva_noticia">
						<div class="form-body">
							<label class="control-label col-md-4">Titulo de la noticia</label>
							<div class="col-md-6">
								<div class="input-icon right"
									<input type="text" class="form-control" name="titulo" placeholder="Aqui va el titulo"/>
								</div>
							</div>
							<br>
							<label class="control-label col-md-4">Contenido de la noticia</label>
							<div class="col-md-6">
								<div class="input-icon right">
									<input type="text" class="form-control" name="contenido" placeholder="Escribe la noticia"/>
								</div>
							</div>
							<br>
							<label class="control-label col-md-4">Fecha</label>
							<div class="col-md-6">
								<div class="input-icon right">
									<input type="text" class="form-control" name="fecha" placeholder="Fecha de la noticia"/>
								</div>
							</div>
						</div>

					</form>
					<div class="clearfix"></div>
					<!-- END FORM-->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn blue">Guardar Noticia</button>
				</div>
			</div>
		</div>
	</div>
<!-- END VENTANAS MODALES -->