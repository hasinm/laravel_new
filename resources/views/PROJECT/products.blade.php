<html>
    <head>
        <title>#shoppin - Products</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
         @import url('https://fonts.googleapis.com/css?family=Quicksand');
        .breadcrumb{
          background-color:	#556B2F;
          margin-left:700px;
        }
        .breadcrumb > li + li:before{
                padding: 0 5px;
                content:"|";
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
            <li><a href="{{url('/project') }}">Home</a></li>
            <li><a href="#">About</a></li>
            <li class="active">Products</li>
            <li><a href="{{url('/contact') }}">Contact</a></li>
        </ol> 
</td>
</tr>
            </table>
            </div>
</div>
              
                <h3>Products</h3>
            
            <div class="col-md-2 col-md-3 col-sm-5">
            <a href="{{ url('/images/Wallpaper.jpg') }}">
            <p>Sunflower</p>
            <img src="{{ url('/images/Wallpaper.jpg') }}"  width="304" height="236">
</a>
            </div>
            <div class="col-md-2 col-md-3 col-sm-5">
            <a href="{{ url('/images/desert.jpg') }}">
            <p>Desert</p>
            <img src="{{ url('/images/desert.jpg') }}"  width="304" height="236">
</a>
            </div>
            <div class="col-md-2 col-md-3 col-sm-5">
            <a href="{{ url('/images/bird.jpg') }}">
            <p>Bird</p>
            <img src="{{ url('/images/bird.jpg') }}"  width="304" height="236">
</a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
            <a href="{{ url('/images/swan.jpg') }}">
            <p>Swan</p>
            <img src="{{ url('/images/swan.jpg') }}"  width="304" height="236">
</a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
            <a href="{{ url('/images/plane.jpg') }}">
            <p>Aeroplane</p>
            <img src="{{ url('/images/plane.jpg') }}"  width="304" height="236">
</a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
            <a href="{{ url('/images/lake.jpg') }}">
            <p>Lake</p>
            <img src="{{ url('/images/lake.jpg') }}"  width="304" height="236">
</a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="{{ url('/images/city.jpg') }}">
            <p>City</p>
            <img src="{{ url('/images/city.jpg') }}"  width="304" height="236">
</a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="{{ url('/images/bikes.jpg') }}">
            <p>Bikes</p>
            <img src="{{ url('/images/bikes.jpg') }}"  width="304" height="236">
</a>
            </div>
      
          </div>
      </div>  
    </body>
</html>