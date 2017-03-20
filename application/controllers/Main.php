<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('base_model');
	}

	public function index()
	{
		$list = $this->base_model->getList();
		$a = [];
		$b = [];
		$c = [];
		$d = [];
		$e = [];
		$f = [];
		foreach($list as $item){
			switch($item['column']){
				case 'a':
					$a[] = $item['word'];
				break; 
				case 'b':
					$b[] = $item['word'];
				break; 
				case 'c':
					$c[] = $item['word'];
				break; 
				case 'd':
					$d[] = $item['word'];
				break; 
				case 'e':
					$e[] = $item['word'];
				break; 
				case 'f':
					$f[] = $item['word'];
				break; 
			}
		}
		$data['a'] = $a;
		$data['b'] = $b;
		$data['c']	= $c;
		$data['d']	= $d;
		$data['e']	= $e;
		$data['f']	= $f;
		//print_r($data);die();
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer',$data);
	}

	public function addOptions(){
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('column', 'column', 'trim|required');
		$this->form_validation->set_rules('word', 'word', 'trim|required');
		if($this->form_validation->run()){

			$insert = array(
				"word"	=> $this->input->post('word'),			
				"column" => $this->input->post('column')
				);

			/*echo '<pre>';
			print_r($insert);
			echo '</pre>';
			die();*/

			if($this->base_model->addToList($insert)){
				$this->session->set_flashdata('option_registered', true);
				redirect($this->input->post('url'));
			}else{
				$this->session->set_flashdata('failed_to_register', true);
				redirect($this->input->post('url'));
			}

		}else{
			echo validation_errors(); die();
		}
	}

	public function about(){
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
}
