@extends('dashboard')

@section('content')
<div class="container-fluid mb-4">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Slides -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('/img/h1_hero1.png') }}" alt="Slide 1" class="d-block w-100">
                <div class="carousel-caption text-center">
                    <h1 class="display-3">La Mode<br>Change<br>Toujours</h1>
                    <a href="#" class="btn btn-primary">Achetez Maintenant</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('/img/h1_hero2.png') }}" alt="Slide 2" class="d-block w-100">
                <div class="carousel-caption text-center">
                    <h1 class="display-3">La Mode<br>Change<br>Toujours</h1>
                    <a href="#" class="btn btn-primary">Achetez Maintenant</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="{{ asset('/img/h1_hero3.png') }}" alt="Slide 3" class="d-block w-100">
                <div class="carousel-caption text-center">
                    <h1 class="display-3">La Mode<br>Change<br>Toujours</h1>
                    <a href="#" class="btn btn-primary">Achetez Maintenant</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="new-arrival">
    <div class="container">
        <!-- Section tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2>Nouveaux  Arrivages</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="popular-img" style="position: relative;">
                        <img src="{{ asset('/img/arrival1.png') }}" alt="">
                        <div class="favorit-items" style="position: absolute; top: 10px; right: 10px;">
                            <!-- <span class="flaticon-heart"></span> -->
                            <img src="{{ asset('/img/favorit-card.png') }}" alt="">
                        </div>
                    </div>
                    <div class="popular-caption">
                        <h3><a href="#">Pull</a></h3>
                        <div class="rating mb-10">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <span>3000 fcfa</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="popular-img " style="position: relative;">
                        <img src="{{asset('/img/arrival2.png')}}" alt="">
                        <div class="favorit-items" style="position: absolute; top: 10px; right: 10px;">
                            <!-- <span class="flaticon-heart"></span> -->
                            <img src="{{asset('/img/favorit-card.png')}}" alt="">
                        </div>
                    </div>
                    <div class="popular-caption">
                     <h3><a href="#">Echarpe</a></h3>
                     <div class="rating mb-10">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                    </div>
                    <span>3000 fcfa</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="popular-img" style="position: relative;">
                    <img src="{{asset('/img/arrival3.png')}}" alt="">
                    <div class="favorit-items" style="position: absolute; top: 10px; right: 10px;">
                        <!-- <span class="flaticon-heart"></span> -->
                        <img src="{{asset('/img/favorit-card.png')}}" alt="">
                    </div>
                </div>
                <div class="popular-caption">
                 <h3><a href="#">Chemise</a></h3>
                 <div class="rating mb-10">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                </div>
                <span>3000 fcfa</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
            <div class="popular-img" style="position: relative;">
                <img src="{{asset('/img/arrival4.png')}}" alt="">
                <div class="favorit-items" style="position: absolute; top: 10px; right: 10px;">
                    <!-- <span class="flaticon-heart"></span> -->
                    <img src="{{asset('/img/favorit-card.png')}}" alt="">
                </div>
            </div>
            <div class="popular-caption">
             <h3><a href="#">Chemise</a></h3>
             <div class="rating mb-10">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
            </div>
            <span>3000 fcfa</span>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
        <div class="popular-img" style="position: relative;">
            <img src="{{asset('/img/arrival5.png')}}" alt="">
            <div class="favorit-items" style="position: absolute; top: 10px; right: 10px;">
                <!-- <span class="flaticon-heart"></span> -->
                <img src="{{asset('/img/favorit-card.png')}}" alt="">
            </div>
        </div>
        <div class="popular-caption">
         <h3><a href="#">Lacoste</a></h3>
         <div class="rating mb-10">
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
        </div>
        <span>3000 fcfa</span>
    </div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
        <div class="popular-img" style="position: relative;">
            <img src="{{asset('/img/arrival6.png')}}" alt="">
            <div class="favorit-items" style="position: absolute; top: 10px; right: 10px;">
                <!-- <span class="flaticon-heart"></span> -->
                <img src="{{asset('/img/favorit-card.png')}}" alt="">
            </div>
        </div>
        <div class="popular-caption">
         <h3><a href="p#">Lunette de soleil</a></h3>
         <div class="rating mb-10">
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
        </div>
        <span>3000 fcfa</span>
    </div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
        <div class="popular-img" style="position: relative;">
            <img src="{{asset('/img/arrival7.png')}}" alt="">
            <div class="favorit-items" style="position: absolute; top: 10px; right: 10px;">
                <!-- <span class="flaticon-heart"></span> -->
                <img src="{{asset('/img/favorit-card.png')}}" alt="">
            </div>
        </div>
        <div class="popular-caption">
         <h3><a href="#">T-Shirt</a></h3>
         <div class="rating mb-10">
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
        </div>
        <span>3000 fcfa</span>
    </div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
        <div class="popular-img" style="position: relative;">
            <img src="{{asset('/img/arrival8.png')}}" alt="">
            <div class="favorit-items" style="position: absolute; top: 10px; right: 10px;">
                <!-- <span class="flaticon-heart"></span> -->
                <img src="{{asset('/img/favorit-card.png')}}" alt="">
            </div>
        </div>
        <div class="popular-caption">
         <h3><a href="#">Basket</a></h3>
         <div class="rating mb-10">
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
        </div>
        <span>3000 fcfa</span>
    </div>
</div>
</div>
</div>
<!-- Button -->
<div class="row justify-content-center">
    <div class="room-btn">
        <a href="lien-de-votre-page.html" class="btn btn-outline-primary mt-3 mb-3">Voir plus</a>
    </div>
</div>
</div>
</div>
@endsection
