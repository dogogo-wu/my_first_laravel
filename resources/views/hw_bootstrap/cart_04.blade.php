@extends('hw_bootstrap.template')

@section('pageTittle')
    Cart-04
@endsection

@section('cssLink')
    <link rel="stylesheet" href={{asset("./css/cart.css")}}>
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
                                <div class="progress-bar my-bar-inner-full rounded-pill" role="progressbar"></div>
                            </div>
                        </div>
                        <div class="my-bar-box w-25">
                            <div class="progress rounded-pill my-bar-outer">
                                <div class="progress-bar my-bar-inner-full rounded-pill" role="progressbar"></div>
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
                            <div
                                class="mb-2 my-num-act rounded-circle d-flex justify-content-center align-items-center">
                                <div>2</div>
                            </div>
                            <div>付款與運送方式</div>
                        </div>
                        <div class="my-progress-box d-flex flex-column align-items-center">
                            <div
                                class="mb-2 my-num-act rounded-circle d-flex justify-content-center align-items-center">
                                <div>3</div>
                            </div>
                            <div>填寫資料</div>
                        </div>
                        <div class="my-progress-box d-flex flex-column align-items-center">
                            <div
                                class="mb-2 my-num-act rounded-circle d-flex justify-content-center align-items-center">
                                <div>4</div>
                            </div>
                            <div>完成訂購</div>
                        </div>
                    </div>
                </div>

                <div class="detail-area">
                    <p class="display-4 fw-bolder text-center">訂單成立</p>
                    <p class="h4 mb-4">訂單明細</p>
                    <div class="d-flex align-items-center pt-4">
                        <img class="img-detail" src="./img/img_bs/cart-1.jpg" alt="">
                        <div class="ms-3">
                            <p>Chicken momo</p>
                            <p class="my-small-txt my-light-txt">#41551</p>
                        </div>
                        <div class="flex-grow-1"></div>

                        <div class="d-flex pe-5">
                            <p>x 1</p>
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

                        <div class="d-flex pe-5">
                            <p>x 1</p>
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

                        <div class="d-flex pe-5">
                            <p>x 1</p>
                        </div>
                        <div>
                            <p class="my-small-txt pe-4">$10.50</p>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="info-area">
                    <p class="h4 mb-4">寄送資料</p>
                    <table>
                        <tr>
                            <td>姓名</td>
                            <td>王曉明</td>
                        </tr>
                        <tr>
                            <td>電話</td>
                            <td>0912345678</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>abc123@gmail.com</td>
                        </tr>
                        <tr>
                            <td>地址</td>
                            <td>409 台中市小鎮村英雄路1號</td>
                        </tr>
                    </table>
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
                        <p></p>
                        <a class="btn btn-primary px-5 my-next-btn" href="{{ url('/bootstrap') }}" role="button">返回首頁</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
