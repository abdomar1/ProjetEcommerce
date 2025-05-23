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



     <div class="col-lg-13">

<nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
             <div class="site-logo">
                 <div class="col-lg-1 d-none d-lg-block">
                     <img  src="img/axenet.png" alt="" class="logo" href=""> 
                 </div>
             </div>
                     
             <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                 <span class="navbar-toggler-icon"></span>
             </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                 <div class="navbar-nav mr-auto py-0">
                     <a href="accueils" class="nav-item nav-link">Accueil</a>
                     <a href="produits" class="nav-item nav-link">Produits</a>
                     
                     <a href="categories" class="nav-item nav-link">Catégories</a>
                     <a href="contacts" class="nav-item nav-link">Contacte</a>
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
                                                 <button type="submit" class="btn btn-success btn-block">S'inscrire</button>
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
    <!-- Topbar End -->


    <!-- Page Header Start -->
    <div style="background-image:url('img/pc.jpg')">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
                <h1 class="font-weight-semi-bold text-uppercase mb-3">Inscription</h1>
                <div class="d-inline-flex">
                <p class="m-0"><a href="accueils">Accueil</a></p>
                <p class="m-0 px-2">-</p>
                    <p class="m-0">Inscription</p>
                </div>
            </div>
        </div>
    <!-- Page Header End -->




































    <br></br>

 <!-- Checkout Section Begin -->
 <section class="checkout spad">
        <div class="container">
            <form action="#" class="checkout__form">
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Details de Facture</h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Nom <span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Prenom <span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                              
                                <div class="checkout__form__input">
                                    <p>Adresse <span>*</span></p>
                                    <input type="text" placeholder="Votre Adresse">
                                    <input type="text" placeholder="Apartment. suite, unite ect ( optinal )">
                                </div>
                                <div class="checkout__form__input">
                                    <p>Télephone <span>*</span></p>
                                    <input type="text">
                                </div>
                               
                                <div class="checkout__form__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Ville <span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Code Postal <span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <!-- <div class="checkout__form__checkbox">
                                    <label for="acc">
                                        Create an acount?
                                        <input type="checkbox" id="acc">
                                        <span class="checkmark"></span>
                                    </label>
                                    <p>Create am acount by entering the information below. If you are a returing customer login at the <br />top of the page</p>
                                </div> -->
                                <!-- <div class="checkout__form__input">
                                    <p>Account Password <span>*</span></p>
                                    <input type="text">
                                </div> -->
                                <!-- <div class="checkout__form__checkbox">
                                    <label for="note">
                                            Note about your order, e.g, special noe for delivery
                                            <input type="checkbox" id="note">
                                            <span class="checkmark"></span>
                                        </label>
                                </div> -->
                                <!-- <div class="checkout__form__input">
                                    <p>Oder notes <span>*</span></p>
                                    <input type="text" placeholder="Note about your order, e.g, special noe for delivery">
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout__order">
                            <h5>Votre commande</h5>
                            <div class="checkout__order__product">
                                <ul>
                                    <li>
                                        <span class="top__text">Produit</span>
                                        <span class="top__text__right">Total</span>
                                    </li>
                                    <li>01. PC deel <span>$ 300.0</span></li>
                                    <li>02. Télephone<br /> tote briefcase <span>$ 170.0</span></li>
                                    <li>03. imprimantes <span>$ 170.0</span></li>
                                    <li>04. Ecran <span>$ 110.0</span></li>
                                </ul>
                            </div>
                            <div class="checkout__order__total">
                                <ul>
                                    <li>Total <span>$ 750.0</span></li>
                                </ul>
                            </div>
                            <div class="checkout__order__widget">
                                <label for="o-acc">
                                          Créer un compte ?
                                        <input type="checkbox" id="o-acc">
                                        <span class="checkmark"></span>
                                    </label>
                                <p>Créez un compte en saisissant les informations ci-dessous. Si vous êtes déjà client, connectez-vous en haut de la page.</p>
                               
                                <label for="directe">
                                       Vérification directe
                                        <input type="checkbox" id="directe">
                                        <span class="checkmark"></span>
                                    </label>
                               
                                <label for="Paiement-chèque">
                                          Paiement par chèque
                                        <input type="checkbox" id="Paiement-chèque">
                                        <span class="checkmark"></span>
                                    </label>
                                <label for="paypal">
                                        PayPal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>

                                    <label for="bancaire">
                                          Virement bancaire
                                        <input type="checkbox" id="bancaire">
                                        <span class="checkmark"></span>
                                    </label>  
                                   
                            </div>
                            <button type="submit" class="site-btn">Passer commande</button>
                        </div>
                        <br></br>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Checkout Section End -->




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