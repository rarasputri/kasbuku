<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengeluaran extends CI_Controller {

	public function __construct(){
        parent:: __construct();
        $this->load->model('User_model');
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
    }

	public function index()
	{
        $username = $this->session->userdata('username');
        $level    = $this->session->userdata('level');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi', 'Pengeluaran');
        if($level=='User'){
            $this->db->where('username', $username);
        }
        $this->db->order_by('tanggal', 'DESC');
        $pengeluaran = $this->db->get()->result_array();
        $data = array(
            'pengeluaran'     =>  $pengeluaran
        );
		$this->template->load('layout/template','pengeluaran_index', array_merge($data));
	}
    public function simpan(){
        $data = array(
            'keterangan'    => $this->input->post('keterangan'),
            'nominal'       => $this->input->post('nominal'),
            'tanggal'       => $this->input->post('tanggal'),
            'username'      => $this->session->userdata('username'),
            'jenis_transaksi'   => 'Pengeluaran'
        );
        $this->db->insert('transaksi', $data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Yeay, data berhasil ditambah!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('pengeluaran');
    }
    public function hapus($id){
        $where = array('id_transaksi' => $id);
        $this->db->delete('transaksi',$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Yeay, data berhasil dihapus!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('pengeluaran');
    }
}
