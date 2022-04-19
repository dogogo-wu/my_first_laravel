@extends('hw_bootstrap.template')

@section('pageTittle')
    Comment
@endsection

@section('cssLink')
    <link rel="stylesheet" href="./css/cart.css">
@endsection

@section('mainSec')
    <main>
        <section id="cart-sec" class="py-5">
            <div class="container my-cart-con ">
                <p class="h2 fw-bold mb-4">留言板</p>

                <div class="comment-show mb-4">
                    <div class="d-flex align-items-end">
                        <p class="h4 mb-0">Tittle</p>
                        <p class="small mb-0 ms-3 text-muted">My Name</p>
                        <p class="small ms-auto mb-0 text-muted">Date and Time</p>
                    </div>
                    <div class="border rounded">
                        <p class="my-placeholder-txt mb-0 px-3 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, magnam.</p>
                    </div>
                </div>
                <div class="comment-show mb-4">
                    <div class="d-flex align-items-end">
                        <p class="h4 mb-0">Tittle</p>
                        <p class="small mb-0 ms-3 text-muted">My Name</p>
                        <p class="small ms-auto mb-0 text-muted">Date and Time</p>
                    </div>
                    <div class="border rounded">
                        <p class="my-placeholder-txt mb-0 px-3 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, magnam.</p>
                    </div>
                </div>
                <div class="comment-show mb-4">
                    <div class="d-flex align-items-end">
                        <p class="h4 mb-0">Tittle</p>
                        <p class="small mb-0 ms-3 text-muted">My Name</p>
                        <p class="small ms-auto mb-0 text-muted">Date and Time</p>
                    </div>
                    <div class="border rounded">
                        <p class="my-placeholder-txt mb-0 px-3 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, magnam.</p>
                    </div>
                </div>
                <hr class="mb-0">
                <div class="txtform-area">
                    <form action="{{url('/comment/save')}}" method="">
                        <p class="h4 mt-4">~~歡迎留言~~</p>
                        <div class="mb-3">
                            <label for="id_myName" class="form-label my-label-txt">姓名</label>
                            <input type="text" class="form-control my-placeholder-txt" id="id_myName" name="myName" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="id_myTittle" class="form-label my-label-txt">標題</label>
                            <input type="text" class="form-control my-placeholder-txt" id="id_myTittle" name="myTittle" placeholder="Tittle">
                        </div>
                        <div class="mb-3">
                            <label for="id_myContent" class="form-label my-label-txt">內容</label>
                            <input type="text" class="form-control my-placeholder-txt" id="id_myContent" name="myContent" placeholder="Content">
                            {{-- <textarea class="form-control my-placeholder-txt" style="resize: none;" id="id_myContent" name="myContent" rows="3" placeholder="Content"></textarea> --}}
                        </div>

                        <hr class="my-4 border border-dark">

                        <div class="d-flex justify-content-between align-items-center">
                            <input type="reset" value="清除" class="btn btn-secondary px-5 my-next-btn">
                            <input type="submit" value="送出" class="btn btn-primary px-5 my-next-btn">
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
