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

<!-- Raising Standards -->
<section style="padding: 5rem 0; background-color: #fff;">
    <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">

        <!-- Left: Text -->
        <div>
            <p class="section-subtitle">Who Are We</p>
            <h2 class="section-title" style="margin-bottom: 1.5rem;">Raising Standards in<br>Supported Living</h2>
            <p style="color: var(--text-light); margin-bottom: 2.5rem; font-size: 0.95rem; line-height: 1.7;">We go beyond basic compliance to ensure every property feels like a home. Our tenant-first approach combined with rigorous management protocols makes us the preferred partner for local authorities and landlords.</p>

            <ul style="display: flex; flex-direction: column; gap: 1.1rem; list-style: none; padding: 0; margin: 0;">
                <li style="display: flex; align-items: center; gap: 0.75rem; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 0.95rem; color: #1a1a2e;">
                    <img src="/public/assets/images/icons/home-tick.svg" width="20" height="20" alt="tick">
                    Compliance-led housing model
                </li>
                <li style="display: flex; align-items: center; gap: 0.75rem; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 0.95rem; color: #1a1a2e;">
                    <img src="/public/assets/images/icons/home-tick.svg" width="20" height="20" alt="tick">
                    Trusted by partners &amp; councils
                </li>
                <li style="display: flex; align-items: center; gap: 0.75rem; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 0.95rem; color: #1a1a2e;">
                    <img src="/public/assets/images/icons/home-tick.svg" width="20" height="20" alt="tick">
                    End-to-end management
                </li>
                <li style="display: flex; align-items: center; gap: 0.75rem; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 0.95rem; color: #1a1a2e;">
                    <img src="/public/assets/images/icons/home-tick.svg" width="20" height="20" alt="tick">
                    Tenant-first approach
                </li>
            </ul>
        </div>

        <!-- Right: Images -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; align-items: end;">
            <!-- Large image spanning full height on left column -->
            <img src="/public/assets/images/properties/who-are-we-p1.svg" alt="Property" style="grid-row: span 2; width: 100%; height: 445px; object-fit: cover; border-radius: 30px;">
            <!-- Two small images stacked on right column -->
            <img src="/public/assets/images/properties/who-are-we-p2.svg" alt="Interior 1" style="width: 100%; height: 215px; object-fit: cover; border-radius: 30px;">
            <img src="/public/assets/images/properties/who-are-we-p3.svg" alt="Interior 2" style="width: 100%; height: 215px; object-fit: cover; border-radius: 30px;">
        </div>

    </div>
</section>

<!-- Our Services (Properties) -->
<section style="padding: 4rem 0;">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <p class="section-subtitle">What we offer</p>
            <h2 style="font-size: 2rem;">Our Services</h2>
            <p style="color: var(--text-light); max-width: 600px; margin: 0 auto;">Discover our range of housing options designed to meet your specific needs and lifestyle requirements.</p>
        </div>
        
        <div class="grid grid-cols-3 gap-6">
            <?php foreach($properties as $property): ?>
                <?php include __DIR__ . '/../includes/property-card.php'; ?>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center" style="margin-top: 3rem;">
            <a href="#" class="btn btn-outline" style="border-color: #e2e8f0; color: var(--text-dark);">View All &rarr;</a>
        </div>
    </div>
</section>

<!-- Onboarding Process -->
<section style="padding: 4rem 0; background-color: var(--primary-navy); color: white;">
    <div class="container text-center">
        <h2 style="font-size: 2rem; color: white; margin-bottom: 1rem;">Our Onboarding Process</h2>
        <p style="color: #94a3b8; margin-bottom: 4rem;">A simple, transparent, and efficient process to get you settled into your new home quickly.</p>
        
        <div style="display: flex; justify-content: space-between; align-items: center; position: relative; max-width: 800px; margin: 0 auto;">
            <div style="position: absolute; top: 20px; left: 0; width: 100%; height: 2px; background: linear-gradient(to right, var(--primary-green) 50%, white 50%); z-index: 0;"></div>
            
            <div style="position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; gap: 1rem;">
                <div style="width: 40px; height: 40px; border-radius: 50%; background-color: var(--primary-green); display: flex; align-items: center; justify-content: center; font-weight: bold;">1</div>
                <span style="font-size: 0.9rem;">Exploration</span>
            </div>
            <div style="position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; gap: 1rem;">
                <div style="width: 40px; height: 40px; border-radius: 50%; background-color: var(--primary-green); display: flex; align-items: center; justify-content: center; font-weight: bold;">2</div>
                <span style="font-size: 0.9rem;">Discovery</span>
            </div>
            <div style="position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; gap: 1rem;">
                <div style="width: 40px; height: 40px; border-radius: 50%; background-color: var(--primary-green); display: flex; align-items: center; justify-content: center; font-weight: bold;">3</div>
                <span style="font-size: 0.9rem;">Verification</span>
            </div>
            <div style="position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; gap: 1rem;">
                <div style="width: 40px; height: 40px; border-radius: 50%; background-color: white; color: var(--primary-navy); display: flex; align-items: center; justify-content: center; font-weight: bold;">4</div>
                <span style="font-size: 0.9rem;">Approval</span>
            </div>
            <div style="position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; gap: 1rem;">
                <div style="width: 40px; height: 40px; border-radius: 50%; background-color: white; color: var(--primary-navy); display: flex; align-items: center; justify-content: center; font-weight: bold;">5</div>
                <span style="font-size: 0.9rem;">Placement</span>
            </div>
        </div>
    </div>
</section>

<!-- Latest Blogs & Posts -->
<section style="padding: 4rem 0; background-color: var(--primary-green);">
    <div class="container text-center">
        <p style="color: white; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.5rem;">News & Insights</p>
        <h2 style="font-size: 2rem; color: white; margin-bottom: 3rem;">Latest Blogs & Posts</h2>
        
        <div class="grid grid-cols-3 gap-6 text-left">
            <?php foreach($blogs as $blog): ?>
                <?php include __DIR__ . '/../includes/blog-card.php'; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Become a Tenant CTA -->
<section style="padding: 4rem 0;">
    <div class="container" style="max-width: 1120px;">
        <div class="card" style="font-family: var(--font-family); background-color: var(--primary-navy); color: white; padding: 3.5rem; text-align: center; border-radius: 40px; position: relative; overflow: hidden; min-height: 260px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <img src="/public/assets/images/icons/globe.svg" alt="Decoration" style="position: absolute; top: 50%; left: 10%; transform: translateY(-50%); width: 100px; height: 100px;">
            
            <h2 style="font-size: 2.5rem; font-weight: 600; color: white; margin-bottom: 1rem;">Become a Tenants</h2>
            <p style="color: #e2e8f0; margin-bottom: 2rem; font-size: 1.05rem; line-height: 1.6;">
                Fusce venenatis tellus a felis scelerisque.<br>
                venenatis tellus a felis scelerisque.
            </p>
            <a href="#" class="btn btn-primary" style="padding: 0.75rem 2rem; border-radius: 30px; font-weight: 500;">Tenants Enquiry</a>
        </div>
    </div>
</section>

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
