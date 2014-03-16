<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Home extends CI_Controller {

		public function __construct() {
			parent::__construct();
		}

		public function index() {
			if ($this->main_model->find_berita() != NULL) {
				$data['news'] = $this->main_model->find_berita();
			} else {
				$data['news'] = "No Recent News Found...";
			}

			$data['content'] = "templates/home_content";
			$this->load->view('home',$data);
		}

		public function latar_belakang() {
			if ($this->main_model->find_latar_belakang() != NULL) {
				$data['latar_belakang'] = $this->main_model->find_latar_belakang();
			} else {
				$data['latar_belakang'] = array('latar_belakang' => "No Data Found..");
			}
			$data['content'] = "templates/latar_belakang_content";
			$this->load->view('home',$data);
		}

		public function susunan_acara() {
			if ($this->main_model->find_susunan_acara() != NULL) {
				$data['susunan_acara'] = $this->main_model->find_susunan_acara();
			} else {
				$data['susunan_acara'] = array('susunan_acara' => "No Data Found..");
			}
			$data['content'] = "templates/susunan_acara_content";
			$this->load->view('home',$data);
		}

		public function daftar_peserta() {
			$data['form'] = $this->main_model->peserta_form();
			$data['content'] = "templates/pendaftaran_peserta";
			$this->load->view('home',$data);
		}

		public function save_peserta() {
			$nama = $this->input->post('txt_nama');
			$tanggal = date('Y-m-d');
			$asal_universitas = $this->input->post('txt_univ');
			$jurusan = $this->input->post('txt_jur');
			$email = $this->input->post('txt_email');
			$telp = $this->input->post('txt_telp');

			$data = array('tanggal'=>$tanggal, 'nama'=>$nama,'asal_universitas'=>$asal_universitas,
				'no_telp'=>$telp, 'email'=>$email);

			$save = $this->main_model->save_peserta($data);
			if ($save) {
				redirect("home/daftar_peserta");
			} else {

			}
		}
	}
?>
