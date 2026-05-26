<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'Landlord Services';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> Landlords';
$hero_image = '/public/assets/images/properties/uk-houses/uk-6.jpg';
require_once __DIR__ . '/../includes/hero.php';
?>

<style>
    @media (max-width: 768px) {
        /* Primary intro section */
        .landlord-intro {
            padding: 50px 20px !important;
        }
        .landlord-intro h1 {
            font-size: 1.65rem !important;
        }
        .landlord-intro p {
            font-size: 0.95rem !important;
            margin-top: 14px !important;
        }

        /* How it works + stress section */
        .landlord-split {
            flex-direction: column !important;
            gap: 32px !important;
            padding: 60px 20px !important;
        }
        .landlord-split-reverse {
            flex-direction: column !important;
            gap: 32px !important;
            padding: 60px 20px 0 !important;
        }
        .landlord-video,
        .landlord-image {
            flex: none !important;
            width: 100% !important;
            height: 240px !important;
            border-radius: 20px !important;
        }
        .landlord-text h2 {
            font-size: 1.4rem !important;
        }
        .landlord-text p {
            font-size: 0.95rem !important;
        }
        .landlord-text a {
            width: 100% !important;
            justify-content: center;
        }
    }
</style>

<!-- Primary Section -->
<section class="landlord-intro" style="width: 100%; max-width: 1440px; margin: 0 auto; padding: 80px 40px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px; background-color: #ffffff;">
    <h1 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 2.5rem; line-height: 1.2; text-align: center; color: #1a1a2e; margin: 0; padding: 0;">
        Unlocking Opportunities for Landlords
    </h1>
    <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 1.1rem; line-height: 1.6; text-align: center; color: #64748b; margin: 20px 0 0 0; max-width: 900px;">
        At Ark Housing, we understand that landlords have diverse needs, from property sales to Serviced Accommodation (SA) and House in Multiple Occupation (HMO) management. Our mission is to be your trusted partner, offering tailored solutions that cater to your specific goals. Whether you're looking to sell a property, explore the SA market, or maximize your returns through efficient HMO management, Ark Housing provides you with the expertise, support, and resources you need to unlock opportunities and achieve success in the real estate industry. Discover the possibilities that await you with Ark Housing as your dedicated partner.
    </p>
</section>

<!-- How It Works Section -->
<section style="padding: 100px 0; background-color: #ffffff;">
    <div class="container landlord-split" style="display: flex; align-items: center; gap: 80px;">
        <!-- Left: Content -->
        <div class="landlord-text" style="flex: 1;">
            <h2 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 2rem; line-height: 1.2; color: #1a1a2e; margin-bottom: 24px;">How Does Ark Housing Work?</h2>
            <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 16px; line-height: 26px; color: #64748b; margin-bottom: 40px;">
                If you're looking for a property management company in Birmingham that can handle pandemics, unforeseeable challenges, and a nice bunch of honest hard-working individuals, then you've come to the right place. We guarantee your rent by subletting your property, either as short-term letting to those who are renovating their homes, looking for a short break in Birmingham or by turning it into HMO/Support Accommodation.
            </p>
            <a href="/contact.php" style="display: inline-flex; align-items: center; justify-content: center; width: 179px; height: 49px; background-color: #22c55e; color: white; border-radius: 50px; text-decoration: none; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; transition: background-color 0.3s ease;">
                Get in Touch
            </a>
        </div>

        <!-- Right: Video -->
        <div id="video-container" class="landlord-video" style="flex: 0 0 545px; height: 423px; position: relative; border-radius: 30px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1); cursor: pointer; background-color: #000;">
            <!-- YouTube Thumbnail as Poster -->
            <img src="/public/assets/images/properties/uk-houses/uk-4.jpg" alt="UK Property" style="width: 100%; height: 100%; object-fit: cover;">
            
            <!-- Custom Overlay Play Button -->
            <img id="play-button-overlay" src="/public/assets/images/icons/playButton.svg" alt="Play Video" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 64px; height: 64px; transition: all 0.3s ease;">
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const videoContainer = document.getElementById('video-container');
    const videoId = 'te4XkG9G_M8'; // Using the same video ID as guaranteed rent

    videoContainer.addEventListener('click', function() {
        // Create the iframe
        const iframe = document.createElement('iframe');
        iframe.setAttribute('src', `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`);
        iframe.setAttribute('frameborder', '0');
        iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
        iframe.setAttribute('allowfullscreen', 'true');
        iframe.style.width = '100%';
        iframe.style.height = '100%';
        iframe.style.borderRadius = '30px';

        // Clear container and append iframe
        videoContainer.innerHTML = '';
        videoContainer.appendChild(iframe);
    });

    // Hover effect for play button
    videoContainer.addEventListener('mouseenter', () => {
        const playBtn = document.getElementById('play-button-overlay');
        if (playBtn) playBtn.style.transform = 'translate(-50%, -50%) scale(1.1)';
    });
    videoContainer.addEventListener('mouseleave', () => {
        const playBtn = document.getElementById('play-button-overlay');
        if (playBtn) playBtn.style.transform = 'translate(-50%, -50%) scale(1)';
    });
});
</script>

<!-- Landlord Stress Solution Section -->
<section style="padding: 100px 0; background-color: #ffffff; padding-top: 0;">
    <div class="container landlord-split-reverse" style="display: flex; align-items: center; gap: 80px; flex-direction: row;">
        <!-- Left: Image -->
        <div class="landlord-image" style="flex: 0 0 545px; height: 423px; border-radius: 30px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
            <img src="/public/assets/images/properties/uk-houses/uk-11.jpg" alt="Ark Housing Properties" style="width: 100%; height: 100%; object-fit: cover;">
        </div>

        <!-- Right: Content -->
        <div class="landlord-text" style="flex: 1;">
            <h2 style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 2rem; line-height: 1.2; color: #1a1a2e; margin-bottom: 24px;">Void periods, viewings and tenants, oh my!</h2>
            <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 16px; line-height: 26px; color: #64748b; margin-bottom: 40px;">
                We know how exhausting it is to be a landlord. You have to deal with all the stress of finding a tenant and then making sure they pay on time every single month. And if they don't pay, you have to deal with the stress of finding a new one—and starting all over again. We have the solution for you. Ark Housing is the answer to all of your property letting issues. By offering guaranteed rent for up to five years and a refurbishment of your property if required we can provide a hassle-free service to landlords. We are one of the most trusted property management company.
            </p>
            <a href="/tenant-inquiry" style="display: inline-flex; align-items: center; justify-content: center; width: 179px; height: 49px; background-color: #22c55e; color: white; border-radius: 50px; text-decoration: none; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px; transition: background-color 0.3s ease;">
                Tenants Enquiry
            </a>
        </div>
    </div>
</section>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>



