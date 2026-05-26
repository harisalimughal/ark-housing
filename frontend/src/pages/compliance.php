<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'Compliance';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> Compliance';
$hero_image = '/public/assets/images/properties/uk-houses/uk-4.jpg';
require_once __DIR__ . '/../includes/hero.php';
?>
<style>
    .compliance-card {
        width: 100%;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 24.7px;
        padding: 40px;
        display: flex;
        flex-direction: column;
        transition: all 0.3s ease;
        cursor: pointer;
        position: relative;
    }

    .compliance-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    /* Active State (Documents Style) */
    .compliance-card.active {
        background: #ebf5ff;
        border: 1.5px solid #1a3a63;
        box-shadow: 0 20px 40px rgba(26, 58, 99, 0.1);
        transform: translateY(-5px);
    }

    .compliance-card h3 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 28px;
        color: #1a1a2e;
        margin: 0;
    }

    .compliance-card .item-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .compliance-card .check-box {
        width: 28px;
        height: 28px;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    /* Primary check (always green) */
    .compliance-card .check-box.primary {
        background-color: #22c55e;
        border: none;
    }

    /* Secondary check (changes with state) */
    .compliance-card .check-box.secondary {
        border: 1.5px solid #cbd5e1;
    }

    .compliance-card.active .check-box.secondary {
        border-color: #1a3a63;
    }

    .compliance-card .check-box.secondary svg {
        stroke: #64748b;
    }

    .compliance-card.active .check-box.secondary svg {
        stroke: #1a3a63;
    }

    .compliance-card .item-text {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        color: #64748b;
        transition: color 0.3s ease;
    }

    .compliance-card.active .item-text {
        color: #1a1a2e;
    }

    .compliance-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        justify-items: center;
    }

    @media (max-width: 768px) {
        .compliance-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        .compliance-card {
            padding: 24px;
        }
        .compliance-card h3 {
            font-size: 20px !important;
        }
        .compliance-card .item-text {
            font-size: 14px !important;
        }
    }
</style>

<section style="padding: 100px 0; background-color: #ffffff;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <!-- Section Header -->
        <div style="text-align: center; margin-bottom: 70px;">
            <h2 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 42px; color: #1a1a2e; margin-bottom: 20px;">Compliance & HMO Specifications</h2>
            <p style="font-family: 'Poppins', sans-serif; color: #64748b; font-size: 16px; max-width: 600px; margin: 0 auto; line-height: 1.6;">
                ARK Housing Group adheres to the strictest standards to ensure safety and comfort. Below is our standard checklist for properties.
            </p>
        </div>

        <!-- Compliance Grid -->
        <div class="compliance-grid">
            
            <!-- Card 1: Fire Safety -->
            <div class="compliance-card pop-card" onclick="setActiveCard(this)">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 35px;">
                    <div style="width: 24px; height: 24px; display: flex; align-items: center; justify-content: center;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a1a2e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
                    </div>
                    <h3>Fire Safety</h3>
                </div>
                
                <div class="item-list">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div class="check-box primary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span class="item-text" style="color: #1a1a2e;">Fire Door Specifications (FD30S)</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div class="check-box secondary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span class="item-text">Emergency Escape Requirements</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div class="check-box secondary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span class="item-text">Interlinked Smoke Alarm</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div class="check-box secondary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span class="item-text">Emergency Lighting</span>
                    </div>
                </div>
            </div>

            <!-- Card 2: Documents (Active by default) -->
            <div class="compliance-card active pop-card" onclick="setActiveCard(this)">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 35px;">
                    <div style="width: 24px; height: 24px; display: flex; align-items: center; justify-content: center;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a1a2e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
                    </div>
                    <h3>Documents</h3>
                </div>
                
                <div class="item-list">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div class="check-box primary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span class="item-text" style="color: #1a1a2e;">Gas Safety Certificate (CP12)</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div class="check-box secondary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span class="item-text">EICR (Electric)</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div class="check-box secondary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span class="item-text">EPC Rating (C or above preferred)</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div class="check-box secondary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span class="item-text">Floor Plans</span>
                    </div>
                </div>
            </div>

            <!-- Card 3: Room Standards -->
            <div class="compliance-card pop-card" onclick="setActiveCard(this)">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 35px;">
                    <div style="width: 24px; height: 24px; display: flex; align-items: center; justify-content: center;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a1a2e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
                    </div>
                    <h3>Room Standards</h3>
                </div>
                
                <div class="item-list">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div class="check-box primary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span class="item-text" style="color: #1a1a2e;">Minimum Bedroom Sizes (6.51sqm)</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div class="check-box secondary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span class="item-text">Adequate Natural Lighting</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div class="check-box secondary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span class="item-text">Sufficient Electrical Sockets</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div class="check-box secondary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span class="item-text">Ventilation</span>
                    </div>
                </div>
            </div>

            <!-- Card 4: Communal Areas -->
            <div class="compliance-card pop-card" onclick="setActiveCard(this)">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 35px;">
                    <div style="width: 24px; height: 24px; display: flex; align-items: center; justify-content: center;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a1a2e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
                    </div>
                    <h3>Communal Areas</h3>
                </div>
                
                <div class="item-list">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div class="check-box primary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span class="item-text" style="color: #1a1a2e;">Clear Hallways (No Obstructions)</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div class="check-box secondary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span class="item-text">Clean & Maintained Decor</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div class="check-box secondary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span class="item-text">Displayed Management Info</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    function setActiveCard(card) {
        // Remove active class from all cards
        document.querySelectorAll('.compliance-card').forEach(c => {
            c.classList.remove('active');
        });
        // Add active class to clicked card
        card.classList.add('active');
    }
</script>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>



