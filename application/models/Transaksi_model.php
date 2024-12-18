<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {
    public function pemasukan_hari_ini() {
        $tanggal = date('Y-m-d');
        $this->db->select('SUM(nominal) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi', 'Pemasukan');
        $this->db->where('DATE(tanggal)', $tanggal);
        $result = $this->db->get()->row()->total;
        if ($result==NULL){
            return 0;
        } else {
            return $result;
        }
    }
    public function pemasukan_bulan_ini() {
        $tanggal = date('Y-m');
        $this->db->select('SUM(nominal) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi', 'Pemasukan');
        // Use the LIKE operator to match the year and month
        $this->db->where('tanggal LIKE', "$tanggal%");
        $result = $this->db->get()->row()->total;
        if ($result==NULL){
            return 0;
        } else {
            return $result;
        }
    }
    public function pemasukan() {
        $this->db->select('SUM(nominal) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi', 'Pemasukan');
        return  $this->db->get()->row()->total;
    }

    
    public function pengeluaran_hari_ini() {
        $tanggal = date('Y-m-d');
        $this->db->select('SUM(nominal) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi', 'Pengeluaran');
        $this->db->where('DATE(tanggal)', $tanggal);
        $result = $this->db->get()->row()->total;
        if ($result==NULL){
            return 0;
        } else {
            return $result;
        }
    }

    public function pengeluaran_bulan_ini() {
        $tanggal = date('Y-m');
        $this->db->select('SUM(nominal) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi', 'Pengeluaran');
        // Use the LIKE operator to match the year and month
        $this->db->where('tanggal LIKE', "$tanggal%");
        $result = $this->db->get()->row()->total;
        if ($result==NULL){
            return 0;
        } else {
            return $result;
        }
    }
    public function pengeluaran() {
        $this->db->select('SUM(nominal) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi', 'Pengeluaran');
        return  $this->db->get()->row()->total;
    }
    public function saldo_awal($tanggal) {
        $this->db->select('SUM(nominal) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi', 'Pemasukan');
        $this->db->where("tanggal <=", $tanggal);
        $pemasukan =  $this->db->get()->row()->total;

        $this->db->select('SUM(nominal) as total');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi', 'Pengeluran');
        $this->db->where("tanggal <=", $tanggal);
        $pengeluran =  $this->db->get()->row()->total;
        $saldo =$pemasukan-$pengeluran;
        return $saldo;
    }
}
