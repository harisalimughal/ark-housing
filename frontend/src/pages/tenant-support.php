<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'Tenant Support';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> Tenant Support';
require_once __DIR__ . '/../includes/hero.php';
?>

<!-- Your Tenancy Section -->
<section style="padding: 100px 0; background-color: #ffffff;">
    <div class="container" style="display: flex; align-items: center; gap: 80px;">
        <!-- Left: Image -->
        <div style="flex: 0 0 545px; height: 423px; border-radius: 30px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
            <img src="/public/assets/images/properties/hmo.png" alt="Your Tenancy at Ark Housing" style="width: 100%; height: 100%; object-fit: cover;">
        </div>

        <!-- Right: Content -->
        <div style="flex: 1;">
            <h2 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 39.8px; line-height: 47px; color: #1a1a2e; margin-bottom: 24px;">Your Tenancy</h2>
            <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 16px; line-height: 26px; color: #64748b; margin-bottom: 40px;">
                We're here to help you feel supported in your home. This section covers how to pay rent and service charges, report repairs, and contact us for support. It also includes guidance on using our customer portal, making a complaint, understanding grounds maintenance, and what to know if you're considering a lodger or subletting.
            </p>
            <a href="/tenants-enquiry" style="display: inline-flex; align-items: center; justify-content: center; width: 179px; height: 49px; background-color: #22c55e; color: white; border-radius: 50px; text-decoration: none; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; transition: background-color 0.3s ease;">
                Tenants Enquiry
            </a>
        </div>
    </div>
<!-- Service Boxes Section -->
<section style="padding: 100px 0; background-color: #ffffff;">
    <div class="container" style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">
        
        <!-- Box 1: Pay Rent -->
        <div style="width: 300px; height: 205px; background: #ffffff; border-radius: 30px; padding: 32px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0,0,0,0.08), 0 4px 6px rgba(0,0,0,0.02); transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;" onmouseenter="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.12)';" onmouseleave="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.08)';">
            <div>
                <div style="width: 45px; height: 45px; background-color: #3EA1D8; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 4px 10px rgba(62, 161, 216, 0.3);">
                    <img src="/public/assets/images/icons/payment.svg" alt="Payment" style="width: 24px; height: 24px;">
                </div>
                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 20px; color: #1a1a2e; margin: 0;">Pay your rent</h3>
            </div>
            <a href="/pay-rent" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #3EA1D8; text-decoration: none; display: flex; align-items: center; gap: 8px;">
                Learn more <span style="font-size: 18px;">&rarr;</span>
            </a>
        </div>

        <!-- Box 2: Report Repair -->
        <div style="width: 300px; height: 205px; background: #ffffff; border-radius: 30px; padding: 32px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0,0,0,0.08), 0 4px 6px rgba(0,0,0,0.02); transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;" onmouseenter="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.12)';" onmouseleave="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.08)';">
            <div>
                <div style="width: 45px; height: 45px; background-color: #3EA1D8; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 4px 10px rgba(62, 161, 216, 0.3);">
                    <img src="/public/assets/images/icons/repair.svg" alt="Repair" style="width: 24px; height: 24px;">
                </div>
                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 20px; color: #1a1a2e; margin: 0;">Report a repair</h3>
            </div>
            <a href="/report-repair" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #3EA1D8; text-decoration: none; display: flex; align-items: center; gap: 8px;">
                Learn more <span style="font-size: 18px;">&rarr;</span>
            </a>
        </div>

        <!-- Box 3: Contact Us -->
        <div style="width: 300px; height: 205px; background: #ffffff; border-radius: 30px; padding: 32px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0,0,0,0.08), 0 4px 6px rgba(0,0,0,0.02); transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;" onmouseenter="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.12)';" onmouseleave="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.08)';">
            <div>
                <div style="width: 45px; height: 45px; background-color: #3EA1D8; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 4px 10px rgba(62, 161, 216, 0.3);">
                    <img src="/public/assets/images/icons/contact.svg" alt="Contact" style="width: 24px; height: 24px;">
                </div>
                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 20px; color: #1a1a2e; margin: 0;">Contact Us</h3>
            </div>
            <a href="/contact" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #3EA1D8; text-decoration: none; display: flex; align-items: center; gap: 8px;">
                Learn more <span style="font-size: 18px;">&rarr;</span>
            </a>
        </div>

    </div>
</section>

<!-- Custom Tenants Support CTA -->
<section style="padding: 0 0 100px 0; background-color: #ffffff;">
    <div class="container" style="display: flex; justify-content: center;">
        <div style="width: 1120px; height: 260px; background-color: #1FAF38; border-radius: 40px; padding: 0 80px; display: flex; align-items: center; justify-content: space-between; gap: 40px; box-shadow: 0 20px 40px rgba(31, 175, 56, 0.15);">
            <div>
                <h2 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 48px; color: #ffffff; margin-bottom: 12px; line-height: 1.2;">Tenants Support</h2>
                <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 18px; color: #ffffff; margin: 0; opacity: 0.9;">
                    Be part of a trusted supported accommodation network changing lives every day.
                </p>
            </div>
            <a href="/contact" style="display: inline-flex; align-items: center; justify-content: center; padding: 18px 40px; background-color: #1a1a2e; color: #ffffff; border-radius: 50px; text-decoration: none; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 16px; transition: all 0.3s ease; white-space: nowrap;" onmouseenter="this.style.transform='scale(1.05)'; this.style.backgroundColor='#111122';" onmouseleave="this.style.transform='scale(1)'; this.style.backgroundColor='#1a1a2e';">
                Contact with support
            </a>
        </div>
    </div>
</section>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
