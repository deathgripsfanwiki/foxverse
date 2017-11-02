<?php
$animationFile = file_get_contents("animation.txt");
$animationSpeed = 1000; // in ms
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<style>
		@font-face {
			font-family: "Super Mario Maker Extended";
			src: url("../fonts/Super Mario Maker Extended.ttf")
		}  
		body {
			background-image: url("../images/header.png");
			background-repeat: no-repeat;
			font-family: "Super Mario Maker Extended", sans-serif;
		}
	</style>
</head>
<div style="margin-top: 220px; margin-left: 32px;">
<img id="animation" />
<div id="animationStatus"></div>
</div>
<body>
</body>
	<script type="text/javascript">
		//
		window.onload = function() {
			//
			var animationFileData = <?php echo('"' . $animationFile . '"') ?>;
			var animationData = animationFileData.split("|");
			var animationFrame = 0;
			var animationDone = false;
			setInterval(function() {
				if (animationFrame + 1 > animationData.length) {
					animationFrame = 0;
					animationDone = true;
				}
				if (animationDone) return;
				document.getElementById("animation").setAttribute("src", "data:image/bmp;base64," + animationData[animationFrame]);
				animationFrame++;
			}, <?php echo($animationSpeed) ?>);
			setInterval(function() {
				if (animationDone) document.getElementById("animationStatus").innerHTML = "Animation is done playing!";
			}, 50);
			//cave.toolbar_setMode(1);
			cave.toolbar_setButtonType(0);
			cave.toolbar_setVisible(true);
			cave.toolbar_setCallback(3, communityCallback);
			cave.toolbar_setNotificationCount(10);
			function communityCallback() {
				//cave.toolbar_setActiveButton(3);
				window.location.href = "../communities";
			}
		};
	</script>
</html>