<!DOCTYPE html>
<html>
<head>
	<title>15</title>
	<style>
		.txtbx,.lstnm{
			padding-left: 310px;
		}
		.txtbx,.txtbx1,.lstnm{
			color: #191970;
		}
		h2 {
			color: #008080;
		}
		.titlebox1{
			padding-right: 60px;
		}

		
	</style>
</head>
<body bgcolor="#B0E0E6">
	<table cellspacing="0" width="1330px">
        <tr bgcolor="white">
            <th align="left"><font color="blue">PERSONAL INFORMATION</font></th>
                <th colspan="4" align="right"><small>All fields are mandatory</small></th>
                </tr>
            </table>
            <table>
            <tr>
            	<form name="form1" action="#" method="get">
            	<td class="txtbx1"><br>First Name:&emsp;</td>
            	<td><br><input type="text" name="name"></td>
            	<td class="lstnm"><br>Last Name:&emsp;</td>
            	<td class="txtbx"><br><input type="text" name="lname" required></td>
			</tr>
			<tr>
            	<td class="txtbx1"><br>Email:&emsp;</td>
            	<td><br><input type="text" name="email"></td>
            	<td class="lstnm"><br>Tel Number:&emsp;</td>
            	<td class="txtbx"><br><input type="number" name="tnum"></td>
			</tr>
			<tr>
            	<td class="txtbx1"><br>Mobile Number:&emsp;</td>
            	<td><br><input type="text" name="mobile"></td>
            	<td class="lstnm"><br>City:&emsp;</td>
            	<td class="txtbx"><br><input type="number" name="city"></td>
			</tr>
			<tr>
            	<td class="txtbx1"><br>State:&emsp;</td>
            	<td><br><input type="text" name="name"></td>
            	<td class="lstnm"><br>Gender:&emsp;</td>
            	<td class="txtbx"><br><input type="radio" name="radio">Male
                <input type= "radio" name="radio">Female</td>
			</tr>
			<tr>
            	<td class="txtbx1"><br>Date Of Birth:&emsp;</td>
            	<td><br><select name="Day">
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
         </select></td>
            	<td class="lstnm"><br>Emergency Contact Number:&emsp;</td>
            	<td class="txtbx"><br><input type="number" name="ecn"></td>
			</tr>
			<tr>
            	<td class="txtbx1"><br>Name:&emsp;</td>
            	<td><br><input type="text" name="name1"></td>
            	<td class="lstnm"><br>Relationship:&emsp;</td>
            	<td class="txtbx"><br><input type="text" name="rltn"></td>
			</tr>
			<tr>
            	<td class="txtbx1"><br>Mobile Number:&emsp;</td>
            	<td><br><input type="text" name="mobile"></td>
			</tr>
        </table>
			<tr>
			<td><h2>STEP 2</h2></td>
            </tr>
            <table cellspacing="0" width="1330px">
            <tr bgcolor="white">
            <th class="titlebox1" align="left"><font color="blue">OTHER DETAILS</font></th>
  				<th colspan="4" align ="right"><small>All fields are mandatory</small></th>
  				</tr>
  				<tr>
  					<td class="txtbx1"><br>Employment Details:&emsp;
            	<br><td class="txtbx1"><br><input type="radio" name="radio">Public Sector 
                </td>
                <td class="txtbx1"><br><input type= "radio" name="radio">Self Employed
                    <input type= "radio" name="radio">Student
                <input type= "radio" name="radio">Others</td>
			</tr>
            <tr>
                    <td class="txtbx1"><br>Annual Family Income:&emsp;</td>
                <td class="txtbx1"><br><input type="radio" name="radio1">50,000
                </td>
                <td class="txtbx1"><br><input type= "radio" name="radio1">50,000-1,000,00
                    <input type="radio" name="radio1">1 Lakh - 5 Lakh
                <input type= "radio" name="radio1">5 Lakh - 10 Lakh
                <input type= "radio" name="radio1">Above 10 Lakh</td>
            </tr>
            <tr>
                    <td class="txtbx1"><br>Education:&emsp;</td>
                <td class="txtbx1"><br><input type="radio" name="radio2">High School</td>
                <td class="txtbx1"><br><input type= "radio" name="radio2">Graduate</td>
                <td class="txtbx1"><br><input type="radio" name="radio2">Post Graduate
                <input type= "radio" name="radio2">Professional
                <input type= "radio" name="radio2">Others</td>
            </tr>
            <tr>
                <td class="txtbx1"><br>I own the following:&emsp;</td>
                <td class="txtbx1"><br><input type="checkbox" id="chkbx" name="vehicle1" value="Car">
  <label for="vehicle1"> Car</label>
  <input type="checkbox" id="chkbx1" name="creditc" value="Car">
  <label for="creditc"> Credit Card</label></td>
  <td class="txtbx1"><br><input type="checkbox" id="chkbx2" name="mobile" value="Car">
  <label for="vehicle3"> Mobile Phone</label></td>
  <td class="txtbx1"><br><input type="checkbox" id="chkbx2" name="insp" value="Car">
	<label for="vehicle3"> Insurance Policy</label></td>
<td class="txtbx1"><br><input type="checkbox" id="chkbx4" name="clubm" value="Boat">
  <label for="vehicle3"> Club Membership</label></td></tr>
  <td class="txtbx1">Cycling Experience:&emsp;</td>
                <td class="txtbx1"><input type="checkbox" id="chkbx" name="regular" value="regular">
  <label for="regular"> I am a Regular Cyclist</label></td>
  <td class="txtbx1"><input type="checkbox" id="chkbx1" name="part" value="part">
  <label for="part"> I am a part of cycling club</label></td>
</tr><tr>
  <td class="txtbx1"><br>Name of the Cycling Club:&emsp;</td>
                <td class="txtbx1"><br><input type="text" name="cyclub"></td>
</tr>
</table>
<tr>
            <td><h2>STEP 3</h2></td>
            </tr>
            <table cellspacing="0" width="1330px">
            <tr bgcolor="white">
            <th align="left"><font color="blue">MEDICAL CONDITION</font></th>
            <th colspan="5" align ="right"><small>All fields are mandatory</small></th>
            </tr>
  			</table>

</body>
</html>