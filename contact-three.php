     <?php include('header.php');  ?>

    <!-- ***************** Breadcumb area start ***************** -->
    <section class="breadcumb_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb_section">
                        <!-- Breadcumb page title start -->
                        <div class="page_title">
                            <h3>Contact</h3>
                        </div>
                        <!-- Breadcumb page pagination start -->
                        <div class="page_pagination">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***************** Breadcumb area end ***************** -->

    <!-- ***************** Message Now Area Start ***************** -->
    <section class="message_now_area contact_three">
        <div class="map_contact_address_area contact-3">
            <!-- Map Area Start -->
            <div class="map_area" id="googleMap"></div>
        </div>
        <div class="container">
            <div class="row section_padding_100">
                <div class="col-xs-12 col-sm-7 col-md-8">
                    <!-- Message Title -->
                    <div class="message_title">
                        <h3>Drop us a line</h3>
                    </div>
                    <div class="contact_from_three">

                        <form action="http://demo.designing-world.com/bizpro-v2/mail.php" method="post" id="main_contact_form">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div id="success_fail_info"></div>
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name *" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail *" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject *" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="number" id="number" placeholder="Your Number *" required>
                                        </div>
                                    </div>

                                    <!-- Single Input Area Start -->
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Your Message *" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-4">
                    <!-- Message Title -->
                    <div class="message_title">
                        <h3>Find us</h3>
                    </div>
                    <!-- Adress Area -->
                    <div class="address-area">
                        <div class="single_part">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <p>House - 87, Mirpur DOHS,</p>
                            <p>Dhaka, Bangladesh</p>
                        </div>
                        <div class="single_part">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:+8801791166123">+88 017 911 66123</a>
                            <a href="tel:+8801791166123">+88 017 911 66123</a>
                        </div>
                        <div class="single_part">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <a href="mailto:info@educamp.com">info@bizpro.com</a>
                            <a href="mailto:care@educamp.com">care@bizpro.com</a>
                        </div>
                        <div class="single_part">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <p>Sun - Wed 10:00am - 05.00pm</p>
                            <p>Thu 10:00am - 02.00pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***************** Message Now Area Start ***************** -->
     <?php include('footer.php');  ?>