<?php
require_once __DIR__ . '/../includes/header.php';
?>

<!-- Load Inter Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<style>
    .sl-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 80px 20px;
    }

    .sl-top-section {
        display: flex;
        align-items: center;
        gap: 60px;
        margin-bottom: 80px;
    }

    .sl-content {
        flex: 1;
    }

    .sl-title {
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 44.11px;
        line-height: 53.7px;
        letter-spacing: -3%;
        text-transform: capitalize;
        color: #000000;
        margin-bottom: 24px;
    }

    .sl-intro-text {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 15.34px;
        line-height: 24.93px;
        color: #64748b;
        max-width: 500px;
    }

    .sl-image-container {
        flex: 0 0 525.54px;
        height: 424.84px;
        position: relative;
    }

    .sl-main-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 30px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .sl-points-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 40px 30px;
    }

    .sl-point {
        display: flex;
        gap: 16px;
        align-items: flex-start;
    }

    .sl-point-icon {
        width: 48px;
        height: 48px;
        flex-shrink: 0;
        transform: rotate(90deg);
        transition: transform 0.3s ease;
    }

    .sl-point:hover .sl-point-icon {
        transform: rotate(0deg);
    }

    .sl-point-content {
        flex: 1;
    }

    .sl-point-heading {
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        font-size: 19.18px;
        line-height: 30.69px;
        text-transform: capitalize;
        color: #1a1a2e;
        margin-bottom: 8px;
    }

    @media (max-width: 992px) {
        .sl-top-section {
            flex-direction: column;
            gap: 40px;
        }
        .sl-points-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .sl-points-grid {
            grid-template-columns: 1fr;
        }
        .sl-title {
            font-size: 32px;
            line-height: 1.2;
        }
    }
</style>

<?php
$hero_title = 'Supported Living';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> Supported Living';
$hero_image = '/public/assets/images/properties/uk-houses/uk-15.jpg';
require_once __DIR__ . '/../includes/hero.php';
?>

<div class="sl-container">
    <!-- Top Section -->
    <div class="sl-top-section">
        <div class="sl-content">
            <h1 class="sl-title">Supported Living</h1>
            <div class="sl-intro-text">
                <p>
                    With experience in managing supported housing, Ark Housing ensures compliance with all relevant regulations while handling property management, maintenance, and coordination with support partners. We provide a reliable solution for both landlords and organisations seeking quality accommodation.
                </p>
            </div>
        </div>
        <div class="sl-image-container">
            <img src="/public/assets/images/properties/uk-houses/uk-7.jpg" alt="Supported Living Property" class="sl-main-image">
        </div>
    </div>

    <!-- Points Grid -->
    <div class="sl-points-grid">
        <!-- Point 1 -->
        <div class="sl-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="sl-point-icon">
            <div class="sl-point-content">
                <h3 class="sl-point-heading">High-Quality, Compliant Housing</h3>
            </div>
        </div>

        <!-- Point 2 -->
        <div class="sl-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="sl-point-icon">
            <div class="sl-point-content">
                <h3 class="sl-point-heading">Full Property Management</h3>
            </div>
        </div>

        <!-- Point 3 -->
        <div class="sl-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="sl-point-icon">
            <div class="sl-point-content">
                <h3 class="sl-point-heading">Safe And Secure Living Environments</h3>
            </div>
        </div>

        <!-- Point 4 -->
        <div class="sl-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="sl-point-icon">
            <div class="sl-point-content">
                <h3 class="sl-point-heading">Long-Term Leasing Options For Landlords</h3>
            </div>
        </div>

        <!-- Point 5 -->
        <div class="sl-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="sl-point-icon">
            <div class="sl-point-content">
                <h3 class="sl-point-heading">Ongoing Maintenance And Inspections</h3>
            </div>
        </div>

        <!-- Point 6 -->
        <div class="sl-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="sl-point-icon">
            <div class="sl-point-content">
                <h3 class="sl-point-heading">Reliable Rental Income For Landlords</h3>
            </div>
        </div>

        <!-- Point 7 -->
        <div class="sl-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="sl-point-icon">
            <div class="sl-point-content">
                <h3 class="sl-point-heading">Partnership With Support Providers</h3>
            </div>
        </div>
    </div>
</div>

<!-- What Is Supported Living Accommodation Section -->
<section style="background-color: #17386B; padding: 100px 0; height: 357px; display: flex; align-items: center; color: #ffffff;">
    <div class="container" style="text-align: center;">
        <h2 style="font-family: 'Inter', sans-serif; font-weight: 600; font-size: 46px; line-height: 56px; color:#ffffff; letter-spacing: -3%; text-transform: capitalize; margin-bottom: 24px;">What Is Supported Living Accommodation?</h2>
        <p style="font-family: 'Inter', sans-serif; font-weight: 400; font-size: 16px; line-height: 26px; max-width: 900px; margin: 0 auto; opacity: 0.9;">
            Supported living accommodation provides housing for individuals who may need assistance with daily living while maintaining independence. This can include people with disabilities, mental health needs, or other support requirements, with care provided separately from the housing.
        </p>
    </div>
</section>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>




