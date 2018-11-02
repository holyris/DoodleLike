<?php

class User_model extends CI_Model{


    public function insert_new_user($nom,$prenom,$email,$login,$password){
        $this->load->database();

        $sql = "Insert into User(nom, prenom, email, login, password) values ('".$nom."','".$prenom."','".$email."','".$login."','".$password."')";

        $query = $this->db->query($sql);
        return $query;

    }


    public function check_connection($login){
        $this->load->database();
        $query = $this->db->query("SELECT password FROM User WHERE login='".$login."';");
        $row = $query->row();
        return $row->password;

    }

    public function start_session($login){
      $this->load->database();
      $query = $this->db->query("SELECT prenom FROM User WHERE login='".$login."';");
      $row = $query->row();
      return $row->prenom;
    }
}
?>
