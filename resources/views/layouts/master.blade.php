<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Axanet Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap') }}" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- ///////////////////// -->

    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" />

</head>

<body>

      <!-- Header Top Area Start -->
      <section class="gauto-header-top-area" >
        <div class="container">
           <div class="row">
              <div class="col-md-4">
                 <div class="header-top-left">
                        <a class="text-dark px-2" href="https://www.facebook.com/FZINFO21/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>  
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-whatsapp"></i>
                        </a>  
                 </div>
             </div>
             
         </div>
              
           
        </div>
     </section>
     <!-- Header Top Area End -->
    <div class="col-lg-13">

       <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <div class="site-logo">
                        <div class="col-lg-1 d-none d-lg-block">
                            <img  src="{{ asset('img/axenet.png') }}" alt="" class="logo" href=""> 
                        </div>
                    </div>
                            
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
           <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/accueils" class="nav-item nav-link active">Accueil</a>
                            <a href="/produits" class="nav-item nav-link">Produits</a>
                            
                            <a href="/categories" class="nav-item nav-link">Catégories</a>
                            <a href="/contacts" class="nav-item nav-link">Contacte</a>
                        </div>
                    
                        <div class="col-lg-6 col-6 text-left">
                            <form action=""> 

                               <div class="input-group">
                                  
                                      <div class="cart-button">
                                            <a href="paniers" class="btn-cart">
                                                <span  class="cart-icon"><i class="fas fa-shopping-cart text-primary"></i></span>
                                                
                                                    <span class="cart-count">0</span>
                                                </a>
                                        </div>
                                        <div class="input-grou">
                                            <div class="col-lg-2 col-6 text-right">
                                                    <button type="button" class="btn border" data-toggle="modal" data-target="#authModal">
                                                            <i class="fa fa-user text-primary" ></i>
                                                    </button>

                                                </div>
                                        </div>

                             </div>      
      
                                                                                                
                                                            
                                 





                           
                               <!-- Modal -->
                       <div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h5 class="modal-title" id="authModalLabel"> <i class="fa fa-user text-primary" ></i>
                                         </h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                         </button>
                                     </div>
                                     <div class="modal-body">
                                         <!-- Nav tabs -->
                                         <ul class="nav nav-tabs" id="authTab" role="tablist">
                                         <li class="nav-item">
                                             <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Connexion</a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Inscription</a>
                                         </li>
                                         </ul>

                                         <!-- Tab content -->
                                         <div class="tab-content">
                                             <!-- Connexion -->
                                             <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                                 <form id="loginForm">
                                                 <div class="form-group">
                                                     <label for="loginEmail">Email</label>
                                                     <input type="email" class="form-control" id="loginEmail" placeholder="Votre email" required>
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="loginPassword">Mot de passe</label>
                                                     <input type="password" class="form-control" id="loginPassword" placeholder="Votre mot de passe" required>
                                                 </div>
                                                 <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                                                 </form>
                                             </div>

                                             <!-- Inscription -->
                                             <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                                 <form id="registerForm">
                                                 <div class="form-group">
                                                     <label for="registerName">Nom</label>
                                                     <input type="text" class="form-control" id="registerName" placeholder="Votre nom" required>
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="registerEmail">Email</label>
                                                     <input type="email" class="form-control" id="registerEmail" placeholder="Votre email" required>
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="registerPassword">Mot de passe</label>
                                                     <input type="password" class="form-control" id="registerPassword" placeholder="Créer un mot de passe" required>
                                                 </div>
                                                 <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                                                 </form>
                                             </div>
                                     </div>
                                 </div>
                          </div>
                      </div>
                  </div>

                                <!-- Contenu existant de votre navbar -->

                                    <!-- Inclure FontAwesome -->
                                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">  

                              </div>  


                              
                            </form>
                     </div>  
                    
                            
             </div> 
        </nav>
 </div>
<!-- -///////////end nav -->
 <body>
    @yield('content')
    
<!-- Footer Start -->
<div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                 <img src="{{ asset('img/axenett.png') }}" alt="footer_logo" class="img-fluid2">
                </a>
                
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Liens rapides</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="/accueils"><i class="fa fa-angle-right mr-2"></i>Accueil</a>
                            <a class="text-dark mb-2" href="/produits"><i class="fa fa-angle-right mr-2"></i>Produit</a>
                            <a class="text-dark mb-2" href="/paniers"><i class="fa fa-angle-right mr-2"></i>Panier</a>
                            <a class="text-dark mb-2" href="/categories"><i class="fa fa-angle-right mr-2"></i>Catégorie</a>
                            <a class="text-dark mb-2" href="/inscriptions"><i class="fa fa-angle-right mr-2"></i>Inscription</a>
                            <a class="text-dark" href="contacts"><i class="fa fa-angle-right mr-2"></i>Contacte</a>
                        </div>
                    </div>
                 
                       <div class="col-lg-5 col-md-10 col-sm-8">
                            <p> AXANET est une entreprise pour la vente d'ordinateurs, PC, imprimantes, installation réseaux et cameras de surveillance, accessoires informatiques, 
                                    logiciels, applications et sites web.</p>
                           <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>22 Rue Ahmed Loukili V.N FES, Fez, Morocco</p>
                           <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>axanet1@gmail.com</p>
                                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+212 5359-31468</p>
                      </div>
                   

             </div>
                
            </div>
            
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed
                    by
                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a><br>
                    Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </p>
            </div>

            
        </div>
        
    </div>
    <!-- Footer End -->
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
  </body>

</html>