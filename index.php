<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style1.css">
	<title>My Test Radio</title>
	<script
		src="https://code.jquery.com/jquery-3.4.1.js"
		integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
		crossorigin="anonymous">
	</script>

</head>

<body>

<div class="parent">
	<div id="song">

		<h1>Just Radio</h1>

		<div id="myPlay">-</div>

		<div id="title">title</div>

		<br>

		<div class="btn-wrap">
			<button id="play" class="btn">
			<i class="fas fa-play-circle"></i>
			Play
			</button>
			<button id="pause" class="btn">
			<i class="fas fa-pause-circle"></i>
			Pause
			</button>
		</div>

		<br>

		<div>
			vol:
			<br>
			<input id="volume" type="range" min="0" max="10" value="5" step="0.1" />
		</div>

		<span id="duration"></span>
		<br>
		<br>
		<div id="listeners">title</div>

	</div>
</div>

<script src="js/audio.js" type="text/javascript"></script>
<script src="js/radio.js" type="text/javascript"></script>

</body>

</html>
