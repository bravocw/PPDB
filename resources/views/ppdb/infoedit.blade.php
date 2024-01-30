@extends('ppdb.layout', ['title' => 'Halaman Data Barang', 'page_heading' => 'Edit Pengumuman'])

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Informasi</h4>
                        <form action="{{ route('informasi.update', $info->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputName1">Judul Besar</label>
                                <input type="text" class="form-control" name="headline" value="{{ $info->headline }}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Isi Informasi</label>
                                <input type="text" class="form-control" name="news" value="{{ $info->news }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Tanggal</label>
                                <input type="date" class="form-control" name="tgl_akhir" value="{{ $info->tgl_akhir }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection