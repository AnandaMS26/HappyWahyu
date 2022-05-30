@extends('layouts.checkout')

@section('title', 'Checkout Product')

@section('content')
<div class="main">
    <div class="container" style="width: 80%;">
        <h1 style="color: black">Checkout</h1>
        <div style="background-color: #FC5043; color:white; padding: 5px">
            Your Information
        </div>
        <table>
            <tr>
                <td><b>Name</b></td>
                <td>{{ Auth::user()->username }}</td>
            </tr>
            <tr>
                <td><b>Address</b></td>
                <td>{{ Auth::user()->address }}</td>
            </tr>
        </table>
        <div style="background-color: #FC5043; color:white; padding: 5px">
            Your Product
        </div>
        <?php $no = 1;
        $transaction_total = $item->meat_package->price + 20000;?>
        <table>
            <tr>
                <td><b>No</b></td>
                <td><b>Product</b> </td>
                <td><b>Quantity</b> </td>
                <td><b>Harga</b> </td>
            </tr>
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$item->meat_package->title}}</td>
                <td>1</td>
                <td>Rp {{ $item->meat_package->price }}</td>
            </tr>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td style="width: 7%">Subtotal</td>
                    <td>Rp {{ $item->meat_package->price }}</td>
                </tr>
                <!--<tr>-->
                <!--    <td>Tax</td>-->
                <!--    <td>Rp 20.000</td>-->
                <!--</tr>-->
                <tr>
                    <td><h4>Total</h4></td>
                    <td>Rp {{ $item->meat_package->price }}</td>
                </tr>
            </table>
        </div>
        <hr>
        <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">
                                    Process Payment
                                </a>
                            </div>
        <!--<div class="dropdown">-->
        <!--    <button style="background-color: orangered; color: white; width: 35%; float: right" class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">-->
        <!--      Metode Pembayaran-->
        <!--    </button>-->
        <!--    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">-->
        <!--      <li><a class="dropdown-item" href="#">ATM</a></li>-->
        <!--      <li><a class="dropdown-item" href="#">Gopay</a></li>-->
        <!--    </ul>-->
        <!--  </div>-->
    </div>
</div>
@endsection

@push('prepend-style')
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/style1.css') }}">
@endpush

@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endpush