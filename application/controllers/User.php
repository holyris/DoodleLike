<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
				$this->load->library('session');
				$this->load->helper('cookie');

    }

	public function registration(){
	    $nom = $this->input->post("nom");
      $prenom = $this->input->post("prenom");
      $email = $this->input->post("email");
      $login = $this->input->post("login");
      $unsecure_password= $this->input->post("password");
	    $password = password_hash($unsecure_password,PASSWORD_DEFAULT);
    	$this->load->model('User_model');
      $err = $this->User_model->insert_new_user($nom, $prenom, $email, $login, $password);
			if ($err == 1){
				redirect('/Affichage/connect');
			} else {
				echo ('Ce login existe déjà.');
			}
  }

	public function checkConn() {

			$login = $this->input->post("login");
			$password = $this->input->post("password");
			$this->load->model('User_model');
			$hash = $this->User_model->check_connection($login);
			$testlogin = $this->db->affected_rows();

			if (password_verify($password, $hash)==true) {
								$this->start_session($login);
      } else if ($hash == 10) {
				echo 'Le login n\'existe pas.';
			} else {
        echo 'Le mot de passe ne correspond pas au login.';
      }
	}

	public function connect_form() {
		$this->form_validation->set_rules('login', 'login', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == FALSE){
            redirect('/Affichage/connect');
            echo "Veuillez remplir tous les champs";
        }else{
            $this->checkConn();
        }
	}

	public function start_session($login){
		if (!isset($_SESSION)){
			session_start();
		}
			$prenom = $this->User_model->start_session($login);
			$newdata = array('login'  => $login, 'prenom' => $prenom, 'logged_in' => TRUE);
			$this->session->set_userdata($newdata);
			redirect('/Affichage/interfaceSondage');
	}

	public function end_session() {
		session_unset();
		session_destroy();
		redirect('/Affichage/accueil');
	}
}

?>
