<div class="blog-card-item" style="display: flex; flex-direction: column; position: relative;">
    <!-- Image with date badge top-right -->
    <div style="position: relative; border-radius: 20px; overflow: hidden; margin-bottom: 1.5rem;">
        <img src="<?php echo htmlspecialchars($blog['image']); ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>" style="width: 100%; height: 240px; object-fit: cover; display: block; border-radius: 20px;">
        <!-- Date badge: upper edge, left-inset -->
        <div style="position: absolute; top: 0; left: 66px; background: white; border-radius: 0 0 8px 8px; padding: 6px 10px; text-align: center; min-width: 44px; line-height: 1;">
            <div style="font-family: 'Poppins', sans-serif; font-size: 1.15rem; font-weight: 700; color: #1a1a1a; line-height: 1.1;"><?php echo htmlspecialchars($blog['day']); ?></div>
            <div style="font-family: 'Poppins', sans-serif; font-size: 0.7rem; font-weight: 500; color: #555; text-transform: capitalize; letter-spacing: 0.3px;"><?php echo htmlspecialchars($blog['day_name']); ?></div>
        </div>
    </div>

    <!-- Title -->
    <h3 style="font-family: 'Poppins', sans-serif; font-size: 1.35rem; font-weight: 700; color: #ffffff; line-height: 1.35; margin: 0 0 0.75rem 0;"><?php echo htmlspecialchars($blog['title']); ?></h3>

    <!-- Excerpt -->
    <p style="font-size: 0.9rem; color: rgba(255,255,255,0.85); line-height: 1.6; margin: 0 0 1.5rem 0; flex-grow: 1;"><?php echo htmlspecialchars($blog['excerpt']); ?></p>

    <!-- CTA Arrow -->
    <div style="text-align: left;">
        <a href="<?php echo htmlspecialchars($blog['link']); ?>" style="display: inline-block; text-decoration: none;">
            <img src="/public/assets/images/icons/white-arrow.svg" alt="Read More" style="width: 50px; height: 50px;">
        </a>
    </div>
</div>
