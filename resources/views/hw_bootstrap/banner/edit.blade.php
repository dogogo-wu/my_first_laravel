@extends('hw_bootstrap.template')

@section('pageTittle')
    Banner-Edit
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
            <div class="container my-cart-con ">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="h2 fw-bold mb-0">Banner編輯</p>
                </div>

                <form class="d-flex flex-column" action="/banner/update/{{ $edited->id }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 d-flex flex-column">
                        <p class="mb-0">現在的圖片</p>
                        <img id="blah" src="{{ asset($edited->img_path) }}" alt="your image" />
                        <label for="banner_img" class="form-label my-label-txt mt-3">BANNER圖片上傳</label>
                        <input type="file" name="banner_img" id="banner_img">
                    </div>

                    <div class="mb-3">
                        <label for="banner_opacity" class="form-label my-label-txt">透明度設定</label>
                        <input type="text" name="banner_opacity" id="banner_opacity" class="form-control my-placeholder-txt"
                            value="{{ $edited->img_opacity }}">
                    </div>

                    <div class="mb-3">
                        <label for="img_weight" class="form-label my-label-txt">權重設定</label>
                        <input type="number" name="img_weight" id="img_weight" class="form-control my-placeholder-txt"
                            value="{{ $edited->weight }}">
                    </div>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <input type="reset" value="重做" class="btn btn-secondary px-4 mx-2 my-next-btn">
                        <input type="submit" value="送出" class="btn btn-primary px-4 mx-2 my-next-btn">
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection

@section('js')
    <script>
        banner_img.onchange = evt => {
            const [file] = banner_img.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
