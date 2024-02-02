
<?php
session_start();
@include 'config.php';

if(isset($_POST['uname'])&& isset($_POST['password'])&& 
  isset($_POST['name'])&& isset($_POST['re_password'])){
    function validate($data){
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
    }

    $uname=validate($_POST['uname']);
    $password=validate($_POST['password']);

    $re_password=validate($_POST['re_password']);
    $name=validate($_POST['name']);

    $user_data = 'uname='.$uname.'&name='.$name;

    

   
    if(empty($uname)){
       header("Location:signup.php?error=User Name is required&$user_data");
       exit();
    }elseif(empty($password)){
        header("Location:signup.php?error=Password is required&$user_data");
        exit();

    }else if(empty($re_password)){
        header("Location:signup.php?error= Re-password is required&$user_data");
        exit();
    
    }else if(empty($name)){
        header("Location:signup.php?error= Name is required&$user_data");
        exit();      
    }

    else if($password != $re_password){
      header("Location:signup.php?error=The confirmation password does not match&$user_data");
      exit();    
    }  
    else{
      //hashing the password
      //$password=md5($password);
 
      $sql="SELECT *FROM users WHERE user_name='$uname'";    
      $result = mysqli_query($conn,$sql);
     
      if(mysqli_num_rows($result)>0){
       header("Location:signup.php?error=The username  is taken try another&$user_data");
       exit();   
      }else
       { 
         $sql12="INSERT INTO users(user_name,password,name)VALUE('$uname','$password','$name')";
         $result2 = mysqli_query($conn,$sql12);
         if($result2){
          header("Location:signup.php?success=Your account has been created successfully");
          exit();

         }else{
          header("Location:signup.php?error=unkwon eror occurred&$user_data");
          exit();   

         }
       }
     }
  
  }
    
  
  else{
    header("Location:signup.php?error");
    exit();
}
