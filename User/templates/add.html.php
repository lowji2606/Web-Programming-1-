<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container-fluid vh-100 d-flex align-items-center justify-content-center" style="background-color: #000;">
    <div class="card p-4 shadow-lg" style="background-color: #121212; width: 100%; max-width: 400px; border: 1px solid #333;">
        
        <h2 class="text-info text-center mb-4">Add New Member</h2>
        
        <form action="User/store.php" method="POST">
            <div class="mb-3">
                <label class="form-label text-light">Username</label>
                <input type="text" name="UserName" 
                       class="form-control bg-dark text-white border-secondary shadow-none" 
                       placeholder="Enter username..." required autofocus>
            </div>

            <div class="mb-4">
                <label class="form-label text-light">Password</label>
                <input type="password" name="Pass" 
                       class="form-control bg-dark text-white border-secondary shadow-none" 
                       placeholder="Enter password" required>
            </div>

            <button type="submit" class="btn btn-info w-100 fw-bold py-2 mb-3">
                Confirm Add
            </button>
            
            <div class="text-center">
                <a href="index.php" class="text-secondary text-decoration-none small">
                    ← Back to list
                </a>
            </div>
        </form>
    </div>
</div>