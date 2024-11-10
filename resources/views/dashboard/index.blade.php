@extends('dashboard.layouts.main')
@section('content')
<div class="row">
    <div class="col-lg-6 mb-3">
        <div class="card">
            <div class="d-flex align-items-end row">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title text-primary">Comment <i class="fas fa-comments"></i></h5>
                  <p class="mb-4">
                    Total <span class="fw-bold">{{$comment}} Comments</span>
                  </p>
        
                  <a href="/testiAdmin" class="btn btn-sm btn-outline-primary">View Comments</a>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="col-lg-6 mb-3">
        <div class="card">
            <div class="d-flex align-items-end row">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title text-primary">Reservation <i class="fas fa-inbox"></i></h5>
                  <p class="mb-4">
                    Total <span class="fw-bold">{{$reservation}}</span> Reservations
                  </p>
        
                  <a href="/reserAdmin" class="btn btn-sm btn-outline-primary">View Reservation</a>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="d-flex align-items-end row">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title text-primary">Contact <i class="fas fa-address-book"></i></h5>
                  <p class="mb-4">
                    Total <span class="fw-bold">{{$contact}}</span> Messages
                  </p>
        
                  <a href="/contactAdmin" class="btn btn-sm btn-outline-primary">View Contacts</a>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="d-flex align-items-end row">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title text-primary">Customer <i class="fas fa-user"></i></h5>
                  <p class="mb-4">
                    Total <span class="fw-bold">{{$customer}}</span> Customers
                  </p>
        
                  <a href="/users" class="btn btn-sm btn-outline-primary">View Customers</a>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection