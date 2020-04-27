<!DOCTYPE html>
<html>

<head>
    <title>My website</title>
</head>
<script>
        function myFunction(e) {
            text_box = document.getElementsByClassName('inputs');
            span_obj = document.getElementsByClassName('message');
            if (text_box[0].value == '') {
                text_box[0].style.borderColor = 'red';
                span_obj[0].innerHTML = '<b>Please enter your First Name&emsp;&emsp;Please enter your Sur name</b>';
                span_obj[0].style.color = 'red';
             }
             
            
             if (text_box[1].value == '') {
                text_box[1].style.borderColor = 'red';
                span_obj[1].innerHTML = '<b>Please enter your mobile number</b>';
                span_obj[1].style.color = 'red';
             }
             
             if (text_box[2].value == '') {
                text_box[2].style.borderColor = 'red';
                span_obj[2].innerHTML = '<b>Please enter your Email id</b>';
                span_obj[2].style.color = 'red';
                
             }
             if (text_box[3].value == '') {
                text_box[3].style.borderColor = 'red';
                span_obj[3].innerHTML = '<b>Please enter your password<b>';
                span_obj[3].style.color = 'red';
             }
             if (text_box[4].value == '') {
                text_box[4].style.borderColor = 'red';
                span_obj[4].innerHTML = '';
                span_obj[4].style.color = '';
             }
             if (text_box[5].checked == false && text_box[6].checked == false) {
                span_obj[5].innerHTML = '<b>Enter your gender<b>';
                span_obj[5].style.color = 'red';   
             }
             return false;
            }
        
    </script>
<body>
<table width="100%" cellspacing="0">
        <tr bgcolor="#3b5998">
            <td width="55%"> <img src="{{ url('/images/fblogo.png') }}" width="220"></td>
            <td style="color: white;padding-left:50px;"> Email or Phone <br><input type="text"></td> <td style="color: white; padding-top:17px;">Password <br> <input type="password"><br><small style="color: #9cb4d8;">Forgotten account?</small></td>
  			      <td style="padding-right:150px;margin-right:50px;"><br><input type="button" value="Log In" style="color:white;font-weight:bold;font-align:center;background-color: #3b5998;border-style:solid;border-width:1px;"></td>
        </tr>
    </table>
        <div style="background-image:linear-gradient(white, lavenderblush);">
        <table>
        <td style="padding-left:30px;"><h4>
        <font face="verdana">Connect with friends and the world<br> around you on Facebook.</font>
        </h4>
         <img src="{{ url('/images/fbconnect.jpg') }}" width="350px" style="padding-left:10px;"></td>
        <td style="padding-left:370px;">
        <h3 style="padding-left:30px;margin-top:30px;"><center>Sign Up</center></h3>
        <p style="padding-left:30px;" class="form-group"><input type="text" placeholder="Firstname" class="inputs" style="padding-right:30px;">&emsp;<input type="text" placeholder="Surname" class="inputs" style="padding-right:30px;"></p>
        <p style="padding-left:30px;"><span class = "message"></span></p>
        <p style="padding-left:30px;"class="form-group"><input type="text" placeholder="Mobile Number" class="inputs" style="padding-right:250px;"></p>
        <p style="padding-left:30px;" class="form-group"><span class = "message"></span></p>
        <p style="padding-left:30px;"class="form-group"><input type="text" placeholder="Email" class="inputs" style="padding-right:250px;"></p>
        <p style="padding-left:30px;" class="form-group"><span class = "message"></span></p>
        <p style="padding-left:30px;" class="form-group"><input type="password" placeholder="password" class="inputs" style="padding-right:250px;"></p>
        <p style="padding-left:30px;" class="form-group"><span class = "message"></span></p>
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
         </select>
         <p style="padding-left:30px;" class="form-group"><span class = "message"></span></p>
         <p style="padding-left:30px;" class="form-group">Gender:<input type="radio" name="radio" class="inputs"><big>&nbsp;Female</big>
         &emsp;<input type= "radio" name="radio" class="inputs"> <big>&nbsp;Male</big> </p>
         <p style="padding-left:30px;" class="form-group"><span class = "message"></span></p>
         <p style="padding-left:30px;" class="form-group"><font color="#666666" face="Verdana,Arial,Helvetica,sans-serif" size="1">By Clicking Sign Up,you agree to our Terms and that you have read our Data Use Policy,<br> including our Cookie Use.</font></p>
        <input type="button" style="font-family:Helvetica, sans-serif;color:white;
         text-align:center;font-size:17px;padding-left:20px;margin-left:25px;padding-right:25px;
         background-image:linear-gradient(#67ae55, #578843);border-radius:5px;width:180px;height:30px;" 
         onclick="return myFunction(this)" value="Sign Up Now"></td>
                    </tr>
            
</td>
            </table>
</body>

</html>