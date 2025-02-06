<link rel="stylesheet"
    href="adminstyle.css">
<!--Datatable plugin CSS file -->
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />



<script type="text/javascript"
    src="https://code.jquery.com/jquery-3.5.1.js"></script>

<!--Datatable plugin JS library file -->
<script type="text/javascript"
    src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<header>
    <?php
    include '../check_logon.php';
    include "user-count.php";
    include "../conn.php";



    ?>
    <div class="logosec">
        <div class="logo">AdminDashbord</div>
        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
            class="icn menuicn"
            id="menuicn"
            alt="menu-icon">
    </div>

    <div class="searchbar">
        <input type="text"
            placeholder="Search">
        <div class="searchbtn">
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                class="icn srchicn"
                alt="search-icon">
        </div>
    </div>

    <div class="message">

        <div class="circle"></div>
        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
            class="icn"
            alt="">
        <div class="dp">
            <?php
            $sql = " select * from user where role='admin'";
            $result = mysqli_query($conn, $sql);

            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <a href="update.php" target="_blank"><img src="http://localhost/gorakh/uploads/<?php echo $data['image']; ?>" class="dpicn" alt="dp"> </a>


            <?php

            }




            ?>




        </div>
    </div>

</header>
<script>
    jQuery(window).on("load", function() {

        jQuery(location).attr('href');

        var pathname = window.location.pathname;

        // alert(pathname);

        if (pathname == '/gorakh/admin/dashboard.php') {

            $(".option1").css("background-color", "#3f0097");

        } else if (pathname == '/gorakh/admin/all-users.php') {


            $(".option2").css("background-color", "#3f0097");

        }




    });
    jQuery(window).on("load", function() {

        jQuery(location).attr('href');

        var pathname = window.location.pathname;
        // alert(pathname);


        if (pathname == '/gorakh/admin/dashboard.php') {

            $(".option1").css("background-color", "#3f0097");


        } else if (pathname == '/gorakh/admin/all-users.php') {


            $(".option2").css("background-color", "#3f0097");

        }




    });
</script>