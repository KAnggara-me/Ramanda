<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
{

  public function index()
  {
    $data['obs'] = $this->db->get('counter')->result_array();
    $this->load->view('chart/index', $data);
  }

  public function sumary()
  {
    $data['title'] = 'Laporan Jarak Tempuh';
    $data['obs'] = $this->db->get('counter')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('chart/recap', $data);
    $this->load->view('templates/footer');
  }

  public function input()
  {
    $data['obs'] = $this->db->get('counter')->result_array();
    $this->load->view('chart/data', $data);
  }

  public function cek()
  {
    $this->load->model('Menu_model', 'ambil');
    $cek = $this->ambil->ambilMax();
    echo $cek['total'];
  }
}
