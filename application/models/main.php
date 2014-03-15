<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Main extends CI_Model {

		public function __construct() {
			parent::__construct();
		}

		public function main() {

		}

		public function findBerita() {
			$this->db->select()
					 ->from("master_berita")
					 ->order_by("tanggal",'desc')
					 ->limit(0,5);
			$result = $this->db->get();
			$hasil = "";
			if ($result != NULL) {
				$hasil = $result->result();
			}
			return $hasil;
		}
	}
?>