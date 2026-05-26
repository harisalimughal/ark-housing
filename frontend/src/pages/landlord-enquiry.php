<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'Landlord Enquiry';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> Landlord Enquiry';
$hero_image = '/public/assets/images/properties/uk-houses/uk-8.jpg';
require_once __DIR__ . '/../includes/hero.php';
?>
<style>
    @media (max-width: 768px) {
        .form-grid-2 {
            grid-template-columns: 1fr !important;
        }
        #landlord-enquiry-form > div {
            padding: 20px !important;
        }
        .container > div {
            padding: 30px 20px !important;
        }
    }
</style>
<!-- Enquiry Form Section -->
<section style="padding: 80px 0; background-color: #f8fafc;">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto; background: #ffffff; padding: 60px; border-radius: 30px; box-shadow: 0 10px 40px rgba(0,0,0,0.05);">
            <div style="text-align: center; margin-bottom: 50px;">
                <h2 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 36px; color: #1a1a2e; margin-bottom: 10px;">Landlord Enquiry</h2>
                <p style="font-family: 'Poppins', sans-serif; color: #64748b; font-size: 16px;">Partner with ARK Housing for guaranteed rent and hassle-free management.</p>
            </div>

            <form id="landlord-enquiry-form" action="/api/submit-enquiry.php" method="POST">
                <div class="form-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
                    <!-- First Name -->
                    <div>
                        <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 8px;">Full Name</label>
                        <input type="text" name="first_name" placeholder="Name" required style="width: 100%; padding: 16px 20px; background: #f1f5f9; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; outline: none; transition: border-color 0.3s ease;">
                    </div>
                    <!-- Last Name -->
                    <div>
                        <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 8px;">Last Name</label>
                        <input type="text" name="last_name" placeholder="Name" required style="width: 100%; padding: 16px 20px; background: #f1f5f9; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; outline: none; transition: border-color 0.3s ease;">
                    </div>
                </div>

                <div class="form-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
                    <!-- Email -->
                    <div>
                        <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 8px;">Email</label>
                        <input type="email" name="email" placeholder="@.com" required style="width: 100%; padding: 16px 20px; background: #f1f5f9; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; outline: none; transition: border-color 0.3s ease;">
                    </div>
                    <!-- Phone -->
                    <div>
                        <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 8px;">Phone Number</label>
                        <input type="tel" name="phone" placeholder="+44 345 34 654" required style="width: 100%; padding: 16px 20px; background: #f1f5f9; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; outline: none; transition: border-color 0.3s ease;">
                    </div>
                </div>

                <!-- Address -->
                <div style="margin-bottom: 24px;">
                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 8px;">Property Address(es)</label>
                    <textarea name="address" placeholder="List the properties you are interested in letting" required style="width: 100%; height: 120px; padding: 16px 20px; background: #f1f5f9; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; outline: none; resize: none; transition: border-color 0.3s ease;"></textarea>
                </div>

                <!-- Property Type -->
                <div style="margin-bottom: 40px;">
                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 8px;">Property Type</label>
                    <select name="property_type" required style="width: 100%; padding: 16px 20px; background: #f1f5f9; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; color: #1a1a2e; outline: none; appearance: none; cursor: pointer; transition: border-color 0.3s ease;">
                        <option value="single-let">Single Let</option>
                        <option value="hmo">HMO (House in Multiple Occupation)</option>
                        <option value="flats">Block of Flats</option>
                        <option value="portfolio">Portfolio (Mixed)</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <button type="submit" id="submit-btn" style="width: 100%; padding: 18px; background-color: #22c55e; color: white; border: none; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 18px; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 12px; transition: all 0.5s ease; overflow: hidden;">
                    <span id="btn-text" style="transition: opacity 0.3s ease;">Submit</span>
                    <span id="icon-morph-container" style="position: relative; width: 20px; height: 20px; display: flex; align-items: center; justify-content: center; transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);">
                        <svg id="arrow-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="position: absolute; transition: opacity 0.3s ease;">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                        <svg id="tick-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" style="position: absolute; opacity: 0; transition: opacity 0.3s ease;">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </span>
                </button>
            </form>
        </div>
    </div>
</section>

<script>
document.getElementById('landlord-enquiry-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const btn = document.getElementById('submit-btn');
    const text = document.getElementById('btn-text');
    const container = document.getElementById('icon-morph-container');
    const arrow = document.getElementById('arrow-icon');
    const tick = document.getElementById('tick-icon');
    
    // Start Animation
    btn.style.pointerEvents = 'none';
    
    // 1. Start the 360 spin of the whole icon container
    container.style.transform = 'rotate(360deg)';
    
    // 2. Midway through the spin (300ms), swap the icons and the text
    setTimeout(() => {
        arrow.style.opacity = '0';
        tick.style.opacity = '1';
        text.style.opacity = '0';
        
        setTimeout(() => {
            text.innerText = 'Submitted';
            text.style.opacity = '1';
        }, 150);
        
    }, 250);

    setTimeout(() => {
        window.showToast && window.showToast("Enquiry submitted! We'll be in touch soon.");
    }, 400);
});

// Add focus effect to inputs
const inputs = document.querySelectorAll('input, textarea, select');
inputs.forEach(input => {
    input.addEventListener('focus', () => {
        input.style.borderColor = '#22c55e';
        input.style.boxShadow = '0 0 0 4px rgba(34, 197, 94, 0.1)';
    });
    input.addEventListener('blur', () => {
        input.style.borderColor = '#e2e8f0';
        input.style.boxShadow = 'none';
    });
});
</script>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>



