<?php
require_once __DIR__ . '/../includes/header.php';
?>

<!-- Load Inter Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<style>
    .trans-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 80px 20px;
    }

    .trans-top-section {
        display: flex;
        align-items: center;
        gap: 60px;
        margin-bottom: 80px;
    }

    .trans-content {
        flex: 1;
    }

    .trans-title {
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 44.11px;
        line-height: 53.7px;
        letter-spacing: -3%;
        text-transform: capitalize;
        color: #000000;
        margin-bottom: 24px;
    }

    .trans-intro-text {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 15.34px;
        line-height: 24.93px;
        color: #64748b;
        max-width: 500px;
    }

    .trans-intro-text p {
        margin-bottom: 20px;
    }

    .trans-image-container {
        flex: 0 0 525.54px;
        height: 424.84px;
        position: relative;
    }

    .trans-main-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 30px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .trans-points-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 40px 30px;
    }

    .trans-point {
        display: flex;
        gap: 16px;
        align-items: flex-start;
    }

    .trans-point-icon {
        width: 48px;
        height: 48px;
        flex-shrink: 0;
        transform: rotate(90deg);
        transition: transform 0.3s ease;
    }

    .trans-point:hover .trans-point-icon {
        transform: rotate(0deg);
    }

    .trans-point-content {
        flex: 1;
    }

    .trans-point-heading {
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        font-size: 19.18px;
        line-height: 30.69px;
        text-transform: capitalize;
        color: #1a1a2e;
        margin-bottom: 8px;
    }

    .trans-point-text {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 15.34px;
        line-height: 24.93px;
        color: #64748b;
    }

    @media (max-width: 992px) {
        .trans-top-section {
            flex-direction: column;
            gap: 40px;
        }
        .trans-points-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .trans-points-grid {
            grid-template-columns: 1fr;
        }
        .trans-title {
            font-size: 32px;
            line-height: 1.2;
        }
    }
</style>

<?php
$hero_title = 'Transitional Housing';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> Transitional Housing';
$hero_image = '/public/assets/images/properties/uk-houses/uk-7.jpg';
require_once __DIR__ . '/../includes/hero.php';
?>

<div class="trans-container">
    <!-- Top Section -->
    <div class="trans-top-section">
        <div class="trans-content">
            <h1 class="trans-title">Transitional Housing</h1>
            <div class="trans-intro-text">
                <p>
                    Our transitional housing service provides a safe and supportive environment for individuals moving towards independent living. Designed as a short-term solution, it helps residents regain stability while preparing for long-term housing.
                </p>
                <p>
                    We combine comfortable accommodation with light-touch support, giving residents the space to rebuild confidence, develop essential life skills, and take meaningful steps toward independence—without feeling overwhelmed.
                </p>
            </div>
        </div>
        <div class="trans-image-container">
            <img src="/public/assets/images/properties/uk-houses/uk-6.jpg" alt="Transitional Housing Property" class="trans-main-image">
        </div>
    </div>

    <!-- Points Grid -->
    <div class="trans-points-grid">
        <!-- Point 1 -->
        <div class="trans-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="trans-point-icon">
            <div class="trans-point-content">
                <h3 class="trans-point-heading">Safe & Secure Accommodation</h3>
                <p class="trans-point-text">Comfortable, Fully Managed Short-Term Housing</p>
            </div>
        </div>

        <!-- Point 2 -->
        <div class="trans-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="trans-point-icon">
            <div class="trans-point-content">
                <h3 class="trans-point-heading">Flexible Stay Options</h3>
                <p class="trans-point-text">Support That Adapts To Individual Timelines</p>
            </div>
        </div>

        <!-- Point 3 -->
        <div class="trans-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="trans-point-icon">
            <div class="trans-point-content">
                <h3 class="trans-point-heading">Light-Touch Support</h3>
                <p class="trans-point-text">Guidance Without Restricting Independence</p>
            </div>
        </div>

        <!-- Point 4 -->
        <div class="trans-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="trans-point-icon">
            <div class="trans-point-content">
                <h3 class="trans-point-heading">Tenancy Skills Development</h3>
                <p class="trans-point-text">Learn Budgeting, Responsibilities, And Routines</p>
            </div>
        </div>

        <!-- Point 5 -->
        <div class="trans-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="trans-point-icon">
            <div class="trans-point-content">
                <h3 class="trans-point-heading">Pathway To Independence</h3>
                <p class="trans-point-text">Structured Support Toward Permanent Housing</p>
            </div>
        </div>

        <!-- Point 6 -->
        <div class="trans-point">
            <img src="/public/assets/images/icons/right-arrow.svg" alt="" class="trans-point-icon">
            <div class="trans-point-content">
                <h3 class="trans-point-heading">Supportive Environment</h3>
                <p class="trans-point-text">Encouraging Confidence, Growth, And Stability</p>
            </div>
        </div>
    </div>
</div>

<!-- What Is Transitional Housing Section -->
<section style="background-color: #17386B; padding: 100px 0; height: 357px; display: flex; align-items: center; color: #ffffff;">
    <div class="container" style="text-align: center;">
        <h2 style="font-family: 'Inter', sans-serif; font-weight: 600; font-size: 46px; line-height: 56px;color:#ffffff; letter-spacing: -3%; text-transform: capitalize; margin-bottom: 24px;">What Is Transitional Housing?</h2>
        <p style="font-family: 'Inter', sans-serif; font-weight: 400; font-size: 16px; line-height: 26px; max-width: 900px; margin: 0 auto; opacity: 0.9;">
            Transitional housing is a short-term living solution designed to bridge the gap between supported accommodation and full independence. It offers residents a stable place to live while providing light guidance to help them build confidence, develop tenancy skills, and prepare for long-term housing.
        </p>
    </div>
</section>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>




