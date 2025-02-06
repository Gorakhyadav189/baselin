<?php

include_once("../conn.php");
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
    <meta name="viewport"
        content="width=device-width, 
                   initial-scale=1.0">

    <title>All Users</title>


</head>

<body>

    <!-- for header part -->
    <?php include('header.php'); ?>

    <div class="main-container">
        <?php include('sidebar.php'); ?>
        <table id="" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Product_ID</th>
                    <th>Product_Name</th>
                    <th>Desc</th>
                    <th>stock</th>
                    <th>Sqr</th>
                    <th>Product_price</th>
                    <th>image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            <?php

                $sql = "select * from `add product`";
                $result = mysqli_query($conn, $sql);

                while ($data = mysqli_fetch_assoc($result)) {


                    // $id = $row['id'];
                    // $sqr = $row['sqr'];
                    // $pname = $row['pname'];
                    // $des = $row['des'];
                    // $stock = $row['stock'];
                    // $product_price = $row['product_price'];
                    // $image = $row['image'];


                    ?>
                        <tr>
                           <?php $id= $data['id'];  ?>
                           
                            <td><?php echo $data['sqr']; ?></td>
                            <td><?php echo $data['pname']; ?></td>
                            <td><?php echo $data['des']; ?></td>
                            <td><?php echo $data['stock']; ?></td>
                            <td><?php echo $data['sqr']; ?></td>
                            <td><?php echo $data['product_price']; ?></td>
                            <td><img src="http://localhost/gorakh/uploads/<?php echo $data['image']; ?>" class="dpicn" alt="dp"></td>
                            <td>
                            <a href="update-product.php? updateid= <?php echo $data['id'];  ?>" class="btn btn-danger">Edit</a>
                            <a href="delete-product.php?deletid=<?php echo $data['id'];  ?>">delete</a>
                            </td>

                        </tr>
                    <?php
                }
            ?>






            </tbody>
        </table>
    </div>

    <script src="./adminjq.js"></script>
</body>

</html>
<script>
    /* Initialization of datatables */
    $(document).ready(function() {
        $('table.display').DataTable();
    });
</script>