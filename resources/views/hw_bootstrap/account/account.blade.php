{{-- @extends('hw_bootstrap.template') --}}
@extends('layouts.app')

@section('pageTittle')
    Account
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
                    <p class="h2 fw-bold mb-0">會員管理</p>
                    <a href="/account/create" class="btn btn-success m">新增管理者</a>
                </div>

                <table id="account_list" class="display">
                    <thead>
                        <tr>
                            <th>使用者名稱</th>
                            <th>信箱</th>
                            <th>權限</th>
                            <th>功能</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($accountAry as $account)
                            <tr>
                                <td>{{ $account->name }}</td>
                                <td>{{ $account->email }}</td>
                                <td>
                                    @if ($account->power == 1)
                                        管理者
                                    @else
                                        一般會員
                                    @endif
                                </td>
                                <td>
                                    <a href="/account/edit/{{ $account->id }}"
                                        class="btn btn-outline-success btn-sm me-2">編輯</a>
                                    <button class="btn btn-outline-danger btn-sm"
                                        onclick="del_account({{ $account->id }})">刪除</button>
                                    <form id="delForm{{ $account->id }}" action="/account/delete/{{ $account->id }}"
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
        function del_account($id) {
            document.querySelector('#delForm' + $id).submit();
        }
    </script>
    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
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
            $('#account_list').DataTable();
        });
    </script>
@endsection
