<!DOCTYPE html>
<html lang="en">
@include('header')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiverse Chronicles | Infinite Multiverse Marketing</title>
    <link rel="stylesheet" href="{{asset('css/new.css')}}">
    <link rel="stylesheet" href="{{asset('css/blogs.css')}}">
</head>



<style>
    .envato-latest-news-main-container-wrapper {
        max-width: 1400px;
        margin: 0 auto;
        position: relative;
        margin-bottom: 3rem;
    }

    .envato-latest-section-primary-title-heading {
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 50px;
        letter-spacing: -0.025em;
        text-align: left;
    }

    .envato-horizontal-carousel-container-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 16px;
        padding: 0 80px;
    }

    .envato-smooth-scrolling-carousel-inner-wrapper {
        display: flex;
        transition: transform 0.5s ease-in-out;
        gap: 24px;
        will-change: transform;
    }

    .envato-news-article-card-component {
        flex: 0 0 340px;
        background: #1a2433;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        cursor: pointer;
        position: relative;
    }

    .envato-news-article-card-component::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
        z-index: 1;
    }

    .envato-news-article-card-component:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .envato-news-article-card-component:hover::before {
        opacity: 1;
    }

    .envato-card-featured-image-element {
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .envato-news-article-card-component:hover .envato-card-featured-image-element {
        transform: scale(1.05);
    }

    .envato-card-text-content-section {
        padding: 28px;
        position: relative;
        z-index: 2;
    }

    .envato-article-category-label-tag {
        font-size: 1rem;
        font-weight: bolder;
        letter-spacing: 1px;
        font-family: auto;
        margin-bottom: 16px;
        display: inline-block;
        padding: 6px 12px;
        border-radius: 20px;
        background-color: rgba(0, 0, 0, 0.05);
    }

    .envato-culture-category-color-scheme {
        color: #3b82f6;
        background-color: rgba(59, 130, 246, 0.1);
    }

    .envato-news-category-color-scheme {
        color: #10b981;
        background-color: rgba(16, 185, 129, 0.1);
    }

    .envato-media-releases-category-color-scheme {
        color: #ef4444;
        background-color: rgba(239, 68, 68, 0.1);
    }

    .envato-article-headline-title-text {
        font-size: 1rem;
        line-height: 1.4;
        color: #1f2937;
        font-weight: 500 !important;
        transition: color 0.3s ease;
    }

    .envato-news-article-card-component:hover .envato-article-headline-title-text {
        color: #3b82f6;
    }

    .envato-carousel-navigation-button-element {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: #e52829;
        border: 2px solid #ffffff;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        z-index: 100;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        backdrop-filter: blur(10px);
    }

    .envato-carousel-navigation-button-element:hover {
        background: #000000;
        border-color: #e52829;
        transform: translateY(-50%) scale(1.1);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .envato-carousel-navigation-button-element:hover svg {
        fill: white;
    }

    .envato-carousel-navigation-button-element:active {
        transform: translateY(-50%) scale(0.95);
    }

    .envato-previous-slide-navigation-button {
        left: 15px;
    }

    .envato-next-slide-navigation-button {
        right: 15px;
    }

    .envato-carousel-navigation-button-element svg {
        width: 35px;
        height: 35px;
        fill: #000000;
        transition: fill 0.3s ease;
    }

    .envato-carousel-navigation-button-element:disabled {
        opacity: 0.4;
        cursor: not-allowed;
        transform: translateY(-50%) scale(1);
        background: #f3f4f6;
        border-color: #e5e7eb;
    }

    .envato-carousel-navigation-button-element:disabled:hover {
        background: #f3f4f6;
        border-color: #e5e7eb;
        transform: translateY(-50%) scale(1);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    .envato-carousel-navigation-button-element:disabled svg {
        fill: #9ca3af;
    }

    /* Progress indicator */
    .envato-carousel-progress-indicator-wrapper {
        display: flex;
        justify-content: center;
        gap: 8px;
        margin-top: 32px;
    }

    .envato-carousel-progress-dot-element {
        width: 10px;
        height: 15px;
        border-radius: 50%;
        background-color: #d1d5db;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .envato-carousel-progress-dot-element.envato-active-progress-dot {
        background-color: #ec1d24;
        transform: scale(1.3);
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .envato-horizontal-carousel-container-wrapper {
            padding: 0 70px;
        }

        .envato-news-article-card-component {
            flex: 0 0 320px;
        }
    }

    @media (max-width: 768px) {
        .envato-latest-section-primary-title-heading {
            margin-bottom: 30px;
            text-align: center;
        }

        .envato-horizontal-carousel-container-wrapper {
            padding: 0 60px;
        }

        .envato-news-article-card-component {
            flex: 0 0 280px;
        }

        .envato-carousel-navigation-button-element {
            width: 48px;
            height: 48px;
        }

        .envato-carousel-navigation-button-element svg {
            width: 20px;
            height: 20px;
        }

        .envato-previous-slide-navigation-button {
            left: 10px;
        }

        .envato-next-slide-navigation-button {
            right: 10px;
        }
    }

    @media (max-width: 480px) {
        body {
            padding: 40px 15px;
        }

        .envato-horizontal-carousel-container-wrapper {
            padding: 0 50px;
        }

        .envato-news-article-card-component {
            flex: 0 0 260px;
        }

        .envato-card-text-content-section {
            padding: 20px;
        }

        .envato-article-headline-title-text {
            font-size: 1.25rem;
        }
    }
    .desc-set{
        display: -webkit-box;
        -webkit-line-clamp:4 ;
        -webkit-box-orient: vertical;
        line-height: 1.4em;
        overflow: hidden;
    }
    .title-set{
        display: -webkit-box !important;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

<body>

    <div class="stone-space" id="stone-space"></div>

    <div class="containermain mt-5">
        <header class="header">
            <h2 class="section-title-new"><span class="mcutext">M</span>ultiverse <span class="mcutext">B</span>logs
            </h2>
            <p>Official Blog of Infinite Multiverse Marketing - Where digital strategies meet the power of the MCU
            </p>
        </header>

        <section class="blog-grid" id="blogGrid">
    @foreach($data as $val)
    <a href="{{ route('blogdetail', ['id' => encrypt($val->id)]) }}">
        <article class="blog-card" style="cursor: pointer;">
            <div class="card-header">
                <img src="https://dashboard.infinitemultiversemarketing.com/storage/app/public/{{ $val->img }}" alt="Blog Banner">
                <span class="card-theme" style="color: var(--stark-gold);">
                    {{ \Carbon\Carbon::parse($val->created_at)->format('d-m-Y') }}
                </span>
            </div>
            <div class="card-body">
                <h3 class="title-set">{{ $val->title }}</h3>
                <p class="desc-set">{{ $val->disc }}</p>
            </div>
            <div class="card-footer">
                <span style="color: var(--text-dim);">{{ $val->tags }}</span>
            </div>
        </article>
        </a>
    @endforeach
</section>


<!-- More Button -->
@if(count($data) > 3)
    <div style="display: table;margin: auto;">
        <!--<button id="loadMoreBtn" style="padding: 8px 16px; background: var(--stark-gold); color: white; border: none; border-radius: 4px;">More</button>-->
        <button id="loadMoreBtn" class="cta-button shield-pulse doomButton">More</button>
    </div>
@endif


        <div class="envato-latest-news-main-container-wrapper">
            <header class="header mt-5">
            <h2 class="section-title-new"><span class="mcutext">M</span>ultiverse <span class="mcutext">B</span>logs
            </h2>
            <p>Official Blog of Infinite Multiverse Marketing - Where digital strategies meet the power of the MCU
            </p>
        </header>

            <div class="envato-horizontal-carousel-container-wrapper">
                <button class="envato-carousel-navigation-button-element envato-previous-slide-navigation-button"
                    id="envatoPreviousSlideButton" aria-label="Previous slide">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                    </svg>
                </button>

                <div class="envato-smooth-scrolling-carousel-inner-wrapper" id="envatoCarouselInnerWrapper">
                    @foreach($data as $val)
                    <article class="envato-news-article-card-component">
                        <img src="https://dashboard.infinitemultiversemarketing.com/storage/app/public/{{ $val->img }}"
                            alt="Diversity team photo showing inclusive workplace"
                            class="envato-card-featured-image-element">
                        <div class="card-body">
                        <h3  class="title-set">{{ $val->title }}</h3>
                        <p class="desc-set">{{ $val->disc }}</p>
                    </div>
                    </article>
                    @endforeach
                </div>

                <button class="envato-carousel-navigation-button-element envato-next-slide-navigation-button"
                    id="envatoNextSlideButton" aria-label="Next slide">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
                    </svg>
                </button>
            </div>

            <div class="envato-carousel-progress-indicator-wrapper" id="envatoProgressIndicator">
                <!-- Progress dots will be generated by JavaScript -->
            </div>
        </div>
        <section class="weekly-insights">
            <h2>Weekly <span class="mcutext">I</span>nsights from <span class="mcutext">A</span>cross the <span
                    class="mcutext">M</span>ultiverse</h2>
            <div class="insights-grid">
                <div class="insight-item">
                    <h4>Heroic Case Studies</h4>
                    <p>Real-world marketing campaigns analyzed through the lens of MCU hero strategies.</p>
                </div>
                <div class="insight-item">
                    <h4>Creative Campaign Breakdowns</h4>
                    <p>Deconstructing successful marketing initiatives with MCU-level storytelling.</p>
                </div>
                <div class="insight-item">
                    <h4>Multiversal Tactics</h4>
                    <p>Adapting strategies for different platforms like navigating alternate realities.</p>
                </div>
                <div class="insight-item">
                    <h4>Pop Culture Analytics</h4>
                    <p>Where data meets storytelling in the most engaging ways possible.</p>
                </div>
            </div>
        </section>
    </div>
    @include('footer')
    <script>
        // Create floating infinity stones
        document.addEventListener('DOMContentLoaded', function () {
            const stoneSpace = document.getElementById('stone-space');
            const colors = [
                'var(--iron-red)',    // Space Stone (blue in MCU but using red for Iron Man)
                'var(--captain-blue)', // Mind Stone
                'var(--hulk-green)',  // Time Stone
                'var(--thor-purple)',  // Power Stone
                'var(--panther-violet)', // Reality Stone
                'var(--spider-red)',   // Soul Stone
                'var(--strange-orange)', // Eye of Agamotto
                'var(--stark-gold)',  // Arc Reactor
                'var(--shield-blue)', // S.H.I.E.L.D
                'var(--thanos-purple)' // Thanos
            ];

            for (let i = 0; i < 20; i++) {
                const stone = document.createElement('div');
                stone.className = 'infinity-stone';

                // Random properties
                const size = Math.random() * 10 + 5;
                const color = colors[Math.floor(Math.random() * colors.length)];
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const delay = Math.random() * 5;
                const duration = Math.random() * 3 + 3;

                stone.style.width = `${size}px`;
                stone.style.height = `${size}px`;
                stone.style.backgroundColor = color;
                stone.style.left = `${posX}%`;
                stone.style.top = `${posY}%`;
                stone.style.animationDelay = `${delay}s`;
                stone.style.animationDuration = `${duration}s`;

                stoneSpace.appendChild(stone);
            }

            // Animate cards on scroll
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            const cards = document.querySelectorAll('.blog-card, .insight-item');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
                observer.observe(card);
            });
        });
    </script>

    <script>
        class EnvatoSmoothHorizontalCarouselController {
            constructor() {
                // Get DOM elements
                this.carouselWrapper = document.getElementById('envatoCarouselInnerWrapper');
                this.previousButton = document.getElementById('envatoPreviousSlideButton');
                this.nextButton = document.getElementById('envatoNextSlideButton');
                this.progressIndicator = document.getElementById('envatoProgressIndicator');
                this.articleCards = this.carouselWrapper.querySelectorAll('.envato-news-article-card-component');

                // Configuration
                this.currentIndex = 0;
                this.cardWidth = 340;
                this.cardGap = 24;
                this.isAnimating = false;

                // Initialize
                this.init();
            }

            init() {
                console.log('Initializing carousel...');
                console.log('Total cards:', this.articleCards.length);

                this.calculateVisibleCards();
                this.createProgressDots();
                this.updateCarousel();
                this.attachEventListeners();
            }

            calculateVisibleCards() {
                // Get container width minus padding
                const container = this.carouselWrapper.parentElement;
                const containerWidth = container.offsetWidth - 160; // Account for padding (80px each side)
                const cardWithGap = this.cardWidth + this.cardGap;

                this.visibleCards = Math.floor(containerWidth / cardWithGap);
                this.maxIndex = Math.max(0, this.articleCards.length - this.visibleCards);

                console.log('Container width:', containerWidth);
                console.log('Visible cards:', this.visibleCards);
                console.log('Max index:', this.maxIndex);

                // Ensure current index is within bounds
                if (this.currentIndex > this.maxIndex) {
                    this.currentIndex = this.maxIndex;
                }
            }

            createProgressDots() {
                this.progressIndicator.innerHTML = '';
                const totalSlides = this.maxIndex + 1;

                for (let i = 0; i < totalSlides; i++) {
                    const dot = document.createElement('button');
                    dot.className = 'envato-carousel-progress-dot-element';
                    dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
                    dot.addEventListener('click', () => this.goToSlide(i));
                    this.progressIndicator.appendChild(dot);
                }
            }

            updateCarousel() {
                console.log('Updating carousel to index:', this.currentIndex);

                // Calculate transform value
                const translateX = -(this.currentIndex * (this.cardWidth + this.cardGap));

                // Apply transform
                this.carouselWrapper.style.transform = `translateX(${translateX}px)`;

                // Update button states
                this.previousButton.disabled = this.currentIndex <= 0;
                this.nextButton.disabled = this.currentIndex >= this.maxIndex;

                // Update progress dots
                const dots = this.progressIndicator.querySelectorAll('.envato-carousel-progress-dot-element');
                dots.forEach((dot, index) => {
                    dot.classList.toggle('envato-active-progress-dot', index === this.currentIndex);
                });

                console.log('Transform applied:', `translateX(${translateX}px)`);
                console.log('Previous button disabled:', this.previousButton.disabled);
                console.log('Next button disabled:', this.nextButton.disabled);
            }

            slideNext() {
                if (this.isAnimating || this.currentIndex >= this.maxIndex) {
                    console.log('Cannot slide next - at end or animating');
                    return;
                }

                console.log('Sliding to next');
                this.isAnimating = true;
                this.currentIndex++;
                this.updateCarousel();

                // Reset animation flag
                setTimeout(() => {
                    this.isAnimating = false;
                }, 500);
            }

            slidePrevious() {
                if (this.isAnimating || this.currentIndex <= 0) {
                    console.log('Cannot slide previous - at start or animating');
                    return;
                }

                console.log('Sliding to previous');
                this.isAnimating = true;
                this.currentIndex--;
                this.updateCarousel();

                // Reset animation flag
                setTimeout(() => {
                    this.isAnimating = false;
                }, 500);
            }

            goToSlide(index) {
                if (this.isAnimating || index === this.currentIndex || index < 0 || index > this.maxIndex) {
                    return;
                }

                console.log('Going to slide:', index);
                this.isAnimating = true;
                this.currentIndex = index;
                this.updateCarousel();

                setTimeout(() => {
                    this.isAnimating = false;
                }, 500);
            }

            attachEventListeners() {
                console.log('Attaching event listeners...');

                // Button clicks
                this.nextButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    console.log('Next button clicked');
                    this.slideNext();
                });

                this.previousButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    console.log('Previous button clicked');
                    this.slidePrevious();
                });

                // Keyboard navigation
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'ArrowLeft') {
                        e.preventDefault();
                        this.slidePrevious();
                    } else if (e.key === 'ArrowRight') {
                        e.preventDefault();
                        this.slideNext();
                    }
                });

                // Touch events for mobile
                let startX = 0;
                let isDragging = false;

                this.carouselWrapper.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].clientX;
                    isDragging = true;
                }, { passive: true });

                this.carouselWrapper.addEventListener('touchend', (e) => {
                    if (!isDragging) return;

                    const endX = e.changedTouches[0].clientX;
                    const diff = startX - endX;

                    if (Math.abs(diff) > 50) {
                        if (diff > 0) {
                            this.slideNext();
                        } else {
                            this.slidePrevious();
                        }
                    }

                    isDragging = false;
                }, { passive: true });

                // Handle window resize
                window.addEventListener('resize', () => {
                    this.calculateVisibleCards();
                    this.createProgressDots();
                    this.updateCarousel();
                });

                console.log('Event listeners attached successfully');
            }
        }

        // Initialize carousel when DOM is ready
        document.addEventListener('DOMContentLoaded', () => {
            console.log('DOM loaded, initializing carousel...');
            new EnvatoSmoothHorizontalCarouselController();
        });
    </script>
    
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const cards = document.querySelectorAll("#blogGrid .blog-card");
        const loadMoreBtn = document.getElementById("loadMoreBtn");
        let visibleCount = 3;

        // Hide all except first 3
        cards.forEach((card, index) => {
            if (index >= visibleCount) {
                card.style.display = "none";
            }
        });

        loadMoreBtn?.addEventListener("click", function () {
            let nextVisible = visibleCount + 3;
            for (let i = visibleCount; i < nextVisible && i < cards.length; i++) {
                cards[i].style.display = "block";
            }
            visibleCount += 3;

            if (visibleCount >= cards.length) {
                loadMoreBtn.style.display = "none";
            }
        });
    });
</script>

<script>
    document.querySelectorAll('.blog-card').forEach(card => {
        card.addEventListener('click', () => {
            const blogId = card.getAttribute('data-id');
            document.getElementById('blogIdInput').value = blogId;
            document.getElementById('redirectForm').submit();
        });
    });
</script>


</body>

</html>