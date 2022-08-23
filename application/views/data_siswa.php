<section class="home-section">
	<div class="text">Siswa</div>
	<div class="container">
		<!--<h1>
			<center><?php echo $header; ?> </center>
		</h1>-->


		<div class="card mb-3">
			<div class="card-header">
				<h3>Data Siswa
					<!--<button type="button" class="btn btn-primary" style="float:right;"  data-bs-toggle="modal" data-bs-target="#modaltambah"><i class="fa-solid fa-person-circle-plus"></i>Tambah Siswa
			</button>--><a href="<?php echo site_url('siswa/tambah'); ?>" class="btn btn-sm btn-success" style="float:right;"> <i class="fa-solid fa-person-circle-plus"></i>Tambah Siswa
					</a>
				</h3>
			</div>
			<div class="card-body">
				<div class="card-text">

					<div class="table-responsive-sm">
						<table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%">

							<thead>
								<tr>
									<th scope="col" width="10%">No</th>
									<th scope="col" width="50%">Nama</th>
									<th scope="col" width="20%">Kelas</th>
									<th width="25%">Aksi</th>
									<br>

								</tr>
							</thead>
							<tbody>
								<?php
								$count = 0;
								foreach ($siswa->result() as $tampil) :
									$count++;
								?>
									<tr>

										<th scope="row"><?php echo $count; ?></th>
										<td><?php echo $tampil->nama_siswa; ?></td>
										<td><?php echo $tampil->kelas; ?></td>
										<td>
											<a href="<?php echo site_url('siswa/profil/' . $tampil->id_siswa); ?>" class="btn btn-sm btn-success"><i class="fa-regular fa-eye"></i></a>
											<a href="<?php echo site_url('siswa/get_edit/' . $tampil->id_siswa); ?>" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>

											<a href="#" data-href =  div class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteMod"><i class="fa fa-trash"></i></a>
											<script src="<?php echo base_url('assets/js/modal.js'); ?>"></script>
											<!--<button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modaledit<?php echo $tampil->id_siswa; ?>">
				Edit
			</button>-->

										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="deleteMod" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">

				</div>
				<div class="modal-body">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<a href="<?php echo site_url('siswa/hapus/' . $tampil->id_siswa); ?>" class="btn btn-sm btn-danger" id="confirm">Delete</a>
			</div>
		</div>

	</div>
	<!-- Modal Tambah 
		<div class="modal fade" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		
		<div class="modal-dialog modal-md">
				<div class="modal-content">
					
			
					<div class="modal-header">
						<h3 class="modal-title" id="staticBackdropLabel">Tambah Siswa</h3>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="container">
						
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
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-success">Submit!</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>


		
		<?php
			$count = 0;
			foreach ($siswa->result() as $tampil) :
				$count++;
			?>
		<div class="modal fade" id="modaledit<?php echo $tampil->id_siswa; ?>" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false">
		
		<div class="modal-dialog modal-md">
				<div class="modal-content">
					
			
					<div class="modal-header">
						<h3 class="modal-title" id="staticBackdropLabel">Edit Siswa</h3>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<?php echo form_open_multipart('siswa/update') ?>
						<div class="container">
						
							<div class="mb-3">
                           <input type="hidden" name="id_siswa" value="<?php echo $tampil->id_siswa ?>">
                <div class="form-group">

                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama_siswa" value="<?php echo $tampil->nama_siswa; ?>">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" name="kelas" value="<?php echo $tampil->kelas; ?>">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?php echo $tampil->alamat; ?>">
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" value="<?php echo $tampil->jurusan; ?>">
                </div>
                <div class="form-group">
                    <label>No Hp</label>
                    <input type="number" class="form-control" name="no_hp" value="<?php echo $tampil->no_hp; ?>">
                </div>
				<div class="modal-footer">
               							<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-info">Update</button>
        </div>
		<?php endforeach; ?>
       <?php echo form_close(); ?>-->
	</div>
	</div>
	</div>

</section>