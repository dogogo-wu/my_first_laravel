@extends('hw_bootstrap.template')

@section('pageTittle')
    Into-Product
@endsection

@section('cssLink')
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <style>
        .swiper {
            height: 120px;
            width: 320px;
        }

        .swiper-slide img {
            display: block;
            aspect-ratio: 16/10;
            object-fit: cover;
            object-position: center;
            width: 100%;
        }

        .swiper-slide {
            width: 60%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
@endsection

@section('mainSec')
    <main>
        <section id="buying">
            <div class="container con-setting">
                <div class="row">
                    <div class="col-lg-6 my-l-col">
                        <img class="w-100" src="{{ asset($prodMain->img) }}" alt="">
                        <br>
                        @if ($prodMain->imgs->all())
                            <div class="swiper mt-3">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($prodMain->imgs as $prodSec)
                                            <div class="swiper-slide">
                                                <img src="{{ asset($prodSec->img_path) }}" alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-6 my-r-col py-3">
                        <p class="mb-0 small text-muted">BRAND NAME</p>
                        <p class="h2">{{ $prodMain->name }}</p>
                        <span class="color-1 small">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                        </span>
                        <span class="text-secondary mx-2">4 Reviews</span>
                        <span class="text-secondary border-start border-muted border-3 ps-3 py-2 my-4">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-solid fa-comment"></i>
                        </span>
                        <p class="mt-4 text-muted">
                            {{ $prodMain->introduction }}
                        </p>
                        <div class="d-flex align-items-center">
                            <p class="mb-0 me-3 text-secondary">Color</p>
                            <button type="button" class="my-cir-btn btn btn-light rounded-circle border border-2"></button>
                            <button type="button" class="my-cir-btn btn btn-dark rounded-circle border border-2"></button>
                            <button type="button"
                                class="my-cir-btn btn btn-primary rounded-circle border border-2"></button>
                            <p class="ms-4 mb-0 text-secondary">Size</p>
                            <select name="cars" id="" class="btn">
                                <option value="SM">SM</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                        </div>
                        <div>
                            <p class="mt-3">剩餘數量：{{ $prodMain->number }}</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="h3">${{ $prodMain->price }}.00</div>
                            <div class="d-flex">
                                <button type="button" class="btn btn-warning me-3">加入購物車</button>
                                <button type="button" class="btn btn-danger">直接購買</button>
                                <div
                                    class="d-flex justify-content-center align-items-center rounded-circle my-heart-bg ms-3">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('jsCdn')
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
@endsection

@section('js')
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            centeredSlides: true,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            keyboard: {
                enabled: true,
            },
            loop: true,
        });
    </script>
@endsection
