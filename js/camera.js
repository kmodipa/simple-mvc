(function(){
	var video = document.querySelector("#videoElement"), canvas = document.getElementById("canvas"),
		context = canvas.getContext('2d');
	navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia;
	if (navigator.getUserMedia)
	{
		navigator.getUserMedia({video: true}, handleVideo, videoError);
	}

	function handleVideo(stream)
	{
		video.src = window.URL.createObjectURL(stream);
		video.play();
	}

	function videoError(e)
	{
		console.log("getUserMedia() not supported");
	}

	document.getElementById("cbutton").addEventListener("click", function ()
	{
		context.drawImage(video, 0, 0, 500, 375);
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function () {
			if (this.readyState === 4 && this.status === 200)
				alert(this.responseText);
		};
		xhr.open("POST", "workarea");
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.send("image="+canvas.toDataURL());
	})

	/*function downloadCanvas(link, canvasId, filename) {
		link.href = document.getElementById(canvasId).toDataURL();
		link.download = filename;

	}
	document.getElementById('capture').addEventListener('click', function() {
		downloadCanvas(this, 'canvas', 'test.png');
	}, false);*/
})();
