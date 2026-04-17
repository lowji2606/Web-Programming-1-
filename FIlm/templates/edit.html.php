<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="d-flex align-items-center justify-content-center" style="background-color: #121212; min-height: 100vh; padding: 20px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-5">
                
                <div class="card border-0 shadow-lg" style="background-color: #1e1e1e; border-radius: 1.5rem; overflow: hidden;">
                    
                    <div class="card-header border-0 p-4 text-center" style="background-color: rgba(25, 135, 84, 0.1);">
                        <h2 class="text-white fw-bold h4 mb-1">✏️ Edit Movie</h2>
                        <p class="text-secondary small mb-0">Update the latest information for this movie</p>
                    </div>

                    <div class="card-body p-4 p-md-5">
                        <form action="FIlm/update.php?id=<?= htmlspecialchars($film['Id'])?>" method="POST" enctype="multipart/form-data">
                            
                            <div class="mb-4">
                                <label class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 0.5px;">Movie Title</label>
                                <input type="text" 
                                       name="NameFilm" 
                                       value="<?= htmlspecialchars($film['NameFilm'])?>"
                                       class="form-control form-control-lg border-0 shadow-none text-white" 
                                       style="background-color: #2c2c2c; border-radius: 10px; font-size: 15px; padding: 12px 15px;"
                                       required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 0.5px;">Release Year</label>
                                <input type="text" 
                                       name="DateFilm" 
                                       value="<?= htmlspecialchars($film['DateFilm'])?>"
                                       class="form-control form-control-lg border-0 shadow-none text-white" 
                                       style="background-color: #2c2c2c; border-radius: 10px; font-size: 15px; padding: 12px 15px;"
                                       required>
                            </div>

                            <div class="mb-5">
                                <label class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 0.5px;">Change Poster Image</label>
                                <input type="hidden" name="old_image" value="uploads/<?= htmlspecialchars($film['image'])?>" >
                                <input type="file" 
                                       name="image" 
                                       class="form-control border-0 shadow-none text-white" 
                                       style="background-color: #2c2c2c; border-radius: 10px; font-size: 14px; padding: 10px;"
                                       accept="image/*">
                                <small class="text-muted d-block mt-2">Current image: <span class="text-info"><?= htmlspecialchars($film['image']) ?></span></small>
                            </div>

                            <div class="d-grid gap-3">
                                <button type="submit" class="btn btn-success btn-lg fw-bold shadow-sm" style="border-radius: 12px; padding: 14px;">
                                    ✅ UPDATE CHANGES
                                </button>
                                
                                <a href="index.php" class="btn btn-link text-secondary text-decoration-none small opacity-75 mt-1">
                                    Cancel and go back
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>