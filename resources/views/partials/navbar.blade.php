<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="text-info m-0"><img src="{{asset('img/wedd.png')}}" alt="">Wedayyy</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="/" class="nav-item nav-link {{Request::is('/') ? 'active' : ''}}">Home</a>
            <a href="/about" class="nav-item nav-link {{Request::is('about') ? 'active' : ''}}">About</a>
            <a href="/service" class="nav-item nav-link {{Request::is('service') ? 'active' : ''}}">Service</a>
            <a href="/partner" class="nav-item nav-link {{Request::is('partner') ? 'active' : ''}}">Partner</a>
            <a href="/menu" class="nav-item nav-link {{Request::is('menu') ? 'active' : ''}}">Menu</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{Request::is('reservation') || Request::is('team') || Request::is('testimonial') || Request::is('comment') ? 'active' : ''}}" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="/reservation" class="dropdown-item {{Request::is('reservation') ? 'active' : ''}}">Reservation</a>
                    <a href="/team" class="dropdown-item {{Request::is('team') ? 'active' : ''}}">Our Team</a>
                    <a href="/testimonial" class="dropdown-item {{Request::is('testimonial') ? 'active' : ''}}">Testimonial</a>
                    @if (auth()->user())
                    <a href="/comment" class="dropdown-item {{Request::is('comment') ? 'active' : ''}}">Comment</a>
                    @endif
                </div>
            </div>
            <a href="/contact" class="nav-item nav-link {{Request::is('contact') ? 'active' : ''}}">Contact</a>
        </div>
        @if (auth()->user())
        <a href="/logout" class="btn btn-info text-white py-2 px-4">Logout</a>
        @else
        <a href="/login" class="btn btn-info text-white py-2 px-4">Login</a>
        @endif
    </div>
</nav>
<a href="https://wa.me/6289638724122" target="_blank">
    <img src="{{asset('img/wa.png')}}" alt="" width="80" class="img-fluid" style="position: fixed; top:65%; right:0; z-index: 100;">
</a>
@if ($message = Session::get('success'))
<div class=" text-center alert alert-info alert-dismissible fade show" role="alert" style="position: fixed; top:15%;z-index: 9; left:25%; right:25%;">
    {{$message}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif