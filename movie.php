<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Rancid Tomatoes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="movie.css">
        <link rel="shortcut icon" type="image/gif" href="images/rotten.gif">
    </head>
    <body>
	<?php
	if (isset($_GET["film"])) {
		$film = $_GET["film"];
		$info = file($film."/info.txt", FILE_IGNORE_NEW_LINES);
	}
	?>

        <div id="banner"><img src="images/banner.png" alt="banner"></div>
        <h1><?= $info[0] ?> (<?=$info[1] ?>) </h1> 
        <div id="overall">
            <div id="Overview">
                <img src="images/overview.png" alt="overview">
                <dl class="OverViewdl">
                    <dt>STARRING</dt>
                    <dd>
                        <ul>
                            <li>Patrick Stewart </li>
                            <li>Mako</li>
                            <li>Sarah Michelle Gellar</li>
                            <li>Kevin Smith</li>
                        </ul> 
                    </dd>
                    <dt>DIRECTOR</dt><dd>Kevin Munroe</dd>
                    <dt>RATING</dt><dd>PG</dd>
                    <dt>THEATRICAL RELEASE</dt><dd>Mar 23, 2007</dd>
                    <dt>MOVIE SYNOPSIS</dt><dd>After the defeat of their old arch nemesis, The Shredder, the Turtles have grown apart as a family.</dd>
                    <dt>MPAA RATING</dt><dd>PG, for animated action violence, some scary cartoon images and mild language</dd>
                    <dt>RELEASE COMPANY</dt><dd>Warner Bros.</dd>
                    <dt>RUNTIME</dt><dd>90 mins</dd>
                    <dt>RATING</dt><dd>PG</dd>
                    <dt>GENRE</dt><dd>Action/Adventure, Comedies, Childrens, Martial Arts, Superheroes, Ninjas, Animated Characters</dd>
                    <dt>BOX OFFICE</dt><dd>$54,132,596</dd>
                    <dt>LINKS</dt>
                    <dd>
                        <ul>
                            <li><a href="http://www.ninjaturtles.com/">The Official TMNT Site</a></li>
                            <li><a href="http://www.rottentomatoes.com/m/teenage_mutant_ninja_turtles/">RT Review</a></li>
                            <li><a href="http://www.rottentomatoes.com/">RT Home</a></li>
                            <li><a href="http://mumstudents.org/cs472/">CS472</a></li>
                        </ul>  
                    </dd>
                </dl>
            </div>
            <div id="reviews">
                <div id="reviewsbar">
                   <img id="reviewsbarimg" src="images/rottenbig.png" alt="overview"> 
                   <div id="rate"><?= $info[2] ?>%</div>
                </div>
                <div class="reviewcol">
                    <div class="reviewquote">
                        <img class="likeimg" src="images/rotten.gif" alt="rotten">
                        "Ditching the cheeky, self-aware wink that 
helped to excuse the concept's inherent corniness, 
                        the movie attempts to look polished and 'cool,' 
                        but the been-there animation can't compete with 
the then-cutting-edge puppetry of the 1990 live-action movie."
                    </div>
                    <div class="personalquote">
                        <img class="personimg" src="images/critic.gif" alt="critic">
                        Peter Debruge<br> 
                        Variety
                    </div>
                    <div class="reviewquote">
                        <img class="likeimg" src="images/fresh.gif" alt="fresh">
                        "TMNT is a fun, action-filled adventure that 
will satisfy longtime fans and generate a legion of new ones."
                    </div>
                    <div class="personalquote">
                        <img class="personimg" src="images/critic.gif" alt="critic">
                        Todd Gilchrist<br>  
                        IGN Movies
                    </div>
                    <div class="reviewquote">
                        <img class="likeimg" src="images/rotten.gif" alt="rotten">
                        "It stinks!"<br><br>
                    </div>
                    <div class="personalquote">
                        <img class="personimg" src="images/critic.gif" alt="critic">
                        Jay Sherman (unemployed) <br><br>
                    </div>
                    <div class="reviewquote">
                        <img class="likeimg" src="images/rotten.gif" alt="rotten">
                        "The rubber suits are gone and they've been 
redone with fancy computer technology, but that hasn't stopped them     
                        from becoming dull."
                    </div>
                    <div class="personalquote">
                        <img class="personimg" src="images/critic.gif" alt="critic">
                        Joshua Tyler<br>
                        CinemaBlend.com  
                    </div>
                    <div class="reviewquote">
                        <img class="likeimg" src="images/fresh.gif" alt="fresh">
                        " love how they shot it; used the hand held camera to follow the actors, 
                        but didn't use fast cuts or incredible shake, so you could actually see what was going on."
                    </div>
                    <div class="personalquote">
                        <img class="personimg" src="images/critic.gif" alt="critic">
                        Tengfei Sun<br><br>
                    </div>
                </div>
                <div class="reviewcol">
                    <div class="reviewquote">
                        <img class="likeimg" src="images/rotten.gif" alt="rotten">
                        "The turtles themselves may look prettier, but 
are no smarter; torn irreparably from their countercultural roots,
                        our superheroes on the half shell have been 
firmly co-opted by the industry their creators once sought to spoof."
                    </div>
                    <div class="personalquote">
                        <img class="personimg" src="images/critic.gif" alt="critic">
                        Jeannette Catsoulis<br>
                        New York Times 
                    </div>
                    <div class="reviewquote">
                        <img class="likeimg" src="images/rotten.gif" alt="rotten">
                        "Impersonally animated and arbitrarily plotted, 
                        the story appears to have been made up as the filmmakers went along."
                    </div>
                    <div class="personalquote">
                        <img class="personimg" src="images/critic.gif" alt="critic">
                         Ed Gonzalez<br>
                         Slant Magazine 
                    </div>
                    <div class="reviewquote">
                        <img class="likeimg" src="images/fresh.gif" alt="fresh">
                        "The striking use of image and motion allows each sequence to leave an impression. 
                        It's an accomplished restart to this franchise."
                    </div>
                    <div class="personalquote">
                        <img class="personimg" src="images/critic.gif" alt="critic">
                        Mark Palermo<br>
                        Coast (Halifax, Nova Scotia) 
                    </div>
                    <div class="reviewquote">
                        <img class="likeimg" src="images/rotten.gif" alt="rotten">
                        "The script feels like it was computer generated. 
                        This mechanical presentation lacks the cheesy charm of the three live action films."
                    </div>
                    <div class="personalquote">
                        <img class="personimg" src="images/critic.gif" alt="critic">
                        Steve Rhodes<br>
                        Internet Reviews  
                    </div>
                    <div class="reviewquote">
                        <img class="likeimg" src="images/fresh.gif" alt="fresh">
                        "They did it the best way they could while keeping it true to the book. "
                    </div>
                    <div class="personalquote">
                        <img class="personimg" src="images/critic.gif" alt="critic">
                        Tengfei Sun<br><br>
                    </div>
                </div>
            </div> 
            <div id="bottombar">
                (1-10) of 8
            </div>
            <div id="reviewsbar">
               <img id="reviewsbarimg" src="images/rottenbig.png" alt="overview"> 
               <div id="rate"><?= $info[2] ?>%</div>
            </div>   
        </div>
        <div id="w3ccheck">
            <a href="http://validator.w3.org/check/referer"><img src="images/w3c-html.png" alt="Valid HTML5"></a> <br>
            <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="images/w3c-css.png" alt="Valid CSS"></a>
	</div>
    

</body></html>
