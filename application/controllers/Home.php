<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	public function __construct(){
        parent:: __construct();
        $this->load->model('Transaksi_model');
		$this->load->library('Pdf');
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }

	public function index()
	{
		$this->template->load('layout/template','dashboard');
	}
	public function laporan(){
		$tanggalawal = $this->input->get('tanggalawal');
		$tanggalakhir = $this->input->get('tanggalakhir');
		$this->db->from('transaksi');
		$this->db->where("tanggal >=", $tanggalawal);
		$this->db->where("tanggal <=", $tanggalakhir);
		$this->db->order_by("tanggal", "ASC");
		$laporan = $this->db->get()->result_array();
		$data = array(
			'tanggalawal'	=> $tanggalawal,
			'tanggalakhir'	=> $tanggalakhir,
			'laporan'		=> $laporan,
		);
		$this->load->view('laporan', $data);
	}
}
