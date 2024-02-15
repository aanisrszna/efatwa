
@extends('layouts.dashboard')

@section('content')
<div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="m-0">FAQ</h5>
      </div>
      <div class="card-body">
        <div class="container mt-1">
    
            @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
    
            <form method="post" action="{{ route('fatwas.faqstore') }}" enctype="multipart/form-data">
                @csrf
    
                <div class="form-group">
                    <label for="soalan">Soalan</label>
                    <input type="text" name="soalan" value="{{ isset($quest) ? $quest->inquery : '' }}" class="form-control" required>
                    @error('soalan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phonenum">Nombor Telefon</label>
                    <input type="number" name="phonenum" value="{{ isset($quest) ? $quest->phonenum : '' }}" class="form-control" required>
                    @error('phonenum')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <input type="text" name="id" value="{{ isset($quest) ? $quest->id : '' }}" style="display: none;"/>
    
                <div class="form-group">
                    <label for="jawapan">Jawapan</label>
                    <textarea name="jawapan" class="form-control" required>{{ old('jawapan') }}</textarea>
                    @error('jawapan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
    
                <button type="submit" class="btn btn-primary">Hantar</button>
            </form>
        </div>
      </div>
    </div>


  </div>                                                                                                                                                                                                                        


    <!-- Include Bootstrap JS if you are using Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection




