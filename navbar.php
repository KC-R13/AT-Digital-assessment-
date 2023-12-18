<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="navbar" id="navbar">
    <div class="navbar-inner-container">
        <div class="logo">
        <img src="images/logo.png" alt="Logo">
        </div>
        <div class="nav-links">
        <a href="#">SERVICES</a>
        <a href="#">ABOUT US</a>
        <a href="#">CONTACT US</a>
        <a href="#">CAREERS</a>
        </div>
        
        

          <div id="Sidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
          </div>
          <div class="sidenavbar">
          <span  style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
          </div>

          
    </div>
  </div>


  <script>
    window.onscroll = function() {navbarfunction()};

    var header = document.getElementById("navbar");
    var sticky = header.offsetTop;

    function navbarfunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }


    function openNav() {
      document.getElementById("Sidenav").style.width = "260px";
    }

    function closeNav() {
      document.getElementById("Sidenav").style.width = "0";
    }

  </script>


</body>
</html>
