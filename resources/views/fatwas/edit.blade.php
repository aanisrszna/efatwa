@extends('layouts.dashboard')

@section('content')
<div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="m-0">Kemaskini Fatwa</h5>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="post" action="{{ route('fatwas.update', $fatwa->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
        
                            <div class="form-group">
                                <label for="exampleInputName1">Tajuk</label>
                                <input type="text" name="tajuk" value="{{ $fatwa->tajuk }}" class="form-control" required>
                            </div>
        
                            <div class="form-group">
                                <label for="exampleInputEmail3">Status Pewartakan</label>
                                <select name="status_pewartakan" class="form-control" required>
                                    <option value="Diwartakan" {{ ($fatwa->status_pewartakan == 'Diwartakan') ? 'selected' : '' }}>Diwartakan</option>
                                    <option value="Tidak Diwartakan" {{ ($fatwa->status_pewartakan == 'Tidak Diwartakan') ? 'selected' : '' }}>Tidak Diwartakan</option>
                                </select>
                            </div>
        
                            <div class="form-group">
                                <label for="exampleInputEmail3">Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option value="Akidah" {{ ($fatwa->kategori == 'Akidah') ? 'selected' : '' }}>Akidah</option>
                                    <option value="Ibadah" {{ ($fatwa->kategori == 'Ibadah') ? 'selected' : '' }}>Ibadah</option>
                                    <option value="Wakaf" {{ ($fatwa->kategori == 'Wakaf') ? 'selected' : '' }}>Wakaf</option>
                                    <option value="Muamalat" {{ ($fatwa->kategori == 'Muamalat') ? 'selected' : '' }}>Muamalat</option>
                                    <option value="Munakahat" {{ ($fatwa->kategori == 'Munakahat') ? 'selected' : '' }}>Munakahat</option>
                                    <option value="Faraid" {{ ($fatwa->kategori == 'Faraid') ? 'selected' : '' }}>Faraid</option>
                                    <option value="Masjid" {{ ($fatwa->kategori == 'Masjid') ? 'selected' : '' }}>Masjid</option>
                                    <option value="Perubatan" {{ ($fatwa->kategori == 'Perubatan') ? 'selected' : '' }}>Perubatan</option>
                                    <option value="Lain-Lain" {{ ($fatwa->kategori == 'Lain-Lain') ? 'selected' : '' }}>Lain-Lain</option>
                                </select>
                            </div>
        
                            <div class="form-group">
                                <label for="exampleInputName1">Tarikh Keputusan</label>
                                <input type="date" name="tarikh_keputusan" value="{{ $fatwa->tarikh_keputusan }}" class="form-control" required>
                            </div>
        
                            <div class="form-group">
                                <label for="exampleInputName1">Tarikh Diwartakan</label>
                                <input type="date" name="tarikh_diwartakan" value="{{ $fatwa->tarikh_diwartakan }}" class="form-control" required>
                            </div>
        
                            <div class="form-group">
                                <label for="exampleInputName1">Keputusan</label>
                                <textarea name="keputusan" class="form-control">{{ $fatwa->keputusan }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="newPdfFile">Kemaskini Fail PDF</label>
                                <input type="file" name="newPdfFile" class="form-control-file" accept=".pdf">
                                @error('newPdfFile')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Sila Muatnaik Fail Pdf baru, jika perlu</small>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2" name="submit">Kemaskini</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>


  </div>


@endsection
