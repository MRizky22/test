<section class="home-section">
<div class="text">Siswa</div>
<div class="container">
             <div class="card-group">
                <div class="card mb-3">
                <h3 class="card-header">Profil Siswa<a href="<?php echo site_url('siswa/hapus/'.$siswa->id_siswa); ?>" div class="btn btn-sm btn-danger"style="float:right;"><i class="fa fa-trash"></i>Hapus</a><a href="<?php echo site_url('siswa/get_edit/'.$siswa->id_siswa);?>" class="btn btn-sm btn-primary" style="float:right;"><i class="fa-solid fa-pen-to-square"></i>Edit</a></h3>
                <div class="card-body">

	<img src="<?php echo base_url('assets/img/rizky.jpeg');?>" style="float:right;"width="33%"class="img-thumbnail">

    <div class="col-md-8">
<table class="table table-borderless">

	
    <tr>
    <th width="10%">Nama Lengkap</th>
        <td>= <?php echo $siswa->nama_siswa?></td>
    </tr>
    <tr>
        <th>Kelas</th>
        <td width="30%">= <?php echo $siswa->kelas?></td>
    </tr>
    <tr><th>Alamat</th>
        <td>= <?php echo $siswa->alamat?></td>
    </tr>
        <tr><th>Nama Jurusan</th>
        <td>= <?php echo $siswa->jurusan?></td></tr>
        <tr><th>No Telepon</th>
        <td>= <?php echo $siswa->no_hp?></td></tr>
    </div>
</table>
<button class="btn btn-danger" style="float:left;" onclick="history.go(-1);">Kembali </button>




</div>
</div>

</section>