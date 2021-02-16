@extends('layouts.admin')

@section('content-title','Detail Pesanan')

@section('content')
<div class="container">
    <div style="margin: 4%; margin-top: 2%; margin-bottom: 2%; font-size: 15px">
        <form action="{{ route('admin.order.update', $order) }}" method="POST" style="padding-top: 10px;">
            @csrf
            {{ method_field('PUT') }}
            <h6 style="text-align: center; font-weight: bold;">
                Pesanan #{{ $order->order_number }}
            </h6>
            <hr>
            <div class="pesanan-form">
                <div class="form-group row" style="padding-top: 10px;">
                    <label for="order_date" style="font-size: 15px; width: 150px; padding: 5px"> Tanggal </label>
                    <div class="col-md-8">
                        <input class="form-control" name="order_date" value="{{ $order->order_date}}" readonly>
                    </div>
                </div>
                <div class="form-group row" style="padding-top: 10px;">
                    <label for="user_name" style="font-size: 15px; width: 150px; padding: 5px"> Nama User </label>
                    <div class="col-md-8">
                        <input class="form-control" name="user_name" value="{{ $order->user->name}}" readonly>
                    </div>
                </div>
                <div class="form-group row" style="padding-top: 10px;">
                    <label for="payment_method" style="font-size: 15px; width: 150px; padding: 5px"> Pembayaran </label>
                    <div class="col-md-8">
                        <input class="form-control" name="payment_method" value="{{ $order->payment_method}}" readonly>
                    </div>
                </div>
                <div class="form-group row" style="padding-top: 10px;">
                    <label for="status" style="font-size: 15px; width: 150px; padding: 5px"> Status Pesanan </label>
                    @if($order->status == '1')
                    <div class="col-md-8" style="margin-bottom: 30px;">
                        <input class="form-control" name="status" value="Pesanan Selesai" readonly>
                    </div>
                </div>
                @else
                <div class="col-md-8">
                    <select class=" form-control" name="status" id="status">
                        <option name="status" value="1" style="font-size: 15px;" {{ $order->status == '1' ? 'selected' : ''}}> Pesanan Selesai</option>
                        <option name="status" value="2" style="font-size: 15px;" {{ $order->status == '2' ? 'selected' : ''}}> Pesanan Sedang di Proses </option>
                        <option name="status" value="3" style="font-size: 15px;" {{ $order->status == '3' ? 'selected' : ''}}> Pesanan Harus di Proses </option>
                    </select>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-secondary" style="margin-top: 30px; margin-bottom: 30px"> Simpan </button>
            </div>
            @endif

        </form>
        <hr>
        <h6 style="text-align: center; font-weight: bold;">
            Pesanan
        </h6>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" style="text-align: center;"> No. </th>
                    <th scope="col" style="text-align: center;"> Menu </th>
                    <th scope="col" style="text-align: center;"> Jumlah </th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $index => $datas)
                <tr>
                    <th scope="row" style="text-align: center;"> {{ $index+1 }} </th>
                    <td> {{ $datas->name }} </td>
                    <td style="text-align: center;"> {{ $datas->quantity }} </td>
                </tr>
                @endforeach
                <tr>
                    <th colspan="2" style="text-align: right;"> Subtotal </th>
                    <td style="text-align: right;"> {{ $order->billing_subtotal }} </td>
                </tr>
                <tr>
                    <th colspan="2" style="text-align: right;"> Pajak </th>
                    <td style="text-align: right;"> {{ $order->billing_tax }} </td>
                </tr>
                <tr>
                    <th colspan="2" style="text-align: right;"> Total </th>
                    <td style="text-align: right;"> {{ $order->billing_total }} </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection