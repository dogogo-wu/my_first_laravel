@extends('hw_bootstrap.template')

@section('pageTittle')
    Cart-01
@endsection

@section('cssLink')
    <link rel="stylesheet" href="./css/cart.css">
@endsection


@section('mainSec')
    <main>
        <section id="cart-sec" class="py-5">
            <div class="container my-cart-con ">
                <p class="h2 fw-bold">購物車</p>

                <div class="step-container position-relative">

                    <div class="bar-container position-absolute w-100 d-flex">
                        <div class="my-spacer"></div>
                        <div class="my-bar-box w-25">
                            <div class="progress rounded-pill my-bar-outer">
                                <div class="progress-bar my-bar-inner-half rounded-pill" role="progressbar"></div>
                            </div>
                        </div>
                        <div class="my-bar-box w-25">
                            <div class="progress rounded-pill my-bar-outer">
                                <div class="progress-bar my-bar-inner rounded-pill" role="progressbar"></div>
                            </div>
                        </div>
                        <div class="my-bar-box w-25">
                            <div class="progress rounded-pill my-bar-outer">
                                <div class="progress-bar my-bar-inner rounded-pill" role="progressbar"></div>
                            </div>
                        </div>
                        <div class="my-spacer"></div>


                    </div>

                    <div class="d-flex py-4">
                        <div class="my-progress-box d-flex flex-column align-items-center">
                            <div
                                class="mb-2 my-num-act rounded-circle d-flex justify-content-center align-items-center">
                                <div>1</div>
                            </div>
                            <div>確認購物車</div>
                        </div>
                        <div class="my-progress-box d-flex flex-column align-items-center">
                            <div class="mb-2 my-num rounded-circle d-flex justify-content-center align-items-center">
                                <div>2</div>
                            </div>
                            <div>付款與運送方式</div>
                        </div>
                        <div class="my-progress-box d-flex flex-column align-items-center">
                            <div class="mb-2 my-num rounded-circle d-flex justify-content-center align-items-center">
                                <div>3</div>
                            </div>
                            <div>填寫資料</div>
                        </div>
                        <div class="my-progress-box d-flex flex-column align-items-center">
                            <div class="mb-2 my-num rounded-circle d-flex justify-content-center align-items-center">
                                <div>4</div>
                            </div>
                            <div>完成訂購</div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="detail-area">
                    <p class="h4 mb-4">訂單明細</p>
                    <div class="d-flex align-items-center pt-4">
                        <img class="img-detail" src="./img/img_bs/cart-1.jpg" alt="">
                        <div class="ms-3">
                            <p>Chicken momo</p>
                            <p class="my-small-txt my-light-txt">#41551</p>
                        </div>
                        <div class="flex-grow-1"></div>

                        <div class="d-flex pe-4 fw-bold">
                            <p>-</p>
                            <input type="text" name="" id="" value="1">
                            <p>+</p>
                        </div>
                        <div>
                            <p class="my-small-txt pe-4">$10.50</p>
                        </div>
                    </div>

                    <hr>

                    <div class="d-flex align-items-center pt-4">
                        <img class="img-detail" src="./img/img_bs/cart-2.jpg" alt="">
                        <div class="ms-3">
                            <p>Spicy Mexican potatoes</p>
                            <p class="my-small-txt my-light-txt">#66999</p>
                        </div>
                        <div class="flex-grow-1"></div>

                        <div class="d-flex pe-4 fw-bold">
                            <p>-</p>
                            <input type="text" name="" id="" value="1">
                            <p>+</p>
                        </div>
                        <div>
                            <p class="my-small-txt pe-4">$10.50</p>
                        </div>
                    </div>

                    <hr>

                    <div class="d-flex align-items-center pt-4">
                        <img class="img-detail" src="./img/img_bs/cart-3.jpg" alt="">
                        <div class="ms-3">
                            <p>Breakfast</p>
                            <p class="my-small-txt my-light-txt">#86577</p>
                        </div>
                        <div class="flex-grow-1"></div>

                        <div class="d-flex pe-4 fw-bold">
                            <p>-</p>
                            <input type="text" name="" id="" value="1">
                            <p>+</p>
                        </div>
                        <div>
                            <p class="my-small-txt pe-4">$10.50</p>
                        </div>
                    </div>

                </div>
                <hr>

                <div class="total-area">
                    <div class="d-flex flex-column align-items-end mt-4">
                        <div class="d-flex justify-content-between w-25">
                            <p class="my-total-txt my-light-txt">數量:</p>
                            <p class="fw-bold">3</p>
                        </div>
                        <div class="d-flex justify-content-between w-25">
                            <p class="my-total-txt my-light-txt">小計:</p>
                            <p class="fw-bold">$24.90</p>
                        </div>
                        <div class="d-flex justify-content-between w-25">
                            <p class="my-total-txt my-light-txt">運費:</p>
                            <p class="fw-bold">$24.90</p>
                        </div>
                        <div class="d-flex justify-content-between w-25">
                            <p class="my-total-txt my-light-txt">總計:</p>
                            <p class="fw-bold">$24.90</p>
                        </div>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="next-area">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="align-middle"><i class="fa-solid fa-arrow-left me-2"></i>返回購物</p>
                        <a class="btn btn-primary px-5 my-next-btn" href="{{ url('/cart02') }}" role="button">下一步</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
