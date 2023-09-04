<?php include 'header.php'; ?>


    <!--- about area --->
    <section class="section-area">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-12 col-lg-6">
                    <div class="about-content">
                        <h1>We're Hiring!</h1>
                        <p>We are always looking for talented and motivated individuals to join our team. If you are
                            looking for a challenging and rewarding career, we encourage you to apply for one of our
                            open positions.</p>
                        <p>We offer a competitive salary and benefits package, as well as a positive and supportive work
                            environment. We are committed to providing our employees with the resources and
                            opportunities they need to succeed. If you are interested in learning more about our open
                            positions, please contact us at <b><i>care@olipharma.in</i></b></p>
                    </div>
                    <div class="post-area mt-4">
                        <h5><b>Post:</b></h5>
                        <ul class="career-ui">
                          <li><span class="round"><i class="fa-sharp fa-solid fa-circle"></i></span> Office Staff</li>
                            <li><span class="round"><i class="fa-sharp fa-solid fa-circle"></i></span> Sales Team</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="heading career-heading">
                        <h2>Apply now and join our team!</h2>
                        <p>Fields marked with an asterisk(*) are required</p>
                    </div>
                    <div class="under-line">
                        <hr>
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

                    <form action="<?php echo $link . "/career-mail.php"; ?>" id="query-form" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="custom-label">First Name <span class="star">*</span></label>
                                    <input type="text" class="form-control rounded-0 custom-input" name="first_name" id="" placeholder="Type Your First Name">
                                    <span class="help-block" style="color:#e8ad57;" id="error-first_name"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="custom-label">Last Name <span class="star">*</span></label>
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
                        <span class="help-block" style="color:#e8ad57;" id="error-message"></span>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="file" name="attachment[]" class="custom-file-inputs demoInputBox" multiple="multiple">
                                    <!--<span class="upload-icon"><img src="assets/images/clip-board.png" class="img-fluid" alt="" width="20"></span>-->
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group text-center">
                                    <button class="btn btn-submit" type="submit">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php include 'footer.php'; ?>