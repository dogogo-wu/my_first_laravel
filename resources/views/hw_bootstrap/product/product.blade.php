@extends('hw_bootstrap.template')

@section('pageTittle')
    Product
@endsection

@section('cssLink')
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
                    <a href="/product/create" class="btn btn-success m">新增商品</a>
                </div>

                <table id="product_list" class="display">
                    <thead>
                        <tr>
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
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->number}}</td>
                                <td>{{$product->introduction}}</td>
                                <td>
                                    <a href="/product/delete/{{ $product->id }}" class="btn btn-outline-danger btn-sm me-3">刪除</a>
                                    <a href="/product/edit/{{ $product->id }}" class="btn btn-outline-success btn-sm">編輯</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection

@section('jsCdn')
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
