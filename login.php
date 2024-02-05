<?php
session_start();
include "dbh.inc.php";

if (isset($_POST['uname']) && isset($_POST['password'])){
  function validate($data){
    $data = trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;

  }
    $uname=validate($_POST['uname']);
  $password=validate($_POST['password']); 

  if(empty($uname)){
    header("Location: index.php?error=User Name is required");
    exit();
  }else if(empty($password)){
    header("Location: index.php?error=Password is required");
    exit();
  }else{
    $sql="SELECT * FROM USERS WHERE EMAIL='$uname' AND Password ='$password'";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) ===1 ){
        $row=mysqli_fetch_assoc($result);
        

        if($row['Email']===$uname && $row['Password']===$password){
            $_SESSION['Email'] = $row['Email'];
            $_SESSION['FirstName'] = $row['FirstName'];
            $_SESSION['id'] = $row['userId'];
            header("Location:home.php");
            exit();
        }else{
            header("Location:index.php?error=Incorrect Email or password");
            exit();
        }
    }else{
        header("Location:index.php?error=Incorrect Email or password");
        exit();
    }
}
}else{
    header("Location: index.php");
    exit();
}
?>