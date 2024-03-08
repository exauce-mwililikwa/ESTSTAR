<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/phoenix/v1.6.0/dashboard/project-management.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Nov 2022 11:18:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Star-Est</title>

  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/logo.jpg">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/logo.jpg">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/logo.jpg">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/logo.jpg">
  <link rel="manifest" href="../assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="../assets/logo.jpg">
  <meta name="theme-color" content="#ffffff">
  <script src="../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../vendors/simplebar/simplebar.min.js"></script>
  <script src="../assets/js/config.js"></script>

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="../vendors/choices/choices.min.css" rel="stylesheet">
  <link href="../vendors/dhtmlx-gantt/dhtmlxgantt.css" rel="stylesheet">
  <link href="../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
    rel="stylesheet">
  <link href="../vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link rel="../stylesheet" href="unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link href="../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
  <link href="../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
</head>

<body>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <div class="container-fluid px-0" data-layout="container">
    
    

<nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
        <script>
          var navbarStyle = localStorage.getItem("phoenixNavbarStyle");
          if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
          }
        </script>
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
          <!-- scrollbar removed-->
          <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
              <li class="nav-item">
                <!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                    href="#home" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="home">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                      </div><span class="nav-link-icon"><span data-feather="pie-chart"></span></span><span
                        class="nav-link-text">Tableau de bord</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse" id="home">
                      <p class="collapsed-nav-item-title d-none">Home</p>
                      <li class="nav-item"><a class="nav-link" href="../DASHBOARDS/index.php" data-bs-toggle=""
                          aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Project management</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link active" href="../DASHBOARDS/index2.php" data-bs-toggle=""
                          aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Financement</span>
                          </div>
                        </a><!-- more inner pages-->
                      </li>
                      
                    </ul>
                  </div>
                </span></li>
             
              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label">RH</p>
                <hr class="navbar-vertical-line" /><!-- parent pages--><span class="nav-item-wrapper"><a
                    class="nav-link label-1" href="../RH/agent.php" role="button" data-bs-toggle=""
                    aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                          data-feather="compass"></span>
                        </span>
                          <span class="nav-link-text-wrapper"><span
                          class="nav-link-text">Personnels</span>
                        </span></div>
                  </a></span>
                  <!-- parent pages--><span class="nav-item-wrapper">
                   </span>
                  <span class="nav-item-wrapper"><a class="nav-link label-1"
                    href="../RH/paiement.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span
                          data-feather="help-circle"></span></span>
                          <span class="nav-link-text-wrapper"><span
                          class="nav-link-text">Paiement/Agent</span>
                        </span></div>
                  </a>
                  <span class="nav-item-wrapper"><a class="nav-link label-1"
                    href="pages/pages/faq.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span
                          data-feather="help-circle"></span></span>
                          <span class="nav-link-text-wrapper"><span
                          class="nav-link-text">Horaire</span>
                        </span></div>
                  </a></span></span>
                  <!-- parent pages--><span class="nav-item-wrapper"><a
                    class="nav-link dropdown-indicator label-1" href="#pricing" role="button" data-bs-toggle="collapse"
                    aria-expanded="false" aria-controls="pricing">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                        class="nav-link-icon"><span data-feather="tag"></span></span><span
                        class="nav-link-text">Configuration</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="pricing">
                      <p class="collapsed-nav-item-title d-none">Pricing</p>
                      <li class="nav-item"><a class="nav-link" href="../RH/categorie.php"
                          data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Categorie Agent</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../RH/Service.php"
                          data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Service</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    
                      
                    </ul>
                  </div>
                </span><!-- parent pages--><span class="nav-item-wrapper"><a class="nav-link label-1"
                    href="../RH/notification.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                          data-feather="bell"></span></span><span class="nav-link-text-wrapper"><span
                          class="nav-link-text">Notification</span></span></div>
                  </a></span><!-- parent pages-->
                  

                
              
             
                
              </li>

              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label">OFFRE</p>
                <hr class="navbar-vertical-line" /><!-- parent pages--><span class="nav-item-wrapper"><a
                    class="nav-link label-1" href="pages/starter.html" role="button" data-bs-toggle=""
                    aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                          data-feather="compass"></span>
                        </span>
                          <span class="nav-link-text-wrapper"><span
                          class="nav-link-text">Publications</span>
                        </span></div>
                  </a></span>
                  <!-- parent pages-->
                  <span class="nav-item-wrapper"><a class="nav-link label-1"
                    href="../offre/dossier.php" role="button" data-bs-toggle="" aria-expanded="false">
                   
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span
                          data-feather="help-circle"></span></span>
                          <span class="nav-link-text-wrapper"><span
                          class="nav-link-text">Dossier</span>
                        </span></div>
                  </a></span>
                  <span class="nav-item-wrapper"><a class="nav-link label-1"
                    href="pages/pages/faq.html" role="button" data-bs-toggle="" aria-expanded="false">
                   
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span
                          data-feather="help-circle"></span></span>
                          <span class="nav-link-text-wrapper"><span
                          class="nav-link-text">Evaluation</span>
                        </span></div>
                  </a></span>

                  <span class="nav-item-wrapper"><a class="nav-link label-1"
                    href="pages/pages/faq.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span
                          data-feather="help-circle"></span></span>
                          <span class="nav-link-text-wrapper"><span
                          class="nav-link-text">Recrutement</span>
                        </span></div>
                  </a>
                  <span class="nav-item-wrapper"><a class="nav-link label-1"
                    href="../offre/interview.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span
                          data-feather="help-circle"></span></span>
                          <span class="nav-link-text-wrapper"><span
                          class="nav-link-text">Interview</span>
                        </span></div>
                  </a></span></span>
                  <!-- parent pages--><span class="nav-item-wrapper"><a
                    class="nav-link dropdown-indicator label-1" href="#pricings" role="button" data-bs-toggle="collapse"
                    aria-expanded="false" aria-controls="pricings">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                        class="nav-link-icon"><span data-feather="tag"></span></span><span
                        class="nav-link-text">Publication</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="pricings">
                      <p class="collapsed-nav-item-title d-none">Pricing</p>
                      <li class="nav-item"><a class="nav-link" href="../offre/encours.php"
                          data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">En cours</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../offre/depasse.php"
                          data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Depasse</span></div>
                        </a><!-- more inner pages-->
                      </li>
                     
                    </ul>
                  </div>
                </span>
                <!-- parent pages-->
              
                
                  <!-- parent pages--><!-- parent pages-->
                 <!-- parent pages-->
                
                <!-- parent pages-->
                
              </li>


              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label">Modules</p>
                <hr class="navbar-vertical-line" /><!-- parent pages-->
               
                <span class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                    href="#utilities" role="button" data-bs-toggle="collapse" aria-expanded="false"
                    aria-controls="utilities">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                        class="nav-link-icon"><span data-feather="tool"></span></span><span
                        class="nav-link-text">Logistique</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="utilities">
                      <p class="collapsed-nav-item-title d-none">Utilities</p>
                      <li class="nav-item"><a class="nav-link" href="../LOGISTIQUE/Acquisition.php"
                          data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Acquisition</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../LOGISTIQUE/Sortie.php" data-bs-toggle=""
                          aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Sortie/services</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../LOGISTIQUE/Requisition.php" data-bs-toggle=""
                          aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Requisitions</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../LOGISTIQUE/Articles.php" data-bs-toggle=""
                          aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Articles</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../LOGISTIQUE/Fournisseur.php" data-bs-toggle=""
                          aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Fournisseur</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      
                     
                    
                     
                    </ul>
                  </div>
                </span><!-- parent pages-->
               
              </li>
              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label">GESTION DE PROJET</p>
                <hr class="navbar-vertical-line" /><!-- parent pages-->
                <span class="nav-item-wrapper">
                  <a
                    class="nav-link label-1" href="../PROJET-MANAGEMENT/nouveau.php" role="button" data-bs-toggle=""
                    aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                          data-feather="life-buoy"></span></span><span class="nav-link-text-wrapper"><span
                          class="nav-link-text">Nouveau</span></span>
                    </div>
                  </a></span>
                  <span class="nav-item-wrapper">
                  <a
                    class="nav-link label-1" href="../PROJET-MANAGEMENT/todo.php" role="button" data-bs-toggle=""
                    aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                          data-feather="life-buoy"></span></span><span class="nav-link-text-wrapper"><span
                          class="nav-link-text">todo</span></span>
                    </div>
                  </a></span><!-- parent pages--><span class="nav-item-wrapper"><a
                    class="nav-link dropdown-indicator label-1" href="#customization" role="button"
                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="customization">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                        class="nav-link-icon"><span data-feather="settings"></span></span><span
                        class="nav-link-text">Visualisation</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="customization">
                      <p class="collapsed-nav-item-title d-none">Customization</p>
                      <li class="nav-item"><a class="nav-link" href="../PROJET-MANAGEMENT/projet_card.php"
                          data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Format card</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../PROJET-MANAGEMENT/projet_list.php"
                          data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Format list</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </span>
                <!-- parent pages-->
               
                
                 
                  
              </li>
              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label">GESTION DE STOCK</p>
                <hr class="navbar-vertical-line" /><!-- parent pages-->
                <span class="nav-item-wrapper">
                  <a
                    class="nav-link label-1" href="../STOCK/commande.php" role="button" data-bs-toggle=""
                    aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                          data-feather="life-buoy"></span></span><span class="nav-link-text-wrapper"><span
                          class="nav-link-text">Commande</span></span>
                    </div>
                  </a></span>
                  <span class="nav-item-wrapper">
                  <a
                    class="nav-link label-1" href="../STOCK/produit.php" role="button" data-bs-toggle=""
                    aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                          data-feather="life-buoy"></span></span><span class="nav-link-text-wrapper"><span
                          class="nav-link-text">Produit</span></span>
                    </div>
                  </a></span><!-- parent pages--><span class="nav-item-wrapper"><a
                    class="nav-link dropdown-indicator label-1" href="#customization" role="button"
                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="customization">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                        class="nav-link-icon"><span data-feather="settings"></span></span><span
                        class="nav-link-text">Visualisation</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="customization">
                      <p class="collapsed-nav-item-title d-none">Customization</p>
                      <li class="nav-item"><a class="nav-link" href="../PROJET-MANAGEMENT/projet_card.php"
                          data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Format card</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../PROJET-MANAGEMENT/projet_list.php"
                          data-bs-toggle="" aria-expanded="false">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Format list</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </span>
              
                

                 
              </li>
            </ul>
          </div>
        </div>
        <div class="navbar-vertical-footer"><button
            class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 text-start white-space-nowrap"><span
              class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span
              class="navbar-vertical-footer-text ms-2">Star Est</span></button></div>
      </nav>
      <nav class="navbar navbar-top navbar-expand" id="navbarDefault" style="display:none;">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
              data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
              aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                  class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="../assets/logo.jpg" alt="phoenix" width="47" />
                  <p class="logo-text ms-2 d-none d-sm-block">STAR - EST</p>
                </div>
              </div>
            </a>
          </div>
          <div class="search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                class="form-control form-control-sm rounded-pill search-input fuzzy-search" type="search"
                placeholder="Search..." aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
              data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
            </div>
            <div class="dropdown-menu border font-base start-0 py-0 overflow-hidden w-100">
              <div class="scrollbar list pb-3" style="max-height: 30rem;">
                <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span class="text-500">results</span></h6>
                <hr class="text-200 my-0" />
                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Recently Searched </h6><a
                  class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-1000 title"><span class="fa-solid fa-clock-rotate-left"
                        data-fa-transform="shrink-2"></span> Store Macbook</div>
                  </div>
                </a>
                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-1000 title"> <span class="fa-solid fa-clock-rotate-left"
                        data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                  </div>
                </a>
                <hr class="text-200 my-0" />
                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Products</h6><a
                  class="dropdown-item py-2 d-flex align-items-center"
                  href="apps/e-commerce/landing/product-details.html">
                  <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3"
                      src="../assets/img/products/3.png" alt="" /></div>
                  <div class="flex-1">
                    <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                    <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB Memory - 1.6GHz - 128GB
                        Storage</span></p>
                  </div>
                </a>
                <a class="dropdown-item py-2 d-flex align-items-center"
                  href="apps/e-commerce/landing/product-details.html">
                  <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/products/3.png" alt="" />
                  </div>
                  <div class="flex-1">
                    <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                    <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600 ms-2">30 Sep at 12:30
                        PM</span></p>
                  </div>
                </a>
                <hr class="text-200 my-0" />
                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Quick Links</h6><a
                  class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-1000 title"><span class="fa-solid fa-link text-900"
                        data-fa-transform="shrink-2"></span> Support MacBook House</div>
                  </div>
                </a>
                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900"
                        data-fa-transform="shrink-2"></span> Store MacBook″</div>
                  </div>
                </a>
                <hr class="text-200 my-0" />
                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Files</h6><a class="dropdown-item"
                  href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-1000 title"><span class="fa-solid fa-file-zipper text-900"
                        data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                  </div>
                </a>
                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-1000 title"> <span class="fa-solid fa-file-lines text-900"
                        data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                  </div>
                </a>
                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-1000 title"> <span class="fa-solid fa-image text-900"
                        data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                  </div>
                </a>
                <hr class="text-200 my-0" />
                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Members</h6><a
                  class="dropdown-item py-2 d-flex align-items-center" href="pages/pages/members.html">
                  <div class="avatar avatar-l status-online  me-2 text-900">
                    <img class="rounded-circle " src="../assets/img/team/10.png" alt="" />
                  </div>
                  <div class="flex-1">
                    <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                    <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                  </div>
                </a>
                <a class="dropdown-item py-2 d-flex align-items-center" href="pages/pages/members.html">
                  <div class="avatar avatar-l  me-2 text-900">
                    <img class="rounded-circle " src="../assets/img/team/12.png" alt="" />
                  </div>
                  <div class="flex-1">
                    <h6 class="mb-0 text-1000 title">John Smith</h6>
                    <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                  </div>
                </a>
                <hr class="text-200 my-0" />
                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Related Searches</h6><a
                  class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-1000 title"><span class="fa-brands fa-firefox-browser text-900"
                        data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                  </div>
                </a>
                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-1000 title"> <span class="fa-brands fa-chrome text-900"
                        data-fa-transform="shrink-2"></span> Store MacBook″</div>
                  </div>
                </a>
              </div>
              <div class="text-center">
                <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
              <div class="theme-control-toggle fa-icon-wait px-2"><input
                  class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
                  data-theme-control="phoenixTheme" value="dark" /><label
                  class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                  data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                    data-feather="moon"></span></label><label
                  class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                  data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                    data-feather="sun"></span></label></div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><span class="text-700" data-feather="bell"
                  style="height:20px;width:20px;"></span></a>
              <div
                class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
                id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="card position-relative border-0">
                  <div class="card-header p-2">
                    <div class="d-flex justify-content-between">
                      <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal"
                        type="button">Mark all as read</button>
                    </div>
                  </div>
                  <div class="card-body p-0"></div>
                  <div class="scrollbar-overlay">
                    <div class="overflow-auto" style="height: 27rem;">
                      <div class="border-300">
                        <div class="p-3 border-300 notification-card position-relative read border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                  src="../assets/img/team/30.png" alt="" /></div>
                              <div class="me-3 flex-1">
                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1'>💬</span>Mentioned you in a
                                  comment.<span class="ms-2 text-500 fw-bold fs--2">10m</span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">10:41 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3">
                                <div class="avatar-name rounded-circle"><span>J</span></div>
                              </div>
                              <div class="me-3 flex-1">
                                <h4 class="fs--1 text-black">Jane Foster</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1'>📅</span>Created an
                                  event.<span class="ms-2 text-500 fw-bold fs--2">20m</span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">10:20 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img
                                  class="rounded-circle avatar-placeholder" src="../assets/img/team/avatar.png" alt="" />
                              </div>
                              <div class="me-3 flex-1">
                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1'>👍</span>Liked your
                                  comment.<span class="ms-2 text-500 fw-bold fs--2">1h</span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">9:30 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="border-300">
                        <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                  src="../assets/img/team/57.png" alt="" /></div>
                              <div class="me-3 flex-1">
                                <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1 fs--2'>💬</span>Mentioned you
                                  in a comment.<span class="ms-2 text-500 fw-bold fs--2"></span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">9:11 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                  src="../assets/img/team/59.png" alt="" /></div>
                              <div class="me-3 flex-1">
                                <h4 class="fs--1 text-black">Herman Carter</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1'>👤</span>Tagged you in a
                                  comment.<span class="ms-2 text-500 fw-bold fs--2"></span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">10:58 PM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="p-3 border-300 notification-card position-relative read ">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                  src="../assets/img/team/58.png" alt="" /></div>
                              <div class="me-3 flex-1">
                                <h4 class="fs--1 text-black">Benjamin Button</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1'>👍</span>Liked your
                                  comment.<span class="ms-2 text-500 fw-bold fs--2"></span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">10:18 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer p-0 border-top border-0">
                    <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                        href="pages/pages/notifications.html">Notification history</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                </svg></a>
              <div
                class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300"
                aria-labelledby="navbarDropdownNindeDots">
                <div class="card bg-white position-relative border-0">
                  <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                    <div class="row text-center align-items-center gx-0 gy-0">
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/behance.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/google-cloud.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/slack.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/gitlab.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/bitbucket.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/google-drive.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/trello.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/figma.png" alt="" width="20" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/twitter.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/pinterest.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/ln.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/google-maps.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/google-photos.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/spotify.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                        </a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                  <img class="rounded-circle " src="../assets/img/team/57.png" alt="" />
                </div>
              </a>
              <div
                class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                  <div class="card-body p-0">
                    <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-xl ">
                        <img class="rounded-circle " src="../assets/img/team/57.png" alt="" />
                      </div>
                      <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                    </div>
                    <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput"
                        type="text" placeholder="Update your status" /></div>
                  </div>
                  <div class="overflow-auto scrollbar" style="height: 10rem;">
                    <ul class="nav d-flex flex-column mb-2 pb-1">
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="user"></span>Profile</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900"
                            data-feather="pie-chart"></span>Dashboard</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="lock"></span>Posts &amp; Activity</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="settings"></span>Settings &amp; Privacy </a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="help-circle"></span>Help Center</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="globe"></span>Language</a></li>
                    </ul>
                  </div>
                  <div class="card-footer p-0 border-top">
                    <ul class="nav d-flex flex-column my-3">
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="user-plus"></span>Add another account</a></li>
                    </ul>
                    <hr />
                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="../login.php"> <span
                          class="me-2" data-feather="log-out"> </span>Login</a></div>
                    <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy
                        policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                        href="#!">Cookies</a></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
<nav class="navbar navbar-top navbar-slim navbar-expand" id="navbarSlim" style="display:none;">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
              data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
              aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                  class="toggle-line"></span></span></button>
            <a class="navbar-brand navbar-brand" href="index.html">phoenimmx <span class="text-1000">slim</span></a>
          </div>
          <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
              <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                  class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
                  data-theme-control="phoenixTheme" value="dark" /><label
                  class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                  data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                    class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span
                    class="fs--1 fw-bold">Dark</span></label><label
                  class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                  data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                    class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span
                    class="fs--1 fw-bold">Light</span></label></div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><span data-feather="bell"
                  style="height:12px;width:12px;"></span></a>
              <div
                class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
                id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="card position-relative border-0">
                  <div class="card-header p-2">
                    <div class="d-flex justify-content-between">
                      <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal"
                        type="button">Mark all as read</button>
                    </div>
                  </div>
                  <div class="card-body p-0"></div>
                  <div class="scrollbar-overlay">
                    <div class="overflow-auto" style="height: 27rem;">
                      <div class="border-300">
                        <div class="p-3 border-300 notification-card position-relative read border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                  src="../assets/img/team/30.png" alt="" /></div>
                              <div class="me-3 flex-1">
                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1'>💬</span>Mentioned you in a
                                  comment.<span class="ms-2 text-500 fw-bold fs--2">10m</span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">10:41 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3">
                                <div class="avatar-name rounded-circle"><span>J</span></div>
                              </div>
                              <div class="me-3 flex-1">
                                <h4 class="fs--1 text-black">Jane Foster</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1'>📅</span>Created an
                                  event.<span class="ms-2 text-500 fw-bold fs--2">20m</span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">10:20 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img
                                  class="rounded-circle avatar-placeholder" src="../assets/img/team/avatar.png" alt="" />
                              </div>
                              <div class="me-3 flex-1">
                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1'>👍</span>Liked your
                                  comment.<span class="ms-2 text-500 fw-bold fs--2">1h</span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">9:30 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="border-300">
                        <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                  src="../assets/img/team/57.png" alt="" /></div>
                              <div class="me-3 flex-1">
                                <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1 fs--2'>💬</span>Mentioned you
                                  in a comment.<span class="ms-2 text-500 fw-bold fs--2"></span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">9:11 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                  src="../assets/img/team/59.png" alt="" /></div>
                              <div class="me-3 flex-1">
                                <h4 class="fs--1 text-black">Herman Carter</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1'>👤</span>Tagged you in a
                                  comment.<span class="ms-2 text-500 fw-bold fs--2"></span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">10:58 PM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="p-3 border-300 notification-card position-relative read ">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                  src="../assets/img/team/58.png" alt="" /></div>
                              <div class="me-3 flex-1">
                                <h4 class="fs--1 text-black">Benjamin Button</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span class='me-1'>👍</span>Liked your
                                  comment.<span class="ms-2 text-500 fw-bold fs--2"></span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">10:18 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer p-0 border-top border-0">
                    <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                        href="pages/pages/notifications.html">Notification history</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                </svg></a>
              <div
                class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300"
                aria-labelledby="navbarDropdownNindeDots">
                <div class="card bg-white position-relative border-0">
                  <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                    <div class="row text-center align-items-center gx-0 gy-0">
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/behance.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/google-cloud.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/slack.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/gitlab.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/bitbucket.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/google-drive.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/trello.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/figma.png" alt="" width="20" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/twitter.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/pinterest.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/ln.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/google-maps.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/google-photos.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/spotify.png" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                        </a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Olivia <span
                  class="fa-solid fa-chevron-down fs--2"></span></a>
              <div
                class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                  <div class="card-body p-0">
                    <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-xl ">
                        <img class="rounded-circle " src="../assets/img/team/57.png" alt="" />
                      </div>
                      <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                    </div>
                    <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput"
                        type="text" placeholder="Update your status" /></div>
                  </div>
                  <div class="overflow-auto scrollbar" style="height: 10rem;">
                    <ul class="nav d-flex flex-column mb-2 pb-1">
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="user"></span>Profile</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900"
                            data-feather="pie-chart"></span>Dashboard</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="lock"></span>Posts &amp; Activity</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="settings"></span>Settings &amp; Privacy </a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="help-circle"></span>Help Center</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="globe"></span>Language</a></li>
                    </ul>
                  </div>
                  <div class="card-footer p-0 border-top">
                    <ul class="nav d-flex flex-column my-3">
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="user-plus"></span>Add another account</a></li>
                    </ul>
                    <hr />
                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span
                          class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                    <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy
                        policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                        href="#!">Cookies</a></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>

<nav class="navbar navbar-top navbar-expand-lg" id="navbarTopNew" style="display:none;">
    <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarToplCollapse" aria-controls="navbarToplCollapse"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                    class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="index.html">
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="../assets/logo.jpg" alt="phoenix" width="27" />
                    <p class="logo-text ms-2 d-none d-sm-block">phoenix,</p>
                </div>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
        id="navbarToplCollapse">
        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="dashboards">
                    <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold" href="index.html">E
                            commerce</a><a class="dropdown-item fw-semi-bold" href="project-management.html">Project
                            management</a><a class="dropdown-item fw-semi-bold" href="landing.html">Landing</a><a
                            class="dropdown-item fw-semi-bold" href="apps/social/feed.html">Social feed</a></div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="appss">Apps</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="appss">
                    <div class="dropdown-menu-content navbar-top-card p-3">
                        <div class="scrollbar max-h-dropdown">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="nav flex-column">
                                        <p class="nav-link mb-0 fw-bold">Admin</p><a class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/admin/add-product.html">Add product</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/admin/products.html">Products</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/admin/customers.html">Customers</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/admin/customer-details.html">Customer
                                            details</a><a class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/admin/orders.html">Orders</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/admin/order-details.html">Order details</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/admin/refund.html">Refund</a>
                                        <p class="nav-link mb-0 fw-bold">Landing</p><a class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/homepage.html">Homepage</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/product-details.html">Product details</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/products-filter.html">Products
                                            filter</a><a class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/cart.html">Cart</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/checkout.html">Checkout</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/shipping-info.html">Shipping info</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/profile.html">Profile</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/favourite-stores.html">Favourite
                                            stores</a><a class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/wishlist.html">Wishlist</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/order-tracking.html">Order tracking</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/invoice.html">Invoice</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="nav flex-column">
                                        <p class="nav-link mb-0 fw-bold">Projects</p><a class="nav-link fw-semi-bold"
                                            href="apps/project-management/create-new.html">Create new</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/project-management/project-list-view.html">Project
                                            list view</a><a class="nav-link fw-semi-bold"
                                            href="apps/project-management/project-card-view.html">Project card
                                            view</a><a class="nav-link fw-semi-bold"
                                            href="apps/project-management/project-board-view.html">Project
                                            board view</a><a class="nav-link fw-semi-bold"
                                            href="apps/project-management/todo-list.html">Todo list</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/project-management/project-details.html">Project details</a>
                                        <p class="nav-link mb-0 fw-bold">Email</p><a class="nav-link fw-semi-bold"
                                            href="apps/email/inbox.html">Inbox</a><a class="nav-link fw-semi-bold"
                                            href="apps/email/email-detail.html">Email detail</a><a
                                            class="nav-link fw-semi-bold" href="apps/email/compose.html">Compose</a>
                                        <p class="nav-link mb-0 fw-bold">Events</p><a class="nav-link fw-semi-bold"
                                            href="apps/events/create-an-event.html">Create an event</a><a
                                            class="nav-link fw-semi-bold" href="apps/events/event-detail.html">Event
                                            detail</a>
                                        <p class="nav-link mb-0 fw-bold">Social</p><a class="nav-link fw-semi-bold"
                                            href="apps/social/profile.html">Profile</a><a class="nav-link fw-semi-bold"
                                            href="apps/social/settings.html">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="pagess">
                    <div class="dropdown-menu-content navbar-top-card p-3">
                        <div class="scrollbar max-h-dropdown">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                            href="pages/starter.html">Starter</a><a class="nav-link fw-semi-bold"
                                            href="pages/pages/faq.html">Faq</a>
                                        <p class="nav-link mb-0 fw-bold">Pricing</p><a class="nav-link fw-semi-bold"
                                            href="pages/pages/pricing/pricing-column.html">Pricing column</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/pages/pricing/pricing-grid.html">Pricing
                                            grid</a><a class="nav-link fw-semi-bold"
                                            href="pages/pages/notifications.html">Notifications</a><a
                                            class="nav-link fw-semi-bold" href="pages/pages/members.html">Members</a>
                                        <p class="nav-link mb-0 fw-bold">Split</p><a class="nav-link fw-semi-bold"
                                            href="pages/authentication/split/sign-in.html">Sign in</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/split/sign-up.html">Sign up</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/split/sign-out.html">Sign out</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/split/forgot-password.html">Forgot password</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/split/reset-password.html">Reset
                                            password</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="nav flex-column">
                                        <p class="nav-link mb-0 fw-bold">Errorscc</p><a class="nav-link fw-semi-bold"
                                            href="pages/errors/404.html">404</a><a class="nav-link fw-semi-bold"
                                            href="pages/errors/500.html">500</a>
                                        <p class="nav-link mb-0 fw-bold">Simple</p><a class="nav-link fw-semi-bold"
                                            href="pages/authentication/simple/sign-in.html">Sign in</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/simple/sign-up.html">Sign up</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/simple/sign-out.html">Sign out</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/simple/forgot-password.html">Forgot
                                            password</a><a class="nav-link fw-semi-bold"
                                            href="pages/authentication/simple/reset-password.html">Reset password</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/simple/lock-screen.html">Lock
                                            screen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="moduless">
                    <div class="dropdown-menu-content navbar-top-card p-3">
                        <div class="scrollbar max-h-dropdown">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                            href="modules/forms/basic/form-control.html">Form control</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/basic/input-group.html">Input group</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/basic/select.html">Select</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/basic/checks.html">Checks</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/basic/range.html">Range</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/basic/floating-labels.html">Floating
                                            labels</a><a class="nav-link fw-semi-bold"
                                            href="modules/forms/basic/layout.html">Layout</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/advance/advance-select.html">Advance select</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/advance/date-picker.html">Date
                                            picker</a><a class="nav-link fw-semi-bold"
                                            href="modules/forms/advance/editor.html">Editor</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                            href="modules/forms/advance/file-uploader.html">File uploader</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/advance/rating.html">Rating</a><a
                                            class="nav-link fw-semi-bold" href="modules/forms/wizard.html">Wizard</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/icons/feather.html">Feather</a><a
                                            class="nav-link fw-semi-bold" href="modules/icons/font-awesome.html">Font
                                            awesome</a><a class="nav-link fw-semi-bold"
                                            href="modules/icons/unicons.html">Unicons</a><a
                                            class="nav-link fw-semi-bold" href="modules/tables/basic-tables.html">Basic
                                            tables</a><a class="nav-link fw-semi-bold"
                                            href="modules/tables/advance-tables.html">Advance tables</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/components/accordion.html">Accordion</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/components/avatar.html">Avatar</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="documentations">DocumentatioMn</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="documentations">
                    <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold"
                            href="documentation/getting-started.html">Getting started</a><a
                            class="dropdown-item fw-semi-bold"
                            href="documentation/customization/styling.html">Styling</a><a
                            class="dropdown-item fw-semi-bold"
                            href="documentation/customization/plugin.html">Plugin</a><a
                            class="dropdown-item fw-semi-bold"
                            href="documentation/layouts/vertical-navbar.html">Vertical navbar</a><a
                            class="dropdown-item fw-semi-bold"
                            href="documentation/layouts/horizontal-navbar.html">Horizontal
                            navbar</a><a class="dropdown-item fw-semi-bold" href="documentation/gulp.html">Gulp</a><a
                            class="dropdown-item fw-semi-bold" href="documentation/design-file.html">Design file</a><a
                            class="dropdown-item fw-semi-bold" href="changelog.html">Changelog</a><a
                            class="dropdown-item fw-semi-bold" href="showcase.html">Showcase</a></div>
                </div>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2"><input
                    class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
                    data-theme-control="phoenixTheme" value="dark" /><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                    data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                        data-feather="moon"></span></label><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                    data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                        data-feather="sun"></span></label></div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><span class="text-700" data-feather="bell"
                    style="height:20px;width:20px;"></span></a>
            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
                id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="card position-relative border-0">
                    <div class="card-header p-2">
                        <div class="d-flex justify-content-between">
                            <h5 class="text-black mb-0">Notificatons</h5><button
                                class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
                        </div>
                    </div>
                    <div class="card-body p-0"></div>
                    <div class="scrollbar-overlay">
                        <div class="overflow-auto" style="height: 27rem;">
                            <div class="border-300">
                                <div class="p-3 border-300 notification-card position-relative read border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                                    src="../assets/img/team/30.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>💬</span>Mentioned you in a
                                                    comment.<span class="ms-2 text-500 fw-bold fs--2">10m</span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM
                                                    </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark
                                                    as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3">
                                                <div class="avatar-name rounded-circle"><span>J</span></div>
                                            </div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Jane Foster</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>📅</span>Created an event.<span
                                                        class="ms-2 text-500 fw-bold fs--2">20m</span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM
                                                    </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark
                                                    as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle avatar-placeholder"
                                                    src="../assets/img/team/avatar.png" alt="" />
                                            </div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>👍</span>Liked your
                                                    comment.<span class="ms-2 text-500 fw-bold fs--2">1h</span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM
                                                    </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark
                                                    as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-300">
                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                                    src="../assets/img/team/57.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1 fs--2'>💬</span>Mentioned you in
                                                    a comment.<span class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM
                                                    </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark
                                                    as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                                    src="../assets/img/team/59.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Herman Carter</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>👤</span>Tagged you in a
                                                    comment.<span class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM
                                                    </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark
                                                    as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-300 notification-card position-relative read ">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                                    src="../assets/img/team/58.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Benjamin Button</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>👍</span>Liked your
                                                    comment.<span class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM
                                                    </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark
                                                    as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-0 border-top border-0">
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                                href="pages/pages/notifications.html">Notification history</a></div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                    <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                    <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                    <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                    <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                    <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                    <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                    <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                    <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                </svg></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300"
                aria-labelledby="navbarDropdownNindeDots">
                <div class="card bg-white position-relative border-0">
                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                        <div class="row text-center align-items-center gx-0 gy-0">
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/behance.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/google-cloud.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/slack.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/gitlab.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/bitbucket.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/google-drive.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/trello.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/figma.png" alt="" width="20" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/twitter.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/pinterest.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/ln.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/google-maps.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/google-photos.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/spotify.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                    <img class="rounded-circle " src="../assets/img/team/57.png" alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                    <div class="card-body p-0">
                        <div class="text-center pt-4 pb-3">
                            <div class="avatar avatar-xl ">
                                <img class="rounded-circle " src="../assets/img/team/57.png" alt="" />
                            </div>
                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                        </div>
                        <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput"
                                type="text" placeholder="Update your status" /></div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                        <ul class="nav d-flex flex-column mb-2 pb-1">
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                        data-feather="user"></span>Profile</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900"
                                        data-feather="pie-chart"></span>Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                        data-feather="lock"></span>Posts &amp; Activity</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                        data-feather="settings"></span>Settings &amp; Privacy </a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                        data-feather="help-circle"></span>Help Center</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                        data-feather="globe"></span>Language</a></li>
                        </ul>
                    </div>
                    <div class="card-footer p-0 border-top">
                        <ul class="nav d-flex flex-column my-3">
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                        data-feather="user-plus"></span>Add another account</a></li>
                        </ul>
                        <hr />
                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!">
                                <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy
                                policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a
                                class="text-600 ms-1" href="#!">Cookies</a></div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>
<nav class="navbar navbar-top navbar-slim justify-content-between navbar-expand-lg" id="navbarTopSlimNew"
    style="display:none;">
    <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarToplCollapse" aria-controls="navbarToplCollapse"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                    class="toggle-line"></span></span></button>
        <a class="navbar-brand navbar-brand" href="index.html">phoenixx <span class="text-1000">slim</span></a>
    </div>
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
        id="navbarToplCollapse">
        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="dashboards">
                    <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold" href="index.html">E
                            commerce</a><a class="dropdown-item fw-semi-bold" href="project-management.html">Project
                            management</a><a class="dropdown-item fw-semi-bold" href="landing.html">Landing</a><a
                            class="dropdown-item fw-semi-bold" href="apps/social/feed.html">Social feed</a></div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="appss">Apps</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="appss">
                    <div class="dropdown-menu-content navbar-top-card p-3">
                        <div class="scrollbar max-h-dropdown">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="nav flex-column">
                                        <p class="nav-link mb-0 fw-bold">Admin</p><a class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/admin/add-product.html">Add product</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/admin/products.html">Products</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/admin/customers.html">Customers</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/admin/customer-details.html">Customer
                                            details</a><a class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/admin/orders.html">Orders</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/admin/order-details.html">Order details</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/admin/refund.html">Refund</a>
                                        <p class="nav-link mb-0 fw-bold">Landing</p><a class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/homepage.html">Homepage</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/product-details.html">Product details</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/products-filter.html">Products
                                            filter</a><a class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/cart.html">Cart</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/checkout.html">Checkout</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/shipping-info.html">Shipping info</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/profile.html">Profile</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/favourite-stores.html">Favourite
                                            stores</a><a class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/wishlist.html">Wishlist</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/order-tracking.html">Order tracking</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/e-commerce/landing/invoice.html">Invoice</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="nav flex-column">
                                        <p class="nav-link mb-0 fw-bold">Projects</p><a class="nav-link fw-semi-bold"
                                            href="apps/project-management/create-new.html">Create new</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/project-management/project-list-view.html">Project
                                            list view</a><a class="nav-link fw-semi-bold"
                                            href="apps/project-management/project-card-view.html">Project card
                                            view</a><a class="nav-link fw-semi-bold"
                                            href="apps/project-management/project-board-view.html">Project
                                            board view</a><a class="nav-link fw-semi-bold"
                                            href="apps/project-management/todo-list.html">Todo list</a><a
                                            class="nav-link fw-semi-bold"
                                            href="apps/project-management/project-details.html">Project details</a>
                                        <p class="nav-link mb-0 fw-bold">Email</p><a class="nav-link fw-semi-bold"
                                            href="apps/email/inbox.html">Inbox</a><a class="nav-link fw-semi-bold"
                                            href="apps/email/email-detail.html">Email detail</a><a
                                            class="nav-link fw-semi-bold" href="apps/email/compose.html">Compose</a>
                                        <p class="nav-link mb-0 fw-bold">Events</p><a class="nav-link fw-semi-bold"
                                            href="apps/events/create-an-event.html">Create an event</a><a
                                            class="nav-link fw-semi-bold" href="apps/events/event-detail.html">Event
                                            detail</a>
                                        <p class="nav-link mb-0 fw-bold">Social</p><a class="nav-link fw-semi-bold"
                                            href="apps/social/profile.html">Profile</a><a class="nav-link fw-semi-bold"
                                            href="apps/social/settings.html">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="pagess">
                    <div class="dropdown-menu-content navbar-top-card p-3">
                        <div class="scrollbar max-h-dropdown">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                            href="pages/starter.html">Starter</a><a class="nav-link fw-semi-bold"
                                            href="pages/pages/faq.html">Faq</a>
                                        <p class="nav-link mb-0 fw-bold">Pricing</p><a class="nav-link fw-semi-bold"
                                            href="pages/pages/pricing/pricing-column.html">Pricing column</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/pages/pricing/pricing-grid.html">Pricing
                                            grid</a><a class="nav-link fw-semi-bold"
                                            href="pages/pages/notifications.html">Notifications</a><a
                                            class="nav-link fw-semi-bold" href="pages/pages/members.html">Members</a>
                                        <p class="nav-link mb-0 fw-bold">Split</p><a class="nav-link fw-semi-bold"
                                            href="pages/authentication/split/sign-in.html">Sign in</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/split/sign-up.html">Sign up</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/split/sign-out.html">Sign out</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/split/forgot-password.html">Forgot password</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/split/reset-password.html">Reset
                                            password</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="nav flex-column">
                                        <p class="nav-link mb-0 fw-bold">Errorscc</p><a class="nav-link fw-semi-bold"
                                            href="pages/errors/404.html">404</a><a class="nav-link fw-semi-bold"
                                            href="pages/errors/500.html">500</a>
                                        <p class="nav-link mb-0 fw-bold">Simple</p><a class="nav-link fw-semi-bold"
                                            href="pages/authentication/simple/sign-in.html">Sign in</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/simple/sign-up.html">Sign up</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/simple/sign-out.html">Sign out</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/simple/forgot-password.html">Forgot
                                            password</a><a class="nav-link fw-semi-bold"
                                            href="pages/authentication/simple/reset-password.html">Reset password</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pages/authentication/simple/lock-screen.html">Lock
                                            screen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="moduless">
                    <div class="dropdown-menu-content navbar-top-card p-3">
                        <div class="scrollbar max-h-dropdown">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                            href="modules/forms/basic/form-control.html">Form control</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/basic/input-group.html">Input group</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/basic/select.html">Select</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/basic/checks.html">Checks</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/basic/range.html">Range</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/basic/floating-labels.html">Floating
                                            labels</a><a class="nav-link fw-semi-bold"
                                            href="modules/forms/basic/layout.html">Layout</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/advance/advance-select.html">Advance select</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/advance/date-picker.html">Date
                                            picker</a><a class="nav-link fw-semi-bold"
                                            href="modules/forms/advance/editor.html">Editor</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                            href="modules/forms/advance/file-uploader.html">File uploader</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/forms/advance/rating.html">Rating</a><a
                                            class="nav-link fw-semi-bold" href="modules/forms/wizard.html">Wizard</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/icons/feather.html">Feather</a><a
                                            class="nav-link fw-semi-bold" href="modules/icons/font-awesome.html">Font
                                            awesome</a><a class="nav-link fw-semi-bold"
                                            href="modules/icons/unicons.html">Unicons</a><a
                                            class="nav-link fw-semi-bold" href="modules/tables/basic-tables.html">Basic
                                            tables</a><a class="nav-link fw-semi-bold"
                                            href="modules/tables/advance-tables.html">Advance tables</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/components/accordion.html">Accordion</a><a
                                            class="nav-link fw-semi-bold"
                                            href="modules/components/avatar.html">Avatar</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="documentations">DocumentationM</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="documentations">
                    <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold"
                            href="documentation/getting-started.html">Getting started</a><a
                            class="dropdown-item fw-semi-bold"
                            href="documentation/customization/styling.html">Styling</a><a
                            class="dropdown-item fw-semi-bold"
                            href="documentation/customization/plugin.html">Plugin</a><a
                            class="dropdown-item fw-semi-bold"
                            href="documentation/layouts/vertical-navbar.html">Vertical navbar</a><a
                            class="dropdown-item fw-semi-bold"
                            href="documentation/layouts/horizontal-navbar.html">Horizontal
                            navbar</a><a class="dropdown-item fw-semi-bold" href="documentation/gulp.html">Gulp</a><a
                            class="dropdown-item fw-semi-bold" href="documentation/design-file.html">Design file</a><a
                            class="dropdown-item fw-semi-bold" href="changelog.html">Changelog</a><a
                            class="dropdown-item fw-semi-bold" href="showcase.html">Showcase</a></div>
                </div>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
            <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                    class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
                    data-theme-control="phoenixTheme" value="dark" /><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                    data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                        class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span
                        class="fs--1 fw-bold">Dark</span></label><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                    data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                        class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span
                        class="fs--1 fw-bold">Light</span></label></div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><span data-feather="bell"
                    style="height:12px;width:12px;"></span></a>
            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
                id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="card position-relative border-0">
                    <div class="card-header p-2">
                        <div class="d-flex justify-content-between">
                            <h5 class="text-black mb-0">Notificatons</h5><button
                                class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
                        </div>
                    </div>
                    <div class="card-body p-0"></div>
                    <div class="scrollbar-overlay">
                        <div class="overflow-auto" style="height: 27rem;">
                            <div class="border-300">
                                <div class="p-3 border-300 notification-card position-relative read border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                                    src="../assets/img/team/30.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>💬</span>Mentioned you in a
                                                    comment.<span class="ms-2 text-500 fw-bold fs--2">10m</span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM
                                                    </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark
                                                    as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3">
                                                <div class="avatar-name rounded-circle"><span>J</span></div>
                                            </div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Jane Foster</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>📅</span>Created an event.<span
                                                        class="ms-2 text-500 fw-bold fs--2">20m</span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM
                                                    </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark
                                                    as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle avatar-placeholder"
                                                    src="../assets/img/team/avatar.png" alt="" />
                                            </div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>👍</span>Liked your
                                                    comment.<span class="ms-2 text-500 fw-bold fs--2">1h</span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM
                                                    </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark
                                                    as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-300">
                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                                    src="../assets/img/team/57.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1 fs--2'>💬</span>Mentioned you in
                                                    a comment.<span class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM
                                                    </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark
                                                    as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                                    src="../assets/img/team/59.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Herman Carter</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>👤</span>Tagged you in a
                                                    comment.<span class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM
                                                    </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark
                                                    as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-300 notification-card position-relative read ">
                                    <div class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                                    src="../assets/img/team/58.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Benjamin Button</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>👍</span>Liked your
                                                    comment.<span class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM
                                                    </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark
                                                    as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-0 border-top border-0">
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                                href="pages/pages/notifications.html">Notification history</a></div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                    <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                    <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                    <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                    <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                    <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                    <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                    <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                    <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                </svg></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300"
                aria-labelledby="navbarDropdownNindeDots">
                <div class="card bg-white position-relative border-0">
                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                        <div class="row text-center align-items-center gx-0 gy-0">
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/behance.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/google-cloud.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/slack.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/gitlab.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/bitbucket.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/google-drive.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/trello.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/figma.png" alt="" width="20" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/twitter.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/pinterest.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/ln.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/google-maps.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/google-photos.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../assets/img/nav-icons/spotify.png" alt="" width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Olivia <span
                    class="fa-solid fa-chevron-down fs--2"></span></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                    <div class="card-body p-0">
                        <div class="text-center pt-4 pb-3">
                            <div class="avatar avatar-xl ">
                                <img class="rounded-circle " src="../assets/img/team/57.png" alt="" />
                            </div>
                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                        </div>
                        <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput"
                                type="text" placeholder="Update your status" /></div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                        <ul class="nav d-flex flex-column mb-2 pb-1">
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                        data-feather="user"></span>Profile</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900"
                                        data-feather="pie-chart"></span>Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                        data-feather="lock"></span>Posts &amp; Activity</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                        data-feather="settings"></span>Settings &amp; Privacy </a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                        data-feather="help-circle"></span>Help Center</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                        data-feather="globe"></span>Language</a></li>
                        </ul>
                    </div>
                    <div class="card-footer p-0 border-top">
                        <ul class="nav d-flex flex-column my-3">
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                        data-feather="user-plus"></span>Add another account</a></li>
                        </ul>
                        <hr />
                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!">
                                <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy
                                policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a
                                class="text-600 ms-1" href="#!">Cookies</a></div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>



<script src="../vendors/popper/popper.min.js"></script>
  <script src="../vendors/bootstrap/bootstrap.min.js"></script>
  <script src="../vendors/anchorjs/anchor.min.js"></script>
  <script src="../vendors/is/is.min.js"></script>
  <script src="../vendors/fontawesome/all.min.js"></script>
  <script src="../vendors/lodash/lodash.min.js"></script>
  <script src="../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
  <script src="../vendors/list.js/list.min.js"></script>
  <script src="../vendors/feather-icons/feather.min.js"></script>
  <script src="../vendors/dayjs/dayjs.min.js"></script>
  <script src="../vendors/choices/choices.min.js"></script>
  <script src="../vendors/echarts/echarts.min.js"></script>
  <script src="../vendors/dhtmlx-gantt/dhtmlxgantt.js"></script>
  <script src="../assets/js/phoenix.js"></script>
  <script src="../assets/js/projectmanagement-dashboard.js"></script>