<?php
 include('lang.php');
 if (isset($_POST['langindex'])) {
	 $li=$_POST['langindex'];
 }
 else {
	 $li=0;
 }
?>
<html lang="en">
  <head>
	 <link rel="icon" href="/Bilder/icon.png">
	   <title>Pensus™</title>
	  <link rel="stylesheet" href="CSS/style.css" type="text/css">
	  <meta name="description" content="The Pensus™ pen company" />
  </head>
  <body>
    <!--Navigationsleiste über div element/-->
	<div class="topnav">
 	 <a class="bild active" href="index.php"><img src="Bilder/Gif.gif" alt="homeicon" width="50" height="50"></a>
	 <a class="text" href="Team.php"><?php echo $lang[$li]['Team'] ?></a>
 	 <a class="text" href="Impressum.php"><?php echo $lang[$li]['Impressum'] ?></a>
	 <!--Sprachauswahl/-->
	 <a class="lang"><form action="" method="post">
			<select name="langindex" onchange="this.form.submit()">
				<option value="0" <?php if($li == 0): ?> selected="selected"<?php endif; ?>>English</option>
				<option value="1" <?php if($li == 1): ?> selected="selected"<?php endif; ?>>Deutsch</option>
				<option value="2" <?php if($li == 2): ?> selected="selected"<?php endif; ?>>Latinus</option>
			</select>
		</form>
	</a>
    </div>
</body>