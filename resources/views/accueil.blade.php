@extends('layouts.master')
@section('content')
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
                      <a href="produits" class="btn btn-warning mt-2">Achetez Maintenant</a>
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
                      <a href="produits" class="btn btn-warning mt-2">Achete Maintenant</a>
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
   <div class="container-fluid py-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Les Produits</span></h2>
        </div>
       <div class="row px-xl-5">
   
           <div class="col">
           <div class="row">

        
                    <div class="owl-carousel product-carousel">
                     @foreach($derniersProduits as $produit)
                         <div class="product-card">
                                <div class="product-image-container">
                                    <img src="{{ asset('storage/' . $produit->img) }}" class="product-image"  alt="{{ $produit->nom }}"
                                    >
                                    <div class="product-overlay">
                                        <a href="{{ route('detail.produit', $produit->id) }}" class="btn btn-outline-light"><i class="fas fa-eye"></i> Voir Détails</a>
                                       <form action=# methode="POST">
                                           <a button type="submit" class="btn btn-warning mt-2"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                                        </form>
                                        </div>
                                </div>
                                <div class="product-info text-center">
                                    <h4 class="product-title mb-0">
                                        {{ $produit->nom }}
                                   </h4>
                                    <h6 class="product-price mb-0">
                                        {{ number_format($produit->prix, 2) }}
                                    </h6>
                                </div>
                         </div>
                  @endforeach   
                </div>   
               </div>
                <div class="text-center mt-4">
                    <a href="" class="btn btn-sm text-dark p-0">                  
                    <a href="produits" class="btn btn-warning mt-2"> Voir toutes les Produits </a>
                    </a>
                </div>
           </div>
         

       </div>
  </div>
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
                    @foreach($derniersCategories as $categorie)
                        <div class="col-md-4 col-xs-6"> 
                            <div class="shop">
                                <div class="shop-img">
                                    <img src="{{ asset('img/' . $categorie->image) }}" alt="{{ $categorie->nom }}">
                                </div>
                                <div class="shop-body">
                                    <h3>{{ $categorie->nom }}<br>Collection</h3>
                                    <a href="#" class="cta-btn">Voir<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                                <i class="fab fa-facebook"></i>
                                <a href="https://www.facebook.com/FZINFO21/">Axanet Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram End -->

 @endsection