@extends('hw_bootstrap.template')

@section('pageTittle')
    Banner-Edit
@endsection

@section('cssLink')
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        table img{
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
                    <p class="h2 fw-bold mb-0">Banner 管理</p>
                    <a href="/banner/update/{{ $edited->id }}" class="btn btn-success m">新增Banner</a>
                </div>

                <table id="banner_list" class="display">
                    <thead>
                        <tr>
                            <th>圖片預覽</th>
                            <th>圖片權重</th>
                            <th>功能</th>
                        </tr>
                    </thead>
                    <tbody>

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
        $('#banner_list').DataTable();
    });
</script>
@endsection