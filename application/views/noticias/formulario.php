	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Formulario de noticia nueva <small>Jonathan</small>
			</h3>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
				 <!-- BEGIN VALIDATION STATES-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Validation States
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" class="form-horizontal">
								<div class="form-body">
									<h3 class="form-section">Basic validation States</h3>
									<div class="form-group has-warning">
										<label class="control-label col-md-3" for="inputWarning">Input with warning</label>
										<div class="col-md-4">
											<input type="text" class="form-control" id="inputWarning"/>
											<span class="help-block">
											Something may have gone wrong </span>
										</div>
									</div>
									<div class="form-group has-error">
										<label class="control-label col-md-3" for="inputError">Input with error</label>
										<div class="col-md-4">
											<input type="text" class="form-control" id="inputError"/>
											<span class="help-block">
											Please correct the error </span>
										</div>
									</div>
									<div class="form-group has-success">
										<label class="control-label col-md-3" for="inputSuccess">Input with success</label>
										<div class="col-md-4">
											<input type="text" class="form-control" id="inputSuccess"/>
										</div>
									</div>
									<h3 class="form-section">Validation States With Icons</h3>
									<div class="form-group has-warning">
										<label class="control-label col-md-3">Input with warning</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa fa-exclamation tooltips" data-original-title="please write a valid email"></i>
												<input type="text" class="form-control"/>
											</div>
										</div>
									</div>
									<div class="form-group has-error">
										<label class="control-label col-md-3">Input with error</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa fa-warning tooltips" data-original-title="please write a valid email"></i>
												<input type="text" class="form-control"/>
											</div>
										</div>
									</div>
									<div class="form-group has-success">
										<label class="control-label col-md-3">Input with success</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa fa-check tooltips" data-original-title="success input!"></i>
												<input type="text" class="form-control"/>
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
