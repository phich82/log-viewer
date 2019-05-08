<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogViewerController extends CI_Controller
{
	private $logViewer;

	public function __construct()
	{
		parent::__construct();

		$this->logViewer = new \CILogViewer\CILogViewer();
	}

	public function index($pathLogsFolder = '')
	{
		parse_str($_SERVER['QUERY_STRING'], $params);
		var_dump($params);
		echo $this->logViewer->showLogs();
		return;
	}
}
