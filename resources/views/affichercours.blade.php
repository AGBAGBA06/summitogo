<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Contact - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="" alt="">
        <span class="d-none d-lg-block">Summit</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


  </header><!-- End Header -->

 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="index.html">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->
  <li class="nav-heading">Pages</li>
    {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="{{ URL::('ajoutercours') }}">
        <i class="bi bi-envelope"></i>
        <span>ajoutercours</span>
      </a>
    </li> --}}

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ URL::to('ajoutercours') }}">
        <i class="bi bi-card-list"></i>
        <span>ajouter cours</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ URL::to('affichercours') }}">
        <i class="bi bi-card-list"></i>
        <span>afficher cours</span>
      </a>
    </li>
    <!-- End Register Page Nav -->

   

  </ul>

</aside><!-- End Sidebar-->

  <main id="main" class="main">
    <div class="row">
      @section('content')
<div class="card">
        <div class="card-body">
          <h4 class="card-title">Categories</h4>
          
          @if (Session::has('status'))
          <div class="alert alert-success">
            {{Session::get('status')}}
          </div>
        @endif
      <!-- Recent Sales -->
      
       <input type="hidden" $increment = 1 >
       <input type="hidden" value={{ $increment = 1 }} class="form-control">

      <div class="col-12">
        <div class="card recent-sales overflow-auto">
        <div class="card-body">
            <h5 class="card-title">ajouter Cours</span></h5>
            <table class="table table-borderless datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Titre</th>
                  <th scope="col">contenu</th>
                  <th scope="col">Niveau</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($cours as $cour)
                <tr>
                  <td>{{$increment}}</td>
                  <td>{{$cour->titre}}</td>
                  <td>{{$cour->contenu}}</td>
                  <td>{{$cour->niveau}}</td>
                   <td>
                    @if ($cour->status==1)
                    <label class="badge badge-success">Activé</label>
                    @else
                    <label class="badge badge-danger">desactivé</label>
                    @endif
                  </td>

                  <td>
                    <button class="btn btn-outline-primary" >
                      <a href="{{url('/edit_cour/'.$cour->id)}}"> edit</a></button>
                    <a href="{{url('/deletecour/'.$cour->id)}}" id="delete" class="btn btn-outline-danger">Delete</a>
                    @if ($cour->status==1)
                    <button class="btn btn-outline-warning" >
                         <a href="{{url('/desactiver_cours/'.$cour->id)}}"> desactivé</a></button>
                      @else
                       <button class="btn btn-outline-primary" >
                         <a href="{{url('/activer_cours/'.$cour->id)}}">activé</a></button>
                     @endif
                  </td>
                </tr>
                <input type="hidden" value={{ $increment=$increment+1 }}>
                
              @endforeach
              </tbody>
              
            </table>

          </div>

        </div>
      </div><!-- End Recent Sales -->
    </div>
  </main><!-- End #main -->

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>