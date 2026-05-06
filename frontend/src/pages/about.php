<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'About Us';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> About';
require_once __DIR__ . '/../includes/hero.php';
?>

<?php 
require_once __DIR__ . '/../includes/who-are-we.php';
?>

<!-- Our Mission -->
<section style="background-color: var(--primary-green); color: white; height: 348px; padding: 110px 160px; text-align: center; display: flex; align-items: center; justify-content: center; box-sizing: border-box;">
    <div style="max-width: 1440px; width: 100%; margin: 0 auto;">
        <h2 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 3rem; margin-bottom: 0.5rem; color: #fff;">Our Mission</h2>
        <p style="font-family: 'Poppins', sans-serif; font-size: 1.25rem; line-height: 1.4; max-width: 1120px; margin: 0 auto; opacity: 1;">
            To deliver high-quality housing solutions that support stability, dignity and long-term outcomes for all our residents.
        </p>
    </div>
</section>

<!-- Our Values -->
<section style="padding: 6rem 0; background-color: #fff;">
    <div class="container" style="text-align: center;">
        <h2 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 2.5rem; margin-bottom: 4rem; color: #1a1a2e;">Our Values</h2>
        
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem; justify-items: center; max-width: 1200px; margin: 0 auto;">
            
            <!-- Value Card 1 -->
            <div style="width: 270px; height: 363px; background: #fff; border-radius: 30px; padding: 2.5rem 1.5rem; box-shadow: 0 15px 45px rgba(0,0,0,0.06); display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                <div style="width: 90px; height: 90px; background: #3EA1D8; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.75rem; box-shadow: 0 10px 20px rgba(62, 161, 216, 0.3);">
                    <img src="/public/assets/images/icons/safety.svg" alt="Safety" width="40" height="40">
                </div>
                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 1.2rem; color: #1a1a2e; margin-bottom: 1rem;">Compliance & Safety</h3>
                <p style="font-family: 'Poppins', sans-serif; font-size: 0.95rem; color: #64748b; line-height: 1.6;">We never compromise on the safety standards of our properties.</p>
            </div>

            <!-- Value Card 2 -->
            <div style="width: 270px; height: 363px; background: #fff; border-radius: 30px; padding: 2.5rem 1.5rem; box-shadow: 0 15px 45px rgba(0,0,0,0.06); display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                <div style="width: 90px; height: 90px; background: #3EA1D8; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.75rem; box-shadow: 0 10px 20px rgba(62, 161, 216, 0.3);">
                    <img src="/public/assets/images/icons/integrity.svg" alt="Integrity" width="36" height="36">
                </div>
                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 1.2rem; color: #1a1a2e; margin-bottom: 1rem;">Integrity & Transparency</h3>
                <p style="font-family: 'Poppins', sans-serif; font-size: 0.95rem; color: #64748b; line-height: 1.6;">Honest communication with tenants, landlords, and partners.</p>
            </div>

            <!-- Value Card 3 -->
            <div style="width: 270px; height: 363px; background: #fff; border-radius: 30px; padding: 2.5rem 1.5rem; box-shadow: 0 15px 45px rgba(0,0,0,0.06); display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                <div style="width: 90px; height: 90px; background: #3EA1D8; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.75rem; box-shadow: 0 10px 20px rgba(62, 161, 216, 0.3);">
                    <img src="/public/assets/images/icons/social.svg" alt="Social" width="40" height="40">
                </div>
                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 1.2rem; color: #1a1a2e; margin-bottom: 1rem;">Social Responsibility</h3>
                <p style="font-family: 'Poppins', sans-serif; font-size: 0.95rem; color: #64748b; line-height: 1.6;">Driven by the desire to make a positive social impact.</p>
            </div>

            <!-- Value Card 4 -->
            <div style="width: 270px; height: 363px; background: #fff; border-radius: 30px; padding: 2.5rem 1.5rem; box-shadow: 0 15px 45px rgba(0,0,0,0.06); display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                <div style="width: 90px; height: 90px; background: #3EA1D8; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.75rem; box-shadow: 0 10px 20px rgba(62, 161, 216, 0.3);">
                    <img src="/public/assets/images/icons/partnership.svg" alt="Partnership" width="40" height="40">
                </div>
                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 1.2rem; color: #1a1a2e; margin-bottom: 1rem;">Partnership-Led Growth</h3>
                <p style="font-family: 'Poppins', sans-serif; font-size: 0.95rem; color: #64748b; line-height: 1.6;">Collaborating with local authorities to meet housing needs.</p>
            </div>

        </div>
    </div>
</section>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>
