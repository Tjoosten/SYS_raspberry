<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller {

		function __construct() {
				parent::__construct();
		}

		public function index() {
			$data = [
					'title' => 'Home',
				];

			$this->load->view('components/header', $data);
			$this->load->view('components/navbar');
			$this->load->view('index');
			$this->load->view('components/footer');
		}
	}
