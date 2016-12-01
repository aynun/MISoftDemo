    <?php include('header.php');  ?>
    <?php 
    session_start();
    $db=mysqli_connect("localhost", "root", "", "authentication");
    if (isset ($_POST['register_btn'])){
        //session_start();
        $name = mysql_real_escape_string ($_POST['name']);
        $email= mysql_real_escape_string ($_POST['email']);
        $subject= mysql_real_escape_string ($_POST['subject']);
        $quantity= mysql_real_escape_string ($_POST['quantity']);
        $message= mysql_real_escape_string ($_POST['message']);
       
         
            $sql= "INSERT INTO online-order(name, email, subject, quantity, message) VALUES('$name', '$email', 'subject','quantity','message')";
            mysqli_query($db, $sql);
       
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
                            <h3>Register</h3>
                        </div>
                        <!-- Breadcumb page pagination start -->
                        <div class="page_pagination">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>Submit</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***************** Breadcumb area end ***************** -->

    <!-- ***************** Register area start ***************** -->
    <div class="login_area">
        <div class="container">
            <div class="row">
                <!-- Register thumb -->
                <div class="col-xs-12 col-md-5 col-lg-6">
                    <div class="login_thumb">
                        <!--  For better view please add image size: 275px * 550px  -->
                        <img src="img/bg-pattern/quote.jpg" alt="">
                        <!-- Login thumb caption -->
                        <div class="login_thumb_caption">
                            <h3>Submit Now!</h3>
                        </div>
                    </div>
                </div>

                <!-- Register form area start  -->
                <div class="col-xs-12 col-md-7 col-lg-6 section_padding_100">
                    <div class="register_form">
                        <form action="order.php" method="post">
                            <!-- Single Register input area start  -->
                            <div class="form-group">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="name" id="user_name" placeholder="Name">
                            </div>
                            <!-- Single Register input area start  -->
                            <div class="form-group">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <input type="email" name="email" id="email" placeholder="Email">
                            </div>
                               <div class="form-group">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <input type="email" name="subject" id="subject" placeholder="Subject">
                            </div>
                               <div class="form-group">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <input type="quantity" name="quantity" id="quantity" placeholder="quantity">
                            </div>
                                 <div class="form-group">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <input type="message" name="message" id="message" placeholder="message">
                            </div>


                           
                            <!
                            <!-- Single Register input area start  -->
                            <button type="submit" name="register_btn" class="btn btn-default">Submit</button>
                        </form>
                        <div class="forget_pass login">
                            <a href="login.html"><i class="fa fa-user-plus" aria-hidden="true"></i>Already have a account? Login</a>
                        </div>
                    </div>
                </div>
                <!-- Register form area end  -->
            </div>
        </div>
    </div>
    <!-- ***************** Register area end ***************** -->

    <!-- ************** Footer Area Start ************** -->
    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <!-- Footer About Area Start -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="footer_about_us wow fadeInUp" data-wow-delay="0.2s">
                        <div class="title section_heading fo_black">
                            <h4>About <span>MI-Soft BD</span></h4>
                            <!-- Useful Links Title -->
                  
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut delectus consectetur omnis, alias nulla repudiandae quasi non at ullam, vel officiis unde cum ea. Perferendis tempora eligendi aut, repellat eius. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <!-- Footer About Area End -->

                <!-- latest news Area Start -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="footer_upcoming_event wow fadeInUp" data-wow-delay="0.4s">
                        <div class="title section_heading fo_black">
                            <h4>latest <span>post</span></h4>
                 
                        </div>
                        <!-- Single latest post -->
                        <div class="event_single_post">
                            <img src="img/news-img/blog.jpg" alt="">
                            <a href="#">
                                <p>We dream of a sustainable economy where SME is the core.</p>
                            </a>
                        </div>
                        <!-- Single latest post -->
                        <div class="event_single_post">
                            <img src="img/news-img/blog-2.jpg" alt="">
                            <a href="#">
                                <p>We dream of a sustainable economy where SME is the core.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- latest news Area End -->

                <!-- Contact info Area Start -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="footer_contact_info wow fadeInUp" data-wow-delay="0.6s">
                        <div class="title section_heading fo_black">
                            <h4>contact <span>information</span></h4>
                            <!-- Useful Links Title -->
                        
                        </div>
                        <!-- single contact info start -->
                        <div class="footer_single_contact_info">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <p>House - 87, Mirpur DOHS, Dhaka, Bangladesh</p>
                        </div>
                        <!-- single contact info start -->
                        <div class="footer_single_contact_info">
                            <i class="fa fa-phone-square" aria-hidden="true"></i>
                            <a href="tel:+8801791166123">+88 017 911 66123</a>
                            <a href="tel:+8801791166123">+88 017 911 66123</a>
                        </div>
                        <!-- single contact info start -->
                        <div class="footer_single_contact_info">
                            <i class="fa fa-envelope-square" aria-hidden="true"></i>
                            <a href="mailto:info@educamp.com">info@bizpro.com</a>
                            <a href="mailto:care@educamp.com">care@bizpro.com</a>
                        </div>
                    </div>
                </div>
                <!-- Contact info Area End -->

                <!-- Useful Links Area Start -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="important_links wow fadeInUp" data-wow-delay="0.8s">
                        <div class="title section_heading fo_black">
                            <h4>useful <span>links</span></h4>
                            <!-- Useful Links Title -->
                        
                        </div>
                        <!-- Links Start -->
                        <div class="links">
                            <p><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                <a href="#">All Our products</a></p>
                            <p><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                <a href="#">About us</a></p>
                            <p><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                <a href="#">Customer Support</a></p>
                            <p><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                <a href="#">Career at Bizpro</a></p>
                            <p><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                <a href="#">Terms &amp; Conditions</a></p>
                            <p><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                <a href="#">Community Forums</a></p>
                        </div>
                        <!-- Links End -->
                    </div>
                </div>
                <!-- Useful Links Area End -->
            </div>
            <!-- end./ row -->
        </div>
        <!-- end./ container -->

           <?php include('footer.php');  ?>