<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product — XOLL Store</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Page Styles -->
    <link rel="stylesheet" href="assets/css/pages.css">
    <link rel="stylesheet" href="assets/css/product.css">
</head>

<body>

    <?php
    // ============================================
// COMPLETE PRODUCT DATABASE
// ============================================
    $products = [
        'p001' => [
            'id' => 'p001',
            'name' => 'OVERSIZED REBELLION TEE',
            'category' => 'tshirts',
            'volume' => 2,
            'price' => 1299,
            'originalPrice' => 1599,
            'badge' => 'TRENDING',
            'description' => 'Make your statement with the Oversized Rebellion Tee. Crafted from premium heavyweight cotton, this tee features a relaxed drop-shoulder silhouette that embodies the spirit of silent rebellion. The oversized fit provides ultimate comfort while maintaining a bold streetwear aesthetic.',
            'details' => [
                'Material' => '100% Premium Heavyweight Cotton (280 GSM)',
                'Fit' => 'Oversized / Relaxed',
                'Neckline' => 'Ribbed crew neck',
                'Print' => 'High-quality screen print',
                'Care' => 'Machine wash cold, tumble dry low',
                'Made In' => 'Designed in Nepal, Made with Pride'
            ],
            'features' => [
                'Premium heavyweight 280 GSM cotton',
                'Oversized drop-shoulder design',
                'Double-stitched hems for durability',
                'Pre-shrunk fabric',
                'Exclusive XOLL Society design'
            ],
            'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
            'sizeGuide' => [
                'S' => ['chest' => '44"', 'length' => '28"', 'shoulder' => '20"'],
                'M' => ['chest' => '46"', 'length' => '29"', 'shoulder' => '21"'],
                'L' => ['chest' => '48"', 'length' => '30"', 'shoulder' => '22"'],
                'XL' => ['chest' => '50"', 'length' => '31"', 'shoulder' => '23"'],
                'XXL' => ['chest' => '52"', 'length' => '32"', 'shoulder' => '24"']
            ],
            'colors' => [
                ['name' => 'Black', 'code' => '#0A0A0A', 'available' => true],
                ['name' => 'Charcoal', 'code' => '#36454F', 'available' => true],
                ['name' => 'Off White', 'code' => '#FAF9F6', 'available' => false]
            ],
            'images' => [
                '../gallery/530653006_17861701017453250_551743686485492484_n.jpg',
                '../gallery/530994264_17861701059453250_146576054870093936_n.jpg',
                '../gallery/530999987_17861701068453250_9040662411669042371_n.jpg',
                '../gallery/539193489_17863244793453250_5562115636179451347_n.jpg'
            ],
            'tags' => ['trending', 'oversized', 'black', 'tee', 'rebellion'],
            'stock' => 45,
            'sku' => 'XOLL-V2-TEE-001',
            'rating' => 4.8,
            'reviewCount' => 127,
            'shipping' => [
                'free' => true,
                'days' => '3-5 business days',
                'returns' => '30-day easy returns'
            ]
        ],
        'p002' => [
            'id' => 'p002',
            'name' => 'VOID HOODIE — BLACK',
            'category' => 'hoodies',
            'volume' => 4,
            'price' => 2499,
            'originalPrice' => null,
            'badge' => 'HOT',
            'description' => 'Embrace the void with our signature heavyweight hoodie. This premium piece features a cozy fleece interior, kangaroo pocket, and adjustable drawstring hood. The minimalist VOID graphic represents the emptiness we fill with our identity.',
            'details' => [
                'Material' => '80% Cotton, 20% Polyester Fleece (400 GSM)',
                'Fit' => 'Regular / Relaxed',
                'Hood' => 'Double-layered with adjustable drawstring',
                'Pocket' => 'Kangaroo front pocket',
                'Care' => 'Machine wash cold, hang dry recommended',
                'Made In' => 'Designed in Nepal, Made with Pride'
            ],
            'features' => [
                'Ultra-soft fleece interior',
                'Heavyweight 400 GSM construction',
                'Ribbed cuffs and hem',
                'Metal-tipped drawstrings',
                'Embroidered VOID design'
            ],
            'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
            'sizeGuide' => [
                'S' => ['chest' => '42"', 'length' => '26"', 'sleeve' => '24"'],
                'M' => ['chest' => '44"', 'length' => '27"', 'sleeve' => '25"'],
                'L' => ['chest' => '46"', 'length' => '28"', 'sleeve' => '26"'],
                'XL' => ['chest' => '48"', 'length' => '29"', 'sleeve' => '27"'],
                'XXL' => ['chest' => '50"', 'length' => '30"', 'sleeve' => '28"']
            ],
            'colors' => [
                ['name' => 'Black', 'code' => '#0A0A0A', 'available' => true],
                ['name' => 'Dark Grey', 'code' => '#2C2C2C', 'available' => true]
            ],
            'images' => [
                '../gallery/551959800_17866379613453250_7410702544923065991_n.jpg',
                '../gallery/551832554_17866379604453250_4732173630485519368_n.jpg',
                '../gallery/551636066_17866379583453250_3128446737634411358_n.jpg',
                '../gallery/551982258_17866379586453250_4886754037431346648_n.jpg'
            ],
            'tags' => ['hoodie', 'void', 'black', 'heavyweight'],
            'stock' => 32,
            'sku' => 'XOLL-V4-HOOD-001',
            'rating' => 4.9,
            'reviewCount' => 89,
            'shipping' => [
                'free' => true,
                'days' => '3-5 business days',
                'returns' => '30-day easy returns'
            ]
        ],
        'p003' => [
            'id' => 'p003',
            'name' => 'TACTICAL CARGO PANTS',
            'category' => 'pants',
            'volume' => 5,
            'price' => 2199,
            'originalPrice' => null,
            'badge' => null,
            'description' => 'Utility meets style with our Tactical Cargo Pants. Featuring multiple pockets, adjustable ankle straps, and a relaxed tapered fit. Perfect for those who carry more than just belongings—they carry a purpose.',
            'details' => [
                'Material' => '98% Cotton, 2% Spandex Twill',
                'Fit' => 'Relaxed Tapered',
                'Closure' => 'Button fly with zipper',
                'Pockets' => '8 functional pockets',
                'Care' => 'Machine wash cold',
                'Made In' => 'Designed in Nepal, Made with Pride'
            ],
            'features' => [
                'Stretch twill fabric for comfort',
                '8 functional cargo pockets',
                'Adjustable ankle straps',
                'Reinforced stitching',
                'YKK zipper hardware'
            ],
            'sizes' => ['28', '30', '32', '34', '36', '38'],
            'sizeGuide' => [
                '28' => ['waist' => '28"', 'inseam' => '30"', 'hip' => '38"'],
                '30' => ['waist' => '30"', 'inseam' => '31"', 'hip' => '40"'],
                '32' => ['waist' => '32"', 'inseam' => '32"', 'hip' => '42"'],
                '34' => ['waist' => '34"', 'inseam' => '32"', 'hip' => '44"'],
                '36' => ['waist' => '36"', 'inseam' => '33"', 'hip' => '46"'],
                '38' => ['waist' => '38"', 'inseam' => '33"', 'hip' => '48"']
            ],
            'colors' => [
                ['name' => 'Black', 'code' => '#0A0A0A', 'available' => true],
                ['name' => 'Olive', 'code' => '#556B2F', 'available' => true],
                ['name' => 'Sand', 'code' => '#C2B280', 'available' => true]
            ],
            'images' => [
                '../gallery/538285766_17863244811453250_4909074703211498115_n.jpg',
                '../gallery/538301050_17863244784453250_8525341170716193474_n.jpg',
                '../gallery/538472874_17863244802453250_921511862170345570_n.jpg',
                '../gallery/534153672_17862433332453250_8221509456359030360_n.jpg'
            ],
            'tags' => ['cargo', 'tactical', 'pants', 'utility'],
            'stock' => 28,
            'sku' => 'XOLL-V5-PANT-001',
            'rating' => 4.7,
            'reviewCount' => 64,
            'shipping' => [
                'free' => true,
                'days' => '3-5 business days',
                'returns' => '30-day easy returns'
            ]
        ],
        'p004' => [
            'id' => 'p004',
            'name' => 'ETERNAL BOMBER JACKET',
            'category' => 'jackets',
            'volume' => 6,
            'price' => 3899,
            'originalPrice' => 4499,
            'badge' => 'NEW',
            'description' => 'The pinnacle of XOLL outerwear. The Eternal Bomber features a luxurious satin shell, quilted interior lining, and custom embroidered details. A timeless piece designed to last beyond seasons.',
            'details' => [
                'Shell' => '100% Nylon Satin',
                'Lining' => 'Quilted Polyester',
                'Fit' => 'Regular',
                'Closure' => 'Premium YKK zipper',
                'Pockets' => '2 front, 1 interior',
                'Made In' => 'Designed in Nepal, Made with Pride'
            ],
            'features' => [
                'Luxurious satin shell',
                'Warm quilted lining',
                'Ribbed collar, cuffs, and hem',
                'Custom XOLL embroidery',
                'Interior pocket with zipper'
            ],
            'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
            'sizeGuide' => [
                'S' => ['chest' => '40"', 'length' => '24"', 'shoulder' => '17"'],
                'M' => ['chest' => '42"', 'length' => '25"', 'shoulder' => '18"'],
                'L' => ['chest' => '44"', 'length' => '26"', 'shoulder' => '19"'],
                'XL' => ['chest' => '46"', 'length' => '27"', 'shoulder' => '20"'],
                'XXL' => ['chest' => '48"', 'length' => '28"', 'shoulder' => '21"']
            ],
            'colors' => [
                ['name' => 'Black', 'code' => '#0A0A0A', 'available' => true],
                ['name' => 'Navy', 'code' => '#000080', 'available' => true],
                ['name' => 'Burgundy', 'code' => '#800020', 'available' => false]
            ],
            'images' => [
                '../gallery/538301050_17863244784453250_8525341170716193474_n.jpg',
                '../gallery/532994170_17862433299453250_1483585729862262501_n.jpg',
                '../gallery/534153672_17862433332453250_8221509456359030360_n.jpg',
                '../gallery/538472874_17863244802453250_921511862170345570_n.jpg'
            ],
            'tags' => ['bomber', 'eternal', 'jacket', 'new', 'premium'],
            'stock' => 15,
            'sku' => 'XOLL-V6-JACK-001',
            'rating' => 5.0,
            'reviewCount' => 23,
            'shipping' => [
                'free' => true,
                'days' => '3-5 business days',
                'returns' => '30-day easy returns'
            ]
        ],
        'p007' => [
            'id' => 'p007',
            'name' => 'XOLL SNAPBACK CAP',
            'category' => 'accessories',
            'volume' => 6,
            'price' => 899,
            'originalPrice' => null,
            'badge' => 'NEW',
            'description' => 'Top off your look with the official XOLL Snapback. Features an embroidered logo, structured crown, and adjustable snap closure for the perfect fit every time.',
            'details' => [
                'Material' => '80% Acrylic, 20% Wool',
                'Crown' => 'Structured 6-panel',
                'Brim' => 'Flat with green undervisor',
                'Closure' => 'Plastic snap',
                'Care' => 'Spot clean only',
                'Made In' => 'Designed in Nepal'
            ],
            'features' => [
                'Embroidered XOLL logo',
                'Structured 6-panel crown',
                'Adjustable snapback closure',
                'Green undervisor',
                'Ventilation eyelets'
            ],
            'sizes' => ['One Size'],
            'sizeGuide' => [
                'One Size' => ['circumference' => '22" - 24"', 'depth' => '4.5"', 'brim' => '2.75"']
            ],
            'colors' => [
                ['name' => 'Black', 'code' => '#0A0A0A', 'available' => true],
                ['name' => 'White', 'code' => '#FFFFFF', 'available' => true]
            ],
            'images' => [
                '../gallery/584000549_17872981128453250_1650715616236789583_n.jpg',
                '../gallery/586380364_17872980210453250_5926094300255523770_n.jpg',
                '../gallery/587269800_17872980192453250_421811040122059306_n.jpg',
                '../gallery/586696890_17872981137453250_4163938839919627548_n.jpg'
            ],
            'tags' => ['cap', 'snapback', 'hat', 'headwear'],
            'stock' => 78,
            'sku' => 'XOLL-V6-ACC-001',
            'rating' => 4.6,
            'reviewCount' => 156,
            'shipping' => [
                'free' => false,
                'days' => '3-5 business days',
                'returns' => '30-day easy returns'
            ]
        ]
    ];

    // Volume names mapping
    $volumeNames = [
        1 => 'Soul Awakening',
        2 => 'Silent Rebellion',
        3 => 'Identity',
        4 => 'Unfiltered',
        5 => 'Ascension',
        6 => 'Eternal'
    ];

    // Get product ID from URL
    $productId = isset($_GET['id']) ? trim($_GET['id']) : '';

    // Find product or use first as default for demo
    $product = isset($products[$productId]) ? $products[$productId] : $products['p001'];
    $volumeName = $volumeNames[$product['volume']] ?? 'Unknown';

    // Calculate discount percentage
    $discount = null;
    if ($product['originalPrice'] && $product['originalPrice'] > $product['price']) {
        $discount = round((($product['originalPrice'] - $product['price']) / $product['originalPrice']) * 100);
    }

    // Format price
    function formatPrice($price)
    {
        return '₹' . number_format($price);
    }

    // Get related products (same category, different product)
    $relatedProducts = array_filter($products, function ($p) use ($product) {
        return $p['category'] === $product['category'] && $p['id'] !== $product['id'];
    });
    $relatedProducts = array_slice($relatedProducts, 0, 4);
    ?>

    <div class="product-page">

        <!-- ============================================
         PRODUCT NAVIGATION
         ============================================ -->
        <nav class="product-nav">
            <a href="javascript:history.back()" class="back-link">
                <i class="fas fa-arrow-left"></i>
                <span>Back</span>
            </a>
            <div class="nav-actions">
                <button class="nav-action-btn share-btn" aria-label="Share product">
                    <i class="fas fa-share-alt"></i>
                </button>
                <button class="nav-action-btn wishlist-btn" aria-label="Add to wishlist">
                    <i class="far fa-heart"></i>
                </button>
            </div>
        </nav>

        <!-- ============================================
         PRODUCT GALLERY
         ============================================ -->
        <section class="product-gallery">
            <!-- Main Image -->
            <div class="gallery-main">
                <div class="main-image-container" id="mainImageContainer">
                    <?php if ($product['badge']): ?>
                        <span class="product-badge"><?= htmlspecialchars($product['badge']) ?></span>
                    <?php endif; ?>
                    <?php if ($discount): ?>
                        <span class="discount-badge">-<?= $discount ?>%</span>
                    <?php endif; ?>
                    <img src="<?= htmlspecialchars($product['images'][0]) ?>"
                        alt="<?= htmlspecialchars($product['name']) ?>" class="main-image" id="mainImage">
                    <button class="zoom-btn" id="zoomBtn" aria-label="Zoom image">
                        <i class="fas fa-expand"></i>
                    </button>
                </div>
            </div>

            <!-- Thumbnail Carousel -->
            <div class="gallery-thumbs">
                <div class="thumbs-track" id="thumbsTrack">
                    <?php foreach ($product['images'] as $index => $image): ?>
                        <button class="thumb-item <?= $index === 0 ? 'active' : '' ?>"
                            data-image="<?= htmlspecialchars($image) ?>" data-index="<?= $index ?>">
                            <img src="<?= htmlspecialchars($image) ?>"
                                alt="<?= htmlspecialchars($product['name']) ?> - Image <?= $index + 1 ?>">
                        </button>
                    <?php endforeach; ?>
                </div>
                <div class="thumb-indicators">
                    <?php foreach ($product['images'] as $index => $image): ?>
                        <span class="thumb-dot <?= $index === 0 ? 'active' : '' ?>" data-index="<?= $index ?>"></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ============================================
         PRODUCT INFO
         ============================================ -->
        <section class="product-info">
            <!-- Volume & Category -->
            <div class="product-meta">
                <a href="volume.php?v=<?= $product['volume'] ?>" class="volume-link">
                    Volume <?= $product['volume'] ?> — <?= htmlspecialchars($volumeName) ?>
                </a>
                <span class="meta-divider">•</span>
                <span class="product-sku"><?= htmlspecialchars($product['sku']) ?></span>
            </div>

            <!-- Product Name -->
            <h1 class="product-title"><?= htmlspecialchars($product['name']) ?></h1>

            <!-- Rating -->
            <div class="product-rating">
                <div class="rating-stars">
                    <?php
                    $fullStars = floor($product['rating']);
                    $halfStar = ($product['rating'] - $fullStars) >= 0.5;
                    for ($i = 1; $i <= 5; $i++):
                        if ($i <= $fullStars): ?>
                            <i class="fas fa-star"></i>
                        <?php elseif ($i == $fullStars + 1 && $halfStar): ?>
                            <i class="fas fa-star-half-alt"></i>
                        <?php else: ?>
                            <i class="far fa-star"></i>
                        <?php endif;
                    endfor; ?>
                </div>
                <span class="rating-score"><?= $product['rating'] ?></span>
                <a href="#reviews" class="rating-count">(<?= $product['reviewCount'] ?> reviews)</a>
            </div>

            <!-- Price -->
            <div class="product-pricing">
                <span class="current-price"><?= formatPrice($product['price']) ?></span>
                <?php if ($product['originalPrice']): ?>
                    <span class="original-price"><?= formatPrice($product['originalPrice']) ?></span>
                    <span class="savings">Save <?= formatPrice($product['originalPrice'] - $product['price']) ?></span>
                <?php endif; ?>
            </div>

            <!-- Short Description -->
            <p class="product-description"><?= htmlspecialchars($product['description']) ?></p>

            <!-- Color Selector -->
            <?php if (count($product['colors']) > 1): ?>
                <div class="option-group">
                    <label class="option-label">
                        Color: <span class="selected-value"
                            id="selectedColor"><?= htmlspecialchars($product['colors'][0]['name']) ?></span>
                    </label>
                    <div class="color-options">
                        <?php foreach ($product['colors'] as $index => $color): ?>
                            <button
                                class="color-swatch <?= $index === 0 ? 'active' : '' ?> <?= !$color['available'] ? 'unavailable' : '' ?>"
                                data-color="<?= htmlspecialchars($color['name']) ?>"
                                style="background-color: <?= htmlspecialchars($color['code']) ?>" <?= !$color['available'] ? 'disabled' : '' ?>
                                aria-label="<?= htmlspecialchars($color['name']) ?> <?= !$color['available'] ? '(Out of stock)' : '' ?>">
                                <?php if (!$color['available']): ?>
                                    <span class="swatch-slash"></span>
                                <?php endif; ?>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Size Selector -->
            <div class="option-group">
                <div class="option-header">
                    <label class="option-label">
                        Size: <span class="selected-value" id="selectedSize">Select a size</span>
                    </label>
                    <button class="size-guide-btn" id="sizeGuideBtn">
                        <i class="fas fa-ruler-horizontal"></i>
                        Size Guide
                    </button>
                </div>
                <div class="size-options">
                    <?php foreach ($product['sizes'] as $size): ?>
                        <button class="size-option" data-size="<?= htmlspecialchars($size) ?>">
                            <?= htmlspecialchars($size) ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Quantity -->
            <div class="option-group">
                <label class="option-label">Quantity</label>
                <div class="quantity-selector">
                    <button class="qty-btn" id="qtyMinus" aria-label="Decrease quantity">
                        <i class="fas fa-minus"></i>
                    </button>
                    <input type="number" class="qty-input" id="qtyInput" value="1" min="1"
                        max="<?= $product['stock'] ?>">
                    <button class="qty-btn" id="qtyPlus" aria-label="Increase quantity">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                <span
                    class="stock-status <?= $product['stock'] > 10 ? 'in-stock' : ($product['stock'] > 0 ? 'low-stock' : 'out-of-stock') ?>">
                    <?php if ($product['stock'] > 10): ?>
                        <i class="fas fa-check-circle"></i> In Stock
                    <?php elseif ($product['stock'] > 0): ?>
                        <i class="fas fa-exclamation-circle"></i> Only <?= $product['stock'] ?> left
                    <?php else: ?>
                        <i class="fas fa-times-circle"></i> Out of Stock
                    <?php endif; ?>
                </span>
            </div>

            <!-- Action Buttons -->
            <div class="product-actions">
                <button class="btn-add-cart" id="addToCart" <?= $product['stock'] === 0 ? 'disabled' : '' ?>>
                    <i class="fas fa-shopping-bag"></i>
                    <span><?= $product['stock'] > 0 ? 'Add to Cart' : 'Out of Stock' ?></span>
                </button>
                <button class="btn-buy-now" id="buyNow" <?= $product['stock'] === 0 ? 'disabled' : '' ?>>
                    Buy Now
                </button>
            </div>

            <!-- Shipping Info -->
            <div class="shipping-info">
                <div class="shipping-item">
                    <i class="fas fa-truck"></i>
                    <div class="shipping-text">
                        <strong><?= $product['shipping']['free'] ? 'Free Shipping' : 'Standard Shipping' ?></strong>
                        <span>Delivered in <?= $product['shipping']['days'] ?></span>
                    </div>
                </div>
                <div class="shipping-item">
                    <i class="fas fa-undo"></i>
                    <div class="shipping-text">
                        <strong>Easy Returns</strong>
                        <span><?= $product['shipping']['returns'] ?></span>
                    </div>
                </div>
                <div class="shipping-item">
                    <i class="fas fa-shield-alt"></i>
                    <div class="shipping-text">
                        <strong>Secure Checkout</strong>
                        <span>100% protected payment</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================
         PRODUCT DETAILS TABS
         ============================================ -->
        <section class="product-details-section">
            <div class="details-tabs">
                <button class="tab-btn active" data-tab="details">Details</button>
                <button class="tab-btn" data-tab="features">Features</button>
                <button class="tab-btn" data-tab="shipping">Shipping</button>
            </div>

            <div class="tab-content">
                <!-- Details Tab -->
                <div class="tab-panel active" id="tab-details">
                    <div class="details-grid">
                        <?php foreach ($product['details'] as $key => $value): ?>
                            <div class="detail-item">
                                <span class="detail-key"><?= htmlspecialchars($key) ?></span>
                                <span class="detail-value"><?= htmlspecialchars($value) ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Features Tab -->
                <div class="tab-panel" id="tab-features">
                    <ul class="features-list">
                        <?php foreach ($product['features'] as $feature): ?>
                            <li>
                                <i class="fas fa-check"></i>
                                <span><?= htmlspecialchars($feature) ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Shipping Tab -->
                <div class="tab-panel" id="tab-shipping">
                    <div class="shipping-details">
                        <div class="shipping-block">
                            <h4><i class="fas fa-box"></i> Delivery</h4>
                            <p>We ship all orders within Nepal. Standard delivery takes
                                <?= $product['shipping']['days'] ?>.</p>
                            <p><?= $product['shipping']['free'] ? 'Enjoy FREE shipping on this item!' : 'Shipping costs calculated at checkout.' ?>
                            </p>
                        </div>
                        <div class="shipping-block">
                            <h4><i class="fas fa-undo-alt"></i> Returns</h4>
                            <p><?= $product['shipping']['returns'] ?>. Items must be unworn with original tags attached.
                            </p>
                            <p>Contact our support team to initiate a return.</p>
                        </div>
                        <div class="shipping-block">
                            <h4><i class="fas fa-question-circle"></i> Need Help?</h4>
                            <p>Contact us via Instagram DM or email for any questions about your order.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================
         RELATED PRODUCTS
         ============================================ -->
        <?php if (!empty($relatedProducts)): ?>
            <section class="related-products">
                <div class="section-header">
                    <h2 class="section-title">You May Also Like</h2>
                    <a href="category.php?cat=<?= $product['category'] ?>" class="see-all">View All</a>
                </div>
                <div class="related-grid">
                    <?php foreach ($relatedProducts as $related): ?>
                        <a href="product.php?id=<?= $related['id'] ?>" class="related-card">
                            <div class="related-image">
                                <?php if ($related['badge']): ?>
                                    <span class="product-badge"><?= htmlspecialchars($related['badge']) ?></span>
                                <?php endif; ?>
                                <img src="<?= htmlspecialchars($related['images'][0]) ?>"
                                    alt="<?= htmlspecialchars($related['name']) ?>" loading="lazy">
                            </div>
                            <div class="related-info">
                                <span class="related-volume">Vol. <?= $related['volume'] ?></span>
                                <h3 class="related-name"><?= htmlspecialchars($related['name']) ?></h3>
                                <span class="related-price"><?= formatPrice($related['price']) ?></span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

    </div>

    <!-- ============================================
     SIZE GUIDE MODAL
     ============================================ -->
    <div class="modal-overlay" id="sizeGuideModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Size Guide</h3>
                <button class="modal-close" id="closeSizeGuide" aria-label="Close size guide">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <p class="size-guide-intro">All measurements are in inches. For the best fit, measure yourself and
                    compare to the chart below.</p>
                <div class="size-table-wrapper">
                    <table class="size-table">
                        <thead>
                            <tr>
                                <th>Size</th>
                                <?php
                                $firstSize = reset($product['sizeGuide']);
                                foreach (array_keys($firstSize) as $measurement): ?>
                                    <th><?= ucfirst($measurement) ?></th>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($product['sizeGuide'] as $size => $measurements): ?>
                                <tr>
                                    <td><strong><?= htmlspecialchars($size) ?></strong></td>
                                    <?php foreach ($measurements as $value): ?>
                                        <td><?= htmlspecialchars($value) ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
     IMAGE ZOOM MODAL
     ============================================ -->
    <div class="modal-overlay zoom-modal" id="zoomModal">
        <button class="modal-close zoom-close" id="closeZoom" aria-label="Close zoom">
            <i class="fas fa-times"></i>
        </button>
        <div class="zoom-container">
            <img src="" alt="Zoomed product image" class="zoom-image" id="zoomImage">
        </div>
        <div class="zoom-nav">
            <button class="zoom-nav-btn" id="zoomPrev" aria-label="Previous image">
                <i class="fas fa-chevron-left"></i>
            </button>
            <span class="zoom-counter" id="zoomCounter">1 / <?= count($product['images']) ?></span>
            <button class="zoom-nav-btn" id="zoomNext" aria-label="Next image">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <!-- ============================================
     ADDED TO CART TOAST
     ============================================ -->
    <div class="toast" id="cartToast">
        <div class="toast-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <div class="toast-content">
            <strong>Added to Cart!</strong>
            <span id="toastMessage">1 item added to your cart</span>
        </div>
        <a href="cart.php" class="toast-action">View Cart</a>
    </div>

    <!-- Page Scripts -->
    <script src="assets/js/pages.js"></script>
    <script>
        // Product images data
        const productImages = <?= json_encode($product['images']) ?>;
        let currentImageIndex = 0;

        // DOM Elements
        const mainImage = document.getElementById('mainImage');
        const thumbsTrack = document.getElementById('thumbsTrack');
        const thumbItems = document.querySelectorAll('.thumb-item');
        const thumbDots = document.querySelectorAll('.thumb-dot');
        const zoomBtn = document.getElementById('zoomBtn');
        const zoomModal = document.getElementById('zoomModal');
        const zoomImage = document.getElementById('zoomImage');
        const zoomCounter = document.getElementById('zoomCounter');
        const closeZoom = document.getElementById('closeZoom');
        const zoomPrev = document.getElementById('zoomPrev');
        const zoomNext = document.getElementById('zoomNext');
        const sizeGuideBtn = document.getElementById('sizeGuideBtn');
        const sizeGuideModal = document.getElementById('sizeGuideModal');
        const closeSizeGuide = document.getElementById('closeSizeGuide');
        const colorSwatches = document.querySelectorAll('.color-swatch');
        const sizeOptions = document.querySelectorAll('.size-option');
        const qtyInput = document.getElementById('qtyInput');
        const qtyMinus = document.getElementById('qtyMinus');
        const qtyPlus = document.getElementById('qtyPlus');
        const addToCartBtn = document.getElementById('addToCart');
        const cartToast = document.getElementById('cartToast');
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabPanels = document.querySelectorAll('.tab-panel');

        // ============================================
        // IMAGE GALLERY
        // ============================================
        function setActiveImage(index) {
            currentImageIndex = index;
            mainImage.style.opacity = '0';

            setTimeout(() => {
                mainImage.src = productImages[index];
                mainImage.style.opacity = '1';
            }, 150);

            // Update thumbnails
            thumbItems.forEach((thumb, i) => {
                thumb.classList.toggle('active', i === index);
            });

            // Update dots
            thumbDots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
        }

        // Thumbnail click
        thumbItems.forEach((thumb, index) => {
            thumb.addEventListener('click', () => setActiveImage(index));
        });

        // Dot click
        thumbDots.forEach((dot, index) => {
            dot.addEventListener('click', () => setActiveImage(index));
        });

        // Touch swipe on main image
        let touchStartX = 0;
        const mainImageContainer = document.getElementById('mainImageContainer');

        mainImageContainer.addEventListener('touchstart', (e) => {
            touchStartX = e.touches[0].clientX;
        }, { passive: true });

        mainImageContainer.addEventListener('touchend', (e) => {
            const touchEndX = e.changedTouches[0].clientX;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) > 50) {
                if (diff > 0 && currentImageIndex < productImages.length - 1) {
                    setActiveImage(currentImageIndex + 1);
                } else if (diff < 0 && currentImageIndex > 0) {
                    setActiveImage(currentImageIndex - 1);
                }
            }
        }, { passive: true });

        // ============================================
        // ZOOM MODAL
        // ============================================
        function openZoom() {
            zoomImage.src = productImages[currentImageIndex];
            zoomCounter.textContent = `${currentImageIndex + 1} / ${productImages.length}`;
            zoomModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeZoomModal() {
            zoomModal.classList.remove('active');
            document.body.style.overflow = '';
        }

        function zoomNavigate(direction) {
            if (direction === 'next' && currentImageIndex < productImages.length - 1) {
                currentImageIndex++;
            } else if (direction === 'prev' && currentImageIndex > 0) {
                currentImageIndex--;
            }

            zoomImage.src = productImages[currentImageIndex];
            zoomCounter.textContent = `${currentImageIndex + 1} / ${productImages.length}`;
            setActiveImage(currentImageIndex);
        }

        zoomBtn.addEventListener('click', openZoom);
        closeZoom.addEventListener('click', closeZoomModal);
        zoomModal.addEventListener('click', (e) => {
            if (e.target === zoomModal) closeZoomModal();
        });
        zoomPrev.addEventListener('click', () => zoomNavigate('prev'));
        zoomNext.addEventListener('click', () => zoomNavigate('next'));

        // Keyboard navigation in zoom
        document.addEventListener('keydown', (e) => {
            if (!zoomModal.classList.contains('active')) return;

            if (e.key === 'Escape') closeZoomModal();
            if (e.key === 'ArrowLeft') zoomNavigate('prev');
            if (e.key === 'ArrowRight') zoomNavigate('next');
        });

        // ============================================
        // SIZE GUIDE MODAL
        // ============================================
        sizeGuideBtn.addEventListener('click', () => {
            sizeGuideModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        closeSizeGuide.addEventListener('click', () => {
            sizeGuideModal.classList.remove('active');
            document.body.style.overflow = '';
        });

        sizeGuideModal.addEventListener('click', (e) => {
            if (e.target === sizeGuideModal) {
                sizeGuideModal.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

        // ============================================
        // COLOR SELECTION
        // ============================================
        colorSwatches.forEach(swatch => {
            swatch.addEventListener('click', function () {
                if (this.disabled) return;

                colorSwatches.forEach(s => s.classList.remove('active'));
                this.classList.add('active');
                document.getElementById('selectedColor').textContent = this.dataset.color;
            });
        });

        // ============================================
        // SIZE SELECTION
        // ============================================
        sizeOptions.forEach(option => {
            option.addEventListener('click', function () {
                sizeOptions.forEach(o => o.classList.remove('active'));
                this.classList.add('active');
                document.getElementById('selectedSize').textContent = this.dataset.size;
            });
        });

        // ============================================
        // QUANTITY SELECTOR
        // ============================================
        const maxStock = <?= $product['stock'] ?>;

        qtyMinus.addEventListener('click', () => {
            const current = parseInt(qtyInput.value);
            if (current > 1) {
                qtyInput.value = current - 1;
            }
        });

        qtyPlus.addEventListener('click', () => {
            const current = parseInt(qtyInput.value);
            if (current < maxStock) {
                qtyInput.value = current + 1;
            }
        });

        qtyInput.addEventListener('change', () => {
            let value = parseInt(qtyInput.value);
            if (isNaN(value) || value < 1) value = 1;
            if (value > maxStock) value = maxStock;
            qtyInput.value = value;
        });

        // ============================================
        // ADD TO CART
        // ============================================
        addToCartBtn.addEventListener('click', () => {
            const selectedSize = document.querySelector('.size-option.active');

            if (!selectedSize) {
                // Highlight size section
                const sizeGroup = document.querySelector('.size-options');
                sizeGroup.classList.add('shake');
                setTimeout(() => sizeGroup.classList.remove('shake'), 500);
                return;
            }

            const qty = parseInt(qtyInput.value);

            // Show toast
            document.getElementById('toastMessage').textContent = `${qty} item${qty > 1 ? 's' : ''} added to your cart`;
            cartToast.classList.add('active');

            setTimeout(() => {
                cartToast.classList.remove('active');
            }, 4000);

            // Notify parent frame
            if (window.parent !== window) {
                window.parent.postMessage({ type: 'cartUpdate', count: qty }, '*');
            }
        });

        // ============================================
        // DETAILS TABS
        // ============================================
        tabBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const tabId = this.dataset.tab;

                // Update buttons
                tabBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                // Update panels
                tabPanels.forEach(panel => {
                    panel.classList.remove('active');
                    if (panel.id === `tab-${tabId}`) {
                        panel.classList.add('active');
                    }
                });
            });
        });

        // ============================================
        // SHARE FUNCTIONALITY
        // ============================================
        document.querySelector('.share-btn').addEventListener('click', async () => {
            const shareData = {
                title: '<?= addslashes($product['name']) ?> — XOLL Store',
                text: '<?= addslashes(substr($product['description'], 0, 100)) ?>...',
                url: window.location.href
            };

            try {
                if (navigator.share) {
                    await navigator.share(shareData);
                } else {
                    // Fallback: copy link
                    await navigator.clipboard.writeText(window.location.href);
                    alert('Link copied to clipboard!');
                }
            } catch (err) {
                console.log('Share failed:', err);
            }
        });

        // ============================================
        // WISHLIST TOGGLE
        // ============================================
        const wishlistBtn = document.querySelector('.wishlist-btn');
        let isWishlisted = false;

        wishlistBtn.addEventListener('click', () => {
            isWishlisted = !isWishlisted;
            wishlistBtn.innerHTML = isWishlisted
                ? '<i class="fas fa-heart"></i>'
                : '<i class="far fa-heart"></i>';
            wishlistBtn.classList.toggle('active', isWishlisted);

            // Notify parent frame
            if (window.parent !== window) {
                window.parent.postMessage({
                    type: 'wishlistUpdate',
                    count: isWishlisted ? 1 : 0
                }, '*');
            }
        });

        // ============================================
        // SMOOTH SCROLL TO REVIEWS
        // ============================================
        document.querySelector('.rating-count').addEventListener('click', (e) => {
            e.preventDefault();
            // Scroll to reviews section when implemented
        });

        // Main image transition
        mainImage.style.transition = 'opacity 0.15s ease';
    </script>

</body>

</html>