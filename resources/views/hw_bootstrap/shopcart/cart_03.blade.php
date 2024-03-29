@extends('hw_bootstrap.template')

@section('pageTittle')
    Cart-03
@endsection

@section('cssLink')
    <link rel="stylesheet" href={{ asset('./css/cart.css') }}>
@endsection

@section('mainSec')
    <main>
        <section id="cart-sec" class="py-5">
            <form action="/cart04" method="POST">
                @csrf
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
                                    <div class="progress-bar my-bar-inner-half rounded-pill" role="progressbar"></div>
                                </div>
                            </div>
                            <div class="my-spacer"></div>


                        </div>

                        <div class="my-boxes d-flex py-4">
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
                                <div class="mb-2 my-num rounded-circle d-flex justify-content-center align-items-center">
                                    <div>4</div>
                                </div>
                                <div>完成訂購</div>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-0">
                    <div class="txtform-area">

                        <p class="h4 mt-4">寄送資料</p>
                        <div class="mb-3">
                            <label for="myName" class="form-label my-label-txt">姓名</label>
                            <input type="text" name="myName" class="form-control my-placeholder-txt" id="myName"
                                placeholder="王小明" required>
                        </div>
                        <div class="mb-3">
                            <label for="myPhone" class="form-label my-label-txt">電話</label>
                            <input type="text" name="myPhone" class="form-control my-placeholder-txt" id="myPhone"
                                placeholder="0912345678" required>
                        </div>
                        <div class="mb-3">
                            <label for="myEmail" class="form-label my-label-txt">Email</label>
                            <input type="email" name="myEmail" class="form-control my-placeholder-txt" id="myEmail"
                                placeholder="abc123@gmail.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="myCity" class="form-label my-label-txt">
                                @if ($deliver == 1)
                                    地址
                                @else
                                    超商地址
                                @endif
                            </label>
                            <div class="row mb-2">
                                <div class="col-6 pe-1">
                                    <input type="text" name="myCity" class="form-control my-placeholder-txt col-6"
                                        id="myCity" placeholder="城市" required>
                                </div>
                                <div class="col-6 ps-1">
                                    <input type="text" name="myAreaCode" class="form-control my-placeholder-txt col-6"
                                        id="myAreaCode" placeholder="郵遞區號" required>
                                </div>
                            </div>
                            <input type="text" name="myAddr" class="form-control my-placeholder-txt" id="myAddr"
                                placeholder="地址" required>
                        </div>
                    </div>
                    <hr>

                    <div class="total-area">
                        <div class="d-flex flex-column align-items-end mt-4">
                            <div class="d-flex justify-content-between w-25">
                                <p class="my-total-txt my-light-txt">數量:</p>
                                <p class="fw-bold">{{$myObj['prodcate']}}</p>
                            </div>
                            <div class="d-flex justify-content-between w-25">
                                <p class="my-total-txt my-light-txt">小計:</p>
                                <p class="fw-bold">${{$myObj['subtot']}}</p>
                            </div>
                            <div class="d-flex justify-content-between w-25">
                                <p class="my-total-txt my-light-txt">運費:</p>
                                <p class="fw-bold">${{$myObj['shipfee']}}</p>
                            </div>
                            <div class="d-flex justify-content-between w-25">
                                <p class="my-total-txt my-light-txt">總計:</p>
                                <p class="fw-bold">${{$myObj['subtot'] + $myObj['shipfee']}}</p>
                            </div>
                        </div>
                    </div>

                    <hr class="mb-4">

                    <div class="next-area">
                        <div class="d-flex justify-content-between align-items-center">
                            {{-- <a class="btn btn-outline-primary px-5 my-next-btn" href="{{ url('/cart02') }}"
                                role="button">上一步</a> --}}
                            <a class="btn btn-outline-primary px-5 my-next-btn" href="#"
                                role="button">上一步</a>
                            <button type="submit" class="btn btn-primary px-5 my-next-btn">前往付款</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection
