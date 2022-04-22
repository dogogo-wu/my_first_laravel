@extends('hw_bootstrap.template')

@section('pageTittle')
    Product-Create
@endsection

@section('cssLink')
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

@section('mainSec')
    <main>
        <section id="cart-sec" class="py-5">
            <div class="container my-cart-con">
                <form class="d-flex flex-column" action="/product/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="product_name" class="form-label my-label-txt">品名</label>
                        <input type="text" class="form-control my-placeholder-txt" id="product_name" name="product_name"
                            placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="product_price" class="form-label my-label-txt">價格</label>
                        <input type="text" class="form-control my-placeholder-txt" id="product_price" name="product_price"
                            placeholder="Price">
                    </div>
                    <div class="mb-3">
                        <label for="product_number" class="form-label my-label-txt">數量</label>
                        <input type="text" class="form-control my-placeholder-txt" id="product_number" name="product_number"
                            placeholder="Number">
                    </div>
                    <div class="mb-3">
                        <label for="product_intro" class="form-label my-label-txt">介紹</label>
                        <input type="text" class="form-control my-placeholder-txt" id="product_intro" name="product_intro"
                            placeholder="Introduction">
                    </div>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <input type="reset" value="重新輸入" class="btn btn-secondary px-4 mx-2 my-next-btn">
                        <input type="submit" value="新增商品" class="btn btn-primary px-4 mx-2 my-next-btn">
                    </div>
                </form>

            </div>
        </section>
    </main>
@endsection
