@include('header')
<link rel="stylesheet" href="{{asset('css/new.css')}}">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --secondary: #8b5cf6;
            --accent: #06b6d4;
            --dark: #0f172a;
            --darker: #020617;
            --light: #f8fafc;
            --gray: #64748b;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --gradient-primary: linear-gradient(135deg, #6366f1, #8b5cf6);
            --gradient-secondary: linear-gradient(135deg, #06b6d4, #3b82f6);
            --gradient-accent: linear-gradient(135deg, #10b981, #06b6d4);
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }

        html {
            scroll-behavior: smooth;
        }
        
        .main-head {
     font-size: 4rem !important; 
}

        body {
            background: var(--darker);
            color: var(--light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            background: radial-gradient(ellipse at center, rgba(99, 102, 241, 0.1) 0%, transparent 70%);
            overflow: hidden;
            padding-top: 0; /* Remove top padding since no navbar */
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="%23334155" stroke-width="0.5" opacity="0.3"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
        }

        .hero-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .hero-content {
            animation: slideInLeft 1s ease-out;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(99, 102, 241, 0.1);
            border: 1px solid rgba(99, 102, 241, 0.3);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.875rem;
            margin-bottom: 1.5rem;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--light), var(--primary));
            -webkit-background-clip: text;
            animation: slideInRight 1s ease-out 0.3s both;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--gray);
            margin-bottom: 2rem;
            line-height: 1.7;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            margin-bottom: 3rem;
            animation: fadeInUp 1s ease-out 0.7s both;
        }

        .btn-secondary {
            background: transparent;
            color: var(--light);
            border: 2px solid rgba(99, 102, 241, 0.5);
        }

        .btn-secondary:hover {
            background: rgba(99, 102, 241, 0.1);
            border-color: var(--primary);
            transform: translateY(-2px);
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            animation: fadeInUp 1s ease-out 0.9s both;
        }

        .stat {
            text-align: center;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary);
            display: block;
        }

        .stat-label {
            font-size: 0.875rem;
            color: var(--gray);
        }

        .hero-visual {
            position: relative;
            animation: slideInRight 1s ease-out 0.4s both;
        }

        .floating-elements {
            position: relative;
            height: 500px;
        }

        .floating-card {
            position: absolute;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.75rem;
            animation: float 6s ease-in-out infinite;
            box-shadow: var(--shadow-xl);
        }

        .floating-card:nth-child(1) {
            top: 0px;
            right: 100px;
            animation-delay: 0s;
        }

        .floating-card:nth-child(2) {
            top: 200px;
            right: 50px;
            animation-delay: 2s;
        }

        .floating-card:nth-child(3) {
            top: 100px;
            right: 400px;
            animation-delay: 4s;
        }

        .floating-card:nth-child(4) {
            top: 300px;
            right: 300px;
            animation-delay: 1s;
        }

        .card-icon {
            font-size: 2rem;
            width: 60px;
            height: 60px;
            background: var(--gradient-primary);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Particles */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: var(--primary);
            border-radius: 50%;
            opacity: 0.6;
            animation: particleFloat 8s linear infinite;
        }

        @keyframes particleFloat {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 0.6;
            }
            90% {
                opacity: 0.6;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Services Section */
        .services {
            padding: 8rem 0;
            background: white;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            /*background: linear-gradient(135deg, var(--light), var(--primary));*/
            -webkit-background-clip: text;
        }

        .section-subtitle {
            font-size: 1.125rem;
            color: var(--gray);
            margin: 0 auto;
            margin-bottom: 3rem;
            line-height: 1.7;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: rgb(21 21 21);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 24px;
            padding: 2.5rem;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            group: hover;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(99, 102, 241, 0.05), transparent);
            transition: left 0.6s ease;
        }

        .service-card:hover::before {
            left: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
            border-color: rgba(99, 102, 241, 0.3);
            box-shadow: 0 25px 50px rgba(99, 102, 241, 0.15);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: #3d3d3d;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .service-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--light);
        }

        .service-description {
            color: var(--gray);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .service-features {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .feature-tag {
            background: rgba(99, 102, 241, 0.1);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
        }

        /* About Section */
        .about {
            background: #151515;
            padding: 6rem 0;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .about-text {
            animation: slideInLeft 1s ease-out;
        }

        .about-visual {
            position: relative;
            animation: slideInRight 1s ease-out;
        }

        .about-image {
            width: 100%;
            height: 400px;
            background: var(--gradient-secondary);
            border-radius: 24px;
            position: relative;
            overflow: hidden;
        }

        .about-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(99, 102, 241, 0.8), rgba(139, 92, 246, 0.8));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .about-stat {
            background: rgba(255, 255, 255, 0.05);
            padding: 1.5rem;
            border-radius: 16px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .about-stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary);
            display: block;
        }

        .about-stat-label {
            color: var(--gray);
            font-size: 0.875rem;
        }

        /* Team Section */
        .team {
            padding: 8rem 0;
            background: white;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .team-card {
            background: rgb(122 89 0 / 48%);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 24px;
            padding: 2rem;
            text-align: center;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .team-card:hover {
            transform: translateY(-10px);
            border-color: rgba(99, 102, 241, 0.3);
            box-shadow: 0 25px 50px rgba(99, 102, 241, 0.15);
        }

        .team-avatar {
            width: 120px;
            height: 120px;
            background: #ffffff;
            border: 1px solid #000000;
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #000000;
            font-weight: bold;
        }

        .team-name {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--light);
        }

        .team-role {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .team-bio {
            color: var(--gray);
            font-size: 0.875rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .team-social {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(99, 102, 241, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
        }

        /* Portfolio Section */
        .portfolio {
            padding: 8rem 0;
            background: #151515;
        }

        .portfolio-filters {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            background: transparent;
            border: 2px solid rgba(99, 102, 241, 0.3);
            color: var(--gray);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .portfolio-item {
            position: relative;
            height: 300px;
            border-radius: 20px;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.4s ease;
            background: black;
        }

        .portfolio-item:hover {
            transform: translateY(-10px) scale(1.02);
        }
        
        .bannerimages2{
            background: url(../img/service/website.png);
            background-size: cover;
        }
        .bannerimages3{
            background: url(../img/service/app1.png);
            background-size: cover;
        }
        .bannerimages4{
            background: url(../img/service/app2.png);
            background-size: cover;
        }
        .bannerimages5{
            background: url(../img/service/web1.png);
            background-size: cover;
        }
        .bannerimages6{
            background: url(../img/service/web2.png);
            background-size: cover;
        }
        .bannerimages1{
            background: url(../img/service/website1.png);
            background-size: cover;
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: all 0.4s ease;
            text-align: center;
            padding: 2rem;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: white;
        }

        .portfolio-category {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .portfolio-description {
            color: var(--gray);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .portfolio-link {
            background: var(--gradient-primary);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .portfolio-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.4);
        }
    
        /* Animations */
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .hero-container,
            .about-content {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .hero-title {
                font-size: 3rem;
            }

            .section-title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-stats {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .form-group {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .container {
                padding: 0 1rem;
            }
        }
        img.gauntletimg {
    width: 60%;
}
.center-head{
    text-align: center;
}

    </style>
<body>

    <!-- Hero Section --><br>
    <section id="home" class="hero mt-4">
        <div class="particles" id="particles"></div>
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="section-title main-head">
                  <span class="mcutext">D</span>igital 
                  <span class="mcutext">A</span>dvertising <br>
                  <span class="mcutext">G</span>eneration
                </h1>
                <p class="hero-subtitle">
                    We transform your ideas into powerful digital solutions with cutting-edge technology, innovative design, and strategic thinking that drives real business growth.
                </p>
                <div class="hero-buttons">
                    <button class="cta-button shield-pulse doomButton">
                  Contact Us
                </button>
                </div>
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number" data-target="50">0</span>
                        <span class="stat-label">Projects Delivered</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number" data-target="98">0</span>
                        <span class="stat-label">Client Satisfaction</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number" data-target="24">0</span>
                        <span class="stat-label">Support Hours</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="floating-elements">
                    <div class="floating-card">
                        <div class="card-icon">🌐</div>
                        <span>Web Development</span>
                    </div>
                    <div class="floating-card">
                        <div class="card-icon">📱</div>
                        <span>Mobile Apps</span>
                    </div>
                    <div class="floating-card">
                        <div class="card-icon">🚀</div>
                        <span>Performance</span>
                    </div>
                    <div class="floating-card">
                        <div class="card-icon">🎨</div>
                        <span>UI/UX Design</span>
                    </div>
                    <img src="img/service/gauntlet.png" alt="Customer 1" class="gauntletimg"/>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="center-head">
                <h2 class="section-title section-title text-dark">
                  <span class="mcutext">C</span>omprehensive
                  <span class="mcutext">D</span>igital
                  <span class="mcutext">S</span>olutions
                </h2>
                <p class="section-subtitle">
                    From concept to deployment, we provide end-to-end digital services that help your business thrive in the digital landscape.
                </p>
            </div>
            <div class="services-grid">
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">🌐</div>
                    <h3 class="service-title">Custom Web Development</h3>
                    <p class="service-description">
                        Build powerful, scalable web applications with modern frameworks and cutting-edge technologies.
                    </p>
                    <div class="service-features">
                        <span class="feature-tag">React/Next.js</span>
                        <span class="feature-tag">Node.js</span>
                        <span class="feature-tag">Cloud Deploy</span>
                    </div>
                </div>
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">📱</div>
                    <h3 class="service-title">Mobile App Development</h3>
                    <p class="service-description">
                        Create native and cross-platform mobile applications that deliver exceptional user experiences.
                    </p>
                    <div class="service-features">
                        <span class="feature-tag">iOS & Android</span>
                        <span class="feature-tag">React Native</span>
                        <span class="feature-tag">Flutter</span>
                    </div>
                </div>
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">🛒</div>
                    <h3 class="service-title">E-commerce Solutions</h3>
                    <p class="service-description">
                        Complete online store development with payment integration, inventory management, and analytics.
                    </p>
                    <div class="service-features">
                        <span class="feature-tag">Shopify</span>
                        <span class="feature-tag">WooCommerce</span>
                        <span class="feature-tag">Custom Build</span>
                    </div>
                </div>
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">🎨</div>
                    <h3 class="service-title">UI/UX Design</h3>
                    <p class="service-description">
                        Design intuitive and engaging user interfaces that convert visitors into customers.
                    </p>
                    <div class="service-features">
                        <span class="feature-tag">Figma</span>
                        <span class="feature-tag">Prototyping</span>
                        <span class="feature-tag">User Research</span>
                    </div>
                </div>
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">🔍</div>
                    <h3 class="service-title">SEO & Marketing</h3>
                    <p class="service-description">
                        Boost your online visibility and drive qualified traffic with strategic SEO and digital marketing.
                    </p>
                    <div class="service-features">
                        <span class="feature-tag">Technical SEO</span>
                        <span class="feature-tag">Content Strategy</span>
                        <span class="feature-tag">Analytics</span>
                    </div>
                </div>
                <div class="service-card animate-on-scroll">
                    <div class="service-icon">☁️</div>
                    <h3 class="service-title">Cloud Solutions</h3>
                    <p class="service-description">
                        Scalable cloud infrastructure and DevOps solutions for modern applications.
                    </p>
                    <div class="service-features">
                        <span class="feature-tag">AWS</span>
                        <span class="feature-tag">Docker</span>
                        <span class="feature-tag">CI/CD</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text animate-on-scroll">
                <h2 class="section-title">
                  <span class="mcutext">B</span>uilding
                  <span class="mcutext">D</span>igital<br>
                  <span class="mcutext">E</span>xcellence Since
                  <span class="mcutext">2024</span>
                </h2>
                <p class="section-subtitle">
                    We are a team of passionate developers, designers, and strategists dedicated to creating exceptional digital experiences. Our mission is to help businesses transform their ideas into powerful digital solutions that drive growth and success.
                </p>
                    <div class="about-stats">
                        <div class="about-stat">
                            <span class="about-stat-number" data-target="1">0</span>
                            <span class="about-stat-label">Years Experience</span>
                        </div>
                        <div class="about-stat">
                            <span class="about-stat-number" data-target="100">0</span>
                            <span class="about-stat-label">Happy Clients</span>
                        </div>
                    </div>
                </div>
                <div class="about-visual animate-on-scroll">
                    <img src="img/service/webapp.png" alt="Customer 1" class="score-photo"/>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="team">
        <div class="container">
            <div class="center-head">
                <h2 class="section-title text-dark">
                  <span class="mcutext">O</span>ur process Of
                  <span class="mcutext">D</span>igital
                  <span class="mcutext">M</span>arketing
                </h2>
                <p class="section-subtitle">
                    Our digital marketing process begins with discovery and research to understand your goals. We then develop a tailored strategy and implement campaigns across various channels.
                </p>
            </div>
            <div class="team-grid">
                <div class="team-card animate-on-scroll">
                    <div class="team-avatar">1</div>
                    <h3 class="team-name">Discovery Phase</h3>
                    <p class="team-bio">Initial consultation to understand your brand, goals, and target audience Conducting research.</p>
                    <div class="team-social">
                        <a href="https://x.com/Marketinginfy" class="btn btn-outline-light btn-social"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/infinitemultiversemarketing/" class="btn btn-outline-light btn-social"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/infinitemultiversemarketing?igsh=MWltbjdmeTdkZGdndw==" class="btn btn-outline-light btn-social"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/infinite-multiverse-marketing/?viewAsMember=true" class="btn btn-outline-light btn-social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="team-card animate-on-scroll">
                    <div class="team-avatar">2</div>
                    <h3 class="team-name">Implementation</h3>
                    <p class="team-bio">Initial consultation to understand your brand, goals, and target audience Conducting research.</p>
                    <div class="team-social">
                        <a href="https://x.com/Marketinginfy" class="btn btn-outline-light btn-social"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/infinitemultiversemarketing/" class="btn btn-outline-light btn-social"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/infinitemultiversemarketing?igsh=MWltbjdmeTdkZGdndw==" class="btn btn-outline-light btn-social"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/infinite-multiverse-marketing/?viewAsMember=true" class="btn btn-outline-light btn-social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="team-card animate-on-scroll">
                    <div class="team-avatar">3</div>
                    <h3 class="team-name">Collaboration</h3>
                    <p class="team-bio">Initial consultation to understand your brand, goals, and target audience Conducting research.</p>
                    <div class="team-social">
                        <a href="https://x.com/Marketinginfy" class="btn btn-outline-light btn-social"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/infinitemultiversemarketing/" class="btn btn-outline-light btn-social"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/infinitemultiversemarketing?igsh=MWltbjdmeTdkZGdndw==" class="btn btn-outline-light btn-social"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/infinite-multiverse-marketing/?viewAsMember=true" class="btn btn-outline-light btn-social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="center-head">
                <h2 class="section-title text-center">
                  <span class="mcutext">O</span>ur
                  <span class="mcutext">L</span>atest
                  <span class="mcutext">W</span>ork
                </h2>
                <p class="section-subtitle">
                    Explore our recent projects and see how we've helped businesses achieve their digital goals.
                </p>
            </div>
            <div class="portfolio-filters animate-on-scroll">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="web">Web Apps</button>
                <button class="filter-btn" data-filter="mobile">Mobile Apps</button>
                <button class="filter-btn" data-filter="ecommerce">E-commerce</button>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item animate-on-scroll bannerimages5" data-category="web">
                    <div class="portfolio-overlay">
                        <h3 class="portfolio-title">SaaS Dashboard</h3>
                        <p class="portfolio-category">Web Application</p>
                        <p class="portfolio-description">Modern analytics dashboard with real-time data visualization and reporting features.</p>
                        <a href="#" class="portfolio-link">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item animate-on-scroll bannerimages6" data-category="web">
                    <div class="portfolio-overlay">
                        <h3 class="portfolio-title">Corporate Website</h3>
                        <p class="portfolio-category">Website</p>
                        <p class="portfolio-description">Professional corporate website with CMS and multi-language support.</p>
                        <a href="#" class="portfolio-link">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item animate-on-scroll bannerimages3" data-category="mobile">
                    <div class="portfolio-overlay">
                        <h3 class="portfolio-title">Fitness Tracker</h3>
                        <p class="portfolio-category">Mobile App</p>
                        <p class="portfolio-description">Cross-platform fitness tracking app with social features and workout plans.</p>
                        <a href="#" class="portfolio-link">View Project</a>
                    </div>
                </div>
                 <div class="portfolio-item animate-on-scroll bannerimages4" data-category="mobile">
                    <div class="portfolio-overlay">
                        <h3 class="portfolio-title">Food Delivery</h3>
                        <p class="portfolio-category">Mobile App</p>
                        <p class="portfolio-description">On-demand food delivery app with real-time tracking and payment processing.</p>
                        <a href="#" class="portfolio-link">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item animate-on-scroll bannerimages1" data-category="ecommerce">
                    <div class="portfolio-overlay">
                        <h3 class="portfolio-title">Fashion Store</h3>
                        <p class="portfolio-category">E-commerce</p>
                        <p class="portfolio-description">Complete online fashion store with inventory management and payment integration.</p>
                        <a href="#" class="portfolio-link">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item animate-on-scroll bannerimages2" data-category="ecommerce">
                    <div class="portfolio-overlay">
                        <h3 class="portfolio-title">Fashion Store</h3>
                        <p class="portfolio-category">E-commerce</p>
                        <p class="portfolio-description">Complete online fashion store with inventory management and payment integration.</p>
                        <a href="#" class="portfolio-link">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>

        // Smooth scrolling for anchor links
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

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        // Observe all elements with animate-on-scroll class
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Counter animation
        const animateCounters = () => {
            const counters = document.querySelectorAll('[data-target]');
            
            counters.forEach(counter => {
                const target = parseInt(counter.dataset.target);
                const increment = target / 100;
                let current = 0;
                
                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        counter.textContent = Math.ceil(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };
                
                updateCounter();
            });
        };

        // Trigger counter animation when hero stats are visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        const heroStats = document.querySelector('.hero-stats');
        if (heroStats) {
            statsObserver.observe(heroStats);
        }

        // About stats counter
        const aboutStatsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const aboutCounters = entry.target.querySelectorAll('[data-target]');
                    aboutCounters.forEach(counter => {
                        const target = parseInt(counter.dataset.target);
                        const increment = target / 50;
                        let current = 0;
                        
                        const updateCounter = () => {
                            if (current < target) {
                                current += increment;
                                counter.textContent = Math.ceil(current);
                                requestAnimationFrame(updateCounter);
                            } else {
                                counter.textContent = target;
                            }
                        };
                        
                        updateCounter();
                    });
                    aboutStatsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        const aboutStats = document.querySelector('.about-stats');
        if (aboutStats) {
            aboutStatsObserver.observe(aboutStats);
        }

        // Portfolio filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');

                const filterValue = button.dataset.filter;

                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.dataset.category === filterValue) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 100);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Parallax effect for floating elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.floating-card');
            
            parallaxElements.forEach((element, index) => {
                const speed = (index + 1) * 0.5;
                const yPos = -(scrolled * speed * 0.1);
                element.style.transform = `translateY(${yPos}px)`;
            });
        });

        // Particle system
        const createParticles = () => {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 50;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 8 + 's';
                particle.style.animationDuration = (8 + Math.random() * 4) + 's';
                particlesContainer.appendChild(particle);
            }
        };

        createParticles();
        // Add tilt effect to cards
        const addTiltEffect = (elements) => {
            elements.forEach(element => {
                element.addEventListener('mousemove', (e) => {
                    const rect = element.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = (y - centerY) / 10;
                    const rotateY = (centerX - x) / 10;
                    
                    element.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(10px)`;
                });
                
                element.addEventListener('mouseleave', () => {
                    element.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateZ(0)';
                });
            });
        };

        // Apply tilt effect to service cards and team cards
        addTiltEffect(document.querySelectorAll('.service-card'));
        addTiltEffect(document.querySelectorAll('.team-card'));


        // Add typing effect to hero title
        const typeWriter = (element, text, speed = 50) => {
            let i = 0;
            const originalText = element.innerHTML;
            element.innerHTML = '';
            
            const type = () => {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                } else {
                    // Add cursor blink effect
                    element.innerHTML += '<span class="cursor">|</span>';
                    setTimeout(() => {
                        const cursor = element.querySelector('.cursor');
                        if (cursor) cursor.remove();
                    }, 2000);
                }
            };
            
            type();
        };

        // Initialize typing effect after page load
        setTimeout(() => {
            const heroTitle = document.querySelector('.hero-title');
            if (heroTitle) {
                const text = heroTitle.textContent;
                typeWriter(heroTitle, text, 30);
            }
        }, 1500);

        // Add floating animation to hero elements
        const floatingElements = document.querySelectorAll('.floating-card');
        floatingElements.forEach((element, index) => {
            element.style.animationDelay = `${index * 0.5}s`;
        });

        // Add hover effects to buttons
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('mouseenter', () => {
                btn.style.transform = 'translateY(-3px) scale(1.05)';
            });
            
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Add ripple effect to buttons
        document.querySelectorAll('.btn-primary').forEach(button => {
            button.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    background: rgba(255, 255, 255, 0.3);
                    border-radius: 50%;
                    transform: scale(0);
                    animation: ripple 0.6s linear;
                    pointer-events: none;
                `;
                
                this.style.position = 'relative';
                this.style.overflow = 'hidden';
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Add ripple animation keyframes
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
            .cursor {
                animation: blink 1s infinite;
            }
            @keyframes blink {
                0%, 50% { opacity: 1; }
                51%, 100% { opacity: 0; }
            }
        `;
        document.head.appendChild(style);

        // Performance optimization: Throttle scroll events
        let ticking = false;
        
        const throttledScroll = () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    // Scroll-dependent animations go here
                    ticking = false;
                });
                ticking = true;
            }
        };

        window.addEventListener('scroll', throttledScroll);

        // Initialize all animations and effects
        document.addEventListener('DOMContentLoaded', () => {
            // Add entrance animations with delays
            const animatedElements = document.querySelectorAll('.animate-on-scroll');
            animatedElements.forEach((element, index) => {
                element.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
@include('footer')
</body>