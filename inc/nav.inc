<!--Fullscreen overlay for mobile-->
<div id="mobile-nav" class="overlay fade fadeOut">
    <div id= "overlay-content-ID" class="overlay-content" >
         <a style="color: #c5d6e0" class="mobile-nav-me mobile-nav-a" href="#top" onclick="openNav()"><strong>Danny Diaz-Etchevehere</strong></a>
        <a href="index.php" class="mobile-nav-a <?php if ($thisPage == "Home"){ echo "active-page";} ?>" onclick="openNav()">Home</a>
        <a href="projects.php" class="mobile-nav-a <?php if ($thisPage == "Projects"){ echo "active-page";} ?>" onclick="openNav()">More projects</a>
        <a href="contact-form.php" class="mobile-nav-a <?php if ($thisPage == "Contact"){ echo "active-page";} ?>" onclick="openNav()">Contact</a>
    </div>
</div> 

<!--hamburger icon for mobile-->
<span class="hamburger-class" id="hamburger" onclick="openNav()">&#9776;</span>

<!--responsive top-nav-->
<div id="barID" class="bar">
    <div class="menu"></div>
    <div ><h1><a href="#top" class="top-nav-name">Danny Diaz-Etchevehere</a></h1></div>
    <div class="nav-item <?php if ($thisPage == "Home"){ echo "active-page";} ?>"><a href="index.php" class="nav-a">Home</a></div>
    <div class="nav-item <?php if ($thisPage == "Projects"){ echo "active-page";} ?>"><a href="projects.php" class="nav-a">More projects</a></div>
    <div class="nav-item <?php if ($thisPage == "Contact"){ echo "active-page";} ?>"><a href="contact-form.php" class="nav-a">Contact</a></div>
</div>