 
<?php
session_start();
@include 'config.php';

if(isset($_POST['uname'])&& isset($_POST['password'])){
    function validate($data){
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
    }

    $uname=validate($_POST['uname']);
    $password=validate($_POST['password']);

    if(empty($uname)){
       header("Location:Login.php?error=User Name is required");
       exit();
    }elseif(empty($password)){
        header("Location:Login.php?error=password is required");
        exit();
    }else{
        $sql="SELECT *FROM users WHERE user_name='$uname' AND password='$password'";
        
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1)
        {$row = mysqli_fetch_assoc($result);
          if($row['user_name']=="admin" && $row['password']=="admin123"){
            $_SESSION['user_name']=$row['user_name'];
            $_SESSION['name']=$row['name'];
            $_SESSION['id']=$row['id'];
            header("Location: admin1.php");

          }
          else if($row['user_name']=== $uname && $row['password']==$password){
            $_SESSION['user_name']=$row['user_name'];
            $_SESSION['name']=$row['name'];
            $_SESSION['id']=$row['id'];
            header("Location: UserSelect.php");
            exit();
          }
          
          
        }

        else{
            header("Location:Login.php?error=Incorect User name or password");
            exit();
        }
    }

}else{
    header("Location:Login.php?error");
    exit();
}
