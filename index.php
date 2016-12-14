<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">

    <title>Project 3</title>
    <link rel="stylesheet" href="css/styles.css">

    <?php include 'inc/fonts.inc' ?>

    <link rel="stylesheet" href="css/swiperstyles.css">
    <link rel="stylesheet" href="Swiper-3.4.0/dist/css/swiper.min.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/favicon.ico">
</head>

<body>
<div class="cover"><!--Need an extra div so that the mobile nav fullscreen overlay isn't seen too early.-->

<?php include 'inc/nav.inc' ?>

<div class="container">
    <div id="top">
        <h2 class="memory-fuel">Danny Diaz-Etchevehere</h2>
        <img src="images/art/laputian-robot.jpg" alt="laputian robot">
    </div>
    <section>
        <a class="anchor" id="Research"></a>
        <div id="research-content" class="contentitem">
            <h2 class="section-header">Research</h2>

            <div>
                <h3>Virtual Reality</h3>
                    <p>Research on data visualization in VR at the MIT Media Lab's Macro Connections group through the MIT Summer Research Program (MSRP) under the supervision of Takahito Ito (NHK) and César Hidalgo (MIT). Summer 2016. </p>
                    <p>Created a storytelling experience based on data from the group’s project DataUSA in virtual reality using Unreal Engine 4 and Vive. Programmed 3D visualizations of the data and designed the interactions with the data and the narrative structure.</p>
                    <p><a class="my-link" href="https://vimeo.com/189385744">Video (password protected)</a> | <a href="https://medium.com/mit-media-lab/summer-research-interns-bring-diverse-experiences-and-ideas-to-the-media-lab-ead5783b994f#.50riud89k" class="my-link">Media Lab blog post about MSRP 2016 interns</a></p>
            </div>

            <div>
                <h3>Senior Thesis</h3>
                    <p>Conducted under the supervision of John Kessler (Department of Earth & Environmental Sciences) at the University of Rochester. Spring 2015-2016. </p>
                    <p>Determined the spatial distribution and magnitude of sea-to-air methane flux in the northern Gulf of Mexico using ArcGIS. Localized areas of highly elevated flux were detected that were previously not observable with available methods, suggesting that localized emissions may have been overlooked at other locations.</p>
            </div>

            <div>
                <h3>Nitrogen Stable Isotopes</h3>
                    <p>REU research conducted under the supervision of Scott Wankel (Department of Marine Chemistry & Geochemistry), Woods Hole Oceanographic Institution. Summer 2015. Poster presented at American Geophysical Union Fall Meeting 2015.</p>
                    <p>Investigated the impact of Fe(II) on the isotope dynamics of nitrite and nitrous oxide during simultaneous denitrification and chemodenitrification in anaerobic estuarine sediment incubations.</p>
                    <a href="images/AGUposter.png"><img class="displayed" src="images/AGUposterS.png" alt="AGU Poster" style="max-width: 700px"></a>

            </div>
        </div><!--Research-->
    </section>
    <section>
        <a class="anchor" id="Game-Dev"></a>
        <div id="game-dev-content" class="contentitem">
            <h2 class="section-header">Game Development</h2>
            <div id="Transcontinental">
                <h3>Transcontinental</h3>
                <!--used embedresponsively.com-->
                <div class='embed-container'><iframe src='https://player.vimeo.com/video/193284337' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
                <p class="p-no-margin-bottom"><em>Transcontinental</em> is a narrative-based game about a 17-year-old girl traveling back and forth between Washington, DC and California on a train during summer. She finds insight and solace from conversations with strangers along the way, but also a few cold shoulders. The game is an experiment to see if 1) the story of the main character can be told in a nonlinear way through conversations with the train's passengers, since the player is able to choose who to talk to, and 2) if these conversations alone and the implicit goal of learning about the characters in this setting constitute meaningful interaction/decisions in the game.</p>
				<p>(Work in progress!)</p>
                <p>Featured in the Independent Variables show, University of Rochester's Sage Art Center, 2016.</p>
                <a href="images/ind_vars.jpg"><img class="displayed" src="images/ind_vars_500px.jpg" alt="show" style="max-width: 400px;"></a>

            </div>
        </div><!--Game Dev-->
    </section>
    <section>
        <a class="anchor" id="Art"></a>
        <div id="art-content" class="contentitem">
            <h2 class="section-header">Art</h2>

            <div id="hours">
                <h3>(h)ours</h3>
                <a href="https://memoryfuel.github.io/hours/"><img id="hours-prev" class="displayed" src="images/hoursposter_transparent.gif" alt="hours preview" ></a>
                <p><em><a href="https://memoryfuel.github.io/hours/" class="my-link">(h)ours</a></em> is a fictionalized memoir of online roleplaying on forums in grade school. It is about the fantastical worlds can children construct collaboratively even when their conceptions of each other are purely virtual, and these worlds are juxtaposed with the banalities of childhood.</p>
				<p>(Work in progress!)</p>
            </div>

            <div id="illustration-and-graphic-design">
                <h3>Illustration & graphic design</h3>
                 <!--Swiper -->
                <div class="additionalcontainer">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                             <a href="images/art/escape_sq.png"><img class="my-swiper-img" src="images/art/escape_sq.png" alt="escape!"></a>
                            <div class="text"><p>Escape! Digital drawing.</p></div>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/art/laputian-robot_sq.png"><img class="my-swiper-img" src="images/art/laputian-robot_sq.png" alt="laputa"></a>
                            <div class="text"><p>Laputian Robot (from Castle in the Sky). Digital drawing.</p></div>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/art/lucidity_sq.jpg"><img class="my-swiper-img" src="images/art/lucidity_sq.jpg" alt="lucidity"></a>
                            <div class="text"><p>Lucidity. Digital drawing.</p></div>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/art/threshold_sq.jpg"><img class="my-swiper-img" src="images/art/threshold_sq.jpg" alt="threshold"></a>
                            <div class="text"><p>The Threshold. Digital drawing.</p></div>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/art/sample-graphicnovel-pg_sq.png"><img class="my-swiper-img" src="images/art/sample-graphicnovel-pg_sq.png" alt="sample graphic novel page"></a>
                            <div class="text"><p>Sample graphic novel page. Digital drawing.</p></div>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/art/sample-page-2_sq.png"><img class="my-swiper-img" src="images/art/sample-page-2_sq.png" alt="sample graphic novel page 2"></a>
                            <div class="text"><p>Sample graphic novel page. Digital drawing.</p></div>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/art/char-designs.png"><img class="my-swiper-img" src="images/art/char-designs.png" alt="char designs"></a>
                            <div class="text"><p>Character designs. Digital drawing.</p></div>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/art/dreamconductor_sq.jpg"><img class="my-swiper-img" src="images/art/dreamconductor_sq.jpg" alt="dream conductor"></a>
                            <div class="text"><p>Dream Conductor. Pencil.</p></div>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/art/wind-water-within-thee_sq_1500px.png"><img class="my-swiper-img" src="images/art/wind-water-within-thee_sq_1500px.png" alt="spirited away"></a>
                            <div class="text"><p>In the name of the wind and water within thee... (Spirited Away). Digital drawing.</p></div>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/art/what-are-you-looking-at_sq.png"><img class="my-swiper-img" src="images/art/what-are-you-looking-at_sq.png" alt="giraffe man"></a>
                            <div class="text"><p>What are You Looking At? Digital drawing.</p></div>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/art/ben-kronk_sq.png"><img class="my-swiper-img" src="images/art/ben-kronk_sq.png" alt="ben kronk">
                            <div class="text"><p>Ben Kronk performance poster. Digital drawing, commissioned.</p></div></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/art/brain_xsections_sq.jpg"><img class="my-swiper-img" src="images/art/brain_xsections_sq.jpg" alt="brain xsections"></a>
                            <div class="text"><p>Neural Networks. Painted with Nomi Miller. Acrylic, commissioned.</p></div>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/art/discerning_sq.pngc"><img class="my-swiper-img" src="images/art/discerning_sq.png" alt="discerning"></a>
                            <div class="text"><p>Discerning. Watercolor.</p></div>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/art/ur-h2o_sq.png"><img class="my-swiper-img" src="images/art/ur-h2o_sq.png" alt="UR H2O"></a>
                            <div class="text"><p>UR H2O. Digital, designed for University of Rochester's Dining & Auxiliary Services.</p></div>
                        </div>
                        <div class="swiper-slide">
                            <a href="images/art/art-as-activism_sq.jpg"><img class="my-swiper-img" src="images/art/art-as-activism_sq.jpg" alt="art as activism"></a>
                            <div class="text"><p>Art as Activism. Digital.</p></div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <!--<div class="swiper-button-next"></div>-->
                    <!--<div class="swiper-button-prev"></div>-->
                </div></div>
                <p>More art: <a class="my-link" href="http://memoryfuel.tumblr.com/">Tumblr</a> | <a class="my-link" href="http://dannayy.deviantart.com/">DeviantArt</a>
            </div>
            <div id="shows" class="my-list">
                <h3>Exhibitions</h3>
                <p>Group shows all in Rochester, NY.</p>
                <ul>
                    <li>Art Awake. The Sibley building, 2013.</li>
                    <li>IMPACT GlobeMed Art Gala. Art Museum of Rochester, 2013.</li>
                    <li>Say Something! GlobeMed Art Gala. Art Museum of Rochester, 2014.</li>
                    <li>University of Rochester Arts Bus. Rochester Fringe Festival, 2015.</li>
                    <li>Active Minds HeART of Disorder. University of Rochester, 2016.</li>
                    <li>xyz: The Hartnett Gallery Undergraduate Exhibition. University of Rochester, 2016.</li>
                    <li>Art Awake. The Metropolitan building, 2016.</li>
                    <li>Fairness: the Paul J Burgett Intercultural Center Exhibition. University of Rochester, 2016.</li>
                    <li>Independent Variables: independent study showcase. University of Rochester, 2016.</li>
                </ul>
            </div>
        </div><!--Art-->
    </section>
    <section>
        <a class="anchor" id="About"></a>
        <div id="about-content" class="contentitem">
            <h2 class="section-header">About</h2>
            <div class="about-div">
                <div class="about-descr"><p>Danny is from the Washington, D.C. area and studies Environmental Science (with some art and computer science thrown in there...) at the University of Rochester, NY. He is interested in storytelling using all kinds of digital media and combining these media into new forms of storytelling.</p>
                <p><a class="my-link" href="Diaz-Etchevehere_Daniel_CV_11_14_16.pdf">CV</a> | <a class="my-link" href="https://www.linkedin.com/in/daniel-diaz-etchevehere-02985b82">LinkedIn</a> | <strong>Contact</strong>: ddiazetc@u.rochester.edu</p>

                </div>
                <div class="about-pic"><img id="propic" src="images/propicS_h.png" alt="Danny"></div>
                <div class="propicS_h">
                    <img src="images/propicS_h.png" alt="me-h">
                </div>
            </div>


        </div><!--About-->
    </section>

    <?php include 'inc/footer.inc' ?>

</div><!--container-->
</div><!--cover-->

<!--JQuery-->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

<script>document.getElementById("mobile-nav").style.opacity = "0";</script> <!--For some reason the opacity isn't 0 immediately.-->
<script src="js/open-nav.js"></script>

<!-- <script>function myFunction(){
    var x = document.getElementById("barID");

    if(x.className === "bar"){
        x.className += " responsive";
        $('.bar').find('*').addClass('responsive');
    } else {
        x.className = "bar";
        $('.bar').find('*').removeClass('responsive');
    }
}</script>  -->

<!-- Swiper plugin for artworks -->
<script src="Swiper-3.4.0/dist/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script src="js/swiper-initialize.js"></script>

<!--Smooth scroll-->
<script src=js/smoothscroll.js></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-76799908-3', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>