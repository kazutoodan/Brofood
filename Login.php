<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Page</title>

   <!-- font awesome cdn link  -->
   <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"-->.

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/login.css">

</head>
<body>
<form action="UserLogin.php" method="post">
    <h2>LOGIN PAGE</h2>

    <?php if(isset($_GET['error'])){?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
    
    <label>User Name </label>
    <input type="text" name="uname" placeholder="User Name">

    <label>Password</label>
    <input type="password" name="password" placeholder="Password"><br>

    <button type="submit">Login</button>
    <a href="signup.php" class="ca">Create an account</a>
   
</form>


</body>
</html>