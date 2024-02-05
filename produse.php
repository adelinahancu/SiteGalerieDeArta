<?php include 'navbar.php'?>
<?php
require_once 'dbh.inc.php';
$sql = "SELECT * FROM produse";
$all_product = $conn->query($sql);
$sql_res = "SELECT url_image FROM produse where Id = 1";
$result = $conn ->query($sql_res);

if ($result->num_rows > 0) {
    $rows = $result->fetch_assoc();
    $url = $rows["url_image"];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Produse</title>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="font/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="header">
       <h1>Produsele Noastre</h1>
    </div>
    

    <main>

        <?php
        while ($row = mysqli_fetch_assoc($all_product)) {
        ?>
        
            <div class="card">
                <div class="image">
                      <img src="<?php echo $row["url_image"]; ?>" alt="">
                </div>
                <div class="caption">
                    <p class="product_name"><?php echo $row['Name'] ?></p>
                    <p class="price"><b>$<?php echo $row['Price']?></b></p>
                </div>
                <button class="add">Adauga in cos</button>
            </div>
            <br>
            <br>
        <?php
        }
        ?>
    </main>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</html>
