<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'Frequently Asked Questions';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> FAQs';
require_once __DIR__ . '/../includes/hero.php';
?>

<section style="padding: 8rem 0;">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 4rem;">
                <p class="section-subtitle">Help Center</p>
                <h2 class="section-title">Common Questions & Answers</h2>
            </div>
            
            <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                <div style="padding: 2rem; background: #fff; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">
                    <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 1rem; color: #17386B;">What is Guaranteed Rent?</h3>
                    <p style="color: var(--text-light); line-height: 1.7;">Guaranteed rent means you get paid every month, regardless of whether the property is occupied or if the tenant pays the rent. We take the risk so you don't have to.</p>
                </div>
                <div style="padding: 2rem; background: #fff; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">
                    <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 1rem; color: #17386B;">Who manages the maintenance?</h3>
                    <p style="color: var(--text-light); line-height: 1.7;">As part of our management services, we handle all routine maintenance and emergency repairs, ensuring your property stays in top condition.</p>
                </div>
                <!-- Add more FAQs as needed -->
            </div>
        </div>
    </div>
</section>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>
