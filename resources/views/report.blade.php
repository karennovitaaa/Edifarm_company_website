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

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Laporan</h1>

    <h2>Data Pengguna</h2>
    <p>Nama: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>

    <h2>Data Sesi</h2>
    <p>Nama Tanaman: {{ $session->plant_name }}</p>
    <p>Tanggal Mulai: {{ $session->start }}</p>
    <p>Tanggal Selesai: {{ $session->end }}</p>

    <h2>Data Aktivitas</h2>
    <table>
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
