# Requirement:
	PHP >= 7.1

# Install composer
	- Reference to https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos

	- Open config.php file, find the line that it contains "$config['composer_autoload']" and change it to:
		$config['composer_autoload'] = FCPATH.'vendor/autoload.php';

# Install package for log viewer
	composer require seunmatt/codeigniter-log-viewer

# Create a controller with any name you want with content:
## For example: LogViewerController.php:


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

# View logs
	- Access to website on browser, type the defined log view path (/logs)
	- Viewing log files via API calls:
	- Ref
  		+ /logs?api=list
		  	=> list all the log files available in the configured folder
		+ /logs?api=view&f=bG9nLTIwMTgtMDEtMTcucGhw
  			=> return the logs contained in the log file specified by the f parameter (f stands for file. It is the base64 encoded format of the log file name)
		+ /logs?api=delete&f=bG9nLTIwMTgtMDEtMTkucGhw
  			=> delete a single log file
		+ /logs?api=delete&f=all
  			=> delete all log files in the configured folder path.
	* Note: ref to https://github.com/SeunMatt/codeigniter-log-viewer
