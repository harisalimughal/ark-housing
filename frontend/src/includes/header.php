<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ark Housing Group - Your trusted partner in modern real estate</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/public/assets/css/main.css?v=2">
    <link rel="stylesheet" href="/public/assets/css/responsive.css?v=2">
    <style>
        .nav-links a {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            color: #2B2B2B;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .nav-links a.active {
            background-color: #72C3F0A3;
            color: #2B2B2B;
        }
        .nav-links a:hover:not(.active) {
            background-color: rgba(114, 195, 240, 0.1);
            color: #2B2B2B;
        }
        .dropdown-menu li a:hover {
            background-color: #72C3F0A3 !important;
        }

        /* Mobile Menu Styles */
        .mobile-menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /*background: rgba(0, 0, 0, 0.5);*/
            z-index: 1000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .mobile-menu-overlay.active {
            display: flex;
        }
        .mobile-menu-content {
            background: white;
            width: 100%;
            max-width: 500px;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            animation: slideUp 0.3s ease-out;
        }
        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .mobile-menu-header {
            padding: 20px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #f0f0f0;
        }
        .close-menu-btn {
            background: none;
            border: none;
            cursor: pointer;
            color: #2B2B2B;
        }
        .mobile-nav-links {
            list-style: none;
            padding: 10px 0;
        }
        .mobile-nav-links > li {
            border-bottom: 1px solid #f9f9f9;
        }
        .mobile-nav-links a {
            display: block;
            padding: 16px 24px;
            color: #334155;
            font-size: 17px;
            font-weight: 500;
            transition: background 0.2s;
        }
        .mobile-nav-links a.active {
            color: #48A7DD;
        }
        .mobile-dropdown-toggle {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-right: 24px;
            cursor: pointer;
        }
        .mobile-dropdown-toggle a {
            flex: 1;
            border: none;
        }
        .mobile-dropdown-menu {
            display: none;
            list-style: none;
            background: #f8fafc;
            padding-left: 20px;
        }
        .mobile-dropdown-menu a {
            font-size: 15px;
            padding: 12px 24px;
        }
        .mobile-dropdown.active .mobile-dropdown-menu {
            display: block;
        }
        .mobile-dropdown.active .mobile-dropdown-toggle svg {
            transform: rotate(180deg);
        }

        @media (max-width: 1024px) {
            .navbar-bottom, .header-actions {
                display: none !important;
            }
            .mobile-menu-btn {
                display: block !important;
            }
        }
    </style>
</head>
<body>

<?php
$current_page = $_SERVER['REQUEST_URI'];
// Function to check if a menu item is active
function is_active($paths, $current_page) {
    if (!is_array($paths)) $paths = [$paths];
    
    foreach ($paths as $path) {
        if ($path === '/' && ($current_page === '/' || $current_page === '/index.php')) return 'active';
        if ($path !== '/' && strpos($current_page, $path) !== false) return 'active';
    }
    return '';
}
?>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu-overlay" id="mobileMenu">
    <div class="mobile-menu-content">
       
        <ul class="mobile-nav-links">
            <li><a href="/" class="<?php echo is_active('/', $current_page); ?>">Home</a></li>
            <li class="mobile-dropdown">
                <div class="mobile-dropdown-toggle">
                    <a href="/services.php" class="<?php echo is_active(['/services.php', '/hmo.php', '/transitional.php', '/supported-living.php', '/guaranteed-rent.php'], $current_page); ?>">Services</a>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                </div>
                <ul class="mobile-dropdown-menu">
                    <li><a href="/hmo.php">HMO</a></li>
                    <li><a href="/transitional.php">Transitional</a></li>
                    <li><a href="/supported-living.php">Supported Living</a></li>
                    <li><a href="/guaranteed-rent.php">Guaranteed Rent</a></li>
                </ul>
            </li>
            <li class="mobile-dropdown">
                <div class="mobile-dropdown-toggle">
                    <a href="/landlord.php" class="<?php echo is_active(['/landlord.php', '/landlord-enquiry.php', '/faqs.php'], $current_page); ?>">Landlords</a>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                </div>
                <ul class="mobile-dropdown-menu">
                    <li><a href="/landlord.php">Landlord</a></li>
                    <li><a href="/landlord-enquiry.php">Landlord Enquiry Form</a></li>
                    <li><a href="/faqs.php">FAQs</a></li>
                </ul>
            </li>
            <li><a href="/about.php" class="<?php echo is_active('/about.php', $current_page); ?>">About</a></li>
            <li><a href="/contact.php" class="<?php echo is_active('/contact.php', $current_page); ?>">Contact</a></li>
        </ul>
        <div style="padding: 20px 24px; display: flex; flex-direction: column; gap: 12px; border-top: 1px solid #f0f0f0;">
            <a href="#" class="btn btn-primary" style="width: 100%; border-radius: 12px; padding: 14px;">Tenants Enquiry</a>
            <a href="#" style="text-align: center; color: #64748b; font-weight: 500; font-size: 14px;">Login/Register</a>
        </div>
    </div>
</div>

<!-- Topbar -->
<div class="topbar">
    <div class="container">
        <div class="topbar-left">
            <span style="display: flex; align-items: center; gap: 8px;"><img src="/public/assets/images/icons/location.svg" alt="Location" width="14" height="18"> 123 Ark Street, London, UK</span>
        </div>
        <div class="topbar-right" style="display: flex; gap: 20px;">
            <span style="display: flex; align-items: center; gap: 8px;"><img src="/public/assets/images/icons/phone.svg" alt="Phone" width="16" height="16"> 0123 456 7890</span>
            <span style="display: flex; align-items: center; gap: 8px;"><img src="/public/assets/images/icons/email.svg" alt="Email" width="16" height="16"> info@arkhousing.co.uk</span>
        </div>
    </div>
</div>

<!-- Navbar -->
<header class="header-main" style="background-color: var(--bg-white); box-shadow: var(--shadow-sm); position: sticky; top: 0; z-index: 50;">
    <div class="container">
        <!-- Logo and Actions Row -->
        <div class="header-top-content" style="display: flex; justify-content: space-between; align-items: center; padding: 1.25rem 0 0 0;">
            <a href="/" class="logo">
                <img src="/public/assets/images/logos/logo-full.png" alt="Ark Housing Group" style="height: 44px;">
            </a>
            
            <button class="mobile-menu-btn" id="openMenu" style="display: none; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 8px; cursor: pointer;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2B2B2B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </button>
            
            <div class="header-actions" style="display: flex; align-items: center; gap: 1.5rem;">
                <a href="#" class="login-link" style="display: flex; align-items: center; gap: 0.5rem; color: #2B2B2B; font-weight: 500; font-size: 15px;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Login/Register
                </a>
                <a href="#" class="btn btn-primary" style="padding: 0.6rem 1.25rem; border-radius: 30px; font-size: 15px;">Tenants Enquiry</a>
            </div>
        </div>
        
        <!-- Navigation Row -->
        <nav class="navbar-bottom" style="padding-top: 1.8rem; padding-bottom: 1rem; display: flex; justify-content: center;">
            <ul class="nav-links" style="display: flex; gap: 1.25rem; align-items: center; justify-content: center; width: 100%; color: #2B2B2B;">
                <li><a href="/" class="<?php echo is_active('/', $current_page); ?>">Home</a></li>
                <li><a href="/about.php" class="<?php echo is_active('/about.php', $current_page); ?>">About</a></li>
                <li class="dropdown" style="position: relative;">
                    <a href="/services.php" class="<?php echo is_active(['/services.php', '/hmo.php', '/transitional.php', '/supported-living.php', '/guaranteed-rent.php'], $current_page); ?>" style="display: flex; align-items: center; gap: 0.25rem;">
                        Services
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a> 
                    <ul class="dropdown-menu">
                        <li><a href="/hmo.php">HMO</a></li>
                        <li><a href="/transitional.php">Transitional</a></li>
                        <li><a href="/supported-living.php">Supported Living</a></li>
                        <li><a href="/guaranteed-rent.php">Guaranteed Rent</a></li>
                    </ul>
                </li>
                <li class="dropdown" style="position: relative;">
                    <a href="/landlord.php" class="<?php echo is_active(['/landlord.php', '/landlord-enquiry.php', '/faqs.php'], $current_page); ?>" style="display: flex; align-items: center; gap: 0.25rem;">
                        Landlords
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a> 
                    <ul class="dropdown-menu">
                        <li><a href="/landlord.php">Landlord</a></li>
                        <li><a href="/landlord-enquiry.php">Landlord Enquiry Form</a></li>
                        <li><a href="/faqs.php">FAQs</a></li>
                    </ul>
                </li>
                <li class="dropdown" style="position: relative;">
                    <a href="/tenant-support.php" class="<?php echo is_active(['/tenant-inquiry.php', '/tenant-support.php'], $current_page); ?>" style="display: flex; align-items: center; gap: 0.25rem;">
                        Tenants
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a> 
                    <ul class="dropdown-menu">
                        <li><a href="/tenant-support.php">Tenant Support</a></li>
                        <li><a href="/tenant-inquiry.php">Tenant Inquiry Form</a></li>
                    </ul>
                </li>
                <li class="dropdown" style="position: relative;">
                    <a href="/partnerships.php" class="<?php echo is_active(['/partnerships.php', '/partner-enquiry.php'], $current_page); ?>" style="display: flex; align-items: center; gap: 0.25rem;">
                        For Partners
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a> 
                    <ul class="dropdown-menu">
                        <li><a href="/partnerships.php" style="white-space: normal; line-height: 1.4;">RSL / Local Authority Partnerships</a></li>
                        <li><a href="/partner-enquiry.php">Partner Enquiry Form</a></li>
                    </ul>
                </li>
                <li><a href="/compliance.php" class="<?php echo is_active('/compliance.php', $current_page); ?>">Compliance</a></li>
                <li><a href="/contact.php" class="<?php echo is_active('/contact.php', $current_page); ?>">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<script>
    // Mobile Menu Toggle
    const mobileMenu = document.getElementById('mobileMenu');
    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');

    if (openMenu) {
        openMenu.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    }

    if (closeMenu) {
        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        });
    }

    // Close menu on backdrop click
    if (mobileMenu) {
        mobileMenu.addEventListener('click', (e) => {
            if (e.target === mobileMenu) {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    // Mobile Dropdown Toggle
    const dropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            const dropdown = toggle.parentElement;
            dropdown.classList.toggle('active');
        });
    });
</script>
</body>
</html>
