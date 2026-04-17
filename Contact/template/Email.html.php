<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="min-vh-100 d-flex align-items-center justify-content-center" style="background-color: #121212;">
    <div class="container">
        <div class="row justify-content-center w-100 m-0">
            <div class="col-12 col-md-8 col-lg-5">
                
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="background-color: #1e1e1e;">
                    
                    <div class="card-header border-0 p-4 text-center bg-primary bg-opacity-10">
                        <div class="fs-1 mb-2">📧</div>
                        <h2 class="text-white fw-bold h4 mb-1">Send Us An Email</h2>
                        <p class="text-secondary small mb-0">We will respond within 24 hours</p>
                    </div>

                    <div class="card-body p-4 p-md-5">
                        <form action="Contact/send_email.php" method="POST">
                            
                            <div class="mb-4">
                                <label for="email" class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 1px;">
                                    Email <span class="text-danger">*</span>
                                </label>
                                <input type="email" 
                                       class="form-control form-control-lg border-0 shadow-none text-black py-3" 
                                       id="email" 
                                       name="EmailFrom" 
                                       placeholder="example@email.com"
                                       style="background-color: white;"
                                       required>
                            </div>
                            
                            <div class="mb-4">
                                <label for="message" class="form-label text-secondary small fw-bold text-uppercase" style="letter-spacing: 1px;">
                                    Message <span class="text-danger">*</span>
                                </label>
                                <textarea class="form-control border-0 shadow-none text-black py-3" 
                                          id="message" 
                                          name="Content" 
                                          placeholder="Enter your message here..."
                                          rows="5"
                                          style="background-color: white;"
                                          required></textarea>
                            </div>
                            <div class="mt-3 text-center text-white">
                            <?php echo $error404 ?? '' ?>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg fw-bold py-3 rounded-3 shadow">
                                    📤 SEND EMAIL NOW
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="index.php" class="text-secondary text-decoration-none small opacity-75">
                        ← Back to home
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>