<?php
    include('dbconnection.php');
    if(isset($_REQUEST['signup'])){
        if(($_REQUEST['name'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['mobile'] == "") || ($_REQUEST['pass'] == "")){
            $regmsg = "<script>swal({
                icon: 'warning',
                title : 'All Fields Are Required',
              })
              </script>";
        }else{
            $sql = "SELECT s_email FROM registration WHERE s_email ='".$_REQUEST['email']."'";
            $result = $con->query($sql);
            if($result->num_rows == 1){
                $regmsg = "<script>swal({
                    icon: 'warning',
                    title : 'Email Already Registered',
                  })
                  </script>";
            }else{
                $rName = $_REQUEST['name'];
                $rEmail = $_REQUEST['email'];
                $rPassword = $_REQUEST['pass'];
                $rMobile = $_REQUEST['mobile'];
                $sql = "INSERT INTO registration (s_name,s_email,s_password,s_mobile) VALUES ('$rName','$rEmail','$rPassword','$rMobile')";
                if($con->query($sql) == TRUE){
                    $regmsg = "<script>swal({
                        icon: 'success',
                        title : 'Registration SuccessFull',
                      })
                      </script> 
                      <script>location.href='user.php'</script>";
                      $rName = "";
                      $rEmail = "";
                      $rPassword = "";
                      $rMobile = "";
                }else{
                    $regmsg = "<script>swal({
                        icon: 'error',
                        title : 'Account Can't Created',
                      })
                      </script>";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | Create Account </title>
    <link rel="icon" href="images/redux.svg" type="image/icon">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
    </style>
</head>
<body>

    <div class="main" style="height:645px;">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="mobile" id="re_pass" placeholder="Mobile Number"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>

                        <?php if(isset($regmsg)) {echo $regmsg;}?>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
