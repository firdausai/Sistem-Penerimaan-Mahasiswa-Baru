<?php

class M_NewAccount extends CI_Model {

    function register($data_member, $data_pembayaran, $data_pilihan) {
        $this->db->insert('account',$data_member);
        $this->db->insert('pembayaran',$data_pembayaran);
        $this->db->insert('pilihan_program_studi',$data_pilihan);
    }

    function countRows() {
        $query = $this->db->query('SELECT * FROM account');
        return $query->num_rows();
    }

    function checkEmail($email) {
        $this->db->select('email');
        $this->db->from('account');
        $this->db->where('email',$email);

        return $this->db->get()->num_rows();
    }
}