/* ============================================
   XOLL SOCIETY — STORE JAVASCRIPT
   Mobile-First Premium Ecommerce Functionality
   ============================================ */

document.addEventListener('DOMContentLoaded', function () {

    // ============================================
    // ELEMENT REFERENCES
    // ============================================
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebarClose = document.getElementById('sidebarClose');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const storeMain = document.getElementById('storeMain');
    const contentFrame = document.getElementById('contentFrame');
    const frameLoader = document.getElementById('frameLoader');
    const mobileSearch = document.getElementById('mobileSearch');
    const searchMobileToggle = document.querySelector('.search-mobile-toggle');
    const mobileSearchClose = document.querySelector('.mobile-search-close');
    const bottomNavMenu = document.getElementById('bottomNavMenu');

    // Navigation items
    const sidebarNavItems = document.querySelectorAll('.sidebar-nav .nav-item');
    const bottomNavItems = document.querySelectorAll('.bottom-nav-item[data-page]');

    // ============================================
    // SIDEBAR FUNCTIONALITY
    // ============================================
    function openSidebar() {
        sidebar.classList.add('active');
        sidebarToggle.classList.add('active');
        sidebarOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';

        // On tablet/desktop, adjust main content
        if (window.innerWidth >= 768 && window.innerWidth < 1024) {
            storeMain.classList.add('sidebar-active');
        }
    }

    function closeSidebar() {
        sidebar.classList.remove('active');
        sidebarToggle.classList.remove('active');
        sidebarOverlay.classList.remove('active');
        document.body.style.overflow = '';

        if (window.innerWidth >= 768 && window.innerWidth < 1024) {
            storeMain.classList.remove('sidebar-active');
        }
    }

    function toggleSidebar() {
        if (sidebar.classList.contains('active')) {
            closeSidebar();
        } else {
            openSidebar();
        }
    }

    // Desktop sidebar collapse
    function toggleSidebarDesktop() {
        if (window.innerWidth >= 1024) {
            sidebar.classList.toggle('collapsed');
            storeMain.classList.toggle('sidebar-collapsed');

            // Save preference
            const isCollapsed = sidebar.classList.contains('collapsed');
            localStorage.setItem('xoll-sidebar-collapsed', isCollapsed);
        } else {
            toggleSidebar();
        }
    }

    // Event listeners for sidebar
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', toggleSidebarDesktop);
    }

    if (sidebarClose) {
        sidebarClose.addEventListener('click', closeSidebar);
    }

    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', closeSidebar);
    }

    if (bottomNavMenu) {
        bottomNavMenu.addEventListener('click', openSidebar);
    }

    // ============================================
    // MOBILE SEARCH FUNCTIONALITY
    // ============================================
    function openMobileSearch() {
        mobileSearch.classList.add('active');
        const input = mobileSearch.querySelector('.mobile-search-input');
        if (input) {
            setTimeout(() => input.focus(), 300);
        }
    }

    function closeMobileSearch() {
        mobileSearch.classList.remove('active');
    }

    if (searchMobileToggle) {
        searchMobileToggle.addEventListener('click', openMobileSearch);
    }

    if (mobileSearchClose) {
        mobileSearchClose.addEventListener('click', closeMobileSearch);
    }

    // ============================================
    // IFRAME NAVIGATION
    // ============================================
    function showLoader() {
        if (frameLoader) {
            frameLoader.classList.add('active');
        }
    }

    function hideLoader() {
        if (frameLoader) {
            frameLoader.classList.remove('active');
        }
    }

    function loadPage(url) {
        if (contentFrame) {
            showLoader();
            contentFrame.src = url;
        }
    }

    function updateActiveNav(page) {
        // Update sidebar nav
        sidebarNavItems.forEach(item => {
            item.classList.remove('active');
            if (item.getAttribute('data-page') === page) {
                item.classList.add('active');
            }
        });

        // Update bottom nav
        bottomNavItems.forEach(item => {
            item.classList.remove('active');
            if (item.getAttribute('data-page') === page) {
                item.classList.add('active');
            }
        });
    }

    // Sidebar navigation click handler
    sidebarNavItems.forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            const page = this.getAttribute('data-page');
            if (page) {
                loadPage(page);
                updateActiveNav(page);

                // Close sidebar on mobile
                if (window.innerWidth < 1024) {
                    closeSidebar();
                }
            }
        });
    });

    // Bottom navigation click handler
    bottomNavItems.forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            const page = this.getAttribute('data-page');
            if (page) {
                loadPage(page);
                updateActiveNav(page);
            }
        });
    });

    // Iframe load event
    if (contentFrame) {
        contentFrame.addEventListener('load', function () {
            hideLoader();

            // Try to get current page from iframe
            try {
                const currentPage = contentFrame.contentWindow.location.pathname.split('/').pop();
                if (currentPage) {
                    updateActiveNav(currentPage);
                }
            } catch (e) {
                // Cross-origin restriction, ignore
            }
        });
    }

    // ============================================
    // SEARCH FORM HANDLERS
    // ============================================
    const searchForm = document.getElementById('searchForm');
    const mobileSearchForm = document.querySelector('.mobile-search-form');

    function handleSearch(query) {
        if (query.trim()) {
            loadPage(`search.php?q=${encodeURIComponent(query.trim())}`);
            closeMobileSearch();
            if (window.innerWidth < 1024) {
                closeSidebar();
            }
        }
    }

    if (searchForm) {
        searchForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const query = this.querySelector('.search-input').value;
            handleSearch(query);
        });
    }

    if (mobileSearchForm) {
        mobileSearchForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const query = this.querySelector('.mobile-search-input').value;
            handleSearch(query);
        });
    }

    // ============================================
    // RESPONSIVE HANDLING
    // ============================================
    let previousWidth = window.innerWidth;

    function handleResize() {
        const currentWidth = window.innerWidth;

        // Crossing the 1024px breakpoint
        if ((previousWidth < 1024 && currentWidth >= 1024) ||
            (previousWidth >= 1024 && currentWidth < 1024)) {

            // Reset sidebar state on breakpoint change
            sidebar.classList.remove('active', 'collapsed');
            sidebarToggle.classList.remove('active');
            sidebarOverlay.classList.remove('active');
            storeMain.classList.remove('sidebar-active', 'sidebar-collapsed');
            document.body.style.overflow = '';

            // On desktop, restore saved preference
            if (currentWidth >= 1024) {
                const wasCollapsed = localStorage.getItem('xoll-sidebar-collapsed') === 'true';
                if (wasCollapsed) {
                    sidebar.classList.add('collapsed');
                    storeMain.classList.add('sidebar-collapsed');
                }
            }
        }

        previousWidth = currentWidth;
    }

    // Debounced resize handler
    let resizeTimeout;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(handleResize, 100);
    });

    // ============================================
    // KEYBOARD NAVIGATION
    // ============================================
    document.addEventListener('keydown', function (e) {
        // Escape key closes sidebar and search
        if (e.key === 'Escape') {
            if (mobileSearch.classList.contains('active')) {
                closeMobileSearch();
            } else if (sidebar.classList.contains('active') && window.innerWidth < 1024) {
                closeSidebar();
            }
        }

        // Ctrl/Cmd + K opens search
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            if (window.innerWidth < 768) {
                openMobileSearch();
            } else {
                const searchInput = document.querySelector('.search-input');
                if (searchInput) searchInput.focus();
            }
        }
    });

    // ============================================
    // SWIPE GESTURES (Mobile)
    // ============================================
    let touchStartX = 0;
    let touchStartY = 0;
    let touchEndX = 0;
    let touchEndY = 0;
    const minSwipeDistance = 50;

    document.addEventListener('touchstart', function (e) {
        touchStartX = e.changedTouches[0].screenX;
        touchStartY = e.changedTouches[0].screenY;
    }, { passive: true });

    document.addEventListener('touchend', function (e) {
        touchEndX = e.changedTouches[0].screenX;
        touchEndY = e.changedTouches[0].screenY;
        handleSwipe();
    }, { passive: true });

    function handleSwipe() {
        const deltaX = touchEndX - touchStartX;
        const deltaY = Math.abs(touchEndY - touchStartY);

        // Only handle horizontal swipes (ignore vertical)
        if (deltaY > Math.abs(deltaX)) return;

        // Only on mobile
        if (window.innerWidth >= 1024) return;

        // Swipe right to open sidebar (from left edge)
        if (deltaX > minSwipeDistance && touchStartX < 50) {
            openSidebar();
        }

        // Swipe left to close sidebar
        if (deltaX < -minSwipeDistance && sidebar.classList.contains('active')) {
            closeSidebar();
        }
    }

    // ============================================
    // CART & WISHLIST BADGE UPDATES
    // ============================================
    function updateBadge(selector, count) {
        const badges = document.querySelectorAll(selector);
        badges.forEach(badge => {
            badge.textContent = count;
            badge.style.display = count > 0 ? 'flex' : 'none';
        });
    }

    // ============================================
    // IMMERSIVE MODE (Hide Header/Nav)
    // ============================================
    function setImmersiveMode(enabled) {
        if (enabled) {
            document.body.classList.add('immersive-mode');
        } else {
            document.body.classList.remove('immersive-mode');
        }
    }

    // Listen for messages from iframe
    window.addEventListener('message', function (e) {
        // Verify origin in production
        if (e.data.type === 'cartUpdate') {
            updateBadge('.cart-toggle .icon-badge, .bottom-nav-badge', e.data.count);
        }
        if (e.data.type === 'wishlistUpdate') {
            updateBadge('.header-icon[aria-label="Wishlist"] .icon-badge', e.data.count);
        }
        if (e.data.type === 'navigate') {
            loadPage(e.data.page);
            updateActiveNav(e.data.page);
        }
        if (e.data.type === 'immersiveMode') {
            setImmersiveMode(e.data.enabled);
        }
    });

    // ============================================
    // INITIALIZE
    // ============================================
    function init() {
        // Show initial loader
        showLoader();

        // On desktop, restore sidebar preference
        if (window.innerWidth >= 1024) {
            const wasCollapsed = localStorage.getItem('xoll-sidebar-collapsed') === 'true';
            if (wasCollapsed) {
                sidebar.classList.add('collapsed');
                storeMain.classList.add('sidebar-collapsed');
            }
        }

        // Set initial active state
        updateActiveNav('home.php');
    }

    init();

    // ============================================
    // CONSOLE BRANDING
    // ============================================
    console.log('%c XOLL STORE ', 'background: #8B0F1A; color: #FFFFFF; font-size: 20px; font-weight: bold; padding: 8px 16px;');
    console.log('%c Shop the Society ', 'color: #EDEDED; font-size: 12px;');

});
