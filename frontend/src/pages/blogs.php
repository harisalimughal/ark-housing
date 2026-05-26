<?php
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../data/blogs.php';

$hero_title    = 'Blogs';
$hero_subtitle = 'Home <span style="opacity: 0.7;">&nbsp;>&nbsp;</span> Blogs';
$hero_image = '/public/assets/images/properties/uk-houses/uk-12.jpg';
require_once __DIR__ . '/../includes/hero.php';

$all_blogs = array_merge($blogs, $blogs_slide2, $blogs_slide3);
?>

<section style="padding: 80px 0 100px; background: #fff;">
    <div class="container">

        <div style="text-align: center; margin-bottom: 56px;">
            <span class="section-subtitle">LATEST ARTICLES</span>
            <h2 class="section-title">News &amp; Insights</h2>
            <p style="font-family:'Poppins',sans-serif; font-size:17px; color:#64748b; max-width:520px; margin:16px auto 0; line-height:1.6;">
                Housing advice, industry updates, and stories from Ark Housing Group.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px;">
            <?php foreach ($all_blogs as $blog): ?>
            <article class="pop-card" style="background:#fff; border-radius:20px; overflow:hidden; box-shadow:0 4px 24px rgba(0,0,0,0.07); display:flex; flex-direction:column; transition:transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="overflow:hidden; height:220px;">
                    <img src="<?php echo htmlspecialchars($blog['image']); ?>"
                         alt="<?php echo htmlspecialchars($blog['title']); ?>"
                         style="width:100%; height:100%; object-fit:cover; display:block; transition:transform 0.4s ease;">
                </div>
                <div style="padding:24px; flex:1; display:flex; flex-direction:column;">
                    <div style="display:flex; align-items:center; gap:10px; margin-bottom:14px;">
                        <div style="background:#17386B; color:#fff; border-radius:10px; padding:6px 12px; text-align:center; line-height:1.2; flex-shrink:0;">
                            <div style="font-family:'Poppins',sans-serif; font-weight:700; font-size:18px;"><?php echo htmlspecialchars($blog['day']); ?></div>
                            <div style="font-family:'Poppins',sans-serif; font-size:10px; opacity:0.85;"><?php echo htmlspecialchars($blog['day_name']); ?></div>
                        </div>
                        <span style="font-family:'Poppins',sans-serif; font-size:13px; color:#94a3b8;"><?php echo htmlspecialchars($blog['date']); ?></span>
                    </div>
                    <h3 style="font-family:'Poppins',sans-serif; font-weight:600; font-size:16px; color:#1a1a2e; margin:0 0 10px; line-height:1.4;">
                        <?php echo htmlspecialchars($blog['title']); ?>
                    </h3>
                    <p style="font-family:'Poppins',sans-serif; font-size:13px; color:#64748b; line-height:1.6; margin:0 0 20px; flex:1;">
                        <?php echo htmlspecialchars($blog['excerpt']); ?>
                    </p>
                    <a href="<?php echo htmlspecialchars($blog['link']); ?>"
                       style="font-family:'Poppins',sans-serif; font-size:13px; font-weight:600; color:#17386B; text-decoration:none; display:inline-flex; align-items:center; gap:5px; margin-top:auto; transition:gap 0.2s ease;">
                        Read More
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<style>
    article:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.1) !important;
    }
    article:hover img {
        transform: scale(1.05);
    }
    article:hover a {
        gap: 9px !important;
    }
    @media (max-width: 900px) {
        .container > div[style*="grid-template-columns: repeat(3"] {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }
    @media (max-width: 560px) {
        .container > div[style*="grid-template-columns: repeat(3"] {
            grid-template-columns: 1fr !important;
        }
    }
</style>

<?php
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php';
?>



