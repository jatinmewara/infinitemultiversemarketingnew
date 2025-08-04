const buttons = document.querySelectorAll(".doomButton");

buttons.forEach((button) => {
    const buttonRect = button.getBoundingClientRect();

    function createMasks() {
        const maskCount = 3;
        for (let i = 0; i < maskCount; i++) {
            const mask = document.createElement("div");
            mask.classList.add("doom-mask");

            const x = Math.random() * (button.offsetWidth - 20);
            const y = Math.random() * (button.offsetHeight - 20);

            mask.style.left = `${x}px`;
            mask.style.top = `${y}px`;

            const duration = Math.random() * 10000 + 10000;
            const delay = Math.random() * 5000;

            mask.animate(
                [
                    { transform: `translate(${x}px, ${y}px)` },
                    {
                        transform: `translate(${
                            Math.random() * (button.offsetWidth - 20)
                        }px, ${Math.random() * (button.offsetHeight - 20)}px)`,
                    },
                    {
                        transform: `translate(${
                            Math.random() * (button.offsetWidth - 20)
                        }px, ${Math.random() * (button.offsetHeight - 20)}px)`,
                    },
                    { transform: `translate(${x}px, ${y}px)` },
                ],
                {
                    duration: duration,
                    delay: delay,
                    iterations: Infinity,
                }
            );

            button.appendChild(mask);
        }
    }

    function createStars() {
        const starCount = 15;
        for (let i = 0; i < starCount; i++) {
            const star = document.createElement("div");
            star.classList.add("galaxy-star");

            const size = Math.random() * 2 + 1;
            star.style.width = `${size}px`;
            star.style.height = `${size}px`;

            const x = Math.random() * button.offsetWidth;
            const y = Math.random() * button.offsetHeight;
            star.style.left = `${x}px`;
            star.style.top = `${y}px`;

            const duration = Math.random() * 5000 + 5000;
            const delay = Math.random() * 2000;

            star.animate(
                [
                    {
                        opacity: 0,
                        transform: `translate(${x}px, ${y}px) scale(1)`,
                    },
                    {
                        opacity: 0.8,
                        transform: `translate(${
                            x + (Math.random() * 20 - 10)
                        }px, ${y + (Math.random() * 20 - 10)}px) scale(1.5)`,
                    },
                    {
                        opacity: 0,
                        transform: `translate(${
                            x + (Math.random() * 40 - 20)
                        }px, ${y + (Math.random() * 40 - 20)}px) scale(0.5)`,
                    },
                ],
                {
                    duration: duration,
                    delay: delay,
                    iterations: Infinity,
                }
            );

            button.appendChild(star);
        }
    }

    function createParticle(x, y) {
        const particle = document.createElement("div");
        particle.classList.add("galaxy-star");

        const size = Math.random() * 2 + 1;
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.left = `${x}px`;
        particle.style.top = `${y}px`;

        const animation = particle.animate(
            [
                { transform: "translate(0, 0)", opacity: 1 },
                {
                    transform: `translate(${Math.random() * 20 - 10}px, ${
                        Math.random() * 20 - 10
                    }px)`,
                    opacity: 0,
                },
            ],
            {
                duration: Math.random() * 1000 + 500,
                easing: "cubic-bezier(0, .9, .57, 1)",
            }
        );

        animation.onfinish = () => particle.remove();
        button.appendChild(particle);
    }

    button.addEventListener("mousemove", (e) => {
        const rect = button.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        if (Math.random() > 0.7) {
            createParticle(x, y);
        }
    });

    // Initialize for each button
    createMasks();
    createStars();
});

document.addEventListener("DOMContentLoaded", function () {
    // Phase cards scroll functionality with arrows and drag
    const scrollContainer = document.querySelector('.phases-scroll-container');
    const leftArrow = document.querySelector('.left-arrow');
    const rightArrow = document.querySelector('.right-arrow');
    const track = document.querySelector('.phases-track');
    
    if (scrollContainer && track) {
        let isDown = false;
        let startX;
        let scrollLeft;
        let momentumId;
        let velocity = 0;
        let lastX;
        let lastTime;
        const scrollAmount = 350; // Adjust based on your card width + gap
        const friction = 0.95; // Higher = less friction
        const snapThreshold = 50; // Pixels needed to trigger snap
        const snapDuration = 400; // Milliseconds for snap animation

        // Smooth scroll to position with easing
        function smoothScrollTo(targetPos) {
            const startPos = scrollContainer.scrollLeft;
            const distance = targetPos - startPos;
            const startTime = performance.now();
            
            function step(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / snapDuration, 1);
                // Ease-out quint easing function
                const easedProgress = 1 - Math.pow(1 - progress, 5);
                
                scrollContainer.scrollLeft = startPos + (distance * easedProgress);
                
                if (progress < 1) {
                    requestAnimationFrame(step);
                }
            }
            
            requestAnimationFrame(step);
        }

        // Handle momentum after mouse release
        function applyMomentum() {
            velocity *= friction;
            
            if (Math.abs(velocity) > 0.5) {
                scrollContainer.scrollLeft += velocity;
                momentumId = requestAnimationFrame(applyMomentum);
            } else {
                // Snap to nearest card
                const cardWidth = track.querySelector('.phase-card')?.offsetWidth || scrollAmount;
                const scrollPos = scrollContainer.scrollLeft;
                const cardIndex = Math.round(scrollPos / (cardWidth + 20)); // 20px gap
                const snapPosition = cardIndex * (cardWidth + 20);
                
                if (Math.abs(scrollPos - snapPosition) > snapThreshold) {
                    smoothScrollTo(snapPosition);
                }
                
                cancelAnimationFrame(momentumId);
            }
        }

        // Scroll left with smooth easing
        if (leftArrow) {
            leftArrow.addEventListener('click', () => {
                const cardWidth = track.querySelector('.phase-card')?.offsetWidth || scrollAmount;
                const targetPos = Math.max(scrollContainer.scrollLeft - (cardWidth + 20), 0);
                smoothScrollTo(targetPos);
            });
        }
        
        // Scroll right with smooth easing
        if (rightArrow) {
            rightArrow.addEventListener('click', () => {
                const cardWidth = track.querySelector('.phase-card')?.offsetWidth || scrollAmount;
                const maxScroll = track.scrollWidth - scrollContainer.clientWidth;
                const targetPos = Math.min(
                    scrollContainer.scrollLeft + (cardWidth + 20),
                    maxScroll
                );
                smoothScrollTo(targetPos);
            });
        }
        
        // Mouse drag functionality with momentum
        scrollContainer.addEventListener('mousedown', (e) => {
            isDown = true;
            scrollContainer.style.cursor = 'grabbing';
            scrollContainer.style.scrollBehavior = 'auto';
            startX = e.pageX - scrollContainer.offsetLeft;
            scrollLeft = scrollContainer.scrollLeft;
            lastX = e.pageX;
            lastTime = performance.now();
            velocity = 0;
            cancelAnimationFrame(momentumId);
        });
        
        scrollContainer.addEventListener('mouseleave', () => {
            if (isDown) {
                isDown = false;
                scrollContainer.style.cursor = 'grab';
                applyMomentum();
            }
        });
        
        scrollContainer.addEventListener('mouseup', () => {
            if (isDown) {
                isDown = false;
                scrollContainer.style.cursor = 'grab';
                scrollContainer.style.scrollBehavior = 'smooth';
                applyMomentum();
            }
        });
        
        scrollContainer.addEventListener('mousemove', (e) => {
            if(!isDown) return;
            e.preventDefault();
            
            const now = performance.now();
            const deltaTime = now - lastTime;
            
            if (deltaTime > 0) {
                const x = e.pageX - scrollContainer.offsetLeft;
                const walk = (x - startX) * 1.5; // Reduced speed multiplier
                scrollContainer.scrollLeft = scrollLeft - walk;
                
                // Calculate velocity for momentum
                const deltaX = e.pageX - lastX;
                velocity = deltaX / deltaTime * 15; // Smoother velocity calculation
                
                lastX = e.pageX;
                lastTime = now;
            }
        });
        
        // Touch events for mobile
        scrollContainer.addEventListener('touchstart', (e) => {
            isDown = true;
            startX = e.touches[0].pageX - scrollContainer.offsetLeft;
            scrollLeft = scrollContainer.scrollLeft;
            lastX = e.touches[0].pageX;
            lastTime = performance.now();
            velocity = 0;
            cancelAnimationFrame(momentumId);
        }, { passive: false });
        
        scrollContainer.addEventListener('touchend', () => {
            if (isDown) {
                isDown = false;
                applyMomentum();
            }
        }, { passive: false });
        
        scrollContainer.addEventListener('touchmove', (e) => {
            if(!isDown) return;
            e.preventDefault();
            
            const now = performance.now();
            const deltaTime = now - lastTime;
            
            if (deltaTime > 0) {
                const x = e.touches[0].pageX - scrollContainer.offsetLeft;
                const walk = (x - startX) * 1.5;
                scrollContainer.scrollLeft = scrollLeft - walk;
                
                const deltaX = e.touches[0].pageX - lastX;
                velocity = deltaX / deltaTime * 15;
                
                lastX = e.touches[0].pageX;
                lastTime = now;
            }
        }, { passive: false });
        
        // Hide/show arrows based on scroll position
        function updateArrows() {
            const maxScroll = track.scrollWidth - scrollContainer.clientWidth;
            
            if (leftArrow) {
                if (scrollContainer.scrollLeft <= 0) {
                    leftArrow.style.opacity = '0.5';
                    leftArrow.style.cursor = 'default';
                } else {
                    leftArrow.style.opacity = '1';
                    leftArrow.style.cursor = 'pointer';
                }
            }
            
            if (rightArrow) {
                if (scrollContainer.scrollLeft >= maxScroll) {
                    rightArrow.style.opacity = '0.5';
                    rightArrow.style.cursor = 'default';
                } else {
                    rightArrow.style.opacity = '1';
                    rightArrow.style.cursor = 'pointer';
                }
            }
        }
        
        scrollContainer.addEventListener('scroll', updateArrows);
        updateArrows(); // Initial check
        
        // Set initial cursor style
        scrollContainer.style.cursor = 'grab';
    }

    // Rest of your existing code (animations, etc.)...
    // Animate cards on scroll
    const cards = document.querySelectorAll(".preview-card, .phase-card");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = "1";
                        entry.target.style.transform = "translateY(0)";
                    }, index * 100);
                }
            });
        },
        { threshold: 0.1 }
    );

    cards.forEach((card) => {
        card.style.opacity = "0";
        card.style.transform = "translateY(20px)";
        card.style.transition = "opacity 0.5s ease, transform 0.5s ease";
        observer.observe(card);
    });

    // Mouse position tracking for card glow effect
    const phaseCards = document.querySelectorAll(".phase-card");

    phaseCards.forEach((card) => {
        card.addEventListener("mousemove", (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            card.style.setProperty("--mouse-x", `${x}px`);
            card.style.setProperty("--mouse-y", `${y}px`);
        });
    });

    // Add more floating stones dynamically
    const section = document.getElementById("blog-preview");
    if (section) {
        const colors = ["var(--iron-red)", "var(--captain-blue)"];

        for (let i = 0; i < 8; i++) {
            const stone = document.createElement("div");
            stone.className = "floating-stone";

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

            section.appendChild(stone);
        }
    }
});

// Create particles background
function createParticles() {
    const container = document.getElementById("particles-js");
    const particleCount = window.innerWidth < 768 ? 30 : 50;

    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement("div");
        particle.classList.add("particle");

        // Random properties
        const size = Math.random() * 5 + 1;
        const posX = Math.random() * 100;
        const posY = Math.random() * 100;
        const delay = Math.random() * 10;
        const duration = Math.random() * 20 + 10;

        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.left = `${posX}%`;
        particle.style.top = `${posY}%`;
        particle.style.animationDelay = `${delay}s`;
        particle.style.animationDuration = `${duration}s`;
        particle.style.opacity = Math.random() * 0.5 + 0.1;

        container.appendChild(particle);
    }
}

// Initialize
window.addEventListener("load", () => {
    createParticles();

    // Add hover effect to benefit cards
    const cards = document.querySelectorAll(".benefit-card");
    cards.forEach((card) => {
        card.addEventListener("mouseenter", () => {
            const icon = card.querySelector(".benefit-icon");
            icon.style.transform = "scale(1.1)";
            icon.style.transition = "transform 0.3s ease";
        });

        card.addEventListener("mouseleave", () => {
            const icon = card.querySelector(".benefit-icon");
            icon.style.transform = "scale(1)";
        });
    });
});
   // Smooth Scrolling for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Animation on Scroll
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.feature-card, .step, .join-card');

        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;

            if (elementPosition < screenPosition) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    };

    // Set initial state for animated elements
    document.querySelectorAll('.feature-card, .step, .join-card').forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'all 0.5s ease';
    });

    window.addEventListener('scroll', animateOnScroll);
    window.addEventListener('load', animateOnScroll);
