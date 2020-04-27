<!DOCTYPE html>
<html>

<head>
    <title>My website</title>
</head>

<body>
    <table width="100%" cellspacing="0">
        <tr bgcolor="#3b5998">
            <td width="55%"> <img src="{{ url('/images/fblogo.png') }}" width="220"></td>
            <td align="left"> Username : <input type="text"> Password : <input type="password">
                <input type="button" value="login">
            </td>
        </tr>
        <tr bgcolor="#edf0f5" height="600px">
            <td valign="top" align="center"><br><br>
                <table border="0" width="80%">
                    <tr>
                        <td>
                            <h2>
                                <font face="verdana">Connect with friends and the world around you on Facebook.</font>
                            </h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <font face="verdana"><br>
                                <img src="{{ url('/images/book.png') }}" height="35" width="30">&nbsp;&nbsp;See photos and updates from friends in News Feed.<br><br>
                                <img src="{{ url('/images/share.png') }}" height="35" width="30">&nbsp;&nbsp;Share what's new in your life on your Timeline.<br><br>
                                <img src="{{ url('/images/graph.png') }}" height="40" width="30">&nbsp;&nbsp;Find more of what you are looking for with Graph Search.
                                <br><br>
                            </font>
                        </td>
                    </tr>
                </table>
            </td>

            <td valign="top" align="center">
                <h1>Sign Up</h1>
                <table border="0" cellspacing="10">
                    <tr>
                        <td><input type="text" placeholder="First Name" style="height: 30px" size="20"></td>
                        <td align="left"><input type="text" placeholder="Last Name" style="height: 30px" size="30"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" size="60" placeholder="Mobile Number" style="height: 40px"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" size="60" placeholder="Email" style="height: 40px"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="password" size="60" placeholder="Password" style="height: 40px"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <font color="#666666" face="Verdana,Arial,Helvetica,sans-serif" size="1">By Clicking Sign Up,you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</font>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2"><img src="{{ url('/images/signup.png') }}" width="180"></td>
                    </tr>
            </td>
            </table>
</body>

</html>