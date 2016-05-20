<?php

	class Download_model extends CI_Model {
		
		public function __construct () {
			$this->load->database();
		}
		
		public function getDownloads () {
		
			$query=$this->db->order_by('link')
				->get('download');
			return $query->result();
		
		}
		
		public function getDownloadByID ($id) {
			
			$query=$this->db->where('id',$id)
				->get('download');
			return $query->row();
			
		}
		
		public function removeDownload ($id) {
			
			$query=$this->db->where('id', $id)
				->delete('download');
			return $this->db->affected_rows();
			
		}
		
		public function writeDownload ($data) {

			$query=$this->db->insert('download',$data);
			return $this->db->insert_id();
			
		}
	
	}
	
