<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
         @include('admin.css')

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
            @include('admin.body')
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
            @include('admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
        @include('admin.script')
  </body>
</html>
