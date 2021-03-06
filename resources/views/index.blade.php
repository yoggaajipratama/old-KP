<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="refresh" content="6">
  <title>IOT TANAMAN | Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/jqvmap/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/summernote/summernote-bs4.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="font-size: 10pt">
  
  <div class="wrapper">
    <nav class="navbar-gray navbar navbar-expand" style="margin-bottom: 30px">
      <button><a href="{{url('/')}}">Kelembapan Harian</a></button>
      <button><a href="{{url('tahunan')}}">Kelembapan Tahunan</a></button>
      <button><a href="{{url('/grafik')}}">Grafik Harian</a></button>
    </nav>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <sup style="font-size: 20px">
                    {{$data->max('humidity')}}%
                  </sup>
                </h3>
                <p>Kelembapan terbesar</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                  <sup style="font-size: 20px">
                    {{$data->min('humidity')}}%
                  </sup>
                </h3>
                <p>Kelembapan terkecil</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <section class="col-lg-8 connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>Tabel Kelembapan harian</h3><br>
              </div>
              <div>
                <table style="border: solid;">
                  <tr style="border: solid;">
                    <th style="border: solid;padding: 10px">ID</th>
                    <th style="border: solid;padding: 10px">Kelembapan</th>
                    <th style="border: solid;padding: 10px">Tanggal & Waktu</th>
                    <th style="border: solid;padding: 10px">Status</th>
                  </tr>
                  <p style="font-weight: bold;font-size: 8pt"><i class="fas fa-chart-pie mr-1"></i>di urutkan secara desc</p>
                  @foreach($data as $key)
                  <tr style="border: solid;">
                    <td style="border: solid;padding: 10px">{{$key->id}}</td>
                    <td style="border: solid;padding: 10px">{{$key->humidity}}%</td>
                    <td style="border: solid;padding: 10px">{{$key->date}} | {{$key->time}}</td>
                    <td style="border: solid;padding: 10px;font-weight: bold;">{{$key->status}}</td>
                  </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <div style="width: 50%; margin: 30px;">
    {{$data->links()}}
  </div>
  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>

<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script>$.widget.bridge('uibutton', $.ui.button)</script>
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('/plugins/sparklines/sparkline.js')}}"></script>
<script src="{{asset('/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{asset('/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset('/dist/js/adminlte.js')}}"></script>
<script src="{{asset('/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset('/dist/js/demo.js')}}"></script>
</body>
</html>
