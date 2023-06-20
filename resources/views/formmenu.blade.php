@extends('layout')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Menu</h4>
                <form class="forms-sample" action="{{ $action }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Kode Menu</label>
                        <input type="text" class="form-control" readonly name="idMenu" id="idMenu" value="{{ $menu->idMenu }}">
                    </div>
                    <div class="form-group">
                        <label>Nama Menu</label>
                        <input type="text" class="form-control" name="namaMenu" id="namaMenu" value="{{ $menu->namaMenu }}"
                            placeholder="Nama Menu">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-select" name="kategori" id="kategori">
                            <option value="{{ $menu->kategori }}"></option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" class="form-control" name="harga" id="harga" value="{{ $menu->harga }}"
                            placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <label">Upload Foto Menu</label>
                            <div class="input-group col-xs-12">
                                @if (file_exists('storage/' . $menu->fotoMenu))
                                <img src="/storage/{{ $menu->fotoMenu}}" alt="100" width="100" height="100">
                                 @endif
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <input type="file" name="fotoMenu" id="fotoMenu" width="100" height="100" class="form-control bg-primary">
                                </span>
                            </div>
                    </div>
                    {{-- <div class="form-group">
                        <label>Deskripsi Menu</label>
                        <textarea class="form-control" name="desMenu" id="desMenu" rows="4" placeholder="Deskripsi Menu">{{ $menu->desMenu}}</textarea>
                    </div> --}}
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
