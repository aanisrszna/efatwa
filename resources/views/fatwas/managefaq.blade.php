@extends('layouts.dashboard')

@section('content')
    <!-- Display success message if any -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="container">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-0">Kemaskini Soal Jawab</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('fatwas.searchFAQ') }}" method="GET" class="mb-3">
                        <div class="form-row align-items-center">
                            <div class="col-md-8">
                                <label class="sr-only" for="search">Search</label>
                                <input type="text" class="form-control mb-2" id="search" name="search" placeholder="Cari Soalan atau Jawapan">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary mb-2 btn-block">Cari</button>
                            </div>
                        </div>
                    </form>

                    <!-- Fatwa Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Soalan</th>
                                <th>No Telefon</th>
                                <th>Jawapan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($questions as $key => $question)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $question->inquery }}</td>
                                    <td>{{ $question->phonenum }}</td>
                                    <td>{{ $question->answer }}</td>
                                    <td>
                                        <a href="{{ route('fatwas.editfaq', $question->id) }}"
                                            class="btn btn-success btn-sm btn-block">Kemaskini</a>

                                        <!-- Delete Form -->
                                        <form action="{{ route('fatwas.deletefaq', $question->id) }}" method="post"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm btn-block"
                                                onclick="return confirm('Are you sure you want to delete this question?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Tiada Soal Jawab dijumpai</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $questions->links('custom-pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
