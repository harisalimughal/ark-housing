<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'Contact Us';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> Contact Us';
require_once __DIR__ . '/../includes/hero.php';
?>

<section style="padding: 8rem 0;">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto; text-align: center;">
            <p class="section-subtitle">Get In Touch</p>
            <h2 class="section-title">We'd love to hear from you</h2>
            <p style="color: var(--text-light); margin-top: 2rem; font-size: 1.1rem; line-height: 1.8;">
                Have a question or want to learn more about our services? Contact us today, and our team will be happy to assist you.
            </p>
            
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-top: 4rem;">
                <div style="padding: 2rem; background: #fff; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                    <h3 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 0.5rem;">Address</h3>
                    <p style="color: var(--text-light);">123 Ark Street, London, UK</p>
                </div>
                <div style="padding: 2rem; background: #fff; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                    <h3 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 0.5rem;">Phone</h3>
                    <p style="color: var(--text-light);">0123 456 7890</p>
                </div>
                <div style="padding: 2rem; background: #fff; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                    <h3 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 0.5rem;">Email</h3>
                    <p style="color: var(--text-light);">info@arkhousing.co.uk</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>
