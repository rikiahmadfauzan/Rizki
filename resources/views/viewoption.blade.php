@extends('nav')

@section('conten')
    <section class="py-3">

        <div class="container px-4 px-lg-5 my-3">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    @if (file_exists('storage/' . $menu->fotoMenu))
                        <img class="card-img-top" src="/storage/{{ $menu->fotoMenu }}" />
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="small mb-1">MENU {{ $menu->id }}</div>
                    <h1 class="display-5 fw-bolder">{{ $menu->namaMenu }}</h1>
                    <div class="fs-5 mb-5">
                        <span>Rp. {{number_format($menu->harga) }}</span>
                    </div>
                    <form class="forms-sample" action="/cart/create/{{ $menu->idMenu }}" method="post">
                        @csrf
                        <div class="col-md-3 col-lg-2 col-xl-3 d-flex">
                            <a class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="mdi mdi-minus"></i>
                            </a>
                            <input id="form1" min="0" name="jumlah"
                                type="number" value="1" class="form-control form-control-sm" />

                            <a class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="mdi mdi-plus"></i>
                            </a>

                        </div>
                        <div class="card-footer p-0 pt-2 border-top-0 bg-transparent">
                            <button type="submit" class="btn btn-outline-warning mt-auto">Add to
                                cart</button>
                        </div>


                        {{-- <div class="form-group col-4">
                            <label>Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" id="jumlah">
                        </div> --}}
                        {{-- <div class="form-group col-4">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga" id="harga">
                        </div> --}}
                        {{-- <div class="card-footer p-0 pt-2 border-top-0 bg-transparent">
                            <a class="btn btn-outline-warning mt-auto">Add to
                                cart</a>
                        </div> --}}

                    </form>
                </div>
            </div>
    </section>
    <!-- Section-->

    {{-- <section class="py-5">
              <div class="container px-4 px-lg-5 mt-5">
                  <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                      @foreach ($menu as $item)
                      <div class="col mb-5">
                          <!-- Product image-->

                          <div class="card h-100">

                              <img class="card-img-top" src="/storage/{{ $item->fotoMenu }}" alt="menu1" />
                              <!-- Product details-->
                              <div class="card-body p-4">
                                  <div class="text-center">
                                      <!-- Product name-->
                                      <h5 class="fw-bolder">{{ $item->namaMenu }}</h5>
                                      <!-- Product price-->
                                      {{ $item->harga }}
                                  </div>
                              </div>

                              <!-- Product actions-->
                              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                  <div class="text-center">
                                      <a class="btn btn-outline-warning mt-auto" href="/viewoption">View options</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endforeach
                  </div>
              </div>
          </section> --}}
@endsection
