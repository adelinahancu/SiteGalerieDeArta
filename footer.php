<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer {
   display: none;
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
   transition: display 0.5s ease;
}
</style>
</head>
<body>

<!-- Your content goes here -->

<div class="footer">
  <p>2024</p>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
        var footer = document.querySelector(".footer");
        var scrollPosition = window.scrollY + window.innerHeight;
        var documentHeight = document.documentElement.scrollHeight;

        if (scrollPosition >= documentHeight) {
            footer.style.display = "block";
        } else {
            footer.style.display = "none";
        }
    });
});
</script>

</body>
</html>