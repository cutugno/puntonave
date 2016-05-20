<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function l() { // login
		
		if (empty($this->input->post())) show_404();
		
		$this->output->enable_profiler(FALSE);
		$email=$this->input->post('email');
		
		$ex="/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/";
		if (preg_match($ex,$email)){
			// controlla se email esiste in contatti
			$utente=$this->contatti_model->getContattoByEmail($email);
			if (null!=$utente) {
				$html="Login in corso...";
				$class="alert-success";				
				$login=1;
				$chiave=$utente->chiave;
			}else{
				$html="Login fallito. Account inesistente";
				$class="alert-danger";
				$login=0;
				$chiave="";
			}
		}else{
			$html="Formato email errato";
			$class="alert-danger";
			$login=0;
			$chiave="";
		}
		
		echo json_encode(array("html"=>$html,"class"=>$class,"login"=>$login,"chiave"=>$chiave));
		
	}
	
	public function r() { // registrazione
		
		//if (empty($this->input->post())) show_404();
		
		$this->output->enable_profiler(FALSE);
		$email=$this->input->post('email');
		
		// controllo se $email è già presente in database
			// no -> echo errore "email già in uso"
			// si -> inserimento record in db
			//		 v 1: concateno nome e cognome, poi scrivo in db, echo ok
			//		 v 2: concateno nome e cognome, genero key random_string('alnum',20), email diventa email_tmp, scrivo in db, invio email con link di conferma, echo msg di conferma
				
	}
	
	public function c() { // conferma registrazione
		
		$this->output->enable_profiler(FALSE);
		$chiave=$this->input->post('chiave');
		
		// controllo se chiave esiste in db
			// no -> echo errore "chiave non valida"
			// si -> recupero dati utente: controllo se email_tmp==""
				// si -> echo errore "chiave non valida. hai già confermato la registrazione"
				// no -> confermo indirizzo email: setto email con valore di email_tmp e email_tmp = "", echo ok
				
	}
	
}