<div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="stat-card bg-white p-3 d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted mb-1 small">Kamar Tersedia</p>
                        <h4 class="mb-0 fw-bold"><?= $stats['available'] ?></h4>
                    </div>
                    <div class="icon-box bg-success">
                        <i class="fas fa-door-open"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card bg-white p-3 d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted mb-1 small">Terisi (Occupied)</p>
                        <h4 class="mb-0 fw-bold"><?= $stats['booked'] ?></h4>
                    </div>
                    <div class="icon-box bg-danger">
                        <i class="fas fa-bed"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card bg-white p-3 d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted mb-1 small">Check-In Hari Ini</p>
                        <h4 class="mb-0 fw-bold"><?= $stats['checkin_today'] ?></h4>
                    </div>
                    <div class="icon-box bg-warning text-dark">
                        <i class="fas fa-user-check text-white"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white py-3">
                        <h6 class="m-0 fw-bold text-primary"><i class="fas fa-table me-2"></i> Reservasi Terbaru</h6>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-hover table-striped mb-0 align-middle">
                            <thead class="bg-light">
                                <tr>
                                    <th class="ps-4">ID Booking</th>
                                    <th>Nama Tamu</th>
                                    <th>Kamar</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($recent_bookings as $bk): ?>
                                <tr>
                                    <td class="ps-4 fw-bold"><?= $bk['id'] ?></td>
                                    <td><?= $bk['guest'] ?> <br> <small class="text-muted"><?= $bk['date'] ?></small></td>
                                    <td><?= $bk['room'] ?></td>
                                    <td>
                                        <?php if($bk['status'] == 'Check In'): ?>
                                            <span class="badge bg-success">Check In</span>
                                        <?php elseif($bk['status'] == 'Pending'): ?>
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        <?php else: ?>
                                            <span class="badge bg-secondary">Check Out</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer bg-white text-center">
                        <a href="#" class="text-decoration-none small">Lihat Semua Reservasi &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0 fw-bold text-primary"><i class="fas fa-th-large me-2"></i> Status Kamar Live</h6>
                        <small class="text-muted">Lantai 1</small>
                    </div>
                    <div class="card-body">
                        <div class="row g-2">
                            <div class="col-3"><div class="room-box room-available" title="Tersedia">101</div></div>
                            <div class="col-3"><div class="room-box room-occupied" title="Terisi: Bpk Budi">102</div></div>
                            <div class="col-3"><div class="room-box room-occupied" title="Terisi: Ibu Siti">103</div></div>
                            <div class="col-3"><div class="room-box room-available" title="Tersedia">104</div></div>
                            
                            <div class="col-3"><div class="room-box room-dirty" title="Kotor (Housekeeping)">105</div></div>
                            <div class="col-3"><div class="room-box room-maintenance" title="Rusak (AC)">106</div></div>
                            <div class="col-3"><div class="room-box room-available" title="Tersedia">107</div></div>
                            <div class="col-3"><div class="room-box room-available" title="Tersedia">108</div></div>
                        </div>

                        <div class="mt-4">
                            <h6 class="small fw-bold text-muted text-uppercase mb-2">Legenda:</h6>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-success">Tersedia</span>
                                <span class="badge bg-danger">Terisi</span>
                                <span class="badge bg-warning text-dark">Kotor</span>
                                <span class="badge bg-secondary">Perbaikan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script sederhana untuk toggle sidebar pada Mobile
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');

        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('active');
            // Logika tambahan untuk menggeser content di mobile bisa ditambahkan di sini
        });
    </script>