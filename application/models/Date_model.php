<?php

class Date_model extends CI_Model{

    public function insert_new_date($id, $jour, $heuredebut, $heurefin, $cle){
      $this->load->database();
      $sql = "Insert into Date values ('".$id."','".$jour."','".$heuredebut."','".$heurefin."','".$cle."')";
      $query = $this->db->query($sql);
      return $query;
    }

    public function insert_new_disponibilite($id, $id_date, $login){
      $this->load->database();
      $sql = "Insert into Disponibilite values ('".$id."','".$id_date."','".$login."')";
      $query = $this->db->query($sql);
      return $query;
    }

    public function afficher_date($cle) {
      $this->load->database();
      $query = $this->db->query("SELECT id, jour, heuredebut, heurefin FROM Date WHERE cle='".$cle."';");
      return $query->result();
    }

    public function afficher_disponibilite($cle) {
      $this->load->database();
      $login = $this->session->login;
      $query = $this->db->query("SELECT Disponibilite.id, Disponibilite.id_date, Disponibilite.login, Date.id, Date.cle
                                 FROM Disponibilite JOIN Date ON Disponibilite.id_date = Date.id
                                 WHERE Date.cle='".$cle."' AND Disponibilite.login='".$login."';");
      return $query->result();
    }

    public function check_id_date($id_date){
      $this->load->database();
      $login = $this->session->login;
      $query = $this->db->query("SELECT id FROM Disponibilite WHERE login='".$login."' AND id_date='".$id_date."';");
      return $query->result();
    }

    public function delete_date($id){
      $this->load->database();
      $this->db->query("DELETE FROM Date WHERE id='".$id."';");
      $this->db->query("DELETE FROM Disponibilite WHERE id_date='".$id."';");
    }

    public function delete_disponibilite($id_date){
      $this->load->database();
      $login = $this->session->login;
      $this->db->query("DELETE FROM Disponibilite where login ='".$login."' AND id_date='".$id_date."';");
    }



}
?>
