@extends('ppdb.layout', ['title' => 'Halaman Data Barang', 'page_heading' => 'Detail Siswa Baru'])

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        @if (Session::get('success'))
                        <div class="alert alert-success w-75">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
                        <h4 class="card-title">Lengkapi Data Diri Anda!</h4>
                        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <p class="card-description">
                                Personal info
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="{{ $siswa->s_namalengkap }}" id="s_namalengkap" name="s_namalengkap" value="{{ $siswa->s_namalengkap }}" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Panggilan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Budi" id="s_namapanggilan" name="s_namapanggilan" value="{{ $siswa->s_namapanggilan }}" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Budi" id="s_namapanggilan" name="s_namapanggilan" value="{{ $siswa->s_jk }}" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" placeholder="Pekanbaru, 04 Juli 2008" id="s_ttl" name="s_ttl" value="{{ $siswa->s_ttl }}" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" placeholder="" id="" name="" value="{{ $siswa->s_agama }}" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Tempat Tinggal</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" placeholder="Jalan mangga No 17, Pekanbaru Riau" id="s_ttinggal" name="s_ttinggal" value="{{ $siswa->s_ttinggal }}" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Asal Sekolah</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" placeholder="SMP 5 PEKANBARU" id="s_sklhlama" name="s_sklhlama" value="{{ $siswa->s_sklhlama }}" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="card-description">
                                Orang Tua / Wali Laki - Laki
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Antony Hermawan" id="otl_nama" name="otl_nama" value="{{ $siswa->otl_nama }}" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Pekanbaru, 5 Juni 1989" id="otl_ttl" name="otl_ttl" value="{{ $siswa->otl_ttl }}" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Karyawan Swasta" id="otl_pekerjaan" name="otl_pekerjaan" value="{{ $siswa->otl_pekerjaan }}" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pendidikan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Karyawan Swasta" id="otl_pekerjaan" name="otl_pekerjaan" value="{{ $siswa->otl_pendidikan }}" disabled />
                                        </div>>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Karyawan Swasta" id="otl_pekerjaan" name="otl_pekerjaan" value="{{ $siswa->otl_agama }}" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="card-description">
                                Orang Tua / Wali Perempuan
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Antony Hermawan" id="otp_nama" name="otp_nama" value="{{ $siswa->news }}" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Pekanbaru, 5 Juni 1989" id="otp_ttl" name="otp_ttl" value="{{ $siswa->otp_ttl }}" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Karyawan Swasta" id="otp_pekerjaan" name="otp_pekerjaan" value="{{ $siswa->otp_pekerjaan }}" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pendidikan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Karyawan Swasta" id="otp_pekerjaan" name="otp_pekerjaan" value="{{ $siswa->otp_pendidikan }}" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Karyawan Swasta" id="otp_pekerjaan" name="otp_pekerjaan" value="{{ $siswa->otp_agama }}" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Upload File Pendukung</label>
                                <div class="input-group col-xs-12">
                                    <div class="col-sm-9">
                                        <a href="{{ asset('/assets/img/dokumen/' . $siswa->image_dokumen) }}" alt="Dokumen Siswa" target="_blank">
                                            <input type="text" class="form-control" placeholder="Karyawan Swasta" id="otp_pekerjaan" name="otp_pekerjaan" value="{{ $siswa->image_dokumen }}" disabled />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="status" name="status" value="1" class="btn-success btn-lg btn">Lolos</button>
                            <button type="submit" id="status" name="status" value="2" class="btn-danger btn-lg btn">Tidak Lolos</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection