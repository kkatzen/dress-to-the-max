<?php

	$body = isset($_GET['body']) ? $_GET['body'] : '0';
	$hat = isset($_GET['hat']) ? $_GET['hat'] : '""';
	$accessories = isset($_GET['accessories']) ? $_GET['accessories'] : '""';
	$shirt = isset($_GET['shirt']) ? $_GET['shirt'] : '""';
	$pants = isset($_GET['pants']) ? $_GET['pants'] : '""';
	$shoes = isset($_GET['shoes']) ? $_GET['shoes'] : '""';
	$background = isset($_GET['background']) ? $_GET['background'] : '""';
	$hair = isset($_GET['hair']) ? $_GET['hair'] : '""';

?>
<html>
	<head>
		<style type="text/css">
			
			h1, h2, h3 {
				font-family: copperplate gothic light;
				text-align: center;
				margin-top: 0px;
				margin-bottom: 10px;
			}

			#character {
				margin: auto;
				margin-top: 30px;
				width: 500px;
			   position: relative;
			}

			#background {
			    position: absolute;
			    top: 0;
			    right: 0px;
			    width: 100%;
			    z-index: 5;
			}
			#body {
			    position: absolute;
			    top: 0;
			    right: 0px;
			    width: 100%;
			    z-index: 10;
			}
			#shoes {
			    position: absolute;
			    top: 0;
			    right: 0px;
			    width: 100%;
			    z-index: 20;
			}
			#pants {
			    position: absolute;
			    top: 0;
			    right: 0px;
			    width: 100%;
			    z-index: 30;
			}
			#shirt {
			    position: absolute;
			    top: 0;
			    right: 0px;
			    width: 100%;
			    z-index: 40;
			}
			#accessories {
			    position: absolute;
			    top: 0;
			    right: 0px;
			    width: 100%;
			    z-index: 50;
			}
			#hair {
			    position: absolute;
			    top: 0;
			    right: 0px;
			    width: 100%;
			    z-index: 60;
			}
			#hat {
			    position: absolute;
			    top: 0;
			    right: 0px;
			    width: 100%;
			    z-index: 70;
			}
		</style>
		<script type="text/javascript" src="navigation.js"></script>
		<script language="Javascript">

			var body = <?php echo $body ?>;
			var hat = <?php echo $hat ?>;
			var accessories = <?php echo $accessories ?>;
			var shirt = <?php echo $shirt ?>;
			var pants = <?php echo $pants ?>;
			var shoes = <?php echo $shoes ?>;
			var background = <?php echo $background ?>;
			var hair = <?php echo $hair ?>;

			var url;

			function main() {
				if(body !== ""){
					url = "images/"+ navigation.children[6].children[body].filename;
					document.getElementById("body").src=url;
				}
				if(hat !== ""){
					url = "images/"+ navigation.children[4].children[hat].filename;
					document.getElementById("hat").src=url;
				}
				if(accessories !== ""){
					url = "images/"+ navigation.children[5].children[accessories].filename;
					document.getElementById("accessories").src=url;
				}
				if(shirt !== ""){
					url = "images/"+ navigation.children[0].children[shirt].filename;
					document.getElementById("shirt").src=url;
				}
				if(pants !== ""){
					url = "images/"+ navigation.children[1].children[pants].filename;
					document.getElementById("pants").src=url;
				}
				if(shoes !== ""){
					url = "images/"+ navigation.children[2].children[shoes].filename;
					document.getElementById("shoes").src=url;
				}
				if(background !== ""){
					url = "images/"+ navigation.children[3].children[background].filename;
					document.getElementById("background").src=url;
				}
				if(hair !== ""){
					url = "images/"+ navigation.children[7].children[hair].filename;
					document.getElementById("hair").src=url;
				}
			}
		</script>

	</head>

<body onload="main()">
<h1>Dress to the Max</h1>

<div id="character">
    <img id="body" src="">
	<img id="hat" >
	<img id="accessories" >
	<img id="shirt" >
	<img id="pants"  >
	<img id="shoes" >
	<img id="background" >
	<img id="hair"  >
</div>

</body>

</html>