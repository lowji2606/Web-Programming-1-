
    <div style='background-color: #121212'> 
        <div class="row vh-100 bd-flex justify-content-center align-items-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                
            <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-4 fw-bold text-primary">Login</h2>
                        
                        <form action="auth/me.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Username</label>
                                <input type="text" name="UserName" class="form-control" placeholder="Username ..." required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Password</label>
                                <input type="password" name="Pass" class="form-control" placeholder="Password" required>
                            </div>
                            
                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-primary fw-bold">Login</button>
                            </div>
                        </form>
                        <div class="mt-3 text-center">
                            <?php echo $error404 ?? '' ?>
                        </div>
                        <div class="mt-3 text-center">
                            <a href="auth/register.php" class="text-decoration-none small text-muted">
                                Register if you do not have an account
                            </a>
                        </div>

                    </div>
                </div>
                </div>
        </div>
    </div>
