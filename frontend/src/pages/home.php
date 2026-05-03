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
        <h3 class="section-subtitle" style="color: var(--primary-green); text-transform: uppercase; font-weight: bold; letter-spacing: 1px; margin-bottom: 1rem;">Real Estate</h3>
        <h1 class="hero-title" style="font-size: 4rem; font-weight: 800; margin-bottom: 1rem; max-width: 800px; margin-left: auto; margin-right: auto; line-height: 1.2;">Create your pathways to independent</h1>
        <p style="color: var(--text-light); margin-bottom: 1.5rem; max-width: 800px; margin-left: auto; margin-right: auto; font-size: 1.1rem;">Providing supported accommodation, transitional housing and guaranteed rent services across the UK. We focus on dignity, stability, and high standards.</p>
        
        <div style="position: relative; max-width: 800px; margin: 0 auto; z-index: 10;">
            <img src="/public/assets/images/home-center.svg" alt="Modern Bedroom" style="border-radius: var(--border-radius-lg); width: 100%;">
            
            <!-- Carousel Buttons -->
            <button style="position: absolute; top: 50%; left: 0; transform: translate(-50%, -50%); width: 48px; height: 48px; border-radius: 50%; background: white; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 20; color: #64748b;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button style="position: absolute; top: 50%; right: 0; transform: translate(50%, -50%); width: 48px; height: 48px; border-radius: 50%; background: white; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 20; color: #64748b;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
            </button>
            
            <div class="badge" style="position: absolute; bottom: -4rem; left: 10%; transform: translateY(50%); box-shadow: 0 10px 30px rgba(0,0,0,0.05); background: white; padding: 1rem 2rem; border-radius: 50px; display: flex; align-items: center; gap: 1rem;">
                <div style="display: flex; margin-right: 0.5rem;">
                    <img src="https://i.pravatar.cc/100?img=1" style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 4;">
                    <img src="https://i.pravatar.cc/100?img=2" style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 3;">
                    <img src="https://i.pravatar.cc/100?img=3" style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 2;">
                    <div style="width: 30px; height: 30px; border-radius: 50%; border: 2px solid white; margin-left: -10px; z-index: 1; background: #333; color: white; display: flex; align-items: center; justify-content: center; font-size: 0.8rem;">+</div>
                </div>
                <div style="text-align: left;">
                    <strong style="display: block; color: var(--primary-navy);">72k+ Happy</strong>
                    <span style="color: var(--text-light); font-size: 0.9rem;">Customers</span>
                </div>
            </div>
            <div class="badge" style="position: absolute; bottom: -4rem; right: 10%; transform: translateY(50%); box-shadow: 0 10px 30px rgba(0,0,0,0.05); background: white; padding: 1rem 2rem; border-radius: 50px; display: flex; align-items: center; gap: 1rem;">
                <img src="/public/assets/images/home-center.svg" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                <div style="text-align: left;">
                    <strong style="display: block; color: var(--primary-navy);">200+ New</strong>
                    <span style="color: var(--text-light); font-size: 0.9rem;">Listings Everyday!</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<section style="background-color: var(--primary-green); color: white; padding: 1.5rem 0;">
    <div class="container flex justify-between stats-bar" style="text-align: center; font-weight: 500;">
        <div class="stat-item">⭐ 10+ Years of Experience</div>
        <div class="stat-item">🤝 150+ Professional Partners</div>
        <div class="stat-item">🏠 200+ Properties Managed</div>
        <div class="stat-item">💯 100% Client Satisfaction</div>
    </div>
</section>

<!-- Tailored Housing Services -->
<section style="padding: 4rem 0;">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <p class="section-subtitle">What we offer</p>
            <h2 style="font-size: 2rem;">Tailored Housing Services</h2>
        </div>
        
        <div class="grid grid-cols-4 gap-6 text-center">
            <div class="card" style="background-color: var(--primary-navy); color: white; padding: 2rem;">
                <div style="font-size: 2rem; margin-bottom: 1rem;">🏠</div>
                <h4 style="color: white;">HMO</h4>
            </div>
            <div class="card" style="background-color: var(--primary-navy); color: white; padding: 2rem;">
                <div style="font-size: 2rem; margin-bottom: 1rem;">🏘️</div>
                <h4 style="color: white;">Transitional Housing</h4>
            </div>
            <div class="card" style="background-color: var(--primary-navy); color: white; padding: 2rem;">
                <div style="font-size: 2rem; margin-bottom: 1rem;">🏥</div>
                <h4 style="color: white;">Support Living</h4>
            </div>
            <div class="card" style="background-color: var(--primary-navy); color: white; padding: 2rem;">
                <div style="font-size: 2rem; margin-bottom: 1rem;">✅</div>
                <h4 style="color: white;">Guaranteed Rent</h4>
            </div>
        </div>
    </div>
</section>

<!-- Raising Standards -->
<section style="padding: 4rem 0; background-color: var(--bg-light);">
    <div class="container grid grid-cols-2 gap-8 items-center">
        <div>
            <p class="section-subtitle">Why Choose Us</p>
            <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem;">Raising Standards in Supported Living</h2>
            <p style="color: var(--text-light); margin-bottom: 2rem;">We are committed to providing the highest quality of living spaces. Our properties are meticulously maintained and designed to offer comfort, security, and a true sense of home for all our tenants.</p>
            
            <ul style="display: flex; flex-direction: column; gap: 1rem;">
                <li style="display: flex; align-items: center; gap: 0.5rem;">✅ Compliance and Maintenance</li>
                <li style="display: flex; align-items: center; gap: 0.5rem;">✅ Fair Pricing and Transparency</li>
                <li style="display: flex; align-items: center; gap: 0.5rem;">✅ Fast and Efficient Process</li>
                <li style="display: flex; align-items: center; gap: 0.5rem;">✅ 24/7 Support Services</li>
            </ul>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <img src="/public/assets/images/who-are-we-p1.svg" alt="Living Room 1" style="border-radius: var(--border-radius-lg); width: 100%; height: 100%; object-fit: cover; grid-row: span 2;">
            <img src="/public/assets/images/who-are-we-p2.svg" alt="Living Room 2" style="border-radius: var(--border-radius-lg); width: 100%; height: 150px; object-fit: cover;">
            <img src="/public/assets/images/who-are-we-p3.svg" alt="Living Room 3" style="border-radius: var(--border-radius-lg); width: 100%; height: 150px; object-fit: cover;">
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
    <div class="container">
        <div class="card" style="background-color: var(--primary-navy); color: white; padding: 3rem; text-align: center; border-radius: var(--border-radius-lg); position: relative; overflow: hidden;">
            <div style="position: absolute; top: 50px; left: 50px; width: 100px; height: 100px; border-radius: 50%; background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 100%);"></div>
            
            <h2 style="font-size: 2.5rem; color: white; margin-bottom: 1rem;">Become a Tenants</h2>
            <p style="color: #94a3b8; margin-bottom: 2rem;">Join our community and experience the best in modern living. Contact us today to find your perfect home.</p>
            <a href="#" class="btn btn-primary">Get in touch</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
