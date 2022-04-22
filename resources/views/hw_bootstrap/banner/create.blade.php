@extends('hw_bootstrap.template')

@section('pageTittle')
    Banner-Create
@endsection

@section('cssLink')
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

@section('mainSec')
    <main>
        <section id="cart-sec" class="py-5">
            <div class="container my-cart-con">
                <form class="d-flex flex-column" action="/banner/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="banner_img">BANNER圖片上傳</label>
                    <input type="file" name="banner_img" id="banner_img">

                    <label for="banner_opacity">透明度設定</label>
                    <input type="text" name="banner_opacity" id="banner_opacity">

                    <label for="img_weight">權重設定</label>
                    <input type="number" name="img_weight" id="img_weight">

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <input type="reset" value="重做" class="btn btn-secondary px-4 mx-2 my-next-btn">
                        <input type="submit" value="新增Banner" class="btn btn-primary px-4 mx-2 my-next-btn">
                    </div>
                </form>

            </div>
        </section>
    </main>
@endsection
