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
		 <p class = "first">Query is a fast, small, and feature-rich JavaScript library.designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax. It is free, open-source software.jQuery's syntax is designed to make it easier to navigate a document, select DOM elements, create animations, handle events, and develop Ajax applications. jQuery also provides capabilities for developers to create plug-ins on top of the JavaScript library. This enables developers to create abstractions for low-level interaction and animation, advanced effects and high-level, themeable widgets.</p>
		<h2> Document Object Model (DOM)</h2> 
		<p class = "second" id="second">jQuery, at its core, is a Document Object Model (DOM) manipulation library. The DOM is a tree-structure representation of all the elements of a Web page. jQuery simplifies the syntax for finding, selecting, and manipulating these DOM elements. For example, jQuery can be used for finding an element in the document with a certain property (e.g. all elements with an h1 tag), changing one or more of its attributes (e.g. color, visibility), or making it respond to an event (e.g. a mouse click).jQuery also provides a paradigm for event handling that goes beyond basic DOM element selection and manipulation. The event assignment and the event callback function definition are done in a single step in a single location in the code. jQuery also aims to incorporate other highly used JavaScript functionality (e.g. fade ins and fade outs when hiding elements, animations by manipulating CSS properties).</p>
	</div>
    <input type="button" value="slideup" id ="up" />
    <input type="button" value="slidedown" id ="down" />
	<script>
	$(document).ready(function(){
		$("#up").click(function(){
			$("p.first").delay(2000).slideUp().delay(2000).fadeIn();
            $("p#second").delay(2000).slideUp().delay(2000).fadeIn();
		});
        $("#down").click(function(){	
            $("p.first").delay(2000).slideDown().delay(2000).fadeOut();
            $("p#second").delay(2000).slideDown().delay(2000).fadeOut();
		});
	});
</script>
</body>
</html>