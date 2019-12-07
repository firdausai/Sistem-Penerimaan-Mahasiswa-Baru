<?php

class M_Keuangan extends CI_Model {

    function queryData() {

        $this->db->select('a.id, a.id_pembayaran, name, email, bukti_pembayaran, status_pembayaran');
        $this->db->from('account a'); 
        $this->db->join('pembayaran b', 'b.id_pembayaran = a.id_pembayaran', 'left');
        $this->db->order_by("
            (CASE status_pembayaran
                WHEN '1' THEN 1
                WHEN '2' THEN 2
                WHEN '0' THEN 3
                WHEN '3' THEN 4
            END)"
        );

        $query = $this->db->get();

        return $query;
    }

    function updateStatus($id,$status) {
        $this->db->where('id', $id);
        $this->db->update('pembayaran', $status);
    }
}