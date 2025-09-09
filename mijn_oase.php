<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Mijn Oase</title>
	<style>
		html, body {
			height: 100%;
			margin: 0;
			padding: 0;
		}
		body {
			width: 100vw;
			height: 100vh;
			overflow: hidden;
			background: #000;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		   .oase-img {
			   width: 100vw;
			   height: 100vh;
			   object-fit: contain;
			   display: block;
			   background: #000;
		   }
	</style>
</head>
<body>
		<img src="images/oase.png" alt="Oase" class="oase-img" onerror="this.style.display='none';document.getElementById('img-error').style.display='block';">
		<div id="img-error" style="display:none;color:#fff;font-size:2em;text-align:center;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);">Afbeelding niet gevonden</div>
</body>
</html>
