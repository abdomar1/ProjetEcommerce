<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Axanet Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/footer.css" rel="stylesheet" />

</head>

<body>


<!-- Header Top Area Start -->
<section class="gauto-header-top-area">
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



       <!-- Header Top Area End -->



       <div class="col-lg-13">

<nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
   <br></br>
   <br></br>

   <div class="site-logo">
       <div class="col-lg-1 d-none d-lg-block">
           <img  src="img/axenett - Copie.png" alt="" class="logo" href=""> 
      </div>
   </div>
          
             <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                 <div class="navbar-nav mr-auto py-0">
                     <a href="accueils" class="nav-item nav-link">Accueil</a>
                     <a href="produits" class="nav-item nav-link active">Produits</a>
                     <a href="categories" class="nav-item nav-link active">Catégories</a>

                     <a href="contacts" class="nav-item nav-link">Contacte</a>
                 </div>
             
                 <div class="col-lg-6 col-6 text-left">
                     <form action="">
                         <div class="input-group">
                             <input type="text" class="form-control" placeholder="Recherche">
                             <div class="input-group-append">
                                 <span class="input-group-text bg-transparent text-primary">
                                     <i class="fa fa-search"></i>
                                 </span>
                             </div> 
                             
                             
                             <div class="col-lg-2 col-6 text-right">
                                        <a href="paniers" class="btn border">
                                            <i class="fas fa-shopping-cart text-primary"></i>
                                            <span class="badge"></span>
                                        </a>
                                 </div>
                                
                                
                                 <div class="col-lg-2 col-6 text-right">

                                        <button type="button" class="btn btn border" data-toggle="modal" data-target="#authModal">
                                        <i class="fa fa-user text-primary" ></i>
                                        </button>

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
                                                <button type="submit" class="btn btn-success btn-block">S'inscrire</button>
                                                </form>
                                            </div>
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
      

    </div>
</nav>
</div>
    <!-- Topbar End -->


    <!-- Page Header Start -->
    <div style="background-image:url('img/pc.jpg')">
  
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Details de Produit</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="accueils">Accueil</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Details de Produit</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-55" src="img/product01.png" alt="Image">
                        </div>
                      
                    </div>
                </div>
            </div>

            <div class="col-lg-6 pb-5">
                <h3 class="font-weight-semi-bold">PC PORTABLE HP</h3>
                 
                <h4 class="font-weight-semi-bold mb-4">Prix : $250.00</h4>
                <p class="mb-10" id="details"> Hp PC PORTABLE HP ELITEBOOK 840 G5 8ÉME GÉN-CORE I5-8Go-256 Go SSD-Remise à neuf </p>
               
                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-minus" >
                            <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control bg-secondary text-center" value="1">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-plus">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <a href="paniers">
                         <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Ajouter au panier</button>
                    </a>
                </div>
               
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Descriptif technique</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Principales caractéristiques</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Descriptif technique</h4>
                        <p  id="details">L'ordinateur portable fin et léger HP EliteBook 840 G5 de 8ème génération permet aux utilisateurs d'être ultra productifs au bureau et en dehors du bureau. Travaillez en toute confiance grâce à des technologies éprouvées, à la sécurité, aux performances et aux fonctions de gestion qui sauront répondre à tous vos besoins.</p>
                        <p  id="details">Puissance et mobilité Associez vitesse et puissance avec Windows 10, les processeurs Intel® Core™ 8e génération, un disque SSD PCIe de 3e génération . Améliorez le rendement en ajoutant de la mémoire vive DDR3, des disques hybrides pour un accès plus rapide à vos données et pour satisfaire les besoins de vos applications pro les plus exigeantes.</p>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <h4 class="mb-3">Principales caractéristiques</h4>

                        <ul  id="details">
                            <li>SKU: HP017CL1HU3QDNAFAMZ</li>
                            <li>Gamme de produits: HP ELITEBOOK</li>
                            <li>Modèle: HP ELITEBOOK</li>
                            <li>Poids (kg): 1.48</li>
                            <li>Matière principale: pvc </li>
                        </ul>

                    </div>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Vous aimerez peut-être aussi</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel">
                    <div class="card product-item border-0">
                        <div class="col-12 pb-1">
                                <div class="row">
                                        <div class="card border-0 shadow-sm position-relative">
                                            <img src="img/product01.png" class="card-img-top img-fluid rounded" alt="Produit 1">
                                            <div class="product-overlay text-white position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center opacity-0 transition">
                                            
                                                <a href="details" class="btn btn-outline-light">Voir Détails</a>
                                                <a href="paniers" class="btn btn-warning mt-2"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                                            </div>
                                            <div class="card-footer text-center">
                                                <h5 class="mb-0">Produit 1</h5>
                                                <h6 class="text-warning mb-0">$123.00</h6>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                          <div class="col-12 pb-1">
                                <div class="row">
                                        <div class="card border-0 shadow-sm position-relative">
                                            <img src="img/product01.png" class="card-img-top img-fluid rounded" alt="Produit 1">
                                            <div class="product-overlay text-white position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center opacity-0 transition">
                                            
                                                <a href="details" class="btn btn-outline-light">Voir Détails</a>
                                                <a href="paniers" class="btn btn-warning mt-2"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                                            </div>
                                            <div class="card-footer text-center">
                                                <h5 class="mb-0">Produit 1</h5>
                                                <h6 class="text-warning mb-0">$123.00</h6>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="col-12 pb-1">
                                    <div class="row">
                                            <div class="card border-0 shadow-sm position-relative">
                                                <img src="img/product01.png" class="card-img-top img-fluid rounded" alt="Produit 1">
                                                <div class="product-overlay text-white position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center opacity-0 transition">
                                                
                                                    <a href="details" class="btn btn-outline-light">Voir Détails</a>
                                                    <a href="paniers" class="btn btn-warning mt-2"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <h5 class="mb-0">Produit 1</h5>
                                                    <h6 class="text-warning mb-0">$123.00</h6>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                    </div>
                    <div class="card product-item border-0">
                    <div class="col-12 pb-1">
                                <div class="row">
                                        <div class="card border-0 shadow-sm position-relative">
                                            <img src="img/product01.png" class="card-img-top img-fluid rounded" alt="Produit 1">
                                            <div class="product-overlay text-white position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center opacity-0 transition">
                                            
                                                <a href="details" class="btn btn-outline-light">Voir Détails</a>
                                                <a href="paniers" class="btn btn-warning mt-2"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                                            </div>
                                            <div class="card-footer text-center">
                                                <h5 class="mb-0">Produit 1</h5>
                                                <h6 class="text-warning mb-0">$123.00</h6>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->
     <br></br>
     <br></br>
     <br></br>






    
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <footer id="dk-footer" class="dk-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="img/axenett.png" alt="footer_logo" class="img-fluid">
                        </a>
                        <p class="footer-info-text">
                        Entreprise pour la vente d'ordinateurs, PC, imprimantes, installation réseaux et cameras de surveillance, accessoires informatiques, 
                        logiciels, applications et sites web.   </p>
                        <div class="footer-social-link">
                            <h3>Suivez-nous</h3>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/FZINFO21/">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                    <div class="footer-awarad">
                    </div>
                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <p>22 Rue Ahmed Loukili V.N FES, Fez, Morocco</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>Appelez-nous</h3>
                                    <p>+212 5359-31468  </p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Liens rapides</h3>
                                    <div class="animate-border border-black"></div>
                                </div>
                                <ul>
                                    <li>
                                    <a  href="accueils"><i class="fa fa-angle-right mr-2"></i>Accueil</a>
                                    </li>
                                    <li>
                                    <a  href="produits"><i class="fa fa-angle-right mr-2"></i>Produit</a>
                                    </li>
                                    <li>
                                    <a  href="paniers"><i class="fa fa-angle-right mr-2"></i>Panier</a>
                                   </li>
                                  
                                   <li>
                                   <a  href="categories"><i class="fa fa-angle-right mr-2"></i>Catégories</a>
                                
                                </ul>
                                <ul>
                                   <li>
                                       <a  href="inscriptions"><i class="fa fa-angle-right mr-2"></i>Inscription</a>
                                   </li>
                                   <li>
                                        <a href="contacts"><i class="fa fa-angle-right mr-2"></i>Contact</a> </li>
                                   </li>
                                </ul>
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                
                               
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
              <!-- Back to Top -->
        </div>
        <!-- End Contact Container -->


   
                
                    <div class="col-md-6">
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                          
                            <ul><br></br>
                                <li>
                                    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            
     
</footer>

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