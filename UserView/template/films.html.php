<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div style="background-color: #121212; color: #e0e0e0; min-height: 100vh; padding: 50px 0;">
    <div class="container">
        
        <div class="row mb-5 align-items-center">
            <div class="col-12 col-md-7 border-start border-primary border-4 ps-3">
                <h1 class="fw-bold text-white mb-0 text-uppercase">Trending Films</h1>
                <p class="text-secondary mb-0">Discover the best movies for you</p>
            </div>
            
            <div class="col-12 col-md-5 mt-4 mt-md-0">
                <form method="GET" class="d-flex rounded-pill p-1 shadow-sm"
                      style="background-color: #1e1e1e; border: 1px solid #333;">
                    <span class="input-group-text bg-transparent border-0 text-secondary ps-3">🔍</span>
                    <input type="search" name="Search" 
                           class="form-control border-0 shadow-none bg-transparent text-white" 
                           placeholder="Quick search..."
                           style="color: white !important;"> <button class="btn btn-primary rounded-pill px-4 fw-bold" type="submit">Search</button>
                </form>
            </div>
        </div>

        <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            
            <?php foreach ($films ?? [] as $film): ?>
            <div class="col">
                <div class="card h-100 border-0 shadow-lg" 
                     style="background-color: #1e1e1e; border-radius: 20px; transition: transform 0.3s ease; overflow: hidden;"
                     onmouseover="this.style.transform='translateY(-10px)'"
                     onmouseout="this.style.transform='translateY(0)'">
                    
                    <div style="position: relative; height: 350px; overflow: hidden;">
                        <img src="uploads/<?= htmlspecialchars($film["image"]) ?>" 
                             class="card-img-top w-100 h-100" 
                             alt="<?= htmlspecialchars($film["NameFilm"]) ?>"
                             style="object-fit: cover;">
                        
                        <span class="position-absolute top-0 start-0 m-3 badge rounded-pill bg-primary shadow-sm" 
                              style="font-size: 0.8rem; padding: 8px 12px;">
                            <?= htmlspecialchars($film["DateFilm"]) ?>
                        </span>
                    </div>

                    <div class="card-body p-4 text-center d-flex flex-column justify-content-between">
                        <h5 class="card-title fw-bold text-white mb-3 text-truncate">
                            <?= htmlspecialchars($film["NameFilm"]) ?>
                        </h5>
                        
                        <div class="d-grid">
                            <a href="UserView/detail.php?id=<?= htmlspecialchars($film["Id"]) ?>" 
                               class="btn btn-outline-primary fw-bold py-2" 
                               style="border-radius: 10px; border-width: 2px;">
                                VIEW DETAIL
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div> 

        <?php if (empty($films)): ?>
        <div class="text-center py-5">
            <h3 class="text-secondary opacity-50">No films available at the moment.</h3>
        </div>
        <?php endif; ?>

    </div>
</div>