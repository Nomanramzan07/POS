<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
         {{-- @include('admin.css') --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
            @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
            @include('admin.header')
        <!-- partial -->

        {{-- Body Start Here --}}
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-lg-12 stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Table with contextual classes</h4>
                        <p class="card-description"> Add class <code>.table-{color}</code>
                        </p>
                        <div class="table-responsive">
                            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                          {{-- <table class="table table-bordered table-contextual"> --}}
                            <thead>
                              <tr>
                                <th class="th-sm"> # </th>
                                <th> First name </th>
                                <th> Product </th>
                                <th> Amount </th>
                                <th> Deadline </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="table-info">
                                <td> 1 </td>
                                <td> Herman Beck </td>
                                <td> Photoshop </td>
                                <td> $ 77.99 </td>
                                <td> May 15, 2015 </td>
                              </tr>
                              <tr class="table-info">
                                <td> 1 </td>
                                <td> Herman Beck </td>
                                <td> Photoshop </td>
                                <td> $ 77.99 </td>
                                <td> May 15, 2015 </td>
                              </tr>
                              <tr class="table-warning">
                                <td> 2 </td>
                                <td> Messsy Adam </td>
                                <td> Flash </td>
                                <td> $245.30 </td>
                                <td> July 1, 2015 </td>
                              </tr>
                              <tr class="table-danger">
                                <td> 3 </td>
                                <td> John Richards </td>
                                <td> Premeire </td>
                                <td> $138.00 </td>
                                <td> Apr 12, 2015 </td>
                              </tr>
                              <tr class="table-success">
                                <td> 4 </td>
                                <td> Peter Meggik </td>
                                <td> After effects </td>
                                <td> $ 77.99 </td>
                                <td> May 15, 2015 </td>
                              </tr>
                              <tr class="table-primary">
                                <td> 5 </td>
                                <td> Edward </td>
                                <td> Illustrator </td>
                                <td> $ 160.25 </td>
                                <td> May 03, 2015 </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

          <!-- partial -->
        </div>
        <!-- main-panel ends -->

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
        {{-- @include('admin.script') --}}
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function () {
            $('#example').DataTable();
            });
        </script>
  </body>
</html>