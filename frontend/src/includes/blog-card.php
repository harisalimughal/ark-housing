<div class="card blog-card" style="position: relative;">
    <div style="position: relative;">
        <img src="<?php echo htmlspecialchars($blog['image']); ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>" style="width: 100%; height: 220px; object-fit: cover;">
        <span class="badge" style="position: absolute; top: 10px; left: 10px; background: white; color: var(--text-dark); font-size: 0.8rem; padding: 4px 8px; font-weight: 500;">
            📅 <?php echo htmlspecialchars($blog['date']); ?>
        </span>
    </div>
    <div style="padding: var(--spacing-4); padding-bottom: var(--spacing-8);">
        <h4 style="font-size: 1.1rem; line-height: 1.4; color: white;"><?php echo htmlspecialchars($blog['title']); ?></h4>
        <a href="#" style="position: absolute; bottom: 15px; right: 15px; background: white; color: var(--primary-green); width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; text-decoration: none;">&rarr;</a>
    </div>
</div>
