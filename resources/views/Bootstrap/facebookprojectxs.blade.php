<html>
    <head>
        <title>Bootstrap</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <style>
        .textfield{
          text-align:center;
          background-color:#edf0f5;
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
      </style>
      </head>
    <body>
      <div class="container-fluid">
      <div class="row">
                <div class="col-lg-12" style="background-color:#3b5998;">
                <table width="100%" cellspacing="0">
  	            <tr margin-left="550px">
                  <td width="100%" > <img src="{{ url('/images/fblogo.png') }}" width="220" margin-left="500px;" class="center"></td>
                </tr>
            </table>
            </div>
</div>
<div class="textfield">
      <input type="text" placeholder="Email address or phone number" style="padding-right:100px;width: 70%;"><br>
      <input type="password" placeholder="Password" style="padding-right:100px;width: 70%;margin-top:5px;"><br>
       <input type="button" style="font-family:Helvetica, sans-serif;color:white;font-weight:bolder;
         text-align:center;font-size:17px;padding-right:140px;padding-left:140px;padding-top:3px;margin-top:5px;
         padding-bottom:3px;background-color:#3b5998;border-radius:5px;" value="Log In"><br><br>
      <input type="button" style="font-family:Helvetica, sans-serif;color:white;font-weight:bolder;
         text-align:center;font-size:17px;padding-left:20px; padding-right:20px;padding-top:10px;
         padding-bottom:10px;background-color:royalblue;border-radius:5px;" value="Create New Account">
         <br><small><a href="#">Forgotten password? Help Centre</a></small>
         </div>
</div>
</html>
