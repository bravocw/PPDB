@extends('ppdb.layout', ['title' => 'Halaman Data Barang', 'page_heading' => 'Update Profile'])

@section('content')
<div class="container pt-5">
    <div class="card d-block m-auto p-3">
        <form action="{{route('dashboard.setting.change')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group mb-3">
                <label for="image_upload">Pilih Gambar</label>
                <input type="file" name="image_profile" class="form-control" id="image_upload">
            </div>
            <button type="submit" class="btn btn-primary me-3">Ubah</button>
            <a href="/dashboard/setting" class="btn btn-secondary">Kembali</a>
    </div>
    </form>
</div>
</div>
@endsection