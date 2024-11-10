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
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Wedding Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-info fw-normal">Wedding Menu</h5>
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
                                @foreach ($data as $item)    
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
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                @foreach ($data2 as $item)    
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
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                @foreach ($data3 as $item)    
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        

        <!-- Footer Start -->
        @include('partials.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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