<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('RekamMedis_Model');
		$this->load->model('Peserta_Model');
		$this->load->model('Bidan_Model');
	}

	// view
	public function index()
	{
		$this->load->view('menu');
	}

	public function form()
	{
		$tanggal = [];
		for ($i = 1; $i < 32; $i++) {
			$tanggal[] = $i;
		}

		$data['tanggal'] = $tanggal;
		$data['bulan'] = [
			'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		];

		$peserta = $this->Peserta_Model->get();
		$bidan = $this->Bidan_Model->get();

		$data['peserta'] = $peserta;
		$data['bidan'] = $bidan;
		$this->load->view('formrekammedis', $data);
	}

	public function datarekammedis()
	{
		$datamedis = $this->RekamMedis_Model->get();
		$data['datarekammedis'] = $datamedis;

		$this->load->view('datarekammedis', $data);
	}

	// createdata
	public function simpan()
	{
		$tanggal = $this->input->post('tanggal_berobat');
		$bulan = $this->input->post('bulan_berobat');
		$tahun = $this->input->post('tahun_berobat');

		$tanggal_berobat = $tanggal . '/' . $bulan . '/' . $tahun;

		$data = [
			'no_transaksi' => $this->input->post('no_transaksi'),
			'kode_peserta' => $this->input->post('kode_peserta'),
			'tgl_berobat' => $tanggal_berobat,
			'kode_bidan' => $this->input->post('kode_bidan'),
			'keluhan' => $this->input->post('keluhan'),
			'biaya_admin' => $this->input->post('biaya_admin'),
		];
		$this->RekamMedis_Model->store($data);

		redirect('home/datarekammedis', 'refresh');
	}

	// deletedata
	public function hapus($no_transaksi)
	{
		$this->RekamMedis_Model->delete($no_transaksi);
		redirect('home/datarekammedis', 'refresh');
	}

	// editdata
	public function edit($no_transaksi)
	{
		$peserta = $this->Peserta_Model->get();
		$bidan = $this->Bidan_Model->get();
		$data = $this->RekamMedis_Model->get_by_notransaksi($no_transaksi);

		$data['peserta'] = $peserta;
		$data['bidan'] = $bidan;
		$data['rekam_medis'] = $data;

		$this->load->view('editrekammedis', $data);
	}

	public function updatedata($no_transaksi)
	{
		$tanggal = $this->input->post('tanggal_berobat');
		$bulan = $this->input->post('bulan_berobat');
		$tahun = $this->input->post('tahun_berobat');

		$tanggal_berobat = $tanggal . '/' . $bulan . '/' . $tahun;

		$data = [
			'no_transaksi' => $this->input->post('no_transaksi'),
			'kode_peserta' => $this->input->post('kode_peserta'),
			'tgl_berobat' => $tanggal_berobat,
			'kode_bidan' => $this->input->post('kode_bidan'),
			'keluhan' => $this->input->post('keluhan'),
			'biaya_admin' => $this->input->post('biaya_admin'),
		];
		$this->RekamMedis_Model->update($no_transaksi, $data);

		redirect('home/datarekammedis', 'refresh');
	}
}
