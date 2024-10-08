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
<!-- ///////////////////// -->

    <link href="css/responsive.css" rel="stylesheet" />
    <link href="css/footer.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="css/stylee.css" type="text/css"> -->


    <!-- ////////////////////////////////////// -->
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
                            <a href="accueils" class="nav-item nav-link active">Accueil</a>
                            <a href="produits" class="nav-item nav-link">Produits</a>
                            
                            <a href="categories" class="nav-item nav-link">Catégories</a>
                            <a href="contacts" class="nav-item nav-link">Contacte</a>
                        </div>
                    
                        <div class="col-lg-6 col-6 text-left">
                            <form action=""> 

                               <div class="input-group">
                                   <div class="col-lg-2 col-6 text-right">
                                        <a href="paniers" class="btn border">
                                            <i class="fas fa-shopping-cart text-primary"></i>
                                            <span class="badge">0</span>
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
<!-- -///////////end nav -->
  

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="img/pc.jpg" alt="">
      </div>
    </div>
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                    <span>
                    Prix ​​raisonnable 
                      </span>
                    </h1>
                    <p>
                    Paiement sécurisé et facilité avec plusieurs options de règlement
                                              
                    </p>
                    <div class="btn-box">
                      <a href="produits" class="btn-2">Achetez Maintenant</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      <span>
                        Meilleure qualité 
                      </span>
                    </h1>
                    <p>
                    Engagés à vous offrir la meilleure qualité du marché       
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-2">Achete Maintenant</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          </div>
        
      </div>
    </section>
    <!-- end slider section -->
  </div>


<!-- Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Produits Populaires</span></h2>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm position-relative">
                    <img src="img/product01.png" class="card-img-top img-fluid rounded" alt="Produit 2">
                    <div class="product-overlay text-white position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center opacity-0 transition">
                        <a href="#" class="btn btn-outline-light"><i class="fas fa-eye"></i> Voir Détails</a>
                        <a href="#" class="btn btn-warning mt-2"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                    </div>
                  
                </div>  <div class="card-footer text-center">
                        <h5 class="mb-0">Produit 1</h5>
                        <h6 class="mb-0">$123.00</h6>
                    </div>
            </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card border-0 shadow-sm position-relative">
                <img src="img/product02.png" class="card-img-top img-fluid rounded" alt="Produit 2">
                <div class="product-overlay text-white position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center opacity-0 transition">
                    <a href="#" class="btn btn-outline-light"><i class="fas fa-eye"></i> Voir Détails</a>
                    <a href="#" class="btn btn-warning mt-2"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                </div>
              
            </div>  <div class="card-footer text-center">
                    <h5 class="mb-0">Produit 2</h5>
                    <h6 class="mb-0">$123.00</h6>
                </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card border-0 shadow-sm position-relative">
                <img src="img/product03.png" class="card-img-top img-fluid rounded" alt="Produit 3">
                <div class="product-overlay text-white position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center opacity-0 transition">
                    <a href="#" class="btn btn-outline-light"><i class="fas fa-eye"></i> Voir Détails</a>
                    <a href="#" class="btn btn-warning mt-2"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
             </div>
               
            </div> <div class="card-footer text-center">
                    <h5 class="mb-0">Produit 3</h5>
                    <h6 class="mb-0">$123.00</h6>
                </div>
        </div> 
                
       
    </div>
   
        </div><div class="text-center mt-4">
            <a href="categories.html" class="btn btn-sm text-dark p-0">                  
                <a href="produits" class="btn btn-warning mt-2"> Voir toutes les Produits </a>
            </a>
      </div>
<br></br>
<!-- Products End -->




 <!-- Featured Start -->
 <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Produits de haute qualité</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-lock text-primary m-0 mr-3"></h1> 
                    <h5 class="font-weight-semi-bold m-0">Paiement sécurisé</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Garantie satisfait</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Assistance 24h/24 et 7j/7</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
   <!-- SECTION -->
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">les Catégories</span></h2>
        </div>
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Ordinateur portable<br>Collection</h3>
								<a href="#" class="cta-btn">Voir <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
                    <div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Ordinateur portable<br>Collection</h3>
								<a href="#" class="cta-btn">Afficher les Produits <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>

                    <!-- ///// -->
				
                    <div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Ordinateur portable<br>Collection</h3>
								<a href="#" class="cta-btn">Afficher les Produits <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>

				
				</div>
				<!-- /row -->


             <!-- Bouton pour accéder à toutes les catégories avec un style similaire à "Ajouter au panier" -->
<div class="text-center mt-4">
    <a href="categories.html" class="btn btn-sm text-dark p-0">                  
          <a href="categories" class="btn btn-warning mt-2"> Voir toutes les catégories </a>

    </a>
</div>

			<!-- /container -->
		</div>
		<!-- /SECTION -->
    <!-- Categories End -->

    <br></br>



   
<!-- service section -->
<div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Notre Services</span></h2>
        </div>

    <div class="container-fluid  my-5">
        <div class="row justify-content-md-center py-5 px-xl-5">
          

<section class="service_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
                <i class="bi bi-pc-display"></i>            
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pc-display" viewBox="0 0 16 16">
                    <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0m2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0M9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5M1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2z"/>
                </svg></div>
            <div class="detail-box">
              <h6>
              matériel informatique 
              </h6>
              <p>
              Notre entreprise est spécialisée dans la vente de matériel informatique, incluant une large gamme d'ordinateurs, PC portables et de bureau, 
              ainsi que des imprimantes de haute qualité. Nos produits proviennent des marques les plus réputées. 
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
            <i class="bi bi-reception-4"></i>
        
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reception-4" viewBox="0 0 16 16">
  <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5z"/>
</svg>
</div>
            <div class="detail-box">
              <h6>
              installation réseaux
              </h6>
              <p>
              Notre entreprise se spécialise dans l'installation de réseaux informatiques et de systèmes de caméras de surveillance, Nous utilisons des équipements de pointe et des technologies avancées pour garantir une installation efficace et fiable. 
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
            <i class="bi bi-code-slash"></i>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
  <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0"/>
</svg>
            </div>
            <div class="detail-box">
              <h6>
              Développement informatique
                
              </h6>
              <p>
              Notre entreprise propose une vaste gamme de solutions informatiques, incluant  
              des logiciels performants, des applications innovantes et des services de création de sites web.
              Nous nous engageons à fournir des produits de haute qualité 
              </p>
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


        </div>
    </div>
     <!-- end service section --> 




       <!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item">
                    <img src="img/shop03.png" alt="Instagram 1" class="img-fluid">
                    <div class="instagram__overlay">
                        <i class="fab fa-facebook"></i>
                        <a href="https://www.facebook.com/FZINFO21/">Axanet Services</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item">
                    <img src="img/shop01.png" alt="Instagram 2" class="img-fluid">
                    <div class="instagram__overlay">
                        <i class="fab fa-facebook"></i>
                        <a href="https://www.facebook.com/FZINFO21/">Axanet Services</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item">
                    <img src="img/hotdeal1.png" alt="Instagram 3" class="img-fluid">
                    <div class="instagram__overlay">
                        <i class="fab fa-facebook"></i>
                        <a href="https://www.facebook.com/FZINFO21/">Axanet Services</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item">
                    <img src="img/th (2).jpeg" alt="Instagram 4" class="img-fluid">
                    <div class="instagram__overlay">
                        <i class="fab fa-facebook"></i>
                        <a href="https://www.facebook.com/FZINFO21/">Axanet Services</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item">
                    <img src="img/product06.png" alt="Instagram 5" class="img-fluid">
                    <div class="instagram__overlay">
                        <i class="fab fa-facebook"></i>
                        <a href="https://www.facebook.com/FZINFO21/">Axanet Services</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item">
                    <img src="img/cat-4.jpg" alt="Instagram 6" class="img-fluid">
                    <div class="instagram__overlay">
                        <i class="fab fa-instagram"></i>
                        <a href="https://www.facebook.com/FZINFO21/">Axanet Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Instagram End -->

 <!-- Footer Start -->
 <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                 <img src="img/axenett.png" alt="footer_logo" class="img-fluid">
                </a>
                <p>  Entreprise pour la vente d'ordinateurs, PC, imprimantes, installation réseaux et cameras de surveillance, accessoires informatiques, 
                logiciels, applications et sites web.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>22 Rue Ahmed Loukili V.N FES, Fez, Morocco</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>axanet1@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+212 5359-31468</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Liens rapides</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Accueil</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Produit</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Panier</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Catégorie</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Inscription</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contacte</a>
                        </div>
                    </div>
              
                       
                    <div class="col-lg-4 col-md-8 col-sm-8">
                        <!-- ///////////////////////////// -->
                                
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
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
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