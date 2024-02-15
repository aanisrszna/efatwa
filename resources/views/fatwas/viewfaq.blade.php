<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Jawab Agama
    </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

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

    <section class="dev" id="first-page">
        <a name="services"></a>
        <header>
            <h2 class="text-center mb-4">Soal Jawab Agama</h2>
        </header>

        <div class="container" style="margin-top: 50px;">
            <div class="row text-center">
                <form action="{{ route('fatwas.searchFAQuser') }}" method="GET" class="mb-3">
                    <div class="form-row align-items-center">
                        <div class="col-md-12">
                            <label class="sr-only" for="search">Search</label>
                            <div class="input-group">
                                <input type="text" class="form-control mb-2" id="search" name="search" placeholder="Carian mengikut Soalan dan Jawapan" value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                                </div>                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </form>
                
                
                
                <table id="myfaqtable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Soalan</th>
                            <th>Jawapan</th>
                            <th>Tarikh</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($quest as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->inquery }}</td>
                            <td>{{ $item->answer }}</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.ROW -->
        </div>
        <!-- /.CONTAINER -->
    </section>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
