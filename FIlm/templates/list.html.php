<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div style="background-color: #121212; color: #e0e0e0; min-height: 100vh; padding: 50px 0;">
    <div class="container">
        
        <div class="d-flex justify-content-between align-items-center mb-5 pb-3" style="border-bottom: 1px solid #2c2c2c;">
            <div>
                <h1 style="color: #ffffff; font-weight: 700; margin: 0;">🎬 Movie Management</h1>
                <p class="text-secondary mb-0">Control your film inventory and movie details</p>
            </div>
            <a href="FIlm/add.php" class="btn btn-primary px-4 fw-bold shadow-sm">+ Add Movie</a>
        </div>

        <div class="card border-0 shadow-lg" style="background-color: #1e1e1e; border-radius: 15px; overflow: hidden;">
            <div class="table-responsive">
                <table class="table table-hover table-borderless mb-0" style="color: #e0e0e0; vertical-align: middle;">
                    <thead style="background-color: #252525; color: #03dac6; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">
                        <tr>
                            <th class="ps-4 py-3">Film Poster & Name</th>
                            <th class="py-3">Release Date</th>
                            <th class="py-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($films ?? [] as $film): ?>
                        <tr style="border-bottom: 1px solid #2c2c2c;">
                            <td class="ps-4 py-3">
                                <div class="d-flex align-items-center">
                                    <img src="uploads/<?= $film['image'] ?>" 
                                         style="width: 50px; height: 70px; object-fit: cover; border-radius: 6px;" 
                                         class="me-3 shadow-sm" alt="Poster">
                                    <div>
                                        <span class="fw-bold text-black d-block fs-6"><?= htmlspecialchars($film["NameFilm"]) ?></span>
                                        <small class="text-secondary">ID: #<?= $film['Id'] ?></small>
                                    </div>
                                </div>
                            </td>

                            <td class="py-3">
                                <span class="badge bg-dark px-3 py-2 text-primary" style="border: 1px solid #333;">
                                    📅 <?= htmlspecialchars($film["DateFilm"]) ?>
                                </span>
                            </td>

                            <td class="py-3 text-end pe-4">
                                <div class="d-flex justify-content-end align-items-center gap-2">
                                    
                                    <form action="Wishlist/store.php" method="POST" class="m-0">
                                        <input type="hidden" name="FilmId" value="<?= $film['Id'] ?>">
                                   
                                    </form>

                                    <a href="FIlm/edit.php?id=<?=$film['Id']?>" 
                                       class="btn btn-sm btn-outline-light border-0" 
                                       style="background-color: rgba(255, 255, 255, 0.05);">
                                       ✏️ Edit
                                    </a>

                                    <a href="FIlm/delete.php?id=<?=$film['Id']?>" 
                                       class="btn btn-sm btn-outline-danger border-0" 
                                       style="background-color: rgba(220, 53, 69, 0.1);"
                                       onclick="return confirm('Are you sure you want to delete this?')">
                                       🗑️ Delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        <?php if (empty($films)): ?>
                        <tr>
                            <td colspan="3" class="text-center py-5 text-secondary">
                                No movies found in the database.
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>