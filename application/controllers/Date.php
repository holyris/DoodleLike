<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Date extends CI_Controller {

	public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
				$this->load->library('session');
				$this->load->helper('cookie');

    }

  public function creer_date(){
    $char = '0123456789';
    $longueurMax = strlen($char);
    $id = '';
    for ($i = 0; $i < 15; $i++){
      $id .= $char[rand(0, $longueurMax -1)];
    }
    $jour = $this->input->post("jour");
    $heuredebut = $this->input->post("heure_debut");
    $heurefin = $this->input->post("heure_fin");
    $cle = $_GET['cle'];
    $login = $this->session->login;
    $this->load->model('Date_model');
    $sql = $this->Date_model->insert_new_date($id, $jour, $heuredebut, $heurefin, $cle);

    redirect('/Sondage/afficher_detailSondage?cle='.$cle);
  }

	public function ajouter_disponibilite(){

		$cle = $_GET['cle'];
		$login = $this->session->login;
		$this->load->model('Date_model');
		$data = $this->Date_model->afficher_date($cle);
		$checkbox=$this->input->post('checkbox');
		$checkbox=array_keys($checkbox);
		foreach ($checkbox as $stat){
			$char = '0123456789';
	    $longueurMax = strlen($char);
	    $id = '';
	    for ($i = 0; $i < 15; $i++){
	      $id .= $char[rand(0, $longueurMax -1)];
	    }
			$sql = $this->Date_model->insert_new_disponibilite($id, $data[$stat]->id, $login);

		}

		redirect('/Sondage/afficher_detailSondage?cle='.$cle);

	}

	public function delete_date(){
		$id = $_GET['id'];
		$cle = $_GET['cle'];
		$this->load->model('Date_model');
		$sql = $this->Date_model->delete_date($id);
		redirect('/Affichage/detailSondageOwner?cle='.$cle);
	}

	public function delete_disponibilite(){
		$id_date = $_GET['id_date'];
		$cle = $_GET['cle'];
		$this->load->model('Date_model');
		$this->Date_model->delete_disponibilite($id_date);
		redirect('/Affichage/detailSondageUser?cle='.$cle);
	}

}

?>
