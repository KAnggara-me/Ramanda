<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
  public function getSubMenu()
  {
    $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";
    return $this->db->query($query)->result_array();
  }

  function ambilMax()
  {
    $this->db->select_max('total');
    $this->db->from('counter');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->row_array();
    } else {
      return false;
    }
  }

  function DWarning()
  {
    $this->db->select_max('warning');
    $this->db->from('data');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->row_array();
    } else {
      return false;
    }
  }

  function DLimit()
  {
    $this->db->select_max('Dlimit');
    $this->db->from('data');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->row_array();
    } else {
      return false;
    }
  }

  function time()
  {
    $this->db->select_max('time');
    $this->db->from('data');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->row_array();
    } else {
      return false;
    }
  }

  function update()
  {
    $this->db->select_max('Dupdate');
    $this->db->from('data');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->row_array();
    } else {
      return false;
    }
  }
}
