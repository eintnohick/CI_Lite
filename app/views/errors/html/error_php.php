<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="alert alert-danger">
<h4>A PHP Error was encountered</h4>
<div>Severity: <?php echo $severity; ?></div>
<div>Message: <?php echo $message; ?></div>
<div>Filename: <?php echo $filepath; ?></div>
<div>Line Number: <?php echo $line; ?></div>
<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>
	<div>Backtrace:</div>
	<?php foreach (debug_backtrace() as $error): ?>
		<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>
			<div style="margin-left:20px">
				File: <?php echo $error['file'] ?><br />
				Line: <?php echo $error['line'] ?><br />
				Function: <?php echo $error['function'] ?>
			</div>
		<?php endif ?>
	<?php endforeach ?>
<?php endif ?>
</div>