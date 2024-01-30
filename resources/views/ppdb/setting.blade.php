@extends('ppdb.layout', ['title' => 'Halaman Data Barang', 'page_heading' => 'Setting Photo Profile'])

@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cek Status</h4>
                        @if(is_null(Auth::user()->image_profile))
                        <img src="{{asset('assets/img/pp.png')}}" alt="" width="150" height="150" style="border-radius:50%; align: center;" class="d-block m-auto">
                        @else
                        <img src="{{asset('assets/img/users/'.Auth::user()->image_profile)}}" alt="" width="150" height="150" style="border-radius:50%; align: center;" class="d-block m-auto">
                        @endif
                        <div class="d-flex justify-content-center mt-2">
                            <a href="{{'/dashboard/setting/upload'}}" class="btn btn-primary">Ubah Foto Profile</a>
                        </div><br>
                        {{-- <div class="d-flex align-items-start justify-content-between">
        @if (Auth::user()->role == 'user')
        @if (is_null($users['image_profile']))
        <img src="{{asset('assets/img/download.png')}}" alt="" srcset="" width="150" height="150" style="border-radius: 50%" class="d-block m-auto">
                        @else
                        <img src="{{asset('assets/img/' .$user['image_profile'])}}" alt="" srcset="" width="150" height="150" style="border-radius: 50%" class="d-block m-auto">
                        @endif
                        <div class="d-flex justify-content-center mt-2">
                            <a href="/todo/setting/upload" class="btn btn-primary">Ubah Foto Profile</a>
                        </div> --}}
                    </div>
                </div>



            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Kamu</h4>
                        <tr>
                            <th width="50%">Nama</th>
                            <td>:</td>
                            <td>{{ $data['s_namalengkap'] }}</td>
                        </tr><br><br>
                        <tr>
                            <th width="50%">Nama Panggilan</th>
                            <td>:</td>
                            <td>{{ $data['s_namapanggilan'] }}</td>
                        </tr><br><br>
                        <tr>
                            <th width="50%">Tempat Tanggal Lahir</th>
                            <td>:</td>
                            <td>{{ $data['s_ttl'] }}</td>
                        </tr><br><br>
                        <tr>
                            <th width="50%">Untuk Perubahan data Silahkan Menghubungi Admin</th>
                        </tr>
                    </div>
                </div>
            </div>
        </div>

        @endsection