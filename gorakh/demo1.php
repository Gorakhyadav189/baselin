<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        body {
  padding-top: 80px;
}

.show-cart li {
  display: flex;
}
.card {
  margin-bottom: 20px;
}
.card-img-top {
  width: 200px;
  height: 200px;
  align-self: center;
}



    </style>
</head>
<body>
    <!-- Nav -->
<nav class="navbar navbar-inverse bg-inverse fixed-top bg-faded">
    <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button><button class="clear-cart btn btn-danger">Clear Cart</button></div>
    </div>
</nav>


<!-- Main -->
<div class="container">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="http://www.azspagirls.com/files/2010/09/orange.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Orange</h4>
    <p class="card-text">Price: $0.5</p>
    <a href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="http://images.all-free-download.com/images/graphicthumb/vector_illustration_of_ripe_bananas_567893.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Banana</h4>
    <p class="card-text">Price: $1.22</p>
    <a href="#" data-name="Banana" data-price="1.22" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="https://3.imimg.com/data3/IC/JO/MY-9839190/organic-lemon-250x250.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Lemon</h4>
    <p class="card-text">Price: $5</p>
    <a href="#" data-name="Lemon" data-price="5" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
    </div>
</div>

  
 <!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="show-cart table">
          
        </table>
        <div>Total price: $<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Order now</button>
      </div>
    </div>
  </div>
</div> 

<script src="demojq.js"></script>
</body>
</html>