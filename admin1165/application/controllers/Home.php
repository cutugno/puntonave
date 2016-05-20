<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		
		$this->output->enable_profiler(FALSE);
		
		// elenco download
		$elencodl=$this->download_model->getDownloads();
		// icona tipo download e url anteprima
		if (null!=$elencodl){
			foreach ($elencodl as $key=>$val) {
				if ($val->tipo==1) {
					$val->iconatipo="download";
					$val->urlanteprima=SITE.'/public/files/'.$val->link;
				}else{
					$val->iconatipo="new-window";
					$val->urlanteprima="http://".$val->link;
				}
			}
		}
		$data['elencodl']=$elencodl;
		
		// elenco notizie
		$data['elenconw']=$this->news_model->getNews();
		
		// elenco contatti
		$data['elencocon']=$this->contatti_model->getContatti();
		
		// echo operazioni precedenti
		$data['echomsgdl']=$this->session->userdata('echomsgdl');
		$data['echoalertdl']=$this->session->userdata('echoalertdl');
		$data['echomsgndl']=$this->session->userdata('echomsgndl');
		$data['echoalertndl']=$this->session->userdata('echoalertndl');
		$data['echomsgnle']=$this->session->userdata('echomsgnle');
		$data['echoalertnle']=$this->session->userdata('echoalertnle');
		$data['echomsgnw']=$this->session->userdata('echomsgnw');
		$data['echoalertnw']=$this->session->userdata('echoalertnw');
		$data['echomsgunw']=$this->session->userdata('echomsgunw');
		$data['echoalertunw']=$this->session->userdata('echoalertunw');
		$data['echomsgnnw']=$this->session->userdata('echomsgnnw');
		$data['echoalertnnw']=$this->session->userdata('echoalertnnw');
		$data['echomsgcon']=$this->session->userdata('echomsgcon');
		$data['echoalertcon']=$this->session->userdata('echoalertcon');
		
		$this->load->view('home',$data);
				
	}
	
	// cancella download
	public function cancdl($id) {
		
		// controllo se download con $id esiste	
		$dlinfo=$this->download_model->getDownloadByID($id);
		if (null!=$dlinfo) {	
			if ($dlinfo->tipo==1) {	// elimino file solo se tipo download non è link esterno
				$filename=UPLOAD_PATH.$dlinfo->link;
				unlink($filename);
			}
			$this->download_model->removeDownload($id);
			log_message('debug', 'Download id '.$id.' eliminato.');
			$echomsg="Download eliminato";
			$echoalert="success";
		}else{
			log_message('debug', 'Tentativo eliminazione download id '.$id.' inesistente.');
			$echomsg="Download inesistente";
			$echoalert="danger";
		}	
		
		$this->session->set_flashdata('echomsgdl',$echomsg);
		$this->session->set_flashdata('echoalertdl',$echoalert);
		redirect(base_url("#anchor-gd"));	
	}
	
	// salva nuovo download e scrivi file
	public function nuovodl() {
		
		if (null==$this->input->post()) redirect(base_url());
		
		$config['upload_path']=UPLOAD_PATH;
		$config['max_size']=2048;
		$config['allowed_types']='*';

		// upload file
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('uploadfile')) {
			$error=$this->upload->display_errors();
			log_message('error', 'Errore nel caricamento nuovo download');
			$echomsg=$error;
			$echoalert="danger";
		}else{
			$data=$this->upload->data();			
			$dlinfo=array("link"=>$data['file_name'],"descrizione"=>$this->input->post('descrizione'),"tipo"=>1);
			log_message('debug', 'Caricato nuovo file per download. Info file: '.json_encode($dlinfo));
			// nuovo record in tbl download
			if ($idnuovodl=$this->download_model->writeDownload($dlinfo)) {
				log_message('debug', 'Aggiunto nuovo download id '.$idnuovodl);
				$echomsg="Nuovo download aggiunto";
				$echoalert="success";
			}else{
				$filename=UPLOAD_PATH.$data['file_name'];
				unlink($filename);
				log_message('error', 'Errore salvataggio nuovo download. File cancellato');
				$echomsg="Errore salvataggio nuovo download. File cancellato";
				$echoalert="danger";
			}
		}
		
		$this->session->set_flashdata('echomsgndl',$echomsg);
		$this->session->set_flashdata('echoalertndl',$echoalert);
		redirect(base_url("#anchor-nd"));	
	
	}
	
	// salva nuovo link esterno
	public function nuovole() {
			
		if (null==$this->input->post()) redirect(base_url());
		
		$leinfo=array("link"=>$this->input->post('linkext'),"descrizione"=>$this->input->post('descrizione'),"tipo"=>2);
		if ($idnuovole=$this->download_model->writeDownload($leinfo)) {
			log_message('debug', 'Aggiunto nuovo link esterno id '.$idnuovole);
			$echomsg="Nuovo link esterno aggiunto";
			$echoalert="success";
		}else{
			log_message('error', 'Errore salvataggio nuovo link esterno.');
			$echomsg="Errore salvataggio nuovo link esterno";
			$echoalert="danger";
		}
		
		$this->session->set_flashdata('echomsgnle',$echomsg);
		$this->session->set_flashdata('echoalertnle',$echoalert);
		redirect(base_url("#anchor-nl"));	
		
	}
	
	// cancella notizia
	public function cancnw($id) {
		
		// controlla se esiste notizia con $id
		$newsinfo=$this->news_model->getNewsByID($id);		
		if (null!=$newsinfo) {	
			$this->news_model->removeNews($id);
			log_message('debug', 'News id '.$id.' eliminata.');
			$echomsg="Notizia eliminata";
			$echoalert="success";
		}else{
			log_message('debug', 'Tentativo eliminazione news id '.$id.' inesistente.');
			$echomsg="Notizia inesistente";
			$echoalert="danger";
		}	
		
		$this->session->set_flashdata('echomsgnw',$echomsg);
		$this->session->set_flashdata('echoalertnw',$echoalert);
		redirect(base_url("#anchor-gn"));	
		
	}
	
	// aggiorna notizia
	public function updatenw($id) {
		
		if (null==$this->input->post()) redirect(base_url());
		
		$nwinfo=array("news"=>$this->input->post('notizia'));
		if (null!=$this->news_model->updateNews($nwinfo,$id)) {
			log_message('debug', 'Aggiornata news id '.$id);
			$echomsg="Notizia aggiornata";
			$echoalert="success";
		}
		
		$this->session->set_flashdata('echomsgunw',$echomsg);
		$this->session->set_flashdata('echoalertunw',$echoalert);
		redirect(base_url("#anchor-gn"));	
		
	}
	
	// scrivi nuova notizia
	public function nuovanw() {
		
		if (null==$this->input->post()) redirect(base_url());
		
		$nwinfo=array("news"=>$this->input->post('notizia'));
		if (null!=$this->news_model->writeNews($nwinfo)) {
			log_message('debug', 'Inserita news id '.$id);
			$echomsg="Nuova notizia inserita";
			$echoalert="success";
		}
		
		$this->session->set_flashdata('echomsgnnw',$echomsg);
		$this->session->set_flashdata('echoalertnnw',$echoalert);
		redirect(base_url("#anchor-nn"));	
	}
	
	// cancella contatto
	public function canccon($id) {
		
		// controlla se esiste notizia con $id
		$coninfo=$this->contatti_model->getContattoByID($id);		
		if (null!=$coninfo) {	
			$this->contatti_model->removeContatto($id);
			log_message('debug', 'Contatto id '.$id.' eliminata.');
			$echomsg="Contatto eliminato";
			$echoalert="success";
		}else{
			log_message('debug', 'Tentativo eliminazione contatto id '.$id.' inesistente.');
			$echomsg="Contatto inesistente";
			$echoalert="danger";
		}	
		
		$this->session->set_flashdata('echomsgcon',$echomsg);
		$this->session->set_flashdata('echoalertcon',$echoalert);
		redirect(base_url("#anchor-gc"));	
		
		
		
	}
}
