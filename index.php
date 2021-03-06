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


<script language="JavaScript">
	var audio = new Audio('http://stream.santic-zombie.ru');

	var play = document.getElementById('play');
	play.addEventListener('click', function() {
		$("#myPlay").text("Now playing:");
		audio.play();
	}, false);

	var pause = document.getElementById('pause');
	pause.addEventListener('click', function() {
		 $("#myPlay").text("Paused");
	     audio.pause();
	}, false);

	audio.addEventListener("timeupdate", function() {
	    var duration = document.getElementById('duration');
	    var s = parseInt(audio.currentTime % 60);
	    var m = parseInt((audio.currentTime / 60) % 60);
	    var h = parseInt((audio.currentTime / 3600) % 60);
	    if (s < 10) s = '0' + s;
	    if (m < 10) m = '0' + m;
	    if (h < 10) h = '0' + h;
	    duration.innerHTML = h + ':' + m + ':' + s;
	}, false);

	$("#volume").mousemove(function(){
	   audio.volume = parseFloat(this.value / 10);
	});
</script>

<script  language="JavaScript">
    function show()
    {
        $.ajax({
            url: '/trackname.php',
	    cache: false,
            success: function(html){
                $('#title').html(html);
            }
        });
    }
    $(document).ready(function(){
        show();
        setInterval('show()',5000);
    });
</script>

<script  language="JavaScript">
    function show1()
    {
        $.ajax({
            url: '/online.php',
	    cache: false,
            success: function(html){
                $('#listeners').html(html);
            }
        });
    }
    $(document).ready(function(){
        show1();
        setInterval('show1()',5000);
    });
</script>

</body>

</html>
