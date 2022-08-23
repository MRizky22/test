<section class="home-section">
    <div class="text"><?php echo $judul_about ?></div>
    <div class="container">

        <div class="card mb-3">
            <h3 class="card-header">Profil Saya</h3>
            <div class="row">

                <div class="col-md-4">
                    <div class="container">
                        <br>
                        <img src="<?php echo base_url('assets/img/rizky.jpeg'); ?>" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container">
                        <br>

                        <div class="table-table-sm">
                            <table class="table table-borderless">

                                <tr>
                                    <th>Nomor Induk</th>
                                    <td><?php echo $nis ?></td>
                                </tr>
                                <tr>
                                    <th width="30%">Nama Lengkap</th>
                                    <td><?php echo $nama ?></td>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <td><?php echo $kelas ?></td>
                                </tr>
                                <tr>
                                    <th>Jurusan</th>
                                    <td><?php echo $jurusan ?></td>
                                </tr>
                                <tr>
                                    <th>Asal Sekolah</th>
                                    <td><?php echo $a_sekolah ?></td>
                                </tr>
                                <tr>
                                    <th>Asal Daerah</th>
                                    <td><?php echo $a_daerah ?></td>
                                </tr>
                                <tr>
                                    <th>Hobi</th>
                                    <td><?php echo $hobi ?></td>
                                </tr>
                                <tr>
                                    <th>Cita-cita</th>
                                    <td><?php echo $cita ?></td>
                                </tr>
                                <tr>
                                    <th>Motto hidup</th>
                                    <td><?php echo $motto_hidup ?></td>
                                </tr>
                        </div>
                        </table>



</section>