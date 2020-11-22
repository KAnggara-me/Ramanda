            <!-- Footer -->
            <footer class="sticky-footer bg-white">
              <div class="container my-auto">
                <div class="copyright text-center my-auto">
                  <span>Copyright &copy; Web Programming UNPAS <?= date('Y'); ?></span>
                </div>
              </div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
              <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

            <script>
              $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
              });



              $('.form-check-input').on('click', function() {
                const menuId = $(this).data('menu');
                const roleId = $(this).data('role');

                $.ajax({
                  url: "<?= base_url('admin/changeaccess'); ?>",
                  type: 'post',
                  data: {
                    menuId: menuId,
                    roleId: roleId
                  },
                  success: function() {
                    document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                  }
                });

              });
            </script>
            <!-- Chart Script -->
            <script>
              var ctx = document.getElementById("myAreaChart");
              var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                  labels: [
                    <?php foreach ($obs as $t) : ?>
                      <?= '"' . date('d/m/y', $t['time']) . '",'; ?>
                    <?php endforeach; ?>
                  ],
                  datasets: [{
                      label: 'Jarak Tempuh Harian',
                      lineTension: 0.3,
                      // backgroundColor: "rgba(78, 115, 223, 0.05)",
                      // borderColor: "rgba(78, 115, 223, 1)",
                      pointRadius: 5,
                      pointBackgroundColor: "rgba(255, 99, 132, 1)",
                      pointBorderColor: "rgba(255, 99, 132, 1)",
                      pointHoverRadius: 3,
                      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                      pointHitRadius: 10,
                      pointBorderWidth: 2,
                      backgroundColor: 'rgba(255, 99, 132, 0.5)',
                      borderColor: 'rgba(255,99,132,1)',
                      borderWidth: 2,
                      data: [
                        <?php foreach ($obs as $t) : ?>
                          <?= '"' . $t['data'] . '",'; ?>
                        <?php endforeach; ?>
                      ],
                    },
                    {
                      label: 'Jarak Tempuh Total',
                      lineTension: 0.3,
                      backgroundColor: "rgba(78, 115, 223, 0.05)",
                      borderColor: "rgba(78, 115, 223, 0.5)",
                      pointRadius: 3,
                      pointBackgroundColor: "rgba(78, 115, 223, 1)",
                      pointBorderColor: "rgba(78, 115, 223, 1)",
                      pointHoverRadius: 3,
                      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                      pointHitRadius: 10,
                      pointBorderWidth: 2,
                      // backgroundColor: 'rgba(255, 99, 132, 0.2)',
                      // borderColor: 'rgba(255,99,132,1)',
                      borderWidth: 1,
                      data: [
                        <?php foreach ($obs as $t) : ?>
                          <?= '"' . $t['total'] . '",'; ?>
                        <?php endforeach; ?>
                      ],
                    },
                  ]
                },
                options: {
                  scales: {
                    yAxes: [{
                      ticks: {
                        beginAtZero: true
                      }
                    }]
                  }
                }
              });
            </script>
            </body>

            </html>