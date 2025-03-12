 <!-- Footer -->
</div>
<?php
  $query="SELECT * FROM profile";
  $result=mysqli_query($conn,$query);
  $profile_row=mysqli_fetch_assoc($result);
?>
 <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  ,
                  <a href="<?=$profile_row['link_2']?>" target="_blank" class="footer-link fw-bolder"><?=$profile_row['name']?></a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../admin_assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../admin_assets/vendor/libs/popper/popper.js"></script>
    <script src="../admin_assets/vendor/js/bootstrap.js"></script>
    <script src="../admin_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../admin_assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../admin_assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../admin_assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../admin_assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>