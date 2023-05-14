<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Point of Sale</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 sidebar">
        <div class="card">
          <div class="card-header">
            Categories
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item">Beverages</li>
              <li class="list-group-item">Snacks</li>
              <li class="list-group-item">Groceries</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Main content -->
      <div class="col-md-9 main-content">
        <!-- Main content header -->
        <div class="row">
          <div class="col-md-12">
            <h1>Point of Sale</h1>
          </div>
        </div>
        <!-- Main content body -->
        <div class="row">
          <div class="col-md-12">
            <!-- Point of sale form -->
            <form>
              <div class="form-group">
                <label for="product-name">Product Name</label>
                <input type="text" class="form-control" id="product-name">
              </div>
              <div class="form-group">
                <label for="product-price">Price</label>
                <input type="number" class="form-control" id="product-price">
              </div>
              <div class="form-group">
                <label for="product-quantity">Quantity</label>
                <input type="number" class="form-control" id="product-quantity">
              </div>
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
            <!-- Cart summary -->
            <div class="cart-summary">
              <h2>Cart Summary</h2>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Product 1</td>
                    <td>$10.00</td>
                    <td>1</td>
                    <td>$10.00</td>
                  </tr>
                  <tr>
                    <td>Product 2</td>
                    <td>$15.00</td>
                    <td>2</td>
                    <td>$30.00</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="3">Total</td>
                    <td>$40.00</td>
                  </tr>
                </tfoot>
              </table>
              <button type="button" class="btn btn-success">Checkout</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>
</html>
