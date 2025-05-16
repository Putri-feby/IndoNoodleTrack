<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Gudang</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5; /* Warna latar belakang */
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #0095c8; /* Warna sidebar */
            color: white;
            padding: 20px;
            position: fixed;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            text-align: center; /* Memusatkan logo */
        }

        .sidebar img {
            max-width: 80%; /* Mengatur ukuran logo */
            height: auto;
            margin-bottom: 20px; /* Jarak di bawah logo */
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #007bb5; /* Warna saat hover */
        }

        .content {
            margin-left: 250px; /* Menggeser konten ke kanan */
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            margin: 0;
            font-size: 28px; /* Ukuran font judul */
        }

        .dashboard-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px 0;
        }

        .card-title {
            font-size: 20px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .card-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .status {
            display: flex;
            align-items: center;
        }

        .status span {
            margin-left: 10px;
            font-weight: bold;
        }

        .status.green {
            color: green;
        }

        .status.red {
            color: red;
        }

        .profile {
            display: flex;
            align-items: center;
        }

        .profile img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="../../../../assets/images/logoindonoodletrack.png" alt="Logo"> <!-- Logo IndoNoodleTrack -->
        <a href="#">Dashboard</a>
        <a href="#">Permintaan Masuk</a>
        <a href="#">Retur Masuk</a>
        <a href="#">Monitoring</a>
        <a href="#">Stok</a>
    </div>

    <div class="content">
        <div class="header">
            <div class="sample-image-section">
                <img src="../../../../assets/images/sample-image.jpg" alt="Sample Image" style="width: 100%; max-width: 500px; margin: 20px 0;">
            </div>
            <h1>Dashboard Gudang</h1>
            <div class="profile">
                <a href="../../../views/auth/logout.php" class="logout-btn">Logout</a>
                <img src="../../../../assets/images/profile.jpg" alt="Profile Picture"> <!-- Ganti dengan foto profil yang sesuai -->
                <span>Dividi Gudang</span>
            </div>
        </div>

        <div class="dashboard-card">
            <div class="card-title">Permintaan Bahan Baku</div>
            <div class="card-content">
                <div class="status green">
                    <span>5 Selesai</span>
                </div>
                <div class="status red">
                    <span>0 Belum Selesai</span>
                </div>
            </div>
        </div>

        <div class="dashboard-card">
            <div class="card-title">Retur Bahan Baku</div>
            <div class="card-content">
                <div class="status green">
                    <span>3 Selesai</span>
                </div>
                <div class="status red">
                    <span>1 Belum Selesai</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>