@extends('layouts.admin')
@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard') }}</h1>

    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    
          <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                            Kecamatan
                            <div class="text-white-50 small">44</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-success text-white shadow">
                        <div class="card-body">
                            Desa
                            <div class="text-white-50 small">424</div>
                        </div>
                    </div>
                    </div>
                          
          
       <!--  Data Grafik -->  
       <div class="row">
          <div class="col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Data Agama
              </div>
              <div class="card-body">
                <canvas class="chart-agama" width="400" height="200"></canvas>  
              </div>      
            </div>
          </div>
    
          
          <div class="col-md-6 mb-2">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Data Pendidikan
              </div>
              <div class="card-body">
                <canvas class="chart-pendidikan" width="400" height="200"></canvas>
              </div>
            </div>
        </div>
      
        
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Data Golongan Darah
              </div>
              <div class="card-body">
                <canvas class="chart-golonganDarah" width="400" height="200"></canvas>  
              </div>
            </div>
            </div>
            
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Data kepemilikan kk
              </div>
              <div class="card-body">
                <canvas class="chart-kepemilikanKk" width="400" height="200"></canvas>
              </div>
            </div>
          </div>


          <div class="row">
          <div class="col-md-6 mb-2">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Data Disabilitas
              </div>
              <div class="card-body">
                <canvas class="chart-disabilitas" width="400" height="200"></canvas>
              </div>
            </div>
          </div>
     
          <div class="col-md-6 mb-2">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Data Status Kawin
              </div>
              <div class="card-body">
                <canvas class="chart-StatusKawin" width="400" height="200"></canvas>  
              </div>    
            </div>
          </div>

           
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Data Pekerjaan
              </div>
              <div class="card-body">
                <canvas class="chart-pekerjaan" width="400" height="200"></canvas>  
              </div>
              
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Data Umur
              </div>
              <div class="card-body">
                <canvas class="chart-umur" width="400" height="200"></canvas>
              </div>
            </div>
          </div>
        </div>


        
  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
           </div>
        </div>
      </div>
    </div>

   
    <script>
        $(document).ready(function() {
            $.get('/api/kecamatan-count', function(data) {
                $('#kecamatan-count').text(data.count);
            });

            $.get('/api/desa-count', function(data) {
                $('#desa-count').text(data.count);
            });
        });
    </script>
    
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/assets/js/jquery-3.5.1.js"></script>
    <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/dataTables.bootstrap5.min.js"></script>
    <script src= "/js/script.js"></script>
 
  <!-- Template Main JS File -->
</body>

@endsection

