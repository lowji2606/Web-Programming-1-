<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="d-flex align-items-center justify-content-center" style="background-color: #121212; min-height: 100vh; padding: 20px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-5">
                
                <div class="card border-0 shadow-lg" style="background-color: #1e1e1e; border-radius: 1.5rem; overflow: hidden;">
                    
                    <div class="card-header border-0 p-4 text-center" style="background-color: rgba(255, 193, 7, 0.1);">
                        <h2 class="text-white fw-bold h4 mb-1">👤 Update Information</h2>
                        <p class="text-secondary small mb-0">Edit admin account information</p>
                    </div>

                    <div class="card-body p-4 p-md-5">
                        <form action="User/update.php?id=<?= htmlspecialchars($User['Id'])?>" method="POST">
                            
                            <div class="mb-4">
                                <label class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 0.5px;">User ID</label>
                                <input type="text" 
                                       value="#<?= htmlspecialchars($User['Id']) ?>" 
                                       class="form-control form-control-lg border-0 shadow-none text-secondary" 
                                       style="background-color: #252525; border-radius: 10px; font-size: 15px; cursor: not-allowed; opacity: 0.6;" 
                                       disabled>
                            </div>

                            <div class="mb-5">
                                <label class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 0.5px;">New Username</label>
                                <input type="text" 
                                       name="UserName" 
                                       value="<?= htmlspecialchars($User['UserName'])?>"
                                       class="form-control form-control-lg border-0 shadow-none text-white" 
                                       style="background-color: #2c2c2c; border-radius: 10px; font-size: 15px; padding: 12px 15px;"
                                       required>
                            </div>

                            <div class="d-grid gap-3">
                                <button type="submit" class="btn btn-warning btn-lg fw-bold shadow-sm py-3" style="border-radius: 12px; color: #000;">
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