<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogViewerController extends CI_Controller
{
	private $logViewer;

	public function __construct()
	{
		parent::__construct();

		$this->setPathToLogsFolder();
		$this->logViewer = new \CILogViewer\CILogViewer();
	}

	public function index($pathLogsFolder = '')
	{
		echo $this->logViewer->showLogs();
		return;
	}

	private function setPathToLogsFolder()
	{
		parse_str($_SERVER['QUERY_STRING'], $paramsQuery);

		if (!empty($paramsQuery['path'])) {
			$this->config->set_item('clv_log_folder_path', urldecode($paramsQuery['path']));
		}
	}
}
