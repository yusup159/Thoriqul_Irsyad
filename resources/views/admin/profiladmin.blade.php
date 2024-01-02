<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profil Pengguna</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gaya khusus untuk profil */
        .profile-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-top: 50px;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-info {
            text-align: center;
        }

        .profile-info h2 {
            margin-bottom: 10px;
        }

        .profile-info p {
            color: #666;
        }
    </style>
</head>

<body>

    <div class="profile-container">
        <div class="profile-picture">
            <img src="https://placekitten.com/150/150" alt="Profil Picture">
        </div>
        <div class="profile-info">
            <h2>Nama Pengguna</h2>
            <p>Email: user@example.com</p>
            <p>Lokasi: Kota Anda</p>
            <p>Deskripsi singkat tentang pengguna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>

    <!-- Tambahkan script Bootstrap JS (opsional, tergantung kebutuhan) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
