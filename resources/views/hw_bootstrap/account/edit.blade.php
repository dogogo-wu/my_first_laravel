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
                        <label for="acc_name" class="form-label my-label-txt">使用者名稱</label>
                        <input type="text" name="acc_name" id="acc_name" class="form-control my-placeholder-txt"
                            value="{{ $edited->name }}">
                    </div>

                    <select class="form-select mb-3" name="acc_power">
                        @if ($edited->power == 1)
                            <option selected value="1">管理者</option>
                            <option value="2">一般使用者</option>
                        @else
                            <option value="1">管理者</option>
                            <option selected value="2">一般使用者</option>
                        @endif

                    </select>

                    <div class="mb-3">
                        <label for="acc_password" class="form-label my-label-txt">新密碼</label>
                        <input type="password" name="acc_password" id="acc_password" class="form-control my-placeholder-txt"
                            value="">
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

@section('jsCdn')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
