<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cartstyle.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Shopping Cart</title>
</head>

<body>
    <h1>Shopping Cart</h1>

    <div class="shopping-cart">
        <div class="column-labels">
            <label class="product-image">Image</label>
            <label class="product-details">Product</label>
            <label class="product-price">Price</label>
            <label class="product-quantity">Quantity</label>
            <label class="product-removal">Remove</label>
            <label class="product-line-price">Total</label>
        </div>

        <div class="products-container">
            <?php
            session_start();
            include "conn.php";

            if (isset($_SESSION['cart'])) {
                $product_ids = $_SESSION['cart'];

                foreach ($product_ids as $product_id) {
                    $sql = "SELECT * FROM `add product` WHERE id=$product_id";
                    $result = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_assoc($result)) {
            ?>
                        <div class="product" data-id="<?php echo $data['id']; ?>">
                            <div class="product-image">
                                <img src="http://localhost/gorakh/uploads/<?php echo $data['image']; ?>" class="dpicn" alt="dp">
                            </div>
                            <div class="product-details">
                                <div class="product-title"><?php echo $data['pname']; ?></div>
                                <p class="product-description"><?php echo $data['des']; ?></p>
                            </div>
                            <div class="product-price"><?php echo $data['product_price']; ?></div>
                            <div class="product-quantity">
                                <input type="number" value="1" min="1">
                            </div>
                            <div class="product-removal">
                                <button class="remove-product">Remove</button>
                            </div>
                            <div class="product-line-price"><?php echo $data['product_price']; ?></div>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>

        <div class="totals">
            <div class="totals-item">
                <label>Subtotal</label>
                <div class="totals-value" id="cart-subtotal">0.00</div>
            </div>
            <div class="totals-item">
                <label>Tax (5%)</label>
                <div class="totals-value" id="cart-tax">0.00</div>
            </div>
            <div class="totals-item">
                <label>Shipping</label>
                <div class="totals-value" id="cart-shipping">15.00</div>
            </div>
            <div class="totals-item totals-item-total">
                <label>Grand Total</label>
                <div class="totals-value" id="cart-total">0.00</div>
            </div>
        </div>

        <button class="checkout">Checkout</button>
    </div>

    <script src="cartjq.js"></script>
</body>

</html>