<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Class 5</title>
</head>
<body>
	
	<input type="text" name="" placeholder="width" id="width"><br>
	<input type="text" name="" placeholder="height" id="height"><br>
	<input type="text" name="" placeholder="background" id="background">

	<button type="button" onclick="show()">Click Here</button>

	<div id="output"></div>

	<script type="text/javascript">
		
		function show()
		{
			var w = document.querySelector("#width").value;
			var h = document.querySlelector("#height").value;
			var b = document.querySelector("#background").value;

			var o = document.querySlelector("#output");

			o.style.width = w+"px";
			o.style.height = h+"px";
			o.style.background = b;
		}
	</script>


</body>
</html>