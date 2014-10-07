<div class="container">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="page-header"><h1>HMVC Modules List</h1></div>
			<p><a href="<?php echo site_url('welcome'); ?>" class="btn btn-default"><i class="glyphicon glyphicon-home"></i> Back home</a></p>
			<div class="row">
				<div class="col-sm-4">
				<?php foreach ($modules as $module) { ?>
					<div class="checkbox">
						<label>
							<input type="checkbox">
							<?php echo rtrim($module, '\\'); ?>
						</label>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
