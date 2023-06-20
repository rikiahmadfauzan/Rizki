@extends('layout')

@section('content')
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
                            <input type="text" class="form-control" name="idMenu" id="idMenu"
                                placeholder="Kode Menu">
                        </div>
                        <div class="form-group">
                            <label>Nama Menu</label>
                            <input type="text" class="form-control" name="namaMenu" id="namaMenu"
                                placeholder="Nama Menu">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-select" name="kategori" id="kategori">
                                <option value="Kategori"></option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga" id="harga"
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
                        </div> --}}
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 py-2 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Menu</h4>
                <table class="table table-responsive">
                    <tr>
                        <th class="col col-1">No</th>
                        <th class="col col-2">Kode Menu</th>
                        <th class="col col-3">Nama Menu</th>
                        <th class="col col-3">Kategori</th>
                        <th class="col col-3">Harga</th>
                        <th class="col col-3">Foto Menu</th>
                        <th class="col col-2">Aksi</th>
                    </tr>
                    @foreach ($menu as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->idMenu }}</td>
                            <td>{{ $item->namaMenu }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->harga }}</td>
                            <td><img src="/storage/{{ $item->fotoMenu }}"width="100" height="100"></td>
                            <td>
                                <a href="menu/hapus/{{ $item->id }}" class="btn btn-danger btn-sm">Delete</a>

                                <a href="menu/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
