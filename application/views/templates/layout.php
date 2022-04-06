<!DOCTYPE html>
<html lang="en">

  <!-- head -->
  <?php $this->load->view('templates/head') ?>
  <!-- end head -->

  <body>

    <div class="container-scroller">

      <!-- navbar -->
      <?php $this->load->view('templates/navbar') ?>
      <!-- end navbar -->

      <div class="container-fluid page-body-wrapper">

        <!-- sidebar -->
        <?php $this->load->view('templates/sidebar') ?>
        <!-- end sidebar -->

        <!-- library before content -->
        <?php $this->load->view('templates/library') ?>
        <!-- end library before content -->

        <div class="main-panel">

          <!-- content-wrapper -->
          <div class="content-wrapper" id="page-content">
            <?php echo $content; ?>
          </div>
          <!-- end content-wrapper -->

          <!-- partial:partials/_footer.html -->
          <?php $this->load->view('templates/footer') ?>
          <!-- partial -->

        </div>
        <!-- main-panel ends -->

      </div>
      <!-- page-body-wrapper ends -->
      
    </div>
    <!-- container-scroller -->

    <?php $this->load->view('templates/foot_js') ?>

  </body>

</html>
