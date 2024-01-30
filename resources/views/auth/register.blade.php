@extends('auth.layout', ['title' => 'Register', 'page_heading' => 'Register'])

@section('content')

<body>
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('/assets/auth/images/bg_register.png');"></div>
        <div class="contents order-2 order-md-1">
            @if($konten == 'A')
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Sorry, <strong>SMP PUTRA PERINTIS</strong></h3><br>
                        <h5 class="mb-4">Sudah melakukan penutupan PPDB, terimakasih atas antusiasnya dalam mengikuti pendaftaran, sampai jumpa dilain waktu.</h5>
                        <input type="" value="PENDAFTARAN DITUTUP" class="btn btn-block btn-danger">
                        <p class="mb-4">anda akan diarahkan ke halaman utama dalam 5 detik.</p>
                    </div>
                </div>
            </div>
            <script>
                // Mengatur redirect setelah 15 detik
                setTimeout(function() {
                    window.location.href = "/"; // Ganti URL dengan URL tujuan Anda
                }, 10000); // 15000 milidetik = 15 detik
            </script>
            @else
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Register to <strong>SMP PUTRA PERINTIS</strong></h3>
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
                        <form action="{{ route('store') }}" method="post">
                            @csrf
                            <div class="form-group first">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Aditya Mahendra" id="nama" name="nama">
                            </div>
                            <div class="form-group first">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" placeholder="your-email@gmail.com" id="email" name="email">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Your Password" id="password" name="password">
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <span class="ml-auto"><a href="/login" class="forgot-pass">Sudah Punya Akun</a></span>
                            </div>

                            <input type="submit" value="Log In" class="btn btn-block btn-primary">

                        </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    @endsection