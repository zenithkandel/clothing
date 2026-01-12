/* ============================================
   XOLL SOCIETY — ADMIN DASHBOARD JAVASCRIPT
   Professional Admin Panel Functionality
   ============================================ */

document.addEventListener('DOMContentLoaded', function () {

    // ============================================
    // ELEMENT REFERENCES
    // ============================================
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const adminMain = document.getElementById('adminMain');
    const contentFrame = document.getElementById('contentFrame');
    const frameLoader = document.getElementById('frameLoader');
    const bottomNavMenu = document.getElementById('bottomNavMenu');
    const userMenu = document.getElementById('userMenu');
    const userDropdown = document.getElementById('userDropdown');

    // Navigation items
    const sidebarNavItems = document.querySelectorAll('.sidebar-nav .nav-item');
    const bottomNavItems = document.querySelectorAll('.bottom-nav-item[data-page]');
    const dropdownNavItems = document.querySelectorAll('.dropdown-item[data-page]');

    // ============================================
    // SIDEBAR FUNCTIONALITY
    // ============================================
    function openSidebar() {
        sidebar.classList.add('active');
        sidebarOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
        sidebar.classList.remove('active');
        sidebarOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    function toggleSidebar() {
        if (sidebar.classList.contains('active')) {
            closeSidebar();
        } else {
            openSidebar();
        }
    }

    // Desktop sidebar collapse (tablet+)
    function toggleSidebarDesktop() {
        if (window.innerWidth >= 1024) {
            sidebar.classList.toggle('collapsed');
            adminMain.classList.toggle('sidebar-collapsed');

            // Save preference
            const isCollapsed = sidebar.classList.contains('collapsed');
            localStorage.setItem('xoll-admin-sidebar-collapsed', isCollapsed);
        } else if (window.innerWidth >= 768) {
            // On tablet, just toggle visibility
            sidebar.classList.toggle('collapsed');
            adminMain.classList.toggle('sidebar-collapsed');
        } else {
            // Mobile - use overlay sidebar
            toggleSidebar();
        }
    }

    // Load saved sidebar state
    function loadSidebarState() {
        if (window.innerWidth >= 1024) {
            const isCollapsed = localStorage.getItem('xoll-admin-sidebar-collapsed') === 'true';
            if (isCollapsed) {
                sidebar.classList.add('collapsed');
                adminMain.classList.add('sidebar-collapsed');
            }
        }
    }

    // Event listeners for sidebar
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', toggleSidebarDesktop);
    }

    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', closeSidebar);
    }

    if (bottomNavMenu) {
        bottomNavMenu.addEventListener('click', openSidebar);
    }

    // Load initial state
    loadSidebarState();

    // ============================================
    // USER DROPDOWN MENU
    // ============================================
    function toggleUserDropdown() {
        userDropdown.classList.toggle('active');
    }

    function closeUserDropdown() {
        userDropdown.classList.remove('active');
    }

    if (userMenu) {
        const avatar = userMenu.querySelector('.user-avatar');
        if (avatar) {
            avatar.addEventListener('click', function (e) {
                e.stopPropagation();
                toggleUserDropdown();
            });
        }
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function (e) {
        if (userMenu && !userMenu.contains(e.target)) {
            closeUserDropdown();
        }
    });

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
                if (window.innerWidth < 768) {
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

    // Dropdown navigation click handler
    dropdownNavItems.forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            const page = this.getAttribute('data-page');
            if (page) {
                loadPage(page);
                updateActiveNav(page);
                closeUserDropdown();
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
                    // Update page title
                    const iframeTitle = contentFrame.contentDocument.title;
                    if (iframeTitle) {
                        document.title = iframeTitle + ' — XOLL Admin';
                    }
                }
            } catch (e) {
                // Cross-origin restriction, ignore
            }
        });
    }

    // ============================================
    // GLOBAL SEARCH FUNCTIONALITY
    // ============================================
    const globalSearch = document.querySelector('.global-search .search-input');

    if (globalSearch) {
        // Keyboard shortcut (Cmd/Ctrl + K)
        document.addEventListener('keydown', function (e) {
            if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
                e.preventDefault();
                globalSearch.focus();
            }
        });

        // Search submit
        globalSearch.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                const query = this.value.trim();
                if (query) {
                    loadPage(`search.php?q=${encodeURIComponent(query)}`);
                    this.blur();
                }
            }
        });

        // Escape to blur
        globalSearch.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                this.blur();
            }
        });
    }

    // ============================================
    // RESPONSIVE HANDLING
    // ============================================
    let previousWidth = window.innerWidth;

    function handleResize() {
        const currentWidth = window.innerWidth;

        // Crossing breakpoints
        if ((previousWidth < 768 && currentWidth >= 768) ||
            (previousWidth >= 768 && currentWidth < 768)) {

            // Reset mobile sidebar state
            sidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
            document.body.style.overflow = '';

            // On desktop, load saved collapsed state
            if (currentWidth >= 1024) {
                loadSidebarState();
            } else if (currentWidth >= 768) {
                // Tablet - show sidebar by default
                sidebar.classList.remove('collapsed');
                adminMain.classList.remove('sidebar-collapsed');
            }
        }

        previousWidth = currentWidth;
    }

    // Debounced resize handler
    let resizeTimeout;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(handleResize, 150);
    });

    // ============================================
    // KEYBOARD NAVIGATION
    // ============================================
    document.addEventListener('keydown', function (e) {
        // Escape closes sidebar on mobile
        if (e.key === 'Escape') {
            if (window.innerWidth < 768 && sidebar.classList.contains('active')) {
                closeSidebar();
            }
            closeUserDropdown();
        }
    });

    // ============================================
    // NOTIFICATION UPDATES (SIMULATED)
    // ============================================
    function updateNotificationBadge(count) {
        const badge = document.querySelector('.notification-badge');
        if (badge) {
            badge.textContent = count;
            badge.style.display = count > 0 ? 'flex' : 'none';
        }
    }

    // ============================================
    // IFRAME COMMUNICATION
    // ============================================
    window.addEventListener('message', function (e) {
        // Handle messages from iframe pages
        if (e.data && e.data.type) {
            switch (e.data.type) {
                case 'navigate':
                    if (e.data.page) {
                        loadPage(e.data.page);
                        updateActiveNav(e.data.page);
                    }
                    break;

                case 'updateTitle':
                    if (e.data.title) {
                        document.title = e.data.title + ' — XOLL Admin';
                    }
                    break;

                case 'notification':
                    if (typeof e.data.count === 'number') {
                        updateNotificationBadge(e.data.count);
                    }
                    break;

                case 'refresh':
                    if (contentFrame) {
                        contentFrame.contentWindow.location.reload();
                    }
                    break;
            }
        }
    });

    // ============================================
    // LOGOUT HANDLER
    // ============================================
    const logoutBtn = document.querySelector('.dropdown-item.logout');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', function () {
            // Confirmation dialog
            if (confirm('Are you sure you want to sign out?')) {
                // Redirect to logout endpoint
                window.location.href = 'logout.php';
            }
        });
    }

    // ============================================
    // INITIALIZE
    // ============================================
    console.log('XOLL Admin Dashboard initialized');

});
