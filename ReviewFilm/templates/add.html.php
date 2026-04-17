<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="d-flex align-items-center justify-content-center" style="background-color: #121212; min-height: 100vh; padding: 30px 15px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-5">
                
                <div class="card border-0 shadow-lg" style="background-color: #1e1e1e; border-radius: 20px; overflow: hidden;">
                    
                    <div class="card-header border-0 p-4 text-center" style="background-color: rgba(13, 110, 253, 0.1);">
                        <h2 class="text-white fw-bold h4 mb-1">🎬 Add New Review</h2>
                        <p class="text-secondary small mb-0">Share your thoughts about the movie</p>
                    </div>

                    <div class="card-body p-4 p-md-5">
                        <form action="ReviewFilm/store.php" method="POST">
                            
                            <div class="mb-4">
                                <label class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 0.5px;">Select Movie</label>
                                <select name="FilmId" class="form-select form-select-lg border-0 shadow-none text-white" 
                                        style="background-color: #2c2c2c; border-radius: 10px; font-size: 15px;" required>
                                    <option value="" class="text-secondary">-- Select a movie --</option>
                                    <?php foreach($films ?? [] as $f): ?>
                                        <option value="<?= $f['Id'] ?>"><?= htmlspecialchars($f['NameFilm']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 0.5px;">Reviewer</label>
                                <select name="UserId" class="form-select form-select-lg border-0 shadow-none text-white" 
                                        style="background-color: #2c2c2c; border-radius: 10px; font-size: 15px;" required>
                                    <option value="" class="text-secondary">-- Select user --</option>
                                    <?php foreach($Users ?? [] as $u): ?>
                                        <option value="<?= $u['Id'] ?>"><?= htmlspecialchars($u['UserName']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 0.5px;">Review Content</label>
                                <textarea name="Content" 
                                          class="form-control form-control-lg border-0 shadow-none text-black" 
                                          placeholder="How did you feel about the film?..." 
                                          rows="3"
                                          style="background-color: white; border-radius: 10px; font-size: 15px;" required></textarea>
                            </div>
                            
                            <div class="mb-5">
                                <label class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 0.5px;">Review Date</label>
                                <input type="text" 
                                       name="Date" 
                                       value="<?= date('d/m/Y') ?>" 
                                       class="form-control form-control-lg border-0 shadow-none text-white text-center" 
                                       style="background-color: #2c2c2c; border-radius: 10px; font-size: 15px;" required>
                            </div>

                            <div class="d-grid gap-3">
                                <button type="submit" class="btn btn-primary btn-lg fw-bold shadow-sm" style="border-radius: 12px; padding: 14px;">
                                    🚀 ADD NOW
                                </button>
                                
                                <a href="index.php" class="btn btn-link text-secondary text-decoration-none small opacity-75 mt-1">
                                    ← Back to list
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>