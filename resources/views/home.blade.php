@extends('layouts.dashboard')

@section('content')
<div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="m-0">Featured</h5>
      </div>
      <div class="card-body">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Dashboard</h1>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
              </div>
          </div>
      </div>
  </div>

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
              <!-- Box 1: Total Fatwas -->
              <div class="col-lg-4 col-6">
                  <div class="small-box bg-info">
                      <div class="inner">
                          <h3>{{ $totalFatwas }}</h3>
                          <p>Jumlah Fatwa</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-document-text"></i>
                      </div>
                  </div>
              </div>

              <!-- Box 2: Total FAQ -->
              <div class="col-lg-4 col-6">
                  <div class="small-box bg-warning">
                      <div class="inner">
                          <h3>{{ $totalFAQ }}</h3>
                          <p>Jumlah Soal Jawab</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-help-circled"></i>
                      </div>
                  </div>
              </div>

              <!-- Box 3: Total Admins -->
              <div class="col-lg-4 col-6">
                  <div class="small-box bg-success">
                      <div class="inner">
                          <h3>{{ $totalUsers }}</h3>
                          <p>Jumlah Admin</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-person-stalker"></i>
                      </div>
                  </div>
              </div>
          </div>
          <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
      </div>
    </div>


</div>
@endsection



