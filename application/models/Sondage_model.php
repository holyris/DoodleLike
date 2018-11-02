<?php

class Sondage_model extends CI_Model{

    public function sondage_name($login){
      $this->load->database();
      $query = $this->db->query("SELECT titre, cle FROM Sondage WHERE login='".$login."';");
      return $query->result();
    }

    public function insert_new_sondage($cle,$titre,$lieu,$descri,$login){
      $this->load->database();
      $sql = "INSERT INTO Sondage(cle, titre, lieu, descri, login) values ('".$cle."','".$titre."','".$lieu."','".$descri."','".$login."')";
      $query = $this->db->query($sql);
      return $query;
    }

    public function detail_sondage($cle) {
      $this->load->database();
      $query = $this->db->query("SELECT titre, lieu, descri FROM Sondage WHERE cle='".$cle."';");
      return $query->result();
    }

    public function check_owner($cle){
      $this->load->database();
      $query = $this->db->query("SELECT login FROM Sondage WHERE cle='".$cle."';");
      $row = $query->row();
      return $row->login;
    }

    public function delete_sondage($cle){
      $this->load->database();
      $query = $this->db->query("DELETE FROM Sondage WHERE cle='".$cle."';");
    }


    public function afficher_sondageUser(){
      $this->load->database();
      $login = $this->session->login;
      $query = $this->db->query("SELECT Disponibilite.id_date, Disponibilite.login, Date.id, Date.cle, Sondage.titre, Sondage.cle
                                 FROM Disponibilite JOIN Date ON Disponibilite.id_date = Date.id JOIN Sondage ON Date.cle = Sondage.cle
                                 WHERE Disponibilite.login='".$login."';");

      return $query->result();
    }

    public function votes_actuels($cle){
      $this->load->database();
      $query = $this->db->query("SELECT Disponibilite.id_date, Disponibilite.login, Date.id, Date.cle, Date.jour, Date.heuredebut, Date.heurefin
                                 FROM Disponibilite JOIN Date ON Disponibilite.id_date = Date.id
                                 WHERE Date.cle='".$cle."';");
      return $query->result();
    }
}
?>
