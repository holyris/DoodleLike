<?php

class User_model extends CI_Model{


    /*public function insert_new_user($nom,$prenom,$email,$login,$password){
        $this->load->database();

        $sql = "Insert into User(nom, prenom, email, login, password) values ('".$nom."','".$prenom."','".$email."','".$login."','".$password."')";

        $query = $this->db->query($sql);
        return $query;

    }*/

    public function insert_new_user($nom,$prenom,$email,$login,$password){
        $this->load->database();

        $test = $this->db->query("SELECT login FROM User WHERE login='".$login."';");
        if ($test->num_rows() == 0) {
          $query = $this->db->query("Insert into User values ('".$nom."','".$prenom."','".$email."','".$login."','".$password."');");
          return $query;
        } else {
          return 10;
        }


    }

    public function check_connection($login){
        $this->load->database();
        $query = $this->db->query("SELECT password FROM User WHERE login='".$login."';");
        if ($query->num_rows() > 0) {
          $row = $query->row();
          return $row->password;
        } else {
          return 10;
        }
    }

  public function start_session($login){
      $this->load->database();
      $query = $this->db->query("SELECT prenom FROM User WHERE login='".$login."';");
      $row = $query->row();
      return $row->prenom;
    }
}
?>
