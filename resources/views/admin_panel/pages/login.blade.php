<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('login.css') }}">
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('common/fav.png') }}"> --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('common/favicon.png') }}">
    <title>The Journal 24 | Log In</title>
</head>

<body>
    {{-- <div class="container-fluid ps-md-0"> --}}
    <div class="row g-0">
        {{-- <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div> --}}
        <div class="col-12">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-5 mx-auto">
                            {{-- <h3 class="login-heading mb-4">Welcome back!</h3> --}}
                            <div class="text-center">
                                <a href="/">
                                    <img class="pb-5 " src="{{ asset('necessary_assets/pics/header_logo.png') }}"
                                        alt="Logo here" style="width: 50%;">
                                </a>
                            </div>
                            <!-- Sign In Form -->
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" name="email">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                @if (session()->has('email_error'))
                                    <p class="text-danger">{{ session()->get('email_error') }}</p>
                                @enderror
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password" name="password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                @if (session()->has('password_error'))
                                    <p class="text-danger">{{ session()->get('password_error') }}</p>
                                @enderror
                                <div class="row">
                                    <!-- /.col -->
                                    <div class="col-12 text-center text-danger">
                                        @if (session()->has('message'))
                                            <div class="alert alert-warning alert-dismissible fade show"
                                                role="alert">
                                                <strong>{{ session()->get('message') }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif
                                    </div>
                                    <!-- /.col -->
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2"
                                        type="submit">Sign in</button>
                                </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!-- jQuery -->
<script src="{{ asset('backend_assets/plugins/jquery/jquery.min.js') }}"></script>

</body>

</html>
