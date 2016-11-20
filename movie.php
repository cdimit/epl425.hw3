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
		if($info[2] >= "60"){
		    $large = "images/fresh.jpg";
		}else{
		    $large = "images/rottenbig.png";
		}
	}
	?>

        <div id="banner"><img src="images/banner.png" alt="banner"></div>
        <h1><?= $info[0] ?> (<?=$info[1] ?>) </h1> 
        <div id="overall">
            <div id="Overview">
                <img src="<?= $film ?>/overview.png" alt="overview">
                <dl class="OverViewdl">
		    <?php
		    foreach (file($film."/overview.txt", FILE_IGNORE_NEW_LINES) as $overview) {
			$over = explode(":", $overview);
		    ?>
	            <dt><?= $over[0] ?></dt>
                    <dd>
                        <ul>
			    <?php if($over[0]=="STARRING"){
				$star = implode("<br>", explode(",", $over[1]));
				}
				else{ $star = $over[1]; }
				?>
                            <li><?=$star ?></li>
                        </ul> 
                    </dd>
			
		    <?php
	    	    }
		    ?>
                </dl>
            </div>
            <div id="reviews">
                <div id="reviewsbar">
                   <img id="reviewsbarimg" src="<?= $large ?>" alt="overview"> 
                   <div id="rate"><?= $info[2] ?>%</div>
                </div>
		<div class="reviewcol"> 
		<?php  $reviewfiles = glob($film."/review*.txt"); 
			$reviewcount = count($reviewfiles);
			foreach($reviewfiles as $key => $file){
				if($key == round($reviewcount/2)){
		?>
       		</div>
                <div class="reviewcol"> 
		<?php 
		    }
		    $review = file($file, FILE_IGNORE_NEW_LINES)
		?>
                    <div class="reviewquote">
                        <img class="likeimg" src="images/<?=strtolower($review[1])?>.gif" alt="rotten">
			<?=$review[0]?>
                    </div>
                    <div class="personalquote">
                        <img class="personimg" src="images/critic.gif" alt="critic">
                        <?=$review[2]?><br> 
                        <?=$review[3]?>
                    </div>
		<?php } 
	 	    if($key == $reviewcount-1){
		   ?>
                </div> 
		<?php 
		    } ?>
            </div> 
            <div id="bottombar">
                (1-10) of 8
            </div>
            <div id="reviewsbar">
               <img id="reviewsbarimg" src="<?= $large ?>" alt="overview"> 
               <div id="rate"><?= $info[2] ?>%</div>
            </div>   
        </div>
        <div id="w3ccheck">
            <a href="http://validator.w3.org/check/referer"><img src="images/w3c-html.png" alt="Valid HTML5"></a> <br>
            <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="images/w3c-css.png" alt="Valid CSS"></a>
	</div>
    

</body></html>
