<html>
    <head>
        <title>Bootstrap</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
      <div class="container-fluid">
      <div class="row">
                <div class="col-sm-6" style="background-color:#3b5998;">
                <table width="100%" cellspacing="0">
  	            <tr>
                  <td width="55%"> <img src="{{ url('/images/fblogo.png') }}" width="220"></td>
                </tr>
            </table>
            </div>
            <div class="col-sm-6" style="background-color: #3b5998;">
            <table width="100%">
  	            <tr> 
                  <td style="color: white;padding-left:50px;"> Email or Phone <br><input type="text"></td> <td style="color: white; padding-top:17px;">Password <br> <input type="password"><br><small style="color: #9cb4d8;">Forgotten account?</small></td>
  			      <td style="padding-right:150px;margin-right:50px;"><br><input type="button" value="Log In" style="color:white;font-weight:bold;font-align:center;background-color: #3b5998;border-style:solid;border-width:1px;"></td>
                </tr></table>
            </div>

            <div class="col-sm-6" style="background-image:linear-gradient(white, lavenderblush);">
        <h3 style="padding-left:50px;margin-top:50px;color:#3b5998">Facebook helps you connect and
         share with the people in your life.</h3>
         <img src="{{ url('/images/fbconnect.jpg') }}" width="625px" style="padding-left:50px;" class="img-responsive">
         <a href="{{url('/bootstrap2/') }}" style="font-size:10px;">*view2</a>
        </div>
        <div class="col-sm-6" style="background-image:linear-gradient(white,lavenderblush);">
        <h3 style="padding-left:30px;margin-top:30px;">Create an account</h3>
        <h6 style="padding-left:30px;">It's free and always will be</h6><br>
        <p style="padding-left:30px;" class="form-group"><input type="text" placeholder="Firstname">&emsp;<input type="text" placeholder="Surname"></p>
        <p style="padding-left:30px;padding-right:40px;"class="form-group"><input type="text" placeholder="Mobile number or email address" style="padding-right:195px;"></p>
        <p style="padding-left:30px;" class="form-group"><input type="password" placeholder="New password" style="padding-right:195px;"></p>  
        <p style="padding-left:30px;" class="form-group"><b>Birthday</b></p> 
        <p style="padding-left:30px; color:#3b5998;" class="form-group"><select name="Day">
         	<option value="d" selected>Day</option>
         	<option value="d1">1-10</option>
         	<option value="d2">11-20</option>
         	<option value="d3">21-31</option>
         </select><select name="Month">
         	<option value="m" selected>Month</option>
         	<option value="m1">Jan</option>
         	<option value="m2">Feb</option>
         	<option value="m3">Mar</option>
         	<option value="m4">Apr</option>
         	<option value="m5">May</option>
         	<option value="m6">Jun</option>
         	<option value="m7">Jul</option>
         	<option value="m8">Aug</option>
         	<option value="m9">Sep</option>
         	<option value="m10">Oct</option>
         	<option value="m11">Nov</option>
         	<option value="m12">Dec</option>
         </select><select name="Year">
         	<option value="y" selected>Year</option>
         	<option value="y1">1990+</option>
         	<option value="y2">2000+</option>
         </select><small>&nbsp;Why do I need to provide my date of birth?</small></p>
         <p style="padding-left:30px;" class="form-group"><input type="radio" name="radio"><big>&nbsp;Female</big>
         &emsp;<input type= "radio" name="radio"> <big>&nbsp;Male</big> </p>
         <p style="padding-left:30px;" class="form-group"><small style="color: #777;">By clicking Create an account, 
         you agree to our <span style = "color:blue"> Terms </span>and<br> confirm that you have read
         our <span style = "color:blue">Data Policy, </span> including our<br>  <span style = "color:blue">Cookie Use Policy</span>
         you may receive SMS message notifications<br> from Facebook and can opt out at any time.</small></p>
         <p><input type="button" style="font-family:Helvetica, sans-serif;color:white;
         text-align:center;font-size:17px;padding-left:20px; margin-left:25px; padding-right:25px;
         background-image:linear-gradient(#67ae55, #578843);border-radius:5px;width:180px;height:30px;" value="Create an account">
         </p>
         <p style="padding-left:30px; color: #777;"><span style = "color:blue"><b> Create a page </span>  
         for a celebrity, band or business</b></p>
         <p style="font-size:10px;">*minimize full screen window to experience the responsiveness property</p>
    </div>

</div>
</body>
</html>