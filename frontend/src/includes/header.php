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
</head>
<body>

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
        <div class="header-top-content" style="display: flex; justify-content: space-between; align-items: center; padding: 1.5rem 0 0 0;">
            <a href="/" class="logo">
                <img src="/public/assets/images/logos/logo-full.png" alt="Ark Housing Group" style="height: 48px;">
            </a>
            
            <button class="mobile-menu-btn" style="display: none; background: none; border: none; font-size: 1.5rem; cursor: pointer;">☰</button>
            
            <div class="header-actions" style="display: flex; align-items: center; gap: 2rem;">
                <a href="#" class="login-link" style="display: flex; align-items: center; gap: 0.5rem; color: #000; font-weight: 500;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Login/Register
                </a>
                <a href="#" class="btn btn-primary" style="padding: 0.75rem 1.5rem; border-radius: 30px;">Tenants Enquiry</a>
            </div>
        </div>
        
        <!-- Navigation Row -->
        <nav class="navbar-bottom" style="padding-top: 1.5rem; padding-bottom: 1.5rem; display: flex; justify-content: center;">
            <ul class="nav-links" style="display: flex; gap: 2rem; align-items: center; justify-content: center; width: 100%; color: #000;">
                <li><a href="#" class="active" style="background-color: #93c5fd; padding: 0.5rem 1.25rem; border-radius: 20px; color: #000;">Home</a></li>
                <li><a href="#">About</a></li>
                <li class="dropdown" style="position: relative; display: flex; align-items: center; gap: 0.25rem;">
                    <a href="#">Services</a> 
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    <ul class="dropdown-menu">
                        <li><a href="#">HMO</a></li>
                        <li><a href="#">Transitional</a></li>
                        <li><a href="#">Supported Living</a></li>
                        <li><a href="#">Guaranteed Rent</a></li>
                    </ul>
                </li>
                <li class="dropdown" style="position: relative; display: flex; align-items: center; gap: 0.25rem;">
                    <a href="#">Landlords</a> 
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    <ul class="dropdown-menu">
                        <li><a href="#">Landlord</a></li>
                        <li><a href="#">Landlord Enquiry Form</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </li>
                <li class="dropdown" style="position: relative; display: flex; align-items: center; gap: 0.25rem;">
                    <a href="#">Tenants</a> 
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    <ul class="dropdown-menu">
                        <li><a href="#">Tenant Inquiry Form</a></li>
                        <li><a href="#">Tenant Support</a></li>
                    </ul>
                </li>
                <li class="dropdown" style="position: relative; display: flex; align-items: center; gap: 0.25rem;">
                    <a href="#">For Partners</a> 
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    <ul class="dropdown-menu">
                        <li><a href="#" style="white-space: normal; line-height: 1.4;">RSL / Local Authority Partnerships</a></li>
                        <li><a href="#">Partner Enquiry Form</a></li>
                    </ul>
                </li>
                <li><a href="#">Compliance</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
