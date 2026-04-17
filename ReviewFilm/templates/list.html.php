<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div style="background-color: #121212; color: #e0e0e0; min-height: 100vh; padding: 50px 0;">
    <div class="container">
        
        <div class="d-flex justify-content-between align-items-center mb-5 pb-3" style="border-bottom: 1px solid #2c2c2c;">
            <div>
                <h1 style="color: #ffffff; font-weight: 700; margin: 0;">🎬 Review Management</h1>
                <p class="text-secondary mb-0">Manage all user-generated film reviews</p>
            </div>
            <a href="ReviewFilm/add.php" class="btn btn-primary px-4 fw-bold shadow-sm">+ Add Review</a>
        </div>

        <div class="card border-0 shadow-lg" style="background-color: #1e1e1e; border-radius: 15px; overflow: hidden;">
            <div class="table-responsive">
                <table class="table table-hover table-borderless mb-0" style="color: #e0e0e0; vertical-align: middle;">
                    <thead style="background-color: #252525; color: #03dac6; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">
                        <tr>
                            <th class="ps-4 py-3">Film</th>
                            <th class="py-3">Reviewer</th>
                            <th class="py-3" style="width: 35%;">Content</th>
                            <th class="py-3">Date</th>
                            <th class="py-3 text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($reviews ?? [] as $review): ?>
                        <tr style="border-bottom: 1px solid #2c2c2c;">
                            <td class="ps-4 py-3">
                                <div class="d-flex align-items-center">
                                    <img src="uploads/<?= htmlspecialchars($review['image']) ?>" 
                                         style="width: 45px; height: 60px; object-fit: cover; border-radius: 6px;" 
                                         class="me-3 shadow-sm" alt="Poster">
                                    <span class="fw-bold text-black"><?= htmlspecialchars($review["NameFilm"]) ?></span>
                                </div>
                            </td>
                            <td class="py-3">
                                <span class="badge bg-dark px-3 py-2" style="border: 1px solid #333; color: #03dac6;">
                                    👤 <?= htmlspecialchars($review["UserName"]) ?>
                                </span>
                            </td>
                            <td class="py-3">
                                <p class="mb-0 text-secondary small" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; line-height: 1.5;">
                                    <?= htmlspecialchars($review["Content"]) ?>
                                </p>
                            </td>
                            <td class="py-3 small text-secondary">
                                <?= htmlspecialchars($review["Date"]) ?>
                            </td>
                            <td class="py-3 text-end pe-4">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="ReviewFilm/edit.php?id=<?= $review['id'] ?>" 
                                       class="btn btn-sm btn-outline-light border-0" 
                                       style="background-color: rgba(255,255,255,0.05);">
                                       ✏️
                                    </a>
                                    <a href="ReviewFilm/delete.php?id=<?= $review['id'] ?>" 
                                       class="btn btn-sm btn-outline-danger border-0" 
                                       style="background-color: rgba(220, 53, 69, 0.1);"
                                       onclick="return confirm('Delete this review?')">
                                       🗑️
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        
                        <?php if (empty($reviews)): ?>
                        <tr>
                            <td colspan="5" class="text-center py-5 text-secondary">
                                No reviews found in the database.
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>