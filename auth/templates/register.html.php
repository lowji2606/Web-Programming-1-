  <div style='background-color: #121212'> 
        <div class="row vh-100 bd-flex justify-content-center align-items-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-4 fw-bold text-success">Create Account</h2>
                        
                        <form action="auth/registered.php" method="POST">
                            
                            <div class="mb-3">
                                <label class="form-label fw-medium">Username</label>
                                <input type="text" name="UserName" class="form-control form-control-lg" placeholder="Username ..." required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label fw-medium">Password</label>
                                <input type="password" name="Pass" class="form-control form-control-lg" placeholder="Password" required>
                            </div>
                            <div class="mt-3 text-center">
                            <?php echo $error404 ?? '' ?>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-success btn-lg fw-bold">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
        </div>
    </div>

