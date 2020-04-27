<html>
<head>
	<title>jquery</title>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
</head>
    <style>
    .box{
        height:50px;
        width:220px;
        background: purple;
        color:white;
        border: solid 4px red;
        line-height:100px;
        margin:100px auto 0;
        opacity : 0.5;
    }
    </style>
    <script type="text/javascript">
		$(document).ready(function(){
			$("#right").click(function(){
				$("div").animate({right: "250px"});
            });
        });
    </script>
</head>
<body>

<div class="box"></div>

<button id ="right"> move the box </button>

</body>
</html>
<body>



