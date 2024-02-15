@extends('layouts.dashboard')

@section('content')
<div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="m-0">Tambah Fatwa</h5>
      </div>
      <div class="card-body">
        <div class="container mt-1">

            @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
    
            <form method="post" action="{{ route('fatwas.store') }}" enctype="multipart/form-data">
                @csrf
    
                <div class="form-group">
                    <label for="tajuk">Tajuk</label>
                    <input type="text" name="tajuk" value="{{ old('tajuk') }}" class="form-control" required>
                    @error('tajuk')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="status_pewartakan">Status Pewartakan</label>
                    <select name="status_pewartakan" class="form-control" required>
                        <option value="">Pilih Status Pewartakan</option>
                        <option value="Diwartakan">Diwartakan</option>
                        <option value="Tidak Diwartakan">Tidak Diwartakan</option>
                    </select>
                    @error('status_pewartakan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" class="form-control" required>
                        <option value="">Pilih Kategori</option>
                        <option value="Akidah">Akidah</option>
                        <option value="Ibadah">Ibadah</option>
                        <option value="Wakaf">Wakaf</option>
                        <option value="Muamalat">Muamalat</option>
                        <option value="Munakahat">Munakahat</option>
                        <option value="Faraid">Faraid</option>
                        <option value="Masjid">Masjid</option>
                        <option value="Perubatan">Perubatan</option>
                        <option value="Lain-Lain">Lain-Lain</option>
                    </select>
                    @error('kategori')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="tarikh_keputusan">Tarikh Keputusan</label>
                    <input type="date" name="tarikh_keputusan" value="{{ old('tarikh_keputusan') }}" class="form-control" required>
                    @error('tarikh_keputusan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="tarikh_diwartakan">Tarikh Diwartakan</label>
                    <input type="date" name="tarikh_diwartakan" value="{{ old('tarikh_diwartakan') }}" class="form-control" required>
                    @error('tarikh_diwartakan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="keputusan">Keputusan</label>
                    <textarea name="keputusan" class="form-control" required>{{ old('keputusan') }}</textarea>
                    @error('keputusan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="pdfFile">Muatnaik PDF File</label>
                    <input type="file" name="fail" class="form-control-file" accept=".pdf" required>
                    @error('fail')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">Please upload a PDF file only.</small>
                </div>
    
    
                <button type="submit" class="btn btn-primary">Tambah Fatwa</button>
            </form>
        </div>
      </div>
    </div>


  </div>


    <!-- Include Bootstrap JS if you are using Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="{{ asset('js/script-notification.js') }}"></script>
    

    @endsection