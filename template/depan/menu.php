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

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
        }

        /* --- SIDEBAR --- */
        .sidebar {
            min-height: 100vh;
            width: 250px;
            background: #212529; /* Dark Sidebar */
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            transition: all 0.3s;
        }
        .sidebar-brand {
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
            border-bottom: 1px solid #343a40;
        }
        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            font-size: 0.95rem;
            border-left: 3px solid transparent;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #343a40;
            color: #fff;
            border-left-color: #0d6efd; /* Blue accent */
        }
        .sidebar i {
            width: 25px;
            text-align: center;
            margin-right: 10px;
        }

        /* --- MAIN CONTENT --- */
        .main-content {
            margin-left: 250px; /* Lebar Sidebar */
            padding: 20px;
            transition: all 0.3s;
        }
        
        /* Navbar Atas */
        .top-navbar {
            background: white;
            padding: 10px 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Cards Statistik */
        .stat-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: transform 0.2s;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .icon-box {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        /* Visualisasi Status Kamar */
        .room-box {
            width: 100%;
            padding: 15px 0;
            text-align: center;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            margin-bottom: 10px;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .room-available { background-color: #198754; } /* Hijau */
        .room-occupied { background-color: #dc3545; } /* Merah */
        .room-dirty { background-color: #ffc107; color: #000; } /* Kuning */
        .room-maintenance { background-color: #6c757d; } /* Abu */

        /* Responsif untuk HP */
        @media (max-width: 768px) {
            .sidebar { margin-left: -250px; }
            .sidebar.active { margin-left: 0; }
            .main-content { margin-left: 0; }
        }
    </style>
</head>
<body>

    <div class="sidebar" id="sidebar">
        <div class="sidebar-brand">
            <i class="fas fa-hotel me-2"></i> ADMIN PANEL
        </div>
        <nav class="mt-3">
            <a href="dashboard.php" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="#"><i class="fas fa-bed"></i> Kelola Kamar</a>
            <a href="#"><i class="fas fa-broom"></i> Status Kamar</a>
            <a href="#"><i class="fas fa-calendar-check"></i> Kelola User</a>
            <a href="#"><i class="fas fa-users"></i> Data Tamu</a>
            <a href="#"><i class="fas fa-broom"></i> Check In</a>
            <a href="#"><i class="fas fa-broom"></i> Pembayaran</a>
            <a href="#"><i class="fas fa-broom"></i> Biaya Tambahan</a>
            <a href="#"><i class="fas fa-broom"></i> Check Out</a>
            <div class="border-top border-secondary my-3 mx-3"></div>
            <a href="#"><i class="fas fa-cog"></i> Pengaturan</a>
            <a href="logout.php" class="text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </nav>
    </div>

    <div class="main-content" id="main-content">
        
        <div class="top-navbar">
            <button class="btn btn-light" id="sidebarToggle"><i class="fas fa-bars"></i></button>
            <div class="d-flex align-items-center">
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-decoration-none text-dark dropdown-toggle" data-bs-toggle="dropdown">
                        <img src="https://ui-avatars.com/api/?name=Admin+Hotel&background=0d6efd&color=fff" alt="" width="35" height="35" class="rounded-circle me-2">
                        <strong>Administrator</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        