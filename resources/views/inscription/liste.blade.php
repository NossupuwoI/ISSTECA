<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Liste des Filières</title>
  {{-- loader --}}
  @include('dash_css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <script src="{{ ('js/preloader.js') }}"></script>
<div class="wrapper">


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
          <div class="col-12">
           

           


              


            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                @if(session('status'))
                <div class="alert alert-success alert-dismissible fade show" style="width: 15cm;" role="alert">
                     <strong>{{ session('status')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="align: right"></button>

                  </div>
              <br>
            @endif


                @if(session('supp'))
                 <div class="alert alert-danger alert-dismissible fade show" style="width: 15cm; " role="alert">
                  {{ session('supp')}} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="align: right"></button>
                 </div>
              <br>
            @endif

                <table id="example1" class="table">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>prenom</th>
                    <th>spécialité</th>
                    <th>téléphone</th>
                    <th>email</th>
                    <th>action</th>

                  </tr>
                  </thead>
                  <tbody>

                  @foreach ($inscriptions as $inscription)
                            <tr>
                                <td>{{ $inscription->id }}</td>
                                <td>{{ $inscription->nom }}</td>
                                <td>{{ $inscription->prenom }}</td>
                                <td>{{ $inscription->specialite }}</td>
                                <td>{{ $inscription->telephone }}</td>
                                <td>{{ $inscription->email }}</td>
                                <td>
                                    
                                  <a class ="btn btn-secondary" href="fiche/{{ $inscription->id }}">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                                    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                    <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                  </svg>

                                  </button>

                                </td>
                               
                            </tr>
                    @endforeach

                  </tbody>
                </table>
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



  <!-- /.content-wrapper -->
 @include('dashfooter')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('dash_js')
<script>
  $(document).ready(function() {
    $('.editbtn').on('click', function() {
      $('#editModal').modal('show');
      $tr = $(this).closest('tr');
      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      $('#id').val(data[0]);
       $('#User').val(data[1]);
       $('#nom').val(data[2]);
    });
  });
</script>
<!-- jQuery -->

</body>
</html>
