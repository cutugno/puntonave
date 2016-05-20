<?php

	class News_model extends CI_Model {
		
		public function __construct () {
			$this->load->database();
		}
		
		public function getNews () {
		
			$query=$this->db->order_by('news')
				->get('news');
			return $query->result();
		
		}
		
		public function getNewsByID ($id) {
			
			$query=$this->db->where('id',$id)
				->get('news');
			return $query->row();
			
		}
		
		public function removeNews ($id) {
			
			$query=$this->db->where('id', $id)
				->delete('news');
			return $this->db->affected_rows();
			
		}
		
		public function updateNews ($data,$id) {

			$query=$this->db->where('id', $id)
				->update('news', $data);
			return $this->db->affected_rows();
			
		}
		
		public function writeNews ($data) {

			$query=$this->db->insert('news',$data);
			return $this->db->insert_id();
			
		}
	
	}
	
