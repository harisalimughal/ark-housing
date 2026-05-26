<?php
require_once __DIR__ . '/../includes/header.php';
?>

<!-- Load Inter Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<style>
    .hmo-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 80px 20px;
    }

    .hmo-top-section {
        display: flex;
        align-items: center;
        gap: 60px;
        margin-bottom: 80px;
    }

    .hmo-content {
        flex: 1;
    }

    .hmo-title {
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 32px;
        line-height: 1.2;
        letter-spacing: -0.5px;
        text-transform: capitalize;
        color: #000000;
        margin-bottom: 24px;
    }

    .hmo-intro-text {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 15.34px;
        line-height: 24.93px;
        color: #64748b;
        max-width: 500px;
    }

    .hmo-image-container {
        flex: 0 0 525.54px;
        height: 424.84px;
        position: relative;
    }

    .hmo-main-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 30px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .hmo-points-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 40px 30px;
    }

    .hmo-point {
        display: flex;
        gap: 16px;
        align-items: flex-start;
    }

    .hmo-point-icon {
        width: 48px;
        height: 48px;
        flex-shrink: 0;
        transform: rotate(90deg);
        transition: transform 0.3s ease;
    }

    .hmo-point:hover .hmo-point-icon {
        transform: rotate(0deg);
    }

    .hmo-point-content {
        flex: 1;
    }

    .hmo-point-heading {
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        font-size: 19.18px;
        line-height: 30.69px;
        text-transform: capitalize;
        color: #1a1a2e;
        margin-bottom: 8px;
    }

    .hmo-point-text {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 15.34px;
        line-height: 24.93px;
        color: #64748b;
    }

    @media (max-width: 992px) {
        .hmo-top-section {
            flex-direction: column;
            gap: 40px;
        }
        .hmo-points-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .hmo-points-grid {
            grid-template-columns: 1fr;
        }
        .hmo-title {
            font-size: 32px;
            line-height: 1.2;
        }
    }

    @media (max-width: 992px) {
        .sa-grid {
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 40px 24px !important;
        }
    }
    @media (max-width: 600px) {
        .sa-grid {
            grid-template-columns: 1fr !important;
            gap: 32px 0 !important;
        }
    }
</style>

<?php
$hero_title = 'HMO Management';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> HMO';
$hero_image = '/public/assets/images/properties/uk-houses/uk-5.jpg';
require_once __DIR__ . '/../includes/hero.php';
?>

<div class="hmo-container">
    <!-- Top Section -->
    <div class="hmo-top-section">
        <div class="hmo-content">
            <h1 class="hmo-title">HMO (House In Multiple Occupation)</h1>
            <p class="hmo-intro-text">
                At ARKl Housing, we specialise in providing high-quality HMO (House in Multiple Occupation) properties. Here's what you need to know about our HMO services:
            </p>
        </div>
        <div class="hmo-image-container">
            <img src="/public/assets/images/properties/uk-houses/uk-3.jpg" alt="HMO Property" class="hmo-main-image">
        </div>
    </div>

    <!-- Points Grid -->
    <div class="hmo-points-grid">
        <!-- Point 1 -->
        <div class="hmo-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="hmo-point-icon">
            <div class="hmo-point-content">
                <h3 class="hmo-point-heading">Diverse HMO Properties</h3>
                <p class="hmo-point-text">A range of well-maintained shared homes. Designed for comfort, convenience, and community.</p>
            </div>
        </div>

        <!-- Point 2 -->
        <div class="hmo-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="hmo-point-icon">
            <div class="hmo-point-content">
                <h3 class="hmo-point-heading">Compliance & Safety</h3>
                <p class="hmo-point-text">Fully licensed and regularly inspected. Fire, gas, and electrical safety assured.</p>
            </div>
        </div>

        <!-- Point 3 -->
        <div class="hmo-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="hmo-point-icon">
            <div class="hmo-point-content">
                <h3 class="hmo-point-heading">Transitional Housing</h3>
                <p class="hmo-point-text">Dedicated team handling maintenance and support. Hassle-free living for every resident.</p>
            </div>
        </div>

        <!-- Point 4 -->
        <div class="hmo-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="hmo-point-icon">
            <div class="hmo-point-content">
                <h3 class="hmo-point-heading">Supported Living</h3>
                <p class="hmo-point-text">Inclusive spaces that promote respect and connection. Comfortable, well-balanced shared living.</p>
            </div>
        </div>

        <!-- Point 5 -->
        <div class="hmo-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="hmo-point-icon">
            <div class="hmo-point-content">
                <h3 class="hmo-point-heading">Guaranteed Rent</h3>
                <p class="hmo-point-text">On the time rent payments with no delay or excuses from the tenants.</p>
            </div>
        </div>
    </div>
</div>

<!-- Supported Accommodation Section -->
<section style="background-color: #17386B; padding: 100px 0; color: #ffffff;">
    <div class="container">
        <!-- Section Header -->
        <div style="text-align: center; margin-bottom: 70px;">
            <h2 style="font-family: 'Inter', sans-serif; font-weight: 600; font-size: 46px; line-height: 56px; letter-spacing: -3%; text-transform: capitalize; color: #ffffff; margin-bottom: 24px;">Supported Accommodation</h2>
            <p style="font-family: 'Inter', sans-serif; font-weight: 400; font-size: 16px; line-height: 1.6; max-width: 800px; margin: 0 auto; opacity: 0.9;">
                ARK Housing also offers supported accommodation services designed to provide additional support to individuals with specific needs or vulnerabilities. Here's what you can expect from our supported accommodation:
            </p>
        </div>

        <!-- Points Grid -->
        <div class="sa-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 60px 40px; margin-bottom: 80px;">
            <!-- Point 1 -->
            <div style="display: flex; gap: 20px; align-items: flex-start;">
                <img src="/public/assets/images/icons/right-arrow.svg" alt="" style="width: 50px; height: 50px; flex-shrink: 0; filter: brightness(0) invert(1);">
                <div>
                    <h3 style="font-family: 'Inter', sans-serif; font-weight: 500; font-size: 19.18px; line-height: 30.69px; margin-bottom: 8px; color: #ffffff;">Tailored Support</h3>
                    <p style="font-family: 'Inter', sans-serif; font-weight: 400; font-size: 14px; line-height: 1.6; opacity: 0.8;">Personalised care for every resident's unique needs. Support for disabilities, mental health, or transitional housing.</p>
                </div>
            </div>

            <!-- Point 2 -->
            <div style="display: flex; gap: 20px; align-items: flex-start;">
                <img src="/public/assets/images/icons/right-arrow.svg" alt="" style="width: 50px; height: 50px; flex-shrink: 0; filter: brightness(0) invert(1);">
                <div>
                    <h3 style="font-family: 'Inter', sans-serif; font-weight: 500; font-size: 19.18px; line-height: 30.69px; margin-bottom: 8px; color: #ffffff;">Diverse Housing Options</h3>
                    <p style="font-family: 'Inter', sans-serif; font-weight: 400; font-size: 14px; line-height: 1.6; opacity: 0.8;">Houses, flats, and self-contained units. Flexible spaces designed for comfort and independence.</p>
                </div>
            </div>

            <!-- Point 3 -->
            <div style="display: flex; gap: 20px; align-items: flex-start;">
                <img src="/public/assets/images/icons/right-arrow.svg" alt="" style="width: 50px; height: 50px; flex-shrink: 0; filter: brightness(0) invert(1);">
                <div>
                    <h3 style="font-family: 'Inter', sans-serif; font-weight: 500; font-size: 19.18px; line-height: 30.69px; margin-bottom: 8px; color: #ffffff;">Comprehensive Services</h3>
                    <p style="font-family: 'Inter', sans-serif; font-weight: 400; font-size: 14px; line-height: 1.6; opacity: 0.8;">Access to counselling, life skills, and healthcare. Empowering residents toward stability and independence.</p>
                </div>
            </div>

            <!-- Point 4 -->
            <div style="display: flex; gap: 20px; align-items: flex-start;">
                <img src="/public/assets/images/icons/right-arrow.svg" alt="" style="width: 50px; height: 50px; flex-shrink: 0; filter: brightness(0) invert(1);">
                <div>
                    <h3 style="font-family: 'Inter', sans-serif; font-weight: 500; font-size: 19.18px; line-height: 30.69px; margin-bottom: 8px; color: #ffffff;">Regulatory Compliance</h3>
                    <p style="font-family: 'Inter', sans-serif; font-weight: 400; font-size: 14px; line-height: 1.6; opacity: 0.8;">Fully compliant with housing and care standards. Safety and quality at the heart of every property.</p>
                </div>
            </div>

            <!-- Point 5 -->
            <div style="display: flex; gap: 20px; align-items: flex-start;">
                <img src="/public/assets/images/icons/right-arrow.svg" alt="" style="width: 50px; height: 50px; flex-shrink: 0; filter: brightness(0) invert(1);">
                <div>
                    <h3 style="font-family: 'Inter', sans-serif; font-weight: 500; font-size: 19.18px; line-height: 30.69px; margin-bottom: 8px; color: #ffffff;">Community Partnerships</h3>
                    <p style="font-family: 'Inter', sans-serif; font-weight: 400; font-size: 14px; line-height: 1.6; opacity: 0.8;">Working with local authorities and organisations. Delivering meaningful support through collaboration.</p>
                </div>
            </div>

            <!-- Point 6 -->
            <div style="display: flex; gap: 20px; align-items: flex-start;">
                <img src="/public/assets/images/icons/right-arrow.svg" alt="" style="width: 50px; height: 50px; flex-shrink: 0; filter: brightness(0) invert(1);">
                <div>
                    <h3 style="font-family: 'Inter', sans-serif; font-weight: 500; font-size: 19.18px; line-height: 30.69px; margin-bottom: 8px; color: #ffffff;">Our Mission</h3>
                    <p style="font-family: 'Inter', sans-serif; font-weight: 400; font-size: 14px; line-height: 1.6; opacity: 0.8;">Helping individuals build brighter, independent futures. Creating safe, supportive environments for all.</p>
                </div>
            </div>
        </div>

        <!-- Footer Text -->
        <div style="text-align: center; max-width: 900px; margin: 0 auto;">
            <p style="font-family: 'Inter', sans-serif; font-weight: 600; font-size: 14px; line-height: 1.8; text-transform: capitalize;">
                At ARK Housing, we are dedicated to providing safe, comfortable, and supportive living environments for all our tenants, whether they are seeking an HMO property or supported accommodation. Your well-being and satisfaction are our top priorities.
            </p>
        </div>
    </div>
</section>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>




