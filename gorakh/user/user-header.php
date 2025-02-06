<header>
    <?php
    include '../check_logon.php';
    include "../conn.php";



    ?>
    <div class="logosec">
        <div class="logo">UserDashbord</div>
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
            $email=$_SESSION['email'];
            $sql = " select * from user where email='$email'";
            $result = mysqli_query($conn, $sql);

            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                 <a href="user-update.php" target="_blank"><img src="http://localhost/gorakh/uploads/<?php echo $data['image']; ?>"class="dpicn" alt="dp"> </a>


            <?php

            }




            ?>
          



        </div>
    </div>

</header>