@extends('layouts.app')

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
    <div class="row justify-content-center">
            <div class="col-md-12 mb-3">
                <h2 class="section-title text-center font-alt mb-100 mb-sm-50"> NA BOX inventory</h2><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                <div class="middle">
                <a class="btn" href="/barang">
                    <i class="fas fa-box-open"></i>
                </a>
                <a class="btn" href="/calculator">
                    <i class="fas fa-calculator"></i>
                </a>
                <br/><br/><br/>
                <a class="btn" href="/kontak">
                    <i class="far fa-id-card"></i>
                </a>
                <a class="btn" href="/statistik">
                    <i class="fas fa-chart-pie"></i>
                </a>
                </div>
        </div>
    </div>



        </body>
</html>
@endsection


