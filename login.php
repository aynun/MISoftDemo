 <?php include('header.php'); ?>
 <?php 
    session_start();
$db=mysqli_connect("localhost", "root", "", "authentication");
    if (isset ($_POST['login_btn'])){
        //session_start();
        $username = mysql_real_escape_string ($_POST['username']);
       
        $password= mysql_real_escape_string ($_POST['password']);
    
       $password = md5($password);
        $sql = "SELECT * FROM registration WHERE username= '$username' AND password= '$password'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result)== 1){
            $_SESSION['message']= "You are logged in";
            $_SESSION['username']= $username;
           header("location: reg_com.php");
        }
        else{
            $_SESSION['message']= "Username/password combination incorrect"; 
        }
    }

  ?>








    <!-- ***************** Breadcumb area start ***************** -->
    <section class="breadcumb_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb_section">
                        <!-- Breadcumb page title start -->
                        <div class="page_title">
                            <h3>sign in</h3>
                        </div>
                        <!-- Breadcumb page pagination start -->
                        <div class="page_pagination">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>sign in</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***************** Breadcumb area end ***************** -->

    <!-- ***************** login area start ***************** -->
    <section class="login_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-5 col-lg-6">
                    <!-- login thumb start -->
                    <div class="login_thumb">
                       <!--  For better view please add image size: 275px * 550px  -->
                        <img src="img/bg-pattern/quote.jpg" alt="">
                        <!-- login thumb caption -->
                        <div class="login_thumb_caption">
                            <h3>Welcome Back!</h3>
                        </div>
                    </div>
                    <!-- login thumb end -->
                </div>

                <div class="col-xs-12 col-md-7 col-lg-6 section_padding_100">
                    <!-- login form start -->
                    <div class="login_form">
                       
                        <!-- sign in facebok -->
                        <div class="sign_in_facebook">
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i>Sign in with Facebook</a>
                        </div>
                        
                        <!-- sign in twitter -->
                        <div class="sign_in_twitter">
                            <a href="https://www.facebook.com/"><i class="fa fa-twitter"></i>Sign in with Twitter</a>
                        </div>
                        
                        <!-- sign in manual form -->
                        <div class="login_manual_form">
                            <p>or</p>
                        <div class="forget_pass">
                        <a href="index3.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Login Here</a>
                        <a href="register.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Didn't have a account? Register</a>
                        </div>
                        </div>
                    </div>
                    <!-- login form end -->
                </div>

            </div>
        </div>
    </section>
    <!-- ***************** login area end ***************** -->
 
    <?php include('footer.php'); ?>