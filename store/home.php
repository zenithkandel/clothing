<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home — XOLL Store</title>

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
</head>

<body>

    <!-- ============================================
         HERO BANNER
         ============================================ -->
    <section class="hero-banner">
        <div class="hero-media">
            <img src="../gallery/574313853_17872292025453250_4752990491108666301_n.jpg" alt="XOLL Collection">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <span class="hero-tag">NEW DROP</span>
            <h1>VOLUME VI: ETERNAL</h1>
            <p>The final chapter. Forever raw.</p>
            <a href="volumes.php?v=6" class="hero-btn">EXPLORE NOW</a>
        </div>
    </section>


    <!-- ============================================
         TRENDING NOW
         ============================================ -->
    <section class="content-section">
        <div class="section-header">
            <h2>TRENDING NOW</h2>
            <a href="shop.php" class="see-all">See All <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="products-scroll">
            <!-- Product 1 -->
            <article class="product-card" data-product-id="p001">
                <a href="product.php?id=p001" class="product-link">
                    <div class="product-image">
                        <img src="../gallery/530653006_17861701017453250_551743686485492484_n.jpg"
                            alt="XOLL Oversized Tee">
                        <span class="product-badge">TRENDING</span>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">OVERSIZED REBELLION TEE</h3>
                        <p class="product-price">₱1,299</p>
                    </div>
                </a>
                <button class="product-wishlist" aria-label="Add to wishlist">
                    <i class="far fa-heart"></i>
                </button>
            </article>

            <!-- Product 2 -->
            <article class="product-card" data-product-id="p002">
                <a href="product.php?id=p002" class="product-link">
                    <div class="product-image">
                        <img src="../gallery/530994264_17861701059453250_146576054870093936_n.jpg" alt="XOLL Hoodie">
                        <span class="product-badge">HOT</span>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">VOID HOODIE — BLACK</h3>
                        <p class="product-price">₱2,499</p>
                    </div>
                </a>
                <button class="product-wishlist" aria-label="Add to wishlist">
                    <i class="far fa-heart"></i>
                </button>
            </article>

            <!-- Product 3 -->
            <article class="product-card" data-product-id="p003">
                <a href="product.php?id=p003" class="product-link">
                    <div class="product-image">
                        <img src="../gallery/538285766_17863244811453250_4909074703211498115_n.jpg"
                            alt="XOLL Cargo Pants">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">TACTICAL CARGO PANTS</h3>
                        <p class="product-price">₱2,199</p>
                    </div>
                </a>
                <button class="product-wishlist" aria-label="Add to wishlist">
                    <i class="far fa-heart"></i>
                </button>
            </article>

            <!-- Product 4 -->
            <article class="product-card" data-product-id="p004">
                <a href="product.php?id=p004" class="product-link">
                    <div class="product-image">
                        <img src="../gallery/538301050_17863244784453250_8525341170716193474_n.jpg" alt="XOLL Jacket">
                        <span class="product-badge">NEW</span>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">ETERNAL BOMBER JACKET</h3>
                        <p class="product-price">₱3,899</p>
                    </div>
                </a>
                <button class="product-wishlist" aria-label="Add to wishlist">
                    <i class="far fa-heart"></i>
                </button>
            </article>

            <!-- Product 5 -->
            <article class="product-card" data-product-id="p005">
                <a href="product.php?id=p001" class="product-link">
                    <div class="product-image">
                        <img src="../gallery/539193489_17863244793453250_5562115636179451347_n.jpg"
                            alt="XOLL Graphic Tee">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">RAW IDENTITY GRAPHIC TEE</h3>
                        <p class="product-price">₱1,199</p>
                    </div>
                </a>
                <button class="product-wishlist" aria-label="Add to wishlist">
                    <i class="far fa-heart"></i>
                </button>
            </article>

            <!-- Product 6 -->
            <article class="product-card" data-product-id="p006">
                <a href="product.php?id=p001" class="product-link">
                    <div class="product-image">
                        <img src="../gallery/551636066_17866379583453250_3128446737634411358_n.jpg"
                            alt="XOLL Long Sleeve">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">SOUL LONG SLEEVE</h3>
                        <p class="product-price">₱1,499</p>
                    </div>
                </a>
                <button class="product-wishlist" aria-label="Add to wishlist">
                    <i class="far fa-heart"></i>
                </button>
            </article>
        </div>
    </section>


    <!-- ============================================
         SHOP BY VOLUME
         ============================================ -->
    <section class="content-section">
        <div class="section-header">
            <h2>SHOP BY VOLUME</h2>
            <a href="volumes.php" class="see-all">All Volumes <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="volumes-grid">
            <!-- Volume 1 -->
            <a href="volumes.php?v=1" class="volume-card">
                <div class="volume-image">
                    <img src="../gallery/530999987_17861701068453250_9040662411669042371_n.jpg" alt="Soul Awakening">
                    <div class="volume-overlay"></div>
                </div>
                <div class="volume-info">
                    <span class="volume-num">VOL. I</span>
                    <h3>SOUL AWAKENING</h3>
                </div>
            </a>

            <!-- Volume 2 -->
            <a href="volumes.php?v=2" class="volume-card">
                <div class="volume-image">
                    <img src="../gallery/531013109_17861701050453250_3973799400395079846_n.jpg" alt="Silent Rebellion">
                    <div class="volume-overlay"></div>
                </div>
                <div class="volume-info">
                    <span class="volume-num">VOL. II</span>
                    <h3>SILENT REBELLION</h3>
                </div>
            </a>

            <!-- Volume 3 -->
            <a href="volumes.php?v=3" class="volume-card">
                <div class="volume-image">
                    <img src="../gallery/532994170_17862433299453250_1483585729862262501_n.jpg" alt="Identity">
                    <div class="volume-overlay"></div>
                </div>
                <div class="volume-info">
                    <span class="volume-num">VOL. III</span>
                    <h3>IDENTITY</h3>
                </div>
            </a>

            <!-- Volume 4 -->
            <a href="volumes.php?v=4" class="volume-card">
                <div class="volume-image">
                    <img src="../gallery/534153672_17862433332453250_8221509456359030360_n.jpg" alt="Unfiltered">
                    <div class="volume-overlay"></div>
                </div>
                <div class="volume-info">
                    <span class="volume-num">VOL. IV</span>
                    <h3>UNFILTERED</h3>
                </div>
            </a>

            <!-- Volume 5 -->
            <a href="volumes.php?v=5" class="volume-card">
                <div class="volume-image">
                    <img src="../gallery/538472874_17863244802453250_921511862170345570_n.jpg" alt="Ascension">
                    <div class="volume-overlay"></div>
                </div>
                <div class="volume-info">
                    <span class="volume-num">VOL. V</span>
                    <h3>ASCENSION</h3>
                </div>
            </a>

            <!-- Volume 6 -->
            <a href="volumes.php?v=6" class="volume-card featured">
                <div class="volume-image">
                    <img src="../gallery/573947896_17872292016453250_1114473014122398770_n.jpg" alt="Eternal">
                    <div class="volume-overlay"></div>
                </div>
                <div class="volume-info">
                    <span class="volume-num">VOL. VI</span>
                    <h3>ETERNAL</h3>
                    <span class="volume-tag">LATEST DROP</span>
                </div>
            </a>
        </div>
    </section>


    <!-- ============================================
         SHOP BY CATEGORY
         ============================================ -->
    <section class="content-section">
        <div class="section-header">
            <h2>CATEGORIES</h2>
        </div>

        <div class="categories-grid">
            <a href="shop.php?cat=tees" class="category-card">
                <div class="category-image">
                    <img src="../gallery/551832554_17866379604453250_4732173630485519368_n.jpg" alt="T-Shirts">
                    <div class="category-overlay"></div>
                </div>
                <div class="category-info">
                    <h3>T-SHIRTS</h3>
                    <span>24 Items</span>
                </div>
            </a>

            <a href="shop.php?cat=hoodies" class="category-card">
                <div class="category-image">
                    <img src="../gallery/551959800_17866379613453250_7410702544923065991_n.jpg" alt="Hoodies">
                    <div class="category-overlay"></div>
                </div>
                <div class="category-info">
                    <h3>HOODIES</h3>
                    <span>18 Items</span>
                </div>
            </a>

            <a href="shop.php?cat=jackets" class="category-card">
                <div class="category-image">
                    <img src="../gallery/551982258_17866379586453250_4886754037431346648_n.jpg" alt="Jackets">
                    <div class="category-overlay"></div>
                </div>
                <div class="category-info">
                    <h3>JACKETS</h3>
                    <span>12 Items</span>
                </div>
            </a>

            <a href="shop.php?cat=pants" class="category-card">
                <div class="category-image">
                    <img src="../gallery/581559191_17872292037453250_7709856973836633803_n.jpg" alt="Pants">
                    <div class="category-overlay"></div>
                </div>
                <div class="category-info">
                    <h3>PANTS</h3>
                    <span>15 Items</span>
                </div>
            </a>

            <a href="shop.php?cat=accessories" class="category-card">
                <div class="category-image">
                    <img src="../gallery/581642234_17872292007453250_7344481137995579023_n.jpg" alt="Accessories">
                    <div class="category-overlay"></div>
                </div>
                <div class="category-info">
                    <h3>ACCESSORIES</h3>
                    <span>32 Items</span>
                </div>
            </a>
        </div>
    </section>


    <!-- ============================================
         NEW ARRIVALS
         ============================================ -->
    <section class="content-section">
        <div class="section-header">
            <h2>NEW ARRIVALS</h2>
            <a href="shop.php?sort=new" class="see-all">See All <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="products-scroll">
            <!-- Product 7 -->
            <article class="product-card" data-product-id="p007">
                <div class="product-image">
                    <img src="../gallery/584000549_17872981128453250_1650715616236789583_n.jpg" alt="XOLL Cap">
                    <span class="product-badge">NEW</span>
                    <button class="product-wishlist" aria-label="Add to wishlist">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="product-info">
                    <h3 class="product-name">XOLL SNAPBACK CAP</h3>
                    <p class="product-price">₱899</p>
                </div>
            </article>

            <!-- Product 8 -->
            <article class="product-card" data-product-id="p008">
                <div class="product-image">
                    <img src="../gallery/586380364_17872980210453250_5926094300255523770_n.jpg" alt="XOLL Crewneck">
                    <span class="product-badge">NEW</span>
                    <button class="product-wishlist" aria-label="Add to wishlist">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="product-info">
                    <h3 class="product-name">ETERNAL CREWNECK</h3>
                    <p class="product-price">₱1,899</p>
                </div>
            </article>

            <!-- Product 9 -->
            <article class="product-card" data-product-id="p009">
                <div class="product-image">
                    <img src="../gallery/586696890_17872981137453250_4163938839919627548_n.jpg" alt="XOLL Shorts">
                    <span class="product-badge">NEW</span>
                    <button class="product-wishlist" aria-label="Add to wishlist">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="product-info">
                    <h3 class="product-name">VOID MESH SHORTS</h3>
                    <p class="product-price">₱1,299</p>
                </div>
            </article>

            <!-- Product 10 -->
            <article class="product-card" data-product-id="p010">
                <div class="product-image">
                    <img src="../gallery/586996501_17872981119453250_8494339306604387097_n.jpg" alt="XOLL Bag">
                    <span class="product-badge">NEW</span>
                    <button class="product-wishlist" aria-label="Add to wishlist">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="product-info">
                    <h3 class="product-name">TACTICAL CROSSBODY BAG</h3>
                    <p class="product-price">₱1,599</p>
                </div>
            </article>

            <!-- Product 11 -->
            <article class="product-card" data-product-id="p011">
                <div class="product-image">
                    <img src="../gallery/587269800_17872980192453250_421811040122059306_n.jpg" alt="XOLL Beanie">
                    <span class="product-badge">NEW</span>
                    <button class="product-wishlist" aria-label="Add to wishlist">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="product-info">
                    <h3 class="product-name">XOLL BEANIE — BLACK</h3>
                    <p class="product-price">₱699</p>
                </div>
            </article>

            <!-- Product 12 -->
            <article class="product-card" data-product-id="p012">
                <div class="product-image">
                    <img src="../gallery/550859388_122143125140824220_5389723581214255294_n%20(1).jpg" alt="XOLL Socks">
                    <button class="product-wishlist" aria-label="Add to wishlist">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="product-info">
                    <h3 class="product-name">XOLL CREW SOCKS (3-PACK)</h3>
                    <p class="product-price">₱499</p>
                </div>
            </article>
        </div>
    </section>


    <!-- ============================================
         FEATURED LOOKBOOK
         ============================================ -->
    <section class="lookbook-section">
        <div class="lookbook-header">
            <h2>THE LOOKBOOK</h2>
            <p>Real style. No filter.</p>
        </div>

        <div class="lookbook-grid">
            <div class="lookbook-item">
                <img src="../gallery/573947896_17872292016453250_1114473014122398770_n.jpg" alt="XOLL Lookbook">
            </div>
            <div class="lookbook-item">
                <img src="../gallery/574313853_17872292025453250_4752990491108666301_n.jpg" alt="XOLL Lookbook">
            </div>
            <div class="lookbook-item">
                <img src="../gallery/581559191_17872292037453250_7709856973836633803_n.jpg" alt="XOLL Lookbook">
            </div>
            <div class="lookbook-item">
                <img src="../gallery/581642234_17872292007453250_7344481137995579023_n.jpg" alt="XOLL Lookbook">
            </div>
        </div>

        <a href="../gallery/" class="lookbook-link">VIEW FULL GALLERY <i class="fas fa-arrow-right"></i></a>
    </section>


    <!-- ============================================
         FOOTER CTA
         ============================================ -->
    <section class="footer-cta">
        <h2>JOIN THE MOVEMENT</h2>
        <p>Follow us for exclusive drops, behind-the-scenes content, and early access.</p>
        <div class="social-links">
            <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-link" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
            <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        </div>
    </section>


    <!-- Page Scripts -->
    <script src="assets/js/pages.js"></script>
</body>

</html>