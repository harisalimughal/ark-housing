<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'Landlord Enquiry';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> Landlord Enquiry';
require_once __DIR__ . '/../includes/hero.php';
?>

<section style="padding: 8rem 0;">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto; text-align: center;">
            <p class="section-subtitle">Contact Us</p>
            <h2 class="section-title">Ready to Partner with Us?</h2>
            <p style="color: var(--text-light); margin-top: 2rem; font-size: 1.1rem; line-height: 1.8;">
                Fill out the form below, and one of our dedicated property managers will get in touch to discuss how we can help you manage your properties and guarantee your rent.
            </p>
            <!-- Form Placeholder -->
            <div style="margin-top: 3rem; padding: 3rem; background: #f8fafc; border-radius: 20px; text-align: left; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <p style="text-align: center; color: #64748b;">[Detailed enquiry form will be implemented here]</p>
            </div>
        </div>
    </div>
</section>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>
