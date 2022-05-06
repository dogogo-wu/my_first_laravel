{{-- @extends('hw_bootstrap.template') --}}
@extends('layouts.app')

@section('pageTittle')
    Account-Edit
@endsection

@section('cssLink')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

@section('mainSec')
    <main>
        <section id="cart-sec" class="py-5">
            <div class="container my-cart-con ">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="h2 fw-bold mb-0">訂單查看</p>
                </div>

                <form class="d-flex flex-column" action="/order/update/{{ $edited->id }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label my-label-txt">訂單編號</label>
                        <input type="text" name="name" id="name" class="form-control my-placeholder-txt"
                            value="{{ $edited->id }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label my-label-txt">訂單狀態</label>
                        <input type="text" name="name" id="name" class="form-control my-placeholder-txt"
                            value="{{ $edited->status }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label my-label-txt">品項</label>
                        <input type="text" name="name" id="name" class="form-control my-placeholder-txt"
                            value="{{ $edited->qty_all }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label my-label-txt">總計</label>
                        <input type="text" name="name" id="name" class="form-control my-placeholder-txt"
                            value="{{ $edited->total }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label my-label-txt">姓名</label>
                        <input type="text" name="name" id="name" class="form-control my-placeholder-txt"
                            value="{{ $edited->name }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label my-label-txt">電話</label>
                        <input type="text" name="name" id="name" class="form-control my-placeholder-txt"
                            value="{{ $edited->phone }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label my-label-txt">地址</label>
                        <input type="text" name="name" id="name" class="form-control my-placeholder-txt"
                            value="{{ $edited->addr }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label my-label-txt">付款方式</label>
                        <input type="text" name="name" id="name" class="form-control my-placeholder-txt"
                            value="{{ $edited->payment }}" disabled>
                    </div>

                    {{-- <select class="form-select mb-3" name="power">

                        @if ($edited->power == 1)
                            <option selected value="1">管理者</option>
                            <option value="2">一般使用者</option>
                        @else
                            <option value="1">管理者</option>
                            <option selected value="2">一般使用者</option>
                        @endif

                    </select> --}}

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <a href="/order" class="btn btn-secondary px-4 mx-2 my-next-btn">返回</a>
                        <input type="submit" value="送出" class="btn btn-primary px-4 mx-2 my-next-btn">
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection

@section('jsCdn')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
