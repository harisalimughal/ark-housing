<?php
$hero_title = $hero_title ?? 'Page Title';
$hero_image = $hero_image ?? '/public/assets/images/properties/uk-houses/uk-1.jpg';
?>

<section class="page-hero-new" style="position: relative; width: 100%; height: 400px; display: flex; align-items: center; justify-content: center; overflow: hidden; background-color: #17386B;">

    <!-- Background Photo -->
    <div style="position: absolute; inset: 0; background-image: url('<?php echo htmlspecialchars($hero_image); ?>'); background-size: cover; background-position: center center; filter: blur(4px); transform: scale(1.06); opacity: 0.85; z-index: 1;"></div>

    <!-- Gradient Overlay -->
    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(23,56,107,0.6) 0%, rgba(0,0,0,0.4) 100%); z-index: 2;"></div>

    <!-- Title -->
    <div class="container" style="position: relative; z-index: 10; text-align: center;">
        <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 3.5rem; margin: 0; letter-spacing: -0.5px; color: #ffffff; text-shadow: 0 4px 24px rgba(0,0,0,0.5);"><?php echo $hero_title; ?></h1>
    </div>

    <style>
        @media (max-width: 768px) {
            .page-hero-new { height: 280px !important; }
            .page-hero-new h1 { font-size: 2.2rem !important; }
        }
    </style>
</section>
