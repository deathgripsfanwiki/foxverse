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
<body>
</body>
	<script type="text/javascript">
		//
		function post(path, params, method) {
			method = method || "post";

			var form = document.createElement("form");
			form.setAttribute("method", method);
			form.setAttribute("action", path);
			for (var key in params) {
				if (params.hasOwnProperty(key)) {
					var hiddenField = document.createElement("input");
					hiddenField.setAttribute("type", "hidden");
					hiddenField.setAttribute("name", key);
					hiddenField.setAttribute("value", params[key]);
					form.appendChild(hiddenField);
				}
			}
			document.body.appendChild(form);
			form.submit();
		}

		window.onload = function() {
			//
			//cave.toolbar_setMode(1);
			cave.toolbar_setButtonType(0);
			cave.toolbar_setVisible(true);
			cave.toolbar_setCallback(3, communityCallback);
			//cave.toolbar_setNotificationCount(10);
			function communityCallback() {
				//cave.toolbar_setActiveButton(3);
				window.location.href = "../communities";
			}

			cave.memo_open();
			post("../animationframe.php", { filedata: cave.memo_getImageBmp(), name: cave.mii_getName() });
		};
	</script>
</html>