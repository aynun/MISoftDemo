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
    <section class="message_now_area contact_two section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Message Title -->
                    <div class="message_title">
                        <h3>Write to us now!</h3>
                    </div>
                </div>
            </div>
            <!-- .end row -->
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="map_contact_address_area">
                        <!-- Map Area Start -->
                        <div class="map_area" id="googleMap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8676.953153442428!2d90.38428404847342!3d23.882192216000842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c46c9cffc89d%3A0xa99540922938cb2d!2sAsset+Brookhaven%2C+11+Rd+No.+10%2C+Dhaka+1230!5e0!3m2!1sen!2sbd!4v1479764321028" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <form action="#" method="post" id="main_contact_form">
                        <!-- Message Input Area Start -->
                        <div class="contact_input_area">
                            <div id="success_fail_info"></div>
                            <div class="row">
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="u_name" id="name" placeholder="Your Name *" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="u_email" id="email" placeholder="Your E-mail *" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subj" id="subj" placeholder="Your Subject *" required>
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
            <!-- .end row -->
        </div>
        <!-- .end container -->
    </section>
    <!-- ***************** Message Now Area Start ***************** -->
 
               
     <?php include('footer.php');  ?>