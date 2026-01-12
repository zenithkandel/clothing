/* ============================================
   XOLL SOCIETY — MAIN JAVASCRIPT
   Premium Editorial Streetwear Brand
   ============================================ */

document.addEventListener('DOMContentLoaded', function () {

    // ============================================
    // NAVIGATION
    // ============================================
    const nav = document.querySelector('.nav');
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');
    const navLinksItems = document.querySelectorAll('.nav-links a');

    // Scroll effect for navigation
    function handleNavScroll() {
        if (window.scrollY > 100) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    }

    window.addEventListener('scroll', handleNavScroll);

    // Mobile menu toggle
    if (navToggle) {
        navToggle.addEventListener('click', function () {
            navToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
            document.body.style.overflow = navLinks.classList.contains('active') ? 'hidden' : '';
        });
    }

    // Close mobile menu when clicking on links
    navLinksItems.forEach(link => {
        link.addEventListener('click', function () {
            navToggle.classList.remove('active');
            navLinks.classList.remove('active');
            document.body.style.overflow = '';
        });
    });

    // ============================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ============================================
    // SCROLL REVEAL ANIMATIONS
    // ============================================
    const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');

    function revealOnScroll() {
        const windowHeight = window.innerHeight;
        const revealPoint = 150;

        revealElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;

            if (elementTop < windowHeight - revealPoint) {
                element.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Initial check

    // ============================================
    // LAZY LOADING IMAGES
    // ============================================
    const lazyImages = document.querySelectorAll('img[data-src]');

    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                img.classList.add('loaded');
                observer.unobserve(img);
            }
        });
    }, {
        rootMargin: '50px 0px',
        threshold: 0.1
    });

    lazyImages.forEach(img => {
        imageObserver.observe(img);
    });

    // ============================================
    // GALLERY LIGHTBOX
    // ============================================
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightbox = document.querySelector('.lightbox');
    const lightboxImg = document.querySelector('.lightbox-content img');
    const lightboxClose = document.querySelector('.lightbox-close');

    if (galleryItems.length && lightbox) {
        galleryItems.forEach(item => {
            item.addEventListener('click', function () {
                const img = this.querySelector('img');
                const imgSrc = img.src || img.dataset.src;
                lightboxImg.src = imgSrc;
                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        // Close lightbox
        function closeLightbox() {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        }

        if (lightboxClose) {
            lightboxClose.addEventListener('click', closeLightbox);
        }

        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        // Close on escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && lightbox.classList.contains('active')) {
                closeLightbox();
            }
        });
    }

    // ============================================
    // COLLECTION ITEMS HOVER EFFECT
    // ============================================
    const collectionItems = document.querySelectorAll('.collection-item');

    collectionItems.forEach(item => {
        item.addEventListener('mouseenter', function () {
            this.style.transform = 'translateY(-5px)';
        });

        item.addEventListener('mouseleave', function () {
            this.style.transform = 'translateY(0)';
        });
    });

    // ============================================
    // PARALLAX EFFECT FOR HERO
    // ============================================
    const heroBackground = document.querySelector('.hero-background img');

    if (heroBackground) {
        window.addEventListener('scroll', function () {
            const scrolled = window.pageYOffset;
            const heroSection = document.querySelector('.hero');
            const heroHeight = heroSection.offsetHeight;

            if (scrolled < heroHeight) {
                heroBackground.style.transform = `translateY(${scrolled * 0.3}px)`;
            }
        });
    }

    // ============================================
    // INTERSECTION OBSERVER FOR SECTIONS
    // ============================================
    const sections = document.querySelectorAll('section[id]');

    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            const id = entry.target.getAttribute('id');
            const navLink = document.querySelector(`.nav-links a[href="#${id}"]`);

            if (entry.isIntersecting && navLink) {
                document.querySelectorAll('.nav-links a').forEach(link => {
                    link.classList.remove('active');
                });
                navLink.classList.add('active');
            }
        });
    }, {
        rootMargin: '-50% 0px -50% 0px'
    });

    sections.forEach(section => {
        sectionObserver.observe(section);
    });

    // ============================================
    // PRELOADER (Optional)
    // ============================================
    window.addEventListener('load', function () {
        document.body.classList.add('loaded');

        // Trigger initial animations
        setTimeout(() => {
            document.querySelectorAll('.hero-content > *').forEach((el, i) => {
                el.style.animationDelay = `${i * 0.2}s`;
            });
        }, 100);
    });

    // ============================================
    // CURSOR CUSTOM EFFECT (Optional Enhancement)
    // ============================================
    // Uncomment below for custom cursor effect
    /*
    const cursor = document.createElement('div');
    cursor.className = 'custom-cursor';
    document.body.appendChild(cursor);
    
    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    });
    
    document.querySelectorAll('a, button, .gallery-item, .collection-item').forEach(el => {
        el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
        el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
    });
    */

    // ============================================
    // CONSOLE BRANDING
    // ============================================
    console.log('%c XOLL SOCIETY ', 'background: #8B0F1A; color: #FFFFFF; font-size: 24px; font-weight: bold; padding: 10px 20px;');
    console.log('%c A Society of Souls ', 'color: #EDEDED; font-size: 14px;');

    // ============================================
    // STORE NOTIFY FORM
    // ============================================
    const notifyForm = document.querySelector('.notify-form');
    const notifyInput = document.querySelector('.notify-input');
    const notifyBtn = document.querySelector('.notify-btn');

    if (notifyForm && notifyInput && notifyBtn) {
        notifyBtn.addEventListener('click', function (e) {
            e.preventDefault();
            const email = notifyInput.value.trim();

            if (email && validateEmail(email)) {
                // Store email (for now just show confirmation)
                notifyInput.value = '';
                notifyInput.placeholder = 'You will be notified!';
                notifyBtn.textContent = 'Added ✓';
                notifyBtn.style.backgroundColor = '#2ecc71';
                notifyBtn.style.borderColor = '#2ecc71';

                setTimeout(() => {
                    notifyInput.placeholder = 'Enter your email';
                    notifyBtn.textContent = 'Notify Me';
                    notifyBtn.style.backgroundColor = '';
                    notifyBtn.style.borderColor = '';
                }, 3000);
            } else {
                notifyInput.style.borderColor = '#e74c3c';
                setTimeout(() => {
                    notifyInput.style.borderColor = '';
                }, 2000);
            }
        });

        notifyInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                notifyBtn.click();
            }
        });
    }

    // Email validation helper
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

});
