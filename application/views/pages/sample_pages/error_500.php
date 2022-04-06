<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css') ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico') ?>" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper" id="page-content">
        <div class="content-wrapper d-flex align-items-center text-center error-page bg-info">
          <div class="row flex-grow">
            <div class="col-lg-7 mx-auto text-white">
              <div class="row align-items-center d-flex flex-row">
                <div class="col-lg-6 text-lg-right pr-lg-4">
                  <h1 class="display-1 mb-0">500</h1>
                </div>
                <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                  <h2>SORRY!</h2>
                  <h3 class="font-weight-light">Internal server error!</h3>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-12 text-center mt-xl-2" id="back-to-home">
                  <a class="text-white font-weight-medium link-active-full-screen" href="<?php echo base_url() ?>">Back to home</a>
                </div>
              </div>
              <?php if (@$full_screen === true): ?>
                <div class="row mt-5">
                  <div class="col-12 mt-xl-2">
                    <p class="text-white font-weight-medium text-center">Copyright &copy; 2021 All rights reserved.</p>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- Custom js for this page -->
        <?php if (!@$full_screen): ?>
          <script>
          var url = "<?php echo base_url('assets/js/pages/full_screen.js') ?>";
          $.getScript(url);
          </script>
        <?php endif; ?>
        <!-- End custom js for this page -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js') ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('assets/js/off-canvas.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/hoverable-collapse.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/misc.js') ?>"></script>
    <!-- endinject -->
  </body>
</html>
