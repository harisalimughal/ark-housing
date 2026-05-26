<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'FAQs';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> FAQs';
$hero_image = '/public/assets/images/properties/uk-houses/uk-11.jpg';
require_once __DIR__ . '/../includes/hero.php';
?>

<style>
    /* ── Category Cards (compliance pattern) ── */
    .faq-cat-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
        max-width: 980px;
        margin: 0 auto;
    }
    .faq-cat-card {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 24px;
        padding: 36px 28px 28px;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        position: relative;
        user-select: none;
        outline: none;
        transition: all 0.3s ease;
    }
    .faq-cat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
    .faq-cat-card.active {
        background: #ebf5ff;
        border: 1.5px solid #1a3a63;
        box-shadow: 0 20px 40px rgba(26,58,99,0.1);
        transform: translateY(-5px);
    }
    .faq-cat-card:focus-visible { box-shadow: 0 0 0 3px rgba(26,58,99,0.25); }

    /* Downward notch on active card */
    .faq-cat-card::after {
        content: '';
        position: absolute;
        bottom: -14px; left: 50%;
        transform: translateX(-50%);
        width: 0; height: 0;
        border-left: 12px solid transparent;
        border-right: 12px solid transparent;
        border-top: 12px solid transparent;
        transition: border-top-color 0.3s ease;
    }
    .faq-cat-card.active::after { border-top-color: #1a3a63; }

    /* Icon box */
    .faq-cat-icon {
        width: 45px; height: 45px;
        background: #1a3a63;
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        margin-bottom: 20px;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }
    .faq-cat-card.active .faq-cat-icon { background: #1a3a63; }

    .faq-cat-card h3 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600; font-size: 20px;
        color: #1a1a2e; margin: 0 0 8px;
    }
    .faq-cat-card p {
        font-family: 'Poppins', sans-serif;
        font-size: 14px; color: #64748b;
        line-height: 1.55; margin: 0 0 20px;
        flex: 1;
    }

    /* CTA row */
    .faq-cat-cta {
        font-family: 'Poppins', sans-serif;
        font-size: 13px; font-weight: 600;
        color: #1a3a63;
        display: flex; align-items: center; gap: 5px;
        margin-top: auto;
        transition: gap 0.2s ease;
    }
    .faq-cat-card:hover .faq-cat-cta { gap: 9px; }
    .faq-cat-card.active .faq-cat-cta-text-default { display: none; }
    .faq-cat-cta-text-active { display: none; }
    .faq-cat-card.active .faq-cat-cta-text-active { display: inline; }

    /* ── FAQ Panels ── */
    .faq-panel { display: none; animation: faqFadeIn 0.3s ease forwards; }
    .faq-panel.active { display: block; }
    @keyframes faqFadeIn {
        from { opacity: 0; transform: translateY(16px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* Panel header */
    .faq-panel-header {
        display: flex; align-items: center; gap: 18px;
        padding: 28px 32px;
        background: #ebf5ff;
        border: 1.5px solid #1a3a63;
        border-radius: 18px;
        margin-bottom: 28px;
    }
    .faq-panel-header-icon {
        width: 48px; height: 48px; border-radius: 12px;
        background: #1a3a63;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }
    .faq-panel-header h2 {
        font-family: 'Poppins', sans-serif;
        font-weight: 700; font-size: 26px;
        color: #1a3a63; margin: 0;
    }
    .faq-panel-header p {
        font-family: 'Poppins', sans-serif;
        font-size: 14px; color: #64748b;
        margin: 4px 0 0;
    }

    /* Accordion items */
    .faq-item {
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    .faq-item.active {
        border: 1.5px solid #1a3a63;
        box-shadow: 0 10px 30px rgba(26,58,99,0.05);
    }
    .faq-toggle {
        width: 100%; padding: 22px 28px;
        display: flex; align-items: center; justify-content: space-between;
        background: none; border: none; cursor: pointer;
        text-align: left; outline: none;
        gap: 16px;
    }
    .faq-toggle span:first-child {
        font-family: 'Poppins', sans-serif;
        font-weight: 600; font-size: 16px; color: #1a1a2e;
        flex: 1;
    }
    .faq-icon {
        font-size: 24px; color: #64748b;
        transition: transform 0.3s ease;
        flex-shrink: 0;
    }
    .faq-content { max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out; }
    .faq-content-inner {
        padding: 0 28px 22px;
        font-family: 'Poppins', sans-serif;
        font-size: 15px; line-height: 1.65; color: #64748b;
    }

    /* ── Responsive ── */
    @media (max-width: 768px) {
        .faq-cat-grid { grid-template-columns: 1fr; gap: 14px; }
        .faq-cat-card::after { display: none; }
        .faq-cat-card { padding: 24px 22px; flex-direction: row; align-items: flex-start; gap: 18px; }
        .faq-cat-icon { margin-bottom: 0; width: 42px; height: 42px; }
        .faq-cat-card-body { display: flex; flex-direction: column; flex: 1; }
        .faq-panel-header { padding: 20px 22px; }
        .faq-panel-header h2 { font-size: 20px; }
        .faq-toggle { padding: 18px 20px; }
        .faq-toggle span:first-child { font-size: 15px; }
        .faq-content-inner { padding: 0 20px 18px; }
    }
    @media (max-width: 480px) {
        .faq-cat-card { flex-direction: column; }
        .faq-cat-icon { margin-bottom: 14px; }
    }
    @media (max-width: 480px) {
        .faq-cat-card { flex-direction: column; }
        .faq-cat-icon { margin-bottom: 14px; }
    }
</style>

<!-- Category Selector -->
<section style="padding: 80px 0 56px; background: #fff;">
    <div class="container">

        <div style="text-align: center; margin-bottom: 52px;">
            <h1 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:42px;color:#1a1a2e;margin-bottom:14px;">Frequently Asked Questions</h1>
            <p style="font-family:'Poppins',sans-serif;font-size:17px;color:#64748b;max-width:500px;margin:0 auto;line-height:1.6;">
                Select your category to find answers tailored to you.
            </p>
        </div>

        <div class="faq-cat-grid">

            <!-- Landlords -->
            <div class="faq-cat-card active pop-card" data-cat="landlords" tabindex="0" role="button" aria-pressed="true" aria-controls="panel-landlords">
                <div class="faq-cat-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                </div>
                <div class="faq-cat-card-body">
                    <h3>Landlords</h3>
                    <p>Guaranteed rent, property management, maintenance obligations, and lease agreements.</p>
                    <div class="faq-cat-cta">
                        <span class="faq-cat-cta-text-default">View questions</span>
                        <span class="faq-cat-cta-text-active">Currently viewing</span>
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </div>
                </div>
            </div>

            <!-- Tenants -->
            <div class="faq-cat-card pop-card" data-cat="tenants" tabindex="0" role="button" aria-pressed="false" aria-controls="panel-tenants">
                <div class="faq-cat-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
                <div class="faq-cat-card-body">
                    <h3>Tenants</h3>
                    <p>Applying for housing, rent payments, support services, and day-to-day living.</p>
                    <div class="faq-cat-cta">
                        <span class="faq-cat-cta-text-default">View questions</span>
                        <span class="faq-cat-cta-text-active">Currently viewing</span>
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </div>
                </div>
            </div>

            <!-- Partners -->
            <div class="faq-cat-card pop-card" data-cat="partners" tabindex="0" role="button" aria-pressed="false" aria-controls="panel-partners">
                <div class="faq-cat-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <div class="faq-cat-card-body">
                    <h3>For Partners</h3>
                    <p>Referrals, compliance standards, funding structures, and onboarding for organisations.</p>
                    <div class="faq-cat-cta">
                        <span class="faq-cat-cta-text-default">View questions</span>
                        <span class="faq-cat-cta-text-active">Currently viewing</span>
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FAQ Panels -->
<section id="faq-panels" style="padding: 0 0 100px; background: #fff;">
    <div class="container" style="max-width: 860px;">

        <?php
        $panels = [
            'landlords' => [
                'color' => '#17386B',
                'gradient' => 'linear-gradient(135deg,#17386B 0%,#1e4d8c 100%)',
                'title' => 'Landlord FAQs',
                'sub'   => 'Everything property owners need to know about working with Ark Housing.',
                'icon'  => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>',
                'qs'    => [
                    ['How does guaranteed rent work?','Ark Housing leases your property directly and pays you a fixed monthly rent regardless of whether the property is occupied. You receive a guaranteed income on the agreed date every month for the full duration of the agreement — no void periods, no chasing tenants, no surprises.'],
                    ['What types of properties do you manage?','We manage a range of residential properties including HMOs, single-let properties, and larger units suitable for supported or transitional accommodation. Properties ideally have a minimum of 3 bedrooms, though we consider all cases individually.'],
                    ['Are there void periods?','No. Once the management agreement is signed, rent is paid to you every month regardless of occupancy. You never lose income due to an empty room or a departed tenant — we take on the tenancy risk entirely.'],
                    ['What is included in your property management service?','Our full management service covers tenant sourcing and vetting, all tenancy administration, day-to-day management, maintenance coordination, regular inspections, compliance management (gas safety, EICR, fire safety), and all tenant-facing communications.'],
                    ['Who is responsible for maintenance and repairs?','Ark Housing handles all day-to-day maintenance and minor repairs at our cost. Major structural works remain the landlord\'s responsibility. We notify you promptly of any significant issue and seek approval before any major spend.'],
                    ['Will my property need to be refurbished?','If refurbishment is needed to meet our standards or HMO licensing requirements, we can carry out improvements at our expense in exchange for a slightly reduced initial rent or an extended agreement term — no direct cost to you.'],
                    ['How long are the management agreements?','Our agreements typically run for 3 to 5 years. Longer agreements allow greater improvements and more competitive rental rates. We are flexible and will discuss a term that suits your circumstances.'],
                    ['Can I access or inspect my property during the agreement?','Yes, with appropriate notice as required by law. We also conduct quarterly inspections and provide you with written condition reports. Full transparency about your property is maintained throughout.'],
                    ['What happens at the end of the agreement?','You receive your property back clean and well-maintained with a full handover report, keys, and inventory records. If the arrangement has worked well, we are happy to renew and continue the partnership.'],
                    ['What areas does Ark Housing operate in?','We primarily operate across Birmingham and the wider West Midlands and are actively expanding. If your property is outside our current area, please get in touch as we may still be able to help.'],
                ],
            ],
            'tenants' => [
                'color' => '#22c55e',
                'gradient' => 'linear-gradient(135deg,#16a34a 0%,#22c55e 100%)',
                'title' => 'Tenant FAQs',
                'sub'   => 'Everything you need to know about living with Ark Housing.',
                'icon'  => '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>',
                'qs'    => [
                    ['How do I apply for housing with Ark Housing?','Complete our Tenant Inquiry Form on this website or contact us by phone or email. Once we receive your application our team will review it and get in touch within 2–3 working days to discuss next steps.'],
                    ['What documents do I need to provide?','Typically a valid photo ID, proof of current address, a referral letter from a local authority or support worker where applicable, and relevant benefit or income documentation. Our team will guide you through exactly what is needed.'],
                    ['Are the properties fully furnished?','Yes. All Ark Housing properties are fully furnished with a bed, wardrobe, desk, and essential kitchen appliances. You can move in immediately without purchasing furniture.'],
                    ['Are bills included in my rent?','In most of our supported and transitional housing, gas, electricity, water, and Wi-Fi are included. Your tenancy agreement will confirm exactly what is covered — please review it carefully before signing.'],
                    ['How is rent paid and how often?','Rent is paid monthly by standing order or bank transfer. For tenants on housing benefit or Universal Credit, payments can often be directed straight to Ark Housing. Our team helps you set up the most convenient method at sign-up.'],
                    ['What happens if I have difficulty paying rent?','Contact us as early as possible. Our support team can assist with benefit claims, signpost you to debt advice services, and agree a manageable plan to prevent arrears from escalating.'],
                    ['What support services are available to me?','Support may include tenancy management guidance, budgeting coaching, mental health and wellbeing signposting, employment referrals, and help transitioning to long-term independent accommodation.'],
                    ['How do I report a maintenance issue?','Call our office, email us, or use the contact form. Non-urgent repairs are addressed within 5 working days. For emergencies such as gas leaks or loss of heating, call our emergency line for an immediate response.'],
                    ['Are pets allowed?','Pets are not permitted in our HMO and supported accommodation properties as they are shared environments. Guide or assistance dogs are considered — please inform us at the time of application.'],
                    ['How do I raise a complaint?','Raise a complaint with your support worker, in writing by email, or via our contact form. We acknowledge within 2 working days and aim to resolve within 10. You may escalate to an independent housing ombudsman if unsatisfied.'],
                ],
            ],
            'partners' => [
                'color' => '#3EA1D8',
                'gradient' => 'linear-gradient(135deg,#0369a1 0%,#3EA1D8 100%)',
                'title' => 'Partner FAQs',
                'sub'   => 'For local authorities, RSLs, charities and other organisations.',
                'icon'  => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
                'qs'    => [
                    ['What types of organisations can partner with Ark Housing?','We partner with local authorities, registered social landlords, housing associations, charities, NHS trusts, probation services, and other third-sector organisations that work with individuals in housing need.'],
                    ['How does the referral process work?','Once a partnership agreement is in place, referrals are submitted via our dedicated form or through your allocated liaison officer. We assess each referral within 24–48 hours and confirm placement availability as quickly as possible.'],
                    ['What housing standards do your properties meet?','All properties comply with HMO licensing requirements, fire safety (FD30S fire doors, interlinked smoke alarms), EICR certification, Gas Safety (CP12), and EPC C or above. Full documentation is available for partner audits.'],
                    ['How quickly can you accommodate urgent referrals?','For urgent referrals we can typically confirm placement and have a resident moved in within 24–72 hours, subject to availability and essential checks. Contact your liaison officer directly for emergency placements.'],
                    ['What support services are provided to residents?','Residents receive wraparound support including tenancy readiness coaching, budgeting support, wellbeing check-ins, signposting to mental health and substance misuse services, employment referrals, and move-on planning.'],
                    ['Which areas does Ark Housing operate in?','We operate primarily across the West Midlands with a strong base in Birmingham and are actively expanding. If you are outside our current coverage, reach out — we may still be able to support your area.'],
                    ['What documentation is required to establish a partnership?','We typically require organisation registration documents, your safeguarding and referral policies, a signed partnership agreement or SLA, and details of your designated referral contact.'],
                    ['How are residents\' welfare and progress monitored?','Each resident has a dedicated key worker who conducts regular check-ins and maintains a support plan. Progress reports can be shared with partner organisations subject to resident consent and GDPR compliance.'],
                    ['How is funding structured for partner placements?','Funding structures vary — payments may come from the referring authority, via housing benefit or Universal Credit, or through an agreed SLA. We work within local authority budget frameworks transparently.'],
                    ['How do we get started?','Complete our Partner Enquiry Form or contact us directly. One of our partnerships team will arrange an initial conversation and outline next steps. We aim to have new partnerships fully onboarded within 5–10 working days.'],
                ],
            ],
        ];
        foreach ($panels as $key => $data):
        ?>
        <div class="faq-panel <?php echo $key === 'landlords' ? 'active' : ''; ?>" id="panel-<?php echo $key; ?>">

            <div class="faq-panel-header" data-cat="<?php echo $key; ?>">
                <div class="faq-panel-header-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo $data['icon']; ?></svg>
                </div>
                <div>
                    <h2><?php echo $data['title']; ?></h2>
                    <p><?php echo $data['sub']; ?></p>
                </div>
            </div>

            <div style="display:flex;flex-direction:column;gap:12px;">
            <?php foreach ($data['qs'] as $q): ?>
                <div class="faq-item">
                    <button class="faq-toggle">
                        <span><?php echo htmlspecialchars($q[0]); ?></span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-content">
                        <div class="faq-content-inner"><?php echo htmlspecialchars($q[1]); ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>

        </div>
        <?php endforeach; ?>

    </div>
</section>

<script>
(function () {
    var cards  = document.querySelectorAll('.faq-cat-card');
    var panels = document.querySelectorAll('.faq-panel');

    function activateCategory(cat) {
        // Update cards
        cards.forEach(function(c) {
            var isActive = c.dataset.cat === cat;
            c.classList.toggle('active', isActive);
            c.setAttribute('aria-pressed', isActive ? 'true' : 'false');
        });
        // Swap panels
        panels.forEach(function(p) {
            var isActive = p.id === 'panel-' + cat;
            p.classList.toggle('active', isActive);
            // Reset all accordions in the newly hidden panels
            if (!isActive) {
                p.querySelectorAll('.faq-item.active').forEach(function(item) {
                    item.classList.remove('active');
                    item.querySelector('.faq-content').style.maxHeight = '0';
                    item.querySelector('.faq-icon').innerText = '+';
                    item.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
                });
            }
        });
        // Smooth scroll to panels section
        var panelSection = document.getElementById('faq-panels');
        if (panelSection) {
            var top = panelSection.getBoundingClientRect().top + window.scrollY - 90;
            window.scrollTo({ top: top, behavior: 'smooth' });
        }
    }

    cards.forEach(function(card) {
        card.addEventListener('click', function() { activateCategory(card.dataset.cat); });
        card.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                activateCategory(card.dataset.cat);
            }
        });
    });

    // Accordion
    document.querySelectorAll('.faq-toggle').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var item    = btn.parentElement;
            var content = btn.nextElementSibling;
            var icon    = btn.querySelector('.faq-icon');
            var isOpen  = item.classList.contains('active');

            // Close siblings in same panel
            var panel = item.closest('.faq-panel');
            panel.querySelectorAll('.faq-item.active').forEach(function(other) {
                other.classList.remove('active');
                other.querySelector('.faq-content').style.maxHeight = '0';
                other.querySelector('.faq-icon').innerText = '+';
                other.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
            });

            if (!isOpen) {
                item.classList.add('active');
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.innerText = '−';
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
}());
</script>

<?php
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php';
?>



