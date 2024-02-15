@extends('layouts.dashboard')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h5 class="m-0">Kemaskini Soalan dan Jawapan</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="post" action="{{ route('fatwas.updatefaq', $question->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="exampleInputName1">Soalan</label>
                                    <input type="text" name="soalan" value="{{ isset($question) ? $question->inquery : '' }}" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName2">Nombor Telefon</label>
                                    <input type="text" name="phonenum" value="{{ isset($question) ? $question->phonenum : '' }}" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail3">Jawapan</label>
                                    <textarea name="jawapan" class="form-control" required>{{ $question->answer }}</textarea>
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
