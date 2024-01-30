<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukti Pendaftaran | {{ $item['id'] }} - {{ $item['s_namalengkap'] }} </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />

</head>
<style>
    * {
        font-family: sans-serif;
    }

    body {
        margin: 0;
        padding: 0;
    }

    .header h5 {
        font-weight: bold;
    }

    .header p {
        font-size: 14px !important;
    }

    p {
        line-height: 8px;
    }

    main #bab {
        background-color: rgb(161, 161, 161);
        margin-top: 20px;
        font-size: 14px !important;
        font-weight: bold;
    }

    main #subab {
        font-size: 14px !important;
        font-weight: bold;
    }

    #link {
        color: rgb(55, 44, 218)
    }

    .satu table,
    .dua p,
    .dua li {
        font-size: 12px;
    }

    .satu table th {
        font-weight: bold;
        text-transform: uppercase
    }

    .satu table tr {
        line-height: 15px;
    }

    .logo img {
        width: 80px;
    }
</style>

<body>
    <header class="d-flex justify-content-start align-items-center">
        <div class="logo">
            <img src="{{ asset('assets/img/wk.png') }}" alt="" class="" width="120px">
        </div>
        <div class="px-4 header judul">
            <h6>PANITIA PENERIMAAN PESERTA DIDIK BARU <br> SMA Nusantara Mandiri TP 2023-2024</h6>
            <p>Jl. ......</p>
            <p>Website: .... | Telepon : ....</p>
        </div>
    </header>
    <hr style="height: 2px; opacity:1;" color="black">
    <div class="bukti text-center">
        <h6><b>TANDA BUKTI PENDAFTARAN</b></h6>
        <H6>SMA Nusantara Mandiri TP 2023-2024</H6>
    </div>
    <main>
        <div class="satu">
            <h6 id="bab">I. BIODATA CALON PESERTA DIDIK</h6>
            <table cellspacing="0" cellpadding="4">

                <tr>
                    <th width="50%">tanggal daftar</th>
                    <td>:</td>
                    <td>{{ $item['created_at']->format('j F, Y') }}</td>
                </tr>
                <tr>
                    <th width="50%">nomor seleksi</th>
                    <td>:</td>
                    <td>{{ $item['kode_daftar'] }}</td>
                </tr>
                <tr>
                    <th width="50%">Nama lengkap</th>
                    <td>:</td>
                    <td>{{ $item['s_namalengkap'] }}</td>
                </tr>
                <tr>
                    <th width="50%">asal sekolah</th>
                    <td>:</td>
                    <td>{{ $item['s_sklhlama'] }}</td>
                </tr>
                <tr>
                    <th width="50%">Nama Ayah</th>
                    <td>:</td>
                    <td>{{ $item['otl_nama'] }}</td>
                </tr>
                <tr>
                    <th width="50%">Nama Ibu</th>
                    <td>:</td>
                    <td>{{ $item['otp_nama'] }}</td>
                </tr>

            </table>
        </div>
        <div class="dua">
            <h6 id="bab">II. JADWAL UJIAN</h6>
            <table cellspacing="0" cellpadding="4">

                <tr>
                    <th width="50%">Tanggal</th>
                    <td>:</td>
                    <td>5 Februari 2024</td>
                </tr>
                <tr>
                    <th width="50%">Jam</th>
                    <td>:</td>
                    <td>11.00 - 12.30 WIB</td>
                </tr>
                <tr>
                    <th width="50%">Tempat</th>
                    <td>:</td>
                    <td>Sekolah .....</td>
                </tr>
                <tr>
                    <th width="50%">Ruangan</th>
                    <td>:</td>
                    <td>Laboratorium Komputer</td>
                </tr>
            </table>
        </div>
        <div class="tiga">
            <h6 id="bab">III. INFORMASI DAN PERSYARATAN</h6>
            <h6 id="subab">A. Akun Anda</h6>
            <p>Cek secara berkala Website ini agar mendapatkan informasi terbaru.</p>
            <p>Simpan Bukti Pendaftaran ini guna administrasi di sekolah.</p>
            <h6 id="subab">B. Biaya Seleksi</h6>
            <p>Pembayaran uang seleksi sebesar Rp. 200.000 melalui transfer bank:</p>
            <p>Bank BNI: 1234567890 A.N SEKOLAH....</p>
        </div>
    </main>

    <script>
        window.print();

        // Menunggu pencetakan selesai
        window.onafterprint = function() {
            // Mengarahkan pengguna ke dashboard atau URL lainnya
            window.location.href = "{{ route('dashboard.setting') }}"; // Gantilah dengan URL dashboard yang sesuai
        };
    </script>
</body>

</html>