<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div style="background-color: #121212; color: #e0e0e0; min-height: 100vh; padding: 50px 0;">
    <div class="container">

        <div class="mb-4">
            <a href="UserView/films.php" class="btn btn-outline-secondary btn-sm px-3" style="border-radius: 8px;">
                ← Back to List
            </a>
        </div>

        <div class="row g-5 mb-5">
            <div class="col-md-5 col-lg-4">
                <div class="card border-0 shadow-lg"
                    style="background-color: #1e1e1e; border-radius: 20px; overflow: hidden;">
                    <img src="uploads/<?= $film["image"] ?>" class="img-fluid" alt="<?= $film["NameFilm"] ?>"
                        style="width: 100%; height: auto; object-fit: cover;">
                </div>
            </div>

            <div class="col-md-7 col-lg-8">
                <h1 class="display-4 fw-bold text-white mb-3"><?= $film["NameFilm"] ?></h1>

                <div class="p-4 rounded-4" style="background-color: #1e1e1e; border: 1px solid #333;">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3 d-flex align-items-center">
                            <span class="badge bg-primary me-3 p-2">📅 Release Date</span>
                            <span class="fs-5 text-secondary"><?= $film["DateFilm"] ?></span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <span class="badge bg-success me-3 p-2">✅ Status</span>
                            <span class="fs-5 text-secondary">Available</span>
                        </li>
                        <hr class="text-secondary">
                        <li class="mt-4 d-flex gap-2">
                            <a href="Wishlist/store.php?FilmId=<?= $film["Id"] ?>"
                                class="btn btn-outline-warning px-4 py-2 fw-bold" style="border-radius: 10px;">+
                                Wishlist</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <hr class="text-secondary mb-5">

        <div class="row g-4">
            <div class="col-lg-5">
                <div class="p-4 rounded-4 shadow-sm" style="background-color: #1e1e1e; border: 1px solid #333;">
                    <h4 class="text-white fw-bold mb-4">Your Review</h4>
                    <form action="ReviewFilm/store.php?id=<?= $film['Id']; ?>" method="POST">


                        <div class="mb-4">
                            <label class="form-label text-secondary small">Review Content</label>
                            <textarea name="Content" class="form-control border-0 text-white" rows="4"
                                placeholder="Share your thoughts..."
                                style="background-color: #2a2a2a; border-radius: 12px;" required></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary fw-bold py-2"
                                style="border-radius: 10px;">Submit Review</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-7">
                <h4 class="text-white fw-bold mb-4">Community Feedback</h4>

                <?php if (empty($reviews)): ?>
                    <div class="text-center py-5 rounded-4" style="background-color: #1e1e1e; border: 1px dashed #444;">
                        <p class="text-secondary mb-0">No ratings yet.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($reviews as $review): ?>
                        <div class="p-4 mb-3 rounded-4 shadow-sm" style="background-color: #1e1e1e; border: 1px solid #333;">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="text-primary fw-bold mb-0">User #<?= $review["UserId"] ?></h6>
                            </div>
                            <small class="text-secondary d-block mb-3"><?= $review["Date"] ?></small>
                            <p class="text-white-50 mb-0 italic">"<?= htmlspecialchars($review["Content"]) ?>"</p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>