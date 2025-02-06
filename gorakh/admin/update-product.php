<?php
include "../conn.php";

$id = $_GET['updateid'];

$sql = "select * from `add product` where id=$id";


$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$pname = $row['pname'];
$des = $row['des'];
$stock = $row['stock'];
$sqr = $row['sqr'];
$product_price=$row['product_price'];
$image = $row['image'];



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        <style>label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button[type="submit"] {
            padding: 15px;
            border-radius: 10px;
            border: none;
            background-color: #3f0097;
            color: white;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        h2 {
            text-align: center;
            color: #3f0097;
        }
    </style>
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="main-container">
        <?php include('sidebar.php'); ?>


        <div class="main">
            <h2>Add Product</h2>
            <form method="post" id="update-product" action="" enctype="multipart/form-data">
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">

                <label>Product_Title</label>
                <input type="text" name="pname" id="name"  value="<?php echo $pname; ?>">
                <p class="pnameerror" style="color:red;"></p>

                <label>Product_Description</label>
                <input type="text" name="des" id="description" value="<?php echo $des; ?>">
                <p class="descerror" style="color:red;"></p>

                <label>Stock_Avaliable</label>
                <input type="text" name="stock" id="stock" value="<?php echo $stock; ?>">
                <p class="stockerror" style="color:red;"></p>

                <label>Product(SKU)</label>
                <input type="text" name="sqr" id="sqr"value="<?php echo $sqr; ?>">
                <p class="sqrerror" style="color:red;"></p>

                <label>Product_price</label>
                <input type="text" name="product_price" id="price"value="<?php echo $product_price; ?>">
                <p class="priceerror" style="color:red;"></p>

                <label>Image</label>
                <input type="file" name="image[]" multiple   id="image" value="<?php echo $image; ?>">
                <p class="imageerror" style="color:red;"></p>



                <button type="submit" name="submit" id="submit-products">submit</button>

            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            $("#submit-products").click(function() {
                event.preventDefault();


                var pname = $("#name").val();
                var stock = $("#stock").val();
                var image = $("#image").val();
                var desc = $("#description").val();
                var sqr = $("#sqr").val();
                var price = $("#price").val();

                if (pname == "") {
                    $(".pnameerror").html("please enter product name");
                } else if (desc == "") {
                    $(".pnameerror").html("");
                    $(".descerror").html("please enter the desc");
                } else if (stock == "") {
                    $(".pnameerror").html("");
                    $(".descerror").html("");
                    $(".stockerror").html("plese enter stock");
                


                } else if (sqr == "") {
                    $(".pnameerror").html("");
                    $(".descerror").html("");
                    $(".stockerror").html(" ");
                    $(".sqrerror").html("plese enter src");


                }
                else if (price == "") {
                    $(".pnameerror").html("");
                    $(".descerror").html("");
                    $(".stockerror").html(" ");
                    $(".sqrerror").html("");
                    $(".priceerror").html("please enter the price of product");


                } else {
                    $(".pnameerror").html("");
                    $(".descerror").html("");
                    $(".stockerror").html("");
                    $(".sqrerror").html("");
                    $(".priceerror").html(" ");


                    let myform = document.getElementById("update-product");
                    let fd = new FormData(myform);
                    $.ajax({
                        url: "update-product-backend.php",
                        data: fd,
                        cache: false,
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        success: function(response) {
                            var data = $.parseJSON(response);
                            if (data.success == true) {
                                alert(data.message);
                                window.location.href = 'all-product.php';
                            } else if (data.success == false) {
                                alert(data.message);

                            }

                        }

                    });


                }


            });

        });
    </script>

</body>

</html>