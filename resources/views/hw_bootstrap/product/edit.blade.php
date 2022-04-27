@extends('hw_bootstrap.template')

@section('pageTittle')
    Product-Create
@endsection

@section('cssLink')
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
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="h2 fw-bold mb-0">商品編輯</p>
                </div>
                <form class="d-flex flex-column" action="/product/update/{{ $edited->id }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 d-flex flex-column">
                        <p class="mb-0">現在的圖片</p>
                        <img id="blah" src="{{ asset($edited->img) }}" alt="your image" />
                        <label for="product_img" class="form-label my-label-txt mt-3">商品圖片上傳</label>
                        <input type="file" name="product_img" id="product_img" class="form-control">
                    </div>
                    <p class="mb-0">現在次要圖片</p>
                    <div class="mb-3 d-flex flex-wrap">
                        @foreach ($edited->imgs as $item)
                            <img src="{{$item->img_path}}" alt="" style="width: 100px;" class="me-3">
                        @endforeach

                    </div>
                    <div class="mb-3">
                        <label for="product_name" class="form-label my-label-txt">品名</label>
                        <input type="text" class="form-control my-placeholder-txt" id="product_name" name="product_name" value="{{ $edited->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="product_price" class="form-label my-label-txt">價格</label>
                        <input type="text" class="form-control my-placeholder-txt" id="product_price" name="product_price"
                            value="{{ $edited->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="product_number" class="form-label my-label-txt">數量</label>
                        <input type="text" class="form-control my-placeholder-txt" id="product_number"
                            name="product_number" value="{{ $edited->number }}">
                    </div>
                    <div class="mb-3">
                        <label for="product_intro" class="form-label my-label-txt">介紹</label>
                        <input type="text" class="form-control my-placeholder-txt" id="product_intro" name="product_intro" value="{{ $edited->introduction }}">
                    </div>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <input type="reset" value="重做" class="btn btn-secondary px-4 mx-2 my-next-btn">
                        <input type="submit" value="編輯完成" class="btn btn-primary px-4 mx-2 my-next-btn">
                    </div>
                </form>

            </div>
        </section>
    </main>
@endsection

@section('js')
    <script>
        product_img.onchange = evt => {
            const [file] = product_img.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
