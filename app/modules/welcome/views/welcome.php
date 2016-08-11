<div class="container">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="jumbotron text-center">
				<h1>Welcome to <em>CI_Lite</em>!</h1>
				<p>CI_Lite is a slimmed down version of <a href="https://github.com/EllisLab/CodeIgniter">Codeigniter <?php echo CI_VERSION; ?></a>.</p>
				<p><a href="<?php echo site_url('module'); ?>" class="btn btn-danger btn-lg">View Modules &raquo;</a></p>
			</div>
			<div class="text-center">
				<p>If you would like to edit this page you'll find it located at: <kbd>app/views/welcome_message.php</kbd></p>
				<p>The corresponding controller for this page is found at: <kbd>app/controllers/Welcome.php</kbd></p>
			</div>
		</div>
	</div>
</div>
<footer class="footer text-center">
	<div class="container">
		<p class="text-muted">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' :'' ?></p>
	</div>
</footer>