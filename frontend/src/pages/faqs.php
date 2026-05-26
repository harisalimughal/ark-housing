<?php
require_once __DIR__ . '/../includes/header.php';
?>

<?php
$hero_title = 'Frequently Asked Questions';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> FAQs';
$hero_image = '/public/assets/images/properties/uk-houses/uk-10.jpg';
require_once __DIR__ . '/../includes/hero.php';
?>

<!-- FAQ Section -->
<section style="padding: 100px 0; background-color: #ffffff;">
    <div class="container">
        <!-- Header -->
        <div style="text-align: center; margin-bottom: 60px;">
            <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 48px; color: #1a1a2e; margin-bottom: 16px;">Frequently Asked Questions</h1>
            <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 18px; color: #64748b; max-width: 600px; margin: 0 auto; line-height: 1.6;">
                Find quick answers about our transitional housing, support services, and how to get started.
            </p>
        </div>

        <!-- Accordion Container -->
        <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 16px;">
            
            <!-- FAQ Item 1 -->
            <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 12px; transition: all 0.3s ease; overflow: hidden;">
                <button class="faq-toggle" style="width: 100%; padding: 24px 32px; display: flex; align-items: center; justify-content: space-between; background: none; border: none; cursor: pointer; text-align: left; outline: none;">
                    <span style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 18px; color: #1a1a2e;">Who is eligible for transitional housing?</span>
                    <span class="faq-icon" style="font-size: 24px; color: #64748b; transition: transform 0.3s ease;">+</span>
                </button>
                <div class="faq-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
                    <div style="padding: 0 32px 24px 32px;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 15px; line-height: 1.6; color: #64748b; margin: 0;">
                            Individuals who need short-term support to move towards independent living can apply, based on basic eligibility criteria.
                        </p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 12px; transition: all 0.3s ease; overflow: hidden;">
                <button class="faq-toggle" style="width: 100%; padding: 24px 32px; display: flex; align-items: center; justify-content: space-between; background: none; border: none; cursor: pointer; text-align: left; outline: none;">
                    <span style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 18px; color: #1a1a2e;">How long can I stay in transitional housing?</span>
                    <span class="faq-icon" style="font-size: 24px; color: #64748b; transition: transform 0.3s ease;">+</span>
                </button>
                <div class="faq-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
                    <div style="padding: 0 32px 24px 32px;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 15px; line-height: 1.6; color: #64748b; margin: 0;">
                            The duration of stay varies depending on individual needs and progress toward independence, typically ranging from a few months up to two years.
                        </p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 12px; transition: all 0.3s ease; overflow: hidden;">
                <button class="faq-toggle" style="width: 100%; padding: 24px 32px; display: flex; align-items: center; justify-content: space-between; background: none; border: none; cursor: pointer; text-align: left; outline: none;">
                    <span style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 18px; color: #1a1a2e;">What kind of support is provided?</span>
                    <span class="faq-icon" style="font-size: 24px; color: #64748b; transition: transform 0.3s ease;">+</span>
                </button>
                <div class="faq-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
                    <div style="padding: 0 32px 24px 32px;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 15px; line-height: 1.6; color: #64748b; margin: 0;">
                            We provide light-touch support including tenancy training, budgeting assistance, and help with accessing long-term housing options and employment services.
                        </p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 12px; transition: all 0.3s ease; overflow: hidden;">
                <button class="faq-toggle" style="width: 100%; padding: 24px 32px; display: flex; align-items: center; justify-content: space-between; background: none; border: none; cursor: pointer; text-align: left; outline: none;">
                    <span style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 18px; color: #1a1a2e;">Is the housing fully furnished?</span>
                    <span class="faq-icon" style="font-size: 24px; color: #64748b; transition: transform 0.3s ease;">+</span>
                </button>
                <div class="faq-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
                    <div style="padding: 0 32px 24px 32px;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 15px; line-height: 1.6; color: #64748b; margin: 0;">
                            Yes, all our transitional housing properties are fully furnished and equipped with essential amenities to provide a comfortable and safe living environment.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.querySelectorAll('.faq-toggle').forEach(button => {
    button.addEventListener('click', () => {
        const item = button.parentElement;
        const content = button.nextElementSibling;
        const icon = button.querySelector('.faq-icon');
        
        // Toggle active state
        const isOpen = item.classList.contains('active');
        
        // Close all other items
        document.querySelectorAll('.faq-item').forEach(otherItem => {
            otherItem.classList.remove('active');
            otherItem.style.borderColor = '#e2e8f0';
            otherItem.querySelector('.faq-content').style.maxHeight = '0';
            otherItem.querySelector('.faq-icon').innerText = '+';
            otherItem.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
        });
        
        if (!isOpen) {
            item.classList.add('active');
            item.style.borderColor = '#1a1a2e';
            content.style.maxHeight = content.scrollHeight + 'px';
            icon.innerText = '−';
            icon.style.transform = 'rotate(180deg)';
        }
    });
});
</script>

<?php 
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php'; 
?>




