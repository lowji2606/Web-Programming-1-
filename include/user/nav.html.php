<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div
    style="background-color: #121212; color: #e0e0e0; padding-top: 25px; padding-bottom: 40px; border-bottom: 1px solid #222;">
    <div class="container">
        <div class="row align-items-center g-3">


            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="assets/img/3682bbd2-d46c-4d9e-a366-239bd9a13d8e.jpeg" alt="Logo" width="40" height="40"
                    class="d-inline-block align-text-top me-2">
                <span class="fw-bold text-white fs-4">Filmhay.Net</span>
            </a>

            <div class="col-12 col-md-6 col-xl-4">
                <div class="row g-2">
                    <div class="col-6">
                        <a href="Contact/Email.php" class="card text-decoration-none border-0 h-100 shadow-sm"
                            style="background-color: #1e1e1e; transition: transform 0.2s ease; border-radius: 12px;"
                            onmouseover="this.style.transform='translateY(-3px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-body p-2 d-flex align-items-center">
                                <div class="rounded-3 p-2 me-2 fs-6"
                                    style="background-color: rgba(13, 202, 240, 0.15); color: #0dcaf0;">📧</div>
                                <h6 class="fw-bold text-white mb-0 small">Contact</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="Wishlist/list.php" class="card text-decoration-none border-0 h-100 shadow-sm"
                            style="background-color: #1e1e1e; transition: transform 0.2s ease; border-radius: 12px;"
                            onmouseover="this.style.transform='translateY(-3px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-body p-2 d-flex align-items-center">
                                <div class="rounded-3 p-2 me-2 fs-6"
                                    style="background-color: rgba(255, 193, 7, 0.15); color: #ffc107;">❤️</div>
                                <h6 class="fw-bold text-white mb-0 small">Wishlist</h6>
                            </div>
                        </a>
                    </div>
                   
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-5 text-center text-md-end">
                <div class="d-inline-flex align-items-center gap-2 p-2 rounded-4 shadow-sm"
                    style="background-color: #1e1e1e; border: 1px solid #333;">
                    <div class="px-2 d-none d-sm-block">
                        <span class="text-secondary small">👤 Account:</span>
                    </div>
                    <?php if ($_SESSION['user']):
                        ?>
                        <div class="d-flex gap-1">

                            <a href="UserView/logout.php" class="btn btn-sm btn-danger px-3 fw-bold"
                                style="border-radius: 8px;">Logout</a>

                        </div>
                    <?php else: ?>
                        <a href="auth/register.php" class="btn btn-sm btn-primary px-3 fw-bold"
                            style="border-radius: 8px;">Register</a>
                        <a href="auth/login.php" class="btn btn-sm btn-primary px-3 fw-bold"
                            style="border-radius: 8px;">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>