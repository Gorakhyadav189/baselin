<!-- $("#MyTabContainer").click(function(){
  //First remove 'my-active-class'from active tabs
  $(this).find('.my-tab').removeClass('my-active-class');

  //Now finally set 'my-active-class' to this selected tab
  $(this).find('.my-tab').addClass("my-active-class");
});

//add this line to document ready (on page load), to preset the selected tab
$ -->




<div class="navcontainer">
    <nav class="nav">
        <div class="nav-upper-options">
            <div class="nav-option option1 ">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                    class="nav-img"
                    alt="dashboard">
                <a href="dashboard.php">
                    <h3>Dashboard</h3>
                </a>
            </div>

            <div class="nav-option option2">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                    class="nav-img"
                    alt="articles">
                <a href="all-users.php">
                    <h3> All User</h3>
                </a>
            </div>

            <div class="nav-option option3">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                    class="nav-img"
                    alt="report">
                <a href="update.php">
                    <h3> Edit Profile</h3>
                </a>
            </div>

            <div class="nav-option option4">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                    class="nav-img"
                    alt="institution">
                    <a href="add-product.php"><h3>Add products</h3></a>
                
            </div>

            <div class="nav-option option5">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                    class="nav-img"
                    alt="blog">
                    <a href="all-product.php"> <h3>All product</h3></a>
               
            </div>

            <div class="nav-option option6">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                    class="nav-img"
                    alt="settings">
                <h3> Settings</h3>
            </div>

            <div class="nav-option logout">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                    class="nav-img"
                    alt="logout">
                <a href="logout.php">
                    <h3>Logout</h3>
                </a>
            </div>

        </div>
    </nav>
</div>
