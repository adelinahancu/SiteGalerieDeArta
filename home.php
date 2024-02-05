<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['Email'])){


?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <h1>Hello, <?php echo $_SESSION['FirstName'];?></h1><br>

    <a href="logout.php" class="logout-button">Logout</a>
    
</body>

</html>
<?php 
}else{
    header("Location:index.php");
    exit();
}
?>