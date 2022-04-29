{{-- @extends('hw_bootstrap.template') --}}
@extends('layouts.app')

@section('pageTittle')
    Product-Create
@endsection

@section('cssLink')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        form img {
            max-height: 400px;
            max-width: 400px;
        }

    </style>
@endsection

@section('mainSec')
    <main>
        <section id="cart-sec" class="py-5">
            <div class="container my-cart-con">
                <form class="d-flex flex-column" action="/product/store" method="post" enctype="multipart/form-data">
                    @csrf

                    <img id="blah" src="" alt="your image" class="d-none">

                    <div class="mb-3">
                        <label for="product_img" class="form-label my-label-txt">主要圖片上傳</label>
                        <input type="file" class="form-control" id="product_img" name="product_img" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="second_img" class="form-label my-label-txt">次要圖片上傳</label>
                        <input type="file" class="form-control" id="second_img" name="second_img[]" accept="image/*"
                            multiple>
                    </div>
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

@section('js')
    <script>
        // product_img.onclick = evt =>{
        //     const [file] = product_img.files;
        //     if (!file) {
        //         blah.classList.add("d-none");
        //     }
        // }
        var pathtmp;

        product_img.onchange = evt => {
            const [file] = product_img.files;
            if (file) {
                blah.src = URL.createObjectURL(file);
                blah.classList.remove("d-none");
            }
        }
    </script>
@endsection

@section('jsCdn')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
