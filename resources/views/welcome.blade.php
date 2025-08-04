<!DOCTYPE html>
<html lang="en">
@include('header')
<link href="https://fonts.cdnfonts.com/css/marvel" rel="stylesheet" />
<link href="https://fonts.cdnfonts.com/css/neue-machina" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
<link rel="stylesheet" href="{{asset('css/new.css')}}" />
<style>
    .contact-main {
        background: #0a0a0a;
    }

    .contact-section-new {
        background: #0a0a0a;
        padding-bottom: 5rem !important;
        width: 90%;
        margin: auto;
    }

    .join-agency-hero-description-wrapper {
        display: flex;
        justify-content: space-around;
        align-items: flex-start;
    }

    .join-agency-hero-title-container {
        flex: 1;
        max-width: 800px;
    }

    .join-agency-large-creative-headline {
        font-size: 72px;
        font-weight: 300;
        line-height: 1.1;
        margin: 0;
    }

    .join-agency-green-highlighted-word {
        color: #9ef01a;
        font-weight: 400;
    }

    .join-agency-right-side-description-area {
        flex: 1;
        max-width: 400px;
        padding-top: 20px;
    }

    .join-agency-community-description-text {
        font-size: 18px;
        line-height: 1.6;
        color: #cccccc;
        font-weight: 400;
    }

    .join-agency-social-media-cards-row {
        display: flex;
        gap: 40px;
        margin-top: auto;
        padding: 1rem;
        flex-wrap: wrap;
        justify-content: center;
    }

    .join-agency-interactive-social-platform-card {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 25px;
        display: flex;
        align-items: center;
        gap: 24px;
        min-width: 380px;
        transition: all 0.3s ease;
        cursor: pointer;
        text-decoration: none;
        color: inherit;
    }

    .join-agency-interactive-social-platform-card:hover {
        background: rgba(255, 255, 255, 0.06);
        border-color: rgb(236 29 36 / 17%);
        transform: translateY(-4px);
    }

    .join-agency-circular-green-social-icon {
        width: 64px;
        height: 64px;
        background: #ec1d24;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 28px;
        font-weight: bold;
        flex-shrink: 0;
    }

    .join-agency-twitter-x-symbol {
        font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    }

    .join-agency-linkedin-in-text {
        font-size: 24px;
        font-weight: 700;
    }

    .join-agency-instagram-camera-emoji {
        font-size: 32px;
    }

    .join-agency-social-platform-details {
        flex: 1;
    }

    .join-agency-social-call-to-action-title {
        font-size: 15px;
        font-weight: 600;
        margin-bottom: 8px;
        line-height: 1.2;
    }

    .join-agency-social-username-handle {
        color: #888888;
        font-size: 14px;
        font-weight: 400;
    }

    .link-object {
        display: flex !important;
    }

    .contact-head {
        font-size: 60px;
        line-height: 1.1;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: white;
    }

    .join-agency-circular-arrow-button-wrapper {
        width: 48px;
        height: 48px;
        border: 4px solid rgba(255, 255, 255, 0.15);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    .join-agency-diagonal-up-arrow-symbol {
        color: #ffffff;
        font-size: 20px;
        transform: rotate(45deg);
        font-weight: 300;
    }

    .join-agency-interactive-social-platform-card:hover .join-agency-circular-arrow-button-wrapper {
        border-color: #ec1d2461;
    }

    .join-agency-interactive-social-platform-card:hover .join-agency-diagonal-up-arrow-symbol {
        color: #ec1d24;
    }

    /* Responsive Media Queries */
    @media (max-width: 1400px) {
        .join-agency-dark-landing-page {
            padding: 40px 60px;
        }

        .join-agency-large-creative-headline {
            font-size: 64px;
        }

        .join-agency-social-media-cards-row {
            flex-direction: column;
            gap: 24px;
        }

        .join-agency-interactive-social-platform-card {
            min-width: auto;
        }
    }

    @media (max-width: 1024px) {
        .join-agency-hero-description-wrapper {
            flex-direction: column;
            gap: 60px;
        }

        .join-agency-large-creative-headline {
            font-size: 56px;
        }
    }

    @media (max-width: 768px) {
        .join-agency-dark-landing-page {
            padding: 30px 40px;
        }

        .join-agency-large-creative-headline {
            font-size: 48px;
        }

        .join-agency-interactive-social-platform-card {
            padding: 24px;
            min-width: auto;
        }
    }

    @media (max-width: 480px) {
        .join-agency-dark-landing-page {
            padding: 20px;
        }

        .join-agency-large-creative-headline {
            font-size: 36px;
        }

        .join-agency-community-description-text {
            font-size: 16px;
        }
    }
</style>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <div class="container-xxl py-5 bg-primary hero-header bannerimage">
                <div class="container my-5 py-5 px-lg-5 mainhead">
                    <div class="row g-5 py-5 mt-4">
                        <div class="col-lg-8 text-center text-lg-start">
                            <span></span>
                            <h2 class="section-title">
                                <span class="mcutext">I</span>nfinite
                                <span class="mcutext">M</span>ultiverse
                                <span class="mcutext">M</span>arketing
                            </h2>
                            <p class="text-white pb-3 animated zoomIn">
                                Unlock Infinite Digital Possibilities: Our Digital Multiverse
                                platform empowers your business beyond marketing
                            </p>
                            <button class="cta-button shield-pulse doomButton">
                                Contact Us
                            </button>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7)">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px">
                            <input type="text" class="form-control bg-transparent border-light p-3"
                                placeholder="Type search keyword" />
                            <button class="btn btn-light px-4">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->
        <div class="detail-head">
            <h4 class="mainhead-title text-dark">
                <span class="mcutext">E</span>very <span class="mcutext">B</span>rand
                Has a <span class="mcutext">U</span>niverse — Let’s
                <span class="mcutext">B</span>uild <span class="mcutext">Y</span>ours
            </h4>
            <p class="subhead-title text-dark">
                At Infinite Multiverse Marketing, we combine Marvel style creativity
                with data-driven digital marketing strategies including SEO, paid ads,
                SMM, ORM, PPC, and app marketing to deliver powerful, multichannel
                growth across every online platform.
            </p>
        </div>

        <section class="why-choose-us">
            <div class="particles" id="particles-js"></div>

            <div class="container contact90">
                <div class="section-header">
                    <h4 class="mainhead-title">
                        <span class="mcutext">W</span>hy Choose
                        <span class="mcutext">I</span>nfinite Multiverse
                        <span class="mcutext">M</span>arketing
                    </h4>
                    <p class="section-subtitle">
                        At Infinite Multiverse Marketing, we combine Marvel-style
                        creativity with data-driven digital marketing strategies—including
                        SEO, paid ads, SMM, ORM, PPC, and app marketing—to deliver
                        powerful, multichannel growth across every online platform.
                    </p>
                </div>

                <div class="benefits-grid">
                    <div class="benefit-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="benefit-icon">
                            <img class="mcuicon" src="img/mcu/team.png" alt="" />
                        </div>
                        <h3 class="benefit-title">Captain -Level Leadership</h3>
                        <p class="benefit-description">
                            At Infinite Multiverse Marketing, we lead like Captain America —
                            with precision, purpose, and powerful digital strategy. From SEO
                            that ranks to app install campaigns that scale, we guide your
                            brand to the front of the digital battlefield.
                        </p>
                    </div>

                    <div class="benefit-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="benefit-icon">
                            <img class="mcuicon" src="img/mcu/iron.png" alt="" />
                        </div>
                        <h3 class="benefit-title">Stark Industries Technology</h3>
                        <p class="benefit-description">
                            Just like Stark, we build smarter. Our AI-powered marketing
                            systems, predictive analytics, and cross-platform tactics boost
                            your SEO, supercharge installs, and scale fast. No guesswork.
                            Just genius.
                        </p>
                    </div>

                    <div class="benefit-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="benefit-icon">
                            <img class="mcuicon" src="img/mcu/strange.png" alt="" />
                        </div>
                        <h3 class="benefit-title">Open Your Brand’s Portal</h3>
                        <p class="benefit-description">
                            Channel Doctor Strange’s multiverse mastery—our team conjures
                            limitless creative campaigns that stop the scroll, spark
                            engagement, and reshape your brand’s destiny across every
                            digital universe.
                        </p>
                    </div>

                    <div class="benefit-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="benefit-icon">
                            <img class="mcuicon" src="img/mcu/spidy.png" alt="" />
                        </div>
                        <h3 class="benefit-title">Web-Wide Reach</h3>
                        <p class="benefit-description">
                            Like Spider-Man swinging through every skyline, we connect your
                            brand across platforms — App Store, Play Store, Meta, YouTube &
                            X . Expect sticky strategies that capture, convert, and climb
                            rankings fast.
                        </p>
                    </div>

                    <div class="benefit-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="benefit-icon">
                            <img class="mcuicon" src="img/mcu/dead.png" alt="" />
                        </div>
                        <h3 class="benefit-title">Clickpool your Brand</h3>
                        <p class="benefit-description">
                            Like Deadpool, we're unpredictable—but effective. Our custom
                            digital marketing strategies are as bold and sharp as Wade
                            Wilson’s wit. Built for your brand, not the masses.
                        </p>
                    </div>

                    <div class="benefit-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="benefit-icon">
                            <img class="mcuicon" src="img/mcu/thor.png" alt="" />
                        </div>
                        <h3 class="benefit-title">Thunder Results</h3>
                        <p class="benefit-description">
                            Just like Mjolnir returns to its rightful owner, your marketing
                            investment returns with clear, quantifiable success and ROI.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="multiverse-section">
            <div class="cosmic-bg">
                <div class="cosmic-sphere sphere-1"></div>
                <div class="cosmic-sphere sphere-2"></div>
                <div class="cosmic-sphere sphere-3"></div>
            </div>

            <div class="section-header mb-3">
                <h4 class="mainhead-title">
                    HOW IT <span class="mcutext">W</span>ORKS
                </h4>
                <p class="section-subtitle">
                    At Infinite Multiverse Marketing, we don't just run campaigns —<br />
                    We craft hero arcs. We build timelines. We open portals to untapped
                    growth.
                </p>
            </div>

            <div class="phases-scroll-container">
                <div class="phases-track">
                    <!-- Phase 1 -->
                    <div class="phase-card phase-1" id="phase-1">
                        <span class="phase-number">PHASE 01</span>
                        <div class="phase-icon">
                            <i class="fas fa-search-location"></i>
                        </div>
                        <h3 class="phase-title">The Discovery Portal</h3>
                        <p class="phase-subtitle">
                            Like Nick Fury spotting potential, we find the spark in your
                            brand
                        </p>

                        <div class="phase-features">
                            <h4><i class="fas fa-clipboard-list"></i> What You Get:</h4>
                            <ul class="features-list">
                                <li>Brand & Audience Audit</li>
                                <li>Competitor Analysis Across Platforms</li>
                                <li>Power-Level Scoring (performance benchmark)</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Phase 2 -->
                    <div class="phase-card phase-2" id="phase-2">
                        <span class="phase-number">PHASE 02</span>
                        <div class="phase-icon">
                            <i class="fas fa-people-arrows"></i>
                        </div>
                        <h3 class="phase-title">Assemble Your Multiverse Strategy</h3>
                        <p class="phase-subtitle">
                            Every hero needs a team — this is where we suit up
                        </p>

                        <div class="phase-features">
                            <h4><i class="fas fa-tasks"></i> What's Included:</h4>
                            <ul class="features-list">
                                <li>Platform-Specific Campaign Blueprints</li>
                                <li>Messaging Strategy & Content Flow</li>
                                <li>Influencer & Viral Content Matrix</li>
                                <li>Budget Allocation Plan</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Phase 3 -->
                    <div class="phase-card phase-3" id="phase-3">
                        <span class="phase-number">PHASE 03</span>
                        <div class="phase-icon">
                            <i class="fas fa-atom"></i>
                        </div>
                        <h3 class="phase-title">Launch & Reality Testing</h3>
                        <p class="phase-subtitle">
                            Doctor Strange saw 14 million futures. We test them all
                        </p>

                        <div class="phase-features">
                            <h4><i class="fas fa-chart-line"></i> You'll See:</h4>
                            <ul class="features-list">
                                <li>Multivariate Ad Testing</li>
                                <li>Engagement Heatmaps</li>
                                <li>Install & Conversion Optimization</li>
                                <li>Daily Multiverse Dashboards</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Phase 4 -->
                    <div class="phase-card phase-4" id="phase-4">
                        <span class="phase-number">PHASE 04</span>
                        <div class="phase-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3 class="phase-title">Scale Across the Realms</h3>
                        <p class="phase-subtitle">
                            Now we go full Guardians of the Galaxy mode
                        </p>

                        <div class="phase-features">
                            <h4><i class="fas fa-expand"></i> Expect:</h4>
                            <ul class="features-list">
                                <li>Audience Expansion Campaigns</li>
                                <li>Retargeting Across Timelines</li>
                                <li>Influencer Collabs for Amplification</li>
                                <li>Daily Power Boost Reporting</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Phase 5 -->
                    <div class="phase-card phase-5" id="phase-5">
                        <span class="phase-number">PHASE 05</span>
                        <div class="phase-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <h3 class="phase-title">Evolve & Adapt</h3>
                        <p class="phase-subtitle">
                            Because the Multiverse Never Stays Still
                        </p>

                        <div class="phase-features">
                            <h4><i class="fas fa-random"></i> Includes:</h4>
                            <ul class="features-list">
                                <li>Weekly Optimization Sprints</li>
                                <li>Trend Analysis & Creative Refresh</li>
                                <li>Strategy Expansion into New Channels</li>
                                <li>Multiverse-Grade Reporting</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="services-section">
            <div class="container">
                <div class="section-header mb-3">
                    <h4 class="mainhead-title">
                        <span class="mcutext">S</span>ervices
                    </h4>
                    <p class="section-subtitle">
                        With every service — SEO, social media, ads, PR — we add a new
                        stone to your Infinity Gauntlet. Snap your fingers and dominate
                        the digital realm
                    </p>
                </div>

                <div class="services-grid">
                    <!-- Service Card 1 -->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="img/service/smm1.png" alt="Innovative Identity Design" />
                            <div class="card-tag">Social Media Marketing</div>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="card-image">
                            <img src="img/service/smm2.png" alt="Dynamic Digital Campaign" />
                            <div class="card-tag">Monetization & Growth</div>
                        </div>
                    </div>
                    <!--<a href="web_app_development">-->
                    <div class="service-card">
                        <div class="card-image">
                            <img src="img/service/smm3.png" alt="Dynamic E-Commerce Platform" />
                            <div class="card-tag">Web & App Development</div>
                        </div>
                    </div>
                    <!--</a>-->
                </div>
                <div class="service-card btn-hide view-all-container">
                    <a href="services" class="cta-button shield-pulse doomButton">Explore More</a>
                </div>
            </div>
        </section>

        <section class="blog-preview-section" id="blog-preview">
            <!-- Floating stones background -->
            <div class="floating-stone" style="
            background-color: var(--iron-red);
            top: 20%;
            left: 10%;
            animation-delay: 0s;
          "></div>
            <div class="floating-stone" style="
            background-color: var(--captain-blue);
            top: 70%;
            left: 85%;
            animation-delay: 1s;
          "></div>
            <div class="floating-stone" style="
            background-color: var(--iron-red);
            top: 40%;
            left: 75%;
            animation-delay: 2s;
          "></div>
            <div class="floating-stone" style="
            background-color: var(--captain-blue);
            top: 80%;
            left: 15%;
            animation-delay: 3s;
          "></div>

            <div class="blog-preview-container">
                <div class="section-header">
                    <h4 class="mainhead-title">
                        Multiverse <span class="mcutext">B</span>logs
                    </h4>
                    <p>
                        Insights from across the marketing multiverse - where digital
                        strategy meets MCU-inspired innovation
                    </p>
                </div>

                <div class="blog-preview-grid">
                    <div class="preview-card">
                        <div class="preview-image">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                alt="Tony Stark Marketing" />
                        </div>
                        <div class="preview-content">
                            <h3>Tony Stark's Marketing Mindset</h3>
                            <p>
                                Discover how Stark's charisma, innovation, and branding style
                                inspire real-world marketing strategies...
                            </p>
                            <div class="preview-meta">
                                <span>5 min read</span>
                            </div>
                        </div>
                    </div>

                    <div class="preview-card">
                        <div class="preview-image">
                            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                alt="Multiverse Content" />
                        </div>
                        <div class="preview-content">
                            <h3>Into the Multiverse of Content</h3>
                            <p>
                                Explore how multiversal thinking can unlock content strategies
                                that engage audiences across platforms...
                            </p>
                            <div class="preview-meta">
                                <span>7 min read</span>
                            </div>
                        </div>
                    </div>

                    <div class="preview-card">
                        <div class="preview-image">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                alt="Strategic Marketing" />
                        </div>
                        <div class="preview-content">
                            <h3>Nick Fury's Strategic Marketing</h3>
                            <p>
                                Fury didn't assemble the Avengers by accident. Find out how
                                his covert approach mirrors smart funnel planning...
                            </p>
                            <div class="preview-meta">
                                <span>9 min read</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="view-all-container">
                    <button class="cta-button shield-pulse doomButton">
                        <a href="blogs">Explore All Articles</a>
                    </button>
                </div>
            </div>
        </section>
        <section class="contact-main">
            <div class="contact-section-new">
                <section class="join-agency-hero-description-wrapper mb-5">
                    <div class="section-header">
                        <h4 class="mainhead-title">
                            <span class="mcutext">J</span>oin our
                            <span class="mcutext">a</span>gency of
                            <span class="mcutext">c</span>reative
                            <span class="mcutext">i</span>nnovators<span class="mcutext"></span>
                        </h4>
                        <p>
                            Join our creative community to collaborate, innovate, and thrive
                            together We welcome passionate individuals eager to make.
                        </p>
                    </div>
                </section>

                <section class="join-agency-social-media-cards-row">
                    <a href="https://x.com/Marketinginfy">
                        <div class="join-agency-interactive-social-platform-card" class="link-object">
                            <div class="join-agency-circular-green-social-icon join-agency-twitter-x-symbol">
                                <i class="fa-brands fa-x-twitter"></i>
                            </div>
                            <div class="join-agency-social-platform-details">
                                <div class="join-agency-social-call-to-action-title">
                                    Follow On Twitter
                                </div>
                                <div class="join-agency-social-username-handle">
                                    @Marketinginfy
                                </div>
                            </div>
                            <div class="join-agency-circular-arrow-button-wrapper">
                                <span class="join-agency-diagonal-up-arrow-symbol">↑</span>
                            </div>
                        </div>
                    </a>

                    <a href="https://www.linkedin.com/company/infinite-multiverse-marketing/?viewAsMember=true"
                        class="link-object">
                        <div class="join-agency-interactive-social-platform-card">
                            <div class="join-agency-circular-green-social-icon join-agency-linkedin-in-text">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </div>
                            <div class="join-agency-social-platform-details">
                                <div class="join-agency-social-call-to-action-title">
                                    Follow On Linked In
                                </div>
                                <div class="join-agency-social-username-handle">
                                    @infinite-multiverse-marketing
                                </div>
                            </div>
                            <div class="join-agency-circular-arrow-button-wrapper">
                                <span class="join-agency-diagonal-up-arrow-symbol">↑</span>
                            </div>
                        </div>
                    </a>

                    <a href="https://www.instagram.com/infinitemultiversemarketing?igsh=MWltbjdmeTdkZGdndw=="
                        class="link-object">
                        <div href="#" class="join-agency-interactive-social-platform-card">
                            <div class="join-agency-circular-green-social-icon join-agency-instagram-camera-emoji">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                            <div class="join-agency-social-platform-details">
                                <div class="join-agency-social-call-to-action-title">
                                    Follow On Instagram
                                </div>
                                <div class="join-agency-social-username-handle">
                                    @infinitemultiversemarketing
                                </div>
                            </div>
                            <div class="join-agency-circular-arrow-button-wrapper">
                                <span class="join-agency-diagonal-up-arrow-symbol">↑</span>
                            </div>
                        </div>
                    </a>

                    <a href="https://www.facebook.com/infinitemultiversemarketing/" class="link-object">
                        <div href="#" class="join-agency-interactive-social-platform-card">
                            <div class="join-agency-circular-green-social-icon join-agency-instagram-camera-emoji">
                                <i class="fa-brands fa-facebook-f"></i>
                            </div>
                            <div class="join-agency-social-platform-details">
                                <div class="join-agency-social-call-to-action-title">
                                    Follow On Facebook
                                </div>
                                <div class="join-agency-social-username-handle">
                                    @infinitemultiversemarketing
                                </div>
                            </div>
                            <div class="join-agency-circular-arrow-button-wrapper">
                                <span class="join-agency-diagonal-up-arrow-symbol">↑</span>
                            </div>
                        </div>
                    </a>

                    <a href="https://www.youtube.com/@InfiniteMultiverseMarketing" class="link-object">
                        <div href="#" class="join-agency-interactive-social-platform-card">
                            <div class="join-agency-circular-green-social-icon join-agency-instagram-camera-emoji">
                                <i class="fa-brands fa-youtube"></i>
                            </div>
                            <div class="join-agency-social-platform-details">
                                <div class="join-agency-social-call-to-action-title">
                                    Follow On Youtube
                                </div>
                                <div class="join-agency-social-username-handle">
                                    @InfiniteMultiverseMarketing
                                </div>
                            </div>
                            <div class="join-agency-circular-arrow-button-wrapper">
                                <span class="join-agency-diagonal-up-arrow-symbol">↑</span>
                            </div>
                        </div>
                    </a>
                </section>
            </div>
        </section>
    </div>
    @include('footer')
</body>

</html>