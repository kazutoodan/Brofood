
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LoginPage</title>

   <!-- font awesome cdn link  -->
   <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">--->

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/Login.css">

</head>
<body>
<form action="signup-check.php" method="post">
    <h2>SIGN  UP</h2>

    <?php if(isset($_GET['error'])){?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <?php if(isset($_GET['success'])){?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
    <?php } ?>
  
  
    <label>Name</label>
    <?php 
        if(isset($_GET['name']))
        {
        ?>
             <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name'];?>"><br>
        <?php
        }

        else
        {
        ?>
            <input type="text" name="name" placeholder="Name"><br>
        <?php
        }
        ?>
    

    <label>User Name</label>
    <?php 
        if(isset($_GET['uname']))
        {
        ?>
             <input type="text" name="uname" placeholder=" User Name" value="<?php echo $_GET['uname'];?>"><br>
        <?php
        }

        else
        {
        ?>
            <input type="text" name="uname" placeholder="User Name"><br>
        <?php
        }
        ?>


    <label>Password</label>
    <input type="password" 
           name="password" 
           placeholder="Password"><br>

    <label>Re Password</label>
    <input type="password" 
           name="re_password" 
           placeholder="Re_Password"><br>

    <button type="submit">Signup</button>
    <a href="Login.php" class="ca">Already have an account?</a>
   
</form>
</body>
</html>
