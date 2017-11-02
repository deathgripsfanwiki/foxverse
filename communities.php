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
Welcome to Foxverse, a replacement service for Miiverse!
</div>
<body>
</body>
	<script type="text/javascript">
		//
		window.onload = function() {
			//
			//cave.toolbar_setMode(1);
			cave.toolbar_setButtonType(0);
			cave.toolbar_setVisible(true);
			cave.toolbar_setCallback(3, communityCallback);
			cave.toolbar_setCallback(4, notificationCallback);
			function notificationCallback() {
				//cave.toolbar_setActiveButton(3);
				window.location.href = "../post_animation";
			}
			function communityCallback() {
				//cave.toolbar_setActiveButton(3);
				window.location.href = "../view_animation";
			}
		};
	</script>
</html>