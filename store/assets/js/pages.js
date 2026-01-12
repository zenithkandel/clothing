/* ============================================
   XOLL STORE — IFRAME PAGES JAVASCRIPT
   Mobile-First Content Scripts
   ============================================ */

document.addEventListener('DOMContentLoaded', function () {

    // ============================================
    // WISHLIST FUNCTIONALITY
    // ============================================
    const wishlistButtons = document.querySelectorAll('.product-wishlist');

    wishlistButtons.forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            this.classList.toggle('active');

            // Update icon
            const icon = this.querySelector('i');
            if (icon) {
                if (this.classList.contains('active')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                }
            }

            // Get product info for wishlist storage
            const productCard = this.closest('.product-card');
            if (productCard) {
                const productId = productCard.dataset.productId;
                const isActive = this.classList.contains('active');

                // Save to localStorage
                saveToWishlist(productId, isActive);

                // Notify parent frame about wishlist update
                updateWishlistCount();
            }
        });
    });

    // ============================================
    // WISHLIST STORAGE
    // ============================================
    function getWishlist() {
        try {
            return JSON.parse(localStorage.getItem('xoll_wishlist')) || [];
        } catch (e) {
            return [];
        }
    }

    function saveToWishlist(productId, add) {
        if (!productId) return;

        let wishlist = getWishlist();

        if (add) {
            if (!wishlist.includes(productId)) {
                wishlist.push(productId);
            }
        } else {
            wishlist = wishlist.filter(id => id !== productId);
        }

        localStorage.setItem('xoll_wishlist', JSON.stringify(wishlist));
    }

    function updateWishlistCount() {
        const wishlist = getWishlist();
        // Send message to parent frame
        if (window.parent !== window) {
            window.parent.postMessage({
                type: 'wishlistUpdate',
                count: wishlist.length
            }, '*');
        }
    }

    // ============================================
    // INITIALIZE WISHLIST STATE
    // ============================================
    function initWishlistState() {
        const wishlist = getWishlist();

        document.querySelectorAll('.product-card[data-product-id]').forEach(card => {
            const productId = card.dataset.productId;
            const wishlistBtn = card.querySelector('.product-wishlist');

            if (wishlistBtn && wishlist.includes(productId)) {
                wishlistBtn.classList.add('active');
                const icon = wishlistBtn.querySelector('i');
                if (icon) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                }
            }
        });

        // Update parent frame with initial count
        updateWishlistCount();
    }

    initWishlistState();

    // ============================================
    // NAVIGATION HELPER
    // ============================================
    window.navigateTo = function (page) {
        if (window.parent !== window) {
            window.parent.postMessage({
                type: 'navigate',
                page: page
            }, '*');
        } else {
            window.location.href = page;
        }
    };

    // ============================================
    // LAZY LOADING IMAGES
    // ============================================
    const lazyImages = document.querySelectorAll('img[data-src]');

    if ('IntersectionObserver' in window) {
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

        lazyImages.forEach(img => imageObserver.observe(img));
    } else {
        // Fallback for older browsers
        lazyImages.forEach(img => {
            img.src = img.dataset.src;
            img.removeAttribute('data-src');
        });
    }

    // ============================================
    // SMOOTH SCROLL FOR ANCHORS
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

});
