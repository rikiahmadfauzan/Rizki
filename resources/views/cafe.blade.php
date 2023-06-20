@extends('nav')

@section('conten')
    <!-- Header-->
    <header class="py-3 ">
        <div class="container px-4 px-lg-5 my-1">
            <img src="assets/img/Bg.jpg" class="rounded-3 w-100 h-100 img-fluid" alt="...">
        </div>
    </header>

    <!-- Section-->

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($menu as $item)
                    <div class="col mb-5">
                        <!-- Product image-->

                        <div class="card h-100">

                            <img class="card-img-top" src="/storage/{{ $item->fotoMenu }}" alt="menu" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $item->namaMenu }}</h5>
                                    <!-- Product price-->
                                    Rp. {{number_format($item->harga) }}
                                </div>
                            </div>

                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-warning mt-auto" href="cafe/edit/{{ $item->id }}">View options</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
