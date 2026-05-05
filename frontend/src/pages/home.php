<?php
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../data/properties.php';
require_once __DIR__ . '/../data/blogs.php';
?>

<style>
    .hero-section {
        position: relative;
        padding: 4rem 0 4rem 0;
        margin-bottom: 4rem;
        z-index: 1;
    }
    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(76, 201, 240, 0) 0%, rgba(67, 97, 238, 0.3) 100%);
        z-index: -1;
        border-bottom-left-radius: 800px;
        border-bottom-right-radius: 800px;
    }
</style>

<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <h3 class="section-subtitle">Real Estate</h3>
        <h1 class="hero-title">Create your pathways to independent</h1>
        <p style="color: var(--text-light); margin-bottom: 1.5rem; max-width: 800px; margin-left: auto; margin-right: auto; font-size: 1.1rem;">Providing supported accommodation, transitional housing and guaranteed rent services across the UK. We focus on dignity, stability, and high standards.</p>
        
        <div class="hero-carousel-container" style="position: relative; margin: 0 auto; z-index: 10;">
            <div class="hero-slides-wrapper">
                <img src="/public/assets/images/properties/home-center.svg" class="hero-slide active" alt="Slide 1">
                <img src="/public/assets/images/properties/home-center2.svg" class="hero-slide" alt="Slide 2">
                <img src="/public/assets/images/properties/home-center3.svg" class="hero-slide" alt="Slide 3">
                <img src="/public/assets/images/properties/home-center4.svg" class="hero-slide" alt="Slide 4">

                <!-- Progress Bars overlaid near bottom of image -->
                <div class="hero-progress-container" style="position: absolute; bottom: 28px; left: 50%; transform: translateX(-50%); z-index: 20; margin-top: 0;">
                    <div class="hero-progress-bar active"><div class="progress-fill"></div></div>
                    <div class="hero-progress-bar"><div class="progress-fill"></div></div>
                    <div class="hero-progress-bar"><div class="progress-fill"></div></div>
                    <div class="hero-progress-bar"><div class="progress-fill"></div></div>
                </div>
            </div>

            <!-- Carousel Buttons (straddling left/right edges of the image) -->
            <button id="hero-prev" style="position: absolute; top: 200px; left: -20px; transform: translateY(-50%); width: 40px; height: 40px; border-radius: 50%; background: rgba(255,255,255,0.95); border: none; box-shadow: 0 2px 12px rgba(0,0,0,0.15); display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 30; color: #64748b;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button id="hero-next" style="position: absolute; top: 200px; right: -0.5px; transform: translateY(-50%); width: 40px; height: 40px; border-radius: 50%; background: rgba(255,255,255,0.95); border: none; box-shadow: 0 2px 12px rgba(0,0,0,0.15); display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 30; color: #64748b;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
            </button>

            <!-- Left Badge (Happy Customers) -->
            <div class="badge" style="position: absolute; bottom: -2rem; left: -20px; transform: translateY(50%); box-shadow: 0 10px 30px rgba(0,0,0,0.05); background: white; padding: 1rem 1.5rem; border-radius: 50px; display: flex; align-items: center; gap: 1rem; z-index: 30;">
                <div style="display: flex; margin-right: 0.5rem;">
                    <img src="https://i.pravatar.cc/100?img=11" style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 6;">
                    <img src="https://i.pravatar.cc/100?img=12" style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 5;">
                    <img src="https://i.pravatar.cc/100?img=13" style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 4;">
                    <img src="https://i.pravatar.cc/100?img=14" style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 3;">
                    <img src="https://i.pravatar.cc/100?img=15" style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 2;">
                    <div style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 1; background: #333; color: white; display: flex; align-items: center; justify-content: center; font-size: 0.8rem;">+</div>
                </div>
                <div class="badge-text" style="text-align: left;">
                    72k+ Happy<br>
                    Customers
                </div>
            </div>

            <!-- Right Badge (Listings) -->
            <div class="badge" style="position: absolute; bottom: -2rem; right: -20px; transform: translateY(50%); box-shadow: 0 10px 30px rgba(0,0,0,0.05); background: white; padding: 1rem 1.5rem; border-radius: 50px; display: flex; align-items: center; gap: 1rem; z-index: 30;">
                <img src="/public/assets/images/properties/home-center.svg" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                <div class="badge-text" style="text-align: left;">
                    200+ New<br>
                    Listings Everyday!
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Green Stats Strip -->
<section style="background-color: var(--primary-green); color: white; padding: 1.75rem 0;">
    <div class="container" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; text-align: center; align-items: center;">

        <!-- Fully Compliant Housing -->
        <div style="display: flex; flex-direction: column; align-items: center; gap: 0.6rem;">
            <img src="/public/assets/images/icons/home.svg" alt="Home" width="34" height="34">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 16.79px; line-height: 1; letter-spacing: 0; margin: 0;">Fully Compliant Housing</p>
            <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 11.76px; line-height: 21.83px; letter-spacing: 0; margin: 0; opacity: 0.9;">Rigorous safety standards &amp; certifications.</p>
        </div>

        <!-- Local Authority Partners -->
        <div style="display: flex; flex-direction: column; align-items: center; gap: 0.6rem;">
            <img src="/public/assets/images/icons/authority.svg" alt="Authority" width="34" height="34">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 16.79px; line-height: 1; letter-spacing: 0; margin: 0;">Local Authority Partners</p>
            <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 11.76px; line-height: 21.83px; letter-spacing: 0; margin: 0; opacity: 0.9;">Trusted by councils across the UK.</p>
        </div>

        <!-- Managed & Supported -->
        <div style="display: flex; flex-direction: column; align-items: center; gap: 0.6rem;">
            <img src="/public/assets/images/icons/support.svg" alt="Support" width="34" height="34">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 16.79px; line-height: 1; letter-spacing: 0; margin: 0;">Managed &amp; Supported</p>
            <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 11.76px; line-height: 21.83px; letter-spacing: 0; margin: 0; opacity: 0.9;">Dedicated teams for tenant well-being.</p>
        </div>

        <!-- Secure & Safe Living -->
        <div style="display: flex; flex-direction: column; align-items: center; gap: 0.6rem;">
            <img src="/public/assets/images/icons/living.svg" alt="Living" width="28" height="29">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 16.79px; line-height: 1; letter-spacing: 0; margin: 0;">Secure &amp; Safe Living</p>
            <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 11.76px; line-height: 21.83px; letter-spacing: 0; margin: 0; opacity: 0.9;">Quality environments for all residents.</p>
        </div>

    </div>
</section>

<!-- Tailored Housing Services -->
<section style="padding: 8rem 0 4rem; position: relative; overflow: visible;">
    <!-- Globe orb near top-left, close to green strip above -->
    <div class="container" style="position: relative;">
        <svg style="position: absolute; left: -20px; top: -7rem;" width="140" height="140" viewBox="0 0 101 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle opacity="0.55" cx="50.0083" cy="50.0093" r="50" transform="rotate(-60 50.0083 50.0093)" fill="url(#globe_grad)"/>
            <defs>
                <linearGradient id="globe_grad" x1="50.0083" y1="0.00927734" x2="50.0083" y2="100.009" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#48A7DD"/>
                    <stop offset="1" stop-color="#48A7DD" stop-opacity="0"/>
                </linearGradient>
            </defs>
        </svg>

        <div class="text-center" style="margin-bottom: 3rem;">
            <p class="section-subtitle">Our Expertise</p>
            <h2  class="section-title">Tailored Housing Services</h2>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(4, 277px); gap: 1.5rem; justify-content: center;">

            <!-- HMO -->
            <div style="background: #17386B; width: 277px; height: 277px; border-radius: 30px; box-shadow: 4px 10px 30px 0px #00000026; padding: 2rem; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1.25rem; color: white;">
                <img src="/public/assets/images/icons/hmo.svg" alt="HMO" width="45" height="50">
                <h4 style="color: white; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.1rem; margin: 0; text-align: center;">HMO</h4>
            </div>

            <!-- Transitional Housing -->
            <div style="background: #17386B; width: 277px; height: 277px; border-radius: 30px; box-shadow: 4px 10px 30px 0px #00000026; padding: 2rem; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1.25rem; color: white;">
                <img src="/public/assets/images/icons/transitional-housing.svg" alt="Transitional Housing" width="50" height="50">
                <h4 style="color: white; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.1rem; margin: 0; text-align: center;">Transitional<br>Housing</h4>
            </div>

            <!-- Support Living -->
            <div style="background: #17386B; width: 277px; height: 277px; border-radius: 30px; box-shadow: 4px 10px 30px 0px #00000026; padding: 2rem; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1.25rem; color: white;">
                <img src="/public/assets/images/icons/support-living.svg" alt="Support Living" width="50" height="50">
                <h4 style="color: white; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.1rem; margin: 0; text-align: center;">Support<br>Living</h4>
            </div>

            <!-- Guaranteed Rent -->
            <div style="background: #17386B; width: 277px; height: 277px; border-radius: 30px; box-shadow: 4px 10px 30px 0px #00000026; padding: 2rem; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1.25rem; color: white;">
                <img src="/public/assets/images/icons/rent.svg" alt="Guaranteed Rent" width="50" height="50">
                <h4 style="color: white; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.1rem; margin: 0; text-align: center;">Guaranteed<br>Rent</h4>
            </div>

        </div>
    </div>
</section>

<!-- WHO ARE WE -->
<?php
require_once __DIR__ . '/../includes/who-are-we.php';
?>


<!-- Our Services -->
<section id="services-section" style="padding: 10rem 0; background-color: #fff;">
    <div class="container">
        <div class="text-center" style="margin-bottom: 5rem;">
            <p class="section-subtitle">WHO ARE WE</p>
            <h2 class="section-title">Our Services</h2>
            <p style="color: var(--text-light); max-width: 700px; margin: 1.5rem auto 0; font-size: 1.1rem;">Comprehensive housing solutions tailored to the needs of tenants, landlords, and local authorities.</p>
        </div>
        
        <style>
            .services-page {
                transition: opacity 0.5s ease;
            }
            .services-page.fade-out {
                opacity: 0;
            }
            .services-page.fade-in {
                opacity: 1;
            }
        </style>

        <!-- Page 1 -->
        <div class="services-page fade-in" data-page="1">
            <div style="display: grid; grid-template-columns: repeat(3, 357.38px); gap: 1.5rem; justify-content: center;">
                <!-- Supported Living -->
                <div style="background: #F2F2F2; width: 357.38px; height: 800px; border-radius: 24.7px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); display: flex; flex-direction: column;">
                    <img src="/public/assets/images/properties/service-p1.svg" alt="Supported Living" style="width: 357.38px; height: 279.97px; object-fit: cover; border-radius: 24.7px 24.7px 0 0;">
                    <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column; text-align: center; align-items: center;">
                        <div style="height: 140px; margin-bottom: 1.5rem; display: flex; flex-direction: column; justify-content: center;">
                            <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.4rem; margin-bottom: 0.75rem; color: #000;">Supported Living</h3>
                            <p style="color: var(--text-light); font-size: 0.8rem; line-height: 1.5; width: 310px; margin: 0 auto;">Our supported living service provides accommodation with tailored support for individuals with varying needs, ensuring a safe and stable living environment.</p>
                        </div>
                        
                        <div style="width: 100%;">
                            <h4 style="font-size: 0.95rem; font-weight: 600; margin-bottom: 1.25rem; color: #000;">What's Included</h4>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; text-align: left; width: 100%; margin-bottom: 2.5rem;">
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Tailored Care Plans
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Tailored Care Plans
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Community Integration
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Life Skills Development
                                </div>
                            </div>
                        </div>
                        
                        <div style="margin-top: auto;">
                            <div style="background: #fff; width: 335.97px; height: 63.4px; border-radius: 12.35px; border: 0.82px solid #e2e8f0; display: flex; flex-direction: column; justify-content: center; align-items: center; margin-bottom: 1.5rem; padding: 0 10px;">
                                <p style="font-weight: 600; font-size: 0.85rem; margin-bottom: 0.1rem; color: #000;">Perfect For</p>
                                <p style="font-size: 0.65rem; color: #000; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%; text-align: center;">Individuals with learning disabilities, mental health needs, or autism.</p>
                            </div>
                            
                            <a href="#" class="btn" style="background-color: var(--primary-green); color: white; border-radius: 30px; padding: 0.8rem 1.5rem; font-weight: 500; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; width: 200px; margin-bottom: 1rem;">Tenants Enquiry &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- Transitional Housing -->
                <div style="background: #F2F2F2; width: 357.38px; height: 800px; border-radius: 24.7px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); display: flex; flex-direction: column;">
                    <img src="/public/assets/images/properties/service-p2.svg" alt="Transitional Housing" style="width: 357.38px; height: 279.97px; object-fit: cover; border-radius: 24.7px 24.7px 0 0;">
                    <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column; text-align: center; align-items: center;">
                        <div style="height: 140px; margin-bottom: 1.5rem; display: flex; flex-direction: column; justify-content: center;">
                            <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.4rem; margin-bottom: 0.75rem; color: #000;">Transitional Housing</h3>
                            <p style="color: var(--text-light); font-size: 0.8rem; line-height: 1.5; width: 310px; margin: 0 auto;">A stepping stone towards independence. We provide short-term housing with light-touch support to help residents build confidence and tenancy skills.</p>
                        </div>
                        
                        <div style="width: 100%;">
                            <h4 style="font-size: 0.95rem; font-weight: 600; margin-bottom: 1.25rem; color: #000;">What's Included</h4>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; text-align: left; width: 100%; margin-bottom: 2.5rem;">
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Tenancy Training
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Budgeting Support
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Employment Assistance
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Move-on Support
                                </div>
                            </div>
                        </div>
                        
                        <div style="margin-top: auto;">
                            <div style="background: #fff; width: 335.97px; height: 63.4px; border-radius: 12.35px; border: 0.82px solid #e2e8f0; display: flex; flex-direction: column; justify-content: center; align-items: center; margin-bottom: 1.5rem; padding: 0 10px;">
                                <p style="font-weight: 600; font-size: 0.85rem; margin-bottom: 0.1rem; color: #000;">Perfect For</p>
                                <p style="font-size: 0.65rem; color: #000; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%; text-align: center;">Young care leavers, individuals at risk of homelessness.</p>
                            </div>
                            
                            <a href="#" class="btn" style="background-color: var(--primary-green); color: white; border-radius: 30px; padding: 0.8rem 1.5rem; font-weight: 500; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; width: 200px; margin-bottom: 1rem;">Tenants Enquiry &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- HMO Management -->
                <div style="background: #F2F2F2; width: 357.38px; height: 800px; border-radius: 24.7px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); display: flex; flex-direction: column;">
                    <img src="/public/assets/images/properties/service-p3.svg" alt="HMO Management" style="width: 357.38px; height: 279.97px; object-fit: cover; border-radius: 24.7px 24.7px 0 0;">
                    <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column; text-align: center; align-items: center;">
                        <div style="height: 140px; margin-bottom: 1.5rem; display: flex; flex-direction: column; justify-content: center;">
                            <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.4rem; margin-bottom: 0.75rem; color: #000;">HMO Management</h3>
                            <p style="color: var(--text-light); font-size: 0.8rem; line-height: 1.5; width: 310px; margin: 0 auto;">We take the stress out of HMO management. From licensing to tenant sourcing and maintenance, we ensure full compliance and occupancy.</p>
                        </div>
                        
                        <div style="width: 100%;">
                            <h4 style="font-size: 0.95rem; font-weight: 600; margin-bottom: 1.25rem; color: #000;">What's Included</h4>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; text-align: left; width: 100%; margin-bottom: 2.5rem;">
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Article 4 Compliance
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Regular Inspections
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Full Maintenance
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Tenant Sourcing
                                </div>
                            </div>
                        </div>
                        
                        <div style="margin-top: auto;">
                            <div style="background: #fff; width: 335.97px; height: 63.4px; border-radius: 12.35px; border: 0.82px solid #e2e8f0; display: flex; flex-direction: column; justify-content: center; align-items: center; margin-bottom: 1.5rem; padding: 0 10px;">
                                <p style="font-weight: 600; font-size: 0.85rem; margin-bottom: 0.1rem; color: #000;">Perfect For</p>
                                <p style="font-size: 0.65rem; color: #000; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%; text-align: center;">landlords with multi-let properties.</p>
                            </div>
                            
                            <a href="#" class="btn" style="background-color: var(--primary-green); color: white; border-radius: 30px; padding: 0.8rem 1.5rem; font-weight: 500; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; width: 200px; margin-bottom: 1rem;">Tenants Enquiry &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page 2 (Exact same) -->
        <div class="services-page fade-out" data-page="2" style="display: none;">
            <div style="display: grid; grid-template-columns: repeat(3, 357.38px); gap: 1.5rem; justify-content: center;">
                <!-- Supported Living -->
                <div style="background: #F2F2F2; width: 357.38px; height: 800px; border-radius: 24.7px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); display: flex; flex-direction: column;">
                    <img src="/public/assets/images/properties/service-p1.svg" alt="Supported Living" style="width: 357.38px; height: 279.97px; object-fit: cover; border-radius: 24.7px 24.7px 0 0;">
                    <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column; text-align: center; align-items: center;">
                        <div style="height: 140px; margin-bottom: 1.5rem; display: flex; flex-direction: column; justify-content: center;">
                            <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.4rem; margin-bottom: 0.75rem; color: #000;">Supported Living</h3>
                            <p style="color: var(--text-light); font-size: 0.8rem; line-height: 1.5; width: 310px; margin: 0 auto;">Our supported living service provides accommodation with tailored support for individuals with varying needs, ensuring a safe and stable living environment.</p>
                        </div>
                        <div style="width: 100%;">
                            <h4 style="font-size: 0.95rem; font-weight: 600; margin-bottom: 1.25rem; color: #000;">What's Included</h4>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; text-align: left; width: 100%; margin-bottom: 2.5rem;">
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Tailored Care Plans
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Tailored Care Plans
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Community Integration
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Life Skills Development
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: auto;">
                            <div style="background: #fff; width: 335.97px; height: 63.4px; border-radius: 12.35px; border: 0.82px solid #e2e8f0; display: flex; flex-direction: column; justify-content: center; align-items: center; margin-bottom: 1.5rem; padding: 0 10px;">
                                <p style="font-weight: 600; font-size: 0.85rem; margin-bottom: 0.1rem; color: #000;">Perfect For</p>
                                <p style="font-size: 0.65rem; color: #000; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%; text-align: center;">Individuals with learning disabilities, mental health needs, or autism.</p>
                            </div>
                            <a href="#" class="btn" style="background-color: var(--primary-green); color: white; border-radius: 30px; padding: 0.8rem 1.5rem; font-weight: 500; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; width: 200px; margin-bottom: 1rem;">Tenants Enquiry &rarr;</a>
                        </div>
                    </div>
                </div>
                <!-- Transitional Housing -->
                <div style="background: #F2F2F2; width: 357.38px; height: 800px; border-radius: 24.7px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); display: flex; flex-direction: column;">
                    <img src="/public/assets/images/properties/service-p2.svg" alt="Transitional Housing" style="width: 357.38px; height: 279.97px; object-fit: cover; border-radius: 24.7px 24.7px 0 0;">
                    <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column; text-align: center; align-items: center;">
                        <div style="height: 140px; margin-bottom: 1.5rem; display: flex; flex-direction: column; justify-content: center;">
                            <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.4rem; margin-bottom: 0.75rem; color: #000;">Transitional Housing</h3>
                            <p style="color: var(--text-light); font-size: 0.8rem; line-height: 1.5; width: 310px; margin: 0 auto;">A stepping stone towards independence. We provide short-term housing with light-touch support to help residents build confidence and tenancy skills.</p>
                        </div>
                        <div style="width: 100%;">
                            <h4 style="font-size: 0.95rem; font-weight: 600; margin-bottom: 1.25rem; color: #000;">What's Included</h4>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; text-align: left; width: 100%; margin-bottom: 2.5rem;">
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Tenancy Training
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Budgeting Support
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Employment Assistance
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Move-on Support
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: auto;">
                            <div style="background: #fff; width: 335.97px; height: 63.4px; border-radius: 12.35px; border: 0.82px solid #e2e8f0; display: flex; flex-direction: column; justify-content: center; align-items: center; margin-bottom: 1.5rem; padding: 0 10px;">
                                <p style="font-weight: 600; font-size: 0.85rem; margin-bottom: 0.1rem; color: #000;">Perfect For</p>
                                <p style="font-size: 0.65rem; color: #000; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%; text-align: center;">Young care leavers, individuals at risk of homelessness.</p>
                            </div>
                            <a href="#" class="btn" style="background-color: var(--primary-green); color: white; border-radius: 30px; padding: 0.8rem 1.5rem; font-weight: 500; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; width: 200px; margin-bottom: 1rem;">Tenants Enquiry &rarr;</a>
                        </div>
                    </div>
                </div>
                <!-- HMO Management -->
                <div style="background: #F2F2F2; width: 357.38px; height: 800px; border-radius: 24.7px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); display: flex; flex-direction: column;">
                    <img src="/public/assets/images/properties/service-p3.svg" alt="HMO Management" style="width: 357.38px; height: 279.97px; object-fit: cover; border-radius: 24.7px 24.7px 0 0;">
                    <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column; text-align: center; align-items: center;">
                        <div style="height: 140px; margin-bottom: 1.5rem; display: flex; flex-direction: column; justify-content: center;">
                            <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.4rem; margin-bottom: 0.75rem; color: #000;">HMO Management</h3>
                            <p style="color: var(--text-light); font-size: 0.8rem; line-height: 1.5; width: 310px; margin: 0 auto;">We take the stress out of HMO management. From licensing to tenant sourcing and maintenance, we ensure full compliance and occupancy.</p>
                        </div>
                        <div style="width: 100%;">
                            <h4 style="font-size: 0.95rem; font-weight: 600; margin-bottom: 1.25rem; color: #000;">What's Included</h4>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; text-align: left; width: 100%; margin-bottom: 2.5rem;">
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Article 4 Compliance
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Regular Inspections
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Full Maintenance
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;">
                                    <img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Tenant Sourcing
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: auto;">
                            <div style="background: #fff; width: 335.97px; height: 63.4px; border-radius: 12.35px; border: 0.82px solid #e2e8f0; display: flex; flex-direction: column; justify-content: center; align-items: center; margin-bottom: 1.5rem; padding: 0 10px;">
                                <p style="font-weight: 600; font-size: 0.85rem; margin-bottom: 0.1rem; color: #000;">Perfect For</p>
                                <p style="font-size: 0.65rem; color: #000; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%; text-align: center;">landlords with multi-let properties.</p>
                            </div>
                            <a href="#" class="btn" style="background-color: var(--primary-green); color: white; border-radius: 30px; padding: 0.8rem 1.5rem; font-weight: 500; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; width: 200px; margin-bottom: 1rem;">Tenants Enquiry &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination & View All -->
        <div style="margin-top: 4rem; display: flex; justify-content: center; align-items: center; position: relative;">
            <div id="services-pagination" style="display: flex; gap: 0.5rem;">
                <span class="page-btn active" data-page="1" style="width: 32px; height: 32px; background-color: #38bdf8; color: white; display: flex; align-items: center; justify-content: center; border-radius: 4px; font-weight: 600; font-size: 0.9rem; cursor: pointer;">1</span>
                <span class="page-btn" data-page="2" style="width: 32px; height: 32px; background-color: #cbd5e1; color: white; display: flex; align-items: center; justify-content: center; border-radius: 4px; font-weight: 600; font-size: 0.9rem; cursor: pointer;">2</span>
            </div>
            <a href="#" style="position: absolute; right: 0; color: #1e293b; font-weight: 600; font-size: 0.9rem; text-decoration: none; text-transform: uppercase; letter-spacing: 0.5px;">VIEW ALL</a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const pageBtns = document.querySelectorAll('.page-btn');
    const pages = document.querySelectorAll('.services-page');

    pageBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetPage = this.getAttribute('data-page');
            const currentPage = document.querySelector('.services-page.fade-in');
            const nextPage = document.querySelector(`.services-page[data-page="${targetPage}"]`);

            if (currentPage === nextPage) return;

            // Transition logic
            currentPage.classList.remove('fade-in');
            currentPage.classList.add('fade-out');

            setTimeout(() => {
                currentPage.style.display = 'none';
                nextPage.style.display = 'block';
                
                // Trigger reflow
                nextPage.offsetHeight; 

                nextPage.classList.remove('fade-out');
                nextPage.classList.add('fade-in');
                
                // Update buttons
                pageBtns.forEach(b => {
                    b.style.backgroundColor = '#cbd5e1';
                    b.classList.remove('active');
                });
                this.style.backgroundColor = '#38bdf8';
                this.classList.add('active');
            }, 300);
        });
    });
});
</script>

<!-- Onboarding Process -->
<section style="background-color: #17386B; padding: 6rem 0; min-height: 523px; display: flex; align-items: center; position: relative; overflow: hidden;">
    <div class="container" style="max-width: 1200px; position: relative; z-index: 2;">
        <div class="text-center" style="margin-bottom: 5rem;">
            <h2 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 40px; color: #FFFFFF; margin-bottom: 1rem;">Our Onboarding Process</h2>
            <p style="font-size: 16px; color: #FFFFFF; opacity: 0.9; max-width: 700px; margin: 0 auto;">From application to placement, our process is transparent and supportive.</p>
        </div>
        
        <div style="position: relative; display: flex; justify-content: space-between; align-items: flex-start; width: 100%; padding: 0 2rem;">
            <!-- Connection Line -->
            <div style="position: absolute; top: 38px; left: 0; width: 100%; height: 6px; z-index: 0; display: flex; padding: 0 4rem;">
                <div style="flex: 1; background-color: var(--primary-green);"></div> <!-- 1 to 2 -->
                <div style="flex: 1; background-color: var(--primary-green);"></div> <!-- 2 to 3 -->
                <div style="flex: 1; background: linear-gradient(to right, var(--primary-green) 50%, #FFFFFF 50%);"></div> <!-- 3 to 4 -->
                <div style="flex: 1; background-color: #FFFFFF;"></div> <!-- 4 to 5 -->
            </div>
            
            <!-- Step 1: Application -->
            <div style="position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; width: 120px;">
                <div style="width: 76px; height: 76px; background-color: var(--primary-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 0 20px rgba(45, 168, 79, 0.3);">
                    <img src="/public/assets/images/icons/application.svg" alt="Application" style="width: 32px; height: 32px;">
                </div>
                <h4 style="color: #FFFFFF; font-weight: 500; font-size: 1.1rem;">Application</h4>
            </div>

            <!-- Step 2: Inspection -->
            <div style="position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; width: 120px;">
                <div style="width: 76px; height: 76px; background-color: var(--primary-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 0 20px rgba(45, 168, 79, 0.3);">
                    <img src="/public/assets/images/icons/inspections.svg" alt="Inspection" style="width: 32px; height: 32px;">
                </div>
                <h4 style="color: #FFFFFF; font-weight: 500; font-size: 1.1rem;">Inspection</h4>
            </div>

            <!-- Step 3: Compliance -->
            <div style="position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; width: 120px;">
                <div style="width: 76px; height: 76px; background-color: var(--primary-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 0 20px rgba(45, 168, 79, 0.3);">
                    <img src="/public/assets/images/icons/compilance.svg" alt="Compliance" style="width: 32px; height: 32px;">
                </div>
                <h4 style="color: #FFFFFF; font-weight: 500; font-size: 1.1rem;">Compliance</h4>
            </div>

            <!-- Step 4: Approval -->
            <div style="position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; width: 120px;">
                <div style="width: 76px; height: 76px; background-color: #FFFFFF; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);">
                    <img src="/public/assets/images/icons/approval.svg" alt="Approval" style="width: 32px; height: 32px;">
                </div>
                <h4 style="color: #FFFFFF; font-weight: 500; font-size: 1.1rem;">Approval</h4>
            </div>

            <!-- Step 5: Placement -->
            <div style="position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; width: 120px;">
                <div style="width: 76px; height: 76px; background-color: #FFFFFF; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);">
                    <img src="/public/assets/images/icons/placement.svg" alt="Placement" style="width: 32px; height: 32px;">
                </div>
                <h4 style="color: #FFFFFF; font-weight: 500; font-size: 1.1rem;">Placement</h4>
            </div>
        </div>
    </div>
</section>

<!-- Latest Blogs & Posts -->
<section id="blogs-section" style="background-color: var(--primary-green); padding: 5rem 0 4rem;">
    <style>
        .blog-progress-container { display: flex; gap: 12px; justify-content: center; margin-top: 3rem; }
        .blog-progress-bar { width: 90px; height: 4px; background-color: rgba(255,255,255,0.35); border-radius: 2px; overflow: hidden; cursor: pointer; }
        .blog-progress-fill { width: 0%; height: 100%; background-color: #ffffff; border-radius: 2px; }
        .blog-progress-bar.active .blog-progress-fill { animation: blog-fill 5s linear forwards; }
        .blog-progress-bar.done .blog-progress-fill { width: 100%; }
        @keyframes blog-fill { from { width: 0%; } to { width: 100%; } }
        .blog-slide { display: none; }
        .blog-slide.active { display: grid; }
    </style>

    <div class="container" style="max-width: 1200px;">
        <div class="text-center" style="margin-bottom: 3.5rem;">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 0.85rem; letter-spacing: 2px; text-transform: uppercase; color: rgba(255,255,255,0.9); margin-bottom: 0.75rem;">WHAT'S TRENDING</p>
            <h2 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 2.6rem; color: #ffffff; margin: 0;">Latest Blogs &amp; Posts</h2>
        </div>

        <!-- Slide 1 -->
        <div class="blog-slide active" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2.5rem;">
            <?php foreach($blogs as $blog): ?>
                <?php include __DIR__ . '/../includes/blog-card.php'; ?>
            <?php endforeach; ?>
        </div>

        <!-- Slide 2 -->
        <div class="blog-slide" style="display: none; grid-template-columns: repeat(3, 1fr); gap: 2.5rem;">
            <?php foreach($blogs_slide2 as $blog): ?>
                <?php include __DIR__ . '/../includes/blog-card.php'; ?>
            <?php endforeach; ?>
        </div>

        <!-- Slide 3 -->
        <div class="blog-slide" style="display: none; grid-template-columns: repeat(3, 1fr); gap: 2.5rem;">
            <?php foreach($blogs_slide3 as $blog): ?>
                <?php include __DIR__ . '/../includes/blog-card.php'; ?>
            <?php endforeach; ?>
        </div>

        <!-- Progress Bars -->
        <div class="blog-progress-container">
            <div class="blog-progress-bar active" data-slide="0"><div class="blog-progress-fill"></div></div>
            <div class="blog-progress-bar"         data-slide="1"><div class="blog-progress-fill"></div></div>
            <div class="blog-progress-bar"         data-slide="2"><div class="blog-progress-fill"></div></div>
        </div>
    </div>
</section>

<script>
(function() {
    const DURATION = 5000; // ms per slide
    const bars   = Array.from(document.querySelectorAll('.blog-progress-bar'));
    const slides = Array.from(document.querySelectorAll('.blog-slide'));
    let current = 0;
    let timer   = null;

    function activate(idx) {
        idx = ((idx % slides.length) + slides.length) % slides.length;

        // Hide all slides
        slides.forEach(s => { s.classList.remove('active'); s.style.display = 'none'; });

        // Reset all bars
        bars.forEach((b, i) => {
            b.classList.remove('active', 'done');
            // Force reflow to restart animation when class is re-added
            const fill = b.querySelector('.blog-progress-fill');
            fill.style.animation = 'none';
            fill.offsetHeight; // reflow
            fill.style.animation = '';

            if (i < idx) {
                // Already-passed bars: fully filled, no animation
                b.classList.add('done');
            }
        });

        // Show chosen slide
        slides[idx].classList.add('active');
        slides[idx].style.display = 'grid';

        // Activate chosen bar (triggers @keyframes via CSS)
        bars[idx].classList.add('active');

        current = idx;
    }

    function next() {
        activate((current + 1) % slides.length);
    }

    function startTimer() {
        clearInterval(timer);
        timer = setInterval(next, DURATION);
    }

    // Click bar to jump to slide
    bars.forEach((bar, i) => {
        bar.addEventListener('click', () => { activate(i); startTimer(); });
    });

    // Initialise
    activate(0);
    startTimer();
})();
</script>



<!-- Become a Tenant CTA -->
 <?php require_once __DIR__ . '/../includes/become-tenants.php'; ?>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.hero-slide');
    const progressBars = document.querySelectorAll('.hero-progress-bar');
    const prevBtn = document.getElementById('hero-prev');
    const nextBtn = document.getElementById('hero-next');
    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
        // Remove active class from all
        slides.forEach(s => s.classList.remove('active'));
        progressBars.forEach(b => b.classList.remove('active'));

        // Handle index wrap around
        if (index >= slides.length) currentSlide = 0;
        else if (index < 0) currentSlide = slides.length - 1;
        else currentSlide = index;

        // Add active class
        slides[currentSlide].classList.add('active');
        progressBars[currentSlide].classList.add('active');
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    function startInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 5000); // 5 seconds
    }

    // Event Listeners
    nextBtn.addEventListener('click', () => {
        nextSlide();
        startInterval(); // Reset timer on click
    });

    prevBtn.addEventListener('click', () => {
        prevSlide();
        startInterval(); // Reset timer on click
    });

    // Initialize
    startInterval();
});
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
