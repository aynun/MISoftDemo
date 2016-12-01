 <?php include('header.php');  ?>
    <!-- ***************** Breadcumb area start ***************** -->
    <section class="breadcumb_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb_section">
                        <!-- Breadcumb page title start -->
                        <div class="page_title">
                            <h3>Checkout</h3>
                        </div>
                        <!-- Breadcumb page pagination start -->
                        <div class="page_pagination">
                            <ul>
                                <li><a href="index-2.php">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***************** Breadcumb area end ***************** -->

    <!-- ***************** Checkout area start ***************** -->
    <section class="checkout_page section_padding_100_70">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Returing Customer and Coupon code -->
                    <div class="re_customer_coupon_code">
                        <h5>Returning customer? <a href="login.php">Click here to login</a></h5>
                        <div class="coupon">
                            <p>Have a coupon? Enter your code.</p>
                            <input type="text" name="coupon_code" class="coupon_code" placeholder="Coupon code">
                            <input type="submit" class="button" name="app_coupon" value="Apply Coupon">
                        </div>
                    </div>
                </div>
            </div>

            <form action="#" method="post">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <!-- Billing Address -->
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <!-- Single Address Field -->
                                <div class="col-sm-6">
                                    <div class="form-field">
                                        <input placeholder="First Name" type="text" required>
                                    </div>
                                </div>
                                <!-- Single Address Field -->
                                <div class="col-sm-6">
                                    <div class="form-field">
                                        <input placeholder="Last Name" type="text" required>
                                    </div>
                                </div>
                                <!-- Single Address Field -->
                                <div class="col-md-12">
                                    <div class="form-field">
                                        <input placeholder="Company Name (Optional)" type="text">
                                    </div>
                                </div>
                                <!-- Single Address Field -->
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input placeholder="Email Address" type="email" required>
                                    </div>
                                </div>
                                <!-- Single Address Field -->
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input placeholder="Phone Number" type="number" required>
                                    </div>
                                </div>
                                <!-- Single Address Field -->
                                <div class="col-md-12">
                                    <div class="country">
                                        <select>
                                            <option value="ban">Bangladesh</option>
                                            <option value="afg">Afghanistan</option>
                                            <option value="usa">United State of America</option>
                                            <option value="uk">United Kingdom</option>
                                            <option value="in">India</option>
                                            <option value="sa">Saudi Arabian</option>
                                            <option value="roc">Republic of Conggo</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Single Address Field -->
                                <div class="col-xs-12">
                                    <div class="form-field">
                                        <input placeholder="Street address" type="text" required>
                                    </div>
                                </div>
                                <!-- Single Address Field -->
                                <div class="col-xs-12">
                                    <div class="form-field">
                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                    </div>
                                </div>
                                <!-- Single Address Field -->
                                <div class="col-xs-12">
                                    <div class="form-field">
                                        <input placeholder="Town / City" type="text">
                                    </div>
                                </div>
                                <!-- Single Address Field -->
                                <div class="col-sm-6">
                                    <div class="form-field">
                                        <input placeholder="State / County" type="text">
                                    </div>
                                </div>
                                <!-- Single Address Field -->
                                <div class="col-sm-6">
                                    <div class="form-field">
                                        <input placeholder="Postcode / Zip" type="text">
                                    </div>
                                </div>
                                <!-- Single Address Field -->
                                <div class="col-md-12">
                                    <div class="form-field crate_account">
                                        <label>Create an account?</label>
                                        <input id="check_box" type="checkbox">
                                    </div>
                                    <div id="cbox_info" class="form-field create_account_text">
                                        <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                        <input placeholder="password" type="password">
                                    </div>
                                </div>
                            </div>

                            <!-- Different Shipping Address -->
                            <div class="different-address">
                                <div class="ship-different-title">
                                    <h3><label>Ship to a different address?</label>
                                       <input id="ship-box" type="checkbox"></h3>
                                </div>
                                <div class="row">
                                    <!-- Single Address Field -->
                                    <div class="col-sm-6">
                                        <div class="form-field">
                                            <input placeholder="First Name" type="text" required>
                                        </div>
                                    </div>
                                    <!-- Single Address Field -->
                                    <div class="col-sm-6">
                                        <div class="form-field">
                                            <input placeholder="Last Name" type="text" required>
                                        </div>
                                    </div>
                                    <!-- Single Address Field -->
                                    <div class="col-md-12">
                                        <div class="form-field">
                                            <input placeholder="Company Name (Optional)" type="text">
                                        </div>
                                    </div>
                                    <!-- Single Address Field -->
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <input placeholder="Email Address" type="email" required>
                                        </div>
                                    </div>
                                    <!-- Single Address Field -->
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <input placeholder="Phone Number" type="number" required>
                                        </div>
                                    </div>
                                    <!-- Single Address Field -->
                                    <div class="col-md-12">
                                        <div class="country">
                                            <select>
                                                <option value="ban">Bangladesh</option>
                                                <option value="afg">Afghanistan</option>
                                                <option value="usa">United State of America</option>
                                                <option value="uk">United Kingdom</option>
                                                <option value="in">India</option>
                                                <option value="sa">Saudi Arabian</option>
                                                <option value="roc">Republic of Conggo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Address Field -->
                                    <div class="col-md-12">
                                        <div class="form-field">
                                            <input placeholder="Street address" type="text" required>
                                        </div>
                                    </div>
                                    <!-- Single Address Field -->
                                    <div class="col-md-12">
                                        <div class="form-field">
                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                        </div>
                                    </div>
                                    <!-- Single Address Field -->
                                    <div class="col-md-12">
                                        <div class="form-field">
                                            <input placeholder="Town / City" type="text">
                                        </div>
                                    </div>
                                    <!-- Single Address Field -->
                                    <div class="col-sm-6">
                                        <div class="form-field">
                                            <input placeholder="State / County" type="text">
                                        </div>
                                    </div>
                                    <!-- Single Address Field -->
                                    <div class="col-sm-6">
                                        <div class="form-field">
                                            <input placeholder="Postcode / Zip" type="text">
                                        </div>
                                    </div>
                                </div>
                                <!-- Order Notes -->
                                <div class="order-notes">
                                    <div class="form-field">
                                        <label>Order Notes</label>
                                        <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12">
                        <div class="order_track">
                            <h3>Your order</h3>
                            <!-- Order table -->
                            <div class="order_table">
                                <table>
                                    <!-- table head -->
                                    <thead>
                                        <tr>
                                            <th class="p_name">Product</th>
                                            <th class="p_total">Total</th>
                                        </tr>
                                    </thead>
                                    <!-- table body -->
                                    <tbody>
                                        <!-- Single item -->
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Women Top's <strong class="p_quantity"> × 1</strong>
                                            </td>
                                            <td class="p_total">
                                                <span class="amount">$20.00</span>
                                            </td>
                                        </tr>
                                        <!-- Single item -->
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Women Top's <strong class="p_quantity"> × 1</strong>
                                            </td>
                                            <td class="p_total">
                                                <span class="amount">$20.00</span>
                                            </td>
                                        </tr>
                                        <!-- Single item -->
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Women Top's <strong class="p_quantity"> × 1</strong>
                                            </td>
                                            <td class="p_total">
                                                <span class="amount">$20.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!-- Table Footer -->
                                    <tfoot>
                                        <tr class="cart_subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">$60.00</span></td>
                                        </tr>
                                        <tr class="shipping_options">
                                            <th>Shipping</th>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <input type="radio">
                                                        <label>
                                                            Flat Rate: <span class="amount">$5.00</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio">
                                                        <label>Free Shipping: $0.00</label>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><span class="amount">$65.00</span></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <!-- payment method accordion -->
                            <div class="payment_method">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <!-- Single payment method -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="One">
                                            <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_one" aria-expanded="false" aria-controls="collapse_one">Direct Bank Transfer</a>
                                        </h4>
                                        </div>
                                        <div aria-expanded="false" id="collapse_one" class="panel-collapse collapse" role="tabpanel" aria-labelledby="One">
                                            <div class="panel-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single payment method -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="Two">
                                            <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_two" aria-expanded="false" aria-controls="collapse_two">Cheque Payment
                                        </a>
                                        </h4>
                                        </div>
                                        <div aria-expanded="false" id="collapse_two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Two">
                                            <div class="panel-body">
                                                <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single payment method -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="Three">
                                            <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_three" aria-expanded="false" aria-controls="collapse_three">PayPal</a>
                                        </h4>
                                        </div>
                                        <div aria-expanded="false" id="collapse_three" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Three">
                                            <div class="panel-body">
                                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- place order button -->
                                <div class="place_order_button">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- ***************** Checkout area end ***************** -->

    <!-- ************** Footer Area Start ************** -->
    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <!-- Footer About Area Start -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="footer_about_us wow fadeInUp" data-wow-delay="0.2s">
                        <div class="title section_heading fo_black">
                            <h4>About <span>bizpro</span></h4>
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