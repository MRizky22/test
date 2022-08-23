<?php
//CONTROLLER YANG DIPAKAI
class siswa extends CI_Controller
{
	
	function  __construct(){
		parent::__construct();
		$this->load->model('siswa_model');
	}
	
	function index() {
		$data['title'] = "Data Siswa";
		$data['header'] = "Kelas XII";
		$this->load->view('view_header',$data);
		$data['siswa'] = $this->siswa_model->tampil_siswa();
		$this->load->view('data_siswa',$data);
		$this->load->view('view_footer',$data);
		

		}	
		
	function profil($id_siswa) {
				$data['siswa'] = $this->siswa_model->profil($id_siswa);
				$this->load->view('view_header',$data);
				$this->load->view('view_detail',$data);
				$this->load->view('view_footer',$data);
			}
	function tambah (){
		$this->load->view('view_header');
		$this->load->view('tambah_siswa');
		$this->load->view('view_footer');
	}
	function simpan (){
		$nama_siswa = $this->input->post('nama_siswa');
		$kelas = $this->input->post('kelas');
		$alamat = $this->input->post('alamat');
		$jurusan = $this->input->post('jurusan');
		$no_hp = $this->input->post('no_hp');
		$this->siswa_model->simpan($nama_siswa,$kelas,$alamat,$jurusan,$no_hp);
		redirect('siswa');
	}
	function hapus (){
		$id_siswa = $this->uri->segment(3);
		$this->siswa_model->delete($id_siswa);
		redirect('siswa');
	}
	function get_edit (){
		$id_siswa = $this->uri->segment(3);
		$hasil = $this->siswa_model->get_siswa_id($id_siswa);
		if ($hasil->num_rows() > 0) {
	 		$i = $hasil->row_array();
			$data = array(
				'id_siswa'	=> $i['id_siswa'],
				'nama_siswa'	=> $i['nama_siswa'],
				'kelas'	=> $i['kelas'],
				'alamat'	=> $i['alamat'],
				'jurusan'	=> $i['jurusan'],
				'no_hp'	=> $i['no_hp']
			);
			$this->load->view('view_header',$data);
			$this->load->view('edit_siswa',$data);
			$this->load->view('view_footer',$data);
}else{
echo "Data Was Not Found";
		} 
}
	function update(){
		$id_siswa = $this->input->post('id_siswa');
		$nama_siswa = $this->input->post('nama_siswa');
		$kelas = $this->input->post('kelas');
		$alamat = $this->input->post('alamat');
		$jurusan = $this->input->post('jurusan');
		$no_hp = $this->input->post('no_hp');
		$this->siswa_model->update($id_siswa,$nama_siswa,$kelas,$alamat,$jurusan,$no_hp);
		redirect('siswa');
	}
}