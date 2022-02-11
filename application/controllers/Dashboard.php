<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_tugasakhir');
	}

	public function index()
	{

		$this->load->library('pagination');
		$this->load->library('session'); 
		
		if($this->input->post('submit')){
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword',$data['keyword']);
		} else{
			$data['keyword'] = $this->session->userdata('keyword');
			if(!($this->uri->segment(2))){
				$data['keyword'] = $this->session->unset_userdata('keyword');
			}
			
		}

		$this->db->like('nama', $data['keyword']);
		$this->db->or_like('nim', $data['keyword']);
		$this->db->or_like('konsentrasi', $data['keyword']);
		$this->db->or_like('pembimbing', $data['keyword']);
		$this->db->from('tbl_tugasakhir');
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 6;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['tugasakhir'] = $this->M_tugasakhir->getTugasakhir($config['per_page'] ,$data['start'] ,$data['keyword']);
		$this->load->view('dashboard', $data);
	}

	public function tugas_akhir() 
	{
		$this->load->view('tugasakhir');
	}

	public function edit_Tugasakhir($id) 
	{
		$data['tugas_akhir'] = $this->M_tugasakhir->getDataTugasakhirDetail($id);
		// $data[''] = array('queryTADetail' => $queryAllTugasakhirDetail);
		$this->load->view('edit_tugasakhir',$data);
	}

	public function fungsiTambah() 
	{
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$tahun = $this->input->post('tahun');
		$judul = $this->input->post('judul');
		$konsentrasi = $this->input->post('konsentrasi');
		$pembimbing = $this->input->post('pembimbing');
		$waktu_mulai = $this->input->post('waktu_mulai');
		$waktu_selesai = $this->input->post('waktu_selesai');
		$status = $this->input->post('status');
		$file = $_FILES['dokumen']['name'];
		if ($file == '') {

		}
		else {
			$config['upload_path'] ='./uploads/';
			$config['allowed_types'] = 'pdf|doc|docx';
			$config['max_size'] = '20000';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload',$config);

			if(! $this->upload->do_upload('dokumen')) {
				$error = array('error' => $this -> upload->display_errors('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>'));
				var_dump($error);
				die;
			}
			else {
				$dokumen = $this->upload->data('file_name');
				
			}
		}

		$ArrInsert = array(
			'nama' => $nama,
			'nim' => $nim,
			'tahun' => $tahun,
			'judul' => $judul,
			'konsentrasi' => $konsentrasi,
			'pembimbing' => $pembimbing,
			'waktu_mulai' => $waktu_mulai,
			'waktu_selesai' => $waktu_selesai,
			'status' => $status,
			'dokumen' => $dokumen
		);

		$this->M_tugasakhir->insertDataTugasakhir($ArrInsert);
		redirect(base_url('Dashboard'));
	}

	public function fungsiEdit() {
		$id= $this->input->post('id');
		$judul = $this->input->post('judul');
		$waktu_selesai = $this->input->post('waktu_selesai');
		$status = $this->input->post('status');
		$file = $_FILES['dokumen']['name'];
		if ($file == '') {

		}
		else {
			$config['upload_path'] ='./uploads/';
			$config['allowed_types'] = 'pdf|doc|docx';
			$config['max_size'] = '20000';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload',$config);

			if(! $this->upload->do_upload('dokumen')) {
				$error = array('error' => $this -> upload->display_errors('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>'));
				var_dump($error);
				die;
			}
			else {
				$dokumen = $this->upload->data('file_name');
				
			}
		}

		$ArrUpdate = array(
			'judul' => $judul,
			'waktu_selesai' => $waktu_selesai,
			'status' => $status,
			'dokumen' => $dokumen
		);

		$this->M_tugasakhir->updateTugasakhir($id,$ArrUpdate);
		redirect(base_url(''));

	}

	public function fungsiDelete($id) {
		$this->M_tugasakhir->deleteTugasakhir($id);
		redirect(base_url(''));
	}

	public function x($id){
 
		$this->load->model('M_tugasakhir');
 
		$detail = $this->M_tugasakhir->getDataTugasakhirDetail($id);
		$data['detail'] = $detail;
		$this->load->view('view', $data);
 
	}

	function detail()
    {
        $id     = $this->uri->segment(3);
        $data['row']   = $this->db->get_where('tbl_tugasakhir', array('id' => $id))->row_array();
		$this->load->view('view', $data);
    }
}