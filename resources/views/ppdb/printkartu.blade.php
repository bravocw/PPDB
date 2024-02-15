<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Ujian Sekolah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .card {
            width: 600px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid black;

        }

        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            width: 120px;
            height: auto;
        }

        .school-info {
            text-align: center;
        }

        .info {
            display: flex;
            margin-top: 20px;
        }

        .foto-siswa img {
            width: 100px;
            height: 130px;
            margin-right: 20px;
        }

        .biodata-siswa {
            flex-grow: 1;
        }

        .ttd-kepsek img {
            width: 150px;
            height: auto;
            margin-top: 10px;
        }

        .ttd-kepsek {
            text-align: right;
            flex-grow: 1;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="header">
            <img src="{{ asset('assets/img/wk.png') }}" alt="Logo Sekolah" class="logo">
            <div class="school-info">
                <h2>KARTU PESERTA UJIAN</h2>
                <p>PENERIMAAN PESERTA DIDIK BARU</p>
                <p>SMP PUTRA PERINTIS</p>
                <p>TP 2023-2024</p>
            </div>
            <img src="{{ asset('assets/img/wk1.png') }}" alt="Logo Kemendikbud" class="logo">
        </div>
        <div class="info">
            <div class="foto-siswa">
                <img src="{{asset('assets/img/users/'.Auth::user()->image_profile)}}" alt="Foto Siswa">
            </div>
            <div class="biodata-siswa">
                <p><strong>Nama:</strong> {{ $item['s_namalengkap'] }}</p>
                <p><strong>Nomor Ujian:</strong> {{ $item['kode_daftar'] }}</p>
                <p><strong>Tempat, Tanggal lahir:</strong> {{ $item['s_ttl'] }}</p>
                <p><strong>Sekolah Asal :</strong> {{ $item['s_sklhlama'] }}</p>
            </div>
        </div>
        <div class="footer">
            <div class="ttd-kepsek">
                <p>Sukabumi, 20 Februari 2024</p>
                <p>Kepala Sekolah,</p>
                <img src="{{ asset('assets/img/ttd.png') }}" alt="Tanda Tangan Kepala Sekolah">
                <p><strong>Muhamad Dedi Iskandar.</strong></p>
            </div>
        </div>
    </div>
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