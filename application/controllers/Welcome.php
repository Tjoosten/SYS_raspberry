<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller {

		function __construct() {
				parent::__construct();
		}

		public function index() {
			$data = [
					'title' => 'C&C Rapsberry Pi',
				];

			$this->load->view('');
			$this->load->view('');
			$this->load->view('');
			$this->load->view('');
		}
	}
