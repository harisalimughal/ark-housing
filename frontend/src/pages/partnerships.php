<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'Partnerships';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> Partnerships';
$hero_image = '/public/assets/images/properties/uk-houses/uk-2.jpg';
require_once __DIR__ . '/../includes/hero.php';
?>

<style>
    @media (max-width: 768px) {
        .partners-cta-box {
            padding: 32px 24px !important;
            border-radius: 24px !important;
        }
        .partners-cta-box h2 {
            font-size: 26px !important;
        }
        .partners-cta-box p {
            font-size: 14px !important;
        }
        .partners-cta-box a {
            width: 100% !important;
            padding: 14px 24px !important;
            font-size: 15px !important;
            justify-content: center;
        }
        .partners-top-section {
            gap: 36px !important;
            padding: 60px 0 !important;
        }
        .partners-top-section > div:first-child {
            max-width: 100% !important;
        }
        .partners-collab-section {
            padding: 60px 0 !important;
        }
        .partners-cta-section {
            padding: 60px 0 !important;
        }
    }
</style>

<!-- Our Partnerships Section -->
<section class="partners-top-section" style="padding: 100px 0; background-color: #ffffff;">
    <div class="container flex-col-1024" style="display: flex; align-items: center; gap: 80px;">
        <!-- Left: Image -->
        <div style="flex: none; width: 100%; max-width: 545px; height: auto; border-radius: 30px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
            <img src="/public/assets/images/properties/uk-houses/uk-12.jpg" alt="Ark Housing Partnerships" style="width: 100%; height: 100%; object-fit: cover;">
        </div>

        <!-- Right: Content -->
        <div style="flex: 1; width: 100%;">
            <h2 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 39.8px; line-height: 1.2; color: #1a1a2e; margin-bottom: 24px;">Our Partnerships</h2>
            <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 16px; line-height: 26px; color: #64748b; margin-bottom: 40px;">
                At ARK Housing, we believe in the power of collaboration. We partner with Registered Social Landlords (RSLs), Local Authorities, and Charities across the UK to provide high-quality housing and comprehensive support services. Our mission is to create sustainable housing solutions that empower individuals and strengthen communities.
            </p>
            <a href="/partner-enquiry" style="display: inline-flex; align-items: center; justify-content: center; padding: 12px 30px; background-color: #22c55e; color: white; border-radius: 50px; text-decoration: none; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; transition: background-color 0.3s ease;">
                Become a Partner
            </a>
        </div>
    </div>
</section>

<!-- Collaboration Boxes Section -->
<section class="partners-collab-section" style="padding: 100px 0; background-color: #f8fafc;">
    <div class="container" style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">
        
        <!-- Box 1: Local Authorities -->
        <div class="pop-card" style="width: 100%; max-width: 300px; height: auto; min-height: 205px; background: #ffffff; border-radius: 30px; padding: 32px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;" onmouseenter="this.style.transform='translateY(-5px)';" onmouseleave="this.style.transform='translateY(0)';" onclick="window.location.href='/partner-enquiry'">
            <div>
                <div style="width: 45px; height: 45px; background-color: #3EA1D8; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"></path><path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18z"></path><path d="M19 21v-10"></path><path d="M5 21v-10"></path><path d="M9 21v-4"></path><path d="M15 21v-4"></path></svg>
                </div>
                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 20px; color: #1a1a2e; margin: 0;">Local Authorities</h3>
            </div>
            <a href="/partner-enquiry" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #3EA1D8; text-decoration: none; display: flex; align-items: center; gap: 8px;">
                Learn more <span style="font-size: 18px;">&rarr;</span>
            </a>
        </div>

        <!-- Box 2: Charities & NGOs -->
        <div class="pop-card" style="width: 100%; max-width: 300px; height: auto; min-height: 205px; background: #ffffff; border-radius: 30px; padding: 32px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;" onmouseenter="this.style.transform='translateY(-5px)';" onmouseleave="this.style.transform='translateY(0)';" onclick="window.location.href='/partner-enquiry'">
            <div>
                <div style="width: 45px; height: 45px; background-color: #3EA1D8; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 20px; color: #1a1a2e; margin: 0;">Charities & NGOs</h3>
            </div>
            <a href="/partner-enquiry" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #3EA1D8; text-decoration: none; display: flex; align-items: center; gap: 8px;">
                Learn more <span style="font-size: 18px;">&rarr;</span>
            </a>
        </div>

        <!-- Box 3: Social Landlords -->
        <div class="pop-card" style="width: 100%; max-width: 300px; height: auto; min-height: 205px; background: #ffffff; border-radius: 30px; padding: 32px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;" onmouseenter="this.style.transform='translateY(-5px)';" onmouseleave="this.style.transform='translateY(0)';" onclick="window.location.href='/partner-enquiry'">
            <div>
                <div style="width: 45px; height: 45px; background-color: #3EA1D8; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                </div>
                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 20px; color: #1a1a2e; margin: 0;">Social Landlords</h3>
            </div>
            <a href="/partner-enquiry" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #3EA1D8; text-decoration: none; display: flex; align-items: center; gap: 8px;">
                Learn more <span style="font-size: 18px;">&rarr;</span>
            </a>
        </div>

    </div>
</section>

<!-- Partnership Enquiry CTA -->
<section class="partners-cta-section" style="padding: 100px 0; background-color: #ffffff;">
    <div class="container" style="display: flex; justify-content: center;">
        <div class="flex-col-1024 partners-cta-box" style="width: 100%; max-width: 1120px; height: auto; min-height: 260px; background-color: #1a3a63; border-radius: 40px; padding: 40px 80px; display: flex; align-items: center; justify-content: space-between; gap: 40px; box-shadow: 0 20px 40px rgba(26, 58, 99, 0.15);">
            <div>
                <h2 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 48px; color: #ffffff; margin-bottom: 12px; line-height: 1.2;">Partnership Enquiry</h2>
                <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 18px; color: #ffffff; margin: 0; opacity: 0.9;">
                    Partner with ARK Housing for guaranteed rent and hassle-free management.
                </p>
            </div>
            <a href="/partner-enquiry" style="display: inline-flex; align-items: center; justify-content: center; padding: 18px 40px; background-color: #22c55e; color: #ffffff; border-radius: 50px; text-decoration: none; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 16px; transition: all 0.3s ease; white-space: nowrap;" onmouseenter="this.style.transform='scale(1.05)';" onmouseleave="this.style.transform='scale(1)';">
                Get Started
            </a>
        </div>
    </div>
</section>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>



