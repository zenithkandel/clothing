<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — XOLL Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Dashboard Styles -->
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>

<body>
    <div class="dashboard-page">
        <!-- Page Header -->
        <header class="page-header">
            <div class="header-content">
                <div class="header-title">
                    <h1>Dashboard</h1>
                    <p class="header-subtitle">Welcome back! Here's what's happening with your store.</p>
                </div>
                <div class="header-actions">
                    <button class="btn btn-secondary">
                        <i class="fas fa-download"></i>
                        <span>Export</span>
                    </button>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        <span>Add Product</span>
                    </button>
                </div>
            </div>
        </header>

        <!-- Stats Cards -->
        <section class="stats-section">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon revenue">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="stat-content">
                        <span class="stat-label">Total Revenue</span>
                        <span class="stat-value">Rs. 2,45,890</span>
                        <span class="stat-change positive">
                            <i class="fas fa-arrow-up"></i>
                            12.5% from last month
                        </span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon orders">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="stat-content">
                        <span class="stat-label">Total Orders</span>
                        <span class="stat-value">156</span>
                        <span class="stat-change positive">
                            <i class="fas fa-arrow-up"></i>
                            8.2% from last month
                        </span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon customers">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <span class="stat-label">New Customers</span>
                        <span class="stat-value">48</span>
                        <span class="stat-change positive">
                            <i class="fas fa-arrow-up"></i>
                            4.1% from last month
                        </span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon conversion">
                        <i class="fas fa-percentage"></i>
                    </div>
                    <div class="stat-content">
                        <span class="stat-label">Conversion Rate</span>
                        <span class="stat-value">3.24%</span>
                        <span class="stat-change negative">
                            <i class="fas fa-arrow-down"></i>
                            0.8% from last month
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content Grid -->
        <section class="content-grid">
            <!-- Recent Orders -->
            <div class="card orders-card">
                <div class="card-header">
                    <h2>Recent Orders</h2>
                    <a href="orders.php" class="card-link">View All</a>
                </div>
                <div class="card-body">
                    <div class="orders-table-wrapper">
                        <table class="orders-table">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Product</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="order-id">#XOL-2847</td>
                                    <td class="customer">
                                        <span class="customer-name">Aarav Sharma</span>
                                    </td>
                                    <td class="product">Oversized Rebellion Tee</td>
                                    <td class="amount">Rs. 1,299</td>
                                    <td><span class="status-badge pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td class="order-id">#XOL-2846</td>
                                    <td class="customer">
                                        <span class="customer-name">Priya Thapa</span>
                                    </td>
                                    <td class="product">Void Hoodie — Black</td>
                                    <td class="amount">Rs. 2,499</td>
                                    <td><span class="status-badge processing">Processing</span></td>
                                </tr>
                                <tr>
                                    <td class="order-id">#XOL-2845</td>
                                    <td class="customer">
                                        <span class="customer-name">Bikram KC</span>
                                    </td>
                                    <td class="product">Tactical Cargo Pants</td>
                                    <td class="amount">Rs. 2,199</td>
                                    <td><span class="status-badge shipped">Shipped</span></td>
                                </tr>
                                <tr>
                                    <td class="order-id">#XOL-2844</td>
                                    <td class="customer">
                                        <span class="customer-name">Sita Gurung</span>
                                    </td>
                                    <td class="product">Eternal Bomber Jacket</td>
                                    <td class="amount">Rs. 3,899</td>
                                    <td><span class="status-badge delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td class="order-id">#XOL-2843</td>
                                    <td class="customer">
                                        <span class="customer-name">Rohan Rai</span>
                                    </td>
                                    <td class="product">Oversized Rebellion Tee</td>
                                    <td class="amount">Rs. 1,299</td>
                                    <td><span class="status-badge delivered">Delivered</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Top Products -->
            <div class="card products-card">
                <div class="card-header">
                    <h2>Top Products</h2>
                    <a href="products.php" class="card-link">View All</a>
                </div>
                <div class="card-body">
                    <div class="product-list">
                        <div class="product-item">
                            <div class="product-image">
                                <img src="../gallery/530653006_17861701017453250_551743686485492484_n.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <span class="product-name">Oversized Rebellion Tee</span>
                                <span class="product-category">T-Shirts</span>
                            </div>
                            <div class="product-stats">
                                <span class="product-sales">127 sold</span>
                                <span class="product-revenue">Rs. 1,64,973</span>
                            </div>
                        </div>

                        <div class="product-item">
                            <div class="product-image">
                                <img src="../gallery/551959800_17866379613453250_7410702544923065991_n.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <span class="product-name">Void Hoodie — Black</span>
                                <span class="product-category">Hoodies</span>
                            </div>
                            <div class="product-stats">
                                <span class="product-sales">89 sold</span>
                                <span class="product-revenue">Rs. 2,22,411</span>
                            </div>
                        </div>

                        <div class="product-item">
                            <div class="product-image">
                                <img src="../gallery/538285766_17863244811453250_4909074703211498115_n.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <span class="product-name">Tactical Cargo Pants</span>
                                <span class="product-category">Pants</span>
                            </div>
                            <div class="product-stats">
                                <span class="product-sales">64 sold</span>
                                <span class="product-revenue">Rs. 1,40,736</span>
                            </div>
                        </div>

                        <div class="product-item">
                            <div class="product-image">
                                <img src="../gallery/539193489_17863244793453250_5562115636179451347_n.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <span class="product-name">Eternal Bomber Jacket</span>
                                <span class="product-category">Jackets</span>
                            </div>
                            <div class="product-stats">
                                <span class="product-sales">42 sold</span>
                                <span class="product-revenue">Rs. 1,63,758</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Actions -->
        <section class="quick-actions">
            <h2>Quick Actions</h2>
            <div class="actions-grid">
                <button class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-plus"></i>
                    </div>
                    <span class="action-label">Add Product</span>
                </button>
                <button class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-tag"></i>
                    </div>
                    <span class="action-label">Create Discount</span>
                </button>
                <button class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-cube"></i>
                    </div>
                    <span class="action-label">New Volume</span>
                </button>
                <button class="action-card">
                    <div class="action-icon">
                        <i class="fas fa-image"></i>
                    </div>
                    <span class="action-label">Upload Media</span>
                </button>
            </div>
        </section>

        <!-- Low Stock Alert -->
        <section class="alerts-section">
            <div class="alert-card warning">
                <div class="alert-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="alert-content">
                    <h3>Low Stock Alert</h3>
                    <p>5 products are running low on stock and need attention.</p>
                </div>
                <a href="inventory.php" class="alert-action">View Inventory</a>
            </div>
        </section>
    </div>

    <script>
        // Notify parent frame of page load
        if (window.parent !== window) {
            window.parent.postMessage({
                type: 'updateTitle',
                title: 'Dashboard'
            }, '*');
        }
    </script>
</body>

</html>
