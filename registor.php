<?php
include "include/header.php";
?>

<!-- BEGIN: Body-->

<body>
<!-- BEGIN: Content-->               
<br>
<br>
<br>
<br>
<h1 align="center">Signup</h1>
<form action="models/registor_proccess.php" method="post" enctype="multipart/form-data">
        <input type="file" style="display:none;" name="profile" id="profile"><label for="profile" style="margin-left:550px;"><img class="round" src="/assets/images/profile_picture/head-659652_1280.png" height="100" width="100"></label>
            </div>                                                    
            <div class="form-label-group">
                <label for="inputName">User Name</label>
                <input type="text" id="inputName" class="form-control" placeholder="User Name" name="username" required>
            </div>
            <br>
            <div class="form-label-group">
                <label for="inputEmail">Email</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required>
            </div>
            <br>
            <div class="form-label-group">
                <label for="inputPnumber">Phone number</label>
                <input type="text" id="inputPnumber" class="form-control" placeholder="Phone number" name="pnumber" required>
            </div>
            <br>
            <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
            </div>
            <br>
            <div class="form-label-group">
                <label for="inputConfPassword">Confirm Password</label>
                <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirm Password" name="cpassword" required>
            </div>
            <br>
            <!-- <div class="form-group row">
                <div class="col-12">
                    <fieldset class="checkbox">
                        <div class="vs-checkbox-con vs-checkbox-primary">
                            <input type="checkbox" checked>
                            <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                    <i class="vs-icon feather icon-check"></i>
                                </span>
                            </span>
                                <span class=""> I accept the terms & conditions.</span>
                        </div>
                    </fieldset>
                </div>
            </div> -->
            <input type="submit" value="Signup" class="btn btn-primary">
            <p align="center">Already Have Account?<a href="login.php">Login</a></p>
        </form>
    <!-- END: Content-->

<?php
include "include/footer.php";
?>