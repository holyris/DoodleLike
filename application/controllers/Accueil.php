<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

	public function index() {
		$this->accueil();
	}

	public function accueil() {
		$this->load->view('accueil');
		$this->load->helper('url');
	}

	public function createAcc() {
		$this->load->view('createAcc');
		$this->load->helper('url');
	}
}