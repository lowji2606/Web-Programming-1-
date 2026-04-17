<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="d-flex align-items-center justify-content-center" style="background-color: #121212; min-height: 100vh; padding: 30px 15px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                
                <div class="card border-0 shadow-lg" style="background-color: #1e1e1e; border-radius: 20px; overflow: hidden;">
                    
                    <div class="card-header border-0 p-4 text-center" style="background-color: rgba(13, 202, 240, 0.1);">
                        <h2 class="text-white fw-bold h4 mb-1">📝 Update Review</h2>
                        <p class="text-secondary small mb-0">Edit the movie review content</p>
                    </div>

                    <div class="card-body p-4 p-md-5">
                        <form action="ReviewFilm/update.php?id=<?= htmlspecialchars($review['id']) ?>" method="POST">
                            

                            <div class="mb-4">
                                <label class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 0.5px;">Review Content</label>
                                <textarea name="Content" 
                                          class="form-control form-control-lg border-0 shadow-none text-white" 
                                          rows="3"
                                          style="background-color: #2c2c2c; border-radius: 10px; font-size: 15px;" 
                                          required><?= htmlspecialchars($review['Content']) ?></textarea>
                            </div>
                            
                            <div class="mb-5">
                                <label class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 0.5px;">Review Date</label>
                                <input type="text" 
                                       name="Date" 
                                       value="<?= htmlspecialchars($review['Date']) ?>" 
                                       class="form-control form-control-lg border-0 shadow-none text-white" 
                                       style="background-color: #2c2c2c; border-radius: 10px; font-size: 15px;" 
                                       required>
                            </div>

                            <div class="d-grid gap-3">
                                <button type="submit" class="btn btn-info btn-lg fw-bold shadow-sm py-3 text-white" style="border-radius: 12px;">
                                    💾 SAVE CHANGES
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