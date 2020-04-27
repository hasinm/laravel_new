<html>
<head>
	<title>jquery</title>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src = "jquery-3.3.1.min.js"></script>
</head>

<body>
<div id = "container">
	<div class = "section">
		<h2> jQuery Core</h2>
		 <p class = "first">Query is a fast, small, and feature-rich JavaScript library designed to simplify HTML DOM tree traversal and manipulation, 
         as well as event handling, CSS animation, and Ajax. It is free, open-source software.jQuery's syntax is designed to make it easier to navigate a document, select DOM elements, create animations, handle events, and develop Ajax applications. jQuery also provides capabilities for developers to create plug-ins on top of the JavaScript library. This enables developers to create abstractions for low-level interaction and animation, advanced effects and high-level, themeable widgets.</p>
	</div>
	<label>Mouse over the paragraph</label>
	<script>
	$(document).ready(function(){
        $("p").mouseover(function(){ 
			alert("This a paragraph"); 
		});
        $("p").mouseleave(function(){
            alert("You just leaved a paragraph");
        });
	});
</script>
</body>
</html>