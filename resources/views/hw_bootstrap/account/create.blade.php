{{-- @extends('hw_bootstrap.template') --}}
@extends('layouts.app')

@section('pageTittle')
    Account-Create
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
                    <p class="h2 fw-bold mb-0">管理員新增</p>
                </div>
                <p class="text-danger fw-bold">{{session('problem')}}</p>

                <form class="d-flex flex-column" action="/account/store" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="acc_name" class="form-label my-label-txt">使用者名稱</label>
                        <input type="text" name="acc_name" id="acc_name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="acc_mail" class="form-label my-label-txt">使用者信箱</label>
                        <input type="email" name="acc_mail" id="acc_mail" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="acc_password" class="form-label my-label-txt">使用者密碼</label>
                        <input type="password" name="acc_password" id="acc_password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="check_password" class="form-label my-label-txt">確認密碼</label>
                        <input type="password" name="check_password" id="check_password" class="form-control">
                    </div>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <input type="reset" value="清除" class="btn btn-secondary px-4 mx-2 my-next-btn">
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

@section('js')
    <script>
        alert('{{session("success")}}');
    </script>
@endsection
