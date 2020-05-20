@extends('layouts.app')

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <!-- CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link rel="stylesheet" href="{{asset('css/home.css')}}">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- Styles -->
        <style>
            html, body{
                background-image: url("images/images.jpeg");
                color: rgb(228, 149, 31);
                font-family: 'fantasy';
                
            }
            h4 {
                width:100%;
                color: blacl;
                font-size: 40px;
                font-family: audiowide;
                line-height: 10px;
            }
            h2, h3 {
                width:100%;
                color:  #7184f1;
                font-size: 60px;
                font-family: audiowide;
                line-height: 30px;
            }
        </style>

<body>
@section('content')
        
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
                    
    <div class="row justify-content-center">
        <div class="col-md-12 mb-3">
            <h1 class="section-title text-center font-alt mb-100 mb-sm-50">NaBox Inventory </h1>
            <h2 class="section-title text-center font-alt mb-100 mb-sm-90">your inventory partner</h2>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <div class="middle">
                <a class="btn" href="/barang">
                    <i class="fas fa-box-open"></i>
                    <h4> Stok Barang</h4>
                </a>
                <a class="btn" href="/calculator">
                    <i class="fas fa-calculator"></i>
                    <h4> Kalkulator Pintar</h4>
                </a>
                <br/><br/>
                <a class="btn" href="/kontak">
                    <i class="far fa-id-card"></i>
                    <h4> Kontak Pemasok</h4>
                </a>
                <a class="btn" href="/statistik">
                    <i class="fas fa-chart-pie"></i>
                    <h4> Statistik Penjualan</h4>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
@endsection


