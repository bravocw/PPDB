@extends('ppdb.layout', ['title' => 'Halaman Data Barang', 'page_heading' => 'Main Dashboard'])

@section('content')


@if (auth()->user()->role == 'admin')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <p>Daftar Calon Siswa Baru</p>
                <div class="card">
                    <div class="table-responsive pt-3">
                        <table class="table table-striped project-orders-table">
                            <thead>
                                <tr>
                                    <th class="ml-5">ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ \Carbon\Carbon::parse($user['created_at'])->format('j F, Y') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Berita &amp; Informasi</div>
                </div>
                <div class="card-body">
                    @foreach($info as $user)
                    <b><i class="far fa-calendar-alt mr-2"></i>{{ $user->headline }} | UPDATE</b><br>[ {{ $user->tgl_akhir }} ]
                    <a href="{{ route('informasi.edit', $user->id) }}" button type="button" class="btn btn-dark btn-icon-text btn-sm">
                        Edit
                        <i class="typcn typcn-document btn-icon-append"></i>
                    </a>
                    <br>
                    <br>
                    {{ $user->news }}
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @endif
    @if (auth()->user()->role == 'user')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-xl-6 grid-margin stretch-card flex-column">
                    <h5 class="mb-2 text-titlecase mb-4">Pengumuman</h5>
                    <div class="row h-100">
                        <div class="col-md-12 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start flex-wrap">
                                        <div>
                                            @php
                                            $user = $info->where('id', 2)->first();
                                            @endphp
                                            @if($user)
                                            <h2>{{ $user->headline }}</h2>
                                            <p class="mb-3">{{ $user->tgl_akhir }}</p>
                                            <h6>{{ $user->news }}</h6>
                                            @endif
                                        </div>
                                        <div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 grid-margin stretch-card flex-column">
                    <h5 class="mb-2 text-titlecase mb-4">Kartu Ujian</h5>
                    <div class="row">
                        <div class="col-md-12 stretch-card">
                            <div class="card">
                                <div class="card-body d-flex flex-column justify-content-left">
                                    <br>

                                    <a href="/printkartu" type="button" class="btn btn-info" href><br>
                                        <h3>Download Kartu Ujian!</h3><br>
                                    </a>
                                    </a>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        @endif

        @endsection