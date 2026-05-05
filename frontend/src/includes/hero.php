<?php
/**
 * Hero Component
 * Variables:
 * $hero_title - The main title of the hero section
 * $hero_subtitle - The breadcrumb or subtitle text
 */
$hero_title = $hero_title ?? 'Page Title';
$hero_subtitle = $hero_subtitle ?? 'Home > Page';
?>

<section class="page-hero-new" style="position: relative; width: 100%; height: 411px; display: flex; align-items: center; justify-content: center; overflow: hidden; background-color: #fff; opacity: 1;">
    <!-- Blurred Background Image -->
    <div class="hero-bg-blur" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('/public/assets/images/properties/hero-img.svg'); background-size: cover; background-position: center; filter: blur(25px); transform: scale(1.2); opacity: 0.6; z-index: 1;"></div>
    
    <!-- Dark Overlay to ensure white text is visible -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.5)); z-index: 2;"></div>

    <!-- Content -->
    <div class="container" style="position: relative; z-index: 10; text-align: center; color: #ffffff;">
        <h1 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 4rem; margin-bottom: 0.25rem; letter-spacing: -0.5px; color: #ffffff;"><?php echo $hero_title; ?></h1>
        <div class="breadcrumb" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 1.1rem; display: flex; align-items: center; justify-content: center; gap: 0.5rem; color: #ffffff;">
            <?php echo $hero_subtitle; ?>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <button class="hero-nav-btn prev" style="position: absolute; left: 60px; top: 50%; transform: translateY(-50%); background: none; border: none; color: rgba(255,255,255,0.8); cursor: pointer; z-index: 20; transition: all 0.3s; display: flex; align-items: center; justify-content: center;">
        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
    </button>
    <button class="hero-nav-btn next" style="position: absolute; right: 60px; top: 50%; transform: translateY(-50%); background: none; border: none; color: rgba(255,255,255,0.8); cursor: pointer; z-index: 20; transition: all 0.3s; display: flex; align-items: center; justify-content: center;">
        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
    </button>

    <style>
        .hero-nav-btn:hover {
            color: #ffffff !important;
            transform: translateY(-50%) scale(1.1);
        }
        .page-hero-new h1 {
            text-shadow: 0 4px 15px rgba(0,0,0,0.5);
        }
    </style>
</section>
