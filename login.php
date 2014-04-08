<meta charset="UTF-8">
<html>
	<head>
		<title>*****</title>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	
	<body>
		<div class="main">
			<div class="top">
				<div class="icon">
					<a href="index.php">
						<img src="http://static.tumblr.com/af06dd0807d256dc1dec8abe12cd8f1b/oghd6vg/FBSmgqgxn/tumblr_static_chocolate_chip_cookies.jpeg"
							 width="100" height="100" href"index.php">
					</a>
				</div>
				<div class="login">
					<?php
						include 'connect.php';
						$errno = login($_GET['username'], $_GET['password']) && check_user_data();
						if(!$errno && check_user_data()) :
					?>
					Üdv, <?php echo $_GET['username']; ?>!
					<?php
						else :
					?>
					<text style="float: right;">Hiba történt, a szerver nem elérhető vagy nem szerepelsz az adatbázisban.</text>
					<?php
						endif;
					?>
				</div>
			</div>
			<div class="menu">
				<div class="menu_elem">
					<a href="index.php">Kezdőlap</a>
				</div>
				<div class="menu_elem">
					<a href="">Bulik</a>
				</div>
				<div class="menu_elem">
					<a href="">Profil</a>
				</div>
				<div class="menu_elem">
					<a href="">Helpdesk</a>
				</div>
				<div class="menu_elem">
					<a href="menu.php">Impresszum</a>
				</div>
			</div>
			<div class="right">
				right
			</div>
			<div class="left">
				left
			</div>
			<div class="bottom">
				bottom
			</div>
		</div>
	</body>
</html>