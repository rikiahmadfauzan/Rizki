@extends('nav')
@section('conten')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
    </head>

    <body class="bg-light">

        <div class="container">
            <div class="row mt-4 mb-2">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/cafe" class="text-dark">Menu</a></li>
                            <li class="breadcrumb-item"><a href="/cart" class="text-dark">Cart</a></li>
                            <li class="breadcrumb-item active" aria-current="page">CheckOut</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="/cart" class="btn btn-sm btn-dark"><i class="mdi mdi-arrow-left"></i></a>
                </div>
            </div>
            <div class="py-5 text-center">
                <h2>Checkout form</h2>
            </div>
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">DUKA</span>
                    </h4>
                    <ul class="list-group mb-3">

                        @php
                            $total = 0;
                        @endphp

                        @foreach ($cart as $item)
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    @if (file_exists('storage/' . $item->fotoMenu))
                                        <img src="/storage/{{ $item->fotoMenu }}" height="50" width="50">
                                    @endif
                                </div>
                                <div>
                                    <h6>{{ $item->namaMenu }}</h6>
                                    <small>Price :{{ number_format($item->harga) }}</small>
                                </div>
                                <div class="text-success">
                                    <h6 class="my-0"><span
                                            class="text-muted">{{ number_format($item->totalHarga) }}</span></h6>
                                    <small class="float-end">x{{ $item->jumlah }}</small>
                                </div>
                                @php
                                    $total += $item->harga * $item->jumlah;
                                @endphp
                        @endforeach
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total ($)</span>
                            <strong>{{ number_format($total) }}</strong>
                        </li>
                    </ul>

                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Billing address</h4>
                    @php
                        $random = mt_rand(1000, 9999);
                    @endphp
                    @foreach ($cart as $item)
                        <form class="needs-validation" novalidate method="post"
                            action="/chekout/create/{{ $random }}/{{ $item->id }}/{{ $total }}">
                            @csrf
                    @endforeach
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">First name</label>
                            <input type="text" name="firstName" class="form-control" id="firstName" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Last name</label>
                            <input type="text" name="lastName" class="form-control" id="lastName" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Username" required>
                                <div class="invalid-feedback">
                                    Your username is required.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span
                                    class="text-muted">(Optional)</span></label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="address"
                                placeholder="" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>


                    </div>


                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="cc-name" class="form-label">Name on card</label>
                            <input type="text" name="payment" class="form-control" id="cc-name" placeholder=""
                                required>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label for="cc-number" class="form-label">Credit card number</label>
                            <input type="text" class="form-control" name="noCard" id="cc-number" placeholder=""
                                required>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>
            </main>
        </div>
    @endsection
