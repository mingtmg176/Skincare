<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary-color: #8e44ad;
            --secondary-color: #9b59b6;
            --dark-color: #2c3e50;
            --light-color: #ecf0f1;
            --success-color: #2ecc71;
            --warning-color: #f39c12;
            --danger-color: #e74c3c;
            --sidebar-width: 250px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: #f5f6fa;
            overflow-x: hidden;
        }

        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            background: var(--dark-color);
            color: white;
            transition: all 0.3s ease;
            height: 100vh;
            position: fixed;
            padding: 10px 0;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            z-index: 100;
        }

        .sidebar-header {
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-header h3 {
            color: white;
            font-size: 1.2rem;
            animation: fadeIn 0.8s ease;
            margin-left: 10px;
        }

        .sidebar-header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
        }

        .sidebar-menu {
            list-style: none;
        }

        .sidebar-menu li {
            padding: 8px 15px;
            margin: 5px 10px;
            border-radius: 5px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .sidebar-menu li:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        }

        .sidebar-menu li.active {
            background: var(--primary-color);
        }

        .sidebar-menu li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-size: 0.9rem;
        }

        .sidebar-menu li a i {
            margin-right: 10px;
            font-size: 1rem;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 20px;
            transition: all 0.3s ease;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ddd;
            animation: slideDown 0.5s ease;
        }

        .header h1 {
            color: var(--dark-color);
            font-size: 1.8rem;
        }

        .header .logout-button {
            display: flex;
            align-items: center;
            color: var(--dark-color);
            cursor: pointer;
            transition: color 0.2s ease;
            text-decoration: none;
            color: #2c3e50;
        }

        .header .logout-button:hover {
            color: #000;
        }

        .header .logout-button i {
            margin-right: 5px;
            font-size: 1.2rem;
        }

        /* Cards Section */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            animation: fadeInUp 0.6s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .card:nth-child(1) {
            animation-delay: 0.1s;
        }
        .card:nth-child(2) {
            animation-delay: 0.2s;
        }
        .card:nth-child(3) {
            animation-delay: 0.3s;
        }
        .card:nth-child(4) {
            animation-delay: 0.4s;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .card-header h3 {
            font-size: 1rem;
            color: #7f8c8d;
        }

        .card-header i {
            font-size: 1.5rem;
            padding: 10px;
            border-radius: 50%;
            background: rgba(142, 68, 173, 0.1);
            color: var(--primary-color);
        }

        .card-body h2 {
            font-size: 2rem;
            color: var(--dark-color);
            margin-bottom: 5px;
        }

        .card-footer {
            margin-top: 15px;
            font-size: 0.8rem;
            color: #95a5a6;
        }

        .card-footer span {
            color: var(--success-color);
            font-weight: bold;
        }

        /* Charts Section */
        .charts {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .chart-container {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            animation: fadeIn 0.8s ease;
            width: 100%;
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            width: 100%;
        }

        .chart-header h3 {
            color: var(--dark-color);
        }

        /* Recent Orders Section */
        .recent-orders {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            animation: fadeIn 1s ease;
        }

        .orders-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .orders-header h3 {
            color: var(--dark-color);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        table th {
            background: #f8f9fa;
            color: #7f8c8d;
            font-weight: 500;
        }

        table tr:hover {
            background: #f8f9fa;
        }

        .status {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .status.completed {
            background: rgba(46, 204, 113, 0.1);
            color: var(--success-color);
        }

        .status.pending {
            background: rgba(243, 156, 18, 0.1);
            color: var(--warning-color);
        }

        .status.cancelled {
            background: rgba(231, 76, 60, 0.1);
            color: var(--danger-color);
        }

        /* Additional Graphs Container */
        .additional-graphs {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .charts, .additional-graphs {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                overflow: hidden;
            }
            .sidebar-header h3, .sidebar-menu li a span {
                display: none;
            }
            .sidebar-menu li a {
                justify-content: center;
            }
            .sidebar-menu li a i {
                margin-right: 0;
                font-size: 1.2rem;
            }
            .main-content {
                margin-left: 70px;
            }
        }

        @media (max-width: 576px) {
            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
             <img src="media/logo2.png" alt="Admin Logo" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
             <h3>Madhu Tamang</h3>
        </div>
        <ul class="sidebar-menu">
            <li class="active">
                <a href="#">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-users"></i>
                    <span>Customers</span>
                </a>
            </li>
            <li>
                <a href="#order">
                    <i class="fas fa-receipt"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-comments"></i>
                    <span>Reviews</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-user"></i>
                    <span>My Profile</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>Dashboard Overview</h1>
            <a href="#" class="logout-button" id="logout-link">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </div>

        <div class="cards">
            <div class="card">
                <div class="card-header">
                    <h3>Total Revenue</h3>
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-body">
                    <h2>$24,780</h2>
                    <p>All Time</p>
                </div>
                <div class="card-footer">
                    <span>+12.5%</span> from last month
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>Total Orders</h3>
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-body">
                    <h2>1,248</h2>
                    <p>This Month</p>
                </div>
                <div class="card-footer">
                    <span>+8.3%</span> from last month
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>New Customers</h3>
                    <i class="fas fa-user-plus"></i>
                </div>
                <div class="card-body">
                    <h2>342</h2>
                    <p>This Month</p>
                </div>
                <div class="card-footer">
                    <span>+5.2%</span> from last month
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>Product Views</h3>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="card-body">
                    <h2>8,756</h2>
                    <p>Today</p>
                </div>
                <div class="card-footer">
                    <span>+22.7%</span> from yesterday
                </div>
            </div>
        </div>

        <div class="charts">
            <div class="chart-container">
                <div class="chart-header">
                    <h3>Sales Overview</h3>
                    <select id="sales-period-select">
                        <option value="last-7-days">Last 7 Days</option>
                        <option value="last-30-days">Last 30 Days</option>
                        <option value="last-90-days">Last 90 Days</option>
                    </select>
                </div>
                <canvas id="sales-chart"></canvas>
            </div>
            <div class="chart-container">
                <div class="chart-header">
                    <h3>Top Products</h3>
                    <select id="product-period-select">
                        <option value="this-month">This Month</option>
                        <option value="last-month">Last Month</option>
                        <option value="last-quarter">Last Quarter</option>
                    </select>
                </div>
                <canvas id="products-chart"></canvas>
            </div>
        </div>

        <div class="additional-graphs">
            <div class="chart-container">
                <div class="chart-header">
                    <h3>Category Sales</h3>
                </div>
                <canvas id="categorySalesChart"></canvas>
            </div>
            <div class="chart-container">
                <div class="chart-header">
                    <h3>Top Revenue Products</h3>
                </div>
                <canvas id="revenueChart"></canvas>
            </div>
        </div>

        <div class="recent-orders">
            <div class="orders-header" id="order">
                <h3>Recent Orders</h3>
                <button>View All</button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Products</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#SK-1256</td>
                        <td>Sarah Johnson</td>
                        <td>Anti-Aging Cream (2), Face Wash</td>
                        <td>$84.50</td>
                        <td><span class="status completed">Completed</span></td>
                        <td>Today, 10:45 AM</td>
                    </tr>
                    <tr>
                        <td>#SK-1255</td>
                        <td>Michael Brown</td>
                        <td>Sunscreen Lotion, Toner</td>
                        <td>$42.00</td>
                        <td><span class="status completed">Completed</span></td>
                        <td>Today, 09:30 AM</td>
                    </tr>
                    <tr>
                        <td>#SK-1254</td>
                        <td>Emily Davis</td>
                        <td>Vitamin C Serum, Night Cream</td>
                        <td>$68.75</td>
                        <td><span class="status pending">Pending</span></td>
                        <td>Yesterday, 4:15 PM</td>
                    </tr>
                    <tr>
                        <td>#SK-1253</td>
                        <td>Robert Wilson</td>
                        <td>Face Mask (3), Eye Cream</td>
                        <td>$56.20</td>
                        <td><span class="status completed">Completed</span></td>
                        <td>Yesterday, 2:00 PM</td>
                    </tr>
                    <tr>
                        <td>#SK-1252</td>
                        <td>Jessica Lee</td>
                        <td>Moisturizer, Cleanser</td>
                        <td>$39.90</td>
                        <td><span class="status cancelled">Cancelled</span></td>
                        <td>May 12, 2024</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simple animation for sidebar menu items
            document.querySelectorAll('.sidebar-menu li').forEach((item, index) => {
                item.style.animationDelay = (index * 0.1) + 's';
                
                item.addEventListener('click', function() {
                    document.querySelectorAll('.sidebar-menu li').forEach(i => {
                        i.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });

            // --- Sales Chart ---
            const salesChartCtx = document.getElementById('sales-chart').getContext('2d');
            let salesChart;

            function createSalesChart(period) {
                const salesData = {
                    'last-7-days': {
                        labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6', 'Day 7'],
                        data: [150, 200, 180, 250, 220, 300, 280]
                    },
                    'last-30-days': {
                        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                        data: [600, 800, 750, 900]
                    },
                    'last-90-days': {
                        labels: ['Month 1', 'Month 2', 'Month 3'],
                        data: [2000, 2500, 2300]
                    }
                };

                const selectedData = salesData[period];

                if (salesChart) {
                    salesChart.destroy();
                }

                salesChart = new Chart(salesChartCtx, {
                    type: 'line',
                    data: {
                        labels: selectedData.labels,
                        datasets: [{
                            label: 'Sales',
                            data: selectedData.data,
                            backgroundColor: 'rgba(142, 68, 173, 0.2)',
                            borderColor: '#8e44ad',
                            borderWidth: 2,
                            fill: true,
                            pointRadius: 5,
                            pointBackgroundColor: '#8e44ad',
                            pointHoverRadius: 7,
                            pointHoverBackgroundColor: '#9b59b6'
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }
                });
            }

            document.getElementById('sales-period-select').addEventListener('change', (event) => {
                createSalesChart(event.target.value);
            });

            createSalesChart('last-7-days'); // Initialize chart

            // --- Products Chart ---
            const productsChartCtx = document.getElementById('products-chart').getContext('2d');
            let productsChart;

            function createProductsChart(period) {
                const productData = {
                    'this-month': {
                        labels: ['Product A', 'Product B', 'Product C', 'Product D', 'Product E'],
                        data: [120, 100, 80, 90, 110]
                    },
                    'last-month': {
                        labels: ['Product A', 'Product B', 'Product C', 'Product D', 'Product E'],
                        data: [100, 90, 70, 80, 105]
                    },
                    'last-quarter': {
                        labels: ['Product A', 'Product B', 'Product C', 'Product D', 'Product E'],
                        data: [300, 250, 200, 220, 280]
                    }
                };

                const selectedData = productData[period];

                if (productsChart) {
                    productsChart.destroy();
                }

                productsChart = new Chart(productsChartCtx, {
                    type: 'bar',
                    data: {
                        labels: selectedData.labels,
                        datasets: [{
                            label: 'Sales',
                            data: selectedData.data,
                            backgroundColor: [
                                'rgba(142, 68, 173, 0.7)',
                                'rgba(123, 104, 238, 0.7)',
                                'rgba(52, 152, 219, 0.7)',
                                'rgba(46, 204, 113, 0.7)',
                                'rgba(241, 196, 15, 0.7)'
                            ],
                            borderColor: 'rgba(0, 0, 0, 0)',
                            borderWidth: 0
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }
                });
            }

            document.getElementById('product-period-select').addEventListener('change', (event) => {
                createProductsChart(event.target.value);
            });

            createProductsChart('this-month'); // Initialize chart

            // --- Category Sales Chart ---
            const categoryCtx = document.getElementById('categorySalesChart').getContext('2d');
            new Chart(categoryCtx, {
                type: 'bar',
                data: {
                    labels: ["Serums", "Cleansers", "Moisturizers", "Sunscreens"],
                    datasets: [{
                        label: 'Sales ($)',
                        data: [35000, 22000, 28000, 15000],
                        backgroundColor: [
                            'rgba(142, 68, 173, 0.7)',
                            'rgba(123, 104, 238, 0.7)',
                            'rgba(52, 152, 219, 0.7)',
                            'rgba(46, 204, 113, 0.7)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return '$' + value/1000 + 'k';
                                }
                            }
                        }
                    },
                    plugins: {
                        legend: { display: false }
                    }
                }
            });

            // --- Revenue Chart ---
            const revenueCtx = document.getElementById('revenueChart').getContext('2d');
            new Chart(revenueCtx, {
                type: 'doughnut',
                data: {
                    labels: ["Radiant Glow Oil", "Hydrating Serum X", "Daily Moisturizer Z"],
                    datasets: [{
                        label: 'Revenue ($)',
                        data: [45000, 38000, 32000],
                        backgroundColor: [
                            'rgba(255, 159, 64, 0.7)',
                            'rgba(153, 102, 255, 0.7)',
                            'rgba(0, 192, 0, 0.7)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'right' },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': $' + context.raw.toLocaleString();
                                }
                            }
                        }
                    }
                }
            });

            // --- Logout Functionality ---
            document.getElementById('logout-link').addEventListener('click', function(event) {
                event.preventDefault();
                const confirmation = confirm("Are you sure you want to log out?");
                if (confirmation) {
                    window.location.href = "home.php";
                }
            });

            // Table row animation
            document.querySelectorAll('tr').forEach((row, index) => {
                row.style.opacity = '0';
                row.style.transform = 'translateX(20px)';
                row.style.transition = `all 0.4s ease ${index * 0.1}s`;
                setTimeout(() => {
                    row.style.opacity = '1';
                    row.style.transform = 'translateX(0)';
                }, 500);
            });
        });
    </script>
</body>
</html>