<html>
    <head>
        <title>Bootstrap</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        .list-group-item{
            margin-left:30px;
        }
        .list-group-item-heading,.list-group-item-danger{
            margin-left:30px;
        }
        .list-group-item-text{
            margin-left:30px;
        }
        a{
            text-decoration:none;
        }
        .active{
            color:white;
            
        }
        .lenovo{
                color:white;
        }
        .dell{
                color:darkred;
        }
        .badge{
            padding-left:900px;
        }
    </style>
    </head>
    <body>
      <div class="container-fluid">
          <div class="row">
              <div class="col-xs-12">
              <div class="list-group">
                      <li class="list-group-item list-group-item-danger"><a href="{{ url('https://dell.com/') }}" class="dell">DELL</a></li>
                      <li class="list-group-item list-group-item-danger">Laptops</li>
                      <li class="list-group-item list-group-item-danger">Keyboard</li>
                      <li class="list-group-item list-group-item-danger">Speakers</li>
    </div>
                <div class="list-group">
                    <li class="list-group-item list-group-item active"><a href="{{ url('https://lenovo.com/') }}" class="lenovo">LENOVA</a></li>
                    <li class="list-group-item list-group-item active">Laptops</li>
                    <li class="list-group-item list-group-item active">Keyboard</li>
                    <li class="list-group-item list-group-item active">Speakers</li>
    </div>
                <div class="list-group">
                      <li class="list-group-item list-group-item-success"><a href="{{ url('https://samsung.com/') }}" >Samsung</a></li>
                      <li class="list-group-item list-group-item-success">Laptops</li>
                      <li class="list-group-item list-group-item-success">Keyboard</li>
                      <li class="list-group-item list-group-item-success">Speakers</li>
    </div>

                <div class="list-group">
                      <li class="list-group-item list-group-item-info disabled">OPPO<span class="badge">New</span></li>
    </div>
</div>
</div>
</div>
    </body>
    </html>


                    

