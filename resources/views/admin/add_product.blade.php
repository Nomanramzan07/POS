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
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add Products</h4>
                        {{-- <p class="card-description"> Basic form elements </p> --}}
                        <form class="forms-sample">
                          <div class="form-group">
                            <label for="exampleInputName1">Product Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                          </div>
                            <div class="form-group row">
                                <div class="col">
                                <label>Onhand</label>
                                <div id="the-basics">
                                    <input class="form-control" type="number" id="amountInput" placeholder="States of USA">
                                </div>
                                </div>
                                <div class="col">
                                <label>Cost</label>
                                <div id="bloodhound">
                                    <input class="form-control" type="number" id="amountInput" placeholder="">
                                </div>
                                </div>
                                <div class="col">
                                    <label>Sale Price</label>
                                    <div id="bloodhound">
                                    <input class="form-control" type="number" id="amountInput" placeholder="States of USA">
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Bar Code</label>
                                    <div id="bloodhound">
                                    <input class="typeahead" type="text" placeholder="States of USA">
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Type</label>
                                    <div id="bloodhound">
                                    <input class="typeahead" type="text" placeholder="States of USA">
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Category</label>
                                    <select class="js-example-basic-single" style="width:100%">
                                        <option value="AL">Mobile</option>
                                        <option value="WY">Laptop</option>
                                        <option value="AM">Shirt</option>
                                        <option value="CA">Pizza</option>
                                        <option value="RU">Drink</option>
                                      </select>
                                    {{-- <div id="bloodhound">
                                    <input class="typeahead" type="text" placeholder="States of USA">
                                    </div> --}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Add Notes</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Reference</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                              </div>

                          {{-- <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="form-control" id="exampleSelectGender">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div> --}}
                          <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                              </span>
                            </div>
                          </div>
                          {{-- <div class="form-group">
                            <label for="exampleInputCity1">City</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                          </div>
                          <div class="form-group">
                            <label for="exampleTextarea1">Textarea</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                          </div> --}}
                          <button type="submit" class="btn btn-primary me-2">Submit</button>
                          <button class="btn btn-dark">Cancel</button>
                        </form>
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
        @include('admin.script')
  </body>
</html>
