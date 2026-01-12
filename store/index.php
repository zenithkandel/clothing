<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description"
        content="XOLL Society Store — Shop premium high-fashion streetwear. Exclusive drops, volumes, and collections for those who refuse to blend into the ordinary.">
    <meta name="keywords" content="XOLL, store, fashion, streetwear, luxury, clothing, shop, premium">
    <meta name="author" content="XOLL Society">
    <meta name="theme-color" content="#0A0A0A">

    <!-- Open Graph -->
    <meta property="og:title" content="XOLL Store — Shop the Society">
    <meta property="og:description"
        content="Premium streetwear for souls who refuse to conform. Shop exclusive drops and collections.">
    <meta property="og:type" content="website">

    <title>XOLL Store — Shop the Society</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Oswald:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.1.0/css/fontawesome.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.1.0/css/solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.1.0/css/brands.css">


    <!-- Store Stylesheet -->
    <link rel="stylesheet" href="assets/css/store.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../gallery/logo.jpg">
</head>

<body>
    <!-- ============================================
         TOP NAVIGATION BAR
         ============================================ -->
    <header class="store-header">
        <div class="header-left">
            <button class="sidebar-toggle" id="sidebarToggle" aria-label="Toggle Menu">
                <span class="toggle-line"></span>
                <span class="toggle-line"></span>
                <span class="toggle-line"></span>
            </button>
            <a href="../index.html" class="header-logo">
                <span class="logo-text">XOLL</span>
            </a>
        </div>

        <div class="header-center">
            <form class="search-form" id="searchForm">
                <input type="text" class="search-input" placeholder="Search products..." aria-label="Search">
                <button type="submit" class="search-btn" aria-label="Search">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>

        <div class="header-right">
            <button class="header-icon search-mobile-toggle" aria-label="Search">
                <i class="fas fa-search"></i>
            </button>
            <button class="header-icon" aria-label="Wishlist">
                <i class="far fa-heart"></i>
                <span class="icon-badge">0</span>
            </button>
            <button class="header-icon cart-toggle" aria-label="Cart">
                <i class="fas fa-shopping-bag"></i>
                <span class="icon-badge">0</span>
            </button>
        </div>
    </header>

    <!-- Mobile Search Bar (Hidden by default) -->
    <div class="mobile-search" id="mobileSearch">
        <form class="mobile-search-form">
            <input type="text" class="mobile-search-input" placeholder="Search products...">
            <button type="button" class="mobile-search-close" aria-label="Close search">
                <i class="fas fa-times"></i>
            </button>
        </form>
    </div>

    <!-- ============================================
         SIDEBAR NAVIGATION
         ============================================ -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <span class="sidebar-title">Menu</span>
            <button class="sidebar-close" id="sidebarClose" aria-label="Close Menu">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <nav class="sidebar-nav">
            <!-- Main Navigation -->
            <div class="nav-section">
                <a href="home.php" class="nav-item active" data-page="home.php">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
                <a href="new-arrivals.php" class="nav-item" data-page="new-arrivals.php">
                    <i class="fas fa-sparkles"></i>
                    <span>New Arrivals</span>
                    <span class="nav-badge">New</span>
                </a>
                <a href="trending.php" class="nav-item" data-page="trending.php">
                    <i class="fas fa-fire"></i>
                    <span>Trending</span>
                </a>
            </div>

            <!-- Volumes Section -->
            <div class="nav-section">
                <div class="nav-section-header">
                    <span>Volumes</span>
                </div>
                <a href="volume.php?v=1" class="nav-item" data-page="volume.php?v=1">
                    <i class="fas fa-cube"></i>
                    <span>Volume I — Soul Awakening</span>
                </a>
                <a href="volume.php?v=2" class="nav-item" data-page="volume.php?v=2">
                    <i class="fas fa-cube"></i>
                    <span>Volume II — Silent Rebellion</span>
                </a>
                <a href="volume.php?v=3" class="nav-item" data-page="volume.php?v=3">
                    <i class="fas fa-cube"></i>
                    <span>Volume III — Identity</span>
                </a>
                <a href="volume.php?v=4" class="nav-item" data-page="volume.php?v=4">
                    <i class="fas fa-cube"></i>
                    <span>Volume IV — Unfiltered</span>
                </a>
                <a href="volume.php?v=5" class="nav-item" data-page="volume.php?v=5">
                    <i class="fas fa-cube"></i>
                    <span>Volume V — Ascension</span>
                </a>
                <a href="volume.php?v=6" class="nav-item" data-page="volume.php?v=6">
                    <i class="fas fa-cube"></i>
                    <span>Volume VI — Eternal</span>
                </a>
            </div>

            <!-- Categories Section -->
            <div class="nav-section">
                <div class="nav-section-header">
                    <span>Categories</span>
                </div>
                <a href="category.php?cat=tshirts" class="nav-item" data-page="category.php?cat=tshirts">
                    <i class="fas fa-tshirt"></i>
                    <span>T-Shirts</span>
                </a>
                <a href="category.php?cat=hoodies" class="nav-item" data-page="category.php?cat=hoodies">
                    <i class="fas fa-vest"></i>
                    <span>Hoodies & Sweaters</span>
                </a>
                <a href="category.php?cat=jackets" class="nav-item" data-page="category.php?cat=jackets">
                    <i class="fas fa-shirt-long-sleeve"></i>
                    <span>Jackets</span>
                </a>
                <a href="category.php?cat=pants" class="nav-item" data-page="category.php?cat=pants">
                    <i class="fas fa-socks"></i>
                    <span>Pants & Bottoms</span>
                </a>
                <a href="category.php?cat=accessories" class="nav-item" data-page="category.php?cat=accessories">
                    <i class="fas fa-hat-cowboy"></i>
                    <span>Accessories</span>
                </a>
            </div>

            <!-- Products Section -->
            <div class="nav-section">
                <div class="nav-section-header">
                    <span>Products</span>
                </div>
                <a href="products.php" class="nav-item" data-page="products.php">
                    <i class="fas fa-th-large"></i>
                    <span>All Products</span>
                </a>
                <a href="products.php?sale=1" class="nav-item" data-page="products.php?sale=1">
                    <i class="fas fa-tags"></i>
                    <span>On Sale</span>
                    <span class="nav-badge sale">Sale</span>
                </a>
                <a href="products.php?limited=1" class="nav-item" data-page="products.php?limited=1">
                    <i class="fas fa-gem"></i>
                    <span>Limited Edition</span>
                </a>
            </div>

        </nav>

        <!-- Sidebar Footer -->
        <div class="sidebar-footer">
            <a href="../index.html" class="back-to-main">
                <i class="fas fa-arrow-left"></i>
                <span>Back to Main Site</span>
            </a>
            <div class="sidebar-social">
                <a href="https://www.instagram.com/xollsociety/" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=61574726603141" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.tiktok.com/@xoll.nepal" target="_blank" aria-label="TikTok">
                    <i class="fab fa-tiktok"></i>
                </a>
            </div>
        </div>
    </aside>

    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- ============================================
         MAIN CONTENT AREA (IFRAME)
         ============================================ -->
    <main class="store-main" id="storeMain">
        <iframe id="contentFrame" src="home.php" frameborder="0" title="Store Content" allow="payment"></iframe>

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
        <a href="home.php" class="bottom-nav-item active" data-page="home.php">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a href="products.php" class="bottom-nav-item" data-page="products.php">
            <i class="fas fa-th-large"></i>
            <span>Shop</span>
        </a>
        <button class="bottom-nav-item" id="bottomNavMenu">
            <i class="fas fa-bars"></i>
            <span>Menu</span>
        </button>
        <a href="wishlist.php" class="bottom-nav-item" data-page="wishlist.php">
            <i class="far fa-heart"></i>
            <span>Wishlist</span>
        </a>
        <a href="cart.php" class="bottom-nav-item" data-page="cart.php">
            <i class="fas fa-shopping-bag"></i>
            <span>Cart</span>
            <span class="bottom-nav-badge">0</span>
        </a>
    </nav>

    <!-- Store JavaScript -->
    <script src="assets/js/store.js"></script>
</body>

</html>