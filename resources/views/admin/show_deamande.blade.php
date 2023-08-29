<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chambre {{ $demande->num_chambre }} </title>
    {{-- loader --}}
    @include('dash_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <script src="{{ 'js/preloader.js' }}"></script>
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
                                <div class="card-header">

                                    

                                    <!-- <h3 class="card-title">DataTable with minimal features & hover style</h3> -->
                                </div>
                                <!-- /.card-header -->


                                <div class="card">

                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>id_chambre</th>
                                                    <th>{{ $demande->id_chambre }}</th>             
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>Numéro de la chambre</th>
                                                    <th>{{ $demande->num_chambre }}</th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>numéro de l'étage</th>
                                                    <th>{{ $demande->num_etage }}</th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>Nom du client</th>
                                                    <th>{{ $demande->nom_client }}</th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>prenom du client</th>
                                                    <th>{{ $demande->prenom_client }}</th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>Email du client</th>
                                                    <th>{{ $demande->email_client }}</th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>numéro de téléphone</th>
                                                    <th>{{ $demande->telephone_client }}</th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>date_debut</th>
                                                    <th>{{ $demande->date_debut }}</th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>date de fin</th>
                                                    <th>{{ $demande->date_fin }}</th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>heures de d'arrivée</th>
                                                    <th>{{ $demande->heure_arriver }}</th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>heures de départ</th>
                                                    <th>{{ $demande->heure_depart }}</th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>demande</th>
                                                    <th>{{ $demande->demande }}</th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th><a href="/demande" class="btn btn-danger" style="width: 4cm">Retour</a></th>
                                                </tr>
                                            </thead>
                                            
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
        @include('../footer')

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
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                $('#id').val(data[0]);
                $('#User').val(data[1]);
                $('#nom').val(data[2]);
                $('#libelle').val(data[3]);
            });
        });
    </script>
    <!-- jQuery -->

</body>

</html>
