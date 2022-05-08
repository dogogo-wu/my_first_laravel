@extends('hw_bootstrap.template')

@section('pageTittle')
    Cart-01
@endsection

@section('cssLink')
    <link rel="stylesheet" href={{ asset('./css/cart.css') }}>
@endsection


@section('mainSec')
    <main>
        <section id="cart-sec" class="py-5">
            <form action="/cart02" method="POST">
                @csrf
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

                        @foreach ($cartProdAry as $cartProd)
                            <div class="d-flex align-items-center pt-4">
                                <img class="img-detail" src={{ asset($cartProd->product->img) }} alt="">
                                <div class="ms-3">
                                    <p>{{ $cartProd->product->name }}</p>
                                    <p class="my-small-txt my-light-txt">{{ $cartProd->product->introduction }}</p>
                                </div>
                                <div class="flex-grow-1"></div>

                                <div class="d-flex pe-4 fw-bold">
                                    <p onclick="minus({{ $loop->index }})">-</p>
                                    <input type="text" name="qty[]" id="input{{ $loop->index }}" value="{{ $cartProd->qty }}">
                                    <p onclick="plus({{ $loop->index }})">+</p>
                                </div>
                                <div>
                                    <p class="my-small-txt pe-4">${{ $cartProd->qty * $cartProd->product->price }}.00</p>
                                </div>
                            </div>
                            <hr>
                        @endforeach

                    </div>

                    <div class="total-area">
                        <div class="d-flex flex-column align-items-end mt-4">
                            <div class="d-flex justify-content-between w-25">
                                <p class="my-total-txt my-light-txt">數量:</p>
                                <p id="cnt" class="fw-bold">3</p>
                            </div>
                            <div class="d-flex justify-content-between w-25">
                                <p class="my-total-txt my-light-txt">小計:</p>
                                <p id="sum" class="fw-bold">$24.90</p>
                            </div>
                            <div class="d-flex justify-content-between w-25">
                                <p class="my-total-txt my-light-txt">運費:</p>
                                <p class="fw-bold">$100.00</p>
                            </div>
                            <div class="d-flex justify-content-between w-25">
                                <p class="my-total-txt my-light-txt">總計:</p>
                                <p id="total" class="fw-bold">$24.90</p>
                            </div>
                        </div>
                    </div>

                    <hr class="mb-4">

                    <div class="next-area">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ url('/#category') }}">
                                <p class="align-middle text-secondary"><i class="fa-solid fa-arrow-left me-2"></i>返回購物</p>
                            </a>
                            <button type="submit" class="btn btn-primary px-5 my-next-btn">下一步</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection

@section('js')
    <script>
        var objAry = {!! json_encode($cartProdAry) !!};
        var prodCnt = 0;
        var sumPrice = 0;
        objAry.forEach(element => {
            prodCnt += Number(element.qty);
            sumPrice += Number(element.qty) * Number(element.product.price);
        });
        var total = sumPrice + 100;

        document.querySelector('#cnt').innerHTML = prodCnt;
        document.querySelector('#sum').innerHTML = '$' + sumPrice.toFixed(2);
        document.querySelector('#total').innerHTML = '$' + total.toFixed(2);


        //尚未防呆，尚未傳到後台
        function minus(myid) {
            var inputNum = document.querySelector('#input' + myid);
            if (Number(inputNum.value) > 1) {
                inputNum.value = Number(inputNum.value) - 1;
            }
        }

        function plus(myid) {
            var inputNum = document.querySelector('#input' + myid);
            inputNum.value = Number(inputNum.value) + 1;
        }
    </script>
@endsection
