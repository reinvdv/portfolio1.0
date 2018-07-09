<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reinier vd Velden</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width"/>
    <link rel="shortcut icon" href="img/reinier_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://use.fontawesome.com/37333d138f.js"></script>
     <script src="js/main.js"></script>
  </head>
  <body>
    <?php require './includes/config.php'; ?>
    <div id="header-nav">
      <div class="container">
        <div class="brand">
          <a href="index.php"><img src="./img/reinier_logo.png" class="logo" alt="Credits: Rowin"></a>
        </div>
        <nav id="menu" role="navigation">
			       <ul>
               <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				        <li><a href="#section1"><i class="fa fa-user-circle" aria-hidden="true"></i> Over mij</a></li>
				        <li><a href="#section2"><i class="fa fa-laptop" aria-hidden="true"></i> Mijn werk</a></li>
			       </ul>
		     </nav>
      </div>
	   </div>
     <span id="hamburger" style=" color:white;font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

     <div id="mySidenav" class="sidenav">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <li><a class="linkjes" href="#"><i class="fa fa-home" aria-hidden="true"></i> home</a></li>
         <li><a class="linkjes" href="#section1"><i class="fa fa-user-circle" aria-hidden="true"></i> Over mij</a></li>
         <li><a class="linkjes" href="#section2"><i class="fa fa-laptop" aria-hidden="true"></i> Mijn werk</a></li>
     </div>
    <div class="intro">
      <span class="title">Hallo, ik ben <b>Reinier van der Velden</b>,<br>
      <code>Ik ben  Media developer.</code><br><br>
      <li class="knop-werk"><a href="#section2" >Mijn werk</a></li></span>
    </div>
<div class="wrapper">
     <div id="section1">
       <br>
       <h1 >Over mij</h1>
       <div class="text">
       <p>Ik ben Reinier van der velden. Ik ben 18 jaar oud. Ik zit momenteel op het Media college Amsterdam en ik doe daar de opleiding Media developer.        <img class="foto-reinier" src="./img/reinier.jpg" alt="foto-reinier">

        En ik woon in Velserbroek vlak bij Haarlem.</p>
        <p>Ik heb op het Hartenlust mavo, Sterrencollege kader gezeten en ik zit nu op het Media college Amsterdam.</p>
        <p>Ik het leuk om website's te maken en nieuwe dingen te leren. Graag wil ik ook beter worden in back-end want daar weet ik nu alleen nog de basis van.
        Veder ben ik sportief ik zit zelf op honkbal en ga naar de sportschool.
        En als mijn agende het toe laat help ik ook nog bij de jeugd van de vereniging.</p>
      </div>
        <div id="map"></div>
     </div>
     <div id="section2">
       <h1 >Mijn werk</h1>


      <div class="wrapper-werk">
      <h2 id="responive-veeg">Veeg naar links voor meer</h2>
      <div class="container-werk">

        <div class="werk-img">
          <div class="img">
            <img src="./img/Ons-brood.jpg" height="250" alt="ons-brood credits rowin bart reinier " />
          </div>
          <div class="caption">
            <p>Hier moesten ik en me groepje een design voor een site maken voor Rutger Kerstens.</p>
            <p>We hebben hier gebruik gemaakt van HTML, SASS en jQuery.</p>

            <a href="http://23250.hosts.ma-cloud.nl/ons-brood/" target="_blank">Naar de site</a>
          </div>
        </div>

        <div class="werk-img">
          <div class="img">
            <img src="./img/The-wall.png" height="250" alt="The-wall credits reinier nick" />
          </div>
          <div class="caption">
            <p>Hier moest ik en een klasgenoot een site maken waarop je foto's kan uploaden en een account aan kan maken.</p>
            <p>We hebben hier gebruik gemaakt van HTML, CSS3, PHP en javascript.</p>
            <a href="http://22810.hosts.ma-cloud.nl/bewijzenmap/TheWall/login.php" target="_blank">Naar de site</a>
          </div>
        </div>

        <div class="werk-img">
          <div class="img">
            <img src="./img/Portfolio.png" height="250"  alt="Portfolio" />
          </div>
          <div class="caption">
            <p>U zit momenteel al op de Portfolio van Reinier van der Velden.</p>
            <p>Ik hebben hier gebruik gemaakt van HTML, SASS, Javascript, jQuery en van Google maps API.</p>

            <a href="#">Je zit al op de site</a>
          </div>
        </div>




      </div>
      </div>


      <div class="wrapper-werk">
      <div class="container-werk">

        <div class="werk-img">
          <div class="img">
            <img src="./img/site-mam.png" height="250" alt="site-mam reinier" />
          </div>
          <div class="caption">
            <p>Ik heb hier een site gemaakt voor mijn moeder het gaat een Portfolio worden alleen hij is nog niet af.
            Dus vandaar geen link naar de site maar wel een link naar het design van de home pagina</p>
            <p>Gemaakt in HTML, CSS, javascript</p>

            <a href="./img/site-mam.png" target="_blank">Bekijk de Home</a>
          </div>
        </div>
        </div>
      </div>
      </div>


  <footer>
     <div class="CV">
      <div class="cv-gedeelte">
         <a href="cv reinier.pdf" target="_blank" >Mijn CV</a>
      </div>
    </div>

    </div>
    <div id="section3">
      <div class="footer">
        <div class="cointainer-content-footer">

        <ul class="content-footer">
          <span style="font-weight: bold; padding-bottom: 5px; display:block; color:#3399ff;">Menu</span>
          <li><a class="linkjes" href="#section3">Home</a></li>
          <li><a class="linkjes" href="#section1">Over mij</a></li>
          <li><a class="linkjes" href="#section2">Mijn werk</a></li>
        </ul>
        <ul class="content-footer">
          <span style="font-weight: bold; padding-bottom: 5px; display:block; color:#3399ff;">Opleiding</span>
          <li>Media college Amsterdam</li>
          <li>Media developer</li>
          <li>Contactweg 36</li>
        </ul>
        <ul class="content-footer">
          <span style="font-weight: bold; padding-bottom: 5px; display:block; color:#3399ff;">Contact</span>
          <li><a href="mailto:reiniervandervelden@ziggo.nl">Reiniervandervelden@ziggo.nl</a></li>
          <li><a href="mailto:22810@ma-web.nl">22810@ma-web.nl</a></li>
          <li>Nummer: 0615163400</li>
        </ul>

          <ul class="content-footer">
            <span style="font-weight: bold; padding-bottom: 5px; display:block; color:#3399ff;">Media</span>
            <li><a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin-square" aria-hidden="true"></i> Linkedin</a><li>
            <li><a href="https://github.com/reinvdv/"><i class="fa fa-github-square" aria-hidden="true"></i> Github</a><li>
              <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a><li>
          </ul>


      </div>

    </div>
  </div>

  </footer>
</div>

<script async defer
  src="https://maps.googleapis.com/maps/api/js?key= AIzaSyBTXqTTQsqCQg_3xuAAPz0EF5ZsAaE-M1c&callback=initMap">
</script>
<script>
function openNav() {
document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
document.getElementById("mySidenav").style.width = "0";
}
</script>

  </body>
</html>
