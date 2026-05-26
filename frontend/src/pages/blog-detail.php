<?php
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../data/blogs.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$all_blogs = array_merge($blogs, $blogs_slide2, $blogs_slide3);

$current_blog = null;
foreach ($all_blogs as $b) {
    if ($b['id'] === $id) {
        $current_blog = $b;
        break;
    }
}

if (!$current_blog) {
    header('Location: /blogs.php');
    exit;
}

$hero_title    = htmlspecialchars($current_blog['title']);
$hero_subtitle = 'Home <span style="opacity:0.7;">&nbsp;>&nbsp;</span> <a href="/blogs.php" style="color:inherit;text-decoration:none;">Blogs</a> <span style="opacity:0.7;">&nbsp;>&nbsp;</span> ' . htmlspecialchars($current_blog['title']);
$hero_image    = $current_blog['hero_image'] ?? '/public/assets/images/properties/uk-houses/uk-1.jpg';
require_once __DIR__ . '/../includes/hero.php';

$related = array_values(array_filter($all_blogs, fn($b) => $b['id'] !== $id));
$related = array_slice($related, 0, 3);
?>

<style>
    .blog-article {
        max-width: 860px;
        margin: 0 auto;
        padding: 80px 24px 100px;
    }

    .blog-meta {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 16px;
        margin-bottom: 48px;
        padding-bottom: 28px;
        border-bottom: 1px solid #e2e8f0;
    }

    .blog-meta-badge {
        background: #17386B;
        color: #fff;
        border-radius: 50px;
        padding: 5px 16px;
        font-family: 'Poppins', sans-serif;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .blog-meta-item {
        display: flex;
        align-items: center;
        gap: 6px;
        font-family: 'Poppins', sans-serif;
        font-size: 13px;
        color: #94a3b8;
    }

    .blog-content p {
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        line-height: 1.85;
        color: #475569;
        margin-bottom: 24px;
    }

    .blog-content h2 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 22px;
        color: #1a1a2e;
        margin: 48px 0 20px;
        padding-left: 16px;
        border-left: 4px solid #22c55e;
    }

    .blog-content img {
        width: 100%;
        border-radius: 16px;
        margin: 36px 0;
        object-fit: cover;
        height: 400px;
        display: block;
    }

    .blog-content a {
        color: #17386B;
        font-weight: 600;
    }

    .blog-content strong {
        color: #1a1a2e;
    }

    .related-section {
        background: #f8fafc;
        padding: 80px 0 100px;
    }

    .related-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
        margin-top: 48px;
    }

    .related-card {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .related-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 36px rgba(0,0,0,0.1);
    }

    .related-card-img {
        height: 180px;
        overflow: hidden;
    }

    .related-card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
        display: block;
    }

    .related-card:hover .related-card-img img {
        transform: scale(1.05);
    }

    .related-card-body {
        padding: 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .share-bar {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 24px 0;
        margin-top: 48px;
        border-top: 1px solid #e2e8f0;
    }

    @media (max-width: 768px) {
        .blog-article { padding: 48px 20px 60px; }
        .blog-content h2 { font-size: 18px; }
        .blog-content p { font-size: 15px; }
        .blog-content img { height: 220px !important; }
        .related-grid { grid-template-columns: 1fr !important; }
    }

    @media (max-width: 560px) {
        .blog-meta { gap: 10px; }
    }
</style>

<!-- Article -->
<div class="blog-article">

    <!-- Meta bar -->
    <div class="blog-meta">
        <span class="blog-meta-badge"><?php echo htmlspecialchars($current_blog['category']); ?></span>
        <span class="blog-meta-item">
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            <?php echo htmlspecialchars($current_blog['date']); ?>
        </span>
        <span class="blog-meta-item">
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
            <?php echo htmlspecialchars($current_blog['author']); ?>
        </span>
        <span class="blog-meta-item">
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <?php echo htmlspecialchars($current_blog['read_time']); ?>
        </span>
    </div>

    <!-- Article content -->
    <div class="blog-content">
        <?php
        $content_file = __DIR__ . '/../data/blog-content/' . $id . '.php';
        if (file_exists($content_file)) {
            include $content_file;
        } else {
            echo '<p>Article content coming soon.</p>';
        }
        ?>
    </div>

    <!-- Share bar -->
    <div class="share-bar">
        <span style="font-family:'Poppins',sans-serif; font-size:13px; font-weight:600; color:#1a1a2e;">Share this article:</span>
        <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($current_blog['title']); ?>"
           target="_blank" rel="noopener"
           style="display:inline-flex; align-items:center; justify-content:center; width:36px; height:36px; border-radius:50%; background:#1da1f2; color:#fff; text-decoration:none; transition:opacity 0.2s;" title="Share on Twitter">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/></svg>
        </a>
        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode('https://arkhousing.co.uk/blog-detail.php?id=' . $id); ?>"
           target="_blank" rel="noopener"
           style="display:inline-flex; align-items:center; justify-content:center; width:36px; height:36px; border-radius:50%; background:#0077b5; color:#fff; text-decoration:none; transition:opacity 0.2s;" title="Share on LinkedIn">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('https://arkhousing.co.uk/blog-detail.php?id=' . $id); ?>"
           target="_blank" rel="noopener"
           style="display:inline-flex; align-items:center; justify-content:center; width:36px; height:36px; border-radius:50%; background:#1877f2; color:#fff; text-decoration:none; transition:opacity 0.2s;" title="Share on Facebook">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        </a>
    </div>
</div>

<!-- Related Articles -->
<section class="related-section">
    <div class="container">
        <div style="text-align:center; margin-bottom:8px;">
            <span class="section-subtitle">KEEP READING</span>
            <h2 class="section-title" style="margin-top:8px;">Related Articles</h2>
        </div>

        <div class="related-grid">
            <?php foreach ($related as $rel): ?>
            <article class="related-card">
                <div class="related-card-img">
                    <img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>">
                </div>
                <div class="related-card-body">
                    <div style="display:flex; align-items:center; gap:8px; margin-bottom:12px;">
                        <span style="background:#17386B; color:#fff; border-radius:50px; padding:3px 12px; font-family:'Poppins',sans-serif; font-size:11px; font-weight:600;"><?php echo htmlspecialchars($rel['category']); ?></span>
                        <span style="font-family:'Poppins',sans-serif; font-size:12px; color:#94a3b8;"><?php echo htmlspecialchars($rel['date']); ?></span>
                    </div>
                    <h3 style="font-family:'Poppins',sans-serif; font-weight:600; font-size:15px; color:#1a1a2e; margin:0 0 10px; line-height:1.4;">
                        <?php echo htmlspecialchars($rel['title']); ?>
                    </h3>
                    <p style="font-family:'Poppins',sans-serif; font-size:13px; color:#64748b; line-height:1.6; margin:0 0 18px; flex:1;">
                        <?php echo htmlspecialchars($rel['excerpt']); ?>
                    </p>
                    <a href="<?php echo htmlspecialchars($rel['link']); ?>"
                       style="font-family:'Poppins',sans-serif; font-size:13px; font-weight:600; color:#17386B; text-decoration:none; display:inline-flex; align-items:center; gap:5px; margin-top:auto; transition:gap 0.2s ease;">
                        Read More
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../includes/become-tenants.php';
require_once __DIR__ . '/../includes/footer.php';
?>
