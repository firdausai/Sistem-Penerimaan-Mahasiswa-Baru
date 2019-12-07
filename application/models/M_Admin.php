<?php

class M_Admin extends CI_Model {

    function queryData() {
        // $this->db->select('id, name, skhun, ijazah, fakultas1, jurusan1, fakultas2, jurusan2');
        // $query = $this->db->from('account')->get();

        $this->db->select('a.id, a.id_pilihan, a.id_pembayaran, name, email, address, province, city, birthday, ijazah, skhun, religion, b.fakultas1, jurusan1, fakultas2, jurusan2, status_pilihan');
        $this->db->from('account a'); 
        $this->db->join('pilihan_program_studi b', 'b.id_pilihan = a.id_pilihan', 'left');
        $this->db->join('pembayaran c', 'c.id_pembayaran = a.id_pembayaran', 'left');
        $this->db->where('status_pembayaran =', '3');
        $this->db->order_by('status_pilihan', 'ASC');

        $query = $this->db->get();

        return $query;
    }

    function updateStatus($id,$status) {
        $this->db->where('id', $id);
        $this->db->update('pilihan_program_studi', $status);
    }
}