{{-- @extends('hw_bootstrap.template') --}}
@extends('layouts.app')

@section('pageTittle')
    Banner-Edit
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
@section('jsCdn')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
