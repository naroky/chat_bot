<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	function __construct()
	{
		parent::__construct();
		$header = array();
		$lastid = 0;
		if(!$this->session->userdata('login'))
		{
			redirect('Login');
			exit();
		}
		else
		{
			$this->header['session']=$this->session->userdata('login');
			$data['title'] = 'SMS Report Administation : Home';
			$data['project'] = 'SMS Report';

			//$this->load->view('header',$data);
			//$this->load->model('chart_model');
			//$this->config->load('time_config',TRUE);
		}

		$this->menu["menu_active"] = "Home";
		//$this->load->model("cp_model");
		//$this->load->helper('url');
		//$this->load->helper('form');
		//$this->load->library('email');
		//$this->load->library('pagination');
		//$this->load->helper('common');
	}

	public function index()
	{

		$this->load->view('header',$this->header);
		$this->load->view('home1');
		$this->load->view('footer');		
	}

	public function summaryreport()
	{
		$data["year"] = ($this->input->get("year") != "") ? $this->input->get("year") : date("Y");
		//$data["service_id"] = "2305930003"; 
		$this->load->model('summary_model');	
		$result =  $this->summary_model->summaryreport($data);
		$summary_result = $result->data; 

		//echo "=================/r/n<br/>";
		$data = "";
		foreach ($summary_result as $row) {
	var_dump($row);
	echo "<br/>.....<br/>";
		 	$bank = $row[1];
		 	$channel = $row[2];
		 	$delivery = $row[3];
		 	$month = $row[5];
		 	$value = $row[6];
			$data["result"][$bank][$channel][$delivery][$month] = $value;
	echo "<br/>==========<br/>";
		 } 
	 var_dump($data["result"]);	 
		$this->load->view('header',$this->header);
		$this->load->view('default/summaryreport',$data);
		$this->load->view('footer');			
	}
}
