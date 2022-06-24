@extends('layout')

@section('title')
    Popular delivery
@endsection

@section('main-content')
    @if(isset($showItem) && $showItem)
        @include("Pages/item")
    @endif
    <section class="dishes-menu container-fluid">
        <div class="container-xl d-flex flex-column align-items-center p-0">
            <h1 class="daily-dish-title">
                Trending food
            </h1>
            <div class="dishes-menu-content container-fluid p-0 mt-md-4 my-3">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="dishes-menu-card card swiper-slide">
                            <img class="dishes-menu-img card-img-top" src="View/media/Pancake.png" alt="Card image cap">
                            <div class="card-body p-0 py-3 pb-2 row m-0">
                                <div class="col-md-9 col-7 p-0">
                                    <h5 class="card-title">Pancake</h5>
                                    <p class="card-text">$: 15</p>
                                </div>
                                <a class="d-flex align-items-center col-md-3 col-5 p-0 pr-2 justify-content-center">
                                    <i class="menu-basket basket">
                                        <img src="View/media/shopping-cart.svg" alt="Basket">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="dishes-menu-card card swiper-slide" style="width: 33px">
                            <img class="dishes-menu-img card-img-top" src="View/media/pizza.png" alt="Card image cap">
                            <div class="card-body p-0 pt-3 pb-2 row m-0">
                                <div class="col-md-9 col-7 p-0">
                                    <h5 class="card-title">Special Pizza</h5>
                                    <p class="card-text">$: 20</p>
                                </div>
                                <a class="d-flex align-items-center col-md-3 col-5 p-0 pr-2 justify-content-center">
                                    <i class="menu-basket basket">
                                        <img src="View/media/shopping-cart.svg" alt="Basket">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="dishes-menu-card card swiper-slide" style="width: 33px">
                            <img class="dishes-menu-img card-img-top" src="View/media/Meatball.png" alt="Card image cap">
                            <div class="card-body p-0 pt-3 pb-2 row m-0">
                                <div class="col-md-9 col-7 p-0">
                                    <h5 class="card-title">Meat ball</h5>
                                    <p class="card-text">$: 15</p>
                                </div>
                                <a class="d-flex align-items-center col-md-3 col-5 p-0 pr-2 justify-content-center">
                                    <i class="menu-basket basket">
                                        <img src="View/media/shopping-cart.svg" alt="Basket">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="dishes-menu-card card swiper-slide">
                            <img class="dishes-menu-img card-img-top" src="View/media/Burger.png" alt="Card image cap">
                            <div class="card-body p-0 pt-3 pb-2 row m-0">
                                <div class="col-md-9 col-7 p-0">
                                    <h5 class="card-title">Burger</h5>
                                    <p class="card-text">$: 8</p>
                                </div>
                                <a class="d-flex align-items-center col-md-3 col-5 p-0 justify-content-center">
                                    <i class="menu-basket basket">
                                        <img src="View/media/shopping-cart.svg" alt="Basket">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="dishes-menu-card card swiper-slide">
                            <img class="dishes-menu-img card-img-top" src="View/media/StrawCake.png" alt="Card image cap">
                            <div class="card-body p-0 pt-3 pb-2 row m-0">
                                <div class="col-md-9 col-7 p-0">
                                    <h5 class="card-title">Straw Cake</h5>
                                    <p class="card-text">$: 13</p>
                                </div>
                                <a class="d-flex align-items-center col-md-3 col-5 p-0 justify-content-center">
                                    <i class="menu-basket basket">
                                        <img src="View/media/shopping-cart.svg" alt="Basket">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <img src="View/media/arrow left.png" class="menu-arrow" alt="left arrow">
                </div>
                <div class="swiper-button-next">
                    <img src="View/media/arrow right.png" class="menu-arrow" alt="right arrow">
                </div>

            </div>
        </div>
    </section>
    @endif
    <h2 class="title text-center d-flex align-items-center justify-content-center container-fluid p-0">
                <span class="preview-title">
                     Our Services
                </span>
    </h2>
    <li class="d-flex flex-column justify-content-end align-items-center">
        <p>
            Our serve just for you
        </p>
    </li>
    <ul class="benefits container-xl d-flex justify-content-between py-5">
        <li class="d-flex flex-column justify-content-end align-items-center">
            <img src="View/media/drivingpana.png" alt="">
            <p>
                Delivery Food
            </p>
        </li>
        <li class="d-flex flex-column justify-content-end align-items-center">
            <img src="View/media/pana.png" alt="">
            <p>
                Easy to order
            </p>
        </li>
        <li class="d-flex flex-column justify-content-end align-items-center">
            <img src="View/media/amico.png" alt="">
            <p>
                Fastest delivery
            </p>
        </li>

    </ul>
    <div class="container-fluid py-3">
        <h2 class="title text-center d-flex align-items-center justify-content-center container-fluid p-0">
                <span class="preview-title">
                    Our Amazing Partners.
                </span>
        </h2>
        <li class="d-flex flex-column justify-content-end align-items-center">
            <p>
                Short introduction
            </p>
        </li>
        <div class="d-flex flex-column justify-content-end align-items-center"">
        <img src="View/media/Frame 755.png" alt="" class="preview-img">
    </div>
    </section>

    <section class="preview container-fluid">
        <div class="container-xl p-0 d-flex flex-column align-items-center">

            <div class="daily-dish-content container-fluid p-0 mt-md-3 mt-0 d-flex justify-content-between align-items-center">
                <div class="daily-dish-text d-flex align-items-center flex-column">
                    <h2 class="daily-dish-name">
                        What they are saysㅤㅤabout us
                    </h2>

                    <h2 class="description mt-2">
                        “All service provided is so perfect and fast, and im so happy to order from this company”
                    </h2>
                </div>

                <div class="daily-dish-image">
                    <img src="View/media/FemaleEating.JPG" alt="">
                </div>

            </div>
        </div>
    </section>

    <section class="preview container-fluid py-3">
        <div class="container-xl p-0 d-flex flex-column align-items-center">
            <h1 class="daily-dish-title">
                Get more discount if you order from us
            </h1>
            <div class="daily-dish-content container-fluid p-0 mt-md-3 mt-0 d-flex justify-content-between align-items-center">
                <div class="daily-dish-text d-flex align-items-center flex-column">
                    <h2 class="description mt-2">
                        Join with us then you must have get a discount and get promo from us to you , enjoy and happy to order.
                    </h2>
                </div>


                <div class="daily-dish-image">
                    <img src="View/media/amico.JPG" alt="">
                </div>

            </div>
        </div>
    </section>
@endsection
