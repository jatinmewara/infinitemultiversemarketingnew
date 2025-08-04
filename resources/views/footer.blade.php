<style>
    .whatsapplink {
        left: 30px;
        bottom: 30px;
        z-index: 99;
        position: fixed;
        height: 60px;
        width: 60px;
        background: #25d366;
        color: white;
        border-radius: 50%;
        box-shadow: 1px 6px 24px 0 rgba(7, 94, 84, .24);
        cursor: pointer;

        display: flex;
        /* Flexbox to center the icon */
        align-items: center;
        /* Vertical center */
        justify-content: center;
        /* Horizontal center */
        text-decoration: none;
        /* Remove underline if any */
        font-size: 40px;
        /* Adjust icon size */
    }

    .contact-head {
        text-align: left;
    }
</style>
<!-- Newsletter Start -->
<div class="container-xxl bg-primary newsletter wow fadeInUp mb4 contact-section" data-wow-delay="0.1s">
    <div class="container px-lg-5 contact-mainbox py-5" style="overflow: hidden;">
        <div class="row align-items-center" style="height: 250px;">
            <div class="col-12 col-md-6 ">
                <h4 class="mainhead-title text-dark contact-head" style="margin-left:0"><span
                        class="mcutext">R</span>eady to <span class="mcutext">g</span>et <span
                        class="mcutext">s</span>tarted</h4>
                <small class="text-dark">Contact us your query, We're here to solve your issues and simplify
                    your digital journey.</small>
                <div class="position-relative w-100 mt-3">
                    <button class="cta-button shield-pulse doomButton"><a href="contact">Contact Us</a></button>
                </div>
            </div>
            <div class="col-md-6 text-center mb-n5 d-none d-md-block position-relative">
                <img class="img-fluid contact-image" src="{{ asset('img/contactuspage.png') }}">
            </div>
        </div>
    </div>
</div>
<!--        <a class="whatsapplink" href="https://web.whatsapp.com/send?phone=917426031390&text=Hi,%20I%20am%20coming%20from%20your%20website." target="_blank">-->
<!--  <i class="fa-brands fa-whatsapp"></i>-->
<!--</a>-->



<!-- Newsletter End -->
<!-- Footer Start -->
<div class="container-fluid bg-primary text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5 footerbox">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <img class="img-fluid footerimg" src="{{ asset('img/logo1.svg') }}">
                <!-- <a href=""><img class="img-fluid" src="img/logo1.svg"></a> -->
                <!-- <p>More Than a Platform - It's a Digital Multiverse</p> -->
            </div>
            <div class="col-md-6 col-lg-4">
                <h5 class="text-white mb-4">Follow IMM</h5>
                <!-- <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p> -->
                <p><i class="fa fa-phone-alt me-3"></i>+91 1234567890</p>
                <p><i class="fa fa-envelope me-3"></i>contact@infinitemultiversemarketing.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" target="blank" href="https://x.com/Marketinginfy"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" target="blank"
                        href="https://www.facebook.com/infinitemultiversemarketing/"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" target="blank"
                        href="https://www.youtube.com/@InfiniteMultiverseMarketing"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" target="blank"
                        href="https://www.instagram.com/infinitemultiversemarketing?igsh=MWltbjdmeTdkZGdndw=="><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" target="blank"
                        href="https://www.linkedin.com/company/infinite-multiverse-marketing/?viewAsMember=true"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <h5 class="text-white mb-4">Quick Link</h5>
                <a class="btn btn-link" href="/">Home</a>
                <a class="btn btn-link" href="about">About</a>
                <a class="btn btn-link" href="contact">Contact</a>
            </div>
            <div class="col-md-6 col-lg-2">
                <h5 class="text-white mb-4">Services</h5>
                <a class="btn btn-link" href="Affiliate-Marketing">Affiliate Marketing</a>
                <a class="btn btn-link" href="services">Services</a>
                <a class="btn btn-link" href="blogs">Blog</a>
                <!-- <a class="btn btn-link" href="">Content Marketing</a> -->
                <!-- <a class="btn btn-link" href="">Development</a> -->
            </div>

        </div>
    </div>
    <div class="container px-lg-5">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                    <script>
                        document.write("Copyright © " + new Date().getFullYear() + " Infinite Multiverse Marketing. All Right Reserved");
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/avanger.js') }}"></script>