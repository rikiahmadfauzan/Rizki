@extends('layout')

@section('content')
{{-- <div class="card-footer p-0 pt-0 border-top-0 bg-transparent">
    <a class="btn btn-outline-warning mt-auto" type="button" data-bs-toggle="modal"
        data-bs-target="#exampleModal" href="">Add to cart</a>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h1 class="tmodal-title fs-5" id="">Formulir Pembeli</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" action="/custumer/create" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama Menu</label>
                            <input type="text" class="form-control" name="namaMenu" id="namaMenu"
                                placeholder="Nama Menu">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga" id="harga"
                                placeholder="Harga Menu" value="{{ $menu->harga }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="namaLengkap"
                                id="namaLengkap" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat"
                                placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label>No Telpon</label>
                            <input type="number" class="form-control" name="noTelpon" id="noTelpon"
                                placeholder="No Telpon">
                        </div>
                        <button type="submit" class="btn btn-outline-warning mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

 <div class="col-12 py-2 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Daftar Menu</h4>
            <table class="table table-responsive">
                <tr>
                    <th class="col col-1">No</th>
                    <th class="col col-3">Nama Menu</th>
                    <th class="col col-3">Harga</th>
                    <th class="col col-3">Nama lengkap</th>
                    <th class="col col-3">Alamat</th>
                    <th class="col col-2">No Telpon</th>
                    <th class="col col-2">Aksi</th>
                </tr>
                @foreach ($custumer as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->namaMenu }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->namaLengkap }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->noTelpon }}</td>
                        <td>
                            <a href="custumer/hapus/{{ $item->id }}" class="btn btn-danger btn-sm">Delete</a>

                            <a href="custumer/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
