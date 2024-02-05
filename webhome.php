
<?php include 'footer.php'
?>
<!DOCTYPE html>
<html>

<head>
  <title>Home Page for Galeria</title>
  <link rel="stylesheet" href="style1.css">

</head>

<body>

  <nav class="navbar">

    <ul>
      <li><a href="webhome.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="produse.php">Produse</a></li>
      <li><a href="galerie.php">Galerie de imagini</a></li>
      <li><a href="index.php">Login</a></li>
    </ul>




  </nav>

  <div class='d-flex justify-content-center'>
    <a href="#" style="background-color: white;">
      <img src="monnet.png" width="150" height="60" float="right">
    </a>
  </div>





  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="art.jpg" style="width:100%">
      <div class="text"></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="art3.jpg" style="width:100%">
      <div class="text"></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="art4.jpg" style="width:100%">
      <div class="text"></div>
    </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
<br>
<br>
<br>
<br>
  <div class="container border border-dark border-5">
    <div class="row">
      <div class="col-6 d-flex justify-content-center">
        <div class="paragraf  ">
          <h1>Galeria Monnet</h1>
          <p>Galeria "Monnet" este un spațiu fascinant și vibrant dedicat artei contemporane, situat în inima orașului.
            Înconjurată de arhitectură modernă și cu o intrare primitoare, galeria se remarcă prin designul său
            minimalist, punând în prim-plan operele artistice expuse.La intrarea în galerie, vizitatorii sunt
            întâmpinați de o atmosferă caldă și luminată, creând un mediu prielnic contemplării și explorării artei.
            Pereții albi și lumina naturală care pătrunde prin ferestre creează un cadru perfect pentru a evidenția
            detaliile și culorile operei de artă.
          </p>
          <br>
          
          <div>
            <button class="btn btn-dark">Afla mai multe</button>
          </div>
        </div>
      </div>
      <div class="col-6">
        <img class="img-fluid" src="art1.jpg" alt="">
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>



  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
  </script>


</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</html>