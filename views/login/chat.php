<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title></title>


<!--Cargamos jScrollPane CSS, junto al estilo del chat en chat.css
	y el resto de la pagina en page..css -->



<link rel="stylesheet" type="text/css" href="http://localhost/fitit_v2/js/jScrollPane/jScrollPane.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/fitit_v2/css/page.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/fitit_v2/css/chat.css" />


</head>
<body>

<div id="chatContainer">
	<div id="chatTopBar" class="rounded"></div>
	<div id="chatLineHolder"></div>

	<div id="chatUsers" class="rounded"></div>
	<div id="chatBottomBar" class="rounded">
		<div class="tip"></div>

		 <form id="loginForm" method="post" action="">
		 	<input id="name" name="name" class="rounded" maxlength="16" />
		 	<input id="email" name="chatText" class="rounded" />
		 	<input type="submit" class="redButton" value="Enviar" />
		 </form>
		 <form id="submitForm" method="post" action="">
		 	<input id="chatText" name="chatText" class="rounded" maxlength="255" />
		 	<input type="submit" class="redButton" value="Submit">
		 </form>
	</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://localhost/fitit_v2/js/jScrollPane/jquery.mousewheel.js"></script>
<script src="http://localhost/fitit_v2/js/jScrollPane/jScrollPane.min.js"></script>
<script src="http://localhost/fitit_v2/js/script.js"></script>
</body>
</html>