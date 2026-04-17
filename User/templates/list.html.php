<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="min-vh-100" style="background-color: #121212; color: #e0e0e0; padding: 40px 0;">
    <div class="container">
        
        <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom border-secondary">
            <div>
                <h1 class="h3 fw-bold text-white mb-0">👥 User Management</h1>
                <p class="text-secondary small mb-0">System administrator member list</p>
            </div>
            <a href="User/add.php" class="btn btn-primary px-4 fw-bold shadow-sm">
                <span class="me-1">+</span> Add Member
            </a>
        </div>

        <div class="card border-0 shadow-lg overflow-hidden" style="background-color: #1e1e1e; border-radius: 15px;">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" style="color: black;">
                    <thead style="background-color: rgba(255, 255, 255, 0.03);">
                        <tr>
                            <th class="ps-4 py-3 border-secondary text-secondary small text-uppercase fw-bold" style="width: 15%;">ID</th>
                            <th class="py-3 border-secondary text-secondary small text-uppercase fw-bold">Username</th>
                            <th class="pe-4 py-3 border-secondary text-secondary small text-uppercase fw-bold text-end">Actions</th>
                        </tr>
                    </thead>
                    
                    <tbody class="border-0">
                        <?php if (!empty($Users)): ?>
                            <?php foreach($Users as $User): ?>
                                <tr style="border-bottom: 1px solid #2c2c2c; transition: 0.3s;">
                                    <td class="ps-4 py-3">
                                        <span class="badge bg-dark border border-secondary text-secondary">
                                            #<?= htmlspecialchars($User["Id"]) ?>
                                        </span>
                                    </td>
                                    <td class="py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-primary bg-opacity-10 text-black d-flex align-items-center justify-content-center fw-bold me-3" style="width: 35px; height: 35px; font-size: 14px;">
                                                <?= strtoupper(substr($User["UserName"], 0, 1)) ?>
                                            </div>
                                            <span class="fw-semibold text-black"><?= htmlspecialchars($User["UserName"]) ?></span>
                                        </div>
                                    </td>
                                    <td class="pe-4 py-3 text-end">
                                        <a href="User/edit.php?id=<?=$User['Id']?>" 
                                           class="btn btn-outline-info btn-sm px-3 rounded-pill me-1" 
                                           style="font-size: 12px;">
                                            ✏️ Edit
                                        </a>
                                        <a href="User/delete.php?id=<?=$User['Id']?>" 
                                           class="btn btn-outline-danger btn-sm px-3 rounded-pill" 
                                           style="font-size: 12px;"
                                           onclick="return confirm('Delete this user?')">
                                            🗑️ Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3" class="text-center py-5 text-secondary small">
                                    No members found in the list.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4 d-flex justify-content-between align-items-center">
            <a href="index.php" class="text-secondary text-decoration-none small">
                ← Back to Dashboard
            </a>
            <span class="text-secondary smaller" style="font-size: 12px;">
                Total: <strong class="text-white"><?= count($Users ?? []) ?></strong> members
            </span>
        </div>

    </div>
</div>