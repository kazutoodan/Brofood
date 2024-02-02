z<header class="header">

  
<a href="#" class="logo" strcasecmp><img src="images/brofood.png" alt=""></a>
      
      <?php
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);?>
      
      <div class="userName">
          <a><?php echo $_SESSION['name'];?></a>
         </div>

      <nav class="navbar">
         

         <a href="UserSelect.php">Food Category</a>
         <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>
         <a href="logout.php">Logout</a>
      </nav>
 
</header>
<div id="menu-btn" class="fas fa-bars"></div>