@extends('hw_bootstrap.template')

@section('pageTittle')
    Comment-Edit
@endsection

@section('cssLink')
    <link rel="stylesheet" href="./css/cart.css">
@endsection

@section('mainSec')
    <main>
        <section id="cart-sec" class="py-5">
            <div class="container my-cart-con ">
                {{-- {{$edited}} --}}
                <div class="txtform-area">
                    <form action="/comment/update/{{ $edited->id }}" method="">
                        <p class="h4 mt-4">~~修改留言~~</p>
                        <div class="mb-3">
                            <label for="id_myName" class="form-label my-label-txt">姓名</label>
                            <input type="text" class="form-control my-placeholder-txt" id="id_myName" name="myName"
                                value="{{ $edited->name }}" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="id_myTittle" class="form-label my-label-txt">標題</label>
                            <input type="text" class="form-control my-placeholder-txt" id="id_myTittle" name="myTittle"
                                value="{{ $edited->tittle }}" placeholder="Tittle">
                        </div>
                        <div class="mb-3">
                            <label for="id_myContent" class="form-label my-label-txt">內容</label>
                            <input type="text" class="form-control my-placeholder-txt" id="id_myContent" name="myContent"
                                value="{{ $edited->content }}" placeholder="Content">
                            {{-- <textarea class="form-control my-placeholder-txt" style="resize: none;" id="id_myContent" name="myContent" rows="3" placeholder="Content"></textarea> --}}
                        </div>

                        <hr class="my-4 border border-dark">

                        <div class="d-flex justify-content-between align-items-center">
                            <input type="reset" value="重做" class="btn btn-secondary px-5 my-next-btn">
                            <input type="submit" value="送出" class="btn btn-primary px-5 my-next-btn">
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
