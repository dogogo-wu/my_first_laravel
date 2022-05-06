@extends('hw_bootstrap.template')

@section('pageTittle')
    Cart-02
@endsection

@section('cssLink')
    <link rel="stylesheet" href={{ asset('./css/cart.css') }}>
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
                                <div class="progress-bar my-bar-inner-full rounded-pill" role="progressbar"></div>
                            </div>
                        </div>
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
                        <div class="my-spacer"></div>


                    </div>

                    <div class="my-boxes d-flex py-4">
                        <div class="my-progress-box d-flex flex-column align-items-center">
                            <div class="mb-2 my-num-act rounded-circle d-flex justify-content-center align-items-center">
                                <div>1</div>
                            </div>
                            <div>確認購物車</div>
                        </div>
                        <div class="my-progress-box d-flex flex-column align-items-center">
                            <div class="mb-2 my-num-act rounded-circle d-flex justify-content-center align-items-center">
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
                <hr class="mb-0">
                <div class="checkbox-area">
                    <form action="">

                        <p class="h4 mt-4">付款方式</p>
                        <ul class="mt-2">
                            <li class="border-bottom border-1">
                                <input type="radio" name="payment_type" id="id_credit" value="1">
                                <label for="id_credit" class="ms-2">信用卡付款</label>
                            </li>
                            <li class="border-bottom border-1">
                                <input type="radio" name="payment_type" id="id_atm" value="2">
                                <label for="id_atm" class="ms-2">網路 ATM</label>
                            </li>
                            <li class="">
                                <input type="radio" name="payment_type" id="id_shopCode" value="3">
                                <label for="id_shopCode" class="ms-2">超商代碼</label>
                            </li>
                        </ul>
                        <hr class="mb-0">
                        <p class="h4 mt-4">運送方式</p>
                        <ul class="mt-2">
                            <li class="border-bottom border-1">
                                <input type="radio" name="shipping_type" id="id_blackCat" value="1">
                                <label for="id_blackCat" class="ms-2">黑貓宅配</label>
                            </li>
                            <li class="">
                                <input type="radio" name="shipping_type" id="id_shopToShop" value="2">
                                <label for="id_shopToShop" class="ms-2">超商店到店</label>
                            </li>
                        </ul>

                    </form>
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
                        <a class="btn btn-outline-primary px-5 my-next-btn" href="{{ url('/cart01') }}"
                            role="button">上一步</a>
                        <a class="btn btn-primary px-5 my-next-btn" href="{{ url('/cart03') }}" role="button">下一步</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
