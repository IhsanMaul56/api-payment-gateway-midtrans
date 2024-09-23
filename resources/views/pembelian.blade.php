<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buah-buahan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 20px;
            transition: transform 0.2s;
            height: 100%;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-title {
            color: #007bff;
        }
        .card-text {
            color: #6c757d;
        }
        .container {
            margin-top: 50px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #343a40;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <h1>Data Buah-buahan</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{ asset('assets/img/apel.jpeg') }}" class="card-img-top" alt="Apel">
                    <div class="card-body">
                        <h5 class="card-title">Apel</h5>
                        <p class="card-text">Buah apel yang segar dan manis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{ asset('assets/img/pisang.jpeg') }}" class="card-img-top" alt="Pisang">
                    <div class="card-body">
                        <h5 class="card-title">Pisang</h5>
                        <p class="card-text">Buah pisang yang kaya akan potasium.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{ asset('assets/img/jeruk.jpeg') }}" class="card-img-top" alt="Jeruk">
                    <div class="card-body">
                        <h5 class="card-title">Jeruk</h5>
                        <p class="card-text">Buah jeruk yang kaya akan vitamin C.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>