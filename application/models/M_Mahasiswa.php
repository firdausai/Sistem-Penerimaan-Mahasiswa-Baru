<?php

class M_Mahasiswa extends CI_Model {

    function data($id) {
        // $this->db->where('id',$id);
        // $this->db->from('account');
        // $query = $this->db->get();
        // return $query->row_array();

        $this->db->select('a.id, a.id_pilihan, a.id_pembayaran, name, email, address, province, city, birthday, ijazah, skhun, religion, fakultas1, jurusan1, fakultas2, jurusan2, status_pilihan, bukti_pembayaran, status_pembayaran');
        $this->db->from('account a'); 
        $this->db->join('pilihan_program_studi b', 'b.id_pilihan = a.id_pilihan', 'left');
        $this->db->join('pembayaran c', 'c.id_pembayaran = a.id_pembayaran', 'left');
        $this->db->where('a.id',$id);

        $query = $this->db->get();
        return $query->row_array();
    }

    function addPicture($id, $data_bukti) {
        $this->db->where('id', $id);
        $this->db->update('pembayaran', $data_bukti);
    }

    function checkPicture($id) {
        $this->db->select('status_pembayaran');
        $this->db->from('pembayaran');
        $this->db->where('id',$id);

        $query = $this->db->get();
        $row = $query->row();
        
        if($row->status_pembayaran == '3') {
            return true;
        }
        return false;
    }
}