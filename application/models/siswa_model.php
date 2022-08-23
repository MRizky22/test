<?php
/**
 * 
 */
class siswa_model extends CI_Model
{
	
	function tampil_siswa()
	{
		$result = $this->db->get('siswa');
		return $result;
	}
	function profil($id_siswa = NULL)
	{
		$query = $this->db->get_where('siswa', array('id_siswa' => $id_siswa))->row();
		return $query;
	}
	function simpan($nama_siswa,$kelas,$alamat,$jurusan,$no_hp){
		$data = array(
			'nama_siswa' => $nama_siswa,
			'kelas' => $kelas,
			'alamat' => $alamat,
			'jurusan' => $jurusan,
			'no_hp' => $no_hp
		);
		$this->db->insert('siswa',$data);
	}
	function delete($id_siswa){
		$this->db->get('siswa');
		$this->db->where('id_siswa', $id_siswa);
		$this->db->delete('siswa');
}
function get_siswa_id($id_siswa){
	$query = $this->db->get_where('siswa', array('id_siswa' => $id_siswa));
	return $query;
	}
	
function update($id_siswa,$nama_siswa,$kelas,$alamat,$jurusan,$no_hp){
	$data = array(
		'nama_siswa' => $nama_siswa,
		'kelas' => $kelas,
		'alamat' => $alamat,
		'jurusan' => $jurusan,
		'no_hp' => $no_hp
	);
	$this->db->where('id_siswa', $id_siswa);
	$this->db->update('siswa',$data);
}
}