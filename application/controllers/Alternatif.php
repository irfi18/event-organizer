<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Alternatif extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();

		//memperkenalkan ke controller
		$this->load->model('Alternatif_model');
		//Do your magic here
	}

	public function index()
	{
		$data['judul'] = 'Alternatif';
		$data['content'] = 'alternatif/v_alternatif';
		$data['isi_tabel'] = $this->Alternatif_model->get_all();
		$this->load->view('v_admin', $data);
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Alternatif';
		$data['content'] = 'alternatif/v_alternatif_add';		
		$this->load->view('v_admin', $data);
	}

	public function store()
	{
		
			//simpan data ke table database
			$data = array(
                'nama_alternatif' => $this->input->post('nama_alternatif'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat')
				);
			$this->Alternatif_model->create($data);

			$this->session->set_flashdata('info', 'Data berhasil di tambah');

			redirect('alternatif','refresh');
		}

	public function edit($id='')
	{
		$data['isi_tabel'] = $this->Alternatif_model->get_id($id);

		if (!$data['isi_tabel']) {
			echo 'Halaman tidak ditemukan';
			return null;
		}

		$data['judul'] = 'Form Edit Alternatif';
		$data['content'] = 'alternatif/v_alternatif_edit';		
		$this->load->view('v_admin', $data);
	}

	public function update()
	{
		$id = $this->input->post('id_alternatif');
		$data = array(
            'nama_alternatif' => $this->input->post('nama_alternatif'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat')
			);
		$this->Alternatif_model->update($id, $data);
		$this->session->set_flashdata('info', 'Data berhasil di update');

		redirect('alternatif','refresh');
	}

	public function hapus($id='')
	{
		if ($id !== '') {
			$this->Alternatif_model->delete($id);
			$this->session->set_flashdata('info', 'Data berhasil di hapus');
			redirect('alternatif','refresh');
		}

		echo "Halaman tidak ditemukan";
		return null;
	}

}
