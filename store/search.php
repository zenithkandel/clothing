<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search — XOLL Store</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Page Styles -->
    <link rel="stylesheet" href="assets/css/pages.css">
    <link rel="stylesheet" href="assets/css/search.css">
</head>

<body>

<?php
// ============================================
// SAMPLE PRODUCT DATA
// ============================================
$products = [
    // T-SHIRTS
    ['id' => 'p001', 'name' => 'OVERSIZED REBELLION TEE', 'category' => 'tshirts', 'volume' => 2, 'price' => 1299, 'image' => '../gallery/530653006_17861701017453250_551743686485492484_n.jpg', 'tags' => ['trending', 'oversized', 'black', 'tee', 'rebellion'], 'badge' => 'TRENDING'],
    ['id' => 'p005', 'name' => 'RAW IDENTITY GRAPHIC TEE', 'category' => 'tshirts', 'volume' => 3, 'price' => 1199, 'image' => '../gallery/539193489_17863244793453250_5562115636179451347_n.jpg', 'tags' => ['graphic', 'identity', 'raw', 'printed'], 'badge' => null],
    ['id' => 'p006', 'name' => 'SOUL LONG SLEEVE', 'category' => 'tshirts', 'volume' => 1, 'price' => 1499, 'image' => '../gallery/551636066_17866379583453250_3128446737634411358_n.jpg', 'tags' => ['long sleeve', 'soul', 'awakening'], 'badge' => null],
    ['id' => 'p013', 'name' => 'VOID DISTRESSED TEE', 'category' => 'tshirts', 'volume' => 4, 'price' => 1399, 'image' => '../gallery/551832554_17866379604453250_4732173630485519368_n.jpg', 'tags' => ['distressed', 'void', 'vintage', 'unfiltered'], 'badge' => null],
    ['id' => 'p014', 'name' => 'ETERNAL EMBROIDERED TEE', 'category' => 'tshirts', 'volume' => 6, 'price' => 1599, 'image' => '../gallery/530994264_17861701059453250_146576054870093936_n.jpg', 'tags' => ['embroidered', 'eternal', 'premium', 'new'], 'badge' => 'NEW'],
    // HOODIES
    ['id' => 'p002', 'name' => 'VOID HOODIE — BLACK', 'category' => 'hoodies', 'volume' => 4, 'price' => 2499, 'image' => '../gallery/551959800_17866379613453250_7410702544923065991_n.jpg', 'tags' => ['hoodie', 'void', 'black', 'heavyweight'], 'badge' => 'HOT'],
    ['id' => 'p008', 'name' => 'ETERNAL CREWNECK', 'category' => 'hoodies', 'volume' => 6, 'price' => 1899, 'image' => '../gallery/586380364_17872980210453250_5926094300255523770_n.jpg', 'tags' => ['crewneck', 'eternal', 'new', 'sweater'], 'badge' => 'NEW'],
    ['id' => 'p015', 'name' => 'ASCENSION PULLOVER HOODIE', 'category' => 'hoodies', 'volume' => 5, 'price' => 2699, 'image' => '../gallery/532994170_17862433299453250_1483585729862262501_n.jpg', 'tags' => ['pullover', 'ascension', 'heavyweight', 'hoodie'], 'badge' => null],
    ['id' => 'p016', 'name' => 'SILENT REBELLION ZIP HOODIE', 'category' => 'hoodies', 'volume' => 2, 'price' => 2899, 'image' => '../gallery/534153672_17862433332453250_8221509456359030360_n.jpg', 'tags' => ['zip', 'silent', 'rebellion', 'hoodie'], 'badge' => null],
    // JACKETS
    ['id' => 'p004', 'name' => 'ETERNAL BOMBER JACKET', 'category' => 'jackets', 'volume' => 6, 'price' => 3899, 'image' => '../gallery/538301050_17863244784453250_8525341170716193474_n.jpg', 'tags' => ['bomber', 'eternal', 'jacket', 'new', 'premium'], 'badge' => 'NEW'],
    ['id' => 'p017', 'name' => 'IDENTITY DENIM JACKET', 'category' => 'jackets', 'volume' => 3, 'price' => 3499, 'image' => '../gallery/551982258_17866379586453250_4886754037431346648_n.jpg', 'tags' => ['denim', 'identity', 'jacket', 'washed'], 'badge' => null],
    ['id' => 'p018', 'name' => 'VOID COACH JACKET', 'category' => 'jackets', 'volume' => 4, 'price' => 2799, 'image' => '../gallery/538472874_17863244802453250_921511862170345570_n.jpg', 'tags' => ['coach', 'void', 'lightweight', 'jacket'], 'badge' => null],
    // PANTS
    ['id' => 'p003', 'name' => 'TACTICAL CARGO PANTS', 'category' => 'pants', 'volume' => 5, 'price' => 2199, 'image' => '../gallery/538285766_17863244811453250_4909074703211498115_n.jpg', 'tags' => ['cargo', 'tactical', 'pants', 'utility'], 'badge' => null],
    ['id' => 'p009', 'name' => 'VOID MESH SHORTS', 'category' => 'pants', 'volume' => 4, 'price' => 1299, 'image' => '../gallery/586696890_17872981137453250_4163938839919627548_n.jpg', 'tags' => ['shorts', 'mesh', 'void', 'athletic'], 'badge' => 'NEW'],
    ['id' => 'p019', 'name' => 'ETERNAL JOGGERS', 'category' => 'pants', 'volume' => 6, 'price' => 1899, 'image' => '../gallery/581559191_17872292037453250_7709856973836633803_n.jpg', 'tags' => ['joggers', 'eternal', 'comfortable', 'new'], 'badge' => 'NEW'],
    ['id' => 'p020', 'name' => 'REBELLION WIDE PANTS', 'category' => 'pants', 'volume' => 2, 'price' => 2099, 'image' => '../gallery/581642234_17872292007453250_7344481137995579023_n.jpg', 'tags' => ['wide', 'rebellion', 'pants', 'loose'], 'badge' => null],
    // ACCESSORIES
    ['id' => 'p007', 'name' => 'XOLL SNAPBACK CAP', 'category' => 'accessories', 'volume' => 6, 'price' => 899, 'image' => '../gallery/584000549_17872981128453250_1650715616236789583_n.jpg', 'tags' => ['cap', 'snapback', 'hat', 'headwear'], 'badge' => 'NEW'],
    ['id' => 'p010', 'name' => 'TACTICAL CROSSBODY BAG', 'category' => 'accessories', 'volume' => 5, 'price' => 1599, 'image' => '../gallery/586996501_17872981119453250_8494339306604387097_n.jpg', 'tags' => ['bag', 'crossbody', 'tactical', 'utility'], 'badge' => 'NEW'],
    ['id' => 'p011', 'name' => 'XOLL BEANIE — BLACK', 'category' => 'accessories', 'volume' => 6, 'price' => 699, 'image' => '../gallery/587269800_17872980192453250_421811040122059306_n.jpg', 'tags' => ['beanie', 'headwear', 'black', 'winter'], 'badge' => 'NEW'],
    ['id' => 'p012', 'name' => 'XOLL CREW SOCKS (3-PACK)', 'category' => 'accessories', 'volume' => 6, 'price' => 499, 'image' => '../gallery/573947896_17872292016453250_1114473014122398770_n.jpg', 'tags' => ['socks', 'crew', 'pack', 'essentials'], 'badge' => null],
    ['id' => 'p021', 'name' => 'IDENTITY TOTE BAG', 'category' => 'accessories', 'volume' => 3, 'price' => 1199, 'image' => '../gallery/574313853_17872292025453250_4752990491108666301_n.jpg', 'tags' => ['tote', 'bag', 'identity', 'canvas'], 'badge' => null],
    ['id' => 'p022', 'name' => 'XOLL CHAIN NECKLACE', 'category' => 'accessories', 'volume' => 4, 'price' => 799, 'image' => '../gallery/530999987_17861701068453250_9040662411669042371_n.jpg', 'tags' => ['chain', 'necklace', 'jewelry', 'void'], 'badge' => null]
];

$volumeNames = [1 => 'Soul Awakening', 2 => 'Silent Rebellion', 3 => 'Identity', 4 => 'Unfiltered', 5 => 'Ascension', 6 => 'Eternal'];
$categoryNames = ['tshirts' => 'T-Shirts', 'hoodies' => 'Hoodies', 'jackets' => 'Jackets', 'pants' => 'Pants', 'accessories' => 'Accessories'];
$categoryIcons = ['tshirts' => 'fa-tshirt', 'hoodies' => 'fa-vest', 'jackets' => 'fa-shirt-long-sleeve', 'pants' => 'fa-socks', 'accessories' => 'fa-hat-cowboy'];

// Search parameters
$query = isset($_GET['q']) ? trim($_GET['q']) : '';
$category = isset($_GET['cat']) ? trim($_GET['cat']) : '';
$volume = isset($_GET['vol']) ? intval($_GET['vol']) : 0;
$sort = isset($_GET['sort']) ? trim($_GET['sort']) : 'relevance';
$minPrice = isset($_GET['min']) ? intval($_GET['min']) : 0;
$maxPrice = isset($_GET['max']) ? intval($_GET['max']) : 10000;

$results = [];
$searchPerformed = !empty($query) || !empty($category) || $volume > 0;

if ($searchPerformed) {
    foreach ($products as $product) {
        $match = true;
        
        if (!empty($query)) {
            $queryLower = strtolower($query);
            $nameLower = strtolower($product['name']);
            $tagsString = strtolower(implode(' ', $product['tags']));
            $categoryLower = strtolower($product['category']);
            $queryMatch = strpos($nameLower, $queryLower) !== false || strpos($tagsString, $queryLower) !== false || strpos($categoryLower, $queryLower) !== false;
            if (!$queryMatch) $match = false;
        }
        
        if (!empty($category) && $product['category'] !== $category) $match = false;
        if ($volume > 0 && $product['volume'] !== $volume) $match = false;
        if ($product['price'] < $minPrice || $product['price'] > $maxPrice) $match = false;
        
        if ($match) $results[] = $product;
    }
    
    // Sort results
    switch ($sort) {
        case 'price-low': usort($results, fn($a, $b) => $a['price'] - $b['price']); break;
        case 'price-high': usort($results, fn($a, $b) => $b['price'] - $a['price']); break;
        case 'newest': usort($results, fn($a, $b) => $b['volume'] - $a['volume']); break;
        case 'name': usort($results, fn($a, $b) => strcmp($a['name'], $b['name'])); break;
    }
}

$resultCount = count($results);
$hasActiveFilters = !empty($query) || !empty($category) || $volume > 0;

// Build clear filter URL
function buildFilterUrl($exclude = []) {
    global $query, $category, $volume, $sort;
    $params = [];
    if (!empty($query) && !in_array('q', $exclude)) $params['q'] = $query;
    if (!empty($category) && !in_array('cat', $exclude)) $params['cat'] = $category;
    if ($volume > 0 && !in_array('vol', $exclude)) $params['vol'] = $volume;
    if ($sort !== 'relevance') $params['sort'] = $sort;
    return 'search.php' . (!empty($params) ? '?' . http_build_query($params) : '');
}
?>

    <!-- ============================================
         SEARCH PAGE CONTAINER
         ============================================ -->
    <div class="search-page">
        
        <!-- Back Navigation -->
        <nav class="search-nav" aria-label="Search navigation">
            <a href="home.php" class="back-link">
                <i class="fas fa-arrow-left"></i>
                <span>Back</span>
            </a>
            <span class="nav-title">Search</span>
            <button type="button" class="filter-toggle" id="filterToggle" aria-label="Toggle filters">
                <i class="fas fa-sliders-h"></i>
                <?php if ($hasActiveFilters): ?>
                    <span class="filter-indicator"></span>
                <?php endif; ?>
            </button>
        </nav>

        <!-- Search Input Section -->
        <section class="search-input-section">
            <form class="search-form" method="GET" action="search.php" id="searchForm" role="search">
                <div class="search-box">
                    <i class="fas fa-search search-icon" aria-hidden="true"></i>
                    <input 
                        type="search" 
                        name="q" 
                        class="search-input" 
                        placeholder="Search products..." 
                        value="<?= htmlspecialchars($query) ?>"
                        autocomplete="off"
                        autocapitalize="off"
                        spellcheck="false"
                        aria-label="Search products"
                        id="searchInput"
                    >
                    <?php if (!empty($query)): ?>
                        <button type="button" class="clear-search" aria-label="Clear search" onclick="clearSearch()">
                            <i class="fas fa-times"></i>
                        </button>
                    <?php endif; ?>
                </div>
                
                <!-- Hidden fields to preserve filters -->
                <?php if (!empty($category)): ?>
                    <input type="hidden" name="cat" value="<?= htmlspecialchars($category) ?>">
                <?php endif; ?>
                <?php if ($volume > 0): ?>
                    <input type="hidden" name="vol" value="<?= $volume ?>">
                <?php endif; ?>
                <?php if ($sort !== 'relevance'): ?>
                    <input type="hidden" name="sort" value="<?= htmlspecialchars($sort) ?>">
                <?php endif; ?>
            </form>
        </section>

        <!-- Active Filters (Pills) -->
        <?php if ($hasActiveFilters): ?>
            <section class="active-filters" aria-label="Active search filters">
                <div class="filters-wrap">
                    <?php if (!empty($query)): ?>
                        <a href="<?= buildFilterUrl(['q']) ?>" class="filter-pill" aria-label="Remove search term filter">
                            <span>"<?= htmlspecialchars($query) ?>"</span>
                            <i class="fas fa-times"></i>
                        </a>
                    <?php endif; ?>
                    
                    <?php if (!empty($category)): ?>
                        <a href="<?= buildFilterUrl(['cat']) ?>" class="filter-pill" aria-label="Remove category filter">
                            <i class="fas <?= $categoryIcons[$category] ?? 'fa-tag' ?>"></i>
                            <span><?= $categoryNames[$category] ?></span>
                            <i class="fas fa-times"></i>
                        </a>
                    <?php endif; ?>
                    
                    <?php if ($volume > 0): ?>
                        <a href="<?= buildFilterUrl(['vol']) ?>" class="filter-pill" aria-label="Remove volume filter">
                            <span>Vol. <?= $volume ?></span>
                            <i class="fas fa-times"></i>
                        </a>
                    <?php endif; ?>
                    
                    <a href="search.php" class="clear-all-filters">Clear all</a>
                </div>
            </section>
        <?php endif; ?>

        <!-- Filter Panel (Collapsible) -->
        <section class="filter-panel" id="filterPanel" aria-label="Search filters">
            <form method="GET" action="search.php" id="filterForm">
                <?php if (!empty($query)): ?>
                    <input type="hidden" name="q" value="<?= htmlspecialchars($query) ?>">
                <?php endif; ?>
                
                <div class="filter-group">
                    <label class="filter-label">Category</label>
                    <div class="filter-options category-options">
                        <label class="filter-option <?= empty($category) ? 'active' : '' ?>">
                            <input type="radio" name="cat" value="" <?= empty($category) ? 'checked' : '' ?>>
                            <span class="option-content">
                                <i class="fas fa-th-large"></i>
                                <span>All</span>
                            </span>
                        </label>
                        <?php foreach ($categoryNames as $catKey => $catName): ?>
                            <label class="filter-option <?= $category === $catKey ? 'active' : '' ?>">
                                <input type="radio" name="cat" value="<?= $catKey ?>" <?= $category === $catKey ? 'checked' : '' ?>>
                                <span class="option-content">
                                    <i class="fas <?= $categoryIcons[$catKey] ?>"></i>
                                    <span><?= $catName ?></span>
                                </span>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="filter-group">
                    <label class="filter-label">Volume</label>
                    <div class="filter-options volume-options">
                        <label class="filter-option <?= $volume === 0 ? 'active' : '' ?>">
                            <input type="radio" name="vol" value="0" <?= $volume === 0 ? 'checked' : '' ?>>
                            <span class="option-content">All</span>
                        </label>
                        <?php foreach ($volumeNames as $volNum => $volName): ?>
                            <label class="filter-option <?= $volume === $volNum ? 'active' : '' ?>">
                                <input type="radio" name="vol" value="<?= $volNum ?>" <?= $volume === $volNum ? 'checked' : '' ?>>
                                <span class="option-content">
                                    <span class="vol-num"><?= $volNum ?></span>
                                </span>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="filter-group">
                    <label class="filter-label">Sort By</label>
                    <select name="sort" class="sort-select" onchange="this.form.submit()">
                        <option value="relevance" <?= $sort === 'relevance' ? 'selected' : '' ?>>Relevance</option>
                        <option value="newest" <?= $sort === 'newest' ? 'selected' : '' ?>>Newest First</option>
                        <option value="price-low" <?= $sort === 'price-low' ? 'selected' : '' ?>>Price: Low → High</option>
                        <option value="price-high" <?= $sort === 'price-high' ? 'selected' : '' ?>>Price: High → Low</option>
                        <option value="name" <?= $sort === 'name' ? 'selected' : '' ?>>Name: A → Z</option>
                    </select>
                </div>
                
                <button type="submit" class="apply-filters-btn">
                    Apply Filters
                </button>
            </form>
        </section>

        <?php if ($searchPerformed): ?>
            <!-- Results Header -->
            <header class="results-header">
                <div class="results-info">
                    <span class="results-count">
                        <?= $resultCount ?> <?= $resultCount === 1 ? 'result' : 'results' ?>
                    </span>
                    <?php if (!empty($query)): ?>
                        <span class="results-query">for "<?= htmlspecialchars($query) ?>"</span>
                    <?php endif; ?>
                </div>
                
                <div class="results-sort-mobile">
                    <select onchange="updateSort(this.value)" aria-label="Sort results">
                        <option value="relevance" <?= $sort === 'relevance' ? 'selected' : '' ?>>Relevance</option>
                        <option value="newest" <?= $sort === 'newest' ? 'selected' : '' ?>>Newest</option>
                        <option value="price-low" <?= $sort === 'price-low' ? 'selected' : '' ?>>Price ↑</option>
                        <option value="price-high" <?= $sort === 'price-high' ? 'selected' : '' ?>>Price ↓</option>
                    </select>
                </div>
            </header>

            <?php if ($resultCount > 0): ?>
                <!-- Search Results Grid -->
                <section class="search-results" aria-label="Search results">
                    <div class="results-grid">
                        <?php foreach ($results as $index => $product): ?>
                            <article 
                                class="product-card" 
                                data-product-id="<?= $product['id'] ?>"
                                style="animation-delay: <?= $index * 0.05 ?>s"
                            >
                                <a href="product.php?id=<?= $product['id'] ?>" class="product-link">
                                    <div class="product-image">
                                        <img 
                                            src="<?= $product['image'] ?>" 
                                            alt="<?= htmlspecialchars($product['name']) ?>"
                                            loading="lazy"
                                        >
                                        <?php if ($product['badge']): ?>
                                            <span class="product-badge"><?= $product['badge'] ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="product-details">
                                        <span class="product-volume">Vol. <?= $product['volume'] ?></span>
                                        <h3 class="product-name"><?= htmlspecialchars($product['name']) ?></h3>
                                        <p class="product-price">₱<?= number_format($product['price']) ?></p>
                                    </div>
                                </a>
                                <button class="product-wishlist" aria-label="Add to wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </section>

            <?php else: ?>
                <!-- No Results State -->
                <section class="no-results" aria-label="No results found">
                    <div class="no-results-content">
                        <div class="no-results-icon">
                            <i class="fas fa-search"></i>
                            <span class="icon-slash">/</span>
                        </div>
                        <h2>No results found</h2>
                        <p>
                            We couldn't find any products matching 
                            <?php if (!empty($query)): ?>
                                "<strong><?= htmlspecialchars($query) ?></strong>"
                            <?php else: ?>
                                your filters
                            <?php endif; ?>
                        </p>
                        
                        <div class="suggestions-box">
                            <h3>Try these:</h3>
                            <ul>
                                <li>Check your spelling</li>
                                <li>Use fewer or different keywords</li>
                                <li>Remove some filters</li>
                            </ul>
                        </div>
                        
                        <div class="no-results-actions">
                            <a href="search.php" class="btn-secondary">
                                <i class="fas fa-redo"></i>
                                Start Over
                            </a>
                            <a href="home.php" class="btn-primary">
                                <i class="fas fa-home"></i>
                                Browse All
                            </a>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

        <?php else: ?>
            <!-- Empty Search State (Suggestions) -->
            <section class="search-suggestions" aria-label="Search suggestions">
                
                <!-- Quick Category Picks -->
                <div class="suggestion-section">
                    <h2>
                        <i class="fas fa-th-large"></i>
                        Shop by Category
                    </h2>
                    <div class="category-cards">
                        <?php foreach ($categoryNames as $catKey => $catName): ?>
                            <a href="search.php?cat=<?= $catKey ?>" class="category-card-mini">
                                <div class="category-icon">
                                    <i class="fas <?= $categoryIcons[$catKey] ?>"></i>
                                </div>
                                <span><?= $catName ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- Popular Searches -->
                <div class="suggestion-section">
                    <h2>
                        <i class="fas fa-fire"></i>
                        Popular Searches
                    </h2>
                    <div class="popular-tags">
                        <a href="search.php?q=hoodie" class="search-tag">Hoodie</a>
                        <a href="search.php?q=oversized" class="search-tag">Oversized</a>
                        <a href="search.php?q=cargo" class="search-tag">Cargo</a>
                        <a href="search.php?q=jacket" class="search-tag">Jacket</a>
                        <a href="search.php?q=black" class="search-tag">Black</a>
                        <a href="search.php?q=eternal" class="search-tag">Eternal</a>
                        <a href="search.php?q=cap" class="search-tag">Cap</a>
                        <a href="search.php?q=bag" class="search-tag">Bag</a>
                    </div>
                </div>
                
                <!-- Browse by Volume -->
                <div class="suggestion-section">
                    <h2>
                        <i class="fas fa-layer-group"></i>
                        Browse by Volume
                    </h2>
                    <div class="volume-cards">
                        <?php foreach ($volumeNames as $volNum => $volName): ?>
                            <a href="search.php?vol=<?= $volNum ?>" class="volume-card-mini">
                                <span class="vol-number"><?= $volNum ?></span>
                                <div class="vol-info">
                                    <span class="vol-label">Volume <?= $volNum ?></span>
                                    <span class="vol-name"><?= $volName ?></span>
                                </div>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                
            </section>
        <?php endif; ?>
        
    </div>

    <!-- Page Scripts -->
    <script src="assets/js/pages.js"></script>
    <script>
        // Notify parent to enter immersive mode (hide header/nav)
        if (window.parent !== window) {
            window.parent.postMessage({ type: 'immersiveMode', enabled: true }, '*');
        }
        
        // Exit immersive mode when navigating away
        window.addEventListener('beforeunload', () => {
            if (window.parent !== window) {
                window.parent.postMessage({ type: 'immersiveMode', enabled: false }, '*');
            }
        });
        
        // Filter panel toggle
        const filterToggle = document.getElementById('filterToggle');
        const filterPanel = document.getElementById('filterPanel');
        
        if (filterToggle && filterPanel) {
            filterToggle.addEventListener('click', () => {
                filterPanel.classList.toggle('open');
                filterToggle.classList.toggle('active');
            });
        }
        
        // Clear search
        function clearSearch() {
            const input = document.getElementById('searchInput');
            if (input) {
                input.value = '';
                input.focus();
            }
        }
        
        // Update sort (preserving other params)
        function updateSort(value) {
            const url = new URL(window.location.href);
            if (value === 'relevance') {
                url.searchParams.delete('sort');
            } else {
                url.searchParams.set('sort', value);
            }
            window.location.href = url.toString();
        }
        
        // Auto-submit filter options on change (desktop)
        document.querySelectorAll('.filter-option input').forEach(input => {
            input.addEventListener('change', function() {
                // Update active class
                this.closest('.filter-options').querySelectorAll('.filter-option').forEach(opt => {
                    opt.classList.remove('active');
                });
                this.closest('.filter-option').classList.add('active');
                
                // Auto-submit on larger screens
                if (window.innerWidth >= 768) {
                    this.closest('form').submit();
                }
            });
        });
        
        // Focus search input on page load if empty
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('searchInput');
            const hasResults = <?= $searchPerformed ? 'true' : 'false' ?>;
            
            if (searchInput && !hasResults && !searchInput.value) {
                searchInput.focus();
            }
        });
        
        // Keyboard shortcut (/ to focus search)
        document.addEventListener('keydown', (e) => {
            if (e.key === '/' && document.activeElement.tagName !== 'INPUT') {
                e.preventDefault();
                document.getElementById('searchInput')?.focus();
            }
        });
    </script>
</body>

</html>
