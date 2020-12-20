
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
 
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="/css/index.css">
    
</head>

<body>

    <header class="header-area">
        <div id="home" class="header-hero bg_cover" style="background-image: url(/images/banner-bg.svg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Gestion des affectations des smartphones</h3>
                            <h4 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Unité ordonnancement et GMAO</h4>
                            @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                   
                                    <a href="{{ url('/dashboard') }}" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Se connecter</a>
                                @else
                                 
                                    <a href="{{ route('login') }}" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Se connecter</a>
                                   
                                    @endauth    
                            </div>
                          @endif
                           
                          
                        </div> 
                    </div>
                </div> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                            <img src="/images/header-hero.png" alt="hero">
                        </div> 
                    </div>
                </div> 
            </div> 
            
        </div> 
    </header>
 
</body>

</html>
