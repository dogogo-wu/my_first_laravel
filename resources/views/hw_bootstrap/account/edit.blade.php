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
                    <p class="h2 fw-bold mb-0">會員編輯</p>
                </div>

                <form class="d-flex flex-column" action="/account/update/{{ $edited->id }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="mail" class="form-label my-label-txt">使用者帳號</label>
                        <input type="email" id="mail" readonly value="{{ $edited->email }}"
                            class="form-control my-placeholder-txt">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label my-label-txt">使用者名稱</label>
                        <input type="text" name="name" id="name" class="form-control my-placeholder-txt"
                            value="{{ $edited->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label my-label-txt">使用者密碼</label>
                        <input type="password" name="password" id="password" class="form-control my-placeholder-txt"
                            value="{{ $edited->password }}">
                    </div>

                    <div class="mb-3">
                        <label for="power">使用者權限</label>
                        <select class="form-select mb-3" name="power" id="power">
                            <option value="1" @if ($edited->power == 1) selected @endif>管理者</option>
                            <option value="2" @if ($edited->power == 2) selected @endif>一般會員</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <button class="btn btn-secondary px-4 mx-2 my-next-btn" onclick="location.href='/account'">取消</button>
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
