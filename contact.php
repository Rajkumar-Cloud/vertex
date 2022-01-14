    <?php 
        $title= "Vertex :: Contact Us";
        $description = "Vertex - Network Solution";
        $keywords= "Vertex - Network Solution";
        include("header.php"); 
        include("menu.php"); 
    ?>

<main class="main-root">
        <div id="dsn-scrollbar">
            <div class="main-content">

                <!-- ========== Header Normal ========== -->

                <header
                    class="header-page over-hidden p-relative header-padding-top header-padding-bottom dsn-header-animation">
                    <div class="bg-circle-dotted"></div>
                    <div class="dsn-container">
                        <div
                            class="content-hero p-relative d-flex align-items-center text-center flex-column h-100 dsn-hero-parallax-title">
                            <p class="subtitle p-relative line-shap  ">
                                <span class="pl-10 pr-10 background-section dsn-load-animate">Be touch with</span>
                            </p>
                            <h1 class="title mt-20 dsn-load-animate">Contact Us</h1>
                        </div>
                    </div>
                </header>
                <!-- ========== End Header Normal ========== -->


                <div class="wrapper">

                    <div class="container root-contact">
                        <div class="full-width">
                            <!-- <div class="map-custom p-absolute w-100 h-100" data-dsn-lat="24.999010" data-dsn-len="55.171750" data-dsn-zoom="14"> </div> -->
                            <iframe class="map-custom p-absolute w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d31065161.461728968!2d49.398180964609814!3d18.111603652506062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d13.036854799999999!2d80.2676463!4m5!1s0x3e5f728ca5ad27d1%3A0x83f8b86e6a48c938!2sOffice%20331%2C%20Schon%20Business%20Park%2C%20Dubai%20Investment%20Park(DIP)%2C%20Dubai%2C%20U.A.E!3m2!1d24.9852982!2d55.1754769!5e0!3m2!1sen!2sin!4v1641821778971!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="box-contact-inner section-margin">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="form-box">
                                        <div class="line line-top"></div>
                                        <div class="line line-bottom"></div>
                                        <div class="line line-left"></div>
                                        <div class="line line-right"></div>

                                        <div class="mb-30 d-flex text-left flex-column align-items-start">
                                            <p class="sub-heading line-shap line-shap-before mb-15">
                                                <span class="line-bg-right">Stay connected</span>
                                            </p>
                                            <h2 class="section-title  title-cap">
                                                Get in Touch
                                            </h2>
                                        </div>
                                        <p class="mb-30">
                                            It’s all about the humans behind a brand and those experiencing it,
                                            we’re right there. In the middle.
                                        </p>

                                        <form id="contact-form" class="form" method="post" action="contact.php"
                                            data-toggle="validator">
                                            <div class="messages"></div>
                                            <div class="input__wrap controls">
                                                <div class="form-group">
                                                    <div class="entry-box">
                                                        <label>Your name *</label>
                                                        <input id="form_name" type="text" name="name"
                                                            placeholder="Type your name" required="required"
                                                            data-error="name is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="entry-box">
                                                        <label>Your E-Mail *</label>
                                                        <input id="form_email" type="email" name="email"
                                                            placeholder="Type your Email Address" required="required"
                                                            data-error="Valid email is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="entry-box">
                                                        <label>What's up?</label>
                                                        <textarea id="form_message" class="form-control" name="message"
                                                            placeholder="Tell us about you and the world"
                                                            required="required"
                                                            data-error="Please,leave us a message."></textarea>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="text-right">
                                                    <div class="image-zoom w-auto d-inline-block" data-dsn="parallax">
                                                        <button type="submit" class="dsn-button ">
                                                            <span class="dsn-border border-color-default"></span>
                                                            <span class="text-button">Send Message</span>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="box-info-contact">

                                        <ul>
                                            <li>
                                                <h5 class="title-block mb-15">Contact</h5>
                                                <p class="text-p">+971 50 5603188</p>
                                                <div class="over-hidden mt-5">
                                                    <a class="link-hover" data-hover-text="waris@vertexinfo.ae" href="mainto:waris@vertexinfo.ae">waris@vertexinfo.ae</a>
                                                </div>
                                            </li>
                                            <li>
                                                <h5 class="title-block mb-15">Address</h5>
                                                <p class="text-p">Office 331, Schon Bussiness Park,<br>Dubai Investment Park(DIP),<br>
                                                Dubai, U.A.E</p>
                                            </li>
                                            <!-- <li>
                                                <h5 class="title-block mb-15">Follow Us</h5>
                                                <div class="social-item over-hidden">
                                                    <a class="link-hover" data-hover-text="Instagram." href="#"
                                                        target="_blank" rel="nofollow">Instagram.</a>
                                                </div>
                                                <div class="social-item over-hidden">
                                                    <a class="link-hover" data-hover-text="Facebook." href="#"
                                                        target="_blank" rel="nofollow">Facebook.</a>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


    <?php include('footer.php'); ?>