<?php
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

switch (ENVIRONMENT) {
	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);
	break;

	case 'testing':
	case 'production':
		error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
		ini_set('display_errors', 0);
	break;

	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'The app environment is not set correctly.';
		exit(1);
}

$system_path = 'system';
$app_folder = 'app';
$view_folder = '';

if (defined('STDIN')) {
	chdir(dirname(__FILE__));
}

if (($_temp = realpath($system_path)) !== FALSE) {
	$system_path = $_temp.'/';
} else {
	$system_path = rtrim($system_path, '/').'/';
}

if (!is_dir($system_path)) {
	header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
	echo 'Your system folder path does not appear to be set correctly. Please open the following file and correct this: '.pathinfo(__FILE__, PATHINFO_BASENAME);
	exit(3);
}

define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
define('BASEPATH', str_replace('\\', '/', $system_path));
define('FCPATH', str_replace(SELF, '', __FILE__));
define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));

if (is_dir($app_folder)) {
	if (($_temp = realpath($app_folder)) !== FALSE) {
		$app_folder = $_temp;
	}

	define('APPPATH', $app_folder.DIRECTORY_SEPARATOR);
} else {
	if (!is_dir(BASEPATH.$app_folder.DIRECTORY_SEPARATOR)) {
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your app folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3);
	}

	define('APPPATH', BASEPATH.$app_folder.DIRECTORY_SEPARATOR);
}

if (!is_dir($view_folder)) {
	if (!empty($view_folder) && is_dir(APPPATH.$view_folder.DIRECTORY_SEPARATOR)) {
		$view_folder = APPPATH.$view_folder;
	} elseif (!is_dir(APPPATH.'views'.DIRECTORY_SEPARATOR)) {
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your view folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3);
	} else {
		$view_folder = APPPATH.'views';
	}
}

if (($_temp = realpath($view_folder)) !== FALSE) {
	$view_folder = $_temp.DIRECTORY_SEPARATOR;
} else {
	$view_folder = rtrim($view_folder, '/\\').DIRECTORY_SEPARATOR;
}

define('VIEWPATH', $view_folder);

require_once BASEPATH.'core/CodeIgniter.php';

