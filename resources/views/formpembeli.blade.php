{{-- @extends('nav')

@section('conten')
    <h3 class="text-center">Data Menu</h3>
    <button type="button" class="btn btn-primary mt-2 btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="">Tambah Data Menu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" action="/menu/create" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Kode Menu</label>
                            <input type="number" class="form-control" name="idMenu" id="idMenu"
                                placeholder="Kode Menu">
                        </div>
                        <div class="form-group">
                            <label>Nama Menu</label>
                            <input type="text" class="form-control" name="namaMenu" id="namaMenu"
                                placeholder="Nama Menu">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga" id="harga"
                                placeholder="Harga Menu">
                        </div>
                        <div class="form-group">
                            <label">Upload Menu</label>
                                <div class="input-group col-xs-12">

                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <input type="file" name="fotoMenu" id="fotoMenu" width="" height=""
                                            class="form-control bg-primary">
                                    </span>
                                </div>
                        </div>
                        {{-- <div class="form-group">
                            <label>Deskripsi Menu</label>
                            <textarea class="form-control" name="desMenu" id="desMenu" rows="4" placeholder="Deskripsi Menu"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
@extends('layout')

@section('content')
<form class="forms-sample" action="/pembeli/create" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama Menu</label>
                            <input type="text" class="form-control" name="namaMenu" id="namaMenu"
                                placeholder="Nama Menu">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga" id="harga"
                                placeholder="Harga Menu">
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
                @foreach ($pembeli as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->namaMenu }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->namaLengkap }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->noTelpon }}</td>
                        <td>
                            <a href="pembeli/hapus/{{ $item->id }}" class="btn btn-danger btn-sm">Delete</a>

                            <a href="pembeli/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div> 
@endsection
