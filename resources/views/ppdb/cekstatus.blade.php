@extends('ppdb.layout', ['page_heading' => 'Cek Status'])

@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cek Status</h4>
                        <p class="card-description">
                            Cek status kelulusan anda secara berkala.
                        </p>
                        <form action="/cekstatus" method="post">
                            @csrf
                            <div class="col">
                                <label>Kode Pendaftaran</label>
                                <div id="kode_daftar">
                                    <input class="typeahead" type="text" placeholder="#815427" id="kode_daftar" name="kode_daftar" required>
                                </div>
                            </div><br>
                            <button type="submit" class="btn btn-primary mr-2">Cek Status</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Hasil Pengecekan</h4>
                        @if(isset($ppdb))

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $ppdb->s_namalengkap }}</td>

                                    @if($ppdb->status == 1)
                                    <td>
                                        <span class="badge badge-pill badge-success" data-toggle="tooltip" data-placement="top" title="Lulus">Lulus</span>
                                    </td>
                                    @elseif($ppdb->status == 2)
                                    <td>
                                        <span class="badge badge-pill badge-danger" data-toggle="tooltip" data-placement="top" title="Tidak Lulus">Tidak Lulus</span>
                                    </td>
                                    @else
                                    <td>
                                        <span class="badge badge-pill badge-secondary" data-toggle="tooltip" data-placement="top" title="Diproses">Diproses</span>
                                    </td>
                                    @endif

                                </tr>
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>

    @endsection