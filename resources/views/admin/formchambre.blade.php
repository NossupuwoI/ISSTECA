<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des Chambres</title>
  {{-- loader --}}
  <link rel="stylesheet" href="{{ ('js/style.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <script src="{{ ('js/preloader.js') }}"></script> 
    <div class="wrapper">
        <!-- Navbar -->
        @include('../nav')
  @include('../sider')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">

                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                            @endforeach
                        </ul>

                    </div>
                    <!-- /.card-header -->


                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                              


                          <form class="form-group" action="/chambre/traitement" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" class="form-control input-default" name="User" value="{{ Auth::user()->id }}" style="display: none"  required>
                            <div class="row">
    
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <label for="">Categorie</label><br>
                                    <select name="nom" id="" class="select form-control-lg">
                                        <option value="">Choisissez le Nom de la Categorie</option>
                                        @foreach ($categories as $categorie )
                                            <option value="{{ $categorie->nom }}">{{ $categorie->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>          
                              </div>
                              <div class="col-md-6 mb-4" >
                                <label for="">Nombre de lit</label><br>
                                <div class="form-check form-check-inline">
                                  
                                    <select name="lit" id="" class="select form-control-lg">
                                        <option value="1">Choisissez le Nombre de lit</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            </div>

                            <div class="row">
                              <div class="col-md-6 mb-4">
                                <label for="">Numéro de chambre</label><br>
                                <div class="form-outline">
                                    <select name="num_chambre" id="" class="select form-control-lg">
                                        <option value="1">Choisissez le  Numéro de la
                                            chambre</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                              </div>
                              </div>
                              <div class="col-md-6 mb-4" >
                                <label for="">Numéro de l'étage</label><br>
                                <div class="form-check form-check-inline">
                                    <select name="num_etage" id="" class="select form-control-lg">
                                        <option value="1">Choisissez le Numéro de 
                                            l’étage</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                            </div>
                            </div>

                            <div class="row">
                              
                          
                              <div class="col-md-6 mb-4">
                                <label for="">Nombre d'enfant</label><br>
                                <div class="form-outline">
                                    <select name="enfant" id="" class="select form-control-lg">
                                        <option value="1">Choisissez le Nombre d'enfant</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                              </div>
                              </div>
                              <div class="col-md-6 mb-4" >
                                <label for="">Numéro d'adulte</label><br>
                                <div class="form-check form-check-inline">
                                    <select name="adulte" id="" class="select form-control-lg">
                                        <option value="1">Choisissez le Nombre d'atulte</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                    </select>
                                </div>
                            </div>
                            </div>


                            <div class="row">
                            

                              <div class="col-md-6 mb-4">
                                <label for="Nombre de baignoires">Nombre de baignoires</label>
                                <div class="form-outline">
                                    <select name="baignoire" id="" class="select form-control-lg">
                                        <option value="">Choisissez le Nombre de baignoires</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                              </div>

                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                     <label for="exampleInputPassword1"  class="form-label">prix</label>
                                    <input type="text" class="form-control form-control-lg" name="prix">
                              </div>
                              </div>

                            </div>

                            <div class="row">
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                     <label for="exampleInputPassword1" class="form-label">photo 1</label>
                                    <input type="file" class="form-control form-control-lg" name="photo1">
                              </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                     <label for="exampleInputPassword1" class="form-label">photo 2</label>
                                    <input type="file" class="form-control form-control-lg" name="photo2">
                              </div>
                              </div>
                            </div>


                            <div class="row">
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                     <label for="exampleInputPassword1" class="form-label">photo 3</label>
                                    <input type="file" class="form-control form-control-lg" name="photo3">
                              </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                     <label for="exampleInputPassword1" class="form-label">photo 4</label>
                                    <input type="file" class="form-control form-control-lg" name="photo4">
                              </div>
                              </div>
                            </div>


                            <div class="row">
                              {{-- <div class="col-md-6 mb-4"> --}}
                                {{-- <div class="form-outline"> --}}
                                     {{-- <label for="exampleInputPassword1"  class="form-label">prix</label>
                                    <input type="text" class="form-control form-control-lg" value="{{$chambres->prix}}" name="prix">
                              </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                <div class="form-outline"> --}}
                                  <label for="exampleInputPassword1" class="form-label">Libelle</label>
                                  <input type="text" class="form-control form-control-lg"  name="libelle" placeholder="description de la chambre">
                              {{-- </div> --}}
                              {{-- </div> --}}
                            </div> <br>


                            <input type="text" style="display: none" name="statut" value="Libre">

                            
                            <div class="row">
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <a class="btn btn-danger btn-lg w-100 " href="/chambre" value="Submit">Retour</a>  
                              </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <input class="btn btn-primary btn-lg w-100 " type="submit" value="Submit" />
                                     
                              </div>
                              </div>
                            </div>
                          </form>
                            


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- updare -->

    


    <!-- /.content-wrapper -->
    @include('../footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->>


  
  
  <script>
   var myAlert = document.getElementById('myAlert')
   myAlert.addEventListener('closed.bs.alert', function () {
  // do something, for instance, explicitly move focus to the most appropriate element,
  // so it doesn't get lost/reset to the start of the page
   document.getElementById('...').focus()
})
  </script>
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.j') }}s"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true
                , "lengthChange": false
                , "autoWidth": false
                , "buttons": ["excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true
                , "lengthChange": false
                , "searching": true
                , "ordering": true
                , "info": true
                , "autoWidth": true
                , "responsive": true
            , });
        });

    </script>
</body>
</html>
