<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'Contact Us';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> Contact Us';
$hero_image = '/public/assets/images/properties/uk-houses/uk-13.jpg';
require_once __DIR__ . '/../includes/hero.php';
?>

<style>
    .contact-form-container {
        max-width: 1000px;
        margin: 100px auto;
        padding: 0 20px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-input {
        width: 100%;
        height: 80px;
        border: 1.5px solid #cbd5e1;
        border-radius: 12px;
        padding: 0 25px;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        color: #1a1a2e;
        background: #ffffff;
        transition: all 0.3s ease;
        outline: none;
    }

    .form-input:focus {
        border-color: #22c55e;
    }

    .form-textarea {
        width: 100%;
        min-height: 200px;
        border: 1.5px solid #cbd5e1;
        border-radius: 12px;
        padding: 25px;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        color: #1a1a2e;
        background: #ffffff;
        transition: all 0.3s ease;
        outline: none;
        resize: vertical;
        margin-bottom: 40px;
    }

    .form-textarea:focus {
        border-color: #22c55e;
    }

    .form-select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%2364748b' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 25px center;
        background-size: 20px;
    }

    .send-btn {
        display: block;
        width: 300px;
        height: 65px;
        margin: 0 auto;
        background-color: #48A7DD;
        color: #ffffff;
        border: none;
        border-radius: 12px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 18px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 10px 20px rgba(72, 167, 221, 0.2);
    }

    .send-btn:hover {
        background-color: #3b95c7;
        transform: translateY(-2px);
        box-shadow: 0 15px 30px rgba(72, 167, 221, 0.3);
    }

    .send-btn.sent {
        background-color: #22c55e;
        pointer-events: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        box-shadow: 0 10px 20px rgba(34, 197, 94, 0.2);
    }

    .contact-info-section {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 100px;
        border-top: 1px solid #f1f5f9;
        padding-top: 60px;
    }

    .info-card {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .info-icon {
        width: 48px;
        height: 48px;
        background-color: #1a3a63;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .info-content h4 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 15px;
        color: #1a1a2e;
        margin: 0 0 4px 0;
    }

    .info-content p {
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        color: #64748b;
        margin: 0;
        word-break: break-word;
    }

    @media (max-width: 768px) {
        .contact-form-container {
            margin: 40px auto;
        }
        .form-grid {
            grid-template-columns: 1fr;
        }
        .send-btn {
            width: 100%;
        }
        .contact-info-section {
            grid-template-columns: 1fr;
            gap: 20px;
            margin-top: 50px;
            padding-top: 40px;
        }
    }
</style>

<section class="contact-form-container">
    <form id="contact-form" onsubmit="handleContactSubmit(event)">
        <div class="form-grid">
            <input type="text" class="form-input" placeholder="Name" required>
            <input type="email" class="form-input" placeholder="Email" required>
            <input type="tel" class="form-input" placeholder="Contact Number" required>
            <input type="text" class="form-input" placeholder="Subject">
            <input type="text" class="form-input" placeholder="Postal Code">
            <select class="form-input form-select">
                <option value="" disabled selected>Area</option>
                <option value="london">London</option>
                <option value="manchester">Manchester</option>
                <option value="birmingham">Birmingham</option>
            </select>
        </div>
        <textarea class="form-textarea" placeholder="Message" required></textarea>
        
        <button type="submit" class="send-btn">Send</button>
    </form>

    <!-- Contact Info Blocks -->
    <div class="contact-info-section">
        <!-- Reservation -->
        <div class="info-card">
            <div class="info-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            </div>
            <div class="info-content">
                <h4>Reservation</h4>
                <p>+44 (0) 203 370 6999</p>
            </div>
        </div>

        <!-- Email Info -->
        <div class="info-card">
            <div class="info-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <div class="info-content">
                <h4>Email Info</h4>
                <p>info@arkhousing.co.uk</p>
            </div>
        </div>

        <!-- Address -->
        <div class="info-card">
            <div class="info-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
            <div class="info-content">
                <h4>Address</h4>
                <p>2728 Hickory Street, Salt Lake City, UT 84105</p>
            </div>
        </div>
    </div>
</section>

<script>
    function handleContactSubmit(event) {
        event.preventDefault();
        const btn = event.target.querySelector('button[type="submit"]');

        // Change button state
        btn.classList.add('sent');
        btn.innerHTML = `
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
            Sent
        `;
        window.showToast && window.showToast("Message sent! We'll respond shortly.");
        
        // Optional: Reset form after some time
        // setTimeout(() => {
        //     event.target.reset();
        //     btn.classList.remove('sent');
        //     btn.innerHTML = 'Send';
        // }, 3000);
    }
</script>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>



