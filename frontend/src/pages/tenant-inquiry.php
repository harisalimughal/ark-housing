<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'Tenant Inquiry';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> Tenant Inquiry';
$hero_image = '/public/assets/images/properties/uk-houses/uk-8.jpg';
require_once __DIR__ . '/../includes/hero.php';
?><!-- Header Section -->
<section style="padding: 60px 0 20px 0; background-color: #ffffff;">
    <div class="container" style="text-align: center;">
        <h2 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 48px; color: #1a1a2e; margin-bottom: 12px;">Tenants Enquiry</h2>
        <p style="font-family: 'Poppins', sans-serif; color: #64748b; font-size: 16px;">Partner with ARK Housing for guaranteed rent and hassle-free management.</p>
    </div>
</section>

<style>
    @media (max-width: 1024px) {
        #inquiry-form-container {
            flex-direction: column !important;
            height: auto !important;
            min-height: auto !important;
        }
        #inquiry-form-container > div:first-child {
            width: 100% !important;
            padding: 40px 20px !important;
        }
        #inquiry-form-container > div:first-child h3 {
            margin-bottom: 20px !important;
        }
        #inquiry-form-container > div:first-child > div > div {
            display: none !important; /* Hide steps on mobile */
        }
        #inquiry-form-container > div:first-child > div > div.active-step-mobile {
            display: flex !important; /* Keep active step visible */
        }
        #form-content-area {
            padding: 40px 20px !important;
        }
        .form-grid-2 {
            grid-template-columns: 1fr !important;
        }
        .support-needs-grid {
            grid-template-columns: 1fr !important;
        }
        .support-needs-grid label {
            padding: 14px 18px !important;
        }
    }
</style>

<!-- Multi-step Form Section -->
<section style="padding: 40px 0 100px 0; background-color: #ffffff;">
    <div class="container">
        <div id="inquiry-form-container" style="max-width: 1200px; margin: 0 auto; background: #f8fafc; border-radius: 50px; display: flex; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.05); min-height: 800px;">
            
            <!-- Left Sidebar: Progress -->
            <div style="width: 360px; background-color: #1a3a63; padding: 60px 25px; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 24px; color: #ffffff; margin-bottom: 50px;">Application Progress</h3>
                    
                    <div style="display: flex; flex-direction: column; gap: 25px;">
                        <!-- Step 1: Active -->
                        <div class="step-1" style="display: flex; align-items: center; gap: 15px;">
                            <div class="circle" style="width: 32px; height: 32px; border-radius: 50%; border: 2px solid #ffffff; display: flex; align-items: center; justify-content: center; color: #ffffff; font-family: 'Poppins', sans-serif; font-weight: 600; background-color: rgba(255,255,255,0.1); font-size: 14px;">1</div>
                            <span style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; color: #ffffff;">Personal Details</span>
                        </div>
                        <!-- ... other steps ... -->
                        <div class="step-2" style="display: flex; align-items: center; gap: 15px; opacity: 0.4;"><div class="circle" style="width: 32px; height: 32px; border-radius: 50%; border: 2px solid #ffffff; display: flex; align-items: center; justify-content: center; color: #ffffff; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">2</div><span style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #ffffff;">HouseHold</span></div>
                        <div class="step-3" style="display: flex; align-items: center; gap: 15px; opacity: 0.4;"><div class="circle" style="width: 32px; height: 32px; border-radius: 50%; border: 2px solid #ffffff; display: flex; align-items: center; justify-content: center; color: #ffffff; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">3</div><span style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #ffffff;">Benefits</span></div>
                        <div class="step-4" style="display: flex; align-items: center; gap: 15px; opacity: 0.4;"><div class="circle" style="width: 32px; height: 32px; border-radius: 50%; border: 2px solid #ffffff; display: flex; align-items: center; justify-content: center; color: #ffffff; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">4</div><span style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #ffffff;">Support Worker</span></div>
                        <div class="step-5" style="display: flex; align-items: center; gap: 15px; opacity: 0.4;"><div class="circle" style="width: 32px; height: 32px; border-radius: 50%; border: 2px solid #ffffff; display: flex; align-items: center; justify-content: center; color: #ffffff; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">5</div><span style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #ffffff;">Support Needs</span></div>
                        <div class="step-6" style="display: flex; align-items: center; gap: 15px; opacity: 0.4;"><div class="circle" style="width: 32px; height: 32px; border-radius: 50%; border: 2px solid #ffffff; display: flex; align-items: center; justify-content: center; color: #ffffff; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">6</div><span style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #ffffff;">Accomodation</span></div>
                        <div class="step-7" style="display: flex; align-items: center; gap: 15px; opacity: 0.4;"><div class="circle" style="width: 32px; height: 32px; border-radius: 50%; border: 2px solid #ffffff; display: flex; align-items: center; justify-content: center; color: #ffffff; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">7</div><span style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #ffffff;">Background</span></div>
                        <div class="step-8" style="display: flex; align-items: center; gap: 15px; opacity: 0.4;"><div class="circle" style="width: 32px; height: 32px; border-radius: 50%; border: 2px solid #ffffff; display: flex; align-items: center; justify-content: center; color: #ffffff; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">8</div><span style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #ffffff;">Notes</span></div>
                    </div>
                </div>

                <!-- Sidebar Footer: Phone Box (hidden on mobile) -->
                <div class="sidebar-phone-box" style="width: 310px; height: 120px; background: rgba(255,255,255,0.05); border-radius: 28px; display: flex; flex-direction: column; justify-content: center; padding: 0 25px; margin: 0 auto;">
                    <p style="font-family: 'Poppins', sans-serif; color: #ffffff; opacity: 0.7; font-size: 12px; margin-bottom: 3px;">Need help? Call our support line on</p>
                    <a href="tel:+442012345678" style="font-family: 'Poppins', sans-serif; color: #ffffff; font-weight: 600; font-size: 16px; text-decoration: none; display: block; transition: opacity 0.2s;" onmouseenter="this.style.opacity='0.8'" onmouseleave="this.style.opacity='1'">+44 (0) 20 1234 5678</a>
                </div>
            </div>

            <!-- Right Content Area: Form -->
            <div id="form-content-area" style="flex: 1; padding: 60px 80px; display: flex; flex-direction: column; position: relative;">
                <!-- Single Form Wrapper for all steps -->
                <form id="tenant-inquiry-form" onsubmit="event.preventDefault(); nextStep(9); return false;" style="display: flex; flex-direction: column; min-height: 600px;">
                    
                    <!-- Step 1: Personal Details -->
                    <div id="step-1" class="form-step">
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 24px; color: #1a1a2e; margin-bottom: 40px;">Section 1 - Personal Details</h3>
                        
                        <div style="display: flex; flex-direction: column; flex: 1;">
                            <div class="form-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 30px;">
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Full Name</label>
                                    <input type="text" name="full_name" placeholder="Name" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; transition: border-color 0.3s ease;">
                                </div>
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Date of Birth</label>
                                    <input type="date" name="dob" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; color: #64748b;">
                                </div>
                            </div>

                            <div class="form-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 30px;">
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Email</label>
                                    <input type="email" name="email" placeholder="@.com" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none;">
                                </div>
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Phone Number</label>
                                    <input type="tel" name="phone" placeholder="+44 345 34 654" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none;">
                                </div>
                            </div>

                            <div style="margin-bottom: 40px;">
                                <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Current Address</label>
                                <textarea name="address" placeholder="List the properties you are interested in letting" style="width: 100%; height: 120px; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; resize: none;"></textarea>
                            </div>

                            <div style="display: flex; justify-content: flex-end; align-items: center; gap: 20px; margin-top: auto;">
                                <button type="button" disabled style="padding: 14px 40px; background: none; border: 1px solid #e2e8f0; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #94a3b8; cursor: not-allowed; display: flex; align-items: center; gap: 8px;">
                                    <span>&lsaquo;</span> Back
                                </button>
                                <button type="button" onclick="nextStep(2)" style="padding: 14px 40px; background-color: #22c55e; border: none; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; color: #ffffff; cursor: pointer; display: flex; align-items: center; gap: 8px; transition: background-color 0.3s ease;">
                                    Next <span>&rsaquo;</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Household -->
                    <div id="step-2" class="form-step" style="display: none;">
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 24px; color: #1a1a2e; margin-bottom: 40px;">Section 2 — Household</h3>
                        
                        <div style="display: flex; flex-direction: column; flex: 1;">
                            <div class="form-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 30px;">
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Number of people moving in</label>
                                    <input type="text" name="people_count" placeholder="Name" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none;">
                                </div>
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Any Children?</label>
                                    <select name="any_children" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; color: #1a1a2e; appearance: none; background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpath%20d%3D%22M6%209l6%206%206-6%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 20px center; background-size: 16px;">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div style="margin-bottom: 30px;">
                                <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Number and ages of children (if applicable)</label>
                                <input type="text" name="children_details" placeholder="e.g 2 children ages 5 and 8" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none;">
                            </div>

                            <div class="form-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 40px;">
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Any pets?</label>
                                    <select name="any_pets" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; color: #1a1a2e; appearance: none; background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpath%20d%3D%22M6%209l6%206%206-6%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 20px center; background-size: 16px;">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Pet details</label>
                                    <input type="text" name="pet_details" placeholder="Type of pet" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none;">
                                </div>
                            </div>

                            <div style="display: flex; justify-content: flex-end; align-items: center; gap: 20px; margin-top: auto;">
                                <button type="button" onclick="nextStep(1)" style="padding: 14px 40px; background: none; border: 1px solid #e2e8f0; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                    <span>&lsaquo;</span> Back
                                </button>
                                <button type="button" onclick="nextStep(3)" style="padding: 14px 40px; background-color: #22c55e; border: none; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; color: #ffffff; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                    Next <span>&rsaquo;</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Benefits -->
                    <div id="step-3" class="form-step" style="display: none;">
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 24px; color: #1a1a2e; margin-bottom: 40px;">Section 3 — Benefits Information</h3>
                        
                        <div style="display: flex; flex-direction: column; flex: 1;">
                            <div class="form-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 30px;">
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Benefit Type</label>
                                    <select name="benefit_type" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; color: #1a1a2e; appearance: none; background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpath%20d%3D%22M6%209l6%206%206-6%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 20px center; background-size: 16px;">
                                        <option value="universal-credit">Universal Credit</option>
                                        <option value="housing-benefit">Housing Benefit</option>
                                    </select>
                                </div>
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Upload proof of benefits</label>
                                    <div style="position: relative;">
                                        <input type="file" name="benefit_proof" id="proof-upload" style="display: none;">
                                        <label for="proof-upload" style="display: inline-flex; align-items: center; gap: 10px; padding: 12px 25px; background-color: #72C3F04D; color: #1a3a63; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; cursor: pointer; border: none; transition: background 0.3s ease;">
                                            Choose file <img src="/public/assets/images/icons/link.svg" alt="Link" style="width: 14px; height: 14px; filter: brightness(0) saturate(100%) invert(17%) sepia(35%) div(404%) hue-rotate(180deg) brightness(95%) contrast(93%);" onerror="this.src='data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22currentColor%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpath%20d%3D%22M10%2013a5%205%200%200%200%207.54.54l3-3a5%205%200%200%200-7.07-7.07l-1.72%201.71%22%3E%3C%2Fpath%3E%3Cpath%20d%3D%22M14%2011a5%205%200%200%200-7.54-.54l-3%203a5%205%200%200%200%207.07%207.07l1.71-1.71%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E'">
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 30px;">
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Monthly housing element amount (£)</label>
                                    <select name="housing_element" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; color: #1a1a2e; appearance: none; background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpath%20d%3D%22M6%209l6%206%206-6%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 20px center; background-size: 16px;">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Payment frequency</label>
                                    <select name="payment_frequency" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; color: #1a1a2e; appearance: none; background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpath%20d%3D%22M6%209l6%206%206-6%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 20px center; background-size: 16px;">
                                        <option value="monthly">Monthly</option>
                                        <option value="weekly">Weekly</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 40px;">
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Payments made to</label>
                                    <select name="payments_to" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; color: #1a1a2e; appearance: none; background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpath%20d%3D%22M6%209l6%206%206-6%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 20px center; background-size: 16px;">
                                        <option value="me">Me Directly</option>
                                        <option value="landlord">Landlord</option>
                                    </select>
                                </div>
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Any deductions?</label>
                                    <input type="text" name="deductions" placeholder="." style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none;">
                                </div>
                            </div>

                            <div style="display: flex; justify-content: flex-end; align-items: center; gap: 20px; margin-top: auto;">
                                <button type="button" onclick="nextStep(2)" style="padding: 14px 40px; background: none; border: 1px solid #e2e8f0; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                    <span>&lsaquo;</span> Back
                                </button>
                                <button type="button" onclick="nextStep(4)" style="padding: 14px 40px; background-color: #22c55e; border: none; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; color: #ffffff; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                    Next <span>&rsaquo;</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 4: Support Worker -->
                    <div id="step-4" class="form-step" style="display: none;">
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 24px; color: #1a1a2e; margin-bottom: 40px;">Section 4 — Support Worker</h3>
                        
                        <div style="display: flex; flex-direction: column; flex: 1;">
                            <div style="margin-bottom: 40px;">
                                <p style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 16px; color: #1a1a2e; margin-bottom: 20px;">Do you have a support worker?</p>
                                <div style="display: flex; gap: 40px;">
                                    <label style="display: flex; align-items: center; gap: 12px; cursor: pointer;">
                                        <input type="radio" name="has_support" value="yes" style="appearance: none; width: 30px; height: 30px; border: 1.5px solid #cbd5e1; border-radius: 50%; cursor: pointer; position: relative; margin: 0; outline: none;" onchange="this.style.borderColor=this.checked?'#22c55e':'#cbd5e1'">
                                        <span style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #1a1a2e;">Yes</span>
                                    </label>
                                    <label style="display: flex; align-items: center; gap: 12px; cursor: pointer;">
                                        <input type="radio" name="has_support" value="no" style="appearance: none; width: 30px; height: 30px; border: 1.5px solid #cbd5e1; border-radius: 50%; cursor: pointer; position: relative; margin: 0; outline: none;" onchange="this.style.borderColor=this.checked?'#22c55e':'#cbd5e1'">
                                        <span style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #1a1a2e;">No</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 30px;">
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Support worker name</label>
                                    <input type="text" name="support_name" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none;">
                                </div>
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Organization</label>
                                    <input type="text" name="support_org" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none;">
                                </div>
                            </div>

                            <div class="form-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 40px;">
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Phone</label>
                                    <input type="tel" name="support_phone" placeholder="+44 345 34 654" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none;">
                                </div>
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Email</label>
                                    <input type="email" name="support_email" placeholder="@.com" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none;">
                                </div>
                            </div>

                            <div style="display: flex; justify-content: flex-end; align-items: center; gap: 20px; margin-top: auto;">
                                <button type="button" onclick="nextStep(3)" style="padding: 14px 40px; background: none; border: 1px solid #e2e8f0; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                    <span>&lsaquo;</span> Back
                                </button>
                                <button type="button" onclick="nextStep(5)" style="padding: 14px 40px; background-color: #22c55e; border: none; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; color: #ffffff; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                    Next <span>&rsaquo;</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 5: Support Needs -->
                    <div id="step-5" class="form-step" style="display: none;">
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 24px; color: #1a1a2e; margin-bottom: 12px;">Section 5 — Support Needs</h3>
                        <p style="font-family: 'Poppins', sans-serif; color: #64748b; font-size: 16px; margin-bottom: 40px;">Please select all that apply.</p>
                        
                        <div style="display: flex; flex-direction: column; flex: 1;">
                            <div class="support-needs-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 40px;">
                                <?php 
                                $needs = ['Mental Health', 'Learning Disabilities', 'Physical Disabilities', 'Sensory Impairment', 'Substance Misuse', 'Domestic Abuse', 'Homelessness'];
                                foreach($needs as $need): ?>
                                <label style="display: flex; align-items: center; gap: 15px; padding: 20px 25px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; cursor: pointer; transition: all 0.3s ease;">
                                    <input type="checkbox" name="support_needs[]" value="<?php echo $need; ?>" style="display: none;" onchange="const parent = this.parentElement; const circle = parent.querySelector('.check-circle'); if(this.checked) { parent.style.borderColor = '#22c55e'; circle.style.backgroundColor = '#22c55e'; circle.style.borderColor = '#22c55e'; circle.querySelector('svg').style.opacity = '1'; } else { parent.style.borderColor = '#e2e8f0'; circle.style.backgroundColor = 'transparent'; circle.style.borderColor = '#cbd5e1'; circle.querySelector('svg').style.opacity = '0.3'; }">
                                    <div class="check-circle" style="width: 28px; height: 28px; border-radius: 8px; border: 1.5px solid #cbd5e1; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" style="opacity: 0.3; transition: opacity 0.3s ease;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                    <span style="font-family: 'Poppins', sans-serif; font-size: 16px; color: #1a1a2e; font-weight: 500;"><?php echo $need; ?></span>
                                </label>
                                <?php endforeach; ?>
                            </div>

                            <div style="display: flex; justify-content: flex-end; align-items: center; gap: 20px; margin-top: auto;">
                                <button type="button" onclick="nextStep(4)" style="padding: 14px 40px; background: none; border: 1px solid #e2e8f0; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                    <span>&lsaquo;</span> Back
                                </button>
                                <button type="button" onclick="nextStep(6)" style="padding: 14px 40px; background-color: #22c55e; border: none; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; color: #ffffff; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                    Next <span>&rsaquo;</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 6: Accommodation Requirements -->
                    <div id="step-6" class="form-step" style="display: none;">
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 24px; color: #1a1a2e; margin-bottom: 40px;">Section 6 — Accommodation Requirements</h3>
                        
                        <div style="display: flex; flex-direction: column; flex: 1;">
                            <div class="form-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 30px;">
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Property type required</label>
                                    <select name="property_type" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; color: #1a1a2e; appearance: none; background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpath%20d%3D%22M6%209l6%206%206-6%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 20px center; background-size: 16px;">
                                        <option value="studio">Studio</option>
                                        <option value="1-bed">1 Bedroom</option>
                                        <option value="2-bed">2 Bedroom</option>
                                        <option value="hmo">HMO</option>
                                    </select>
                                </div>
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Preferred locations</label>
                                    <input type="text" name="preferred_locations" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none;">
                                </div>
                            </div>

                            <div class="form-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 40px;">
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Earliest move-in date</label>
                                    <input type="date" name="move_in_date" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; color: #64748b;">
                                </div>
                                <div>
                                    <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; margin-bottom: 10px;">Accessibility needs</label>
                                    <input type="text" name="accessibility_needs" placeholder="e.g. ground floor only" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none;">
                                </div>
                            </div>

                            <div style="display: flex; justify-content: flex-end; align-items: center; gap: 20px; margin-top: auto;">
                                <button type="button" onclick="nextStep(5)" style="padding: 14px 40px; background: none; border: 1px solid #e2e8f0; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                    <span>&lsaquo;</span> Back
                                </button>
                                <button type="button" onclick="nextStep(7)" style="padding: 14px 40px; background-color: #22c55e; border: none; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; color: #ffffff; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                    Next <span>&rsaquo;</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 7: Background -->
                    <div id="step-7" class="form-step" style="display: none;">
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 24px; color: #1a1a2e; margin-bottom: 40px;">Section 7 — Background</h3>
                        
                        <div style="display: flex; flex-direction: column; flex: 1;">
                            <div style="margin-bottom: 30px;">
                                <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 16px; color: #1a1a2e; margin-bottom: 12px;">Do you have any rent arrears?</label>
                                <select name="rent_arrears" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; color: #1a1a2e; appearance: none; background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpath%20d%3D%22M6%209l6%206%206-6%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 20px center; background-size: 16px;">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </div>

                            <div style="margin-bottom: 30px;">
                                <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 16px; color: #1a1a2e; margin-bottom: 12px;">Any previous evictions?</label>
                                <select name="prev_evictions" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; color: #1a1a2e; appearance: none; background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpath%20d%3D%22M6%209l6%206%206-6%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 20px center; background-size: 16px;">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </div>

                            <div style="margin-bottom: 30px;">
                                <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 16px; color: #1a1a2e; margin-bottom: 12px;">Any criminal convictions? (optional)</label>
                                <textarea name="criminal_convictions" placeholder="if yes please provide details" style="width: 100%; height: 140px; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; resize: none;"></textarea>
                            </div>

                            <div style="margin-bottom: 40px;">
                                <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 16px; color: #1a1a2e; margin-bottom: 12px;">Do you have a guarantor?</label>
                                <select name="has_guarantor" style="width: 100%; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; color: #1a1a2e; appearance: none; background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpath%20d%3D%22M6%209l6%206%206-6%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 20px center; background-size: 16px;">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </div>

                            <div style="display: flex; justify-content: flex-end; align-items: center; gap: 20px; margin-top: auto;">
                                <button type="button" onclick="nextStep(6)" style="padding: 14px 40px; background: none; border: 1px solid #e2e8f0; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                    <span>&lsaquo;</span> Back
                                </button>
                                <button type="button" onclick="nextStep(8)" style="padding: 14px 40px; background-color: #22c55e; border: none; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; color: #ffffff; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                    Next <span>&rsaquo;</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 8: Additional Notes -->
                    <div id="step-8" class="form-step" style="display: none;">
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 24px; color: #1a1a2e; margin-bottom: 40px;">Section 8 — Additional Notes</h3>
                        
                        <div style="display: flex; flex-direction: column; flex: 1;">
                            <div style="margin-bottom: 40px;">
                                <label style="display: block; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 16px; color: #1a1a2e; margin-bottom: 12px;">Any other information we should know?</label>
                                <textarea name="additional_notes" style="width: 100%; height: 280px; padding: 16px 20px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; font-family: 'Poppins', sans-serif; font-size: 14px; outline: none; resize: none;"></textarea>
                            </div>

                            <div style="display: flex; justify-content: flex-end; align-items: center; gap: 20px; margin-top: auto;">
                                <button type="button" onclick="nextStep(7)" style="padding: 14px 40px; background: none; border: 1px solid #e2e8f0; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 14px; color: #1a1a2e; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                                    <span>&lsaquo;</span> Back
                                </button>
                                <button type="submit" style="padding: 14px 28px; background-color: #22c55e; border: none; border-radius: 50px; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; color: #ffffff; cursor: pointer; transition: background-color 0.3s ease; display: inline-flex; align-items: center; gap: 8px;">
                                    Submit Enquiry <span style="font-size: 18px; line-height: 1;">›</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 9: Success State -->
                    <div id="step-9" class="form-step" style="display: none; text-align: center; padding: 60px 0;">
                        <div style="width: 100px; height: 100px; background-color: #22c55e; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px;">
                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 32px; color: #1a1a2e; margin-bottom: 15px;">Inquiry Submitted!</h3>
                        <p style="font-family: 'Poppins', sans-serif; color: #64748b; font-size: 18px; margin-bottom: 40px;">Thank you for your application. Our team will review your details and get back to you shortly.</p>
                    
                    </div>

                </form>
            </div>
      </div>

        </div>
    </div>
</section>

<!-- Support line box shown below the form on mobile only -->
<div class="mobile-support-box">
    <p>Need help? Call our support line on</p>
    <a href="tel:+442012345678">+44 (0) 20 1234 5678</a>
</div>

<style>
    .sidebar-phone-box { /* desktop: visible inside sidebar */ }

    .mobile-support-box {
        display: none;
    }

    @media (max-width: 1024px) {
        .sidebar-phone-box {
            display: none !important;
        }
        .mobile-support-box {
            display: block;
            margin: 24px 16px 40px;
            background: #1a3a63;
            border-radius: 20px;
            padding: 20px 28px;
            text-align: center;
        }
        .mobile-support-box p {
            font-family: 'Poppins', sans-serif;
            color: rgba(255,255,255,0.75);
            font-size: 13px;
            margin-bottom: 6px;
        }
        .mobile-support-box a {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            font-weight: 600;
            font-size: 18px;
            text-decoration: none;
        }
    }
</style>

<script>
/**
 * FOR BACKEND DEVELOPERS:
 * 
 * 1. Form Data Collection:
 *    The entire multi-step process is now wrapped in a single <form id="tenant-inquiry-form">.
 *    You can use `new FormData(document.getElementById('tenant-inquiry-form'))` to get all fields at once.
 * 
 * 2. AJAX Submission:
 *    Instead of the default `nextStep(9)` in the onsubmit handler, you should implement a Fetch request:
 *    
 *    const form = document.getElementById('tenant-inquiry-form');
 *    form.addEventListener('submit', async (e) => {
 *        e.preventDefault();
 *        const formData = new FormData(form);
 *        const response = await fetch('your-endpoint.php', {
 *            method: 'POST',
 *            body: formData
 *        });
 *        if(response.ok) nextStep(9); // Show the success tick
 *    });
 */

function nextStep(step) {
    // Hide all steps
    document.querySelectorAll('.form-step').forEach(el => el.style.display = 'none');
    
    // Show target step
    const target = document.getElementById('step-' + step);
    if (target) {
        target.style.display = 'block';
    }

    // Update sidebar circles
    const steps = [1, 2, 3, 4, 5, 6, 7, 8];
    steps.forEach(s => {
        const sidebarStep = document.querySelector('.step-' + s);
        if (sidebarStep) {
            const circle = sidebarStep.querySelector('.circle');
            if (s < step) {
                // Completed step
                sidebarStep.style.opacity = '1';
                circle.style.backgroundColor = '#48A7DD';
                circle.style.borderColor = '#48A7DD';
                circle.style.color = '#ffffff';
            } else if (s === step) {
                // Active step
                sidebarStep.style.opacity = '1';
                circle.style.backgroundColor = 'rgba(255,255,255,0.1)';
                circle.style.borderColor = '#ffffff';
                circle.style.color = '#ffffff';
            } else {
                // Future step
                sidebarStep.style.opacity = '0.4';
                circle.style.backgroundColor = 'transparent';
                circle.style.borderColor = '#ffffff';
                circle.style.color = '#ffffff';
            }
        }
    });

    // Scroll to top of form
    const formSection = document.getElementById('form-content-area');
    if (formSection) {
        const yOffset = -120; // Adjust this value to account for sticky header
        const y = formSection.getBoundingClientRect().top + window.pageYOffset + yOffset;
        window.scrollTo({top: y, behavior: 'smooth'});
    }
}
</script>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>



