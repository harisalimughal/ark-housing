<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'HMO Management';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> HMO';
require_once __DIR__ . '/../includes/hero.php';
?>

<section style="padding: 8rem 0;">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto; text-align: center;">
            <p class="section-subtitle">Services</p>
            <h2 class="section-title">Professional HMO Management</h2>
            <p style="color: var(--text-light); margin-top: 2rem; font-size: 1.1rem; line-height: 1.8;">
                We specialize in managing Houses in Multiple Occupation (HMOs), ensuring full compliance with local authority regulations and Article 4 directives.
                Our end-to-end management includes tenant sourcing, maintenance, and regular inspections.
            </p>
        </div>
    </div>
</section>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>
