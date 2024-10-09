<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f4f8;
        }
        .card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #e9ecef;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 50px;
            color: #6c757d;
        }
        .info {
            margin-top: 20px;
        }
        .info div {
            background-color: #e9ecef;
            margin: 10px 0;
            padding: 10px;
            border-radius: 8px;
            font-size: 16px;
        }
        .info div span {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="profile-pic">
            <!-- Menggunakan Unicode karakter ikon orang -->
            &#128100;
        </div>
        <div class="info">
            <div><span>Nama: </span><?= $nama ?></div>
            <div><span>Kelas: </span><?= $kelas ?></div>
            <div><span>NPM: </span><?= $npm ?></div>
        </div>
    </div>

</body>
</html>
