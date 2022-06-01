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
            aspect-ratio: 16/10;
            object-fit: cover;
            object-position: center;
        }

        form .primary_img {
            width: 400px;
        }

        form .sec_img {
            width: 150px;
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
                        <p class="mb-0">現在主要圖片</p>
                        <img id="blah" src="{{ asset($edited->img) }}" alt="your image" class="primary_img" />
                        <label for="product_img" class="form-label my-label-txt mt-3">商品圖片上傳</label>
                        <input type="file" name="product_img" id="product_img" class="form-control">
                    </div>
                    <p class="mb-0">現在次要圖片</p>
                    <div class="d-flex flex-wrap">
                        @foreach ($edited->imgs as $item)
                            <div class="d-flex flex-column align-items-center" id="sec_img_div{{ $item->id }}">
                                <img src="{{ $item->img_path }}" alt="" class="me-3 mb-2 sec_img">
                                <button onclick="del_sec_prod({{ $item->id }})"
                                    class="btn btn-outline-danger btn-sm me-2 mb-2 w-50" type="button">刪除</button>
                            </div>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="second_img" class="form-label my-label-txt">次要圖片上傳</label>
                        <input type="file" class="form-control" id="second_img" name="second_img[]" accept="image/*"
                            multiple>
                    </div>
                    <div class="mb-3">
                        <label for="product_name" class="form-label my-label-txt">品名</label>
                        <input type="text" class="form-control my-placeholder-txt" id="product_name" name="product_name"
                            value="{{ $edited->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="product_price" class="form-label my-label-txt">價格</label>
                        <input type="text" class="form-control my-placeholder-txt" id="product_price" name="product_price"
                            value="{{ $edited->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="product_number" class="form-label my-label-txt">數量</label>
                        <input type="text" class="form-control my-placeholder-txt" id="product_number" name="product_number"
                            value="{{ $edited->number }}">
                    </div>
                    {{-- original --}}
                    {{-- <div class="mb-3">
                        <label for="product_intro" class="form-label my-label-txt">介紹</label>
                        <input type="text" class="form-control my-placeholder-txt" id="product_intro" name="product_intro"
                            value="{{ $edited->introduction }}">
                    </div> --}}

                    {{-- My textarea test --}}
                    <div class="mb-3">
                        <label for="product_intro" class="form-label my-label-txt">介紹</label>
                        {{-- <textarea name="product_intro2" class="form-control" id="product_intro" cols="30"
                            rows="10">{{ $edited->introduction }}</textarea> --}}

                            {{-- OK --}}
                            {{-- <textarea name="product_intro2" class="form-control" id="product_intro" cols="30"
                            rows="10">{{ str_replace('<br>',"\r\n", $edited->introduction) }}</textarea> --}}

                            <textarea name="product_intro2" class="form-control" id="product_intro" cols="30"
                            rows="10">{{ rtrim(ltrim(str_replace('</p><p>',"\r\n", $edited->introduction), '<p>'),'</p>') }}</textarea>

                    </div>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <input type="reset" value="重做" class="btn btn-secondary px-4 mx-2 my-next-btn">
                        <input type="submit" value="編輯完成" class="btn btn-primary px-4 mx-2 my-next-btn">
                    </div>
                </form>
                {{-- @foreach ($edited->imgs as $item)
                    <form id="prodSecForm{{ $item->id }}" action="/product/del_sec_img/{{ $item->id }}"
                        method="post" hidden>
                        @method('DELETE')
                        @csrf
                    </form>
                @endforeach --}}

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

        function del_sec_prod(myid) {

            //---------- 使用Form表單時，刪除的方法 ----------//
            // document.querySelector('#prodSecForm' + myid).submit();


            //---------- 使用Fetch時，刪除的方法 ----------//
            let formData = new FormData();
            formData.append('_method', 'DELETE');
            formData.append('_token', '{{ csrf_token() }}');

            fetch("/product/del_sec_img/" + myid, {
                method: "POST",
                body: formData
            }).then(function(response) {
                //------ 子方法1，使用reload ------//
                // location.reload()

                //------ 子方法2，使用javescript刪除元件 ------//
                let ele = document.querySelector('#sec_img_div' + myid);
                ele.remove();
            })

        }
    </script>
@endsection

@section('jsCdn')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
