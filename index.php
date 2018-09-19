<!DOCTYPE html>
<html>
<head>
	<title>Rand Unique Code</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">

$(document).ready(function(){
	$('#myform').submit(function(event){
		event.preventDefault();
		var formData={
			'start-date' : $('input[name=start-date]').val(),
			'end-date' : $('input[name=end-date]').val()
		};
		$.ajax({
			type : 'POST',
			url : 'randcode.php',
			data : formData
			//dataType : 'json',
			//encode : true
		}).done(function(response){
			$('#voucher-post').html(response);
		});
		//event.preventDefault();
	});
	
	$('#clear').click(function(){
		$('#voucher-post').empty();
	})

});
	/*
	function loadDoc(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {

			document.getElementById("voucher-post").innerHTML=this.responseText;

		}
	};
	xhttp.open("GET","randcode.php",true);
	xhttp.send();
}*/
</script>

</head>
<body>

<div id="post" >
<h1>Randomize Unique Code</h1>
<div id="description">
	<p class="description-1">This program will generate a random unique code for you, where the first 5 character
	are letter, and the last character is number. This program generate a unique code based on time range. First you need to type what is the starting and end date for the program to generate the code, next click the "Generate unique code" button. Enjoy!</p>
</div>
<div id="input-date" >
	
	<form method="POST"  id="myform">
		<h5>Start Date</h5>
		<input type="date" name="start-date"><br>
		<h5>End Date</h5>
		<input type="date" name="end-date"><br>
		<input type="submit" value="Generate unique code">
	</form>
<button id="clear">Clear</button>
</div>
<div id="rand-button">
	
</div>

<div id="voucher-section" class="post-box">
	<p id="voucher-post" class="voucher-post"></p>
</div>

</div>



</body>
</html>