<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller {

 	function __construct(){ 
		parent:: __construct();
		$this->load->helper('form');
	    $this->load->helper('url');
	    $this->load->helper('html');
	    $this->load->database();
	    $this->load->library('form_validation');
		$this->load->driver('session');
		$this->load->model('Funcionarios');			 
	}

	public function index(){
		redirect(base_url('/funcionario/rut'), 'refresh');
	}

	public function rut($rut= ''){
		try {

			if (is_numeric($rut) && strlen($rut) <= 8 ) {

				$resu = $this->Funcionarios->datos_user($rut);
				$data['user'] = $resu;
				if ($resu) {
					$this->load->view('card',$data);
				}else{
					redirect('http://www.santodomingo.cl/');
				}
				

			}else{			 
				redirect('http://www.santodomingo.cl/');					 
			}

		} catch (Exception $e) {
			
		}
		 	
	}

}