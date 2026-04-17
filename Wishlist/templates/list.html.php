<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="py-5" style="background-color: #121212; min-height: 100vh; color: #e0e0e0;">
    <div class="container">
        
        <header class="d-flex justify-content-between align-items-center mb-5 border-bottom border-secondary pb-3">
            <div>
                <h1 class="h2 text-white fw-bold mb-1">❤️ My Wishlist</h1>
                <p class="text-secondary small mb-0">Your personal collection of must-watch movies</p>
            </div>
            <a href="index.php" class="btn btn-outline-light rounded-pill px-4 fw-bold">← Back to Home</a>
        </header>

        <div class="d-flex flex-column gap-3">
            <?php if (!empty($wishlist)): ?>
                <?php foreach($wishlist as $film): ?>
                    <div class="row align-items-center g-0 p-3 shadow-sm" 
                         style="background-color: #1e1e1e; border-radius: 12px; border: 1px solid #2d2d2d; transition: 0.3s;"
                         onmouseover="this.style.borderColor='#0d6efd'" 
                         onmouseout="this.style.borderColor='#2d2d2d'">
                        
                        <div class="col-auto">
                            <div style="width: 70px; height: 100px; overflow: hidden; border-radius: 8px;">
                                <img src="uploads/<?= htmlspecialchars($film['image']) ?>" 
                                     class="w-100 h-100" 
                                     style="object-fit: cover;" 
                                     alt="Film">
                            </div>
                        </div>

                        <div class="col ps-4">
                            <h5 class="text-white mb-1 fw-bold"><?= htmlspecialchars($film['NameFilm']) ?></h5>
                            <p class="text-secondary small mb-0">
                                Released: <?= htmlspecialchars($film['DateFilm']) ?> • 
                                <span class="text-info">Action, Drama</span>
                            </p>
                        </div>

                        <div class="col-auto d-flex align-items-center gap-3">
                            
                            <a href="Wishlist/delete.php?id=<?= $film['WishlistId'] ?>" 
                               class="text-secondary text-decoration-none px-2" 
                               style="font-size: 20px; cursor: pointer;"
                               onclick="return confirm('Remove this film from wishlist?')"
                               title="Remove">
                               &times;
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="text-center py-5">
                    <p class="text-secondary fs-4">Your wishlist is currently empty.</p>
                    <a href="index.php" class="btn btn-primary rounded-pill px-5">Go Explore</a>
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>