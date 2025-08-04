<!DOCTYPE html>
<html lang="en">
@include('header')
    <link rel="stylesheet" href="{{asset('css/new.css')}}">
    <link rel="stylesheet" href="{{asset('css/affmar.css')}}">
<style>
    .custom-alert {
        padding: 15px 20px;
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        position: relative;
        margin-bottom: 20px;
        font-size: 16px;
    }

    .custom-alert .close-btn {
        position: absolute;
        top: 8px;
        right: 12px;
        color: #155724;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
    }

    .custom-alert .close-btn:hover {
        color: #0b2e13;
    }
    
    .alert {
        display: flex;
        align-items: center;
        padding: 0.55rem 0.65rem 0.55rem 0.75rem;
        border-radius: 1rem;
        min-width: 400px;
        justify-content: space-between;
        margin-bottom: 2rem;
        box-shadow:
            0px 3.2px 13.8px rgba(0, 0, 0, 0.02),
            0px 7.6px 33.3px rgba(0, 0, 0, 0.028),
            0px 14.4px 62.6px rgba(0, 0, 0, 0.035),
            0px 25.7px 111.7px rgba(0, 0, 0, 0.042),
            0px 48px 208.9px rgba(0, 0, 0, 0.05),
            0px 115px 500px rgba(0, 0, 0, 0.07)
    }

    .content {
        display: flex;
        align-items: center;
    }

    .icon {
        padding: 0.5rem;
        margin-right: 1rem;
        border-radius: 39% 61% 42% 58% / 50% 51% 49% 50%;
        box-shadow:
            0px 3.2px 13.8px rgba(0, 0, 0, 0.02),
            0px 7.6px 33.3px rgba(0, 0, 0, 0.028),
            0px 14.4px 62.6px rgba(0, 0, 0, 0.035),
            0px 25.7px 111.7px rgba(0, 0, 0, 0.042),
            0px 48px 208.9px rgba(0, 0, 0, 0.05),
            0px 115px 500px rgba(0, 0, 0, 0.07)
    }

    .close {
        background-color: transparent;
        border: none;
        outline: none;
        transition: all 0.2s ease-in-out;
        padding: 0;
        border-radius: 0.5rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .close:hover {
        background-color: #fff;
    }

    .success {
        background-color: rgb(62 189 97);
        border: 2px solid #3ebd61;
    }

    .success .icon {
        background-color: #3ebd61;
    }

    .danger {
        background-color: rgb(236 77 43);
        border: 2px solid #EC4D2B;
    }

    .danger .icon {
        background-color: #EC4D2B;
    }

    .alertbox {
        width: auto;
        position: fixed;
        top: 20px;
        z-index: 1110;
        right: 1rem;
    }

    .alertmsg {
        margin: 0;
        color: white;
        font-weight: bold;
        font-size: 19px;
        font-family: math;
    }
    .form-control{
        background: #151515;
    }
    .contactback{
        background-color: #151515 !important;
    }
    .selectfield{
            background: #151515;
    padding: 1rem .75rem !important;

    }
</style>
@error('name')
    <div class="danger alert alertbox">
        <div class="content">
            <p class="alertmsg">{{ $message }}</p>
        </div>
        <button class="close">
            <svg height="18px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512"
                width="18px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="#FFFFFF"
                    d="M437.5,386.6L306.9,256l130.6-130.6c14.1-14.1,14.1-36.8,0-50.9c-14.1-14.1-36.8-14.1-50.9,0L256,205.1L125.4,74.5  c-14.1-14.1-36.8-14.1-50.9,0c-14.1,14.1-14.1,36.8,0,50.9L205.1,256L74.5,386.6c-14.1,14.1-14.1,36.8,0,50.9  c14.1,14.1,36.8,14.1,50.9,0L256,306.9l130.6,130.6c14.1,14.1,36.8,14.1,50.9,0C451.5,423.4,451.5,400.6,437.5,386.6z" />
            </svg>
        </button>
    </div>
@enderror
@if(session('success'))
    <div class="success alert alertbox">
        <div class="content">
            <p class="alertmsg">{{ session('success') }}</p>
        </div>
        <button class="close">
            <svg height="18px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512"
                width="18px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="#FFFFFF"
                    d="M437.5,386.6L306.9,256l130.6-130.6c14.1-14.1,14.1-36.8,0-50.9c-14.1-14.1-36.8-14.1-50.9,0L256,205.1L125.4,74.5  c-14.1-14.1-36.8-14.1-50.9,0c-14.1,14.1-14.1,36.8,0,50.9L205.1,256L74.5,386.6c-14.1,14.1-14.1,36.8,0,50.9  c14.1,14.1,36.8,14.1,50.9,0L256,306.9l130.6,130.6c14.1,14.1,36.8,14.1,50.9,0C451.5,423.4,451.5,400.6,437.5,386.6z" />
            </svg>

        </button>
    </div>
@endif

<body>
    <div class="container-xxl contactback p-0">
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <div class="container-xxl py-5 bg-primary contact-banner mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="section-title"><span class="mcutext">C</span>ontact <span class="mcutext">U</span>s</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3"
                                placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5" style="justify-content: space-between;align-items: center;">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <!-- Name Field -->
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                        <div id="nameError" class="text-danger small mt-1"></div>
                                    </div>

                                    <!-- Email Field -->
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email (optional)</label>
                                        </div>
                                        <div id="emailError" class="text-danger small mt-1"></div>
                                    </div>

                                    <!-- Mobile Field -->
                                    <!--<div class="col-12">-->
                                    <!--    <div class="form-floating">-->
                                    <!--        <input type="tel" class="form-control" name="mobile" placeholder="Mobile">-->
                                    <!--        <label for="mobile">Mobile (optional)</label>-->
                                    <!--    </div>-->
                                    <!--    <div id="mobileError" class="text-danger small mt-1"></div>-->
                                    <!--</div>-->

                                    <!-- Service Select -->
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select class="form-select selectfield" name="service">
                                                <option value="" disabled selected>Select Service</option>
                                                <option value="Digital Strategy & Consulting">Digital Strategy &
                                                    Consulting</option>
                                                <option value="Search Engine Optimization (SEO)">Search Engine
                                                    Optimization (SEO)</option>
                                                <option value="Pay-Per-Click (PPC) Advertising">Pay-Per-Click (PPC)
                                                    Advertising</option>
                                                <option value="Social Media Marketing (SMM)">Social Media Marketing
                                                    (SMM)</option>
                                                <option value="Content Marketing">Content Marketing</option>
                                                <option value="Web Design & Development">Web Design & Development
                                                </option>
                                                <option value="Email & SMS Marketing">Email & SMS Marketing</option>
                                                <option value="Marketing Automation & CRM">Marketing Automation & CRM
                                                </option>
                                                <option value="Video Marketing & Production">Video Marketing &
                                                    Production</option>
                                                <option value="Influencer & Affiliate Marketing">Influencer & Affiliate
                                                    Marketing</option>
                                                <option value="Analytics & Data Insights">Analytics & Data Insights
                                                </option>
                                                <option value="Reputation Management & Crisis Control">Reputation
                                                    Management & Crisis Control</option>
                                            </select>
                                        </div>
                                        <div id="serviceError" class="text-danger small mt-1"></div>
                                    </div>

                                    <div class="col-12">
                                        <button class="w-100 py-3 cta-button shield-pulse doomButton" style="margin:0" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/contact1.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        @include('footer')
        <script>
            function validateForm() {
                let isValid = true;

                // Clear previous errors
                document.getElementById("nameError").innerText = "";
                document.getElementById("emailError").innerText = "";
                document.getElementById("mobileError").innerText = "";
                document.getElementById("serviceError").innerText = "";

                const name = document.getElementById("name").value.trim();
                const email = document.getElementById("email").value.trim();
                const mobile = document.getElementById("mobile").value.trim();
                const service = document.getElementById("service").value;

                if (name === "") {
                    document.getElementById("nameError").innerText = "Please enter your name.";
                    isValid = false;
                }

                if (email === "" && mobile === "") {
                    document.getElementById("emailError").innerText = "Email or Mobile is required.";
                    document.getElementById("mobileError").innerText = "Email or Mobile is required.";
                    isValid = false;
                }

                if (mobile !== "") {
                    const mobilePattern = /^[0-9]{10}$/;
                    if (!mobilePattern.test(mobile)) {
                        document.getElementById("mobileError").innerText = "Enter a valid 10-digit mobile number.";
                        isValid = false;
                    }
                }

                if (email !== "") {
                    const emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
                    if (!emailPattern.test(email)) {
                        document.getElementById("emailError").innerText = "Enter a valid email address.";
                        isValid = false;
                    }
                }

                if (service === "") {
                    document.getElementById("serviceError").innerText = "Please select a service.";
                    isValid = false;
                }

                return isValid;
            }
        </script>
        <script>
            $(".close").click(function () {
                $(this).parent().fadeOut();
            });

            // Auto remove after 3 seconds
            setTimeout(function () {
                $(".alertbox").fadeOut();
            }, 3000);
        </script>
</body>

</html>