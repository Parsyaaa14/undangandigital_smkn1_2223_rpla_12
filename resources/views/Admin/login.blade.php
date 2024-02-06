<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
    {{-- <link rel="stylesheet" href="app.css"> --}}
</head>
<body>
    <div class="container">
        <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h1>Radosya Shop</h1>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="Password" placeholder="Password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Login</button>
                        {{-- <btn class="btn  btn-success">Login </btn> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>