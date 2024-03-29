{{-- @extends('hw_bootstrap.template') --}}
@extends('layouts.app')

@section('pageTittle')
    Product
@endsection

@section('cssLink')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        table img {
            max-height: 200px;
            max-width: 200px;
        }

    </style>
@endsection

@section('mainSec')
    <main>
        <section id="cart-sec" class="py-5">
            <div class="container my-cart-con ">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="h2 fw-bold mb-0">商品列表</p>
                    <a href="/product/create" class="btn btn-success">新增商品</a>
                </div>

                <table id="product_list" class="display">
                    <thead>
                        <tr>
                            <th>圖片</th>
                            <th>品名</th>
                            <th>價格</th>
                            <th>數量</th>
                            <th>介紹</th>
                            <th>功能</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productAry as $product)
                            <tr>
                                <td>
                                    <img src="{{ $product->img }}" alt="">
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->number }}</td>
                                <td>{{ $product->introduction }}</td>
                                <td>
                                    <a href="/product/edit/{{ $product->id }}"
                                        class="btn btn-outline-success btn-sm me-2 mb-2">編輯</a>
                                    <a onclick="del_product({{ $product->id }})"
                                        class="btn btn-outline-danger btn-sm me-2 mb-2">刪除</a>
                                    <form id="prodForm{{ $product->id }}" action="/product/delete/{{ $product->id }}"
                                        method="post" hidden>
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection

@section('js')
    <script>
        function del_product(myid) {
            document.querySelector('#prodForm' + myid).submit();
        }
    </script>
@endsection

@section('jsCdn')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#product_list').DataTable();
        });
    </script>
@endsection
