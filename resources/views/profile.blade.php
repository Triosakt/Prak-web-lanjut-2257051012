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
            /* Background gradasi */
            background: linear-gradient(135deg, #4a90e2, #9013fe);
        }

        .card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 350px;
            text-align: center;
        }

        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #e9ecef;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 60px;
            color: #6c757d;
        }

        .info {
            margin-top: 20px;
        }

        .info div {
            background-color: #f1f3f5;
            margin: 12px 0;
            padding: 15px;
            border-radius: 10px;
            font-size: 18px;
            color: #333;
        }

        .info div span {
            font-weight: bold;
            color: #555;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="profile-pic">
            &#128100;
        </div>
        <div class="info">
            <div><span>Nama:</span> {{ $nama }}</div>
            <div><span>Kelas:</span> {{ $kelas }}</div>
            <div><span>NPM:</span> {{ $npm }}</div>
        </div>
    </div>

</body>
</html>
