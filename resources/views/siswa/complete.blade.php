@extends('siswa.layout')

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
                        {{-- {{ route('print',$ppdb->nodaftar) }} --}}
                        {{-- {{ route('store') }} --}}
                        <h4 class="card-title">Lengkapi Data Diri Anda!</h4>
                        <form method="POST" action="{{ route('lengkap') }}" enctype="multipart/form-data">
                            @csrf
                            <p class="card-description">
                                Personal info
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="{{ Auth::user()->nama }}" id="s_namalengkap" name="s_namalengkap" value="{{ Auth::user()->nama }}" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Panggilan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Budi" id="s_namapanggilan" name="s_namapanggilan" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <select name="s_jk" class="form-control">
                                                <option name="s_jk" value="Laki - Laki">Laki - Laki</option>
                                                <option name="s_jk" value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" placeholder="Pekanbaru, 04 Juli 2008" id="s_ttl" name="s_ttl" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <select name="s_agama" class="form-control">
                                                <option name="s_agama" value="Islam">Islam</option>
                                                <option name="s_agama" value="Kristen Protestan">Kristen Protestan</option>
                                                <option name="s_agama" value="Kristen Katolik">Kristen Katolik</option>
                                                <option name="s_agama" value="Hindu">Hindu</option>
                                                <option name="s_agama" value="Buddha">Buddha</option>
                                                <option name="s_agama" value="Khonghucu">Khonghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Tempat Tinggal</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" placeholder="Jalan mangga No 17, Pekanbaru Riau" id="s_ttinggal" name="s_ttinggal" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Asal Sekolah</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" placeholder="SMP 5 PEKANBARU" id="s_sklhlama" name="s_sklhlama" />
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
                                            <input type="text" class="form-control" placeholder="Antony Hermawan" id="otl_nama" name="otl_nama" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Pekanbaru, 5 Juni 1989" id="otl_ttl" name="otl_ttl" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Karyawan Swasta" id="otl_pekerjaan" name="otl_pekerjaan" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pendidikan</label>
                                        <div class="col-sm-9">
                                            <select name="otl_pendidikan" class="form-control">
                                                <option name="otl_pendidikan" value="S3">S3</option>
                                                <option name="otl_pendidikan" value="S2">S2</option>
                                                <option name="otl_pendidikan" value="S1">S1</option>
                                                <option name="otl_pendidikan" value="SMA">SMA</option>
                                                <option name="otl_pendidikan" value="SMP">SMP</option>
                                                <option name="otl_pendidikan" value="SD">SD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <select name="otl_agama" class="form-control">
                                                <option name="otl_agama" value="Islam">Islam</option>
                                                <option name="otl_agama" value="Kristen Protestan">Kristen Protestan</option>
                                                <option name="otl_agama" value="Kristen Katolik">Kristen Katolik</option>
                                                <option name="otl_agama" value="Hindu">Hindu</option>
                                                <option name="otl_agama" value="Buddha">Buddha</option>
                                                <option name="otl_agama" value="Khonghucu">Khonghucu</option>
                                            </select>
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
                                            <input type="text" class="form-control" placeholder="Antony Hermawan" id="otp_nama" name="otp_nama" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Pekanbaru, 5 Juni 1989" id="otp_ttl" name="otp_ttl" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Karyawan Swasta" id="otp_pekerjaan" name="otp_pekerjaan" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pendidikan</label>
                                        <div class="col-sm-9">
                                            <select name="otp_pendidikan" class="form-control">
                                                <option name="otp_pendidikan" value="S3">S3</option>
                                                <option name="otp_pendidikan" value="S2">S2</option>
                                                <option name="otp_pendidikan" value="S1">S1</option>
                                                <option name="otp_pendidikan" value="SMA">SMA</option>
                                                <option name="otp_pendidikan" value="SMP">SMP</option>
                                                <option name="otp_pendidikan" value="SD">SD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <select name="otp_agama" class="form-control">
                                                <option name="otp_agama" value="Islam">Islam</option>
                                                <option name="otp_agama" value="Kristen Protestan">Kristen Protestan</option>
                                                <option name="otp_agama" value="Kristen Katolik">Kristen Katolik</option>
                                                <option name="otp_agama" value="Hindu">Hindu</option>
                                                <option name="otp_agama" value="Buddha">Buddha</option>
                                                <option name="otp_agama" value="Khonghucu">Khonghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Upload File Pendukung</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" id="image_dokumen" name="image_dokumen" class="form-control file-upload-info" placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <button type="submit" id="contactus-submit" class="btn-success btn-lg btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection