

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>تأجيـر سيـارات</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="http://localhost/mah-cars/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="http://localhost/mah-cars/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="http://localhost/mah-cars/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="http://localhost/mah-cars/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="http://localhost/mah-cars/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/mah-cars/css/owl.carousel.min.css">
    <link rel="stylesheet" href="http://localhost/mah-cars/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
<style>
    #map1 {
        width:100%;
        height:400px ;

    }
    </style>
</head>
<style>
    }
    .card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
    }
    .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
    }

    </style>
         
</head>


<!-- body -->


<body class="main-layout ">


    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="http://localhost/mah-cars/images/loading.gif" alt="#" /></div>
    </div>

    <!-- end loader -->
    <!-- header -->
    <header>
    
        <!-- header inner -->
        <div id="home" class="header">
      
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                            
                                <div class="logo">
                              
                                    <a href="#"><img src="http://localhost/mah-cars/images/logo.png" alt="#"></a>
                                    
                                    </div>
                            </div>
                        </div>
                    </div>
                   
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                    @if (Route::has('login'))
                                @auth
                                {{Auth::user()->name}} | مرحبا 
                                <li><a class="active" href="{{route('exite.user')}}">خروج</a></li>
                                @else
                                <li><a class="active" href="{{route('reguser')}}">دخول</a></li>
                                @endauth
                                @endif

                                    <li><a></a></li>
                                      
                                    
                                    @if(Auth::user()->rol3==1)
                                   
                                    <li >
                                    <a  style="color:green;" class="nav-link " onclick="myFunction1()" href="{{route('admin.dash')}}">ADMIN PANAL</a>
                                    </li> 
                                    
                                     @else
                                      <li>
                                    <a style="color:black;" class="nav-link  " onclick="myFunction()" href="#">ADMIN PANAL</a>
                                    </li>    
                                    @endif
                                
                                   
                                      
                                        
                                      
                                       
                                      
                                       
                        
                        
                           
                        
                         
                                        <li> <a href="{{route('all.lices')}}">العروض</a> </li>
                                        <li><a href="{{route('allshow')}}">الموديـلات</a></li>
                                         <li><a href="{{route('allcars')}}">الرئيسيـة</a></li>
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                
                                <li><img src="http://localhost/mah-cars/icon/call.png" /><a href="tel:00972595200380">(+972)595200380></a></li>
                                <li><img src="http://localhost/mah-cars/icon/email.png" /><a href="mailto:mahhndy@hotmail.com">mahhndy@hotmail.com</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>

   
    
     <!-- end header -->
    
     <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="http://localhost/mah-cars/images/123.png" alt="First slide" width="1400px" height="100px" >
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>All New Cars </span>
                            <h1>معرض فراس للسيارات</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="{{route('carbook')}}">احجز الان</a>
                            <ul class="social_icon">
                                <li> <a href="http://www.facebook.com"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                
                <div class="carousel-item">
                    <img class="second-slide" src="http://localhost/mah-cars/images/88.jpg" alt="Second slide" width="1400px" height="100px" >
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>All New Cars </span>
                            <h1>up to 25% Flat Sale</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="{{route('carbook')}}">احجز الان</a>
                            <ul class="social_icon">
                            <li> <a href="http://www.facebook.com"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="http://localhost/mah-cars/images/99.jpg" alt="Third slide" >
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>All New Cars </span>
                            <h1>up to 25% Flat Sale</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="{{route('carbook')}}">احجز الان</a>
                            <ul class="social_icon">
                            <li> <a href="http://www.facebook.com"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
        
    </section>
    <script>
function myFunction() {
  alert(" عذرا انت لست مسؤول النظام  !!! ");
}
</script>
<script>
function myFunction1() {
  alert(" مرحبا بك مسؤول النظام ");
}
</script>

