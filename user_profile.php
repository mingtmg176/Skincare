<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #fffaf5;
            color: #333;
        }
        
        .container {
            display: flex;
            max-width: 1200px;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 0 10px rgb(240, 181, 181);
        }
        
        .sidebar {
            width: 250px;
            padding: 20px;
            border-right: 1px solid rgb(244, 203, 203);
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        
        .main-content {
            flex: 1;
            padding: 30px;
            overflow-y: auto;
            max-height: 100vh;
        }
        
        .user-info {
            padding-bottom: 20px;
            margin-bottom: 20px;
            border-bottom: 1px solid #fcdede;
        }
        
        .user-name {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .menu-section {
            margin-bottom: 30px;
        }
        
        .menu-title {
            font-size: 16px;
            font-weight: 600;
            color: #666;
            margin-bottom: 15px;
            text-transform: uppercase;
        }
        
        .menu-item {
            padding: 10px 0;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .menu-item i {
            width: 20px;
            text-align: center;
        }
        
        .menu-item:hover {
            color: #b35d5d;
        }
        
        .menu-item.active {
            color: #b35d5d;
            font-weight: 600;
        }
        
        .logout-btn {
            margin-top: auto;
            padding: 10px 0;
            cursor: pointer;
            color: #ff3f6c;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .logout-btn:hover {
            text-decoration: underline;
        }
        
        .section-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 25px;
        }
        
        .info-card {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #fcdede;
        }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .card-title {
            font-size: 18px;
            font-weight: 600;
        }
        
        .edit-btn {
            color: #b35d5d;
            cursor: pointer;
            font-weight: 500;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #666;
        }
        
        .form-control {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #fcdede;
            border-radius: 3px;
            display: none;
        }
        
        .form-control.active {
            display: block;
        }
        
        .static-value {
            padding: 8px 0;
        }
        
        .static-value.hidden {
            display: none;
        }
        
        .gender-options {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }
        
        .gender-option {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .action-buttons {
            margin-top: 10px;
            display: none;
        }
        
        .action-buttons.active {
            display: block;
        }
        
        .save-btn, .cancel-btn {
            padding: 6px 12px;
            margin-right: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .save-btn {
            background-color: #b35d5d;
            color: white;
        }
        
        .cancel-btn {
            background-color: #f5f5f5;
            color: #333;
        }
        
        .address-section, .orders-section {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #fcdede;
        }
        
        .address-card, .order-card {
            border: 1px solid #fcdede;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
        
        .address-header, .order-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        
        .address-title, .order-title {
            font-weight: 600;
        }
        
        .default-badge {
            background-color: #b35d5d;
            color: white;
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 12px;
        }
        
        .address-actions, .order-actions {
            display: flex;
            gap: 15px;
        }
        
        .action-link {
            color: #2874f0;
            cursor: pointer;
            font-size: 14px;
        }
        
        .faq-section {
            margin-top: 40px;
        }
        
        .faq-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .faq-item {
            margin-bottom: 20px;
        }
        
        .faq-question {
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .account-actions {
            margin-top: 30px;
        }
        
        .action-btn {
            color: #b35d5d;
            cursor: pointer;
            font-weight: 500;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="user-info">
              <h4>Hello,</h4>
                <div class="user-name">Neha Thakuri</div>
            </div>
            
            <div class="menu-section">
                <div class="menu-title">My Account</div>
                <div class="menu-item" onclick="scrollToSection('orders-section')">
                    <i class="fas fa-box"></i>
                    <span>MY ORDERS</span>
                </div>
                <div class="menu-item active" onclick="scrollToSection('account-settings')">
                    <i class="fas fa-cog"></i>
                    <span>ACCOUNT SETTINGS</span>
                </div>
                <div class="menu-item" onclick="scrollToSection('manage-address')">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Manage Addresses</span>
                </div>
            </div>
            
            <div class="menu-section">
                <div class="menu-title">Payments</div>
                <div class="menu-item">
                    <i class="fas fa-gift"></i>
                    <span>Gift Cards</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-money-bill-wave"></i>
                    <span>Saved UPI</span>
                </div>
                <div class="menu-item">
                    <i class="far fa-credit-card"></i>
                    <span>Saved Cards</span>
                </div>
            </div>
            
            <div class="menu-section">
                <div class="menu-title">My Stuff</div>
                <div class="menu-item">
                    <i class="far fa-heart"></i>
                    <span>My Wishlist</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-tag"></i>
                    <span>My Coupons</span>
                </div>
                <div class="menu-item">
                    <i class="far fa-star"></i>
                    <span>My Reviews & Ratings</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-bell"></i>
                    <span>All Notifications</span>
                </div>
            </div>
        </div>
        
        <div class="main-content">
            <div id="account-settings">
                <div class="section-title">Personal Information</div>
                
                <div class="info-card">
                    <div class="card-header">
                        <div class="card-title">Profile Information</div>
                        <div class="edit-btn" onclick="toggleEdit('profile')">Edit</div>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-label">Your Name</div>
                        <div class="static-value" id="name-static">Neha Thakuri</div>
                        <input type="text" class="form-control" id="name-edit" value="Neha Thakuri">
                    </div>
                    
                    <div class="form-group">
                        <div class="form-label">Your Gender</div>
                        <div class="static-value" id="gender-static">Female</div>
                        <div class="gender-options" id="gender-edit" style="display: none;">
                            <div class="gender-option">
                                <input type="radio" name="gender" id="male" value="Male">
                                <label for="male">Male</label>
                            </div>
                            <div class="gender-option">
                                <input type="radio" name="gender" id="female" value="Female" checked>
                                <label for="female">Female</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="action-buttons" id="profile-actions">
                        <button class="save-btn" onclick="saveChanges('profile')">Save</button>
                        <button class="cancel-btn" onclick="cancelEdit('profile')">Cancel</button>
                    </div>
                </div>
                
                <div class="info-card">
                    <div class="card-header">
                        <div class="card-title">Email Address</div>
                        <div class="edit-btn" onclick="toggleEdit('email')">Edit</div>
                    </div>
                    <div class="static-value" id="email-static">thakurineha2004@gmail.com</div>
                    <input type="email" class="form-control" id="email-edit" value="thakurineha2004@gmail.com">
                    <div class="action-buttons" id="email-actions">
                        <button class="save-btn" onclick="saveChanges('email')">Save</button>
                        <button class="cancel-btn" onclick="cancelEdit('email')">Cancel</button>
                    </div>
                </div>
                
                <div class="info-card">
                    <div class="card-header">
                        <div class="card-title">Mobile Number</div>
                        <div class="edit-btn" onclick="toggleEdit('mobile')">Edit</div>
                    </div>
                    <div class="static-value" id="mobile-static">+918910955013</div>
                    <input type="tel" class="form-control" id="mobile-edit" value="+918910955013">
                    <div class="action-buttons" id="mobile-actions">
                        <button class="save-btn" onclick="saveChanges('mobile')">Save</button>
                        <button class="cancel-btn" onclick="cancelEdit('mobile')">Cancel</button>
                    </div>
                </div>
            </div>
            
            <div class="address-section" id="manage-address">
                <div class="section-title">Manage Addresses</div>
                
                <div class="address-card">
                    <div class="address-header">
                        <div class="address-title">Home</div>
                        <div class="default-badge">DEFAULT</div>
                    </div>
                    <div class="address-details">
                        <p>Neha Thakuri</p>
                        <p>123, Main Street, Sector 15</p>
                        <p>Mumbai, Maharashtra 400001</p>
                        <p>India</p>
                        <p>Phone: +918910955013</p>
                    </div>
                    <div class="address-actions">
                        <div class="action-link">EDIT</div>
                        <div class="action-link">REMOVE</div>
                        <div class="action-link">SET AS DEFAULT</div>
                    </div>
                </div>
                
                <div class="address-card">
                    <div class="address-header">
                        <div class="address-title">Work</div>
                    </div>
                    <div class="address-details">
                        <p>Neha Thakuri</p>
                        <p>456, Business Park, Andheri East</p>
                        <p>Mumbai, Maharashtra 400069</p>
                        <p>India</p>
                        <p>Phone: +918910955013</p>
                    </div>
                    <div class="address-actions">
                        <div class="action-link">EDIT</div>
                        <div class="action-link">REMOVE</div>
                        <div class="action-link">SET AS DEFAULT</div>
                    </div>
                </div>
                
                <button class="save-btn" style="margin-top: 15px;">
                    <i class="fas fa-plus"></i> ADD NEW ADDRESS
                </button>
            </div>
            
            <div class="orders-section" id="orders-section">
                <div class="section-title">My Orders</div>
                
                <div class="order-card">
                    <div class="order-header">
                        <div class="order-title">Order #ORD-12345</div>
                        <div class="order-date">Placed on 15 April 2025</div>
                    </div>
                    <div class="order-details">
                        <p>Status: Delivered</p>
                        <p>Items: 2</p>
                        <p>Total Amount: ₹2,499</p>
                    </div>
                    <div class="order-actions">
                        <div class="action-link">VIEW DETAILS</div>
                        <div class="action-link">TRACK ORDER</div>
                        <div class="action-link">BUY AGAIN</div>
                    </div>
                </div>

                <div class="order-card">
                    <div class="order-header">
                        <div class="order-title">Order #ORD-11005</div>
                        <div class="order-date">Placed on 15 April 2025</div>
                    </div>
                    <div class="order-details">
                        <p>Status: On the Way</p>
                        <p>Items: 3</p>
                        <p>Total Amount: ₹4,499</p>
                    </div>
                    <div class="order-actions">
                        <div class="action-link">VIEW DETAILS</div>
                        <div class="action-link">TRACK ORDER</div>
                        <div class="action-link">BUY AGAIN</div>
                    </div>
                </div>
                
                <div class="order-card">
                    <div class="order-header">
                        <div class="order-title">Order #ORD-12344</div>
                        <div class="order-date">Placed on 10 April 2025</div>
                    </div>
                    <div class="order-details">
                        <p>Status: Shipped</p>
                        <p>Items: 1</p>
                        <p>Total Amount: ₹1,299</p>
                    </div>
                    <div class="order-actions">
                        <div class="action-link">VIEW DETAILS</div>
                        <div class="action-link">TRACK ORDER</div>
                        <div class="action-link">BUY AGAIN</div>
                    </div>
                </div>
            </div>
            
            <div class="faq-section">
                <div class="faq-title">FAQs</div>
                
                <div class="faq-item">
                    <div class="faq-question">What happens when I update my email address (or mobile number)?</div>
                    <div>Your login email id (or mobile number) changes, likewise. You'll receive all your account related communication on your updated email address (or mobile number).</div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">When will my account be updated with the new email address (or mobile number)?</div>
                    <div>It happens as soon as you confirm the verification code sent to your email (or mobile) and save the changes.</div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">What happens to my existing account when I update my email address (or mobile number)?</div>
                    <div>Updating your email address (or mobile number) doesn't invalidate your account. Your account remains fully functional. You'll continue seeing your Order history, saved information and personal details.</div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">Does my Seller account get affected when I update my email address?</div>
                    <div>We have a 'single sign-on' policy. Any changes will reflect in your Seller account also.</div>
                </div>
            </div>
            
            <div class="account-actions">
                <div class="action-btn" onclick="confirmAction('deactivate')">Deactivate Account</div>
                <div class="action-btn" onclick="confirmAction('delete')">Delete Account</div>
                <div class="logout-btn" onclick="logout()">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </div>
            </div>
        </div>
    </div>

    <script>
        // Store original values for cancel functionality
        const originalValues = {
            name: "Neha Thakuri",
            email: "thakurineha2004@gmail.com",
            mobile: "+918910955013",
            gender: "Female"
        };
        
        // Currently editing field (null when not editing)
        let currentlyEditing = null;
        
        // Toggle edit mode for a section
        function toggleEdit(section) {
            // If already editing this section, do nothing
            if (currentlyEditing === section) return;
            
            // If editing another section, cancel that first
            if (currentlyEditing) {
                cancelEdit(currentlyEditing);
            }
            
            // Set currently editing
            currentlyEditing = section;
            
            // Show edit fields and hide static values
            if (section === 'profile') {
                document.getElementById('name-static').classList.add('hidden');
                document.getElementById('name-edit').classList.add('active');
                document.getElementById('gender-static').classList.add('hidden');
                document.getElementById('gender-edit').style.display = 'flex';
                document.getElementById('profile-actions').classList.add('active');
            } else if (section === 'email') {
                document.getElementById('email-static').classList.add('hidden');
                document.getElementById('email-edit').classList.add('active');
                document.getElementById('email-actions').classList.add('active');
            } else if (section === 'mobile') {
                document.getElementById('mobile-static').classList.add('hidden');
                document.getElementById('mobile-edit').classList.add('active');
                document.getElementById('mobile-actions').classList.add('active');
            }
        }
        
        // Save changes for a section
        function saveChanges(section) {
            if (section === 'profile') {
                const newName = document.getElementById('name-edit').value;
                const newGender = document.querySelector('input[name="gender"]:checked').value;
                
                // Update static values
                document.getElementById('name-static').textContent = newName;
                document.getElementById('gender-static').textContent = newGender;
                
                // Update original values
                originalValues.name = newName;
                originalValues.gender = newGender;
                
                // Exit edit mode
                cancelEdit(section);
                
                // Also update the username in sidebar
                document.querySelector('.user-name').textContent = newName;
                
            } else if (section === 'email') {
                const newEmail = document.getElementById('email-edit').value;
                
                // Validate email
                if (!validateEmail(newEmail)) {
                    alert('Please enter a valid email address');
                    return;
                }
                
                document.getElementById('email-static').textContent = newEmail;
                originalValues.email = newEmail;
                cancelEdit(section);
                
            } else if (section === 'mobile') {
                const newMobile = document.getElementById('mobile-edit').value;
                
                // Validate mobile (simple check)
                if (newMobile.length < 10) {
                    alert('Please enter a valid mobile number');
                    return;
                }
                
                document.getElementById('mobile-static').textContent = newMobile;
                originalValues.mobile = newMobile;
                cancelEdit(section);
            }
            
            // Here you would typically make an AJAX call to save to server
            console.log('Changes saved:', originalValues);
        }
        
        // Cancel editing for a section
        function cancelEdit(section) {
            if (section === 'profile') {
                // Restore original values
                document.getElementById('name-edit').value = originalValues.name;
                document.getElementById('name-static').classList.remove('hidden');
                document.getElementById('name-edit').classList.remove('active');
                
                // Restore gender selection
                document.getElementById('gender-static').classList.remove('hidden');
                document.getElementById('gender-edit').style.display = 'none';
                document.querySelector(`input[value="${originalValues.gender}"]`).checked = true;
                
                document.getElementById('profile-actions').classList.remove('active');
                
            } else if (section === 'email') {
                document.getElementById('email-edit').value = originalValues.email;
                document.getElementById('email-static').classList.remove('hidden');
                document.getElementById('email-edit').classList.remove('active');
                document.getElementById('email-actions').classList.remove('active');
                
            } else if (section === 'mobile') {
                document.getElementById('mobile-edit').value = originalValues.mobile;
                document.getElementById('mobile-static').classList.remove('hidden');
                document.getElementById('mobile-edit').classList.remove('active');
                document.getElementById('mobile-actions').classList.remove('active');
            }
            
            currentlyEditing = null;
        }
        
        // Simple email validation
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
        
        // Handle account actions
        function confirmAction(action) {
            const confirmation = confirm(`Are you sure you want to ${action} your account? This action cannot be undone.`);
            if (confirmation) {
                alert(`Account ${action}d successfully.`);
                // In a real app, you would redirect or perform the action
            }
        }
        
        // Scroll to specific section
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
                
                // Update active menu item
                document.querySelectorAll('.menu-item').forEach(item => {
                    item.classList.remove('active');
                });
                
                // Find and activate the clicked menu item
                const menuItems = document.querySelectorAll('.menu-item');
                for (let item of menuItems) {
                    if (item.textContent.includes(sectionId.replace('-', ' '))) {
                        item.classList.add('active');
                        break;
                    }
                }
            }
        }
        
        // Logout function
        function logout() {
            const confirmation = confirm('Are you sure you want to logout?');
            if (confirmation) {
                alert('Logged out successfully');
                // In a real app, you would redirect to logout page
                window.location.href = 'logout.php'; // Redirect to logout page
            }
        }
        
        // Add click handlers for menu items
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function() {
                // Remove active class from all menu items
                document.querySelectorAll('.menu-item').forEach(i => {
                    i.classList.remove('active');
                });
                // Add active class to clicked item
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>