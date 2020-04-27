<html>
    <head>
        <title>Project</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <style>
        @import url('https://fonts.googleapis.com/css?family=Quicksand');
        .wrapper {
  height: 100%;
  font-family: 'Quicksand', sans-serif;
  line-height: 1.5;
  word-spacing: 4px;
  letter-spacing: 1px;
}

.fixed-bg {
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  height: 100%; 
  width: 100%;
  color: white;
  text-align: center;
  display: table;
}

.fixed-bg h1 {
  display: table-cell;
  vertical-align: middle;
}

.scroll-bg {
  background-color: #0f0f0a;
  padding: 10px 70px;
  color: #676767;
}

/* first section */

.bg-1 {
  background-image: url('/images/project/cloth.jpg');
}

/* third section */

.bg-2 {
  background-image: url('/images/project/books.jpg');
}

/* fifth section */

.bg-3 {
  background-image: url('/images/project/gadgets.jpg');
}
body{
  background-image: url('/images/project/stay.jpg');
}
        
        .breadcrumb{
          background-color:	#556B2F;
          margin-left:700px;
        }
        .breadcrumb > li + li:before{
                padding: 0 5px;
                content:"|";
            }
        .textfield{
          text-align:center;
          background-image:url('/images/project/bg.jpg');
          margin-top:100px;
        }
        .center{
          display: block;
          margin-left: auto;
          margin-right: auto;
          
        }
        a{
          text-decoration:none;
          color: #9cb4d8;
        }
        marquee{
          font-size:50px;
          background-repeat: no-repeat;
          margin-left:30px;
        }
      </style>
      </head>
    <body>
      <div class="container-fluid">
      <div class="row">
                <div class="col-lg-12" style="background-color:	#556B2F;">
                <table width="100%" cellspacing="0">
  	            <tr>
                  <td><h1 class="fixed-bg">#shoppin</h1> </td>
                <td>
                    <ol class = "col-lg-12 breadcrumb">
            <li class="active">Home</li>
            <li><a href="#">About</a></li>
            <li><a href="{{url('/products') }}">Products</a></li>
            <li><a href="{{url('/contact') }}">Contact</a></li>
        </ol> 
</td>
</tr>
            </table>
            </div>
</div>
<div class="textfield">
<marquee behavior="alternate"><h3 style="margin-top:10px;padding-right:100px;width: 50%;color:MediumSeaGreen;font-family:Quicksand;">&emsp;&emsp;WELCOME  TO  BIG#OPPIN  EXPERIENCE !</h3></marquee>
         </div>
         <div class="wrapper"> <!-- wrapper div starts -->
  
  <div class="fixed-bg bg-1">
    <h1><a href="{{url('/clothing') }}">Fashion</h1>
  </div>
  
  <div class="scroll-bg">
    <h3>Pose in your Hashtags</h3>
  </div>
  
  <div class="fixed-bg bg-2">
    <h1>Books</h1>
  </div>
  
  <div class="scroll-bg">
    <h3>Post with your Hashtags</h3>
  </div>
  
  <div class="fixed-bg bg-3">
    <h1>Gadgets</h1>
  </div>
  <div class="scroll-bg">
    <h3>Watch with the World</h3>
  </div>
</div>
</div>
</html>
