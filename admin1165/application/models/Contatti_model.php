<?php

	class Contatti_model extends CI_Model {
		
		public function __construct () {
			$this->load->database();
		}
		
		public function getContatti () {
		
			$query=$this->db->order_by('nome')
				->get('contatti');
			return $query->result();
		
		}
		
		public function getContattoByID ($id) {
			
			$query=$this->db->where('id',$id)
				->get('contatti');
			return $query->row();
			
		}
		
		public function getContattoByEmail ($email) {
			
			$query=$this->db->where('email',$email)
				->get('contatti');
			return $query->row();
			
		}
		
		public function removeContatto ($id) {
			
			$query=$this->db->where('id', $id)
				->delete('contatti');
			return $this->db->affected_rows();
			
		}
		
		public function checkEmail ($email) {
			
			$query=$this->db->select('count(*)')
				->where('email',$email)
				->or_where('email_tmp',$email)
				->get_compiled_select('contatti');
				
			return $query;
			
		}
		
		
		
		/*
		
		public function updateNews ($data,$id) {

			$query=$this->db->where('id', $id)
				->update('news', $data);
			return $this->db->affected_rows();
			
		}
		
		public function writeNews ($data) {

			$query=$this->db->insert('news',$data);
			return $this->db->insert_id();
			
		}
	
	
		*/
	}
	
