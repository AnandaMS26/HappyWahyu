<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Detail Order</title>
</head>
<body>
    <div class="header">
        @include('../includes/navbar')
    </div>

    <!-- Content -->
    <div class="main">
        <h3 class="detail-order-title">Detail Order</h3>
        <div class="col-md-5 detail-order">
            <div class="order-content">
                <h5>Order ID</h5>
                <p>{{ ASDFGHJKL123 }}</p>
            </div>
            <div class="order-content">
                <h5>Nama</h5>
                <p>{{ Auth::user()->username }}</p>
            </div>
            <div class="order-content">
                <h5>Alamat</h5>
                <p>{{ Auth::user()->address }}</p>
            </div>
            <div class="order-content">
                <h5>Produk</h5>
                <p>{{ $item->meat_package->title }}</p>
            </div>
            <div class="order-content">
                <h5>Jumlah</h5>
                <p>2</p>
            </div>
            <div class="order-content">
                <h5>Total Harga</h5>
                <p>Rp. 40000</p>
            </div>
            <div class="order-content">
                <h5>Pembayaran</h5>
                <p>Gopay</p>
            </div>
            <div class="order-content">
                <h5>Status</h5>
                <p>Shipping</p>
            </div>
            <div class="order-content">
                <h5>Tanggal Pembelian</h5>
                <p>23 - 03 - 2022</p>
            </div>
            <!-- <button>Cancel Order</button> -->
        </div>
    </div>
</body>
</html>