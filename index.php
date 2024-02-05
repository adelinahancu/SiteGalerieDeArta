
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<nav class="navbar">
    
    <ul>
    <li><a href="webhome.php">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="produse.php">Produse</a></li> 
    <li><a href="galerie.php">Galerie de imagini</a></li>
    <li><a href="index.php">Login</a></li>
    </ul>
    
    
    
    
</nav>
    <a href="#" style="background:transparent margin: top 10px;">
      <img src="monnet.png" width="150" height="60" float="right" >
    </a>
    <form action="login.php" method="post" >
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>
        <label>Email</label>
        <input type="text" name="uname" placeholder="Email">

        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</body>

</html>