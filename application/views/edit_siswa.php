<section class="home-section">
    <div class="text">Siswa</div>
    <!--<div class="modal fade" id="modaledit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="staticBackdropLabel">Tambah Siswa</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">-->

    <div class="container">
        <div class="card-group">
            <div class="card mb-3">
                <h3 class="card-header">Edit Siswa</h3>
                <div class="card-body">

                    <div class="mb-3">
                        <form action="<?php echo base_url('siswa/update'); ?>" method="post">
                            <div class="form-group">

                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama_siswa" value="<?php echo $nama_siswa; ?>">
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" class="form-control" name="kelas" value="<?php echo $kelas; ?>">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" name="jurusan" value="<?php echo $jurusan; ?>">
                            </div>
                            <div class="form-group">
                                <label>No Hp</label>
                                <input type="text" class="form-control" name="no_hp" value="<?php echo $no_hp; ?>">
                            </div>
                            <input type="hidden" name="id_siswa" value="<?php echo $id_siswa ?>">
                            <br> <button class="btn btn-danger" onclick="history.go(-1);">Batal </button>
                            <button type="submit" class="btn btn-success" style="float:right;">Update</button>
                    </div>
                    </form>
                </div>
            </div>


</section>