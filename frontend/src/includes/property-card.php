<div class="card property-card" style="display: flex; flex-direction: column;">
    <div style="position: relative;">
        <img src="<?php echo htmlspecialchars($property['image']); ?>" alt="<?php echo htmlspecialchars($property['title']); ?>" style="width: 100%; height: 200px; object-fit: cover;">
        <span class="badge" style="position: absolute; top: 10px; left: 10px; background: white; color: var(--primary-green); font-size: 0.8rem; padding: 4px 8px;">
            <?php echo htmlspecialchars($property['label']); ?>
        </span>
    </div>
    <div style="padding: var(--spacing-4); flex-grow: 1; display: flex; flex-direction: column; text-align: center;">
        <h4 style="margin-bottom: var(--spacing-2); font-size: 1.1rem;"><?php echo htmlspecialchars($property['title']); ?></h4>
        <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: var(--spacing-4);">
            📍 <?php echo htmlspecialchars($property['address']); ?>
        </p>
        
        <div style="display: flex; justify-content: center; gap: var(--spacing-4); margin-bottom: var(--spacing-4); font-size: 0.9rem; color: var(--text-dark);">
            <span>🛏️ <?php echo htmlspecialchars($property['beds']); ?> Beds</span>
            <span>🛁 <?php echo htmlspecialchars($property['baths']); ?> Baths</span>
        </div>
        
        <div style="margin-top: auto; border-top: 1px solid #e2e8f0; padding-top: var(--spacing-4);">
            <div style="font-weight: 700; color: var(--primary-green); margin-bottom: var(--spacing-4);">
                £<?php echo htmlspecialchars($property['price']); ?> / month
            </div>
            <a href="#" class="btn btn-outline" style="width: 100%; font-size: 0.9rem; border-color: #e2e8f0; color: var(--text-dark);">View Details</a>
        </div>
    </div>
</div>
