<section class="home-section">

  <div class="text">Dashboard</div>
  <div class="container">

    <div class="row row-cols-2 row-cols-md-2 g-3">
      <div class="col">
        <div class="card" style="max-width: 22rem;">
          <div class="card-header">
            <h3>Penghasilan</h3>
          </div>
          <div class="card-body">
            <center>
              <h5 class="card-title">Hari ini</h5>
              <h1 class="card-text">
                <!--<?php echo "Rp. " . number_format((float)$penghasilan); ?>-->IDR 463,000,-
              </h1>
            </center>

            <div class="card-body">
              <center>
                <h5 class="card-title">Bulan Ini</h5>
                <h2 class="card-text">IDR 5,637,000,-</h2>
              </center>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="max-width: 22rem;">
          <div class="card-header">
            <h3>Barang Yang Terjual</h3>
          </div>
          <div class="card-body">
            <center>
              <h5 class="card-title">Hari ini</h5>
              <h1 class="card-text">10</h1>

          </div>
          <div class="card-body">
            <center>
              <h5 class="card-title">Bulan ini</h5>
              <h2 class="card-text">48</h2>

          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="max-width: 52rem;">
        <div class="card-header">
          <h3>Riwayat Transaksi </h3>
        </div>
        <div class="card-body">
          <div class="table-responsive-sm">
            <table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%">
              <caption></caption>
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">ID</th>
                  <th scope="col">Item yang dibeli</th>
                  <th scope="col">Subtotal</th>

                  <br>
                </tr>
              </thead>
              <tbody>
                <?php
                $count = 0;
                foreach ($pembelian->result() as $tampil) :
                  $count++;
                ?>
                  <tr>

                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo $tampil->id_pembelian; ?></td>
                    <td><?php echo $tampil->produk; ?></td>
                    <td><?php echo $tampil->subtotal; ?></td>

                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!--<img src="<?php echo base_url('assets/img/header.png'); ?>" class="card-img-top" alt="...">-->





</section>