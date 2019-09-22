<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Kriteria_model');
		if ($this->session->userdata('role') != 'admin') {
			redirect('login','refresh');
			$this->session->set_flashdata('info', 'Anda harus masuk sebagai ADMIN untuk menggunakan menu');
		}
	}

	public function index()
	{
		$data['judul'] = 'Kriteria';
		$data['content'] = 'kriteria/v_kriteria';
		$data['isi_tabel'] = $this->Kriteria_model->get_all();
		$this->load->view('v_admin', $data);
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Kriteria';
		$data['content'] = 'kriteria/v_kriteria_add';		
		$this->load->view('v_admin', $data);
	}

	public function store()
	{
			$data = array(
				'nama_kriteria' => $this->input->post('nama_kriteria')
				);
			$this->Kriteria_model->create($data);

			$this->session->set_flashdata('info', 'Data berhasil di tambah');

			redirect('kriteria','refresh');
		}

	public function edit($id='')
	{
		$data['isi_tabel'] = $this->Kriteria_model->get_id($id);

		if (!$data['isi_tabel']) {
			echo 'Halaman tidak ditemukan';
			return null;
		}

		$data['judul'] = 'Form Edit Kriteria';
		$data['content'] = 'kriteria/v_kriteria_edit';		
		$this->load->view('v_admin', $data);
	}

	public function update()
	{
		$id = $this->input->post('id_kriteria');
		$data = array(
			'nama_kriteria' => $this->input->post('nama_kriteria',TRUE)
			);
		$this->Kriteria_model->update($id, $data);
		$this->session->set_flashdata('info', 'Data berhasil di update');

		redirect('kriteria','refresh');
	}

	public function hapus($id='')
	{
		if ($id !== '') {
			$this->Kriteria_model->delete($id);
			$this->session->set_flashdata('info', 'Data berhasil di hapus');
			redirect('kriteria','refresh');
		}

		echo "Halaman tidak ditemukan";
		return null;
	}

}