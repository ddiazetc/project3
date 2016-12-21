<!doctype html>
<html lang="en">
<?php $thisPage = "Projects" ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">

    <title>Projects</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/nav-styles.css">
    <!--lightSlider-->
    <link rel="stylesheet" href="lightslider-master/src/css/lightslider.css"> 
    <link rel="stylesheet" href="css/lightSlider-styles.css">
	<!--AOS CSS transitions-->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    <?php include 'inc/fonts.inc' ?>

    <link rel="stylesheet" href="css/fonts.css">
</head>

<body>
<div class="cover">

<?php include 'inc/nav.inc' ?>

<div class="container">
    <section>
        <a class="anchor" id="projects"></a>
        <div id="project-content" class="contentitem" data-aos="fade">
            <h2 class="section-header">Projects</h2>

            <!--Used JQuery lightSlider for the portfolio with thumbnails. http://sachinchoolur.github.io/lightslider/index.html-->
            <div id="lightSlider-portfolio">
	            <ul id="lightSlider" class="lightSlider-ul">
	            	<li data-thumb="images/proj1-thumb.jpg" class="lightSlider-li">
	            		<h3>CSC174 Project 1</h3>
	            		<p>I worked with Gunnar Zemering, Ruairi Conway, Jake Socolow, and Teron Russell to create a music-themed website. I added the Bootstrap carousel and a lazy-loading plugin for images called Unveil.js. I also animated the loading of the images and helped with general debugging. <strong><a href="http://urcsc170.org/ddiazetc/Project1/index.php">Project 1 site</a></strong>.</p>
	            		<img src="images/proj1.jpg" class="lightSlider-img" alt="proj1">
	            	</li>	
	            	<li data-thumb="images/proj2-thumb.jpg" class="lightSlider-li">
	            		<h3>CSC174 Project 2</h3>
	            		<p>I worked with Gunnar Zemering, Ruairi Conway, Jake Socolow, and Teron Russell to improve Group 3's project on Alt Rock bands. I got created a new responsive and fixed top-nav and incorporated Group 3's music player into the top-nav. I also created the fullscreen overlay for the nav for tablets and mobile devices and fixed HTML and CSS validation errors. <strong><a href=http://urcsc170.org/gzemering/project2/>Project 2 site</a></strong>.</p>
	            		<img src="images/proj2.jpg" class="lightSlider-img" alt="proj2">
	            	</li>
	            	<li data-thumb="images/tumblr-thumb.jpg" class="lightSlider-li">
	            		<h3>Tumblr page</h3>
	            		<p>I've maintained a Tumblr art blog for a few years. It contains a collection of finished works and sketches in a variety of physical and digital media, including drawings, paintings, installation, animation, and photography. Follow me at <strong><a href="http://memoryfuel.tumblr.com/">memoryfuel.tumblr</a></strong>. : )</p>
	            		<img src="images/tumblr.jpg" class="lightSlider-img" alt="tumblr">
	            	</li>
	            	<li data-thumb="images/dA-thumb.jpg" class="lightSlider-li">
	            		<h3>DeviantArt page</h3>
	            		<p>For over 7 years I've posted work on my DeviantArt page. There is a lot of content overlap with my Tumblr page, but there are also older works. There used to be blog posts, but I took them down since they were too cringe-y. <strong><a href="http://dannayy.deviantart.com/">DeviantArt page</a></strong>.</p>
	            		<img src="images/dA.jpg" class="lightSlider-img" alt="dA">
	            	</li>
	            	<li data-thumb="images/methane-thumb.jpg" class="lightSlider-li">
	            		<h3>Senior thesis video</h3>
	            		<p>For my environmental science senior thesis, I used a geographic information system to quantify the flux range of methane from the ocean to the atmosphere in the Northern Gulf of Mexico. I used field data collected on a research cruise via a new lab technique developed by my thesis advisor. This video shows the data I processed and mapped in 3D along with the Gulf's bathymetry in the software ArcScene. <strong><a href="https://vimeo.com/161123173">Video</a></strong>. </p>
	            		<img src="images/methane.jpg" class="lightSlider-img" alt="methane">
	            	</li>
	            	<li data-thumb="images/daportfolio-thumb.jpg" class="lightSlider-li">
	            		<h3>DAportfolio site</h3>
	            		<p>This is my old art portfolio site that was created with DeviantArt. It is <em>not</em> mobile friendly or responsive, sadly. I should probably take it down since I have a new one that I made from scratch (the site that this Project 3 is based on). <strong><a href="http://diazetc.daportfolio.com/">DAportfolio site</a></strong>.</p>
	            		<img src="images/daportfolio.jpg" class="lightSlider-img" alt="daportfolio">
	            	</li>
	            	<li data-thumb="images/linkedin-thumb.jpg" class="lightSlider-li">
	            		<h3>LinkedIn</h3>
	            		<p>My CV in yet another form, although I haven't put as much information about myself on this site and don't keep it updated very well. I wonder how many bots scrape this site and have circulated my personal information all over the web and to various companies' databases. <strong><a href="https://www.linkedin.com/in/daniel-diaz-etchevehere-02985b82">LinkedIn page</a></strong>.</p>
	            		<img src="images/linkedin.jpg" class="lightSlider-img" alt="linkedin">
	            	</li>
	            	<li data-thumb="images/lab9-thumb.jpg" class="lightSlider-li">
	            		<h3>CSC174 Lab 9</h3>
	            		<p>I created this website with Jake Socolow. We chose the Japanese Animation company Studio Ghibli as our theme. I created the first section with the hero image and the z-pattern of content, and I did my half of the card-design section. <strong><a href="http://urcsc170.org/ddiazetc/lab9/">Link to site</a></strong>.</p>
	            		<img src="images/lab9.jpg" class="lightSlider-img" alt="lab9">
	            	</li>
	            	<li data-thumb="images/muffin-thumb.jpg" class="lightSlider-li">
	            		<h3>E-card</h3>
	            		<p>I created this interactive e-card (not sure if that's the right word for it) for my mom's birthday. It features our dog named Muffin. <strong><a href="http://ddiazetc.github.io/muffin">Link to card</a></strong>.</p>
	            		<img src="images/muffin.jpg" class="lightSlider-img" alt="muffin">
	            	</li>
	        	</ul>
        	</div>
        </div><!--projects-->
    </section>

    <?php include 'inc/footer.inc' ?>

</div><!--container-->
</div><!--cover-->

<?php include 'inc/js-scripts.inc' ?>

<!--lightslider-->
<script src="lightslider-master/src/js/lightslider.js"></script>
<script src="js/lightSlider-call.js"></script>

</body>
</html>              