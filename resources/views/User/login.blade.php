<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Barang</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden; /* Menghilangkan scroll */
        }
        body {
            background-color: #f0f5ff; /* Biru muda */
            font-family: Arial, sans-serif;
            background-image: url('https://source.unsplash.com/featured/?halal'); /* Gambar latar belakang acak dari Unsplash dengan kata kunci 'halal' */
            background-size: cover;
            background-position: center;
            padding: 40px 0; /* Padding tambahan di atas dan bawah */
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%; /* Mengisi tinggi layar */
        }
        .login-box {
            background-color: rgba(255, 255, 255, 0.9); /* Putih dengan transparansi */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);
            width: 350px;
            max-width: 100%; /* Mengikuti lebar layar */
            position: relative; /* Diperlukan untuk animasi */
        }
        .login-box h2 {
            text-align: center;
            color: #007bff; /* Biru */
            margin-bottom: 30px;
        }
        .login-box label {
            color: #007bff; /* Biru */
        }
        .login-box .btn-primary {
            background-color: #007bff; /* Biru */
            border-color: #007bff; /* Biru */
        }
        .login-box .btn-primary:hover {
            background-color: #0056b3; /* Biru tua saat hover */
            border-color: #0056b3; /* Biru tua saat hover */
        }
        .register-link {
            text-align: center;
        }
        .register-link a {
            color: #007bff; /* Biru */
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
        /* Animasi keranjang */
        .cart-animation {
            position: relative;
            animation: cart-bounce 0.5s;
        }
        @keyframes cart-bounce {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
            100% {
                transform: translateY(0);
            }
        }

        /* Animasi dekoratif di border */
        @keyframes border-glow {
            0% {
                box-shadow: 0 0 5px #007bff, 0 0 10px #007bff, 0 0 15px #007bff;
            }
            50% {
                box-shadow: 0 0 15px #007bff, 0 0 20px #007bff, 0 0 25px #007bff;
            }
            100% {
                box-shadow: 0 0 5px #007bff, 0 0 10px #007bff, 0 0 15px #007bff;
            }
        }
        .border-animation {
            animation: border-glow 2s infinite alternate;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box cart-animation border-animation">
            <h2><b>Asavan</b><br>Ngabuburit Ngoding</h2>
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">{{ __('bahasa.masuk') }}</button>
                <div class="register-link">
                    <p>{{ __('bahasa.tdk_akun') }} <a href="/register">{{ __('bahasa.daftar') }}</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
