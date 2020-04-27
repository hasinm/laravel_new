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
            <div class="col-xs-12" style="margin-left:30px;">
                <form>
                    <div class="form-group">
                        <label for="inputUserName"><b>Name</b></label>
                        <input class="form-control" type="text" id="inputUserName" placeholder="Login Username" style="padding-right:800px;"/>
                    </div>
                    <div class="form-group">
                        <label for="inputDOB"><b>Date of Birth</b></label>
                        <input class="form-control" type="text" id="inputPassword"  placeholder="dd-mm-yyyy"/>
                    </div>
                    <div class="form-group">
                        <label for="inputSex"><b>Sex</b></label><br>
                        <label class="radio-inline">
                            <input type="radio" name="radioGroup" value="1" />Male
                        </label>
                        <label class="radio-inline">
                            &emsp;<input type="radio" name="radioGroup" value="2" />Female
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="inputCountry"><b>Country</b></label>
                        <input class="form-control" type="text" id="inputUserCountry" placeholder="China" style="padding-right:1000px;"/>
                    </div>
                    <div class="form-group">
                        <label for="inputUserName"><b>Email</b></label>
                        <input disabled class="form-control" type="text" id="inputUserEmail" placeholder="Email address" style="padding-right:1000px;"/>
                    </div>
                    <div class="form-group">
                        <label for="inputUserExperience"><b>Experience</b></label>
                        <input readonly class="form-control" type="text" id="inputUserExperience" placeholder="Total Experience" style="padding-right:1000px;"/>
                    </div>
                    <div class="form-group">
                        <label for="inputUserWebsite"><b>Personal Website</b></label>
                        <input class="form-control" type="text" id="inputUserWebsite" placeholder="Website address" style="padding-right:1000px;"/>
                    </div>
                    <div class="form-group">
                        <label for="inputUserWebsite"><b>About</b></label>
                        <input class="form-control" type="textarea" id="inputUserWebsite"  style="padding-right:800px;padding-bottom:50px;"/>
                    </div>
                        <button type="submit" style="background-color:royalblue">Register</button>
                </form>
                </div>
          </div>
      </div>  
    </body>
</html>