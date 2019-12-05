<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
              <meta charset="utf-8">

              <script src="https://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
              <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
              <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
              <script src="https://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
              <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
              <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
              <link rel="stylesheet" href="#">
    <title>find a COLOR</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	</style>
  </head>
  <body>
          <section class="content-section text-white text-center" style="background:#808080;">
          <div class="jumbotron" style="background:black;">
          <h2 id="title"> Find a Color  </h2>
    </div>
        <div class="row" style="margin-left:150px; margin-right:100px; margin-top:80px;">
        <input id="input" type="file">
        <textarea id="output" rows="2" class="form-control"></textarea>
        <canvas id="preview" width="50" height="50"></canvas><br>
        <canvas id="canvas" width="0"></canvas><br>
        <textarea disabled id="consoleText" rows="5" class="form-control"></textarea>
        <button id="clear" onclick="clearConsole()" class="btn btn-default"><i class="fas fa-eraser"></i> Clear Saved Colors</button>
      </div>
    </section>


<script>
    let canvas, ctx, outputP, preview, previewCtx, consoleText;
    window.onload = function() {
	     canvas = document.getElementById("canvas");
	      preview = document.getElementById("preview");
	      output = document.getElementById("output");
	      consoleText = document.getElementById("consoleText");
	      ctx = canvas.getContext("2d");
	      previewCtx = preview.getContext("2d");
        document.getElementById("input").addEventListener("change", handleFile);
	      canvas.addEventListener("mousemove", previewColor);
	      canvas.addEventListener("contextmenu", logColor);
	      canvas.addEventListener("click", copyColor);
    }

    function previewColor(evt) { //move
	     let pixelData = ctx.getImageData(evt.offsetX, evt.offsetY, 1, 1).data;
	     let hex = rgbToHex(pixelData);
	     output.innerHTML = 'R: ' + pixelData[0] + ' G: ' + pixelData[1] + ' B: ' + pixelData[2] +
	     ' A: ' + pixelData[3] + '\nHex: ' + hex;
	      output.select();
	      previewCtx.fillStyle = hex;
	      previewCtx.fillRect(0,0,preview.width,preview.height);
	      return hex;
      }
      function logColor(evt) { //right click
	       evt.preventDefault();
	       consoleText.innerHTML += previewColor(evt) + '\n';
        }
        function copyColor(evt) { //left click
	         logColor(evt);
	         document.execCommand("copy");
          }
          function handleFile(evt) {
	           let img = new Image;
	            img.onload = function() {
		          canvas.width = img.width;
		          canvas.height = img.height;
              ctx.drawImage(img, 0, 0, img.width, img.height);
	           }
	            if(evt.target.files[0]) {
		              img.src = URL.createObjectURL(evt.target.files[0]);
	               }
          }
          function rgbToHex(rgb) {
              return '#' + ( (rgb[0] << 16) | (rgb[1] << 8) | rgb[2] ).toString(16).toUpperCase();
            }
            function clearConsole() {
	             consoleText.innerHTML = '';
            }
</script>
  </body>
</html>
