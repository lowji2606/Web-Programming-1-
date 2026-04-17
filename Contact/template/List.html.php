<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div style="background-color: #121212; min-height: 100vh; color: #e0e0e0; padding: 40px 0;">
    <div class="container">
        
        <div class="d-flex justify-content-between align-items-center p-4 mb-4 shadow-lg" 
             style="background-color: #1e1e1e; border-radius: 16px; border-left: 5px solid #0d6efd;">
            <div>
                <h2 class="text-white fw-bold mb-1"><i class="fas fa-inbox me-2 text-primary"></i> Contact Inbox</h2>
                <p class="text-secondary mb-0 small">Manage the list of customer emails sent to the system</p>
            </div>
            <div class="text-center px-4 border-start border-secondary">
                <div class="h2 fw-bold text-white mb-0"><?php echo count($Contacts ?? []); ?></div>
                <div class="text-secondary smaller text-uppercase" style="font-size: 10px; letter-spacing: 1px;">Total</div>
            </div>
        </div>

        <div class="card shadow-lg border-0" style="background-color: #1e1e1e; border-radius: 16px; overflow: hidden;">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" style="color: #e0e0e0;">
                    <thead style="background-color: rgba(255,255,255,0.03);">
                        <tr>
                            <th class="ps-4 py-3 border-secondary text-secondary fw-semibold">Customer</th>
                            <th class="py-3 border-secondary text-secondary fw-semibold">Subject/Content</th>
                            <th class="py-3 border-secondary text-secondary fw-semibold">Date Sent</th>
                            <th class="pe-4 py-3 border-secondary text-secondary fw-semibold text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="border-0">
                        <?php if (!empty($Contacts)): ?>
                            <?php foreach ($Contacts as $contact): ?>
                                <tr style="border-bottom: 1px solid #2c2c2c;">
                                    <td class="ps-4 py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold shadow-sm" 
                                                 style="width: 40px; height: 40px; background-color: #3d3d3d; color: #0dcaf0; font-size: 14px;">
                                                <?php echo strtoupper(substr($contact['EmailFrom'], 0, 1)); ?>
                                            </div>
                                            <div class="ms-3">
                                                <div class="text-black fw-semibold small"><?php echo htmlspecialchars($contact['EmailFrom']); ?></div>
                                                <div class="text-secondary" style="font-size: 11px;">Potential Customer</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 text-secondary small" style="max-width: 300px;">
                                        <div class="text-truncate" title="<?php echo htmlspecialchars($contact['Content']); ?>">
                                            <?php echo htmlspecialchars($contact['Content'] ?? 'No Subject'); ?>
                                        </div>
                                    </td>
                                    <td class="py-3 text-secondary small">
                                        <i class="far fa-clock me-1" style="font-size: 12px;"></i>
                                        <?php echo date('d/m/Y H:i', strtotime($contact['Date'])); ?>
                                    </td>
                                    <td class="pe-4 py-3 text-end">
                                        <a href="Contact/delete.php?id=<?php echo $contact['Id']; ?>" 
                                           class="btn btn-outline-danger btn-sm border-0 rounded-3 p-2" 
                                           title="Delete"
                                           onclick="return confirm('Are you sure you want to delete this contact?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center py-5">
                                    <div class="py-4">
                                        <i class="fas fa-folder-open fa-3x text-secondary mb-3 opacity-25"></i>
                                        <p class="text-secondary mb-0">No contact data found.</p>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4">
            <a href="index.php" class="text-secondary text-decoration-none small">
                <i class="fas fa-arrow-left me-1"></i> Back to Dashboard
            </a>
        </div>
    </div>
</div>