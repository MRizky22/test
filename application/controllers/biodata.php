<?php
defined('BASEPATH') OR exit('No direct script allowed');

class biodata extends CI_Controller
{
	
	function  __construct(){
		parent::__construct();
		$this->load->model('pembelian_model');
	}
	
	function index() {
		$data['judul'] = " Toko F Three Frozen Food";
		$data['Header'] = " Dashboard";
		$this->load->view('view_header',$data);
		$data['pembelian'] = $this->pembelian_model->pembelian();
		$data['penghasilan'] = $this->pembelian_model->penghasilan();
		$this->load->view('view_isi',$data);
		$this->load->view('view_footer',$data);

		}	

		function about()
		{
		$data['judul_about'] = "TENTANG SAYA";
		$data['nama'] = "= Mochammad Rizky Septiadi";
		$data['nis'] = "= 102006850";
		$data['a_daerah'] = "= Nyalindung";
		$data['a_sekolah'] = "= SMK Teknologi Industri Pembangunan Cimahi";
		$data['kelas'] = "= XII A";
		$data['jurusan'] = "= Rekayasa Perangkat Lunak";
		$data['hobi'] = "= Nonton film, Mendengarkan Music";
		$data['cita'] = "= Full stack engineer";
		$data['motto_hidup'] ="=";
		$this->load->view('view_header',$data);
		$this->load->view('view_about',$data);
		$this->load->view('view_footer',$data);
	}
		function contact()
		{
		$data['judul1'] = "Contact";
		$this->load->view('view_header',$data);
		$this->load->view('view_contact',$data);
		$this->load->view('view_footer',$data);
	}
}

?>
