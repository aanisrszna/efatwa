<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $fatwa->tajuk }}</title>

    <!-- Add your stylesheets here -->
    <link rel="stylesheet" href="{{ asset('template') }}/dist/css/adminlte.min.css">

    <style>
        body {
        margin: 0;
            padding: 0;
            background: url('https://wallpapers.com/images/hd/islamic-background-k2wrivt7sowjxwwd.jpg') no-repeat center center fixed;
            background-size: cover; /* Make the background image cover the entire screen */
        }

        .container {
            background-color: #ffffff; /* Set background color for the container */
            border: 1px solid #d6d8db;
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
        }

        h2 {
            border-bottom: 1px solid #d6d8db;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        a {
            color: #007bff;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>{{ $fatwa->tajuk }}</h2>
        <p>Status Pewartakan: {{ $fatwa->status_pewartakan }}</p>
        <p>Kategori: {{ $fatwa->kategori }}</p>
        <p>Tarikh Keputusan: {{ $fatwa->tarikh_keputusan }}</p>
        <p>Tarikh Diwartakan: {{ $fatwa->tarikh_diwartakan }}</p>
        <p>Keputusan: {{ $fatwa->keputusan }}</p>
        <p>File: <a href="{{ url('storage/' . $fatwa->fail) }}" target="_blank">View PDF</a></p>
    </div>

    <!-- Add your scripts here -->
    <script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template') }}/dist/js/adminlte.min.js"></script>
</body>

</html>
