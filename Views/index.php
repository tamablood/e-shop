<?php
include '../Controller/ProduitC.php';
$produit = new produitC();
$listproduitC = $produit->afficherproduit();
?>
<?php
include '../Controller/Produit2C.php';
$produit2C = new produit2C();
// Retrieve data from the database using the Produit2C class method
$listproduit2C = $produit2C->afficherproduit2();
?>
<?php
include '../Controller/Produit3C.php';
$produit3C = new produit3C();
// Retrieve data from the database using the Produit2C class method
$listproduit3C = $produit3C->afficherproduit3();
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Shop -The best multipurpose eCommerce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/E-Shop.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">                                                                                     
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/flaticon_shofy.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <script type="text/javascript">
        
    function addToCart(name, image, price) {
        // Retrieve the table body where cart items are displayed
        var cartTableBody = document.querySelector(".table tbody");

        // Create a new row for the cart item
        var newRow = document.createElement("tr");

        // Construct the HTML for the new row
        newRow.innerHTML = `
            <td class="p-4">
                <div class="media align-items-center">
                    <img src="img/${image}" class="d-block ui-w-40 ui-bordered mr-4" alt>
                    <div class="media-body">
                        <a href="#" class="d-block text-dark">${nom}</a>
                        <small>Price: $${prix}</small>
                    </div>
                </div>
            </td>
            <td class="text-right font-weight-semibold align-middle p-4">$${prix}</td>
            <td class="align-middle p-4"><input type="text" class="form-control text-center" value="1"></td>
            <td class="text-right font-weight-semibold align-middle p-4">$${prix}</td>
            <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title data-original-title="Remove">×</a></td>
        `;

        // Append the new row to the cart table body
        cartTableBody.appendChild(newRow);
    }
</script>

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <!-- loading content here -->
                <div class="tp-preloader-content">
                    <div class="tp-preloader-logo">
                        <div class="tp-preloader-circle">
                            <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle> 
                           <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle> 
                       </svg>
                        </div>
                        <img src="assets/img/logo/E-Shop.png" alt="">
                    </div>
                    <h3 class="tp-preloader-title">E-Shop</h3>
                    <p class="tp-preloader-subtitle">Loading</p>
                </div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>               
         </button>
    </div>
    <!-- back to top end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area offcanvas__radius">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn offcanvas-close-btn">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                 </svg>
               </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo logo">
                        <a href="index.html">
                        <img src="assets/img/logo/E-Shop.png" alt="logo">
                     </a>
                    </div>
                </div>
                <div class="offcanvas__category pb-40">
                    <button class="tp-offcanvas-category-toggle">
                     <i class="fa-solid fa-bars"></i>
                     All Categories
                  </button>
                    <div class="tp-category-mobile-menu">

                    </div>
                </div>
                <div class="tp-main-menu-mobile fix d-lg-none mb-40"></div>

                <div class="offcanvas__contact align-items-center d-none">
                    <div class="offcanvas__contact-icon mr-20">
                        <span>
                        <img src="assets/img/icon/contact.png" alt="">
                     </span>
                    </div>
                    <div class="offcanvas__contact-content">
                        <h3 class="offcanvas__contact-title">
                            <a href="tel:098-852-987">004524865</a>
                        </h3>
                    </div>
                </div>
                <div class="offcanvas__btn">
                    <a href="contact.html" class="tp-btn-2 tp-btn-border-2">Contact Us</a>
                </div>
            </div>
            <div class="offcanvas__bottom">
                <div class="offcanvas__footer d-flex align-items-center justify-content-between">
                    <div class="offcanvas__currency-wrapper currency">
                        <span class="offcanvas__currency-selected-currency tp-currency-toggle" id="tp-offcanvas-currency-toggle">Currency : USD</span>
                        <ul class="offcanvas__currency-list tp-currency-list">
                            <li>USD</li>
                            <li>ERU</li>
                            <li>BDT </li>
                            <li>INR</li>
                        </ul>
                    </div>
                    <div class="offcanvas__select language">
                        <div class="offcanvas__lang d-flex align-items-center justify-content-md-end">
                            <div class="offcanvas__lang-img mr-15">
                                <img src="assets/img/icon/language-flag.png" alt="">
                            </div>
                            <div class="offcanvas__lang-wrapper">
                                <span class="offcanvas__lang-selected-lang tp-lang-toggle" id="tp-offcanvas-lang-toggle">English</span>
                                <ul class="offcanvas__lang-list tp-lang-list">
                                    <li>Spanish</li>
                                    <li>Portugese</li>
                                    <li>American</li>
                                    <li>Canada</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <!-- mobile menu area start -->
    <div id="tp-bottom-menu-sticky" class="tp-mobile-menu d-lg-none">
        <div class="container">
            <div class="row row-cols-5">
                <div class="col">
                    <div class="tp-mobile-item text-center">
                        <a href="shop.html" class="tp-mobile-item-btn">
                        <i class="flaticon-store"></i>
                        <span>Store</span>
                     </a>
                    </div>
                </div>
                <div class="col">
                    <div class="tp-mobile-item text-center">
                        <button class="tp-mobile-item-btn tp-search-open-btn">
                        <i class="flaticon-search-1"></i>
                        <span>Search</span>
                     </button>
                    </div>
                </div>
                <div class="col">
                    <div class="tp-mobile-item text-center">
                        <a href="wishlist.html" class="tp-mobile-item-btn">
                        <i class="flaticon-love"></i>
                        <span>Wishlist</span>
                     </a>
                    </div>
                </div>
                <div class="col">
                    <div class="tp-mobile-item text-center">
                        <a href="profile.html" class="tp-mobile-item-btn">
                        <i class="flaticon-user"></i>
                        <span>Account</span>
                     </a>
                    </div>
                </div>
                <div class="col">
                    <div class="tp-mobile-item text-center">
                        <button class="tp-mobile-item-btn tp-offcanvas-open-btn">
                        <i class="flaticon-menu-1"></i>
                        <span>Menu</span>
                     </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area end -->

    <!-- search area start -->
    <section class="tp-search-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-search-form">
                        <div class="tp-search-close text-center mb-20">
                            <button class="tp-search-close-btn tp-search-close-btn"></button>
                        </div>
                        <form action="#">
                            <div class="tp-search-input mb-10">
                                <input type="text" placeholder="Search for product...">
                                <button type="submit"><i class="flaticon-search-1"></i></button>
                            </div>
                            <div class="tp-search-category">
                                <span>Search by : </span>
                                <a href="#">Men, </a>
                                <a href="#">Women, </a>
                                <a href="#">Children, </a>
                                <a href="#">Shirt, </a>
                                <a href="#">Demin</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- search area end -->

    <!-- header area start -->
    <header>
        <div class="tp-header-area p-relative z-index-11">
            <!-- header top start  -->
            <div class="tp-header-top black-bg p-relative z-index-1 d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                             <div class="tp-header-top-right d-flex align-items-center justify-content-end">
                                 <div class="tp-header-top-menu d-flex align-items-center justify-content-end">
                                    <div class="tp-header-top-menu-item tp-header-setting">
                                        <span class="tp-header-setting-toggle" id="tp-header-setting-toggle">Setting</span>
                                        <ul>
                                            <li>
                                             <a href="profile.php?user_id=<?php echo isset($_GET['user_id']) ? $_GET['user_id'] : ''; ?>">My Profile</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">Cart</a>
                                            </li>
                                            <li>
                                                <a href="login.html">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header main start -->
            <div class="tp-header-main tp-header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                            <div class="logo">
                                <a href="index.html">
                              <img src="assets/img/logo/E-Shop.png" alt="logo">
                           </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                            <div class="tp-header-search pl-70">
                                <form action="#">
                                    <div class="tp-header-search-wrapper d-flex align-items-center">
                                        <div class="tp-header-search-box">
                                            <input type="text" placeholder="Search for Products...">
                                        </div>
                                        <div class="tp-header-search-btn">
                                            <button type="submit">
                                       <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M19 19L14.65 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>                                          
                                    </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                       
                        <div class="col-xl-4 col-lg-3 col-md-8 col-6">
                            <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                                 <!-- login-->
                                 <div class="tp-header-login d-none d-lg-block">
    <a href="login.php" class="d-flex align-items-center"> <!-- Updated href attribute -->
        <div class="tp-header-login-icon">
            <span>
                <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="8.57894" cy="5.77803" r="4.77803" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                                       
            </span>
        </div>
        <div class="tp-header-login-content d-none d-xl-block">
            <span>Hello, Sign In</span>
            <h5 class="tp-header-login-title">Your Account</h5>
        </div>
    </a>
</div>

                                
                                <!-- -->
                                <div class="tp-header-action d-flex align-items-center ml-50">
                                    <div class="tp-header-action-item">
                                    <div class="tp-header-action d-flex align-items-center ml-50">
    <div class="tp-header-action-item">
        <a href="shoppingcart.php" class="tp-header-action-btn cartmini-open-btn">
            <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.48626 20.5H14.8341C17.9004 20.5 20.2528 19.3924 19.5847 14.9348L18.8066 8.89359C18.3947 6.66934 16.976 5.81808 15.7311 5.81808H5.55262C4.28946 5.81808 2.95308 6.73341 2.4771 8.89359L1.69907 14.9348C1.13157 18.889 3.4199 20.5 6.48626 20.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.34902 5.5984C6.34902 3.21232 8.28331 1.27803 10.6694 1.27803V1.27803C11.8184 1.27316 12.922 1.72619 13.7362 2.53695C14.5504 3.3477 15.0081 4.44939 15.0081 5.5984V5.5984" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M7.70365 10.1018H7.74942" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M13.5343 10.1018H13.5801" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>    
        </a>
    </div>
</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header bottom start -->
            <div class="tp-header-bottom tp-header-bottom-border d-none d-lg-block">
                <div class="container">
                    <div class="tp-mega-menu-wrapper p-relative">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="tp-header-category tp-category-menu tp-header-category-toggle">
                                    <button class="tp-category-menu-btn tp-category-menu-toggle">
                                 <span>
                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1C0 0.447715 0.447715 0 1 0H15C15.5523 0 16 0.447715 16 1C16 1.55228 15.5523 2 15 2H1C0.447715 2 0 1.55228 0 1ZM0 7C0 6.44772 0.447715 6 1 6H17C17.5523 6 18 6.44772 18 7C18 7.55228 17.5523 8 17 8H1C0.447715 8 0 7.55228 0 7ZM1 12C0.447715 12 0 12.4477 0 13C0 13.5523 0.447715 14 1 14H11C11.5523 14 12 13.5523 12 13C12 12.4477 11.5523 12 11 12H1Z" fill="currentColor"/>
                                    </svg>
                                 </span>     
                                 All Departments                            
                              </button>
                              <nav class="tp-category-menu-content">
    <ul>
        <li>
            <a href="shop.html">
                <span>
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.90532 14.8316V12.5719C5.9053 11.9971 6.37388 11.5301 6.95443 11.5262H9.08101C9.66434 11.5262 10.1372 11.9944 10.1372 12.5719V14.8386C10.1371 15.3266 10.5305 15.7254 11.0233 15.7368H12.441C13.8543 15.7368 15 14.6026 15 13.2035V6.77525C14.9925 6.22482 14.7314 5.70794 14.2911 5.37171L9.44253 1.50496C8.59311 0.83168 7.38562 0.83168 6.5362 1.50496L1.70886 5.37873C1.26693 5.7136 1.00544 6.23133 1 6.78227V13.2035C1 14.6026 2.1457 15.7368 3.55899 15.7368H4.97671C5.48173 15.7368 5.89114 15.3315 5.89114 14.8316V14.8316" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                New Arrivals
            </a>
        </li>
        <li class="has-dropdown">
            <a href="shop.html" class="has-mega-menu">
                <span>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.6856 4.54975C2.6856 3.52014 3.51984 2.6859 4.54945 2.68508H5.3977C5.88984 2.68508 6.36136 2.48971 6.71089 2.14348L7.30359 1.54995C8.02984 0.819578 9.21031 0.816281 9.94068 1.54253L9.9415 1.54336L9.94892 1.54995L10.5425 2.14348C10.892 2.49053 11.3635 2.68508 11.8556 2.68508H12.7031C13.7327 2.68508 14.5677 3.51932 14.5677 4.54975V5.39636C14.5677 5.88849 14.7623 6.36084 15.1093 6.71037L15.7029 7.3039C16.4332 8.03015 16.4374 9.21061 15.7111 9.94098L15.7103 9.94181L15.7029 9.94923L15.1093 10.5428C14.7623 10.8915 14.5677 11.363 14.5677 11.8551V12.7034C14.5677 13.733 13.7335 14.5672 12.7039 14.5672H12.7031H11.854C11.3619 14.5672 10.8895 14.7626 10.5408 15.1096L9.94727 15.7024C9.22185 16.4327 8.04221 16.4368 7.31183 15.7122C7.31101 15.7114 7.31019 15.7106 7.30936 15.7098L7.30194 15.7024L6.70924 15.1096C6.36054 14.7626 5.88819 14.568 5.39605 14.5672H4.54945C3.51984 14.5672 2.6856 13.733 2.6856 12.7034V11.8535C2.6856 11.3613 2.49023 10.8898 2.14318 10.5411L1.55047 9.94758C0.820097 9.22215 0.815976 8.04251 1.5414 7.31214C1.5414 7.31132 1.54223 7.31049 1.54305 7.30967L1.55047 7.30225L2.14318 6.70872C2.49023 6.35919 2.6856 5.88767 2.6856 5.39471V4.54975" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.50787 10.7453L10.745 6.50812" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.6823 10.6862H10.6897" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.56053 6.56446H6.56795" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                Electronics
            </a>
            <ul class="mega-menu tp-submenu">
                <li>
                    <a href="shop.html" class="mega-menu-title">Featured</a>
                    <ul>
                        <li>
                            <a href="shop.html"><img src="assets/img/header/menu/menu-1.jpg" alt=""></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="shop.html" class="mega-menu-title">Computer & Laptops</a>
                    <ul>
                        <li>
                            <a href="shop.html"><img src="assets/img/header/menu/menu-2.jpg" alt=""></a>
                        </li>                                                         
                    </ul>
                </li>
                <li>
                    <a href="shop.html" class="mega-menu-title">Accessories</a>
                    <ul>
                        <li>
                            <a href="shop.html"><img src="assets/img/header/menu/menu-3.jpg" alt=""></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
        <form action="shoppingcart.php" method="get">
    <button type="submit">
        <span>
            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.90532 14.8316V12.5719C5.9053 11.9971 6.37388 11.5301 6.95443 11.5262H9.08101C9.66434 11.5262 10.1372 11.9944 10.1372 12.5719V14.8386C10.1371 15.3266 10.5305 15.7254 11.0233 15.7368H12.441C13.8543 15.7368 15 14.6026 15 13.2035V6.77525C14.9925 6.22482 14.7314 5.70794 14.2911 5.37171L9.44253 1.50496C8.59311 0.83168 7.38562 0.83168 6.5362 1.50496L1.70886 5.37873C1.26693 5.7136 1.00544 6.23133 1 6.78227V13.2035C1 14.6026 2.1457 15.7368 3.55899 15.7368H4.97671C5.48173 15.7368 5.89114 15.3315 5.89114 14.8316V14.8316" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>
       <strong>shopping cart </strong> 
    </button>
</form>

        </li>
        <li>
            <a href="shop.html">
                <span>
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.90532 14.8316V12.5719C5.9053 11.9971 6.37388 11.5301 6.95443 11.5262H9.08101C9.66434 11.5262 10.1372 11.9944 10.1372 12.5719V14.8386C10.1371 15.3266 10.5305 15.7254 11.0233 15.7368H12.441C13.8543 15.7368 15 14.6026 15 13.2035V6.77525C14.9925 6.22482 14.7314 5.70794 14.2911 5.37171L9.44253 1.50496C8.59311 0.83168 7.38562 0.83168 6.5362 1.50496L1.70886 5.37873C1.26693 5.7136 1.00544 6.23133 1 6.78227V13.2035C1 14.6026 2.1457 15.7368 3.55899 15.7368H4.97671C5.48173 15.7368 5.89114 15.3315 5.89114 14.8316V14.8316" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                Accessories
            </a>
        </li>
    </ul>
</nav>

                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu menu-style-1">
                                    <nav class="tp-main-menu-content">
                                        <ul>
                                            <li class="has-dropdown has-mega-menu">
                                                <a href="index.php">Home</a>                                             
                                            </li>
                                            <li class="has-dropdown has-mega-menu ">

                                                <a href="shop.html">Products</a>
                                                <ul class="tp-submenu tp-mega-menu mega-menu-style-2">                                                  
                                                    <!-- third col -->
                                                    <li class="has-dropdown">
                                                        <a href="product-details.html" class="mega-menu-title">Products</a>
                                                        <ul class="tp-submenu">                                                       
                                                            <li><a href="product-details-countdown.html">New</a></li>
                                                            <li><a href="product-details-presentation.html">Featured</a></li>                                                           <
                                                        </ul>
                                                    </li>
                                                    <!-- second col -->
                                                    <li class="has-dropdown">
                                                        <a href="shop.html" class="mega-menu-title">More Pages</a>
                                                        <ul class="tp-submenu">
                                                            <li><a href="about.html">About</a></li>
                                                            <li><a href="login.html">Login</a></li>
                                                            <li><a href="register.html">Register</a></li>
                                                            <li><a href="forgot.html">Forgot Password</a></li>
                                                            <li><a href="404.html">404 Error</a></li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="tp-header-contact d-flex align-items-center justify-content-end">
                                    <div class="tp-header-contact-icon">
                                        <span>
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M1.96977 3.24859C2.26945 2.75144 3.92158 0.946726 5.09889 1.00121C5.45111 1.03137 5.76246 1.24346 6.01544 1.49057H6.01641C6.59631 2.05874 8.26011 4.203 8.35352 4.65442C8.58411 5.76158 7.26378 6.39979 7.66756 7.5157C8.69698 10.0345 10.4707 11.8081 12.9908 12.8365C14.1058 13.2412 14.7441 11.9219 15.8513 12.1515C16.3028 12.2459 18.4482 13.9086 19.0155 14.4894V14.4894C19.2616 14.7414 19.4757 15.0537 19.5049 15.4059C19.5487 16.6463 17.6319 18.3207 17.2583 18.5347C16.3767 19.1661 15.2267 19.1544 13.8246 18.5026C9.91224 16.8749 3.65985 10.7408 2.00188 6.68096C1.3675 5.2868 1.32469 4.12906 1.96977 3.24859Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M12.936 1.23685C16.4432 1.62622 19.2124 4.39253 19.6065 7.89874" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M12.936 4.59337C14.6129 4.92021 15.9231 6.23042 16.2499 7.90726" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                    
                                 </span>
                                    </div>
                                    <div class="tp-header-contact-content">
                                        <h5>Hotline:</h5>
                                        <p><a href="tel:402-763-282-46">+(402) 763 282 46</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <div id="header-sticky-2" class="tp-header-sticky-area">
        <div class="container">
            <div class="tp-mega-menu-wrapper p-relative">
                <div class="row align-items-center">
                    
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                        <div class="tp-header-action d-flex align-items-center justify-content-end ml-50">
                            <div class="tp-header-action-item">
                                <button type="button" class="tp-header-action-btn cartmini-open-btn">
                              <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M6.48626 20.5H14.8341C17.9004 20.5 20.2528 19.3924 19.5847 14.9348L18.8066 8.89359C18.3947 6.66934 16.976 5.81808 15.7311 5.81808H5.55262C4.28946 5.81808 2.95308 6.73341 2.4771 8.89359L1.69907 14.9348C1.13157 18.889 3.4199 20.5 6.48626 20.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M6.34902 5.5984C6.34902 3.21232 8.28331 1.27803 10.6694 1.27803V1.27803C11.8184 1.27316 12.922 1.72619 13.7362 2.53695C14.5504 3.3477 15.0081 4.44939 15.0081 5.5984V5.5984" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.70365 10.1018H7.74942" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M13.5343 10.1018H13.5801" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>    
                              <span class="tp-header-action-badge">13</span>                                                                          
                           </button>
                            </div>
                            <div class="tp-header-action-item d-lg-none">
                                <button type="button" class="tp-header-action-btn tp-offcanvas-open-btn">
                              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                 <rect x="10" width="20" height="2" fill="currentColor"/>
                                 <rect x="5" y="7" width="25" height="2" fill="currentColor"/>
                                 <rect x="10" y="14" width="20" height="2" fill="currentColor"/>
                              </svg>
                           </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <main>

        <!-- slider area start -->
        <section class="tp-slider-area p-relative z-index-1">
    <div class="tp-slider-active tp-slider-variation swiper-container">
        <div class="swiper-wrapper">
            <div class="tp-slider-item tp-slider-height d-flex align-items-center swiper-slide green-dark-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-6 col-md-6">
                            <div class="tp-slider-content p-relative z-index-1">
                                <span>Starting at <b>$274.00</b></span>
                                <h3 class="tp-slider-title">The best tablet Collection 2023</h3>
                                <p>Exclusive offer
                                    <span>-35% 
                                        <svg width="94" height="20" viewBox="0 0 94 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M74.8576 4.63367L78.6048 5.11367C80.9097 5.35155 82.8309 5.75148 84.4483 5.97993L86.6581 6.31091L88.4262 6.63948C89.4684 6.81761 90.2699 6.9312 90.8805 6.99186C93.3213 7.24888 92.7011 6.63674 92.8183 6.12534C92.9355 5.61394 93.7175 5.37081 91.3267 4.45886C90.73 4.24001 89.9345 3.97481 88.8826 3.65818L87.1034 3.12577L84.8643 2.63282C83.236 2.28025 81.2402 1.82307 78.8684 1.52138L75.0177 0.981633C73.6188 0.823014 72.1417 0.730003 70.5389 0.582533C63.0297 0.0282543 55.4847 0.193022 48.0068 1.07459C39.9065 2.04304 31.9328 3.87384 24.2213 6.53586C18.0824 8.61764 12.1674 11.3089 6.56479 14.5692C4.88189 15.5255 3.25403 16.5756 1.68892 17.7145C0.568976 18.5077 -0.00964231 18.9932 0.0547097 19.0858C0.388606 19.6584 10.6194 13.1924 25.151 8.99361C32.789 6.72748 40.6283 5.20536 48.5593 4.44848C55.8569 3.76455 63.1992 3.69678 70.5082 4.24591L74.8223 4.62335" fill="currentColor"/>
                                        </svg>
                                    </span> off this week</p>

                                <div class="tp-slider-btn">
                                    <a href="shop.html" class="tp-btn tp-btn-2 tp-btn-white">Shop Now
                                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-6">
                            <div class="tp-slider-thumb text-end">
                                <div class="container">
                                    <div class="row">
                                    <img src="assets/img/slider/slider-img-2.png" alt="slider-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- slider area end -->

<!-- product category area start -->
<section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php $count = 0; ?>
            <?php foreach ($listproduitC as $produit) : ?>
                <div class="col-md-3">
                    <div class="tp-product-category-item text-center mb-40">
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                        <div class="tp-product-category-content">
                            <h3 class="tp-product-category-title">
                                <div class="item-price text-primary"><?php echo $produit['nom']; ?></div>
                                <a href="single-product.php"><?php echo $produit['prix']; ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
                <?php $count++; ?>
                <?php if ($count == 0) : ?>
                    </div><div class="row">
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>



               
        <!-- product category area end -->

        <!-- feature area start -->
        <section class="tp-feature-area tp-feature-border-radius pb-70">
            <div class="container">
                <div class="row gx-1 gy-1 gy-xl-0">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="tp-feature-item d-flex align-items-start">
                            <div class="tp-feature-icon mr-15">
                                <span>
                              <svg width="33" height="27" viewBox="0 0 33 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.7222 1H31.5555V19.0556H10.7222V1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M10.7222 7.94446H5.16667L1.00001 12.1111V19.0556H10.7222V7.94446Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M25.3055 26C23.3879 26 21.8333 24.4454 21.8333 22.5278C21.8333 20.6101 23.3879 19.0555 25.3055 19.0555C27.2232 19.0555 28.7778 20.6101 28.7778 22.5278C28.7778 24.4454 27.2232 26 25.3055 26Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.25001 26C5.33235 26 3.77778 24.4454 3.77778 22.5278C3.77778 20.6101 5.33235 19.0555 7.25001 19.0555C9.16766 19.0555 10.7222 20.6101 10.7222 22.5278C10.7222 24.4454 9.16766 26 7.25001 26Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                                        
                           </span>
                            </div>
                            <div class="tp-feature-content">
                                <h3 class="tp-feature-title">Free Delivary</h3>
                                <p>Orders from all item</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="tp-feature-item d-flex align-items-start">
                            <div class="tp-feature-icon mr-15">
                                <span>
                              <svg width="21" height="35" viewBox="0 0 21 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.3636 1V34" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M17.8636 7H6.61365C5.22126 7 3.8859 7.55312 2.90134 8.53769C1.91677 9.52226 1.36365 10.8576 1.36365 12.25C1.36365 13.6424 1.91677 14.9777 2.90134 15.9623C3.8859 16.9469 5.22126 17.5 6.61365 17.5H14.1136C15.506 17.5 16.8414 18.0531 17.826 19.0377C18.8105 20.0223 19.3636 21.3576 19.3636 22.75C19.3636 24.1424 18.8105 25.4777 17.826 26.4623C16.8414 27.4469 15.506 28 14.1136 28H1.36365" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                                        
                           </span>
                            </div>
                            <div class="tp-feature-content">
                                <h3 class="tp-feature-title">Return & Refunf</h3>
                                <p>Maney back guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="tp-feature-item d-flex align-items-start">
                            <div class="tp-feature-icon mr-15">
                                <span>
                              <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <mask id="mask0_1211_583" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="31" height="30">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H30.0024V29.9998H0V0Z" fill="white"/>
                                 </mask>
                                 <g mask="url(#mask0_1211_583)">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4168 27.1116C14.3017 27.9756 15.7266 27.9651 16.6056 27.0816L17.6885 26.0017C18.5285 25.1632 19.6894 24.6848 20.8728 24.6848H22.4178C23.6687 24.6848 24.6856 23.6678 24.6856 22.4184V20.875C24.6856 19.6736 25.1506 18.5441 25.9995 17.6937L27.0795 16.6122C27.519 16.1713 27.7544 15.5998 27.7529 14.9938C27.7514 14.3894 27.513 13.8209 27.0825 13.3919L26.001 12.309C25.1506 11.4525 24.6856 10.3246 24.6856 9.12318V7.58277C24.6856 6.33184 23.6687 5.3149 22.4178 5.3149H20.8758C19.6744 5.3149 18.545 4.84842 17.6945 4.00397L16.6116 2.91954C15.7101 2.02709 14.2717 2.03159 13.3913 2.91804L12.3128 3.99947C11.4519 4.84992 10.3225 5.3149 9.12553 5.3149H7.58212C6.33269 5.3164 5.31575 6.33334 5.31575 7.58277V9.12018C5.31575 10.3216 4.84927 11.451 4.00332 12.303L2.93839 13.3694C2.92789 13.3814 2.91739 13.3904 2.90689 13.4009C2.02644 14.2874 2.03094 15.7258 2.91739 16.6062L4.00032 17.6892C4.84927 18.5411 5.31575 19.6706 5.31575 20.872V22.4184C5.31575 23.6678 6.33119 24.6848 7.58212 24.6848H9.12253C10.3255 24.6863 11.4549 25.1527 12.3053 26.0002L13.3868 27.0786C13.3958 27.0891 13.4063 27.0996 13.4168 27.1116ZM14.9972 30.0002C13.8468 30.0002 12.6963 29.5652 11.8159 28.6923C11.8039 28.6803 11.7919 28.6683 11.7799 28.6548L10.715 27.5914C10.2905 27.1699 9.72352 26.9359 9.12055 26.9344H7.58164C5.09029 26.9344 3.06541 24.908 3.06541 22.4182V20.8717C3.06541 20.2688 2.82992 19.7033 2.40694 19.2773L1.32851 18.2004C-0.423392 16.4575 -0.444391 13.6197 1.27601 11.8498C1.28951 11.8363 1.30301 11.8228 1.31651 11.8093L2.40844 10.7143C2.82992 10.2899 3.06541 9.72139 3.06541 9.11993V7.58252C3.06541 5.09266 5.09029 3.06628 7.58014 3.06478H9.12505C9.72652 3.06478 10.2935 2.82929 10.724 2.40482L11.7964 1.32938C13.5498 -0.436017 16.4161 -0.445016 18.1845 1.31288L19.281 2.40932C19.7054 2.83079 20.2724 3.06478 20.8754 3.06478H22.4173C24.9086 3.06478 26.935 5.09116 26.935 7.58252V9.12293C26.935 9.72439 27.169 10.2929 27.5935 10.7203L28.6704 11.7988C29.5239 12.6462 29.9978 13.7787 30.0023 14.9861C30.0068 16.1935 29.5404 17.329 28.6899 18.1854L27.5905 19.2818C27.169 19.7063 26.935 20.2718 26.935 20.8747V22.4182C26.935 24.908 24.9086 26.9344 22.4188 26.9344H20.8724C20.2784 26.9344 19.6979 27.1744 19.2765 27.5929L18.1995 28.6698C17.3191 29.5562 16.1581 30.0002 14.9972 30.0002Z" fill="currentColor"/>
                                 </g>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11.145 19.9811C10.857 19.9811 10.569 19.8716 10.3501 19.6511C9.91058 19.2116 9.91058 18.5006 10.3501 18.0612L18.0596 10.3501C18.4991 9.91064 19.2115 9.91064 19.651 10.3501C20.0905 10.7896 20.0905 11.502 19.651 11.9415L11.94 19.6511C11.721 19.8716 11.433 19.9811 11.145 19.9811Z" fill="currentColor"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7544 20.2476C17.925 20.2476 17.247 19.5772 17.247 18.7477C17.247 17.9183 17.9115 17.2478 18.7409 17.2478H18.7544C19.5839 17.2478 20.2543 17.9183 20.2543 18.7477C20.2543 19.5772 19.5839 20.2476 18.7544 20.2476Z" fill="currentColor"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2548 12.748C10.4254 12.748 9.74744 12.0775 9.74744 11.2481C9.74744 10.4186 10.4119 9.74817 11.2413 9.74817H11.2548C12.0843 9.74817 12.7548 10.4186 12.7548 11.2481C12.7548 12.0775 12.0843 12.748 11.2548 12.748Z" fill="currentColor"/>
                              </svg>                                                                                        
                           </span>
                            </div>
                            <div class="tp-feature-content">
                                <h3 class="tp-feature-title">Member Discount</h3>
                                <p>Onevery order over $140.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="tp-feature-item d-flex align-items-start">
                            <div class="tp-feature-icon mr-15">
                                <span>
                              <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.5 24.3333V15C1.5 11.287 2.975 7.72602 5.60051 5.10051C8.22602 2.475 11.787 1 15.5 1C19.213 1 22.774 2.475 25.3995 5.10051C28.025 7.72602 29.5 11.287 29.5 15V24.3333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M29.5 25.8889C29.5 26.714 29.1722 27.5053 28.5888 28.0888C28.0053 28.6722 27.214 29 26.3889 29H24.8333C24.0082 29 23.2169 28.6722 22.6335 28.0888C22.05 27.5053 21.7222 26.714 21.7222 25.8889V21.2222C21.7222 20.3971 22.05 19.6058 22.6335 19.0223C23.2169 18.4389 24.0082 18.1111 24.8333 18.1111H29.5V25.8889ZM1.5 25.8889C1.5 26.714 1.82778 27.5053 2.41122 28.0888C2.99467 28.6722 3.78599 29 4.61111 29H6.16667C6.99179 29 7.78311 28.6722 8.36656 28.0888C8.95 27.5053 9.27778 26.714 9.27778 25.8889V21.2222C9.27778 20.3971 8.95 19.6058 8.36656 19.0223C7.78311 18.4389 6.99179 18.1111 6.16667 18.1111H1.5V25.8889Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                                                                       
                           </span>
                            </div>
                            <div class="tp-feature-content">
                                <h3 class="tp-feature-title">Support 24/7</h3>
                                <p>Contact us 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature area end -->

        <!-- product area start -->
        <section class="tp-product-area pb-55">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-5 col-lg-6 col-md-5">
                        <div class="tp-section-title-wrapper mb-40">
                            <h3 class="tp-section-title">Products

                               
                            </h3>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-7">
                        <div class="tp-product-tab tp-product-tab-border mb-45 tp-tab d-flex justify-content-md-end">
                            <ul class="nav nav-tabs justify-content-sm-end" id="productTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new-tab-pane" type="button" role="tab" aria-controls="new-tab-pane" aria-selected="true">New
                              <span class="tp-product-tab-line">
                                 <svg width="52" height="13" viewBox="0 0 52 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 8.97127C11.6061 -5.48521 33 3.99996 51 11.4635" stroke="currentColor" stroke-width="2" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                                    </svg>
                              </span>
                              </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured-tab-pane" type="button" role="tab" aria-controls="featured-tab-pane" aria-selected="false">Featured
                              <span class="tp-product-tab-line">
                                 <svg width="52" height="13" viewBox="0 0 52 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 8.97127C11.6061 -5.48521 33 3.99996 51 11.4635" stroke="currentColor" stroke-width="2" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                                    </svg>
                              </span>
                              </button>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-product-tab-content">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="new-tab-pane" role="tabpanel" aria-labelledby="new-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item p-relative transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                    <a href="product-details.html">
                                                    <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit2C as $produit2) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit2['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

                                          </a>  
                                                    <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                           <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit2['id']; ?>"
                                           data-product-nom="<?php echo $produit2['nom']; ?>"
                                           data-product-prix="<?php echo $produit2['prix']; ?>">
                                           <a class="btn btn-primary">Add to Cart</a>
                                           </button>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit2['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                Galaxy Tab S6 Lite 10.4-inch Android Tablet 128GB.
                                             </a>
                                                    </h3>
                                                    <div class="tp-product-price-wrapper">
                                                    $<a href="single-product.php"><?php echo $produit2['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                    <a href="product-details.html">
                                                    <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit2C as $produit2) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit2['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

                                          </a>
                                                   <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                        <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit2['id']; ?>"
                                           data-product-nom="<?php echo $produit2['nom']; ?>"
                                           data-product-prix="<?php echo $produit2['prix']; ?>">
                                           <a  class="btn btn-primary">Add to Cart</a>
                                           </button>

                                                         </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit2['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                Tracker with IP67 Waterproof Pedometer Smart watch.
                                             </a>
                                                    </h3>
                                                    <div class="tp-product-price-wrapper">
                                                   $ <a href="single-product.php"><?php echo $produit2['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                    <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit2C as $produit2) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit2['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

                                                    <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                        <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit2['id']; ?>"
                                           data-product-nom="<?php echo $produit2['nom']; ?>"
                                           data-product-prix="<?php echo $produit2['prix']; ?>">
                                           <a  class="btn btn-primary">Add to Cart</a>
                                           </button>
                                                         </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit2['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                Cancelling Headphones Wireless.
                                             </a>
                                                    </h3>               
                                                    <div class="tp-product-price-wrapper">
                                                        <span class="tp-product-price old-price">$1400.00</span>
                                                       $ <a href="single-product.php"><?php echo $produit2['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit2C as $produit2) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit2['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
                                           <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                        <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit2['id']; ?>"
                                           data-product-nom="<?php echo $produit2['nom']; ?>"
                                           data-product-prix="<?php echo $produit2['prix']; ?>">
                                           <a  class="btn btn-primary">Add to Cart</a>
                                           </button>
                                                         </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit2['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                Professional Camera 4K Digital Video Camera.
                                             </a>
                                                    </h3>
                                                     <div class="tp-product-price-wrapper">
                                                        <span class="tp-product-price old-price">$475.00</span>
                                                       $ <a href="single-product.php"><?php echo $produit2['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit2C as $produit2) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit2['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
                                                    <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                        <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit2['id']; ?>"
                                           data-product-nom="<?php echo $produit2['nom']; ?>"
                                           data-product-prix="<?php echo $produit2['prix']; ?>">
                                           <a  class="btn btn-primary">Add to Cart</a>
                                           </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit2['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                Mini Portable PD 22.5W Fast Charging Powerbank.
                                             </a>
                                                    </h3>
                                                    <div class="tp-product-price-wrapper">
                                                   $ <a href="single-product.php"><?php echo $produit2['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit2C as $produit2) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit2['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
                                                    <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                        <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit2['id']; ?>"
                                           data-product-nom="<?php echo $produit2['nom']; ?>"
                                           data-product-prix="<?php echo $produit2['prix']; ?>">
                                           <a  class="btn btn-primary">Add to Cart</a>
                                           </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit2['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                CPU Cooler 2 Heat Pipes 12mm 4 Pin PWM RGB for Intel.
                                             </a>
                                                    </h3>
                                                    <div class="tp-product-price-wrapper">
                                                   $ <a href="single-product.php"><?php echo $produit2['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit2C as $produit2) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit2['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
                                                    <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                        <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit2['id']; ?>"
                                           data-product-nom="<?php echo $produit2['nom']; ?>"
                                           data-product-prix="<?php echo $produit2['prix']; ?>">
                                           <a class="btn btn-primary">Add to Cart</a>
                                           </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit2['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                Playstation 4 2TB Slim Gaming Console.
                                             </a>
                                                    </h3>
                                                    <div class="tp-product-price-wrapper">
                                                   $ <a href="single-product.php"><?php echo $produit2['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit2C as $produit2) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit2['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
                                                    <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                        <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit2['id']; ?>"
                                           data-product-nom="<?php echo $produit2['nom']; ?>"
                                           data-product-prix="<?php echo $produit2['prix']; ?>">
                                           <a  class="btn btn-primary">Add to Cart</a>
                                           </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit2['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                Mini Portable Mobile Phone Powerbank for iphone.
                                             </a>
                                                    </h3>
                                                    <div class="tp-product-price-wrapper">
                                                        <span class="tp-product-price old-price">$120.00</span>
                                                        $<a href="single-product.php"><?php echo $produit2['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <!--bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb-->

                                <div class="tab-pane fade" id="featured-tab-pane" role="tabpanel" aria-labelledby="featured-tab" tabindex="0">
                                    <div class="row">

                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit3C as $produit3) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit3['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
                                                    <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                        <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit3['id']; ?>"
                                           data-product-nom="<?php echo $produit3['nom']; ?>"
                                           data-product-prix="<?php echo $produit3['prix']; ?>">
                                           <a  class="btn btn-primary">Add to Cart</a>
                                           </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit3['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                Playstation 4 2TB Slim Gaming Console.
                                             </a>
                                                    </h3>
                                                    <div class="tp-product-price-wrapper">
                                                    $<a href="single-product.php"><?php echo $produit3['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit3C as $produit3) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit3['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
                                                    <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                        <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit3['id']; ?>"
                                           data-product-nom="<?php echo $produit3['nom']; ?>"
                                           data-product-prix="<?php echo $produit3['prix']; ?>">
                                           <a  class="btn btn-primary">Add to Cart</a>
                                           </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit3['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                        True Wireless Earbuds with Active Noise Cancellation and Water Resistance
                                             </a>
                                                    </h3>
                                                    <div class="tp-product-price-wrapper">
                                                        <span class="tp-product-price old-price">$120.00</span>
                                                        $<a href="single-product.php"><?php echo $produit3['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item p-relative transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit3C as $produit3) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit3['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
                                                    <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                        <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit3['id']; ?>"
                                           data-product-nom="<?php echo $produit3['nom']; ?>"
                                           data-product-prix="<?php echo $produit3['prix']; ?>">
                                           <a  class="btn btn-primary">Add to Cart</a>
                                           </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit3['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                        Portable Multimedia Device with High-Resolution Display and Long Battery Life
                                             </a>
                                                    </h3>
                                                    <div class="tp-product-price-wrapper">
                                                        <span class="tp-product-price old-price">$320.00</span>
                                                        $<a href="single-product.php"><?php echo $produit3['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit3C as $produit3) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit3['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
                                                    <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                        <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit3['id']; ?>"
                                           data-product-nom="<?php echo $produit3['nom']; ?>"
                                           data-product-prix="<?php echo $produit3['prix']; ?>">
                                           <a  class="btn btn-primary">Add to Cart</a>
                                           </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit3['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                        Portable Music Player with Powerful Speakers and Bluetooth Connectivity.
                                             </a>
                                                    </h3>
                                                    <div class="tp-product-price-wrapper">
                                                    $<a href="single-product.php"><?php echo $produit3['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit3C as $produit3) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit3['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
                                                    <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                        <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit3['id']; ?>"
                                           data-product-nom="<?php echo $produit3['nom']; ?>"
                                           data-product-prix="<?php echo $produit3['prix']; ?>">
                                           <a  class="btn btn-primary">Add to Cart</a>
                                           </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit3['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                        Intelligent Time Management Device with Customizable Settings and Connectivity Features.
                                             </a>
                                                    </h3>
                                                    <div class="tp-product-price-wrapper">
                                                    $<a href="single-product.php"><?php echo $produit3['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit3C as $produit3) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit3['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
                                                    <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                        <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit3['id']; ?>"
                                           data-product-nom="<?php echo $produit3['nom']; ?>"
                                           data-product-prix="<?php echo $produit3['prix']; ?>">
                                           <a  class="btn btn-primary">Add to Cart</a>
                                           </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit3['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                        Wireless Audio Devices with Noise-Canceling Technology and Long Battery Life.
                                             </a>
                                                    </h3>
                                                    <div class="tp-product-price-wrapper">
                                                    $<a href="single-product.php"><?php echo $produit3['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit3C as $produit3) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit3['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
                                                    <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                        <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit3['id']; ?>"
                                           data-product-nom="<?php echo $produit3['nom']; ?>"
                                           data-product-prix="<?php echo $produit3['prix']; ?>">
                                           <a  class="btn btn-primary">Add to Cart</a>
                                           </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit3['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                        Compact Illumination Tool with Adjustable Beam and Long-Lasting Battery.
                                             </a>
                                                    </h3>
                                                    <div class="tp-product-price-wrapper">
                                                        <span class="tp-product-price old-price">$1400.00</span>
                                                        $<a href="single-product.php"><?php echo $produit3['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-3 col-sm-6">
                                            <div class="tp-product-item transition-3 mb-25">
                                                <div class="tp-product-thumb p-relative fix m-img">
                                                <section class="tp-product-category pt-60 pb-15">
    <div class="container">
        <div class="row">
            <?php foreach ($listproduit3C as $produit3) : ?>
                        <div class="tp-product-category-thumb fix">
                            <div class="image-holder">
                                <img src="img/<?php echo $produit3['image']; ?>" alt="Books" class="product-image">
                            </div>
                        </div>
                <?php break; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
                                                    <!-- product action -->
                                                    <div class="tp-product-action">
                                                        <div class="tp-product-action-item d-flex flex-column">
                                                        <button type="button" class="tp-product-add-cart-btn btn btn-primary" 
                                           data-product-id="<?php echo $produit3['id']; ?>"
                                           data-product-nom="<?php echo $produit3['nom']; ?>"
                                           data-product-prix="<?php echo $produit3['prix']; ?>">
                                           <a  class="btn btn-primary">Add to Cart</a>
                                           </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product content -->
                                                <div class="tp-product-content">
                                                    <div class="tp-product-category">
                                                    <a href="single-product.php"><?php echo $produit3['nom']; ?></a>
                                                    </div>
                                                    <h3 class="tp-product-title">
                                                        <a href="product-details.html">
                                                        In-ear Audio Devices with Noise Isolation and Tangle-Free Cable.
                                             </a>
                                                    </h3>
                                                    <div class="tp-product-price-wrapper">
                                                        <span class="tp-product-price old-price">$475.00</span>
                                                        $<a href="single-product.php"><?php echo $produit3['prix']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- product area end -->


        

        <!-- product banner area start -->
        <div class="tp-product-banner-area pb-90">
            <div class="container">
                <div class="tp-product-banner-slider fix">
                    <div class="tp-product-banner-slider-active swiper-container">
                        <div class="swiper-wrapper">
                            <div class="tp-product-banner-inner theme-bg p-relative z-index-1 fix swiper-slide">
                                <h4 class="tp-product-banner-bg-text">tablet</h4>
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-product-banner-content p-relative z-index-1">
                                            <span class="tp-product-banner-subtitle">Tablet Collection 2023</span>
                                            <h3 class="tp-product-banner-title">Samsung Galaxy Tab S6, Wifi Tablet</h3>
                                            <div class="tp-product-banner-price mb-40">
                                                <span class="old-price">$1240.00</span>
                                                <p class="new-price">$975.00</p>
                                            </div>
                                            <div class="tp-product-banner-btn">
                                                <a href="shop.html" class="tp-btn tp-btn-2">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-product-banner-thumb-wrapper p-relative">
                                            <div class="tp-product-banner-thumb-shape">
                                                <span class="tp-product-banner-thumb-gradient"></span>
                                                <img class="tp-offer-shape" src="assets/img/banner/banner-slider-offer.png" alt="">
                                            </div>

                                            <div class="tp-product-banner-thumb text-end p-relative z-index-1">
                                                <img src="assets/img/banner/banner-slider-1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-product-banner-inner theme-bg p-relative z-index-1 fix swiper-slide">
                                <h4 class="tp-product-banner-bg-text">tablet</h4>
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-product-banner-content p-relative z-index-1">
                                            <span class="tp-product-banner-subtitle">Latest Technology Added</span>
                                            <h3 class="tp-product-banner-title">Apple iPad 10.2 9th Gen - 2021</h3>
                                            <div class="tp-product-banner-price mb-40">
                                                <span class="old-price">$1450.00</span>
                                                <p class="new-price">$1199.00</p>
                                            </div>
                                            <div class="tp-product-banner-btn">
                                                <a href="shop.html" class="tp-btn tp-btn-2">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-product-banner-thumb-wrapper p-relative">
                                            <div class="tp-product-banner-thumb-shape">
                                                <span class="tp-product-banner-thumb-gradient"></span>
                                                <img class="tp-offer-shape" src="assets/img/banner/banner-slider-offer.png" alt="">
                                            </div>

                                            <div class="tp-product-banner-thumb text-end p-relative z-index-1">
                                                <img src="assets/img/banner/banner-slider-2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-product-banner-inner theme-bg p-relative z-index-1 fix swiper-slide">
                                <h4 class="tp-product-banner-bg-text">tablet</h4>
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-product-banner-content p-relative z-index-1">
                                            <span class="tp-product-banner-subtitle">Tablet Collection 2023</span>
                                            <h3 class="tp-product-banner-title">Microsoft Surface Pro 8, Wifi Included</h3>
                                            <div class="tp-product-banner-price mb-40">
                                                <span class="old-price">$1249.00</span>
                                                <p class="new-price">$1300.00</p>
                                            </div>
                                            <div class="tp-product-banner-btn">
                                                <a href="shop.html" class="tp-btn tp-btn-2">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-product-banner-thumb-wrapper p-relative">
                                            <div class="tp-product-banner-thumb-shape">
                                                <span class="tp-product-banner-thumb-gradient"></span>
                                                <img class="tp-offer-shape" src="assets/img/banner/banner-slider-offer.png" alt="">
                                            </div>

                                            <div class="tp-product-banner-thumb text-end p-relative z-index-1">
                                                <img src="assets/img/banner/banner-slider-3.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tp-product-banner-slider-dot tp-swiper-dot"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product banner area end -->

        <!-- product sm area start -->
        <section class="tp-product-sm-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="tp-product-sm-list mb-50">
                            <div class="tp-section-title-wrapper mb-40">
                                <h3 class="tp-section-title tp-section-title-sm">Discount Products
                                    <svg width="64" height="20" viewBox="0 0 64 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M62 13.1107C1.91792 -5.41202 -3.10865 1.22305 5.00242 18.3636" stroke="currentColor" stroke-width="3" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                              </svg>
                                </h3>
                            </div>

                            <div class="tp-product-sm-wrapper mr-20">
                                <div class="tp-product-sm-item d-flex align-items-center">
                                    <div class="tp-product-thumb mr-25 fix">
                                        <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-1.jpg" alt="">
                                 </a>
                                    </div>
                                    <div class="tp-product-sm-content">
                                        <div class="tp-product-category">
                                            <a href="shop.html">HD Camera</a>
                                        </div>
                                        <h3 class="tp-product-title">
                                            <a href="product-details.html">
                                       Oppo A96 5G Mobile Phone
                                    </a>
                                        </h3>
                                        <div class="tp-product-rating d-sm-flex align-items-center">
                                            <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <div class="tp-product-rating-text">
                                                <span>(4 Review)</span>
                                            </div>
                                        </div>
                                        <div class="tp-product-price-wrapper">
                                            <span class="tp-product-price">$97.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-product-sm-item d-flex align-items-center">
                                    <div class="tp-product-thumb mr-25 fix">
                                        <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-2.jpg" alt="">
                                 </a>
                                    </div>
                                    <div class="tp-product-sm-content">
                                        <div class="tp-product-category">
                                            <a href="shop.html">Iron Man</a>
                                        </div>
                                        <h3 class="tp-product-title">
                                            <a href="product-details.html">Single Stem Vase</a>
                                        </h3>
                                        <div class="tp-product-rating d-sm-flex align-items-center">
                                            <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <div class="tp-product-rating-text">
                                                <span>(5 Review)</span>
                                            </div>
                                        </div>
                                        <div class="tp-product-price-wrapper">
                                            <span class="tp-product-price">$97.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-product-sm-item d-flex align-items-center">
                                    <div class="tp-product-thumb mr-25 fix">
                                        <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-3.jpg" alt="">
                                 </a>
                                    </div>
                                    <div class="tp-product-sm-content">
                                        <div class="tp-product-category">
                                            <a href="shop.html">Speaker</a>
                                        </div>
                                        <h3 class="tp-product-title">
                                            <a href="product-details.html">Echo Dot smart speaker</a>
                                        </h3>
                                        <div class="tp-product-rating d-sm-flex align-items-center">
                                            <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <div class="tp-product-rating-text">
                                                <span>(10 Review)</span>
                                            </div>
                                        </div>
                                        <div class="tp-product-price-wrapper">
                                            <span class="tp-product-price">$142.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="tp-product-sm-list mb-50">
                            <div class="tp-section-title-wrapper mb-40">
                                <h3 class="tp-section-title tp-section-title-sm">Featured Products
                                    <svg width="64" height="20" viewBox="0 0 64 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M62 13.1107C1.91792 -5.41202 -3.10865 1.22305 5.00242 18.3636" stroke="currentColor" stroke-width="3" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                              </svg>
                                </h3>
                            </div>

                            <div class="tp-product-sm-wrapper mr-20">
                                <div class="tp-product-sm-item d-flex align-items-center">
                                    <div class="tp-product-thumb mr-25 fix">
                                        <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-4.jpg" alt="">
                                 </a>
                                    </div>
                                    <div class="tp-product-sm-content">
                                        <div class="tp-product-category">
                                            <a href="shop.html">Motherboard</a>
                                        </div>
                                        <h3 class="tp-product-title">
                                            <a href="product-details.html">CPU Cooler 6 Heat Pipes</a>
                                        </h3>
                                        <div class="tp-product-rating d-sm-flex align-items-center">
                                            <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <div class="tp-product-rating-text">
                                                <span>(4 Review)</span>
                                            </div>
                                        </div>
                                        <div class="tp-product-price-wrapper">
                                            <span class="tp-product-price">$12.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-product-sm-item d-flex align-items-center">
                                    <div class="tp-product-thumb mr-25 fix">
                                        <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-5.jpg" alt="">
                                 </a>
                                    </div>
                                    <div class="tp-product-sm-content">
                                        <div class="tp-product-category">
                                            <a href="shop.html">Digital Camera</a>
                                        </div>
                                        <h3 class="tp-product-title">
                                            <a href="product-details.html">Photography Camera</a>
                                        </h3>
                                        <div class="tp-product-rating d-sm-flex align-items-center">
                                            <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <div class="tp-product-rating-text">
                                                <span>(9 Review)</span>
                                            </div>
                                        </div>
                                        <div class="tp-product-price-wrapper">
                                            <span class="tp-product-price">$84.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-product-sm-item d-flex align-items-center">
                                    <div class="tp-product-thumb mr-25 fix">
                                        <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-6.jpg" alt="">
                                 </a>
                                    </div>
                                    <div class="tp-product-sm-content">
                                        <div class="tp-product-category">
                                            <a href="shop.html">Smart Watches</a>
                                        </div>
                                        <h3 class="tp-product-title">
                                            <a href="product-details.html">Real-Time Weather.</a>
                                        </h3>
                                        <div class="tp-product-rating d-sm-flex align-items-center">
                                            <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <div class="tp-product-rating-text">
                                                <span>(6 Review)</span>
                                            </div>
                                        </div>
                                        <div class="tp-product-price-wrapper">
                                            <span class="tp-product-price">$120.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="tp-product-sm-list mb-50">
                            <div class="tp-section-title-wrapper mb-40">
                                <h3 class="tp-section-title tp-section-title-sm">Selling Products
                                    <svg width="64" height="20" viewBox="0 0 64 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M62 13.1107C1.91792 -5.41202 -3.10865 1.22305 5.00242 18.3636" stroke="currentColor" stroke-width="3" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                              </svg>
                                </h3>
                            </div>

                            <div class="tp-product-sm-wrapper mr-20">
                                <div class="tp-product-sm-item d-flex align-items-center">
                                    <div class="tp-product-thumb mr-25 fix">
                                        <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-7.jpg" alt="">
                                 </a>
                                    </div>
                                    <div class="tp-product-sm-content">
                                        <div class="tp-product-category">
                                            <a href="shop.html">Usb Flash Disk</a>
                                        </div>
                                        <h3 class="tp-product-title">
                                            <a href="product-details.html">Metal Usb 3.0 Pen Drive 2TB</a>
                                        </h3>
                                        <div class="tp-product-rating d-sm-flex align-items-center">
                                            <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <div class="tp-product-rating-text">
                                                <span>(4 Review)</span>
                                            </div>
                                        </div>
                                        <div class="tp-product-price-wrapper">
                                            <span class="tp-product-price">$102.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-product-sm-item d-flex align-items-center">
                                    <div class="tp-product-thumb mr-25 fix">
                                        <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-8.jpg" alt="">
                                 </a>
                                    </div>
                                    <div class="tp-product-sm-content">
                                        <div class="tp-product-category">
                                            <a href="shop.html">HawkEye</a>
                                        </div>
                                        <h3 class="tp-product-title">
                                            <a href="product-details.html">HawkEye Fishtrax</a>
                                        </h3>
                                        <div class="tp-product-rating d-sm-flex align-items-center">
                                            <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <div class="tp-product-rating-text">
                                                <span>(2 Review)</span>
                                            </div>
                                        </div>
                                        <div class="tp-product-price-wrapper">
                                            <span class="tp-product-price">$59.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-product-sm-item d-flex align-items-center">
                                    <div class="tp-product-thumb mr-25 fix">
                                        <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-9.jpg" alt="">
                                 </a>
                                    </div>
                                    <div class="tp-product-sm-content">
                                        <div class="tp-product-category">
                                            <a href="shop.html">Tablet</a>
                                        </div>
                                        <h3 class="tp-product-title">
                                            <a href="product-details.html">Galaxy Tab S6 Android</a>
                                        </h3>
                                        <div class="tp-product-rating d-sm-flex align-items-center">
                                            <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <div class="tp-product-rating-text">
                                                <span>(12 Review)</span>
                                            </div>
                                        </div>
                                        <div class="tp-product-price-wrapper">
                                            <span class="tp-product-price">$356.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product sm area end -->

       

        <!-- instagram area start -->
        <div class="tp-instagram-area pb-70">
            <div class="container">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1">
                    <div class="col">
                        <div class="tp-instagram-item p-relative z-index-1 fix mb-30 w-img">
                            <img src="assets/img/instagram/instagram-1.jpg" alt="">
                            <div class="tp-instagram-icon">
                                <a href="assets/img/instagram/instagram-1.jpg" class="popup-image"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tp-instagram-item p-relative z-index-1 fix mb-30 w-img">
                            <img src="assets/img/instagram/instagram-2.jpg" alt="">
                            <div class="tp-instagram-icon">
                                <a href="assets/img/instagram/instagram-2.jpg" class="popup-image"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tp-instagram-item p-relative z-index-1 fix mb-30 w-img">
                            <img src="assets/img/instagram/instagram-3.jpg" alt="">
                            <div class="tp-instagram-icon">
                                <a href="assets/img/instagram/instagram-3.jpg" class="popup-image"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tp-instagram-item p-relative z-index-1 fix mb-30 w-img">
                            <img src="assets/img/instagram/instagram-4.jpg" alt="">
                            <div class="tp-instagram-icon">
                                <a href="assets/img/instagram/instagram-4.jpg" class="popup-image"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tp-instagram-item p-relative z-index-1 fix mb-30 w-img">
                            <img src="assets/img/instagram/instagram-5.jpg" alt="">
                            <div class="tp-instagram-icon">
                                <a href="assets/img/instagram/instagram-5.jpg" class="popup-image"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- instagram area end -->

        <!-- subscribe area start -->
        <section class="tp-subscribe-area pt-70 pb-65 theme-bg p-relative z-index-1">
            <div class="tp-subscribe-shape">
                <img class="tp-subscribe-shape-1" src="assets/img/subscribe/subscribe-shape-1.png" alt="">
                <img class="tp-subscribe-shape-2" src="assets/img/subscribe/subscribe-shape-2.png" alt="">
                <img class="tp-subscribe-shape-3" src="assets/img/subscribe/subscribe-shape-3.png" alt="">
                <img class="tp-subscribe-shape-4" src="assets/img/subscribe/subscribe-shape-4.png" alt="">
                <!-- plane shape -->
                <div class="tp-subscribe-plane">
                    <img class="tp-subscribe-plane-shape" src="assets/img/subscribe/plane.png" alt="">
                    <svg width="399" height="110" class="d-none d-sm-block" viewBox="0 0 399 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M0.499634 1.00049C8.5 20.0005 54.2733 13.6435 60.5 40.0005C65.6128 61.6426 26.4546 130.331 15 90.0005C-9 5.5 176.5 127.5 218.5 106.5C301.051 65.2247 202 -57.9188 344.5 40.0003C364 53.3997 384 22 399 22" stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3"/>
                  </svg>
                    <svg class="d-sm-none" width="193" height="110" viewBox="0 0 193 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M1 1C4.85463 20.0046 26.9085 13.6461 29.9086 40.0095C32.372 61.6569 13.5053 130.362 7.98637 90.0217C-3.57698 5.50061 85.7981 127.53 106.034 106.525C145.807 65.2398 98.0842 -57.9337 166.742 40.0093C176.137 53.412 185.773 22.0046 193 22.0046" stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3"/>
                  </svg>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="tp-subscribe-content">
                            <span>Sale 20% off all store</span>
                            <h3 class="tp-subscribe-title">Subscribe our Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="tp-subscribe-form">
                            <form action="#">
                                <div class="tp-subscribe-input">
                                    <input type="email" placeholder="Enter Your Email">
                                    <button type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe area end -->

        <div class="modal fade tp-product-modal" id="producQuickViewModal" tabindex="-1" aria-labelledby="producQuickViewModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="tp-product-modal-content d-lg-flex align-items-start">
                        <button type="button" class="tp-product-modal-close-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal"><i class="fa-regular fa-xmark"></i></button>
                        <div class="tp-product-details-thumb-wrapper tp-tab d-sm-flex">
                            <nav>
                                <div class="nav nav-tabs flex-sm-column " id="productDetailsNavThumb" role="tablist">
                                    <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
                                 <img src="assets/img/product/details/nav/product-details-nav-1.jpg" alt="">
                              </button>
                                    <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false">
                                 <img src="assets/img/product/details/nav/product-details-nav-2.jpg" alt="">
                              </button>
                                    <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3" aria-selected="false">
                                 <img src="assets/img/product/details/nav/product-details-nav-3.jpg" alt="">
                              </button>
                                    <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-4" aria-selected="false">
                                 <img src="assets/img/product/details/nav/product-details-nav-4.jpg" alt="">
                              </button>
                                </div>
                            </nav>
                            <div class="tab-content m-img" id="productDetailsNavContent">
                                <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="assets/img/product/details/main/product-details-main-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="assets/img/product/details/main/product-details-main-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="assets/img/product/details/main/product-details-main-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="assets/img/product/details/main/product-details-main-4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tp-product-details-wrapper">
                            <div class="tp-product-details-category">
                                <span>Computers & Tablets</span>
                            </div>
                            <h3 class="tp-product-details-title">Samsung galaxy A8 tablet</h3>

                            <!-- inventory details -->
                            <div class="tp-product-details-inventory d-flex align-items-center mb-10">
                                <div class="tp-product-details-stock mb-10">
                                    <span>In Stock</span>
                                </div>
                                <div class="tp-product-details-rating-wrapper d-flex align-items-center mb-10">
                                    <div class="tp-product-details-rating">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="tp-product-details-reviews">
                                        <span>(36 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <p>A Screen Everyone Will Love: Whether your family is streaming or video chatting with friends tablet A8... <span>See more</span></p>

                            <!-- price -->
                            <div class="tp-product-details-price-wrapper mb-20">
                                <span class="tp-product-details-price old-price">$320.00</span>
                                <span class="tp-product-details-price new-price">$236.00</span>
                            </div>

                            <!-- variations -->
                            <div class="tp-product-details-variation">
                                <!-- single item -->
                                <div class="tp-product-details-variation-item">
                                    <h4 class="tp-product-details-variation-title">Color :</h4>
                                    <div class="tp-product-details-variation-list">
                                        <button type="button" class="color tp-color-variation-btn">
                                    <span data-bg-color="#F8B655"></span>
                                    <span class="tp-color-variation-tootltip">Yellow</span>
                                 </button>
                                        <button type="button" class="color tp-color-variation-btn active">
                                    <span data-bg-color="#CBCBCB"></span>
                                    <span class="tp-color-variation-tootltip">Gray</span>
                                 </button>
                                        <button type="button" class="color tp-color-variation-btn">
                                    <span data-bg-color="#494E52"></span>
                                    <span class="tp-color-variation-tootltip">Black</span>
                                 </button>
                                        <button type="button" class="color tp-color-variation-btn">
                                    <span data-bg-color="#B4505A"></span>
                                    <span class="tp-color-variation-tootltip">Brown</span>
                                 </button>
                                    </div>
                                </div>
                            </div>

                            <!-- actions -->
                            <div class="tp-product-details-action-wrapper">
                                <h3 class="tp-product-details-action-title">Quantity</h3>
                                <div class="tp-product-details-action-item-wrapper d-sm-flex align-items-center">
                                    <div class="tp-product-details-quantity">
                                        <div class="tp-product-quantity mb-15 mr-15">
                                            <span class="tp-cart-minus">
                                       <svg width="11" height="2" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>                                                            
                                    </span>
                                            <input class="tp-cart-input" type="text" value="1" />
                                            <span class="tp-cart-plus">
                                       <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 6H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M5.5 10.5V1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </span>
                                        </div>
                                    </div>
                                    <div class="tp-product-details-add-to-cart mb-15 w-100">
                                        <button class="tp-product-details-add-to-cart-btn w-100">Add To Cart</button>
                                    </div>
                                </div>
                                <button class="tp-product-details-buy-now-btn w-100">Buy Now</button>
                            </div>
                            <div class="tp-product-details-action-sm">
                                <button type="button" class="tp-product-details-action-sm-btn">
                              <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1 3.16431H10.8622C12.0451 3.16431 12.9999 4.08839 12.9999 5.23315V7.52268" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M3.25177 0.985168L1 3.16433L3.25177 5.34354" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M12.9999 12.5983H3.13775C1.95486 12.5983 1 11.6742 1 10.5295V8.23993" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M10.748 14.7774L12.9998 12.5983L10.748 10.4191" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              Compare
                           </button>
                                <button type="button" class="tp-product-details-action-sm-btn">
                              <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M8.575 12.6927C8.775 12.6927 8.94375 12.6249 9.08125 12.4895C9.21875 12.354 9.2875 12.1878 9.2875 11.9907C9.2875 11.7937 9.21875 11.6275 9.08125 11.492C8.94375 11.3565 8.775 11.2888 8.575 11.2888C8.375 11.2888 8.20625 11.3565 8.06875 11.492C7.93125 11.6275 7.8625 11.7937 7.8625 11.9907C7.8625 12.1878 7.93125 12.354 8.06875 12.4895C8.20625 12.6249 8.375 12.6927 8.575 12.6927ZM8.55625 5.0638C8.98125 5.0638 9.325 5.17771 9.5875 5.40553C9.85 5.63335 9.98125 5.92582 9.98125 6.28294C9.98125 6.52924 9.90625 6.77245 9.75625 7.01258C9.60625 7.25272 9.3625 7.5144 9.025 7.79763C8.7 8.08087 8.44063 8.3795 8.24688 8.69352C8.05313 9.00754 7.95625 9.29385 7.95625 9.55246C7.95625 9.68792 8.00938 9.79567 8.11563 9.87572C8.22188 9.95576 8.34375 9.99578 8.48125 9.99578C8.63125 9.99578 8.75625 9.94653 8.85625 9.84801C8.95625 9.74949 9.01875 9.62635 9.04375 9.47857C9.08125 9.23228 9.16562 9.0137 9.29688 8.82282C9.42813 8.63195 9.63125 8.42568 9.90625 8.20402C10.2812 7.89615 10.5531 7.58829 10.7219 7.28042C10.8906 6.97256 10.975 6.62775 10.975 6.246C10.975 5.59333 10.7594 5.06996 10.3281 4.67589C9.89688 4.28183 9.325 4.0848 8.6125 4.0848C8.1375 4.0848 7.7 4.17716 7.3 4.36187C6.9 4.54659 6.56875 4.81751 6.30625 5.17463C6.20625 5.31009 6.16563 5.44863 6.18438 5.59025C6.20313 5.73187 6.2625 5.83962 6.3625 5.91351C6.5 6.01202 6.64688 6.04281 6.80313 6.00587C6.95937 5.96892 7.0875 5.88272 7.1875 5.74726C7.35 5.5256 7.54688 5.35627 7.77813 5.23929C8.00938 5.1223 8.26875 5.0638 8.55625 5.0638ZM8.5 15.7775C7.45 15.7775 6.46875 15.5897 5.55625 15.2141C4.64375 14.8385 3.85 14.3182 3.175 13.6532C2.5 12.9882 1.96875 12.2062 1.58125 11.3073C1.19375 10.4083 1 9.43547 1 8.38873C1 7.35431 1.19375 6.38762 1.58125 5.48866C1.96875 4.58969 2.5 3.80772 3.175 3.14273C3.85 2.47775 4.64375 1.95438 5.55625 1.57263C6.46875 1.19088 7.45 1 8.5 1C9.5375 1 10.5125 1.19088 11.425 1.57263C12.3375 1.95438 13.1313 2.47775 13.8063 3.14273C14.4813 3.80772 15.0156 4.58969 15.4094 5.48866C15.8031 6.38762 16 7.35431 16 8.38873C16 9.43547 15.8031 10.4083 15.4094 11.3073C15.0156 12.2062 14.4813 12.9882 13.8063 13.6532C13.1313 14.3182 12.3375 14.8385 11.425 15.2141C10.5125 15.5897 9.5375 15.7775 8.5 15.7775ZM8.5 14.6692C10.2625 14.6692 11.7656 14.0534 13.0094 12.822C14.2531 11.5905 14.875 10.1128 14.875 8.38873C14.875 6.6647 14.2531 5.18695 13.0094 3.95549C11.7656 2.72404 10.2625 2.10831 8.5 2.10831C6.7125 2.10831 5.20312 2.72404 3.97188 3.95549C2.74063 5.18695 2.125 6.6647 2.125 8.38873C2.125 10.1128 2.74063 11.5905 3.97188 12.822C5.20312 14.0534 6.7125 14.6692 8.5 14.6692Z" fill="currentColor" stroke="currentColor" stroke-width="0.3"/>
                              </svg>
                              Ask a question
                           </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <!-- footer area start -->
    <footer>
        <div class="tp-footer-area" data-bg-color="footer-bg-grey">
            <div class="tp-footer-top pt-95 pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6">
                            <div class="tp-footer-widget footer-col-1 mb-50">
                                <div class="tp-footer-widget-content">
                                    <div class="tp-footer-logo">
                                        <a href="index.html">
                                    <img src="assets/img/logo/E-Shop.png" alt="logo">
                                 </a>
                                    </div>
                                    <p class="tp-footer-desc">Best online electronic shop</p>
                                    <div class="tp-footer-social">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="tp-footer-widget footer-col-2 mb-50">
                                <h4 class="tp-footer-widget-title">My Account</h4>
                                <div class="tp-footer-widget-content">
                                    <ul>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">My Account</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="tp-footer-widget footer-col-3 mb-50">
                                <h4 class="tp-footer-widget-title">Infomation</h4>
                                <div class="tp-footer-widget-content">
                                    <ul>
                                        <li><a href="#">Our Story</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Latest News</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="tp-footer-widget footer-col-4 mb-50">
                                <h4 class="tp-footer-widget-title">Talk To Us</h4>
                                <div class="tp-footer-widget-content">
                                    <div class="tp-footer-talk mb-20">
                                        <span>Got Questions? Call us</span>
                                        <h4><a href="tel:216-38-730-221">+216 38 730 221</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-footer-bottom">
                <div class="container">
                    <div class="tp-footer-bottom-wrapper">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="tp-footer-copyright">
                                    <p>© 2023 All Rights Reserved | HTML Template by Ouss.HD </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tp-footer-payment text-md-end">
                                    <p>
                                        <img src="assets/img/footer/footer-pay.png" alt="">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->



    <!-- JS here -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/waypoints.js"></script>
    <script src="assets/js/bootstrap-bundle.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/range-slider.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/isotope-pkgd.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $('.tp-product-add-cart-btn').click(function(){
        var productId = $(this).data('product-id');
        var productName = $(this).data('product-nom'); // Changed to 'product-nom'
        var productPrice = $(this).data('product-prix'); // Changed to 'product-prix'

        // Send product information to addToCart.php
        $.ajax({
            type: "POST",
            url: "addToCart.php",
            data: { 
                productId: productId,
                productName: productName,
                productPrice: productPrice
            },
            success: function(response){
                alert('Product added to cart!');
            },
            error: function(){
                alert('Error adding product to cart!');
            }
        });
    });
});

</script>

</body>

</html>