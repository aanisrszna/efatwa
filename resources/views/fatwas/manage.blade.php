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
                    <h5 class="m-0">Kemaskini Fatwa</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('fatwas.searchManage') }}" method="GET" class="mb-3">
                        <div class="form-row align-items-center">
                            <div class="col-md-8">
                                <label class="sr-only" for="search">Search</label>
                                <input type="text" class="form-control mb-2" id="search" name="search" placeholder="Search by Tajuk or Keputusan" value="{{ request('search') }}">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary mb-2 btn-block">Search</button>
                            </div>
                            <div class="col-md-4">
                                <label class="sr-only" for="kategori">Kategori</label>
                                <select class="form-control" id="kategori" name="kategori">
                                    <option value="">Select Kategori</option>
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
                                    <option value="diwartakan" {{ request('status_pewartakan') == 'diwartakan' ? 'selected' : '' }}>Diwartakan</option>
                                    <option value="tidak_diwartakan" {{ request('status_pewartakan') == 'tidak_diwartakan' ? 'selected' : '' }}>Tidak Diwartakan</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success mb-2 btn-block">Apply Filters</button>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ route('fatwas.manage') }}" class="btn btn-secondary btn-block mb-2">Clear Filters</a>
                            </div>
                        </div>
                    </form>

                    <!-- Fatwa Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tajuk</th>
                                <th>Status Pewartakan</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($fatwas as $key => $fatwa)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $fatwa->tajuk }}</td>
                                    <td>{{ $fatwa->status_pewartakan }}</td>
                                    <td>{{ $fatwa->kategori }}</td>
                                    <td>
                                        <a href="{{ route('fatwas.edit', $fatwa->id) }}"
                                            class="btn btn-success btn-sm btn-block">Edit</a>

                                        <!-- Delete Form -->
                                        <form action="{{ route('fatwas.delete', $fatwa->id) }}" method="post"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm btn-block"
                                                onclick="return confirm('Are you sure you want to delete this fatwa?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Tiada Fatwa Dijumpai</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $fatwas->links('custom-pagination') }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
