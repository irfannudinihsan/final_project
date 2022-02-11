<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tugasakhir extends CI_Model {

   public function getDataTugasakhir() 
   {
       return $this->db->get('tbl_tugasakhir')->result_array();
   }

   public function getTugasakhir($limit, $start, $keyword = null)
   {
    if ($keyword) {
        $this->db->like('nama',$keyword);
        $this->db->or_like('konsentrasi',$keyword);
        $this->db->or_like('nim',$keyword);
        $this->db->or_like('pembimbing',$keyword);
    }
    return $this->db->get('tbl_tugasakhir', $limit, $start)->result_array();
    }

   function insertDataTugasakhir($data) {
        $this->db->insert('tbl_tugasakhir',$data);
   }

   function getDataTugasakhirDetail($id) {
       $this->db->where('id',$id);
       $query = $this->db->get('tbl_tugasakhir');
       return $query->row_object();
   }

   function UpdateTugasakhir($id,$data) {
       $this->db->set($data);
    $this->db->where('id',$id);
    $this->db->update('tbl_tugasakhir');

   }

   function deleteTugasakhir($id){
       $this->db->where('id',$id);
       $this->db->delete('tbl_tugasakhir');
   }

   public function all()
   {
        $this->db->select('*');
        $this->db->from('upload');
        $this->db->order_by('tanggal_upload', 'DESC');

        return $this->db->get();
   }

   public function insert($data)
   {
        $this->db->insert('upload', $data);

        return ($this->db->affected_rows() > 0) ? true : false;
   }
   public function countAllTA()
   {
        return $this->db->get('tbl_tugasakhir')->num_rows();
   }
}
