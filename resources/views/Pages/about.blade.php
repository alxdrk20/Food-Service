@extends('layout')
@section('title')
    About
@endsection
@section('main-content')

<section class="about-info container-fluid">
    <div class="container-xl p-0 d-flex flex-column align-items-center">
        <h2 class="dishes-menu-title title align-items-center justify-content-center d-flex text-center">
                <span class="all-big-titles">
                    About us
                </span>
        </h2>
        <div class="about-info-content my-md-2 my-2">
            <p>F&D - was created by ride-hailing tech company.
                It's challenging the efficiency of the food and grocery delivery industry all over the
                world while helping shops and stores get more orders and enabling couriers to earn extra money.
                Make some extra cash with your car, bike or motorbike.</p>
        </div>
    </div>
</section>

<section class="container-fluid about-steps pb-5">
    <div class="container-xl p-0 d-flex flex-column align-items-center">
        <h2 class="about-steps-title title-top about-steps-title d-flex flex-column align-items-center text-center my-3">
                <span class="dishes-menu-name-category">
                    Delivery process
                </span>
        </h2>
        <div class="about-steps-inner container-fluid p-0 d-flex flex-md-column flex-row-reverse align-items-center justify-content-center">
            <div class="about-steps-container container-fluid p-0 d-flex flex-md-row flex-column justify-content-between mt-3 mt-md-4">
                <div class="about-steps-step d-flex flex-md-column flex-row align-items-center">
                    <img src="View/media/choosing1.png" alt="choose">
                    <p class="about-steps-description text-md-center">
                        Choose any food
                    </p>
                </div>
                <div class="about-steps-step d-flex flex-md-column flex-row align-items-center">
                    <img src="View/media/visa.png" alt="payment">
                    <p class="about-steps-description text-md-center">
                        Pay for the order
                    </p>
                </div>
                <div class="about-steps-step d-flex flex-md-column flex-row align-items-center">
                    <img src="View/media/pngwing.png" alt="wait">
                    <p class="about-steps-description text-md-center">
                        Wait for the courier
                    </p>
                </div>
            </div>
            <div class="about-steps-bar d-flex flex-column flex-md-row justify-content-between mt-md-3 my-0 me-3 ms-3 mx-md-0 mb-md-4 ">
                  <span class="about-steps-circle d-flex align-items-center justify-content-center">
                        1
                  </span>
                <span class="about-steps-circle d-flex align-items-center justify-content-center">
                        2
                  </span>
                <span class="about-steps-circle d-flex align-items-center justify-content-center">
                        3
                  </span>
            </div>
        </div>
    </div>
</section>
@endsection
