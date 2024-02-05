<?php include('navbar.php') ?>
<?php include("footer.php")?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      box-sizing: border-box
    }

    .mySlides1,
    .mySlides2 {
      display: none
    }

    img {
      vertical-align: middle;
    }


    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }


    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: black;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a grey background color */
    .prev:hover,
    .next:hover {
      background-color: #f1f1f1;
      color: black;
    }

    .imageContainer {
      position: relative;
      max-width: 800px;
      width:100%;
      
      object-fit:cover ;
      margin: 0 auto;
      
    }

    .imageContainer .content {
      position: absolute;
      /* Position the background text */
      bottom: 0;
      /* At the bottom. Use top:0 to append it to the top */
      background: rgb(0, 0, 0);
      /* Fallback color */
      background: rgba(0, 0, 0, 0.5);
      /* Black background with 0.5 opacity */
      color: #f1f1f1;
      /* Grey text */
      width: 100%;
      /* Full width */
      padding: 20px;
      /* Some padding */
    }
    h2{
    margin-top: 40px;
    font-family: 'Playfair Display', serif;
    font-size:40px;
    font-weight: 500;
    
    text-align: center;
    font-weight: bolder;
    }
    
  </style>
</head>

<body>
<br>
  <h2>Galeria Monnet în imagini</h2>
<br>



  <div class="slideshow-container">
    <div class="mySlides1">
      <div class="imageContainer">
        <img src="art1.jpg" style="width:100%">
        <div class="content">
          <h1>Sala de artă contemporană</h1>
          <p>Sala de artă contemporană din Galeria Monnet emană o atmosferă captivantă, iluminată discret pentru a
            pune în valoare creațiile artistice diverse, de la instalații inovatoare și picturi expresive până la
            sculpturi provocatoare, oferind vizitatorilor o experiență caleidoscopică a spiritului creativ modern</p>
        </div>
      </div>

    </div>
  </div>

  <div class="mySlides1">
    <div class="imageContainer">
      <img src="art4.jpg" style="width:100%">
      <div class="content">
        <h1>Sala de artă minimalista</h1>
        <p>Sala de artă minimalistă se remarcă prin designul său simplu și lipsit de ornamente, evidențiind esența și
          puritatea formelor artistice, cu pereți albi și spații deschise care creează o atmosferă caldă și focalizează
          atenția asupra operelor expuse.</p>
      </div>
    </div>
  </div>

  <div class="mySlides1">
    <div class="imageContainer">
      <img src="art3.jpg" style="width:100%">
      <div class="content">
        <h1>Sala de sculptură</h1>
        <p>Sala de sculptură minimalistă impresionează prin spațiul său curat și simplu, oferind un cadru neutru pentru
          a expune sculpturi diversificate. Designul său sobru și lipsit de detalii inutile pune în evidență
          creativitatea sculptorilor, permițând formelor tridimensionale să capteze atenția vizitatorilor într-un mod
          distinct și impactant.</p>
      </div>
 
  </div>
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
  </div>



  <script>
    let slideIndex = [1, 1];
    let slideId = ["mySlides1", "mySlides2"]
    showSlides(1, 0);
    showSlides(1, 1);

    function plusSlides(n, no) {
      showSlides(slideIndex[no] += n, no);
    }

    function showSlides(n, no) {
      let i;
      let x = document.getElementsByClassName(slideId[no]);
      if (n > x.length) { slideIndex[no] = 1 }
      if (n < 1) { slideIndex[no] = x.length }
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      x[slideIndex[no] - 1].style.display = "block";
    }
  </script>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</html>