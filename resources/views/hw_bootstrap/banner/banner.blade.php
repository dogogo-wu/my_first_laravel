{{-- @extends('hw_bootstrap.template') --}}
@extends('layouts.app')

@section('pageTittle')
    Banner
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
                    <p class="h2 fw-bold mb-0">Banner 管理</p>
                    <a href="/banner/create" class="btn btn-success m">新增Banner</a>
                </div>

                <table id="banner_list" class="display">
                    <thead>
                        <tr>
                            <th>順序調整</th>
                            <th>圖片預覽</th>
                            <th>圖片權重</th>
                            <th>功能</th>
                        </tr>
                    </thead>
                    <tbody id="genSec">
                        @foreach ($bannerAry as $banner)
                            <tr>
                                <td>
                                    <button onclick="upmove({{ $banner->id }})"
                                        class="btn btn-outline-primary btn-sm me-2 mb-2 w-50" type="button">上移</button>
                                    <button onclick="downmove({{ $banner->id }})"
                                        class="btn btn-outline-primary btn-sm me-2 mb-2 w-50" type="button">下移</button>
                                </td>
                                <td>
                                    <img src="{{ asset($banner->img_path) }}" alt="{{ $banner->img_path }}"
                                        style="opacity: {{ $banner->img_opacity }}">
                                </td>
                                <td>{{ $banner->weight }}</td>
                                <td>
                                    <button class="btn btn-outline-danger btn-sm me-3"
                                        onclick="del_banner({{ $banner->id }})">刪除</button>
                                    <a href="/banner/edit/{{ $banner->id }}" class="btn btn-outline-success btn-sm">編輯</a>
                                    <form id="delForm{{ $banner->id }}" action="/banner/delete/{{ $banner->id }}"
                                        method="POST">
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
        function del_banner($id) {

            document.querySelector('#delForm' + $id).submit();
            // console.log('Hello' + tmp);
        }
    </script>
@endsection

@section('jsCdn')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#banner_list').DataTable();
        });

        function upmove(myid) {

            let formData = new FormData();
            formData.append('_method', 'POST');
            formData.append('_token', '{{ csrf_token() }}');

            fetch("/banner/upmove/" + myid, {
                method: "POST",
                body: formData
            }).then(function(response) {
                location.reload();
            })

        }

        function downmove(myid) {

            let formData = new FormData();
            formData.append('_method', 'POST');
            formData.append('_token', '{{ csrf_token() }}');

            fetch("/banner/downmove/" + myid, {
                method: "POST",
                body: formData
            }).then(function(response) {
                location.reload();
            })

        }
        // 想用JS更新
        function genContent(){
            // myarea = document.querySelector('#genSec');

            // myarea.innerHTML =
            //     for (let i = 0; i < 4; i++) {
            //         const element = array[i];

            //     }
            // /*html*/
            // `
            // @foreach ($bannerAry as $banner)
            //     <tr>
            //         <td>
            //             <button onclick="upmove({{ $banner->id }})"
            //                 class="btn btn-outline-primary btn-sm me-2 mb-2 w-50" type="button">上移</button>
            //             <button onclick="downmove({{ $banner->id }})"
            //                 class="btn btn-outline-primary btn-sm me-2 mb-2 w-50" type="button">下移</button>
            //         </td>
            //         <td>
            //             <img src="{{ asset($banner->img_path) }}" alt="{{ $banner->img_path }}"
            //                 style="opacity: {{ $banner->img_opacity }}">
            //         </td>
            //         <td>{{ $banner->weight }}</td>
            //         <td>
            //             <button class="btn btn-outline-danger btn-sm me-3"
            //                 onclick="del_banner({{ $banner->id }})">刪除</button>
            //             <a href="/banner/edit/{{ $banner->id }}" class="btn btn-outline-success btn-sm">編輯</a>
            //             <form id="delForm{{ $banner->id }}" action="/banner/delete/{{ $banner->id }}"
            //                 method="POST">
            //                 @csrf
            //             </form>
            //         </td>
            //     </tr>
            // @endforeach
            // `;
        }
    </script>
@endsection
