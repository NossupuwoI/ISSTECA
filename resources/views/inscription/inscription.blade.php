<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ISSTECA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('ass/assets/img/logo.PNG') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('ass/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('ass/assets/vendor/aos/aos.css" rel="stylesheet') }}">
  <link href="{{ asset('ass/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('ass/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('ass/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('ass/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('ass/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('ass/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<body>

  <!-- ======= Header ======= -->
  @include('header');
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Pré-inscription</h2>
        <ul>
                  @foreach ($errors->all() as $error)
                  <li class="alert alert-danger">{{ $error }}</li>
                  @endforeach
                </ul>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
     

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Téléphone:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="inscription/traitement" method="post" class="email-form" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="">Votre Nom</label>
                  <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre Nom" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="">Votre Prenom</label>
                  <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Votre Prenom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for=""> date de naissance</label>
                  <input type="date" class="form-control" name="naissance" id="naissance" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for=""> Lieu de naissance</label>
                  <input type="text" class="form-control" name="lieu"  id="lieu" placeholder="lieu de naissance" required>
                </div>
                
                <div class="col-md-6 form-group">
                  <label for="">Choisisser votre sexe</label>
                   <select name="sexe" id="" class="select form-control form-control">
                        <option value="Masculin">Masculin</option>
                        <option value="Feminin">Feminin</option>
                   </select>
                </div>
                <div class="col-md-6 form-group">
                  <label for="">Veillez choisir le cycle d’étude </label>
                <select name="cycle" id="" class="select form-control form-control">                 
                        <option value="BTS">BTS</option>
                        <option value="LICENCE">LICENCE</option>
                        <option value="MASTER">MASTER</option>
                 </select>
                </div>
                <div class="col-md-6 form-group">
                  <label for="">Choisisser votre Spécialité</label>
                <select name="specialite" id="" class="select form-control form-control">                 
                     @foreach ($specialites as $specialite )
                        <option value="{{ $specialite->nom }}">{{ $specialite->nom }}</option>
                    @endforeach
                 </select>
                </div>
                <div class="col-md-6 form-group">
                  <label for="">Numéro de téléphone</label>
                  <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Votre numéro de téléphone" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="">Votre Adresse Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                </div>
                
                
                <div class="col-md-6 form-group">
                  <label for="">Choisisser votre photo</label>
                  <input type="file" class="form-control form-control-lg" name="photo">
                </div>

                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="">Votre Pays</label>
                  <input type="text" class="form-control" name="pays"  id="pays" placeholder="Votre Pays" required>
                </div>
                
               
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="">Nom de la personne a contacter</label>
                  <input type="text" class="form-control" name="nom_personne"  id="nom_personne" placeholder="Nom de la personne a contacter" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="">Numéro de téléphone</label>
                  <input type="text" class="form-control" name="contact"  id="contact" placeholder="Contact" required>
                </div>
                @if(!auth()->check())
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="">Mot de passe</label>
                  <input type="password" class="form-control" name="password"  id="password" placeholder="Mot de passe" required>
                </div>
                @endif
              </div>
             
              <div class="text-center">
               <!-- <input class="get-started-btn" type="submit" value="Ajouter" />  -->
              <button type="submit">Se Pré-inscrire</button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer');
 <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('ass/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('ass/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('ass/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('ass/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('ass/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('ass/assets/js/main.js') }}"></script>


</body>

</body>

</html>