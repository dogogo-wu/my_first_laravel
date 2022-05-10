@extends('layouts.app')

@section('pageTittle')
    Order-Edit
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
                <p class="h2 fw-bold text-center">查看及修改狀態</p>

                <div class="detail-area">
                    <p class="h4 mb-4">訂單明細</p>
                    @foreach ($order->detail as $item)
                        <div class="d-flex align-items-center pt-4">
                            <img class="img-detail" src="{{ asset($item->product->img) }}" alt="">
                            <div class=" ms-3">
                                <p>{{ $item->product->name }}</p>
                                <p class="my-small-txt my-light-txt">{{ $item->product->introduction }}</p>
                            </div>
                            <div class="flex-grow-1"></div>

                            <div class="d-flex pe-5">
                                <p>x {{ $item->qty }}</p>
                            </div>
                            <div>
                                <p class="my-small-txt pe-4">${{ $item->qty * $item->price }}</p>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
                <div class="info-area">
                    <p class="h4 mb-4">寄送資料</p>
                    <table>
                        <tr>
                            <td>姓名</td>
                            <td>{{ $order->name }}</td>
                        </tr>
                        <tr>
                            <td>電話</td>
                            <td>{{ $order->phone }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $order->email }}</td>
                        </tr>
                        <tr>
                            @if ($order->ship_method == 1)
                                <td>地址</td>
                                <td>{{ $order->addr }}</td>
                            @else
                                <td>超商地址</td>
                                <td>{{ $order->ship_store }}</td>
                            @endif
                        </tr>
                    </table>
                </div>
                <hr>
                <div class="total-area">
                    <div class="d-flex flex-column align-items-end mt-4">
                        <div class="d-flex justify-content-between w-25">
                            <p class="my-total-txt my-light-txt">數量:</p>
                            <p class="fw-bold">{{ $order->qty_all }}</p>
                        </div>
                        <div class="d-flex justify-content-between w-25">
                            <p class="my-total-txt my-light-txt">小計:</p>
                            <p class="fw-bold">${{ $order->subtotal }}</p>
                        </div>
                        <div class="d-flex justify-content-between w-25">
                            <p class="my-total-txt my-light-txt">運費:</p>
                            <p class="fw-bold">${{ $order->ship_fee }}</p>
                        </div>
                        <div class="d-flex justify-content-between w-25">
                            <p class="my-total-txt my-light-txt">總計:</p>
                            <p class="fw-bold">${{ $order->total }}</p>
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <form action="/order/update/{{$order->id}}" method="POST">
                    @csrf
                    <p class="h4 mb-1">訂單狀態</p>
                    <select class="form-select" name="status" id="status">
                        <option value="1" @if($order->status == 1) selected @endif>未付款</option>
                        <option value="2" @if($order->status == 2) selected @endif>已付款</option>
                        <option value="3" @if($order->status == 3) selected @endif>已出貨</option>
                        <option value="4" @if($order->status == 4) selected @endif>已結單</option>
                        <option value="5" @if($order->status == 5) selected @endif>已取消</option>
                    </select>
                    <p class="h4 mb-1 mt-3">訂單備註</p>
                    <textarea class="form-control" name="ps" id="ps" style="height: 100px">{{$order->ps}}</textarea>
                    <div class="next-area">
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="/order" class="btn btn-secondary px-5 my-next-btn">返回</a>
                            <button type="submit" class="btn btn-primary px-5 my-next-btn">修改狀態</button>
                        </div>
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
