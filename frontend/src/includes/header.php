<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ark Housing Group - Your trusted partner in modern real estate</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/public/assets/images/logos/logo.svg">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/public/assets/css/main.css?v=2">
    <link rel="stylesheet" href="/public/assets/css/responsive.css?v=2">
    <style>
        .nav-links a {
            padding: 0.4rem 0.7rem;
            border-radius: 20px;
            color: #2B2B2B;
            font-size: 14px;
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

        /* Rotate dropdown arrow downward on hover */
        .dropdown > a svg {
            transition: transform 0.25s ease;
        }
        .dropdown:hover > a svg {
            transform: rotate(90deg);
        }

        /* Profile dropdown */
        .profile-dropdown { position: relative; }
        .profile-btn {
            width: 40px;
            height: 40px;
            background: #f8fafc;
            border: 1.5px solid #e2e8f0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #334155;
            transition: all 0.2s ease;
            flex-shrink: 0;
        }
        .profile-btn:hover {
            background: #e8f4fb;
            border-color: #3EA1D8;
            color: #17386B;
        }
        .profile-dropdown-menu {
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.12), 0 2px 8px rgba(0,0,0,0.06);
            min-width: 140px;
            padding: 6px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-8px);
            transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s ease;
            z-index: 200;
            list-style: none;
        }
        .profile-dropdown:hover .profile-dropdown-menu,
        .profile-dropdown:focus-within .profile-dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .profile-dropdown-menu a {
            display: block;
            padding: 10px 16px;
            color: #334155;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            font-weight: 500;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.15s ease;
        }
        .profile-dropdown-menu a:hover {
            background: #f1f5f9;
            color: #17386B;
        }

        /* Mobile Menu Styles */
        .mobile-menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100%;
            z-index: 1000;
            display: none;
            align-items: flex-start;
            justify-content: center;
            padding: 60px 14px 14px 14px;
            overflow: hidden;
            box-sizing: border-box;
        }
        .mobile-menu-overlay.active {
            display: flex;
        }
        .mobile-menu-content {
            background: white;
            width: 100%;
            max-width: min(320px, calc(100vw - 28px));
            border-radius: 20px;
            overflow-x: hidden;
            overflow-y: auto;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            animation: slideUp 0.3s ease-out;
            max-height: calc(100vh - 80px);
        }
        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .mobile-menu-header {
            padding: 14px 18px;
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
            padding: 4px;
        }
        .mobile-nav-links {
            list-style: none;
            padding: 4px 0;
        }
        .mobile-nav-links > li {
            border-bottom: 1px solid #f9f9f9;
        }
        .mobile-nav-links a {
            display: block;
            padding: 11px 18px;
            color: #334155;
            font-size: 14px;
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
            padding-right: 18px;
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
            padding-left: 12px;
        }
        .mobile-dropdown-menu a {
            font-size: 13px;
            padding: 9px 18px;
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
<body class="<?php echo (isset($_COOKIE['pointer']) && $_COOKIE['pointer'] == 'default') ? '' : 'custom-cursor'; ?>">

    <!-- Page Loader -->
    <div id="page-loader">
        <img src="/public/assets/images/logos/logo.svg" class="loader-logo" alt="">
    </div>

    <!-- Scroll-to-top button -->
    <button id="scroll-top-btn" aria-label="Back to top">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 15l-6-6-6 6"/></svg>
    </button>

    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>

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
        <div class="mobile-menu-header">
            <span style="font-family:'Poppins',sans-serif;font-weight:600;font-size:16px;color:#1a1a2e;">Menu</span>
            <button class="close-menu-btn" id="closeMenu" aria-label="Close menu">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2B2B2B" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>

        <ul class="mobile-nav-links">
            <li><a href="/" class="<?php echo is_active('/', $current_page); ?>">Home</a></li>
            <li><a href="/about.php" class="<?php echo is_active('/about.php', $current_page); ?>">About</a></li>
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
                    <a href="javascript:void(0);" class="<?php echo is_active(['/landlord.php', '/landlord-enquiry.php', '/faqs.php'], $current_page); ?>">Landlords</a>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                </div>
                <ul class="mobile-dropdown-menu">
                    <li><a href="/landlord.php">Landlord</a></li>
                    <li><a href="/landlord-enquiry.php">Landlord Enquiry Form</a></li>
                    <li><a href="/faqs.php">FAQs</a></li>
                </ul>
            </li>
            <li class="mobile-dropdown">
                <div class="mobile-dropdown-toggle">
                    <a href="javascript:void(0);" class="<?php echo is_active(['/tenant-inquiry.php', '/tenant-support.php', '/tenant-faqs.php'], $current_page); ?>">Tenants</a>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                </div>
                <ul class="mobile-dropdown-menu">
                    <li><a href="/tenant-support.php">Tenant Support</a></li>
                    <li><a href="/tenant-inquiry.php">Tenant Inquiry Form</a></li>
                    <li><a href="/tenant-faqs.php">FAQs</a></li>
                </ul>
            </li>
            <li class="mobile-dropdown">
                <div class="mobile-dropdown-toggle">
                    <a href="javascript:void(0);" class="<?php echo is_active(['/partnerships.php', '/partner-enquiry.php', '/partner-faqs.php'], $current_page); ?>">For Partners</a>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                </div>
                <ul class="mobile-dropdown-menu">
                    <li><a href="/partnerships.php" style="white-space: normal; line-height: 1.4;">RSL / Local Authority Partnerships</a></li>
                    <li><a href="/partner-enquiry.php">Partner Enquiry Form</a></li>
                    <li><a href="/partner-faqs.php">FAQs</a></li>
                </ul>
            </li>
            <li><a href="/compliance.php" class="<?php echo is_active('/compliance.php', $current_page); ?>">Compliance</a></li>
            <li><a href="/all-faqs.php" class="<?php echo is_active('/all-faqs.php', $current_page); ?>">FAQs</a></li>
            <li><a href="/contact.php" class="<?php echo is_active('/contact.php', $current_page); ?>">Contact</a></li>
        </ul>
        <div style="padding: 12px 18px; display: flex; flex-direction: column; gap: 8px; border-top: 1px solid #f0f0f0;">
            <a href="/tenant-inquiry" class="btn btn-primary" style="width: 100%; border-radius: 10px; padding: 10px; font-size: 14px; text-align: center;">Tenants Enquiry</a>
            <div style="display: flex; gap: 8px;">
                <a href="/login" style="flex: 1; text-align: center; padding: 9px; border: 1.5px solid #e2e8f0; border-radius: 8px; color: #334155; font-weight: 500; font-size: 13px; text-decoration: none; font-family: 'Poppins', sans-serif;">Login</a>
                <a href="/register" style="flex: 1; text-align: center; padding: 9px; border: 1.5px solid #e2e8f0; border-radius: 8px; color: #334155; font-weight: 500; font-size: 13px; text-decoration: none; font-family: 'Poppins', sans-serif;">Register</a>
            </div>
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
    <div style="width: 100%; box-sizing: border-box; padding: 0 2.5rem;">
        <div class="header-row" style="display: flex; align-items: center; gap: 1.5rem; padding: 0.875rem 0;">

            <!-- Logo -->
            <a href="/" class="logo" style="display: inline-flex; align-items: center; gap: 10px; text-decoration: none; flex-shrink: 0;">
                <img src="/public/assets/images/logos/logo.svg" class="logo-icon" alt="Ark Housing" style="height: 44px; width: auto; flex-shrink: 0;">
                <div style="display: flex; flex-direction: column; line-height: 1.15;">
                    <span style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 17px; color: #17386B; white-space: nowrap;">Ark Housing <span style="color: #1FAF38;">Group</span></span>
                    <span style="font-family: 'Poppins', sans-serif; font-size: 9.5px; color: #3EA1D8; font-weight: 500; white-space: nowrap;">Your Safe Passage to a Stable Home</span>
                </div>
            </a>

            <!-- Nav (hidden on mobile) -->
            <nav class="navbar-bottom" style="flex: 1; min-width: 0; padding: 0; display: flex; justify-content: center;">
                <ul class="nav-links" style="display: flex; gap: 0.2rem; align-items: center; justify-content: center; width: 100%; color: #2B2B2B; list-style: none; margin: 0; padding: 0;">
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
                        <a href="javascript:void(0);" class="<?php echo is_active(['/landlord.php', '/landlord-enquiry.php', '/faqs.php'], $current_page); ?>" style="display: flex; align-items: center; gap: 0.25rem;">
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
                        <a href="javascript:void(0);" class="<?php echo is_active(['/tenant-inquiry.php', '/tenant-support.php', '/tenant-faqs.php'], $current_page); ?>" style="display: flex; align-items: center; gap: 0.25rem;">
                            Tenants
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/tenant-support.php">Tenant Support</a></li>
                            <li><a href="/tenant-inquiry.php">Tenant Inquiry Form</a></li>
                            <li><a href="/tenant-faqs.php">FAQs</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" style="position: relative;">
                        <a href="javascript:void(0);" class="<?php echo is_active(['/partnerships.php', '/partner-enquiry.php', '/partner-faqs.php'], $current_page); ?>" style="display: flex; align-items: center; gap: 0.25rem;">
                            For Partners
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/partnerships.php" style="white-space: normal; line-height: 1.4;">RSL / Local Authority Partnerships</a></li>
                            <li><a href="/partner-enquiry.php">Partner Enquiry Form</a></li>
                            <li><a href="/partner-faqs.php">FAQs</a></li>
                        </ul>
                    </li>
                    <li><a href="/compliance.php" class="<?php echo is_active('/compliance.php', $current_page); ?>">Compliance</a></li>
                    <li><a href="/all-faqs.php" class="<?php echo is_active('/all-faqs.php', $current_page); ?>">FAQs</a></li>
                    <li><a href="/contact.php" class="<?php echo is_active('/contact.php', $current_page); ?>">Contact</a></li>
                </ul>
            </nav>

            <!-- Right actions (hidden on mobile) -->
            <div class="header-actions" style="display: flex; align-items: center; gap: 0.75rem; flex-shrink: 0;">
                <a href="/tenant-inquiry" class="btn btn-primary" style="padding: 0.6rem 1.25rem; border-radius: 30px; font-size: 14px; white-space: nowrap;">Tenants Enquiry</a>
                <div class="profile-dropdown">
                    <button class="profile-btn" aria-label="Account">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </button>
                    <div class="profile-dropdown-menu">
                        <a href="/login">Login</a>
                        <a href="/register">Register</a>
                    </div>
                </div>
            </div>

            <!-- Mobile hamburger -->
            <button class="mobile-menu-btn" id="openMenu" style="display: none; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 8px; cursor: pointer; flex-shrink: 0;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2B2B2B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </button>

        </div>
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

    if (mobileMenu) {
        mobileMenu.addEventListener('click', (e) => {
            if (e.target === mobileMenu) {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    const dropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            const dropdown = toggle.parentElement;
            dropdown.classList.toggle('active');
        });
    });

    // Custom Cursor Logic
    const cursorDot = document.querySelector('.cursor-dot');
    const cursorOutline = document.querySelector('.cursor-outline');

    if (cursorDot && cursorOutline) {
        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;

            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;

            cursorOutline.animate({
                left: `${posX}px`,
                top: `${posY}px`
            }, { duration: 500, fill: "forwards" });
        });

        const updateInteractiveElements = () => {
            const interactiveElements = document.querySelectorAll('a, button, .page-btn, .dropdown, input, select, textarea, [role="button"]');
            interactiveElements.forEach(el => {
                el.addEventListener('mouseenter', () => document.body.classList.add('cursor-on-interactive'));
                el.addEventListener('mouseleave', () => document.body.classList.remove('cursor-on-interactive'));
                el.style.cursor = 'default';
            });
        };

        updateInteractiveElements();
        const observer = new MutationObserver(updateInteractiveElements);
        observer.observe(document.body, { childList: true, subtree: true });
    }
</script>
</body>
</html>
