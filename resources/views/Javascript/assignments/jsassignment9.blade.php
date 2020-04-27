<!DOCTYPE html>
<html>
    <head>
    <title>Convert Fahrenheit to Degree Celsius</title>
    </head>
<body>
<button id="clickme" onclick="fahDeg()">click me</button>
<script>
var f = 77;
var c = 5/9*(f-32);
function fahDeg() {
			document.write(c);
		}
</script>
</body>
</html>