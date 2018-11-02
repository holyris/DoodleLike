<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sondage extends CI_Controller {

	public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
				$this->load->library('session');
				$this->load->helper('cookie');

    }

	public function creer_sondage() {
	 $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	 $longueurMax = strlen($char);
	 $cle = '';
	 for ($i = 0; $i < 20; $i++){
		 $cle .= $char[rand(0, $longueurMax - 1)];
	 }
		$titre = $this->input->post("titre");
		$lieu = $this->input->post("lieu");
		$descri = $this->input->post("descri");
		$login = $this->session->login;
		$this->load->model('Sondage_model');
		$sql = $this->Sondage_model->insert_new_sondage($cle,$titre,$lieu,$descri,$login);

	  redirect('/Affichage/menuSondage');
	}

	public function afficher_detailSondage(){
		$cle = $_GET['cle'];
		$this->load->model('Sondage_model');
		$owner= $this->Sondage_model->check_owner($cle);
		$login = $this->session->login;
		if ($owner==$login){
			redirect('/Affichage/detailSondageOwner?cle='.$cle);
		} else {
			redirect('/Affichage/detailSondageUser?cle='.$cle);
		}
	}

	public function acces_sondage(){
			$cle = $this->input->post("cle");
			redirect('/Sondage/afficher_detailSondage?cle='.$cle);
	}

	public function delete_sondage(){
		$cle = $_GET['cle'];
		$this->load->model('Sondage_model');
		$sql = $this->Sondage_model->delete_sondage($cle);
		redirect('/Affichage/interfaceSondage');
	}
}

?>
