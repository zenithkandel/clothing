<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description"
        content="XOLL Society Admin Dashboard — Manage your store, products, orders, and customers.">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#0A0A0A">

    <title>Admin Dashboard — XOLL Society</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Oswald:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Admin Stylesheet -->
    <link rel="stylesheet" href="assets/css/admin.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../gallery/logo.jpg">
</head>

<body>
    <!-- ============================================
         TOP HEADER BAR
         ============================================ -->
    <header class="admin-header">
        <div class="header-left">
            <button class="sidebar-toggle" id="sidebarToggle" aria-label="Toggle Menu">
                <i class="fas fa-bars"></i>
            </button>
            <a href="../index.html" class="header-logo">
                <span class="logo-text">XOLL</span>
                <span class="logo-badge">ADMIN</span>
            </a>
        </div>

        <div class="header-center">
            <div class="global-search">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search orders, products, customers..."
                    aria-label="Global Search">
                <kbd class="search-shortcut">⌘K</kbd>
            </div>
        </div>

        <div class="header-right">
            <button class="header-btn" aria-label="Notifications">
                <i class="fas fa-bell"></i>
                <span class="notification-badge">3</span>
            </button>
            <button class="header-btn" aria-label="Quick Actions">
                <i class="fas fa-plus"></i>
            </button>
            <div class="header-divider"></div>
            <button class="header-btn store-link" aria-label="View Store" onclick="window.open('../store/', '_blank')">
                <i class="fas fa-external-link-alt"></i>
                <span class="btn-text">Store</span>
            </button>
            <div class="user-menu" id="userMenu">
                <button class="user-avatar" aria-label="User Menu">
                    <img src="../gallery/logo.jpg" alt="Admin">
                </button>
                <div class="user-dropdown" id="userDropdown">
                    <div class="dropdown-header">
                        <span class="user-name">Admin User</span>
                        <span class="user-email">admin@xoll.com</span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="profile.php" class="dropdown-item" data-page="profile.php">
                        <i class="fas fa-user"></i>
                        <span>Profile Settings</span>
                    </a>
                    <a href="settings.php" class="dropdown-item" data-page="settings.php">
                        <i class="fas fa-cog"></i>
                        <span>System Settings</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <button class="dropdown-item logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Sign Out</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- ============================================
         SIDEBAR NAVIGATION
         ============================================ -->
    <aside class="admin-sidebar" id="sidebar">
        <nav class="sidebar-nav">
            <!-- Main Section -->
            <div class="nav-section">
                <div class="nav-section-label">Main</div>
                <a href="dashboard.php" class="nav-item active" data-page="dashboard.php">
                    <i class="fas fa-chart-line"></i>
                    <span>Dashboard</span>
                </a>
                <a href="analytics.php" class="nav-item" data-page="analytics.php">
                    <i class="fas fa-chart-pie"></i>
                    <span>Analytics</span>
                </a>
            </div>

            <!-- Store Management -->
            <div class="nav-section">
                <div class="nav-section-label">Store Management</div>
                <a href="orders.php" class="nav-item" data-page="orders.php">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Orders</span>
                    <span class="nav-badge">12</span>
                </a>
                <a href="products.php" class="nav-item" data-page="products.php">
                    <i class="fas fa-box"></i>
                    <span>Products</span>
                </a>
                <a href="categories.php" class="nav-item" data-page="categories.php">
                    <i class="fas fa-layer-group"></i>
                    <span>Categories</span>
                </a>
                <a href="inventory.php" class="nav-item" data-page="inventory.php">
                    <i class="fas fa-warehouse"></i>
                    <span>Inventory</span>
                    <span class="nav-badge warning">5</span>
                </a>
            </div>

            <!-- Customers -->
            <div class="nav-section">
                <div class="nav-section-label">Customers</div>
                <a href="customers.php" class="nav-item" data-page="customers.php">
                    <i class="fas fa-users"></i>
                    <span>All Customers</span>
                </a>
                <a href="reviews.php" class="nav-item" data-page="reviews.php">
                    <i class="fas fa-star"></i>
                    <span>Reviews</span>
                </a>
            </div>

            <!-- Content -->
            <div class="nav-section">
                <div class="nav-section-label">Content</div>
                <a href="volumes.php" class="nav-item" data-page="volumes.php">
                    <i class="fas fa-cube"></i>
                    <span>Volumes</span>
                </a>
                <a href="media.php" class="nav-item" data-page="media.php">
                    <i class="fas fa-images"></i>
                    <span>Media Library</span>
                </a>
                <a href="banners.php" class="nav-item" data-page="banners.php">
                    <i class="fas fa-image"></i>
                    <span>Banners</span>
                </a>
            </div>

            <!-- Marketing -->
            <div class="nav-section">
                <div class="nav-section-label">Marketing</div>
                <a href="discounts.php" class="nav-item" data-page="discounts.php">
                    <i class="fas fa-tags"></i>
                    <span>Discounts</span>
                </a>
                <a href="coupons.php" class="nav-item" data-page="coupons.php">
                    <i class="fas fa-ticket-alt"></i>
                    <span>Coupons</span>
                </a>
            </div>

            <!-- Settings -->
            <div class="nav-section">
                <div class="nav-section-label">System</div>
                <a href="settings.php" class="nav-item" data-page="settings.php">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
                <a href="users.php" class="nav-item" data-page="users.php">
                    <i class="fas fa-user-shield"></i>
                    <span>Admin Users</span>
                </a>
                <a href="logs.php" class="nav-item" data-page="logs.php">
                    <i class="fas fa-history"></i>
                    <span>Activity Logs</span>
                </a>
            </div>
        </nav>

        <!-- Sidebar Footer -->
        <div class="sidebar-footer">
            <div class="storage-info">
                <div class="storage-header">
                    <span>Storage Used</span>
                    <span class="storage-value">2.4 GB / 10 GB</span>
                </div>
                <div class="storage-bar">
                    <div class="storage-fill" style="width: 24%"></div>
                </div>
            </div>
            <a href="../store/" target="_blank" class="sidebar-store-link">
                <i class="fas fa-store"></i>
                <span>View Store</span>
                <i class="fas fa-external-link-alt"></i>
            </a>
        </div>
    </aside>

    <!-- Sidebar Overlay (Mobile) -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- ============================================
         MAIN CONTENT AREA (IFRAME)
         ============================================ -->
    <main class="admin-main" id="adminMain">
        <iframe id="contentFrame" src="dashboard.php" frameborder="0" title="Admin Content"></iframe>

        <!-- Loading Indicator -->
        <div class="frame-loader" id="frameLoader">
            <div class="loader-spinner"></div>
            <span>Loading...</span>
        </div>
    </main>

    <!-- ============================================
         MOBILE BOTTOM NAVIGATION
         ============================================ -->
    <nav class="mobile-bottom-nav">
        <a href="dashboard.php" class="bottom-nav-item active" data-page="dashboard.php">
            <i class="fas fa-chart-line"></i>
            <span>Dashboard</span>
        </a>
        <a href="orders.php" class="bottom-nav-item" data-page="orders.php">
            <i class="fas fa-shopping-cart"></i>
            <span>Orders</span>
            <span class="nav-badge-mobile">12</span>
        </a>
        <a href="products.php" class="bottom-nav-item" data-page="products.php">
            <i class="fas fa-box"></i>
            <span>Products</span>
        </a>
        <button class="bottom-nav-item" id="bottomNavMenu">
            <i class="fas fa-th"></i>
            <span>More</span>
        </button>
    </nav>

    <!-- Admin JavaScript -->
    <script src="assets/js/admin.js"></script>
</body>

</html>