<section class="home-section">
<div class="text">Siswa</div>

<div class="container">
             <div class="card-group">
                <div class="card mb-3">
                <h3 class="card-header">Tambah</h3>
                <div class="card-body">
						
                        <div class="mb-3">
                            <form action="<?php echo site_url('siswa/simpan'); ?>" method="post">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama_siswa" required placeholder="Nama" required oninvalid="this.setCustomValidity('Wajib Diisi!')" oninput="this.setCustomValidity('')"/>
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <input type="text" class="form-control" name="kelas" required placeholder="Kelas" required oninvalid="this.setCustomValidity('Wajib Diisi!')" oninput="this.setCustomValidity('')"/>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat" required placeholder="Alamat" required oninvalid="this.setCustomValidity('Wajib Diisi!')" oninput="this.setCustomValidity('')"/>
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan" required placeholder="Jurusan" required oninvalid="this.setCustomValidity('Wajib Diisi!')" oninput="this.setCustomValidity('')"/>
                                </div>
                                <div class="form-group">
                                    <label>Nomor telepon</label>
                                    <input type="text" class="form-control" name="no_hp" required placeholder="No telepon" required oninvalid="this.setCustomValidity('Wajib Diisi!')" oninput="this.setCustomValidity('')"/>
                                </div>
                                <br> <button class="btn btn-danger" onclick="history.go(-1);">Batal </button>
                    <button type="submit" class="btn btn-success" style="float:right;">Submit!</button>
                        </div>
                    </div>
                    
 </div>
        </form>
    </div>
    </div>
    </section>  