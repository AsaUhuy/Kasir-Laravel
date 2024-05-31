<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://source.unsplash.com/featured/?halal') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 400px;
            margin-top: 50px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.8); /* Mengatur transparansi kartu */
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
            text-align: center;
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: 500;
        }

        .form-control {
            border-radius: 20px;
        }

        .btn-primary {
            border-radius: 20px;
            padding: 12px 20px;
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .register-link a {
            color: #007bff;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-user"></i> Register User</h3>
            </div>
            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                <form action="{{route('actionregister')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required="">
                    </div>
                    <div class="form-group">
                        <label for="name"><i class="fas fa-user"></i> Username</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your username" required="">
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fas fa-key"></i> Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password" required="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-user"></i> Register</button>
                </form>
                <hr>
                <p class="text-center register-link">{{ __('bahasa.r_akun') }}<a href="/login">{{ __('bahasa.l_here') }}</a></p>
            </div>
        </div>
    </div>
</body>
</html>
