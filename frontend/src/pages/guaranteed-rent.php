<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'Guaranteed Rent';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> Guaranteed Rent';
require_once __DIR__ . '/../includes/hero.php';
?>
<!-- Guaranteed Rent Service Section -->
<section style="width: 100%; max-width: 1440px; height: 488px; margin: 0 auto; padding: 110px 160px; background-color: #ffffff; display: flex; align-items: center; justify-content: center;">
    <div style="text-align: center; width: 100%;">
        <h2 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 56.84px; line-height: 67.12px; color: #000000; margin-bottom: 30px;">Our Guaranteed Rent Service</h2>
        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 22.85px; line-height: 37.13px; color: #64748b; max-width: 1120px; margin: 0 auto;">
            If you are a landlord looking for a fixed rental income, paid each month without all the stresses involved of letting out a property, then you have come to the right place! We are the UK’s number one provider of Guaranteed Rent (sometimes known as Rent to Rent) and the only national network that offers this service without the backing of an insurance policy. With Ark Housing you get a guaranteed monthly income on time every month even if the property is empty; we take on the risk.
        </p>
    </div>
</section>

<!-- How It Works Section -->
<section style="padding: 100px 0; background-color: #ffffff;">
    <div class="container" style="display: flex; align-items: center; gap: 80px;">
        <!-- Left: Content -->
        <div style="flex: 1;">
            <h2 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 39.8px; line-height: 47px; color: #1a1a2e; margin-bottom: 30px;">How does it work?</h2>
            
            <div style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 16px; line-height: 26px; color: #64748b; margin-bottom: 40px;">
                <p style="margin-bottom: 20px;">
                    Ark Housing becomes your tenant, guaranteeing you fixed rental income from the day your contract is signed. Your rent is paid on the same date every month – with no gaps, delays or void periods.
                </p>
                <p style="margin-bottom: 20px;">
                    We then sub-let your property and handle everything: tenant sourcing, full property management and any issues that arise. You deal only with Ark Housing as your professional long-term tenant.
                </p>
                <p>
                    Instead of charging set-up fees or commission, we pay slightly below market rent in exchange for guaranteed income and complete peace of mind. Many landlords earn more overall, as voids, arrears and legal costs are covered by us, not you.
                </p>
            </div>

            <a href="/tenants-enquiry" style="display: inline-flex; align-items: center; justify-content: center; width: 179px; height: 49px; background-color: #22c55e; color: white; border-radius: 50px; text-decoration: none; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; transition: background-color 0.3s ease;">
                Tenants Enquiry
            </a>
        </div>

        <!-- Right: Video -->
        <div id="video-container" style="flex: 0 0 545px; height: 423px; position: relative; border-radius: 30px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1); cursor: pointer; background-color: #000;">
            <!-- YouTube Thumbnail as Poster -->
            <img src="https://img.youtube.com/vi/te4XkG9G_M8/maxresdefault.jpg" alt="Video Thumbnail" style="width: 100%; height: 100%; object-fit: cover;">
            
            <!-- Custom Overlay Play Button -->
            <img id="play-button-overlay" src="/public/assets/images/icons/playButton.svg" alt="Play Video" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 64px; height: 64px; transition: all 0.3s ease;">
        </div>
    </div>
</section>

<script>
document.getElementById('video-container').addEventListener('click', function() {
    const videoId = 'te4XkG9G_M8';
    this.innerHTML = `<iframe width="100%" height="100%" src="https://www.youtube.com/embed/${videoId}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 30px; border: none;"></iframe>`;
});

// Subtle hover effect for the play button
const videoContainer = document.getElementById('video-container');
const playButton = document.getElementById('play-button-overlay');

videoContainer.addEventListener('mouseenter', () => {
    if (playButton) playButton.style.transform = 'translate(-50%, -50%) scale(1.1)';
});
videoContainer.addEventListener('mouseleave', () => {
    if (playButton) playButton.style.transform = 'translate(-50%, -50%) scale(1)';
});
</script>

<!-- What We Give You Section -->
<section style="padding: 100px 0; background-color: #ffffff; padding-top: 0;">
    <div class="container" style="display: flex; align-items: flex-start; gap: 80px;">
        <!-- Left: Content -->
        <div style="flex: 1;">
            <h2 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 39.8px; line-height: 47px; color: #1a1a2e; margin-bottom: 40px;">Northwood's Guaranteed Rent Service gives you:</h2>
            
            <ol style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 14px; line-height: 24px; color: #64748b; margin-bottom: 40px; padding-left: 20px;">
                <li style="margin-bottom: 12px;">A guaranteed rental income paid to you on time, every month.</li>
                <li style="margin-bottom: 12px;">You still get paid even if the sub-tenant pays us late or doesn't pay us at all.</li>
                <li style="margin-bottom: 12px;">You get paid on time even if the rent is not paid on time or even at all.</li>
                <li style="margin-bottom: 12px;">No set up fees, monthly commissions, or hidden extras.</li>
                <li style="margin-bottom: 12px;">No direct contact with the sub-tenant, everything is dealt with by Ark Housing. No queries, questions, or complaints for you to deal with.</li>
                <li style="margin-bottom: 12px;">A guaranteed contract start date – no void periods to worry about.</li>
                <li style="margin-bottom: 12px;">If ever needed, we will cover the court costs and the eviction process whilst still paying you.</li>
                <li style="margin-bottom: 12px;">We will carry out property inspections and maintenance management.</li>
                <li style="margin-bottom: 12px;">Internal condition guaranteed, subject to fair wear and tear, up to one and half months’ rent.</li>
            </ol>

            <a href="/tenants-enquiry" style="display: inline-flex; align-items: center; justify-content: center; width: 179px; height: 49px; background-color: #22c55e; color: white; border-radius: 50px; text-decoration: none; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; transition: background-color 0.3s ease;">
                Tenants Enquiry
            </a>
        </div>

        <!-- Right: Image -->
        <div style="flex: 0 0 545px; height: 423px; border-radius: 30px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
            <img src="/public/assets/images/properties/hmo.png" alt="Ark Housing Properties" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </div>
</section>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>
