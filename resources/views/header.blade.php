<head>
    <meta charset="utf-8">
    <title>Digital Marketing</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="google-site-verification" content="VvkMuOI-IRIGerqJ1_f-84nwo_Lhxyy4WJSFvWQPVw8" />

    <!-- Favicon -->
    <link href="{{ asset('img/logo1.svg') }}" rel="icon" type="image/svg+xml">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{asset('lib/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('lib/lightbox/css/lightbox.min.css')}}">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">



</head>

<!-- Spinner Start -->
<!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
<!-- Spinner End -->



<style>
    /* Reset and Base Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        line-height: 1.6;
        background-color: #f5f5f5;
    }

    /* Header Container */
    .apex-header-container {
        background-color: #1a1a1a;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .apex-header-wrapper {
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 2rem;
        height: 70px;
    }

    /* Brand Section */
    .apex-brand-section {
        display: flex;
        align-items: center;
        z-index: 1001;
    }

    .apex-logo-container {
        width: 70px;
        cursor: pointer;
    }

    .apex-logo-text {
        color: white;
        font-size: 1.5rem;
        font-weight: 700;
        letter-spacing: -0.5px;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    /* Desktop Navigation */
    .apex-navigation-desktop {
        display: flex;
        align-items: center;
    }

    .apex-nav-list {
        display: flex;
        list-style: none;
        gap: 0.5rem;
        align-items: center;
    }

    .apex-nav-item {
        position: relative;
    }

    .apex-nav-link {
        color: #e2e8f0;
        text-decoration: none;
        padding: 0.75rem 1.25rem;
        font-size: 0.95rem;
        font-weight: 500;
        border-radius: 6px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .apex-nav-active {
        color: #f6ad55 !important;
        position: relative;
    }

    .apex-nav-active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 30px;
        height: 2px;
        background: linear-gradient(90deg, #f6ad55, #ed8936);
        border-radius: 2px;
        animation: apex-glow-pulse 2s ease-in-out infinite alternate;
    }

    @keyframes apex-glow-pulse {
        0% {
            box-shadow: 0 0 5px rgba(246, 173, 85, 0.5);
        }

        100% {
            box-shadow: 0 0 15px rgba(246, 173, 85, 0.8);
        }
    }

    /* Mobile Toggle Button */
    .apex-mobile-toggle {
        display: none;
        flex-direction: column;
        background: none;
        border: none;
        cursor: pointer;
        padding: 0.5rem;
        z-index: 1001;
        transition: all 0.3s ease;
    }

    .apex-hamburger-line {
        width: 25px;
        height: 3px;
        background-color: #e2e8f0;
        margin: 3px 0;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 2px;
    }

    .apex-mobile-toggle.apex-menu-open .apex-hamburger-line:nth-child(1) {
        transform: rotate(45deg) translate(9px, 9px);
    }

    .apex-mobile-toggle.apex-menu-open .apex-hamburger-line:nth-child(2) {
        opacity: 0;
        transform: translateX(-20px);
    }

    .apex-mobile-toggle.apex-menu-open .apex-hamburger-line:nth-child(3) {
        transform: rotate(-45deg) translate(9px, -9px);
    }

    /* Mobile Navigation */
    .apex-navigation-mobile {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background-color: #1a1a1a;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        transform: translateY(-100%);
        opacity: 0;
        visibility: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .apex-navigation-mobile.apex-mobile-menu-open {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }

    .apex-mobile-nav-list {
        list-style: none;
        padding: 1rem 0;
    }

    .apex-mobile-nav-item {
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .apex-mobile-nav-item:last-child {
        border-bottom: none;
    }

    .apex-mobile-nav-link {
        display: block;
        color: #e2e8f0;
        text-decoration: none;
        padding: 1rem 2rem;
        font-size: 1rem;
        font-weight: 500;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .apex-mobile-nav-link::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 0;
        height: 100%;
        background: linear-gradient(90deg, rgba(246, 173, 85, 0.1), rgba(246, 173, 85, 0.05));
        transition: width 0.3s ease;
    }

    .apex-mobile-nav-link:hover::before {
        width: 100%;
    }

    .apex-mobile-nav-link:hover {
        color: #f6ad55;
        background-color: rgba(246, 173, 85, 0.05);
        padding-left: 2.5rem;
    }

    .apex-mobile-nav-active {
        color: #f6ad55 !important;
        background-color: rgba(246, 173, 85, 0.1);
        border-left: 3px solid #f6ad55;
    }

    /* Demo Content */
    .apex-demo-content {
        margin-top: 70px;
        padding: 4rem 2rem;
        text-align: center;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }

    .apex-demo-content h1 {
        font-size: 2.5rem;
        color: #2d3748;
        margin-bottom: 1rem;
        font-weight: 700;
    }

    .apex-demo-content p {
        font-size: 1.1rem;
        color: #4a5568;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .apex-header-wrapper {
            padding: 0 1rem;
            height: 60px;
        }

        .apex-navigation-desktop {
            display: none;
        }

        .apex-mobile-toggle {
            display: flex;
        }

        .apex-logo-container {
            width: 45px;
            height: 45px;
        }

        .apex-logo-text {
            font-size: 1.3rem;
        }

        .apex-demo-content {
            margin-top: 60px;
            padding: 2rem 1rem;
        }

        .apex-demo-content h1 {
            font-size: 2rem;
        }
    }

    @media (max-width: 480px) {
        .apex-header-wrapper {
            padding: 0 0.75rem;
        }

        .apex-logo-container {
            width: 40px;
            height: 40px;
        }

        .apex-logo-text {
            font-size: 1.2rem;
        }

        .apex-mobile-nav-link {
            padding: 0.875rem 1.5rem;
            font-size: 0.95rem;
        }

        .apex-demo-content h1 {
            font-size: 1.75rem;
        }

        .apex-demo-content p {
            font-size: 1rem;
        }
    }

    /* Smooth scrolling for anchor links */
    html {
        scroll-behavior: smooth;
    }


    /* Reduced motion for users who prefer it */
    @media (prefers-reduced-motion: reduce) {
        * {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
    }

    .navicon {
        max-width: 4.4rem;
        height: auto;
    }
</style>
<div class="apex-header-container">
    <div class="apex-header-wrapper">
        <!-- Logo Section -->
        <div class="apex-brand-section">
            <div class="apex-logo-container">
                <a href="/" style="display: contents;"><img class="navicon" src="{{ asset('img/logo1.svg') }}"></a>
            </div>
        </div>

        <!-- Desktop Navigation -->
        <nav class="apex-navigation-desktop">
            <ul class="apex-nav-list">
                <li class="apex-nav-item">
                    <a href="{{ url('/') }}"
                        class="apex-nav-link {{ request()->is('/') ? 'apex-nav-active' : '' }}">Home</a>
                </li>
                <li class="apex-nav-item">
                    <a href="about"
                        class="apex-nav-link {{ request()->is('about') ? 'apex-nav-active' : '' }}">About</a>
                </li>
                <li class="apex-nav-item">
                    <a href="Affiliate-Marketing"
                        class="apex-nav-link {{ request()->is('Affiliate-Marketing') ? 'apex-nav-active' : '' }}">Affiliate</a>
                </li>
                <li class="apex-nav-item">
                    <a href="services"
                        class="apex-nav-link {{ request()->is('services') ? 'apex-nav-active' : '' }}">Services</a>
                </li>
                <li class="apex-nav-item">
                    <a href="blogs"
                        class="apex-nav-link {{ request()->is('blogs') ? 'apex-nav-active' : '' }}">Blogs</a>
                </li>
                <li class="apex-nav-item">
                    <a href="contact"
                        class="apex-nav-link {{ request()->is('contact') ? 'apex-nav-active' : '' }}">Contact</a>
                </li>
            </ul>
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"><button class="cta-button shield-pulse doomButton">Login</button></a>
                    @endauth
                </nav>
            @endif
        </nav>

        <!-- Mobile Menu Toggle -->
        <button class="apex-mobile-toggle" aria-label="Toggle mobile menu">
            <span class="apex-hamburger-line"></span>
            <span class="apex-hamburger-line"></span>
            <span class="apex-hamburger-line"></span>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <nav class="apex-navigation-mobile">
        <ul class="apex-mobile-nav-list">
            <li class="apex-mobile-nav-item">
                <a href="/"
                    class="apex-mobile-nav-link {{ request()->is('/') ? 'apex-mobile-nav-active' : '' }}">Home</a>
            </li>
            <li class="apex-mobile-nav-item">
                <a href="about"
                    class="apex-mobile-nav-link {{ request()->is('about') ? 'apex-mobile-nav-active' : '' }}">About</a>
            </li>
            <li class="apex-mobile-nav-item">
                <a href="Affiliate-Marketing"
                    class="apex-mobile-nav-link {{ request()->is('Affiliate-Marketing') ? 'apex-mobile-nav-active' : '' }}">Affiliate</a>
            </li>
            <li class="apex-mobile-nav-item">
                <a href="services"
                    class="apex-mobile-nav-link {{ request()->is('services') ? 'apex-mobile-nav-active' : '' }}">Services</a>
            </li>
            <li class="apex-mobile-nav-item">
                <a href="blogs"
                    class="apex-mobile-nav-link {{ request()->is('blogs') ? 'apex-mobile-nav-active' : '' }}">Blogs</a>
            </li>
            <li class="apex-mobile-nav-item">
                <a href="contact"
                    class="apex-mobile-nav-link {{ request()->is('contact') ? 'apex-mobile-nav-active' : '' }}">Contact</a>
            </li>
        </ul>
    </nav>
</div>
<script>
    // Professional Header JavaScript
    class ApexHeaderController {
        constructor() {
            this.mobileToggle = document.querySelector('.apex-mobile-toggle');
            this.mobileNav = document.querySelector('.apex-navigation-mobile');
            this.header = document.querySelector('.apex-header-container');
            this.navLinks = document.querySelectorAll('.apex-nav-link, .apex-mobile-nav-link');

            this.init();
        }

        init() {
            this.bindEvents();
            this.handleScroll();
        }

        bindEvents() {
            // Mobile menu toggle
            if (this.mobileToggle) {
                this.mobileToggle.addEventListener('click', () => this.toggleMobileMenu());
            }

            // Close mobile menu when clicking on links
            this.navLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    if (link.classList.contains('apex-mobile-nav-link')) {
                        this.closeMobileMenu();
                    }
                    this.setActiveLink(e.target);
                });
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.apex-header-container')) {
                    this.closeMobileMenu();
                }
            });

            // Handle window resize
            window.addEventListener('resize', () => {
                if (window.innerWidth > 768) {
                    this.closeMobileMenu();
                }
            });

            // Handle scroll for header effects
            window.addEventListener('scroll', () => this.handleScroll());

            // Handle keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    this.closeMobileMenu();
                }
            });
        }

        toggleMobileMenu() {
            const isOpen = this.mobileNav.classList.contains('apex-mobile-menu-open');

            if (isOpen) {
                this.closeMobileMenu();
            } else {
                this.openMobileMenu();
            }
        }

        openMobileMenu() {
            this.mobileToggle.classList.add('apex-menu-open');
            this.mobileNav.classList.add('apex-mobile-menu-open');
            document.body.style.overflow = 'hidden';

            // Add staggered animation to menu items
            const menuItems = this.mobileNav.querySelectorAll('.apex-mobile-nav-item');
            menuItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(-20px)';

                setTimeout(() => {
                    item.style.transition = 'all 0.3s ease';
                    item.style.opacity = '1';
                    item.style.transform = 'translateX(0)';
                }, index * 50);
            });
        }

        closeMobileMenu() {
            this.mobileToggle.classList.remove('apex-menu-open');
            this.mobileNav.classList.remove('apex-mobile-menu-open');
            document.body.style.overflow = '';

            // Reset menu items
            const menuItems = this.mobileNav.querySelectorAll('.apex-mobile-nav-item');
            menuItems.forEach(item => {
                item.style.transition = '';
                item.style.opacity = '';
                item.style.transform = '';
            });
        }

        setActiveLink(clickedLink) {
            // Remove active class from all links
            document.querySelectorAll('.apex-nav-active, .apex-mobile-nav-active').forEach(link => {
                link.classList.remove('apex-nav-active', 'apex-mobile-nav-active');
            });

            // Add active class to clicked link
            if (clickedLink.classList.contains('apex-nav-link')) {
                clickedLink.classList.add('apex-nav-active');

                // Also update mobile nav
                const text = clickedLink.textContent;
                const mobileLink = Array.from(document.querySelectorAll('.apex-mobile-nav-link'))
                    .find(link => link.textContent === text);
                if (mobileLink) {
                    mobileLink.classList.add('apex-mobile-nav-active');
                }
            } else if (clickedLink.classList.contains('apex-mobile-nav-link')) {
                clickedLink.classList.add('apex-mobile-nav-active');

                // Also update desktop nav
                const text = clickedLink.textContent;
                const desktopLink = Array.from(document.querySelectorAll('.apex-nav-link'))
                    .find(link => link.textContent === text);
                if (desktopLink) {
                    desktopLink.classList.add('apex-nav-active');
                }
            }
        }

        handleScroll() {
            const scrollY = window.scrollY;

            // Add shadow and background blur on scroll
            if (scrollY > 10) {
                this.header.style.backgroundColor = 'rgba(26, 26, 26, 0.95)';
                this.header.style.backdropFilter = 'blur(10px)';
                this.header.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.2)';
            } else {
                this.header.style.backgroundColor = '#1a1a1a';
                this.header.style.backdropFilter = 'none';
                this.header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
            }
        }
    }

    // Initialize the header controller when DOM is loaded
    document.addEventListener('DOMContentLoaded', () => {
        new ApexHeaderController();
    });

    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>