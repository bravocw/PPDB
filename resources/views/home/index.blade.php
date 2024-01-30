@extends('home.layout')

@section('content')
<!-- Banner Section Start -->
<section class="banner-style-4 banner-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-xl-6 col-lg-6">
                <div class="banner-content ">
                    <span class="subheading">Penerimaan Peserta Didik Baru</span>
                    <h1>SMP PUTRA PERINTIS</h1>
                    <p class="mb-40"> Segera daftar ke SMP PUTRA PERINTIS Demi masa depan yang cerah dikemudian hari.</p>

                    <div class="btn-container">
                        <a href="{{route('register')}}" class="btn btn-main rounded">Daftar</a>
                        <a href="{{route('login')}}" class="btn btn-white rounded ms-2">Login</a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6 col-lg-6">
                <div class="banner-img-round mt-5 mt-lg-0 ps-5">
                    <img src="http://pxelcode.com/tf-html/edumel-demo/edumel/assets/images/banner/banner_img.png" alt="" class="img-fluid">
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
<!-- Banner Section End -->

<!-- Counter Section start -->
<section class="counter-section4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 counter-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item mb-5 mb-lg-0">
                            <div class="count">
                                <span class="counter h2">2000</span><span>+</span>
                            </div>
                            <p>Siswa</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item mb-5 mb-lg-0">
                            <div class="count">
                                <span class="counter h2">1200</span>
                            </div>
                            <p>Pengajar</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item mb-5 mb-lg-0">
                            <div class="count">
                                <span class="counter h2">2256</span>
                            </div>
                            <p>Tendik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- COunter Section End -->

<!--  Course style 1 -->

<section class="course-wrapper section-padding" id="alur">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-heading mb-70 text-center">
                    <h2 class="font-lg">Tahapan PPDB</h2>
                    <p>Tahapan Penerimaan Peserta Didik Baru (PPDB) Tahun Ajaran 2023/2024 Provinsi Riau.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-lg-center">

            <img src="{{asset('/assets/img/tahapan.png')}}" alt="" class="img-fluid">

            <!-- COURSE END -->
        </div>
    </div>
</section>

<!--  Course style 1 End -->

<!--  Course category -->
<section class="course-category-3 section-padding">
    <div class="container">
        <div class="row mb-70 justify-content-center">
            <div class="col-xl-8">
                <div class="section-heading text-center">
                    <h2 class="font-lg">Organisasi dan Ekstrakulikuler</h2>
                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl col-lg-4 col-sm-6">
                <div class="single-course-category style-3 bg-1">
                    <div class="course-cat-icon">
                        <img src="http://pxelcode.com/tf-html/edumel-demo/edumel/assets/images/icon/icon1.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Data Science & Analytics</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl col-lg-4 col-sm-6">
                <div class="single-course-category style-3 bg-2">
                    <div class="course-cat-icon">
                        <img src="http://pxelcode.com/tf-html/edumel-demo/edumel/assets/images/icon/icon2.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Artificial Intellegence</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl col-lg-4 col-sm-6">
                <div class="single-course-category style-3 bg-3">
                    <div class="course-cat-icon">
                        <img src="assets/images/icon/icon3.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Algebra Math calculation</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl col-lg-4 col-sm-6">
                <div class="single-course-category style-3 bg-4">
                    <div class="course-cat-icon">
                        <img src="http://pxelcode.com/tf-html/edumel-demo/edumel/assets/images/icon/icon4.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Web Development</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-xl col-lg-4 col-sm-6">
                <div class="single-course-category style-3 bg-5">
                    <div class="course-cat-icon">
                        <img src="http://pxelcode.com/tf-html/edumel-demo/edumel/assets/images/icon/icon6.png" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="#">Digital Marketing & SEO</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Course category End -->
<!--  Course style 1 -->

<section class="course-wrapper section-padding  bg-gray" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-heading mb-70 text-center">
                    <h2 class="font-lg">Berita Terbaru</h2>
                    <p>Discover Your Perfect Program In Our Courses.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-lg-center">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="http://pxelcode.com/tf-html/edumel-demo/edumel/assets/images/course/img_01.jpg" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>
                        <h3 class="course-title mb-20"> <a href="#">SQL-Data Analysis: Crash Course</a> </h3>
                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COURSE END -->

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="http://pxelcode.com/tf-html/edumel-demo/edumel/assets/images/course/img_05.jpg" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>
                        <h3 class="course-title mb-20"> <a href="#">Learn How to Start an Amazon FBA Store</a> </h3>
                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COURSE END -->

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="http://pxelcode.com/tf-html/edumel-demo/edumel/assets/images/course/img_02.jpg" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>

                        <h3 class="course-title mb-20"> <a href="#">Emotional Intelligence at Work: Learn Emotions</a> </h3>

                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COURSE END -->

            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="course-grid tooltip-style bg-white hover-shadow">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="http://pxelcode.com/tf-html/edumel-demo/edumel/assets/images/course/img_03.jpg" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="rating mb-10">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            <span>3.9 (30 reviews)</span>
                        </div>

                        <h3 class="course-title mb-20"> <a href="#">Competitive Strategy law & Organization </a> </h3>

                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                            <span class="duration"><i class="far fa-clock me-2"></i>6.5 hr</span>
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>26 Lessons</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COURSE END -->
        </div>
    </div>
</section>

<!--  Course style 1 End -->

<!-- CTA Sidebar start -->
<section class="cta-5 mb--120 bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="cta-inner4">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-img mb-4 mb-lg-0">
                                <img src="{{ asset('assets/img/wk.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="cta-content ps-lg-4">
                                <span class="subheading mb-10">Not sure where to start?</span>
                                <h2 class="mb-20"> Want to know Special Offers & Updates of new courses?</h2>
                                <a href="#" class="btn btn-main rounded"> Join NOw</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Sidebar end -->
@endsection