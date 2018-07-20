<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller {

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

	}

	public function index()
	{

		$this->load->view('header',$this->header);
		$this->load->view('home1');
		$this->load->view('footer');		
	}

	public function lists()
	{
		$this->load->view('header',$this->header);
		$this->load->view('question/lists');
		$this->load->view('footer');
	}


	public function api_lists()
	{
		$this->load->model('question_model');
		$data["result"] =  $this->question_model->lists();
		$this->load->view('question/api_lists',$data);

	}

	public function add()
	{
		$this->load->view('header',$this->header);
		$this->load->view('question/add');
		$this->load->view('footer');
	}

	public function save()
	{
		$data["question_name"] = $this->input->post("question_name");
		$data["tag"] = $this->input->post("tag");
		$this->load->model('question_model');
		$data["result"] = $this->question_model->save($data);		
	}

	public function del($id)
	{
		$this->load->model('question_model');
		$data["result"] = $this->question_model->delete($id);
	}

}
