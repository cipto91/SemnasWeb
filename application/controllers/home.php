<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Home extends CI_Controller {

		public function __construct() {
			parent::__construct();
		}

		public function index() {
			if ($this->main->findBerita() != "") {
				$data['news'] = $this->main->findBerita();
			} else {
				$data['news'] = "No Recent News Found...";
			}

			$data['content'] = "templates/home_content";
			$this->load->view('home',$data);
		}
	}
?>
