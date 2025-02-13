<?php

session_start();

?>







<html lang="en">


<body>
    <?php
    include 'conn.php';
    include 'header.php'; ?>

    <section id="hero">
        <h4>Trade-in-fair</h4>
        <h2>Super value deals</h2>
        <h1>On all Products</h1>
        <p>Save more with coupons and up to 70% off!</p>
        <button>Shop Now</button>

    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="https://i.postimg.cc/PrN2Y6Cv/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>

        <div class="fe-box">
            <img src="https://i.postimg.cc/qvycxW4q/f2.png" alt="">
            <h6>Online Order</h6>
        </div>

        <div class="fe-box">
            <img src="https://i.postimg.cc/1Rdphyz4/f3.png" alt="">
            <h6>Save Money</h6>
        </div>

        <div class="fe-box">
            <img src="https://i.postimg.cc/GpYc2JFZ/f4.png" alt="">
            <h6>Promotions</h6>
        </div>

        <div class="fe-box">
            <img src="https://i.postimg.cc/4yFCwmv6/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>

        <div class="fe-box">
            <img src="https://i.postimg.cc/gJN1knTC/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>

    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">


            <?php

            $sql = " select * from `add product`";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_num_rows($result);
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";
            // die();

            while ($data = mysqli_fetch_assoc($result)) {
                $uid = $data['id'];

            ?>
                <div class="pro">

                    <img src="http://localhost/gorakh/uploads/<?php echo $data['image']; ?>" class="dpicn" alt="dp">
                    <div class="des">
                        <span class="pname"><?php echo $data['pname']; ?></span>
                        <h5><?php echo $data['des'] ?></h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4><?php echo $data['product_price']; ?></h4>

                    </div>


                    <i dataid="<?php echo $data['id']; ?>" class="fal fa-shopping-cart cart" value="<?php echo $data['id']; ?>"></i>

                        <?php
                        if (isset($_SESSION['email'])) {
                            $prod_id = $data['id'];
                            echo '<i usermail="' . $_SESSION['email'] . '" dataid="' . $prod_id . '" class="fa-regular fa-heart wishlist-add"></i>';
                        } else {

                            echo '<a href="login.php?msg=Must_login"><i class="fa-regular fa-heart"></i></a>';
                        }

                        ?>

                </div>


            <?php

            }



            ?>


        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4> Repair Service</h4>
        <h2>Up to <span>70% off </span> - All Tshirts and Accessories</h2>
        <button class="btn normal">Explore more</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="https://i.postimg.cc/hG1hqqK6/n1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Carton Astronault Tshirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>


            <div class="pro">
                <img src="https://i.postimg.cc/BZkSkvxt/n2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Carton Leave Tshirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>


            <div class="pro">
                <img src="https://i.postimg.cc/KYjcC3sk/n3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Rose Multicolor Tshirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>


            <div class="pro">
                <img src="https://i.postimg.cc/vHvQBtJx/n4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Pink Flower Tshirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>



            <div class="pro">
                <img src="https://i.postimg.cc/908J8S4q/n5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Purple Flowering Tshirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>



            <div class="pro">
                <img src="https://i.postimg.cc/X7r8NsGQ/n7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Short Knicker </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>



            <div class="pro">
                <img src="https://i.postimg.cc/JhrH0hYM/n8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>2 in 1 Double Routed</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>



            <div class="pro">
                <img src="https://i.postimg.cc/2Sq4mytJ/f8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Ash Short</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href=""><i class="fal fa-shopping-cart cart"></i></a>
            </div>

        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sales at cara</span>
            <button class="btn white">Learn More</button>

        </div>

        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcoming season</h2>
            <span>The best classic dress is on sales at cara</span>
            <button class="btn white">Collection</button>

        </div>

    </section>

    <section id="banner3" class="section-p1">
        <div class="banner-box">

            <h2>SEASONAL SALES</h2>
            <h3>Winter Collection -50% OFF</h3>

        </div>

        <div class="banner-box banner-img2">

            <h2>SEASONAL SALES</h2>
            <h3>Winter Collection -50% OFF</h3>

        </div>

        <div class="banner-box banner-img3">

            <h2>SEASONAL SALES</h2>
            <h3>Winter Collection -50% OFF</h3>

        </div>

    </section>

    <section id="newsletter" class="section-p1">
        <div class="newstext">
            <h4>Sign Up for Newsletters</h4>
            <p>Get Email updates about our latest shop and <span> special offers.</span> </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="btn normal">Sign Up</button>
        </div>

        </div>

    </section>
    <?php include 'footer.php'; ?>


    <script>
        $('document').ready(function() {
            $('.cart').click(function() {

                event.preventDefault();


                var itemId = this.getAttribute('dataid');


                // alert(itemId);
                $.ajax({
                    type: "POST",
                    url: 'add-to-cart.php',
                    data: {
                        product_id: itemId
                    }, // serializes the form's elements.
                    success: function(response) {

                        var data = $.parseJSON(response);

                        if (data.success == true) {
                            alert(data.message);
                        } else {



                            alert('Something Went wrong');

                        }

                    }
                });
            });

            $('.wishlist-add').click(function() {

                event.preventDefault();


                var itemId = this.getAttribute('dataid');
                var mail = this.getAttribute('usermail');



                // alert(mail);


                // alert(itemId,mail);
                $.ajax({
                    type: "POST",
                    url: 'wishlist-insert.php',
                    data: {
                        product_id: itemId,
                        usermail: mail
                    }, // serializes the form's elements.
                    success: function(response) {

                        var data = $.parseJSON(response);

                        if (data.success == true) {
                            alert(data.message);
                        } else {



                            alert('Something Went wrong');

                        }

                    }
                });






            });

        });
    </script>

</body>

</html>