<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Fatwas</title>

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

<body >
    <div class="container">
        <h2 class="text-center mb-4">Senarai Fatwa Negeri Perak</h2>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card-body">
                    
                        <form action="{{ route('fatwas.searchView') }}" method="GET" class="mb-3">
                            <div class="form-row align-items-center">
                                <div class="col-md-8">
                                    <label class="sr-only" for="search">Search</label>
                                    <input type="text" class="form-control mb-2" id="search" name="search" placeholder="Carian mengikut Tajuk atau Keputusan" value="{{ request('search') }}">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary mb-2 btn-block">Search</button>
                                </div>
                                <div class="col-md-4">
                                    <label class="sr-only" for="kategori">Kategori</label>
                                    <select class="form-control" id="kategori" name="kategori">
                                        <option value="">Pilih Kategori</option>
                                        <option value="Akidah" {{ request('kategori') == 'Akidah' ? 'selected' : '' }}>Akidah</option>
                                        <option value="Ibadah" {{ request('kategori') == 'Ibadah' ? 'selected' : '' }}>Ibadah</option>
                                        <option value="Wakaf" {{ request('kategori') == 'Wakaf' ? 'selected' : '' }}>Wakaf</option>
                                        <option value="Muamalat" {{ request('kategori') == 'Muamalat' ? 'selected' : '' }}>Muamalat</option>
                                        <option value="Munakat" {{ request('kategori') == 'Munakat' ? 'selected' : '' }}>Munakat</option>
                                        <option value="Faraid" {{ request('kategori') == 'Faraid' ? 'selected' : '' }}>Faraid</option>
                                        <option value="Masjid" {{ request('kategori') == 'Masjid' ? 'selected' : '' }}>Masjid</option>
                                        <option value="Perubatan" {{ request('kategori') == 'Perubatan' ? 'selected' : '' }}>Perubatan</option>
                                        <option value="Lain-Lain" {{ request('kategori') == 'Lain-Lain' ? 'selected' : '' }}>Lain-Lain</option>
                    
                    
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="sr-only" for="status_pewartakan">Status Pewartakan</label>
                                    <select class="form-control" id="status_pewartakan" name="status_pewartakan">
                                        <option value="">Pilih Status Pewartakan</option>
                                        <option value="diwartakan" {{ request('status_pewartakan') == 'diwartakan' ? 'selected' : '' }}>Diwartakan</option>
                                        <option value="tidak_diwartakan" {{ request('status_pewartakan') == 'tidak_diwartakan' ? 'selected' : '' }}>Tidak Diwartakan</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-success mb-2 btn-block">Apply Filters</button>
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ route('fatwas.view') }}" class="btn btn-secondary btn-block mb-2">Clear Filters</a>
                                </div>
                            </div>
                        </form>
    
    
                        <table class="table table-bordered">
                            
                            <thead>
                                <tr>
                                    
                                    <th>ID</th>
                                    <th>Tajuk</th>
                                    <!-- Add more table headers if needed -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fatwas as $fatwa)
                                <tr>
                                    <td>{{ $fatwa->id }}</td>
                                    <td>{{ $fatwa->tajuk }}</td>
                                    <!-- Add more table cells with corresponding data if needed -->
                                    <td>
                                        <a href="{{ route('fatwas.show', $fatwa->id) }}" class="btn btn-primary btn-sm">Lihat</a>
                                        <!-- Add more buttons or actions as needed -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
    
                        <div class="d-flex justify-content-center">
                            {{ $fatwas->links('custom-pagination') }}
                        </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Add your scripts here -->
    <script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template') }}/dist/js/adminlte.min.js"></script>

</body>

</html>
