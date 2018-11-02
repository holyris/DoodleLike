<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Affichage extends CI_Controller {

	public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
				$this->load->library('session');
				$this->load->helper('cookie');

    }

	public function index() {
		$this->accueil();
	}

  public function accueil() {
		$this->header();
		$this->load->view('accueil');
	}

	public function header() {
		if(!isset($this->session->prenom)) {
			$this->load->view('header_unconnected');
		}
		else {
			$this->load->view('header_connected');
		}
	}



	public function createAcc() {
		$this->header();
		$this->load->view('createAcc');
	}

	public function connect() {
		$this->header();
		$this->load->view('connect');
	}

	public function interfaceSondage() {
		$this->header();
		$this->load->view('interfaceSondage');
	}

	public function menuSondage() {
		$this->header();
		$this->load->model('Sondage_model');
		$this->load->view('menuSondage');
	}

	public function detailSondageOwner() {

		$this->header();
		$this->load->model('Sondage_model');
		$this->load->model('Date_model');
		$this->load->view('detailSondageOwner');
	}

	public function detailSondageUser(){

		$this->header();
		$this->load->model('Sondage_model');
		$this->load->model('Date_model');
		$this->load->view('detailSondageUser');
	}

	public function createSondage() {
		$this->header();
		$this->load->view('createSondage');
	}

	public function createDate() {
		$this->header();
		$this->load->view('createDate');
	}
}
?>
