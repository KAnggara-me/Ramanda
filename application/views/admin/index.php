<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Content Row -->
  <div class="row">
    <div class="col-xl-12">
      <!-- Area Chart -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Estimasi Penggunaan</h6>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="myAreaChart" width="19" height="5"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-xl-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <table class="table table-sm table-reponsive">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Waktu Pemakaian</th>
                <th scope="col">Tanggal Pemakaian</th>
                <th scope="col">Jarak Yang Ditempuh</th>
                <th scope="col">Jarak Yang Tersisa</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($obs as $r) : ?>
                <tr>

                  <th scope="row"><?= $i; ?></th>
                  <td><?= date('H:i:s', $r['time']); ?></td>
                  <td><?= date('d F Y', $r['time']); ?></td>
                  <td><?= $r['data']; ?></td>
                  <td><?= $r['total'] / 100; ?>KM</td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->