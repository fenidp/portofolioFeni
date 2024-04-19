<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DevFolio - Developer Portfolio Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="{{ asset('front') }}/img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('front') }}/lib/animate/animate.min.css" rel="stylesheet">
        <link href="{{ asset('front') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="{{ asset('front') }}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('front') }}/css/style.css" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">PortFen</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#service" class="nav-item nav-link">Service</a>
                        <a href="#experience" class="nav-item nav-link">Experience</a>
                        <a href="#review" class="nav-item nav-link">Review</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero" id="home">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-content">
                            <div class="hero-text">
                                <p>I'm</p>
                                <h1>{{ $data->nama }}</h1>
                                <h2></h2>
                                <div class="typed-text"> {{ $wd->nama }} , {{ $wdv->nama }}, {{ $wdv2->nama }}, {{ $wdv3->nama }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="{{ url('images/' . $data->foto) }}" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{ asset('front') }}/img/feni.JPG" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header text-left">
                                <p>Learn About Me</p>
                                <h2>10 Years Experience</h2>
                            </div>
                            @foreach($saya as $s)
                            <div class="about-text">
                                <p>
                                    {{ $s->resume }}
                                </p>
                            </div>
                            <p><strong>Nama: {{ $s->nama }} </strong></p>
                            <p><strong>Tanggal Lahir: {{ $s->tanggal }}</strong></p>
                            <p><strong>Email: {{ $s->email }}</strong></p>
                            <p><strong>Alamat:{{ $s->alamat }}</strong></p>
                            <p><strong>No Hp: {{ $s->no_hp }}</strong></p>
                            <p><strong>Pendidikan Terakhir:{{ $s->riwayatPendidikan }}</strong></p>
                            @endforeach
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        <!-- Service Start -->
        <div class="service" id="service">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>What I do</p>
                    <h2>Awesome Quality Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <div class="service-text">
                                <h3>{{ $wd->nama }}</h3>
                                <p>
                                    {{ $wd->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-laptop-code"></i>
                            </div>
                            <div class="service-text">
                                <h3>{{ $wdv->nama }}</h3>
                                <p>
                                    {{ $wdv->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fab fa-android"></i>
                            </div>
                            <div class="service-text">
                                <h3>{{ $wdv2->nama }}</h3>
                                <p>
                                    {{ $wdv2->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fab fa-apple"></i>
                            </div>
                            <div class="service-text">
                                <h3>{{ $wdv3->nama }}</h3>
                                <p>
                                    {{ $wdv3->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
         <!-- Experience Start -->
        <div class="experience" id="experience">
            <div class="container">
                <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>My Resume</p>
                    <h2>Working Experience</h2>
                </header>
                <div class="timeline">
                    @foreach($pengalaman as $index => $p)
                        @if($index % 2 == 0)
                        <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        @else
                        <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        @endif
        <div class="timeline-text">
            <div class="timeline-date">{{ $p->tahun }}</div>
            <h2>{{ $p->posisi }}</h2>
            <h4>{{ $p->namaKegiatan }}</h4>
            <p>
                {{ $p->deskripsi }}
            </p>
        </div>
    </div>
@endforeach
                </div>
            </div>
        </div>
        <!-- Job Experience End -->
        
        <!-- Testimonial Start -->
        <div class="testimonial wow fadeInUp" data-wow-delay="0.1s" id="review">
            <div class="container">
                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    @foreach ($review as $r)
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{ url('images/' . $r->foto)}}" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                {{$r->komentar}}
                            </p>
                            <h3>{{$r->nama}}</h3>
                            <h4>{{$r->pekerjaan}}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        
        
        <!-- Contact Start -->
        <div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form action="{{ route('frontend.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama">
        
                                        <!-- error message untuk nama -->
                                        @error('nama')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group"> 
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" placeholder="Masukkan email Anda">
        
                                        <!-- error message untuk email -->
                                        @error('id')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('pesan') is-invalid @enderror"
                                            name="pesan" value="{{ old('pesan') }}" placeholder="Masukkan pesan Anda">
        
                                        <!-- error message untuk pesan -->
                                        @error('id')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <h2>{{ $data->nama }}</h2>
                        <h3>{{ $data->alamat}}</h3>
                        <div class="footer-menu">
                            <p>{{ $data->no_hp }}</p>
                            <p>{{ $data->email }}</p>
                        </div>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved | Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        
        <!-- Back to top button -->
        <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        
        <!-- JavaScript Libraries -->
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('front') }}/lib/easing/easing.min.js"></script>
        <script src="{{ asset('front') }}/lib/wow/wow.min.js"></script>
        <script src="{{ asset('front') }}/lib/waypoints/waypoints.min.js"></script>
        <script src="{{ asset('front') }}/lib/typed/typed.min.js"></script>
        <script src="{{ asset('front') }}/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="{{ asset('front') }}/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="{{ asset('front') }}/lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="{{ asset('front') }}/mail/jqBootstrapValidation.min.js"></script>
        <script src="{{ asset('front') }}/mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('front') }}/js/main.js"></script>
    </body>
</html>
