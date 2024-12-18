<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_model{

	public function simpan()
	{
		$data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('passsword')),
            'nama'     => $this->input->post('nama'),
            'level'    => $this->input->post('level'),

        );
        $this->db->insert('user', $data);
	}
    public function update(){
        $data = array(
            'nama'     => $this->input->post('nama'),
            'level'    => $this->input->post('level'),
        );
        $where = array(
            'id_user' => $this->input->post('id_user')
        );
        $this->db->update('user', $data, $where);
    }
}