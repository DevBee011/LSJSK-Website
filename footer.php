<?php include ('server.php')?>
<!-- Footer -->
<section class="page-footer font-small mdb-color lighten-3 pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
                <h5 class="font-weight-bold text-uppercase mb-4"><span class="ls">SUBSCRIBE</span></h5>
                <form action="footer.php" method="POST">
                <div class="form-group">
                    <label for="validationTooltip01">Your Full Name</label>
                    <input type="text" class="form-control" name="fullName" id="validationTooltip01" placeholder="Enter Your Full Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Your Email Address</label>
                    <input type="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter Your Email Address" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group form-check">
                </div>
                    <a href="index.php"><button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button></a>
                </form>
            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mb-4"><span class="menu"><span class="menu">Menu</span></h5>

                <ul class="list-unstyled">
                    <li>
                        <p>
                            <a href="index.php"><span class="home">HOME</span></a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href="aboutus.php"><span class="about">ABOUT US</span></a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href="Jobs.php"><span class="jobs">JOBS</span></a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href="blog.php"><span class="blog">BLOG</span></a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href="contact.php"><span class="contact">CONTACT US</span></a>
                        </p>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

                <!-- Contact details -->
                <h5 class="font-weight-bold text-uppercase mb-4 joja"><span class="address">Address</span></h5>

                <ul class="list-unstyled">
                    <li>
                        <p>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> NAIROBI, NBI 00100, KE</p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-envelope" aria-hidden="true"></i> david@augusta.co.ke</p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i> +254 742 345 628</p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-phone" aria-hidden="true"></i> +254 713 143 099</p>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                <!-- Social buttons -->
                <h5 class="font-weight-bold text-uppercase mb-4"><span class="media">Social Media</span></h5>
                    <div class="social-icons">
                        <a href="http://localhost/LifeSkillsT/index.php"><img src="assets/images/facebook.png"></a><br>
                        <br><a href="http://localhost/LifeSkillsT/blog.php"><img src="assets/images/twitter.png"></a></br><br>
                        <a href="http://localhost/LifeSkillsT/aboutus.php"><img src="assets/images/instagram.png"></a>
                    </div>
                </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <Section>
        <a class="gotopbtn" href="#"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
        <!-----scroll up button----->
        <div class="footer-copyright text-center py-3"><span class="copyright">© 2019 Copyright:</span>
        <a href="http://localhost/lifeskillst/"><span class="futa">LSJSK.COM</span></a>
    </div>
</section>
    <!-- Copyright -->
    <!------------FIND US ON SOCIAL MEDIA------------------------>



    <!------------FIND US ON SOCIAL MEDIA------------------------>


</footer>

<!-- Footer -->
<!---------------------smooth scroll ----------------------->
<script src="smooth-scroll.js"></script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]');
</script>
<!-------smooth scroll------->



</body>
</html>