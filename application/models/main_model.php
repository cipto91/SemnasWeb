<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Main_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
		}

		public function main() {
			
		}

		public function find_berita() {
			$this->db->select()
					 ->from("master_berita")
					 ->order_by("tanggal",'desc')
					 ->limit(5,0);
			$result = $this->db->get();
			if ($result->num_rows() > 0) {
				return $result->result();
			}
			return NULL;
		}
	}
?>