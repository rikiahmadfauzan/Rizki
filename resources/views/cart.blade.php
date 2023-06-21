<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop | Alex</title>
    <!-- Favicon-->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets') }}/css/styles.css" rel="stylesheet" />
</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop | Alex</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets') }}/css/styles.css" rel="stylesheet" />
</head>

<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand fw-bold fst-italic" href="#!">My <span class="text-white">Cart</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            </button>
        </div>
    </nav>





    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">
                 @php
                      $total = 0
                 @endphp
                    @foreach ($cart as $item)
                        <form class="forms-sample" action="/cart/create/{{ $item->idMenu }}" method="post">
                            @csrf
                            <div class="card rounded-3 mb-2">
                                <div class="card-body p-4">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            @if (file_exists('storage/' . $item->fotoMenu))
                                                <img src="/storage/{{ $item->fotoMenu }}" height="100" width="100">
                                            @endif
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <p class="lead fw-normal mb-2">{{ $item->namaMenu }}</p>
                                            <label for="">{{ $item->kategori }}</label><br>
                                            <label for="">Price : {{ $item->harga }}</label>
                                        </div>

                                        <div class="col-md-5 col-lg-5 col-xl-2 d-flex">
                                            <button class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                <i class="mdi mdi-minus"></i>
                                            </button>
                                            <input id="form1" min="0" name="jumlah" type="number"
                                                class="form-control form-control-sm" value="{{ $item->jumlah }}" readonly/>

                                            <button class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                <i class="mdi mdi-plus"></i>
                                            </button>
                                        </div>
                        </form>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h5 class="mb-0">Rp. {{number_format($item->totalHarga) }}</h5>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <a href="/cart/hapus/{{ $item->id }}" class="btn btn-danger btn-sm">Delete</i></a>
                        </div>
                </div>
            </div>
        </div>

          @php
              $total += ($item->harga * $item->jumlah)
          @endphp

        @endforeach

        <div class="row">
            <div class="col-md-8 my-auto mt-3">
                <h6 class="mb-2"><a href="/cafe" class="text-body">
                    <i class="fas fa-long-arrow-alt-left me-2"></i>Back to menu</a></h6>
            </div>
            <div class="col-md-4 mt-3">
                <div class="shadow-sm bg-white p-3">
                    <h4>
                        Total :<span class="float-end" id="gtotal">{{number_format($total) }}</span>
                    </h4>
                    <hr>
                    <a href="/pesanan" class="btn btn-warning w-100">Checkout</a>
                </div>
            </div>
        </div>
        {{-- <script>
            gt = 0;
            var harga=document.getElementById("harga");
            var jumlah=document.getElementById("jumlah");
            var totalHarga=document.getElementById("totalHarga");
            var gtotal=document.getElementById("gtotal");


            function subTotal(){
                gt=0;
                for(i=0<harga.lenght;i++){
                    totalHarga[i].innerText=(Harga[i].value)*(jumlah[i].value);
                    gt=gt+(Harga[i].value)*(jumlah[i].value);
                }
                gtotal.innerText=gt;
            }
            subTotal();

        </script> --}}

    </section>


    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">
                Copyright &copy; rikiahamadfauzan 2023
            </p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>


<body>
