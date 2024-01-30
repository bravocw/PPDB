@extends('ppdb.layout', ['page_heading' => 'All Data Siswa'])

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
                                    <th>Kode Daftar</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->kode_daftar }}</td>
                                    <td>{{ $user->s_namalengkap }}</td>
                                    @if($user->status == 1)
                                    <td>
                                        <span class="badge badge-pill badge-success" data-toggle="tooltip" data-placement="top" title="Lulus">Lulus</span>
                                    </td>
                                    @elseif($user->status == 2)
                                    <td>
                                        <span class="badge badge-pill badge-danger" data-toggle="tooltip" data-placement="top" title="Tidak Lulus">Tidak Lulus</span>
                                    </td>
                                    @else
                                    <td>
                                        <span class="badge badge-pill badge-secondary" data-toggle="tooltip" data-placement="top" title="Diproses">Diproses</span>
                                    </td>
                                    @endif
                                    <td>
                                        <a href="{{ route('siswa.edit', $user->id) }}" button type="button" class="btn btn-dark btn-icon-text btn-sm">
                                            Detail
                                            <i class="typcn typcn-document btn-icon-append"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
    @endsection