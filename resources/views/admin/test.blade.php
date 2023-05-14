<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Point Of Sale</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>

    <div class="container-scroller">
        <!-- partial:../../partials/_sidebar.html -->
              @include('sidebar')
        <!-- partial -->
          <div class="container-fluid page-body-wrapper">
              <!-- partial:../../partials/_navbar.html -->
                  @include('header')
              <!-- partial -->

              {{-- Body Start Here --}}
              <div class="main-panel">

                  <div class="content-wrapper">
                          @if (session()->has('message'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" aria-hidden="true"></button>
                              {{session()->get('message')}}
                          </div>

                          @endif
                          <form action="{{url('/add_sale')}}" method="post">
                              @csrf
                              <h2 class="card-title">Sale</h2>
                              <div class="add-items d-flex">
                              <input type="text" name="sale" class="form-control todo-list-input" placeholder="enter item">
                              <input type="submit" class="btn btn-primary" name="submit" value="Add">
                              {{-- <input type="submit" name="submit" class="add btn btn-primary todo-list-add-btn" value="Add"> --}}
                              </div>
                          </form>

                      <div class="row">

                          {{-- </div> --}}
                      {{-- </div> --}}
                  </div>
              </div>
              <!-- content-wrapper ends -->
              <!-- partial:../../partials/_footer.html -->
                  @include('footer')
              <!-- partial -->
          </div>
          <!-- main-panel ends -->

        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="../../assets/vendors/select2/select2.min.js"></script>
      <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="../../assets/js/off-canvas.js"></script>
      <script src="../../assets/js/hoverable-collapse.js"></script>
      <script src="../../assets/js/misc.js"></script>
      <script src="../../assets/js/settings.js"></script>
      <script src="../../assets/js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="../../assets/js/file-upload.js"></script>
      <script src="../../assets/js/typeahead.js"></script>
      <script src="../../assets/js/select2.js"></script>
      <!-- End custom js for this page -->
    </body>
  </html>
