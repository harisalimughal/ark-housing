<?php
$hero_title = "Raising Standards in <br>Supported Living";
?>

<style>
.who-we-are {
    padding: 80px 0 20px;
    background: #ffffff;
    font-family: 'Poppins', sans-serif;
}

.who-we-are .container {
    max-width: 1280px;
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 40px;
    align-items: start;
    margin: 0 auto;
    padding: 0 20px;
}

/* LEFT SIDE */
.who-text {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

.section-subtitle {
    color: #48A7DD;
    font-weight: 500;
    letter-spacing: 0.15em;
    font-size: 14px;
    text-transform: uppercase;
    margin-bottom: 0.75rem;
}

.who-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 2rem;
    line-height: 1.2;
    letter-spacing: -0.01em;
    color: #000;
    margin-bottom: 24px;
    max-width: 600px;
}

.who-description {
    color: #64748b;
    line-height: 1.6;
    font-size: 17px;
    margin-bottom: 36px;
    max-width: 640px; /* Adjusted to try and force 4 lines */
}

.who-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.who-list li {
    display: flex;
    align-items: center;
    gap: 14px;
    font-weight: 600;
    font-size: 17px;
    color: #1a1a2e;
    white-space: nowrap; /* Forces one line */
}

.who-list img {
    width: 24px;
    flex-shrink: 0;
}

/* RIGHT SIDE (IMAGES) */
.who-images-wrapper {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}

/* This spacer pushes images down to align with the h2 title */
.who-images-spacer {
    /* Height of subtitle (font ~13px + margin 14px) = ~27px */
    height: 27px;
}

.who-images {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 222px 222px;
    gap: 16px;
    width: 100%;
    max-width: 536px;
}

.who-images img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center top;
    border-radius: 20px;
    display: block;
}

/* Large image spans both rows — LEFT column */
.img-large {
    grid-column: 1;
    grid-row: 1 / span 2;
    height: 460px !important; /* 222 + 222 + 16 gap */
    object-position: center center;
}

/* Small images — RIGHT column */
.img-small-1 {
    grid-column: 2;
    grid-row: 1;
}

.img-small-2 {
    grid-column: 2;
    grid-row: 2;
}

/* RESPONSIVE */
@media (max-width: 992px) {
    .who-we-are .container {
        grid-template-columns: 1fr;
        gap: 40px;
    }

    .who-images-spacer {
        display: none;
    }

    .who-images {
        grid-template-rows: 240px 240px;
    }

    .who-title {
        font-size: 32px;
    }
}

@media (max-width: 576px) {
    .who-images {
        grid-template-columns: 1fr;
        grid-template-rows: 280px 200px 200px;
        max-width: 100%;
    }

    .img-large {
        grid-column: 1;
        grid-row: 1;
    }

    .img-small-1 {
        grid-column: 1;
        grid-row: 2;
    }

    .img-small-2 {
        grid-column: 1;
        grid-row: 3;
    }
}
</style>

<section class="who-we-are">
    <div class="container">

        <!-- LEFT: TEXT -->
        <div class="who-text">
            <p class="section-subtitle">WHO ARE WE</p>

            <h2 class="who-title">
                <?php echo $hero_title; ?>
            </h2>

            <p class="who-description">
                We go beyond basic compliance to ensure every property feels like a home.
                Our tenant-first approach combined with rigorous management protocols makes
                us the preferred partner for local authorities and landlords.
            </p>

            <ul class="who-list">
                <li>
                    <img src="/public/assets/images/icons/home-tick.svg" alt="">
                    Compliance-led housing model
                </li>
                <li>
                    <img src="/public/assets/images/icons/home-tick.svg" alt="">
                    Trusted by partners & councils
                </li>
                <li>
                    <img src="/public/assets/images/icons/home-tick.svg" alt="">
                    End-to-end management
                </li>
                <li>
                    <img src="/public/assets/images/icons/home-tick.svg" alt="">
                    Tenant-first approach
                </li>
            </ul>
        </div>

        <!-- RIGHT: IMAGES -->
        <div class="who-images-wrapper">
            <!-- Spacer to push images down, aligned with h2 not subtitle -->
            <div class="who-images-spacer"></div>

            <div class="who-images">
                <img src="/public/assets/images/properties/home-center2.jpg" class="img-large" alt="Property exterior">
                <img src="/public/assets/images/properties/who-are-we-p2.svg" class="img-small-1" alt="Property bedroom">
                <img src="/public/assets/images/properties/who-are-we-p3.svg" class="img-small-2" alt="Property living room">
            </div>
        </div>

    </div>
</section>