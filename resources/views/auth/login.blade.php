<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-alpha.14
* @link https://tabler.io
* Copyright 2018-2020 The Tabler Authors
* Copyright 2018-2020 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign in - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="{{ 'tabler/dist/css/tabler.min.css' }}" rel="stylesheet" />
    <link href="{{ 'tabler/dist/css/tabler-flags.min.css' }}" rel="stylesheet" />
    <link href="{{ 'tabler/dist/css/tabler-payments.min.css' }}" rel="stylesheet" />
    <link href="{{ 'tabler/dist/css/tabler-vendors.min.css' }}" rel="stylesheet" />
    <link href="{{ 'tabler/dist/css/demo.min.css' }}" rel="stylesheet" />
    <style>
        body {
            display: none;
        }
    </style>
</head>

<body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center py-4">
        <div class="container-tight py-6">
            <div class="text-center mb-4">
                {{-- <a href="."><img src="./static/logo.svg" height="36" alt=""></a> --}}
                <h1 style="font-family:'Tahoma', Geneva, Verdana, sans-serif;font-size:40px;font-weight:800;">PEPNDURA
                </h1>
            </div>
            <form class="card card-md" action="{{ route('login.store') }}" method="get" autocomplete="off">
                @csrf
                @method('post')
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Login to your account</h2>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Enter email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password
                            <span class="form-label-description">
                                <a href="./forgot-password.html">I forgot password</a>
                            </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                autocomplete="off">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                        <br>
                    </div>
                    <a href="/" style="margin-top: 10px"><- back</a>
                </div>
            </form>
        </div>
    </div>
    <!-- Libs JS -->
    <script src="{{ 'tabler/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js' }}"></script>
    <!-- Tabler Core -->
    <script src="{{ 'tabler/dist/js/tabler.min.js' }}"></script>
    <script>
        document.body.style.display = "block"
    </script>
</body>

</html>
