{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>


<body>

    <div class="container py-5 w-25">
            <div class="card mt-5 flex-fill" style="max-width: 20rem;">
                <h3 class="text-center pt-2">LOGIN</h3>
                <form action="/auth" method="post">
                    @csrf
                    <div class="mx-3  mt-4">
                         <input  type="email" class="form-control" name="email" id="email" placeholder="Email address">
                         <div class="mt-3">
                         <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                         </div>
                        <div class="row mt-4 mb-4">
                            <div class="col d-flex justify-content-center">
                            </div>
                        </div>
                            <button type="submit" class="btn btn-sm btn-primary  col col-12">SIGN IN</button>
                            <div class="text-center"><br>
                                <p>Not a register? <a href="/daftar"  class="text-decoration-none">Register</a></p>
                            </div>
                    </div>
                </form>
            </div>
    </div>

</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('dashboard') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/vendors/base/vendor.bundle.base.css">

    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/style.css">

    <link rel="shortcut icon" href="{{ asset('dashboard') }}/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light rounded-3 text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">

                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form class="pt-3" action="/auth" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" name="email"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password"
                                        placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-sm btn-primary  col col-12">SIGN IN</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account?<a href="/daftar" class="text-decoration-none">Register</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('dashboard') }}/vendors/base/vendor.bundle.base.js"></script>

    <script src="{{ asset('dashboard') }}/js/off-canvas.js"></script>
    <script src="{{ asset('dashboard') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('dashboard') }}/js/template.js"></script>

</body>

</html>
