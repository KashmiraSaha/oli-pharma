<?php include 'header.php'; ?>

    <!--- breadcrumbs --->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="breadcrumb-content">
                        <h1>CONTACT:</h1>
                        <h2>OLI PHARMA LLP</h2>
                        <p>Off No. 204, 2nd Floor, Plot no. 53, Hasanpur Vill, IP EXT. Delhi-110092</p>
                        <h3>Customer Care: <a href="tel:+918273222225">+91 8273222225</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// breadcrumbs -->

    <!--- contact area --->
    <section class="section-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="heading">
                        <h2>Talk with our team</h2>
                        <p>Fields marked with an asterisk(*) are required</p>
                    </div>
                    <div class="under-line">
                        <hr>
                    </div>
                </div>
            </div>

            <?php


            // Program to display URL of current page.
            if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                $link = "https";
            else
                $link = "http";

            // Here append the common URL characters.
            $link .= "://";

            // Append the host(domain name, ip) to the URL.
            $link .= $_SERVER['HTTP_HOST'];

            // Append the requested resource location to the URL
            $link .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\');


            // print_r($link);

            ?>
            <form action="<?php echo $link . "/contact-mail.php"; ?>" id="query-form" method="post">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="first_name" class="custom-label">First Name <span class="star">*</span></label>
                                    <input type="text" class="form-control rounded-0 custom-input" name="first_name" id="" placeholder="Type Your First Name">
                                    <span class="help-block" style="color:#e8ad57;" id="error-first_name"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="last_name" class="custom-label">Last Name <span class="star">*</span></label>
                                    <input type="text" class="form-control rounded-0 custom-input" name="last_name" id="" placeholder="Type Your Last Name">
                                    <span class="help-block" style="color:#e8ad57;" id="error-last_name"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email" class="custom-label">Email <span class="star">*</span></label>
                                    <input type="email" class="form-control rounded-0 custom-input" name="email" id="" placeholder="Type Your Email ID">
                                    <span class="help-block" style="color:#e8ad57;" id="error-email"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="phone" class="custom-label">Phone Number <span class="star">*</span></label>
                                    <input type="tel" class="form-control rounded-0 custom-input" name="phone" id="" placeholder="Type Your Phone Number">
                                    <span class="help-block" style="color:#e8ad57;" id="error-phone"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="message" class="custom-label">What would you like to discuss <span class="star">*</span></label>
                                    <textarea class="form-control rounded-0 custom-input custom-text-area" name="message" id="" placeholder="Type Your Message Here"></textarea>
                                    <span class="help-block" style="color:#e8ad57;" id="error-message"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-submit" id="send_message">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </section>

    <!--// contact area -->

    <!------ footer ----->
    <?php include 'footer.php'; ?>