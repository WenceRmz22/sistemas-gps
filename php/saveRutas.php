<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="admin.php" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Agregar Cliente
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
								<label class="col-lg-3 control-label">Origen</label>
								<div class="col-lg-9"><input type="text" name="origeng" id="origeng" class="form-control" placeholder="Origen"></div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<label class="col-lg-3 control-label">Destino</label>
								<div class="col-lg-9"><input type="text" name="destinog" id="destinog" class="form-control" placeholder="Destino"></div>
							</div>
						</div>
						<div class="col-md-2">
							<button type="button" id="busca" class="btn btn-sm btn-success"><span class="fa fa-search-plus"></span>Buscar</button>
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div id="mapag" name="mapag">
						<img src="images/mapa.jpg">
					</div>
					<div class="line line-dashed line-lg pull-in"></div>

					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="button" id="save" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i>Guardar</button>
							<a href="admin.php?m=clientes" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>