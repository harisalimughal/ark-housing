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

    /* Tailored Housing Flip Cards */
    .flip-card {
        background-color: transparent;
        width: 100%;
        max-width: 277px;
        height: 277px;
        perspective: 1000px;
        margin: 0 auto;
    }
    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
    }
    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }
    .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: 30px;
        box-shadow: 4px 10px 30px 0px rgba(0,0,0,0.15);
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 2rem;
        top: 0;
        left: 0;
    }
    .flip-card-front {
        background: #17386B;
        align-items: center;
        gap: 1.25rem;
        color: white;
    }
    .flip-card-back {
        background: white;
        color: black;
        transform: rotateY(180deg);
        align-items: flex-start;
        text-align: left;
    }
    .flip-card-back h4 {
        color: #1a1a2e;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 1.05rem;
        margin-bottom: 0.5rem;
        margin-top: 1rem;
    }
    .flip-card-back p {
        color: #475569;
        font-family: 'Poppins', sans-serif;
        font-size: 0.8rem;
        line-height: 1.6;
        margin-bottom: auto;
    }
    .flip-card-back a {
        color: #48A7DD;
        font-family: 'Poppins', sans-serif;
        font-size: 0.85rem;
        font-weight: 500;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        margin-top: 1rem;
    }

    @media (max-width: 1024px) {
        .hero-progress-container, #hero-prev, #hero-next {
            display: none !important;
        }
    }
</style>

<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <h3 class="section-subtitle">Real Estate</h3>
        <h1 class="hero-title typewriter-text">Create your pathways to independent</h1>
        <p style="color: var(--text-light); margin-bottom: 1.5rem; max-width: 800px; margin-left: auto; margin-right: auto; font-size: 1.1rem;">Providing supported accommodation, transitional housing and guaranteed rent services across the UK. We focus on dignity, stability, and high standards.</p>
        
        <div class="hero-carousel-container" style="position: relative; margin: 0 auto; z-index: 10;">
            <div class="hero-slides-wrapper">
                <img src="/public/assets/images/properties/home-center.jpg" class="hero-slide active" alt="Slide 1">
                <img src="/public/assets/images/properties/home-center2.jpg" class="hero-slide" alt="Slide 2">
                <img src="/public/assets/images/properties/home-center3.jpg" class="hero-slide" alt="Slide 3">
                <img src="/public/assets/images/properties/home-center4.jpg" class="hero-slide" alt="Slide 4">

            </div>
            
            <!-- Progress Bars moved below the image area -->
            <div class="hero-progress-container" style="position: absolute; top: 320px; left: 50%; transform: translateX(-50%); z-index: 20; display: flex; gap: 12px; justify-content: center;">
                <div class="hero-progress-bar active"><div class="progress-fill"></div></div>
                <div class="hero-progress-bar"><div class="progress-fill"></div></div>
                <div class="hero-progress-bar"><div class="progress-fill"></div></div>
                <div class="hero-progress-bar"><div class="progress-fill"></div></div>
            </div>

            <!-- Carousel Buttons -->
            <button id="hero-prev" style="position: absolute; top: 150px; left: -20px; transform: translateY(-50%); width: 40px; height: 40px; border-radius: 50%; background: rgba(255,255,255,0.95); border: none; box-shadow: 0 2px 12px rgba(0,0,0,0.15); display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 30; color: #64748b;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button id="hero-next" style="position: absolute; top: 150px; right: -20px; transform: translateY(-50%); width: 40px; height: 40px; border-radius: 50%; background: rgba(255,255,255,0.95); border: none; box-shadow: 0 2px 12px rgba(0,0,0,0.15); display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 30; color: #64748b;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
            </button>

            <!-- Center Badge (Happy Customers) -->
            <div class="badge" style="position: absolute; bottom: -2rem; left: 50%; transform: translateX(-50%) translateY(50%); box-shadow: 0 10px 30px rgba(0,0,0,0.05); background: white; padding: 1rem 1.5rem; border-radius: 50px; display: flex; align-items: center; gap: 1rem; z-index: 30; white-space: nowrap;">
                <div style="display: flex; margin-right: 0.5rem;">
                    <img src="https://i.pravatar.cc/100?img=11" style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 6;">
                    <img src="https://i.pravatar.cc/100?img=12" style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 5;">
                    <img src="https://i.pravatar.cc/100?img=13" style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 4;">
                    <img src="https://i.pravatar.cc/100?img=14" style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 3;">
                    <img src="https://i.pravatar.cc/100?img=15" style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 2;">
                    <div style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 1; background: #333; color: white; display: flex; align-items: center; justify-content: center; font-size: 0.8rem;">+</div>
                </div>
                <div class="badge-text" style="text-align: left;">
                    <span data-count="72" data-count-suffix="k+">72k+</span> Happy<br>
                    Customers
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Green Stats Strip -->
<section style="background-color: var(--primary-green); color: white; padding: 1.75rem 0;">
    <div class="container grid-cols-4 stats-bar" style="display: grid; gap: 1.5rem; text-align: center; align-items: flex-start;">

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
        
        <div class="grid-cols-4 flex-col-1024" style="display: grid; gap: 1.5rem; justify-content: center; align-items: center;">

            <!-- HMO -->
            <div class="flip-card pop-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="/public/assets/images/icons/hmo.svg" alt="HMO" width="45" height="50">
                        <h4 style="color: white; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.1rem; margin: 0; text-align: center;">HMO</h4>
                    </div>
                    <div class="flip-card-back">
                        <div style="background-color: #3EA1D8; border-radius: 10px; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(62,161,216,0.4);">
                            <img src="/public/assets/images/icons/smarthome.svg" alt="Smart Home" width="24" height="24">
                        </div>
                        <h4>HMO Accommodation</h4>
                        <p>Fully compliant HMO properties managed to high safety standards.</p>
                        <a href="/hmo.php">Learn more &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Transitional Housing -->
            <div class="flip-card pop-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="/public/assets/images/icons/transitional-housing.svg" alt="Transitional Housing" width="50" height="50">
                        <h4 style="color: white; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.1rem; margin: 0; text-align: center;">Transitional<br>Housing</h4>
                    </div>
                    <div class="flip-card-back">
                        <div style="background-color: #3EA1D8; border-radius: 10px; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(62,161,216,0.4);">
                            <img src="/public/assets/images/icons/smarthome.svg" alt="Smart Home" width="24" height="24">
                        </div>
                        <h4>Transitional Housing</h4>
                        <p>Short to medium-term housing supporting independent living pathways.</p>
                        <a href="/transitional.php">Learn more &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Support Living -->
            <div class="flip-card pop-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="/public/assets/images/icons/support-living.svg" alt="Support Living" width="50" height="50">
                        <h4 style="color: white; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.1rem; margin: 0; text-align: center;">Support<br>Living</h4>
                    </div>
                    <div class="flip-card-back">
                        <div style="background-color: #3EA1D8; border-radius: 10px; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(62,161,216,0.4);">
                            <img src="/public/assets/images/icons/smarthome.svg" alt="Smart Home" width="24" height="24">
                        </div>
                        <h4>Supported Living</h4>
                        <p>Accommodation with tailored support for individuals with additional needs.</p>
                        <a href="/supported-living.php">Learn more &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Guaranteed Rent -->
            <div class="flip-card pop-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="/public/assets/images/icons/rent.svg" alt="Guaranteed Rent" width="50" height="50">
                        <h4 style="color: white; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.1rem; margin: 0; text-align: center;">Guaranteed<br>Rent</h4>
                    </div>
                    <div class="flip-card-back">
                        <div style="background-color: #3EA1D8; border-radius: 10px; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(62,161,216,0.4);">
                            <img src="/public/assets/images/icons/smarthome.svg" alt="Smart Home" width="24" height="24">
                        </div>
                        <h4>Guaranteed Rent</h4>
                        <p>Reliable, stress-free rental income for landlords.</p>
                        <a href="/guaranteed-rent.php">Learn more &rarr;</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- WHO ARE WE -->
<?php
require_once __DIR__ . '/../includes/who-are-we.php';
?>


<!-- Our Services -->
<section id="services-section" style="padding: 4rem 0 10rem; background-color: #fff; position: relative;">
    <div class="container" style="position: relative;">

        <div class="text-center" style="margin-bottom: 5rem;">
            <p class="section-subtitle">WHO WE OFFER</p>
            <h2 class="section-title">Our Services</h2>
            <p style="color: var(--text-light); max-width: 700px; margin: 1.5rem auto 0; font-size: 1.1rem;">Comprehensive housing solutions tailored to the needs of tenants, landlords, and local authorities.</p>
        </div>

        <style>
            .svc-carousel-wrapper { overflow: hidden; }
            .svc-track {
                display: flex;
                gap: 24px;
                transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
                will-change: transform;
                align-items: stretch;
            }
            .svc-card {
                flex: 0 0 auto;
                background: #F2F2F2;
                border-radius: 24.7px;
                overflow: hidden;
                box-shadow: 0 10px 30px rgba(0,0,0,0.05);
                display: flex;
                flex-direction: column;
            }
            #svc-prev, #svc-next {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 50px; height: 50px;
                border-radius: 50%;
                background: #ffffff;
                border: 1px solid #e2e8f0;
                box-shadow: 0 4px 12px rgba(0,0,0,0.05);
                display: flex; align-items: center; justify-content: center;
                cursor: pointer;
                z-index: 10;
                transition: all 0.3s ease;
                color: #1e293b;
            }
            #svc-prev { left: -60px; }
            #svc-next { right: -60px; }
            #svc-prev:hover, #svc-next:hover {
                background: #38bdf8;
                color: #fff;
                border-color: #38bdf8;
            }
            @media (max-width: 1024px) {
                #svc-prev, #svc-next { display: none !important; }
                .svc-carousel-wrapper { overflow-x: auto; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; padding: 0 20px; }
                .svc-track { gap: 16px; }
                .svc-card { scroll-snap-align: start; min-width: 82vw !important; width: 82vw !important; }
            }
        </style>

        <div style="position: relative;">
            <button id="svc-prev" aria-label="Previous service">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button id="svc-next" aria-label="Next service">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
            </button>

            <div class="svc-carousel-wrapper" id="svc-wrapper">
                <div class="svc-track" id="svc-track">

                    <!-- Card 1: Supported Living -->
                    <div class="svc-card">
                        <img src="/public/assets/images/properties/uk-houses/uk-1.jpg" alt="Supported Living" style="width: 100%; height: 280px; object-fit: cover; border-radius: 24.7px 24.7px 0 0;">
                        <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column; text-align: center; align-items: center;">
                            <div style="min-height: 140px; margin-bottom: 1.5rem; display: flex; flex-direction: column; justify-content: center;">
                                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.4rem; margin-bottom: 0.75rem; color: #000;">Supported Living</h3>
                                <p style="color: var(--text-light); font-size: 0.8rem; line-height: 1.5; margin: 0 auto;">Our supported living service provides accommodation with tailored support for individuals with varying needs, ensuring a safe and stable living environment.</p>
                            </div>
                            <div style="width: 100%;">
                                <h4 style="font-size: 0.95rem; font-weight: 600; margin-bottom: 1.25rem; color: #000;">What's Included</h4>
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; text-align: left; width: 100%; margin-bottom: 2.5rem;">
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Tailored Care Plans</div>
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> 24/7 Support</div>
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Community Integration</div>
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Life Skills Development</div>
                                </div>
                            </div>
                            <div style="margin-top: auto; width: 100%;">
                                <div style="background: #fff; width: 100%; border-radius: 12.35px; border: 0.82px solid #e2e8f0; display: flex; flex-direction: column; justify-content: center; align-items: center; margin-bottom: 1.5rem; padding: 12px 10px;">
                                    <p style="font-weight: 600; font-size: 0.85rem; margin-bottom: 0.1rem; color: #000;">Perfect For</p>
                                    <p style="font-size: 0.65rem; color: #000; width: 100%; text-align: center;">Individuals with learning disabilities, mental health needs, or autism.</p>
                                </div>
                                <a href="/supported-living.php" class="btn" style="background-color: var(--primary-green); color: white; border-radius: 30px; padding: 0.8rem 1.5rem; font-weight: 500; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; width: 200px; margin-bottom: 1rem;">Learn More &rarr;</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Transitional Housing -->
                    <div class="svc-card">
                        <img src="/public/assets/images/properties/uk-houses/uk-3.jpg" alt="Transitional Housing" style="width: 100%; height: 280px; object-fit: cover; border-radius: 24.7px 24.7px 0 0;">
                        <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column; text-align: center; align-items: center;">
                            <div style="min-height: 140px; margin-bottom: 1.5rem; display: flex; flex-direction: column; justify-content: center;">
                                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.4rem; margin-bottom: 0.75rem; color: #000;">Transitional Housing</h3>
                                <p style="color: var(--text-light); font-size: 0.8rem; line-height: 1.5; margin: 0 auto;">A stepping stone towards independence. We provide short-term housing with light-touch support to help residents build confidence and tenancy skills.</p>
                            </div>
                            <div style="width: 100%;">
                                <h4 style="font-size: 0.95rem; font-weight: 600; margin-bottom: 1.25rem; color: #000;">What's Included</h4>
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; text-align: left; width: 100%; margin-bottom: 2.5rem;">
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Tenancy Training</div>
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Budgeting Support</div>
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Employment Assistance</div>
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Move-on Support</div>
                                </div>
                            </div>
                            <div style="margin-top: auto; width: 100%;">
                                <div style="background: #fff; width: 100%; border-radius: 12.35px; border: 0.82px solid #e2e8f0; display: flex; flex-direction: column; justify-content: center; align-items: center; margin-bottom: 1.5rem; padding: 12px 10px;">
                                    <p style="font-weight: 600; font-size: 0.85rem; margin-bottom: 0.1rem; color: #000;">Perfect For</p>
                                    <p style="font-size: 0.65rem; color: #000; width: 100%; text-align: center;">Young care leavers, individuals at risk of homelessness.</p>
                                </div>
                                <a href="/transitional.php" class="btn" style="background-color: var(--primary-green); color: white; border-radius: 30px; padding: 0.8rem 1.5rem; font-weight: 500; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; width: 200px; margin-bottom: 1rem;">Learn More &rarr;</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: HMO Management -->
                    <div class="svc-card">
                        <img src="/public/assets/images/properties/uk-houses/uk-5.jpg" alt="HMO Management" style="width: 100%; height: 280px; object-fit: cover; border-radius: 24.7px 24.7px 0 0;">
                        <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column; text-align: center; align-items: center;">
                            <div style="min-height: 140px; margin-bottom: 1.5rem; display: flex; flex-direction: column; justify-content: center;">
                                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.4rem; margin-bottom: 0.75rem; color: #000;">HMO Management</h3>
                                <p style="color: var(--text-light); font-size: 0.8rem; line-height: 1.5; margin: 0 auto;">We take the stress out of HMO management. From licensing to tenant sourcing and maintenance, we ensure full compliance and occupancy.</p>
                            </div>
                            <div style="width: 100%;">
                                <h4 style="font-size: 0.95rem; font-weight: 600; margin-bottom: 1.25rem; color: #000;">What's Included</h4>
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; text-align: left; width: 100%; margin-bottom: 2.5rem;">
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Article 4 Compliance</div>
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Regular Inspections</div>
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Full Maintenance</div>
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Tenant Sourcing</div>
                                </div>
                            </div>
                            <div style="margin-top: auto; width: 100%;">
                                <div style="background: #fff; width: 100%; border-radius: 12.35px; border: 0.82px solid #e2e8f0; display: flex; flex-direction: column; justify-content: center; align-items: center; margin-bottom: 1.5rem; padding: 12px 10px;">
                                    <p style="font-weight: 600; font-size: 0.85rem; margin-bottom: 0.1rem; color: #000;">Perfect For</p>
                                    <p style="font-size: 0.65rem; color: #000; width: 100%; text-align: center;">Landlords with multi-let properties.</p>
                                </div>
                                <a href="/hmo.php" class="btn" style="background-color: var(--primary-green); color: white; border-radius: 30px; padding: 0.8rem 1.5rem; font-weight: 500; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; width: 200px; margin-bottom: 1rem;">Learn More &rarr;</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Guaranteed Rent -->
                    <div class="svc-card">
                        <img src="/public/assets/images/properties/uk-houses/uk-7.jpg" alt="Guaranteed Rent" style="width: 100%; height: 280px; object-fit: cover; border-radius: 24.7px 24.7px 0 0;">
                        <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column; text-align: center; align-items: center;">
                            <div style="min-height: 140px; margin-bottom: 1.5rem; display: flex; flex-direction: column; justify-content: center;">
                                <h3 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.4rem; margin-bottom: 0.75rem; color: #000;">Guaranteed Rent</h3>
                                <p style="color: var(--text-light); font-size: 0.8rem; line-height: 1.5; margin: 0 auto;">Reliable, stress-free rental income for landlords. We take on all the risks, voids, and maintenance associated with letting.</p>
                            </div>
                            <div style="width: 100%;">
                                <h4 style="font-size: 0.95rem; font-weight: 600; margin-bottom: 1.25rem; color: #000;">What's Included</h4>
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; text-align: left; width: 100%; margin-bottom: 2.5rem;">
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> 0% Commission</div>
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> No Void Periods</div>
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Condition Guarantee</div>
                                    <div style="display: flex; align-items: center; gap: 0.4rem; font-size: 0.68rem; color: #000; white-space: nowrap;"><img src="/public/assets/images/icons/tick-box.svg" width="12" height="12" alt="tick"> Long-term Leases</div>
                                </div>
                            </div>
                            <div style="margin-top: auto; width: 100%;">
                                <div style="background: #fff; width: 100%; border-radius: 12.35px; border: 0.82px solid #e2e8f0; display: flex; flex-direction: column; justify-content: center; align-items: center; margin-bottom: 1.5rem; padding: 12px 10px;">
                                    <p style="font-weight: 600; font-size: 0.85rem; margin-bottom: 0.1rem; color: #000;">Perfect For</p>
                                    <p style="font-size: 0.65rem; color: #000; width: 100%; text-align: center;">Landlords seeking financial security and peace of mind.</p>
                                </div>
                                <a href="/guaranteed-rent.php" class="btn" style="background-color: var(--primary-green); color: white; border-radius: 30px; padding: 0.8rem 1.5rem; font-weight: 500; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; width: 200px; margin-bottom: 1rem;">Learn More &rarr;</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- View All -->
        <div style="margin-top: 4rem; text-align: center;">
            <a href="/services.php" style="color: #1e293b; font-weight: 600; font-size: 0.9rem; text-decoration: none; text-transform: uppercase; letter-spacing: 0.5px;">VIEW ALL</a>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var wrapper  = document.getElementById('svc-wrapper');
    var track    = document.getElementById('svc-track');
    var cards    = Array.from(track.querySelectorAll('.svc-card'));
    var prevBtn  = document.getElementById('svc-prev');
    var nextBtn  = document.getElementById('svc-next');
    var gap      = 24;
    var visible  = 3;
    var current  = 0;
    var maxIdx   = cards.length - visible; // 1

    function cardWidth() {
        return (wrapper.clientWidth - gap * (visible - 1)) / visible;
    }

    function setWidths() {
        var w = cardWidth();
        cards.forEach(function (c) { c.style.width = w + 'px'; });
        return w;
    }

    function goTo(idx) {
        if (idx < 0)      idx = maxIdx;
        if (idx > maxIdx) idx = 0;
        var w = setWidths();
        track.style.transform = 'translateX(-' + idx * (w + gap) + 'px)';
        current = idx;
    }

    setWidths();

    prevBtn.addEventListener('click', function () { goTo(current - 1); });
    nextBtn.addEventListener('click', function () { goTo(current + 1); });
    window.addEventListener('resize', function () { goTo(current); });
});
</script>

<!-- Onboarding Process -->
<section class="onboarding-section" style="background-color: #17386B; padding: 6rem 0; min-height: 523px; display: flex; align-items: center; position: relative; overflow: hidden;">
    <style>
        .onboarding-track { position: absolute; top: 38px; left: 0; width: 100%; height: 6px; z-index: 0; padding: 0 4rem; box-sizing: border-box; }
        .onboarding-track-inner { width: 100%; height: 100%; background-color: #FFFFFF; border-radius: 3px; position: relative; overflow: hidden; }
        .onboarding-fill { position: absolute; top: 0; left: 0; height: 100%; width: 0%; background-color: var(--primary-green); border-radius: 3px; transition: width 2s cubic-bezier(0.4, 0, 0.2, 1); }
        .onboarding-step-circle {
            width: 76px; height: 76px;
            background-color: #FFFFFF;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 1.5rem;
            box-shadow: 0 0 0 4px rgba(255,255,255,0.15);
            transition: background-color 0.45s ease, box-shadow 0.45s ease;
        }
        .onboarding-step-circle img {
            width: 32px; height: 32px;
            filter: invert(14%) sepia(46%) saturate(1200%) hue-rotate(195deg) brightness(80%);
            transition: filter 0.45s ease;
        }
        .onboarding-step-circle.active { background-color: var(--primary-green); box-shadow: 0 0 20px rgba(45,168,79,0.4); }
        .onboarding-step-circle.active img { filter: brightness(0) invert(1); }

        @media (max-width: 1024px) {
            .onboarding-track { display: none !important; }
            .onboarding-step { width: 160px !important; }
            .onboarding-step:not(:last-child)::after { display: none; }
        }
    </style>
    <div class="container" style="max-width: 1200px; position: relative; z-index: 2;">
        <div class="text-center" style="margin-bottom: 5rem;">
            <h2 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 40px; color: #FFFFFF; margin-bottom: 1rem;">Our Onboarding Process</h2>
            <p style="font-size: 16px; color: #FFFFFF; opacity: 0.9; max-width: 700px; margin: 0 auto;">From application to placement, our process is transparent and supportive.</p>
        </div>

        <div class="flex-col-1024 onboarding-steps-row" style="position: relative; display: flex; justify-content: space-between; align-items: flex-start; width: 100%; padding: 0 2rem; gap: 2rem;">
            <!-- Connection Line (desktop only) -->
            <div class="onboarding-track">
                <div class="onboarding-track-inner">
                    <div class="onboarding-fill"></div>
                </div>
            </div>

            <!-- Step 1: Application -->
            <div class="onboarding-step" style="position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; width: 120px;">
                <div class="onboarding-step-circle">
                    <img src="/public/assets/images/icons/application.svg" alt="Application">
                </div>
                <h4 style="color: #FFFFFF; font-weight: 500; font-size: 1.1rem;">Application</h4>
            </div>

            <!-- Step 2: Inspection -->
            <div class="onboarding-step" style="position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; width: 120px;">
                <div class="onboarding-step-circle">
                    <img src="/public/assets/images/icons/inspections.svg" alt="Inspection">
                </div>
                <h4 style="color: #FFFFFF; font-weight: 500; font-size: 1.1rem;">Inspection</h4>
            </div>

            <!-- Step 3: Compliance -->
            <div class="onboarding-step" style="position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; width: 120px;">
                <div class="onboarding-step-circle">
                    <img src="/public/assets/images/icons/compilance.svg" alt="Compliance">
                </div>
                <h4 style="color: #FFFFFF; font-weight: 500; font-size: 1.1rem;">Compliance</h4>
            </div>

            <!-- Step 4: Approval -->
            <div class="onboarding-step" style="position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; width: 120px;">
                <div class="onboarding-step-circle">
                    <img src="/public/assets/images/icons/approval.svg" alt="Approval">
                </div>
                <h4 style="color: #FFFFFF; font-weight: 500; font-size: 1.1rem;">Approval</h4>
            </div>

            <!-- Step 5: Placement -->
            <div class="onboarding-step" style="position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; width: 120px;">
                <div class="onboarding-step-circle">
                    <img src="/public/assets/images/icons/placement.svg" alt="Placement">
                </div>
                <h4 style="color: #FFFFFF; font-weight: 500; font-size: 1.1rem;">Placement</h4>
            </div>
        </div>
    </div>
</section>
<script>
(function() {
    var section = document.querySelector('.onboarding-section');
    var fill = section && section.querySelector('.onboarding-fill');
    if (!fill) return;
    var circles = section.querySelectorAll('.onboarding-step-circle');
    var steps = section.querySelectorAll('.onboarding-step');
    var totalDuration = 2000;
    // 5 steps evenly spaced: 0%, 25%, 50%, 75%, 100%
    var stepFractions = [0, 0.25, 0.5, 0.75, 1.0];
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                fill.style.width = '100%';
                stepFractions.forEach(function(fraction, i) {
                    setTimeout(function() {
                        if (circles[i]) circles[i].classList.add('active');
                        // turn the connector line above this step green
                        if (i > 0 && steps[i - 1]) steps[i - 1].classList.add('step-line-active');
                    }, Math.round(fraction * totalDuration));
                });
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });
    observer.observe(section);
})();
</script>

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
        <div class="blog-slide active grid-cols-3" style="gap: 2.5rem;">
            <?php foreach($blogs as $blog): ?>
                <?php include __DIR__ . '/../includes/blog-card.php'; ?>
            <?php endforeach; ?>
        </div>

        <!-- Slide 2 -->
        <div class="blog-slide grid-cols-3" style="gap: 2.5rem;">
            <?php foreach($blogs_slide2 as $blog): ?>
                <?php include __DIR__ . '/../includes/blog-card.php'; ?>
            <?php endforeach; ?>
        </div>

        <!-- Slide 3 -->
        <div class="blog-slide grid-cols-3" style="gap: 2.5rem;">
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
        slides.forEach(s => { s.classList.remove('active'); });

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
        // We rely on CSS class active { display: grid; } instead of inline style
        
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
