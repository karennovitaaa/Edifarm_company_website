<!DOCTYPE html>
<html>
<head>
    <title>Laporan</title>
    <style>
        /* CSS styling for the report */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .rangkasurat {
            width: 980px;
            margin: 0 auto;
            background-color: #fff;
            height: 500px;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-top: -350px;
            margin-bottom: 30px;
        }
        h2 {
            margin-bottom: 20px;
        }
        table {
            width: 65%;
            border-collapse: collapse;
            margin-bottom: 30px;
            margin-right: 50%;
            margin-top: -20px;
            border-bottom: 5px solid #000;
        }
        .tabel1 {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
            margin-right: 50%;
            border-bottom: 5px solid #fff;
        }
        .tengah {
            text-align: center;
            line-height: 5px;
            margin-right: 50px;
        }
        th, td {
            padding: 8px;
            border-bottom: 1px solid #fff;
        }

        th {
            background-color: #f2f2f2;
        }
        img {
        width: 140px;
        margin-left: -30px;
        margin-right: -30px;
        }
    </style>
</head>
<body>
    <div class="rangkasurat">
        <!-- <table width="100%"> -->
        <table>
        <tr>
            <td><img src="../public/images/Logo1.png"></td>
            <td class="tengah">
                <h2>EDIFARM COMPANY</h2>
                <p style="font-style: italic;">Jl Gajah Mada 17A N0.38 Kode pos 68133</p>
                <p style="font-style: italic;">Provinsi Jawa Timur Telp / Fax 089509579032</p>
                <p style="font-style: italic;">Email:edifarm21@gmail.com</p>
            </td>
            <td><img src="../public/images/logofix.png"></td>
        </tr>
        </table>
    </div>
    <h1>Laporan</h1>

    <h2>Data Pengguna</h2>
    <p>Nama: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Alamat: {{ $user->address }}</p>

    <h2>Data Sesi</h2>
    <p>Nama Tanaman: {{ $session->plant_name }}</p>
    <p>Tanggal Mulai: {{ $session->start }}</p>
    <p>Tanggal Selesai: {{ $session->end }}</p>

    <h2>Data Aktivitas</h2>
    <table class ="tabel1">
        <thead>
            <tr>
                <th>Nama Aktivitas</th>
                <th>Status</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
                <tr>
                    <td>{{ $activity->activity_name }}</td>
                    <td>{{ $activity->status }}</td>
                    <td>{{ $activity->start }}</td>
                    <td>{{ $activity->end }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
