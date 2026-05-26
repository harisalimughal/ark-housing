<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'Partnerships';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> Partnerships';
$hero_image = '/public/assets/images/properties/uk-houses/uk-7.jpg';
require_once __DIR__ . '/../includes/hero.php';
?>

<style>
    .partnership-container {
        max-width: 1000px;
        margin: 80px auto 120px;
        padding: 0 20px;
    }

    .form-header-card {
        background-color: #1a3a63;
        border-radius: 40px 40px 0 0;
        padding: 40px 20px;
        text-align: center;
        color: #ffffff;
    }

    .form-header-card h2 {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 32px;
        margin-bottom: 10px;
    }

    .form-header-card p {
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        opacity: 0.9;
    }

    .progress-wrapper {
        background-color: #e2e8f0;
        height: 6px;
        width: 100%;
        position: relative;
    }

    .progress-bar {
        background-color: #48A7DD;
        height: 100%;
        width: 20%; /* Step 1 of 5 */
        transition: width 0.3s ease;
    }

    .step-indicator-bar {
        background-color: #ffffff;
        padding: 20px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #e2e8f0;
    }

    .step-indicator-bar span {
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 500;
        color: #1a1a2e;
    }

    .partnership-form-body {
        background-color: #f8fafc;
        border-radius: 0 0 40px 40px;
        padding: 60px 80px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.05);
    }

    .form-step-title {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 24px;
        color: #1a1a2e;
        margin-bottom: 40px;
    }

    .form-group {
        margin-bottom: 30px;
    }

    .form-group label {
        display: block;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 15px;
        color: #1a1a2e;
        margin-bottom: 12px;
    }

    .form-control {
        width: 100%;
        height: 70px;
        background: #ffffff;
        border: 1.5px solid #cbd5e1;
        border-radius: 12px;
        padding: 0 25px;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        color: #1a1a2e;
        transition: all 0.3s ease;
        outline: none;
    }

    .form-control:focus {
        border-color: #22c55e;
    }

    .nav-buttons {
        display: flex;
        justify-content: flex-end;
        gap: 20px;
        margin-top: 50px;
    }

    .btn-partnership {
        padding: 14px 40px;
        border-radius: 50px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .btn-back {
        background: transparent;
        border: 1.5px solid #cbd5e1;
        color: #64748b;
    }

    .btn-back:hover {
        background: #f1f5f9;
        color: #1a1a2e;
    }

    .btn-next {
        background: #22c55e;
        border: none;
        color: #ffffff;
    }

    .btn-next:hover {
        background: #1ba94f;
        transform: translateY(-2px);
    }
    
    @media (max-width: 768px) {
        .partnership-form-body {
            padding: 40px 20px;
        }
        .step-indicator-bar {
            padding: 15px 20px;
            flex-direction: column;
            gap: 5px;
            text-align: center;
        }
        .form-header-card h2 {
            font-size: 24px;
        }
        .nav-buttons {
            flex-direction: column-reverse;
            gap: 15px;
        }
        .btn-partnership {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<div style="text-align: center; margin-top: 80px; margin-bottom: 40px;">
    <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 42px; color: #1a1a2e; margin-bottom: 15px;">Partnership Enquiry</h1>
    <p style="font-family: 'Poppins', sans-serif; color: #64748b; font-size: 16px;">Partner with ARK Housing for guaranteed rent and hassle-free management.</p>
</div>

<section class="partnership-container">
    <!-- Form Header Card -->
    <div class="form-header-card">
        <h2>Partnership Enquiry</h2>
        <p>Join us in delivering quality housing solutions</p>
    </div>

    <!-- Progress Bar -->
    <div class="progress-wrapper">
        <div id="partnership-progress" class="progress-bar"></div>
    </div>

    <!-- Step Indicator Bar -->
    <div class="step-indicator-bar">
        <span id="step-text">Step 1 of 5</span>
        <span id="step-title">Organisation Details</span>
    </div>

    <!-- Form Content Area -->
    <div class="partnership-form-body">
        <form id="partnership-form" onsubmit="event.preventDefault();">
            
            <!-- Step 1: Organisation Details -->
            <div id="step-1" class="form-step">
                <h3 class="form-step-title">Organisation Details</h3>
                
                <div class="form-group">
                    <label>Organization Name</label>
                    <input type="text" class="form-control" placeholder="Enter organization name">
                </div>

                <div class="form-group" style="position: relative;">
                    <label>Organization Type</label>
                    <div class="custom-dropdown" id="org-type-dropdown">
                        <div class="dropdown-selected" onclick="toggleDropdown()">
                            <span id="selected-value">Local Authority</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </div>
                        <div class="dropdown-options" id="dropdown-options">
                            <div class="dropdown-option selected" onclick="selectOption('Local Authority', this)">Local Authority</div>
                            <div class="dropdown-option" onclick="selectOption('Charity / NGO', this)">Charity / NGO</div>
                            <div class="dropdown-option" onclick="selectOption('Care Provider', this)">Care Provider</div>
                            <div class="dropdown-option" onclick="selectOption('Other', this)">Other</div>
                        </div>
                    </div>
                    <input type="hidden" name="organization_type" id="organization_type_input" value="Local Authority">
                </div>

                <style>
                    .custom-dropdown {
                        position: relative;
                        width: 100%;
                    }

                    .dropdown-selected {
                        width: 100%;
                        height: 70px;
                        background: #ffffff;
                        border: 1.5px solid #cbd5e1;
                        border-radius: 12px;
                        padding: 0 25px;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        cursor: pointer;
                        font-family: 'Poppins', sans-serif;
                        font-size: 16px;
                        color: #1a1a2e;
                        transition: all 0.3s ease;
                    }

                    .dropdown-selected:hover {
                        border-color: #48A7DD;
                    }

                    .dropdown-options {
                        position: absolute;
                        top: calc(100% + 10px);
                        left: 0;
                        width: 100%;
                        background: #ffffff;
                        border-radius: 15px;
                        box-shadow: 0 10px 40px rgba(0,0,0,0.1);
                        padding: 10px;
                        display: none;
                        z-index: 100;
                        border: 1px solid #f1f5f9;
                    }

                    .dropdown-options.show {
                        display: block;
                        animation: fadeInDown 0.2s ease-out;
                    }

                    .dropdown-option {
                        padding: 15px 20px;
                        font-family: 'Poppins', sans-serif;
                        font-size: 16px;
                        color: #1a1a2e;
                        cursor: pointer;
                        border-radius: 10px;
                        transition: all 0.2s ease;
                        border-bottom: 1px solid #f1f5f9;
                    }

                    .dropdown-option:last-child {
                        border-bottom: none;
                    }

                    .dropdown-option:hover, .dropdown-option.selected {
                        background-color: #dcf0fa;
                        color: #1a1a2e;
                    }

                    @keyframes fadeInDown {
                        from { opacity: 0; transform: translateY(-10px); }
                        to { opacity: 1; transform: translateY(0); }
                    }
                </style>

                <script>
                    function toggleDropdown() {
                        const options = document.getElementById('dropdown-options');
                        options.classList.toggle('show');
                    }

                    function selectOption(val, element) {
                        // Update selected text
                        document.getElementById('selected-value').textContent = val;
                        // Update hidden input
                        document.getElementById('organization_type_input').value = val;
                        
                        // Update active state in UI
                        document.querySelectorAll('.dropdown-option').forEach(opt => opt.classList.remove('selected'));
                        element.classList.add('selected');
                        
                        // Close dropdown
                        document.getElementById('dropdown-options').classList.remove('show');
                    }

                    // Close dropdown when clicking outside
                    window.addEventListener('click', function(e) {
                        const dropdown = document.getElementById('org-type-dropdown');
                        if (!dropdown.contains(e.target)) {
                            document.getElementById('dropdown-options').classList.remove('show');
                        }
                    });
                </script>

                <div class="form-group">
                    <label>Website</label>
                    <input type="url" class="form-control" placeholder="https://example.com">
                </div>
            </div>

            <!-- Step 2: Key Contact -->
            <div id="step-2" class="form-step" style="display: none;">
                <h3 class="form-step-title">Key Contact</h3>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 30px;">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                </div>

                <div class="form-group">
                    <label>Job Title</label>
                    <input type="text" class="form-control" placeholder="Enter your job title">
                </div>
            </div>
            
            <!-- Step 3: Partnership Interests -->
            <div id="step-3" class="form-step" style="display: none;">
                <h3 class="form-step-title">Partnership Interests</h3>
                
                <div class="form-group">
                    <label>Form fields for Partnership Interests would go here...</label>
                    <textarea class="form-control" style="height: 300px; padding-top: 25px; resize: none;" placeholder="Enter Details..."></textarea>
                </div>
            </div>

            <!-- Step 4: Referral Requirements -->
            <div id="step-4" class="form-step" style="display: none;">
                <h3 class="form-step-title">Referral Requirements</h3>
                <div class="form-group">
                    <label>Form fields for Referral Requirements would go here...</label>
                    <textarea class="form-control" style="height: 300px; padding-top: 25px; resize: none;" placeholder="Enter Details..."></textarea>
                </div>
            </div>

            <!-- Step 5: Additional Information -->
            <div id="step-5" class="form-step" style="display: none;">
                <h3 class="form-step-title">Additional Information</h3>
                <div class="form-group">
                    <label>Any specific requirements or questions?</label>
                    <textarea class="form-control" style="height: 300px; padding-top: 25px; resize: none;" placeholder="Enter Details..."></textarea>
                </div>
            </div>

            <!-- Step 6: Success -->
            <div id="step-6" class="form-step" style="display: none; text-align: center;">
                <div style="width: 100px; height: 100px; background: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px;">
                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </div>
                <h3 class="form-step-title" style="margin-bottom: 15px;">Enquiry Submitted!</h3>
                <p style="font-family: 'Poppins', sans-serif; color: #64748b; font-size: 18px; margin-bottom: 40px;">Thank you for your interest in partnering with us. We will review your details and contact you soon.</p>
            </div>

            <!-- Navigation -->
            <div id="nav-buttons" class="nav-buttons">
                <button type="button" class="btn-partnership btn-back" onclick="changeStep(-1)" id="back-btn" style="display: none;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    Back
                </button>
                <button type="button" class="btn-partnership btn-next" onclick="changeStep(1)" id="next-btn">
                    Next
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </button>
            </div>
        </form>
    </div>
</section>

<script>
    let currentStep = 1;
    const totalSteps = 5;
    const stepTitles = [
        "Organisation Details",
        "Key Contact",
        "Partnership Interests",
        "Referral Requirements",
        "Additional Information"
    ];

    function changeStep(n) {
        if (n === 1 && currentStep === 5) {
            // Submit logic: Show Success (Step 6)
            document.getElementById('step-5').style.display = 'none';
            document.getElementById('step-6').style.display = 'block';
            document.getElementById('nav-buttons').style.display = 'none';
            document.getElementById('partnership-progress').style.width = '100%';
            document.getElementById('step-text').textContent = 'Success';
            document.getElementById('step-title').textContent = 'Enquiry Submitted';
            return;
        }

        if (currentStep + n < 1 || currentStep + n > totalSteps) return;

        // Hide current step
        document.getElementById('step-' + currentStep).style.display = 'none';
        
        // Update current step
        currentStep += n;

        // Show next step
        document.getElementById('step-' + currentStep).style.display = 'block';

        // Update UI
        updateUI();
    }

    function updateUI() {
        // Progress bar
        const progress = (currentStep / totalSteps) * 100;
        document.getElementById('partnership-progress').style.width = progress + '%';

        // Step indicators
        document.getElementById('step-text').textContent = 'Step ' + currentStep + ' of ' + totalSteps;
        document.getElementById('step-title').textContent = stepTitles[currentStep - 1];

        // Buttons
        const backBtn = document.getElementById('back-btn');
        const nextBtn = document.getElementById('next-btn');

        if (currentStep === 1) {
            backBtn.style.display = 'none';
        } else {
            backBtn.style.display = 'flex';
        }

        if (currentStep === totalSteps) {
            nextBtn.innerHTML = `Submit Partnership Enquiry`;
        } else {
            nextBtn.innerHTML = `Next <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>`;
        }

        // Scroll to top of form
        window.scrollTo({
            top: document.querySelector('.partnership-container').offsetTop - 100,
            behavior: 'smooth'
        });
    }
</script>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>




