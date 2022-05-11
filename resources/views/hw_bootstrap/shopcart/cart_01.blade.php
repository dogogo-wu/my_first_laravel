@extends('hw_bootstrap.template')

@section('pageTittle')
    Cart-01
@endsection

@section('cssLink')
    <link rel="stylesheet" href={{ asset('./css/cart.css') }}>
    <style>
        .qty {
            width: 18px !important;
            height: unset !important;
        }

        .qty::-webkit-outer-spin-button,
        .qty::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        .qty[type=number] {
            -moz-appearance: textfield;
        }

    </style>
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
                            <div id="cartprod_div{{ $cartProd->id }}">
                                <div class="d-flex align-items-center pt-4">
                                    <img class="img-detail" src={{ asset($cartProd->product->img) }} alt="">
                                    <div class="ms-3">
                                        <p class="attach" data-prod_qty="{{ $cartProd->product->number }}"
                                            data-prod_price="{{ $cartProd->product->price }}">
                                            {{ $cartProd->product->name }}</p>
                                        <p class="my-small-txt my-light-txt">{{ $cartProd->product->introduction }}</p>
                                    </div>
                                    <div class="flex-grow-1"></div>

                                    <div class="d-flex pe-4 fw-bold align-items-center">
                                        <button class="minus btn" type="button"><i
                                                class="fa-solid fa-minus small"></i></button>
                                        <input type="number" name="qty[]" class="qty"
                                            value="{{ $cartProd->qty }}" readonly>
                                        <button class="plus btn" type="button"><i
                                                class="fa-solid fa-plus small"></i></button>
                                    </div>
                                    <div>
                                        <p class="my-small-txt pe-4 prod_price">
                                            ${{ $cartProd->qty * $cartProd->product->price }}</p>
                                    </div>
                                    <button class="btn btn-outline-danger btn-sm"
                                        onclick="del_cartprod({{ $cartProd->id }})" type="button">
                                        刪除
                                    </button>
                                </div>
                                <hr>
                            </div>
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
                                <p id="ship_fee" class="fw-bold">$100.00</p>
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
        // ---------------- Selector ---------------- //
        var minus = document.querySelectorAll('.minus');
        var plus = document.querySelectorAll('.plus');
        var qty = document.querySelectorAll('.qty');
        var prod_price = document.querySelectorAll('.prod_price');

        //使用data-屬性帶資料，再用JS抓
        var attach = document.querySelectorAll('.attach');


        // ---------------- Init Value ---------------- //

        var ship_fee = 150;
        var sumPrice = 0;

        // // 使用json_encode取資料 (會出錯，無法做關聯)
        // var objAry = {!! json_encode($cartProdAry) !!};
        // console.log(objAry);

        // objAry.forEach(element => {
        //     sumPrice += parseInt(element.qty) * parseInt(element.product.price);
        // });
        // var total = sumPrice + ship_fee;

        refresh();

        // ---------------- Plus and Minus ---------------- //

        for (let i = 0; i < minus.length; i++) {
            minus[i].onclick = () => {
                if (parseInt(qty[i].value) > 1) {
                    qty[i].value = parseInt(qty[i].value) - 1;

                    prod_price[i].innerHTML = '$' + parseInt(attach[i].dataset.prod_price) * parseInt(qty[i]
                        .value);

                    refresh();
                }
            }
            plus[i].onclick = () => {
                if (parseInt(qty[i].value) < parseInt(attach[i].dataset.prod_qty)) {
                    qty[i].value = parseInt(qty[i].value) + 1;

                    prod_price[i].innerHTML = '$' + parseInt(attach[i].dataset.prod_price) * parseInt(qty[i]
                        .value);

                    refresh();
                }
            }
        }

        function reSelect() {
            minus = document.querySelectorAll('.minus');
            plus = document.querySelectorAll('.plus');
            qty = document.querySelectorAll('.qty');
            prod_price = document.querySelectorAll('.prod_price');
            attach = document.querySelectorAll('.attach');
        }

        function refresh() {
            sumPrice = 0;

            for (let i = 0; i < minus.length; i++) {
                sumPrice += parseInt(attach[i].dataset.prod_price) * parseInt(qty[i]
                    .value);
            }

            var prodCnt = minus.length;
            var total = sumPrice + ship_fee;
            document.querySelector('#cnt').innerHTML = prodCnt;
            document.querySelector('#sum').innerHTML = '$' + sumPrice;
            document.querySelector('#total').innerHTML = '$' + total;
            document.querySelector('#ship_fee').innerHTML = '$' + ship_fee;
        }

        function del_cartprod(myid) {
            //---------- 使用Fetch時，刪除的方法 ----------//
            let formData = new FormData();
            formData.append('_method', 'DELETE');
            formData.append('_token', '{{ csrf_token() }}');

            fetch("/cart01/delete/" + myid, {
                method: "POST",
                body: formData
            }).then(function(response) {
                //------ 子方法2，使用javescript刪除元件 ------//
                let ele = document.querySelector('#cartprod_div' + myid);
                ele.remove();
                reSelect();
                refresh();
            })


        }
    </script>
@endsection
