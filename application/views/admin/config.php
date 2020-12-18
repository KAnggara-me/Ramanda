<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-6">
      <?= $this->session->flashdata('message'); ?>
      <form class="form-inline" action="<?= base_url('admin/config'); ?>" method="post">
        <div class="form-group mb-2">
          <!-- Warning point -->
          <label for="warning_label" class="sr-only">Warning Point</label>
          <input type="text" readonly class="form-control-plaintext" id="warning_label" value="Warning Point">
        </div>
        <div class="form-group mx-sm-1 mb-2">
          <input type="text" class="form-control" id="warning" name="warning" value="<?= round($ddata['warning'] * 0.31 / 1000); ?>">
          <?= form_error('warning', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group mx-sm-1 mb-2">
          <input type="text" class="form-control" readonly placeholder="Kilo Meters">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Update</button>
        <!-- Limit point -->
        <div class="form-group mb-2">
          <label for="limit_label" class="sr-only">Limit Point</label>
          <input type="text" readonly class="form-control-plaintext" id="limit_label" value="Limit Point">
        </div>
        <div class="form-group mx-sm-1 mb-2">
          <input type="text" class="form-control" id="dlimit" name="dlimit" value="<?= round($ddata['Dlimit'] * 0.31 / 1000); ?>">
          <?= form_error('dlimit', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group mx-sm-1 mb-2">
          <input type="text" class="form-control" readonly placeholder="Kilo Meters">
        </div>
        <button type="submit" class="btn btn-warning mb-2">Update</button>
        <!-- Update Frequency -->
        <div class="form-group mb-2">
          <label for="warning_label" class="sr-only">Update Frequency Per</label>
          <input type="text" readonly class="form-control-plaintext" id="update_label" value="Update Frequency Per">
        </div>
        <div class="form-group mx-sm-1 mb-2">
          <input type="text" class="form-control" id="dupdate" name="dupdate" value="<?= round($ddata['Dupdate'] * 0.31); ?>">
          <?= form_error('dupdate', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group mx-sm-1 mb-2">
          <input type="text" class="form-control" readonly placeholder="Meters">
        </div>
        <button type="submit" class="btn btn-success mb-2">Update</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->