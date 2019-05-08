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
		var_dump($_SERVER['QUERY_STRING']);
		echo $this->logViewer->showLogs();
		return;
	}
}
