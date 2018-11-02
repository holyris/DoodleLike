<?php

class Sondage_model extends CI_Model{

    public function sondage_name($login){
      $this->load->database();
      $query = $this->db->query("SELECT titre FROM Sondage WHERE login='".$login."';");
      //return $query->row();
      return $query->result();
    }

    public function insert_new_sondage($cle,$titre,$lieu,$descri,$login){
      $this->load->database();
      $sql = "Insert into Sondage(cle, titre, lieu, descri, login) values ('".$cle."','".$titre."','".$lieu."','".$descri."','".$login."')";

      $query = $this->db->query($sql);
      return $query;
    }
}
?>
