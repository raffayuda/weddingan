<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wedding</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/wedd.png')}}" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            @include('partials.navbar')
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                @foreach ($data as $item)    
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <div class="text-white animated slideInLeft">
                                <?= $item->content?>
                            </div>
                            <a href="/reservation" class="btn btn-info text-white py-sm-3 px-sm-5 me-3 animated slideInLeft">Order Now</a>
                            
                        </div>
                        <div class="col-lg-6 animated slideInRight text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/ring.png" alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    @foreach ($data2 as $item)    
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <?= $item->icon?>
                                <?= $item->content?>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            @foreach ($data3 as $item)    
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{asset('storage/images/'.$item->img1)}}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{asset('storage/images/'.$item->img2)}}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{asset('storage/images/'.$item->img4)}}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{asset('storage/images/'.$item->img3)}}">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <img src="img/wedd.png" alt="" width="50px"></i>Wedayyy</h1>
                        @foreach ($data3 as $item)
                            <?= $item->content?>
                        @endforeach
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-info px-3">
                                    <h1 class="flex-shrink-0 display-5 text-info mb-0" data-toggle="counter-up">15</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-info px-3">
                                    <h1 class="flex-shrink-0 display-5 text-info mb-0" data-toggle="counter-up">50</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Decoration</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-info text-white py-3 px-5 mt-2" href="/contact">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Wedding Menu</h5>
                    <h1 class="mb-5">Most Popular Wedding</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fas fa-2x fa-cogs text-info"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Dekorasi</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fas fa-utensils fa-2x text-info"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Katering</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fas fa-dollar-sign text-info fa-2x"></i>
                                <div class="ps-3">
                                    <small class="text-body">List Harga</small>
                                    <h6 class="mt-n1 mb-0">Paket</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                @foreach ($data4 as $item)    
                                <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="{{asset('storage/images/'.$item->img)}}" alt=""  style="width: 80px; height: 80px">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <a href="/showDekor/{{$item->id}}"><span>{{$item->title}}</span></a>
                                                    <span class="text-primary">
                                                        
                                                    <form class="d-inline-block" method="POST" action="/dekorLike/{{$item->id}}">
                                                        @csrf
                                                        <button type="submit" style="border: none; background: transparent;"><i class="fas fa-thumbs-up" style="font-size: 12px"></i></button>
                                                    </form>
                                                    <span>{{$item->suka}}</span>
                                                    <form class="d-inline-block" method="POST" action="/dekorDislike/{{$item->id}}">
                                                        @csrf
                                                        <button type="submit" style="border: none; background: transparent;"><i class="fas fa-thumbs-down" style="font-size: 12px"></i></button>
                                                    </form>
                                                    <span>{{$item->dislike}}</span>
                                                </span>
                                                </h5>
                                                <small class="fst-italic">{{$item->label}}</small>
                                            </div>
                                        </div>
                                </div>
                                @endforeach
                                <div class="mt-4">
                                    <a href="/allDekor">Lihat Semua</a>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                @foreach ($data5 as $item)    
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="{{asset('storage/images/'.$item->img)}}" alt=""  style="width: 80px; height: 80px">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <a href="/showCater/{{$item->id}}"><span>{{$item->title}}</span></a>
                                                <span class="text-primary">
                                                        
                                                    <form class="d-inline-block" method="POST" action="/caterLike/{{$item->id}}">
                                                        @csrf
                                                        <button type="submit" style="border: none; background: transparent;"><i class="fas fa-thumbs-up" style="font-size: 12px"></i></button>
                                                    </form>
                                                    <span>{{$item->suka}}</span>
                                                    <form class="d-inline-block" method="POST" action="/caterDislike/{{$item->id}}">
                                                        @csrf
                                                        <button type="submit" style="border: none; background: transparent;"><i class="fas fa-thumbs-down" style="font-size: 12px"></i></button>
                                                    </form>
                                                    <span>{{$item->dislike}}</span>
                                                </span>
                                            </h5>
                                            <small class="fst-italic">{{$item->label}}</small>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="mt-4">
                                <a href="/allCater">Lihat Semua</a>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                @foreach ($data6 as $item)    
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="{{asset('storage/images/'.$item->img)}}" alt=""  style="width: 80px; height: 80px">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <a href="/showPackage/{{$item->id}}"><span>{{$item->title}}</span></a>
                                                <span class="text-primary">
                                                        
                                                    <form class="d-inline-block" method="POST" action="/paketLike/{{$item->id}}">
                                                        @csrf
                                                        <button type="submit" style="border: none; background: transparent;"><i class="fas fa-thumbs-up" style="font-size: 12px"></i></button>
                                                    </form>
                                                    <span>{{$item->suka}}</span>
                                                    <form class="d-inline-block" method="POST" action="/paketDislike/{{$item->id}}">
                                                        @csrf
                                                        <button type="submit" style="border: none; background: transparent;"><i class="fas fa-thumbs-down" style="font-size: 12px"></i></button>
                                                    </form>
                                                    <span>{{$item->dislike}}</span>
                                                </span>
                                            </h5>
                                            <small class="fst-italic">{{$item->label}}</small>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="mt-4">
                                    <a href="/allPackage">Lihat Semua</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/RYjBh0boOFs?si=305Arr5XzOJjE8cL" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Pesan Untuk Dekorasi Pernikahan</h1>
                        <form action="{{route('reserAdmin.store')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Nama" name="nama">
                                        <label for="name">Nama</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" readonly value="{{auth()->user() ? auth()->user()->email : ''}}">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date">
                                        <input type="date" class="form-control datetimepicker-input" placeholder="Untuk Kapan" name="tanggal"/>
                                        <label for="datetime">Untuk Kapan</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="select1" name="paket">
                                            @foreach ($data6 as $item) 
                                            <option value="{{$item->title}}">{{$item->title}}</option>
                                            @endforeach
                                        </select>
                                        <label for="select1">Pilih Paket</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" name="deskripsi" id="message" style="height: 100px"></textarea>
                                        <label for="message">Pertanyaan Lain</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    @if (auth()->user())
                                    <button class="btn btn-info w-100 py-3" type="submit">Pesan Sekarang</button>
                                    @else
                                        <a href="/login" class="btn btn-info w-100 py-3">Login</a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Pro Team</h1>
                </div>
                <div class="row g-4">
                    @foreach ($data7 as $item)    
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{asset('storage/images/'.$item->img)}}" alt="" style="width: 250px; height: 250px;">
                            </div>
                            <h5 class="mb-0">{{$item->name}}</h5>
                            <small>{{$item->job}}</small>
                            <div class="d-flex justify-content-center mt-3">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($data8 as $item)    
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>{{$item->comment}}</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('storage/images/'.$item->img)}}" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">{{$item->name}}</h5>
                                <small>{{$item->profesi}}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        @include('partials.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-info btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>