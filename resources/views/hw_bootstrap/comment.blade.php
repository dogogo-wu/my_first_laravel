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

                @foreach ($commentAry as $comment)
                    <div class="comment-show mb-4">
                        <div class="d-flex align-items-end">
                            <p class="h4 mb-0">{{ $comment->tittle }}</p>
                            <p class="small mb-0 ms-3 text-muted">{{ $comment->name }}</p>
                            <p class="small ms-auto mb-0 text-muted">{{ $comment->created_at }}</p>
                        </div>
                        <div class="border rounded">
                            <p class="my-placeholder-txt mb-0 px-3 py-2">{{ $comment->content }}</p>
                        </div>
                        @auth
                            <div class="d-flex justify-content-end mb-4">
                                <a href="/comment/delete/{{ $comment->id }}" class="btn btn-outline-danger btn-sm me-3">刪除</a>
                                <a href="/comment/edit/{{ $comment->id }}" class="btn btn-outline-success btn-sm">編輯</a>
                            </div>
                        @endauth
                    </div>
                @endforeach

                <hr class="mb-0">
                <div class="txtform-area">
                    <form action="{{ url('/comment/save') }}" method="">
                        <p class="h4 mt-4">~~歡迎留言~~</p>
                        <div class="mb-3">
                            <label for="id_myName" class="form-label my-label-txt">姓名</label>
                            <input type="text" class="form-control my-placeholder-txt" id="id_myName" name="myName"
                                placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="id_myTittle" class="form-label my-label-txt">標題</label>
                            <input type="text" class="form-control my-placeholder-txt" id="id_myTittle" name="myTittle"
                                placeholder="Tittle">
                        </div>
                        <div class="mb-3">
                            <label for="id_myContent" class="form-label my-label-txt">內容</label>
                            <input type="text" class="form-control my-placeholder-txt" id="id_myContent" name="myContent"
                                placeholder="Content">
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
