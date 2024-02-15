@extends('layouts.dashboard')

@section('content')
<div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="m-0">Featured</h5>
      </div>
      <div class="card-body">
        <div class="container mt-5">
            <h2 class="mb-4">Report Fatwa</h2>
    
            @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
    
            <p>Sila pilih tahun fatwa diwartakan:</p>
            <select class="form-select" aria-label="Default select example" onchange="redirect_tahun(this)">
                <option selected>Please select year</option>
                <option value="ALL">ALL</option>
                @for($i = 1970; $i < 2030; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
    
            <div id="chart"></div>
        </div>
      </div>
    </div>


  </div>


    <!-- Include Bootstrap JS if you are using Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            chart: {
                type: 'bar'
            },
            series: [{
                data: [
                    { x: 'Akidah', y: {{ $tmpArr[0] }} },
                    { x: 'Ibadah', y: {{ $tmpArr[1] }} },
                    { x: 'Wakaf', y: {{ $tmpArr[2] }} },
                    { x: 'Muamalat', y: {{ $tmpArr[3] }} },
                    { x: 'Munakahat', y: {{ $tmpArr[4] }} },
                    { x: 'Faraid', y: {{ $tmpArr[5] }} },
                    { x: 'Masjid', y: {{ $tmpArr[6] }} },
                    { x: 'Perubatan', y: {{ $tmpArr[7] }} },
                    { x: 'Lain-lain', y: {{ $tmpArr[8] }} }
                ]
            }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        function redirect_tahun(selectElement) {
            var selectedValue = selectElement.value;
            window.location.href = '{{ route("fatwas.report", ":selectedValue") }}'.replace(':selectedValue', selectedValue);
        }
    </script>
@endsection
