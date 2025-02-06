<?php
session_start();
include_once("conn.php");
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
    <link rel="stylesheet"
        href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

    <script type="text/javascript"
        src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!--Datatable plugin JS library file -->
    <script type="text/javascript"
        src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


</head>

<body>

    <!-- for header part -->


    <div class="main-container">

        <table id="" class="display" style="width:100%">
            <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Product_Id</th>
                    <th>image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                //for get user id from session 
                $usermail = $_SESSION['email'];
                $sql = "SELECT * FROM `user` where email='$usermail'";
                $result = mysqli_query($conn, $sql);

                $data = mysqli_fetch_assoc($result);
                $userid = $data['id'];

                //for get product ids from wishlist

                $sql = "SELECT * FROM `wishlist` where userid='$userid'";
                $result = mysqli_query($conn, $sql);

                $data = mysqli_fetch_assoc($result);

                $pid = $data['product_id'];
                $product_array = json_decode($pid, true);
                $data = $product_array['p_id'];

                foreach ($data as $product_id) {

                    $sql = "SELECT * FROM `add product` WHERE id=$product_id ";
                    $result = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>


                            <td><?php echo $data['id']; ?></td>
                            <td><img src="http://localhost/gorakh/uploads/<?php echo $data['image']; ?>" class="dpicn" alt="dp"></td>

                            <td>
                                <a href="update-product.php? updateid= <?php echo $data['id'];  ?>" class="btn btn-danger">Edit</a>
                                <a href="wishlist-delete-product.php?deletid=<?php echo $data['id'];  ?>">delete</a>
                            </td>

                        </tr>


                <?php
                    }
                }
                ?>










            </tbody>
        </table>
    </div>


</body>

</html>
<script>
    /* Initialization of datatables */
    $(document).ready(function() {
        $('table.display').DataTable();
    });
</script>