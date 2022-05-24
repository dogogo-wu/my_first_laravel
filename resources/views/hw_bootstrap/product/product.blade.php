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
                                <td id="prod_name{{ $product->id }}">{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->number }}</td>
                                <td>{{ $product->introduction }}</td>
                                <td>
                                    <button onclick="passValue({{ $product }})"
                                        class="btn btn-outline-primary btn-sm me-2 mb-2 w-50" type="button">Test</button>
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
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="edit_form" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="mycontent" class="col-form-label">改的內容:</label>
                                    <input type="text" class="form-control" name="mycontent" id="mycontent" value="">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button id="save_btn" type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
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
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#product_list').DataTable();
        });

        function passValue(prod) {
            $('#myModal').modal('show');
            document.querySelector('#mycontent').value = document.querySelector('#prod_name' + prod.id).innerHTML;
            var handler = function() {
                myedit(prod.id);
            };
            document.querySelector('#save_btn').onclick = handler;
        }

        function myedit(myid) {

            let formData = new FormData(document.querySelector('#edit_form'));

            fetch("/product/mystore/" + myid, {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    let ele = document.querySelector('#prod_name' + myid);

                    // 更新innerHTML (DB已更新，需自行更新畫面)
                    ele.innerHTML = data.new_name;

                    // 關掉modal
                    $('#myModal').modal('hide');

                });

        }
        // 防止按Enter送出get請求
        $(document).on('keyup keypress', 'input', function(e) {
            if (e.which == 13) {
                e.preventDefault();
                return false;
            }
        });

        // input.addEventListener("keypress", function(event) {
        //     // If the user presses the "Enter" key on the keyboard
        //     if (event.key === "Enter") {
        //         // Cancel the default action, if needed
        //         event.preventDefault();
        //         // Trigger the button element with a click
        //         document.getElementById("save_btn").click();
        //     }
        // });
    </script>
@endsection
