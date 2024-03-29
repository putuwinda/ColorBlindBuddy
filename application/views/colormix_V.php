<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="" content="width=device-width, initial-scale=1.0">
	<title>Color Mix</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->
	<!-- <script src="jquery.min.js"></script> -->

	<style>
		* {
			margin: 0;
			padding: 0;
		}
		body {
			width: 100%;
			text-align: center;
			margin: auto;
			background-color: #7AB3B0;
			font-size: 25px;
		}
		.container {
      background-color:  #ddb075;
			border-radius: 10px;
			margin-top: 10px;
			}
		.content1 {
			border-radius: 10px;
			width: 100%;
		  height:	100%;
		    /*background-color: blue;*/
		}
		.content2 {

			display: flex;
			margin: auto;
			justify-content: space-around;
		}
		.content3 {
			font-weight: bold;
		}
		.label-danger {
			background-color: red;
		}
		.label-success {
			background-color: green;
		}
		.label-primary {
			background-color: blue;
		}
		input {
			display: inline-flex;
			width: 20%;
			margin: 10px auto;
			border-radius: 10px;
		}
		.border {
			border: 1px solid #000;
		}
		.show span {
			color: red;
			font-weight: bold;
			font-size: 18px;
		}
	</style>
</head>
<body>
	<div class="container jumbotron">
		<div class="row" style="text-align:center;">

        <div class="show" style="margin-left:-50px;"><h2 style="margin-left:500px;">Color Palette</h2><h4 style="margin-left:500px;">Mix your colours as you want!</h4><span></span></div>


		</div>
		<div class="row">
			<div class="content1"><p>d</p><p>d</p><p>d</p></div>
		</div>
		<div class="row">
			<form class="content2">
				<!-- input[type=range].slides[max=255][min=0]*3 -->
				<div class="form-group">
					<label for="red"><span class="label label-danger"></span></label>
					<input type="range" id="red" class="slides" name="red" min="0" max="255" value="0" step="1">
					<input type="text" id="red1" class="slides" name="red" min="0" max="255" value="" step="1" placeholder="0-255">
				</div>
				<div class="form-group">
					<label for="green"><span class="label label-success"></span></label>
					<input type="range" id="green" class="slides" name="green" min="0" max="255" value="0" step="1">
					<input type="text" id="green1" class="slides" name="green" min="0" max="255" value="" step="1" placeholder="0-255">
				</div>
				<div class="form-group">
					<label for="blue"><span class="label label-primary"></span></label>
					<input type="range" id="blue" class="slides" name="blue" min="0" max="255" value="0" step="1">
					<input type="text" id="blue1" class="slides" name="blue" min="0" max="255" value="" step="1" placeholder="0-255">
				</div>
			</form>
			<div class="content3">Change the values in the boxes above as required
			</div>
		</div>
	</div>
  <footer class="page-footer font-small pt-4" style="background-color: #b0c879; text-align: center">
      <h4>Contact Us!<br/></h4>
      Send us an email: colorbuddy@gmail.com
      <div><br/></div>
      <div style="opacity: 0.7">© 2019 Copyright: Color Blind Buddy</div>
      <div><br/></div>
 </footer>
<script>
	var redInput = document.getElementById('red');
	var greenInput = document.getElementById('green');
	var blueInput = document.getElementById('blue');
    var redLabel = document.querySelector('.label-danger');
    var greenLabel = document.querySelector('.label-success');
    var blueLabel = document.querySelector('.label-primary');
	var redInput1 = document.getElementById('red1');
	var greenInput1 = document.getElementById('green1');
	var blueInput1 = document.getElementById('blue1');
	var content1 = document.querySelector('.content1');
	var content2 = document.querySelector('.content2');
	color();
		function color(){
	var result = 'rgb(';
	result += redInput.value + ', ' + greenInput.value + ', ' + blueInput.value + ')';
		if(Number(redInput.value) + Number(greenInput.value) + Number(blueInput.value) == 765){
	content1.style.backgroundColor = result;
	content1.style.color = result;
	$('.content1').addClass('border');
	console.log(content1);
		}
	content1.style.backgroundColor = result;
	content1.style.color = result;
	$('.row .show span').html('Your color code is: <br>' + result);
	// content1.innerText = result;
	// content1.innerHTML = '<h3>' + result + '</h3>';
	console.log(result);
}
// console.log(inputs);
function updateLabel(){
	redInput1.value = redInput.value;
	greenInput1.value = greenInput.value;
	blueInput1.value = blueInput.value;
	var color1 = redInput.value;
	var color2 = greenInput.value;
	var color3 = blueInput.value;
	redLabel.innerText = color1;
	console.log(color1);
	greenLabel.innerText = color2;
	console.log(color2);
	blueLabel.innerText = color3;
	console.log(color3);
}
	redInput.addEventListener('input', color);
	redInput.addEventListener('input', updateLabel);
	greenInput.addEventListener('input', color);
	greenInput.addEventListener('input', updateLabel);
	blueInput.addEventListener('input', color);
	blueInput.addEventListener('input', updateLabel);
	redInput1.addEventListener('change', function(){
		redInput.value = redInput1.value;
		color();
		updateLabel();
	})
	greenInput1.addEventListener('change', function(){
		greenInput.value = greenInput1.value;
		color();
		updateLabel();
	})
	blueInput1.addEventListener('input', function(){
		blueInput.value = blueInput1.value;
		color();
		updateLabel();
	})
		var content3 =document.querySelector('.content3');
	redInput.addEventListener('mouseover', function(){
		// var text = document.createElement('span');
		content3.innerHTML = 'Scroll the slide to your preferred number';
		// content3.appendChild(text);
	})
	redInput.addEventListener('mouseleave', function(){
		content3.innerHTML = 'Change the values in the boxes above as required';
	})
</script>
</body>
</html>
