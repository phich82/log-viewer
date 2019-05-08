# Requirement:
	PHP >= 7.1

# Install composer
	- Reference to https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos

	- Open config.php file, find the line that it contains "$config['composer_autoload']" and change it to:
		$config['composer_autoload'] = FCPATH.'vendor/autoload.php';

# Install package for log viewer
	composer require seunmatt/codeigniter-log-viewer

# Create a controller with any name you want (for example LogViewerController.php) with following content:


# Create a route for viewing logs files
## Open 'application/config/routes.php' file, add following line:
	$route['logs'] = "LogViewerController/index";
	* Note: we can change the 'logs' path to any path we want

# Configuration

## In config.php, add more the following lines:
	// folder path for log files
	$config["clv_log_folder_path"] = APPPATH . "logs";

	// file pattern for matching all the log files in the log folder
	$config["clv_log_file_pattern"] = "log-*.php";
