<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="d-flex align-items-center justify-content-center" style="background-color: #121212; min-height: 100vh; padding: 20px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 col-lg-5">
                
                <div class="card border-0 shadow-lg" style="background-color: #1e1e1e; border-radius: 1.5rem; overflow: hidden;">
                    
                    <div class="card-header border-0 p-4 text-center" style="background-color: rgba(13, 110, 253, 0.08);">
                        <h2 class="text-white fw-bold h4 mb-1">🎬 Add New Movie</h2>
                        <p class="text-secondary small mb-0">Enter details to update the system</p>
                    </div>

                    <div class="card-body p-4 p-md-5">
                        <form action="FIlm/store.php" method="POST" enctype="multipart/form-data">
                            
                            <div class="mb-4">
                                <label class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 0.5px;">Movie Title</label>
                                <input type="text" 
                                       name="NameFilm" 
                                       class="form-control form-control-lg border-0 shadow-none text-white" 
                                       placeholder="Enter movie title..." 
                                       style="background-color: white; border-radius: 10px; font-size: 15px; padding: 12px 15px;"
                                       required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 0.5px;">Release Year</label>
                                <input type="text" 
                                       name="DateFilm" 
                                       class="form-control form-control-lg border-0 shadow-none text-white" 
                                       placeholder="Example: 2024" 
                                       style="background-color: white; border-radius: 10px; font-size: 15px; padding: 12px 15px;"
                                       required>
                            </div>

                            <div class="mb-5">
                                <label class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 0.5px;">Poster Image</label>
                                <input type="file" 
                                       name="image" 
                                       class="form-control border-0 shadow-none text-white" 
                                       style="background-color: #2c2c2c; border-radius: 10px; font-size: 14px; padding: 10px;"
                                       accept="image/*" 
                                       required>
                            </div>

                            <div class="d-grid gap-3">
                                <button type="submit" class="btn btn-primary btn-lg fw-bold shadow-sm" style="border-radius: 12px; padding: 14px;">
                                    💾 SAVE MOVIE NOW
                                </button>
                                
                                <a href="index.php" class="btn btn-link text-secondary text-decoration-none small opacity-75 mt-2">
                                    ← Back to Home
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>